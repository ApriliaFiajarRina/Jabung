<?php

namespace App\Http\Controllers;

use App\Services\GaleryService;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    protected $galeryService;

    public function __construct(GaleryService $galeryService)
    {
        $this->galeryService = $galeryService;
    }

    public function showGaleryPage()
    {
        $galery = $this->galeryService->getGaleries();
        return view('galery', ['style' => 'galery', 'galery' => $galery]);
    }
}
