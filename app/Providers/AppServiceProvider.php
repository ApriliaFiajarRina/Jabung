<?php

namespace App\Providers;

use App\DTOs\ServiceDependencies;
use App\Models\Galery;
use App\Models\News;
use App\Models\PDFAnggaran;
use App\Models\PdfFile;
use App\Observers\GaleryObserver;
use App\Observers\NewsObserver;
use App\Observers\PdfAnggaranObserver;
use App\Observers\PdfObserver;
use App\Services\DocumentService;
use App\Services\FinanceService;
use App\Services\GaleryService;
use App\Services\NewsService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ServiceDependencies::class, function ($app) {
            return new ServiceDependencies(
                $app->make(FinanceService::class),
                $app->make(NewsService::class),
                $app->make(DocumentService::class),
                $app->make(GaleryService::class),
            );
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        News::observe(NewsObserver::class);
        Galery::observe(GaleryObserver::class);
        PDFAnggaran::observe(PdfAnggaranObserver::class);
    }
}
