<?php

namespace App\Observers;

use App\Models\PdfAnggaran;
use Illuminate\Support\Facades\Storage;

class PdfAnggaranObserver
{
    /**
     * Handle the PdfAnggaran "created" event.
     */
    public function created(PdfAnggaran $pdfAnggaran): void
    {
        //
    }

    /**
     * Handle the PdfAnggaran "updated" event.
     */
    public function updated(PdfAnggaran $pdfAnggaran): void
    {
        if ($pdfAnggaran->isDirty('file_path')) {
            Storage::disk('public')->delete($pdfAnggaran->getOriginal('file_path'));
        }
    }

    /**
     * Handle the PdfAnggaran "deleted" event.
     */
    public function deleted(PdfAnggaran $pdfAnggaran): void
    {
        if (!is_null($pdfAnggaran->file_path)) {
            Storage::disk('public')->delete($pdfAnggaran->file_path);
        }
    }

    /**
     * Handle the PdfAnggaran "restored" event.
     */
    public function restored(PdfAnggaran $pdfAnggaran): void
    {
        //
    }

    /**
     * Handle the PdfAnggaran "force deleted" event.
     */
    public function forceDeleted(PdfAnggaran $pdfAnggaran): void
    {
        //
    }
}
