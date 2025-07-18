<?php

namespace App\Http\Controllers;

use App\DTOs\ServiceDependencies;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{
    protected $financeService;
    protected $newsService;
    protected $documentService;
    protected $galeryService;

    public function __construct(ServiceDependencies $serviceDependencies)
    {
        $this->financeService = $serviceDependencies->financeService;
        $this->newsService = $serviceDependencies->newsService;
        $this->documentService = $serviceDependencies->documentService;
        $this->galeryService = $serviceDependencies->galeryService;
    }

    public function showIndexPage()
    {
        // query for retrieving news
        $news = [];
        $firstNews = $this->newsService->getFirstNews();
        if ($firstNews != null) {
            $news['firstNews'] = $firstNews;
            $news['allNewsExceptOne'] = $this->newsService->getAllNewsExceptOneId($firstNews->id);
        }

        // query for retrieving budget data 
        $jumlahAnggaran = [];
        $jumlahAnggaran['2023'] = $this->financeService->calculateJumlahAnggaran(
            $this->financeService->getDataAnggaran(2023)
        );
        $jumlahAnggaran['2024'] = $this->financeService->calculateJumlahAnggaran(
            $this->financeService->getDataAnggaran(2024)
        );

        // query for retrieving galery 
        $galeries = $this->galeryService->getGaleries(6);

        return view('index', ['style' => 'index', 'news' => $news, 'jumlahAnggaran' => $jumlahAnggaran, 'galeries' => $galeries]);
    }
}
