<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends GenericController
{
    public function showGalleryPage()
    {
        $this->setPageTitle('resort', '');

        $galleryImages = Storage::disk('local')->get('/data/galleryData.json');
        $arrGalleryImages = json_decode($galleryImages, true);


        return view('gallery.gallery_page');
    }

    public function getGalleryImageByName(Request $request)
    {

        $galleryName = $request->input('gallery_name');

        $jsnGalleryImages = Storage::disk('local')->get('/data/galleryData.json');

        $arrGalleryImages = json_decode($jsnGalleryImages);

        $collGalleryImages = collect($arrGalleryImages);

        $galleryImages = [];
        $response = [];

        if($galleryName !== 'all'){
            $galleryImages = $collGalleryImages->where('name', $galleryName)->first();


            if(!empty($galleryImages)){
                $response = [
                    'status' => 'success',
                    'message' => 'Your gallery images can be queried successfully!',
                    'data' => $galleryImages
                ];
            }
            else{
                $response = [
                    'status' => 'fail',
                    'message' => 'Your gallery images can be not be queried successfully!',
                    'data' => []
                ];
            }


        }
        else{
            $galleryImages = $collGalleryImages->all();

            $arrayToRand = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
            $randomizedGalleryImages = [
                'thumbnail_images' => [],
                'images' => []
            ];

            foreach($galleryImages as $gImage){
                $randomIndexes = array_rand($arrayToRand, 3);

                for($i = 0; $i <count($randomIndexes); $i++){
                    $indexToExtract = $randomIndexes[$i];
                    array_push($randomizedGalleryImages['thumbnail_images'], $gImage->thumbnail_images[$indexToExtract]);
                }

                for($j = 0; $j <count($randomIndexes); $j++){
                    $indexToExtract = $randomIndexes[$j];
                    array_push($randomizedGalleryImages['images'], $gImage->images[$indexToExtract]);
                }



            }

            $response = [
                'status' => 'success',
                'message' => 'Your gallery images can be queried successfully!',
                'data' => $randomizedGalleryImages
            ];
        }





        return response()->json($response, 200);

    }

}
