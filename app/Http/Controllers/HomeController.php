<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function landingPage()
    {
        return view('landing.home');
    }

    public function aboutUsPage()
    {
        return view('about_us.about_us_page');
    }

    public function resortPage()
    {
        return view('resort.resort_page');
    }

    public function activitiesPage()
    {
        return view('activities.activities_page');
    }

    public function barAndRestaurantPage()
    {
        return view('bar_and_restaurant.bar_and_restaurant');
    }

    public function contactUsPage()
    {
        return view('contact_us.contact_us_page');
    }
}
