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
}
