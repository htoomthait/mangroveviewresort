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
            $imageCount = count($galleryImages->thumbnail_images);
            $imageArrayIndexes = [];

            for($i = 0; $i <= $imageCount -1; $i++){
                array_push($imageArrayIndexes, $i);
            }

            shuffle($imageArrayIndexes);

            $shuffledThumbnails = [];
            $shuffledImages = [];

            foreach($imageArrayIndexes as $imageIndex){
                array_push($shuffledThumbnails, $galleryImages->thumbnail_images[$imageIndex]);
                array_push($shuffledImages, $galleryImages->images[$imageIndex]);
            }

            $galleryImages->thumbnail_images = $shuffledThumbnails;
            $galleryImages->images = $shuffledImages;




            // dd($galleryImages);


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
                'name' => 'some random images',
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
