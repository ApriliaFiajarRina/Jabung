<?php

namespace App\Services;

use App\Models\Galery;
use Illuminate\Database\Eloquent\Collection;

class GaleryService
{
    // Get picture in the gallery, with a limit
    public function getGaleries($amount = 20): Collection
    {
        $galeries = Galery::all()->take($amount);
        return $galeries;
    }
}
