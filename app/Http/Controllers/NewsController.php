<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Services\NewsService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $newsService;

    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }
    public function redirectToNews()
    {
        $news = $this->newsService->getFirstNews();

        if ($news == null) {
            return redirect()->route('index')->with('error', 'Tidak Ada Berita');
        }

        return redirect()->route('berita.show', ['id' => $news->id]);
    }

    public function show($id)
    {
        // Validate the ID parameter
        if (!is_numeric($id) || intval($id) != $id) {
            throw new \InvalidArgumentException('The id parameter must be an integer.');
        }

        $getNewsById = $this->newsService->getNewsById($id);
        $newsExceptOne = $this->newsService->getAllNewsExceptOneId($getNewsById->id, 10);
        $formattedTime = $this->newsService->formatTimestamp($getNewsById);

        $news = [
            'getNewsById' => $getNewsById,
            'newsExceptOne' => $newsExceptOne,
            'formattedTime' => $formattedTime
        ];

        return view('berita', ['style' => 'berita', 'news' => $news]);
    }
}
