<?php

namespace App\DTOs;

use App\Services\DocumentService;
use App\Services\FinanceService;
use App\Services\NewsService;
use App\Services\GaleryService;

class ServiceDependencies
{
    public $financeService;
    public $documentService;
    public $newsService;
    public $galeryService;

    public function __construct(FinanceService $financeService, NewsService $newsService, DocumentService $documentService, GaleryService $galeryService)
    {
        $this->financeService = $financeService;
        $this->documentService = $documentService;
        $this->newsService = $newsService;
        $this->galeryService = $galeryService;
    }
}
