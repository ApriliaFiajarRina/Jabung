<?php

namespace App\Services;

use App\Models\Finance;
use Illuminate\Support\Collection;

class FinanceService
{
    public function getDataAnggaran(int $year): array
    {
        $dataAnggaran = [];

        // get all data that in Pendapatan Desa category
        $dataAnggaran['pendapatanDesa'] = Finance::where("year", $year)->whereHas('category', function ($query) {
            $query->where("name", "Pendapatan Desa");
        })->get();

        // get all data that in Belanja Desa category
        $dataAnggaran['belanjaDesa'] = Finance::where("year", $year)->whereHas('category', function ($query) {
            $query->where("name", "Belanja Desa");
        })->get();

        // get all data that in Pembiayaan Desa category
        $dataAnggaran['pembiayaanDesa'] = Finance::where("year", $year)->whereHas('category', function ($query) {
            $query->where("name", "Pembiayaan Desa");
        })->get();

        // get all data that in SILPA Desa category
        $dataAnggaran['silpaDesa'] = Finance::where("year", $year)->whereHas('category', function ($query) {
            $query->where("name", "SILPA Desa");
        })->get();

        return $dataAnggaran;
    }
    public function calculateJumlahAnggaran(array $dataAnggaran): array
    {
        $jumlahAnggaran = [];

        // calculate the sum of all data pendapatan desa
        $jumlahAnggaran['pendapatanDesa'] = $dataAnggaran['pendapatanDesa']->sum('amount');
        // calculate the sum of all data belanja desa
        $jumlahAnggaran['belanjaDesa'] = $dataAnggaran['belanjaDesa']->sum('amount');
        // calculate the sum of all data pembiayaan desa
        $jumlahAnggaran['pembiayaanDesa'] = $dataAnggaran['pembiayaanDesa']->sum('amount');
        // calculate the sum of all data SILPA desa
        $jumlahAnggaran['silpaDesa'] = $dataAnggaran['silpaDesa']->sum('amount');

        return $jumlahAnggaran;
    }
    public function getAvailableYear(): Collection
    {
        return Finance::select('year')->distinct()->pluck('year');
    }
}
