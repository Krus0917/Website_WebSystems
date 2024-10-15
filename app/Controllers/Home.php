<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'=>'Welcome Page',
            'pageH1' =>'This is the Welcome Page',
        ];

        return view('welcome_message');
    }

    public function landing(): string
    {
        return view('landing');
    }

    public function about(): string
    {
        return view('about');
    }

    public function catalog(): string
    {
        return view('product_catalog');
    }

    public function resume(): string
    {
        return view('resume');
    }

    public function services(): string
    {
        return view('services');
    }

    public function portfolio(): string
    {
        return view('portfolio');
    }
    public function portfolio_details(): string
    {
        return view('portfolio_details');
    }

    public function contact(): string
    {
        return view('contact');
    }
}
