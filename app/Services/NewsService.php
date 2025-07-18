<?php

namespace App\Services;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class NewsService
{
    public function getAllNewsExceptOneId(int $id, int $amount = 4): Collection
    {
        // return only 4 data
        $news = News::where('id', '!=', $id)->take($amount)->get();
        return $news;
    }

    public function getFirstNews(): ?News
    {
        $news = News::first();

        return $news;
    }

    public function getNewsById(int $id): ?News
    {
        $news = News::findOrFail($id);

        return $news;
    }

    public function formatTimestamp(News $news): string
    {
        // date formatting
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $news->created_at);
        // Set the locale to Indonesian
        Carbon::setLocale('id');
        // Format the date
        return $date->translatedFormat('l, j F Y');
    }
}
