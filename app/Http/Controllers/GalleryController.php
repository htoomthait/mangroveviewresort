<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends GenericController
{
    public function showGalleryPage()
    {
        $this->setPageTitle('resort', '');

        // $galleryImages =Storage::url('galleryData.json');
        // dd(Storage::get($galleryImages));
        // $arrGalleryImages = json_decode($galleryImages, true);

        // dd($arrGalleryImages);

        return view('gallery.gallery_page');
    }
}
