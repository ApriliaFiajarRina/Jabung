<?php

namespace App\Observers;

use App\Models\Galery;
use Illuminate\Support\Facades\Storage;

class GaleryObserver
{
    /**
     * Handle the Galery "created" event.
     */
    public function created(Galery $galery): void
    {
        //
    }

    /**
     * Handle the Galery "updated" event.
     */
    public function updated(Galery $galery): void
    {
        if ($galery->isDirty('photo_path')) {
            Storage::disk('public')->delete($galery->getOriginal('photo_path'));
        }
    }

    /**
     * Handle the Galery "deleted" event.
     */
    public function deleted(Galery $galery): void
    {
        if (!is_null($galery->photo_path)) {
            Storage::disk('public')->delete($galery->photo_path);
        }
    }

    /**
     * Handle the Galery "restored" event.
     */
    public function restored(Galery $galery): void
    {
        //
    }

    /**
     * Handle the Galery "force deleted" event.
     */
    public function forceDeleted(Galery $galery): void
    {
        //
    }
}
