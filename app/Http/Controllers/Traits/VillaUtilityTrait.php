<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Support\Facades\Storage;

trait VillaUtilityTrait
{



    public function getAllVillas()
    {
        $jsVillas = Storage::disk('local')->get('/data/villas.json');
        $arrVillas = json_decode($jsVillas, true);

        // sort desc by id
        usort($arrVillas, function ($a, $b) {
            return $b['id'] <=> $a['id'];
        });

        return $arrVillas;
    }
}
