<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Traits\VillaUtilityTrait;

use App\Http\Controllers\Traits\VillaUtilityTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends GenericController
{
    // use VillaUtilityTrait;

    use VillaUtilityTrait;

    public function landingPage()
    {
        $this->setPageTitle('home', '');
        return view('landing.home');
    }

    public function aboutUsPage()
    {
        $this->setPageTitle('about_us', '');
        return view('about_us.about_us_page');
    }

    public function resortPage()
    {
        $this->setPageTitle('resort', '');
        $arrVillas = $this->getAllVillas();
        return view('resort.resort_page', compact('arrVillas'));
    }

    public function activitiesPage()
    {
        $this->setPageTitle('activities', '');
        return view('activities.activities_page');
    }

    public function barAndRestaurantPage()
    {
        // $this->setPageTitle('barAndRestaurant', '');
        $this->setPageTitle('resort', '');
        return view('bar_and_restaurant.bar_and_restaurant');
    }

    public function karaokePage()
    {
        // $this->setPageTitle('karaoke', '');
        $this->setPageTitle('resort', '');
        return view('karaoke.karaoke_page');
    }

    public function villaDetail($villaId)
    {
        $this->setPageTitle('resort', 'villa detail');

        $arrVillas = $this->getAllVillas();
        $collectVillas = collect($arrVillas);

        $selectedVilla = $collectVillas->where('id', $villaId)->first();

        // dd($selectedVilla);


        return view('villa.villa_details', compact('selectedVilla'));
    }

    public function promotion()
    {
        $this->setPageTitle('promotion', '');
        return view('promotion.promotion_page');
    }







}
