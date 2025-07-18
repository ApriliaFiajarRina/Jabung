<?php

namespace App\Http\Controllers;

use App\Models\PDFAnggaran;
use App\Services\DocumentService;
use App\Services\FinanceService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    protected $financeService;
    protected $documentService;

    public function __construct(FinanceService $financeService, DocumentService $documentService)
    {
        $this->financeService = $financeService;
        $this->documentService = $documentService;
    }

    public function redirectToAnggaran()
    {
        return redirect()->route('anggaran.show', ['year' => 2024]);
    }

    public function viewAnggaranYearly($year)
    {
        if (!is_numeric($year) || intval($year) != $year) {
            throw new \InvalidArgumentException('The year parameter must be an integer.');
        }
        // get the data anggaran, sum of anggaran & list of year from the data
        $dataAnggaran = $this->financeService->getDataAnggaran($year);
        $sumAnggaran = $this->financeService->calculateJumlahAnggaran($dataAnggaran);
        $listAnggaranYear = $this->financeService->getAvailableYear();

        // store all data related to anggaran into an array
        $anggaran = [
            'dataAnggaran' => $dataAnggaran,
            'sumAnggaran' => $sumAnggaran,
            'listAnggaranYear' => $listAnggaranYear,
            'year' => $year
        ];

        // get the pendapatan documents
        $docs = PDFAnggaran::all();

        return view('anggaran', ['style' => 'anggaran', 'anggaran' => $anggaran, 'docs' => $docs]);
    }
}
