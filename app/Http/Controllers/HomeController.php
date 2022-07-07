<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends GenericController
{
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
        return view('resort.resort_page');
    }

    public function activitiesPage()
    {
        $this->setPageTitle('activities', '');
        return view('activities.activities_page');
    }

    public function barAndRestaurantPage()
    {
        $this->setPageTitle('barAndRestaurant', '');
        return view('bar_and_restaurant.bar_and_restaurant');
    }

    public function contactUsPage()
    {
        $this->setPageTitle('contactUs', '');
        return view('contact_us.contact_us_page');
    }
}
