<?php

namespace App\Http\Controllers\Traits;

trait VillaUtilityTrait
{



    public function getAllVillas()
    {
        $villasJsonFilePath = __DIR__."/villas.json";
        $jsVillas = file_get_contents($villasJsonFilePath);

        $arrVillas = json_decode($jsVillas, true);

        return $arrVillas;

    }
}
