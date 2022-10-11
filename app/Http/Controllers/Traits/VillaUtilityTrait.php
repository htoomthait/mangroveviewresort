<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Support\Facades\Storage;

trait VillaUtilityTrait
{



    public function getAllVillas()
    {
        $jsVillas = Storage::disk('local')->get('/data/villas.json');
        $arrVillas = json_decode($jsVillas, true);

        return $arrVillas;

    }
}
