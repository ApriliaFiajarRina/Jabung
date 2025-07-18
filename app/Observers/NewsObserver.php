<?php

namespace App\Observers;

use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;



class NewsObserver
{
    /**
     * Handle the News "created" event.
     */
    public function created(News $news): void
    {
        //
    }

    /**
     * Handle the News "updated" event.
     */
    public function updated(News $news): void
    {
        if ($news->isDirty('photo_path')) {
            Storage::disk('public')->delete($news->getOriginal('photo_path'));
        }
    }

    /**
     * Handle the News "deleted" event.
     */
    public function deleted(News $news): void
    {
        if (!is_null($news->photo_path)) {
            Storage::disk('public')->delete($news->photo_path);
        }
    }

    /**
     * Handle the News "restored" event.
     */
    public function restored(News $news): void
    {
        //
    }

    /**
     * Handle the News "force deleted" event.
     */
    public function forceDeleted(News $news): void
    {
        //
    }
}
