<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('about');
    }
    
    public function contact()
    {
        return view('contact');
    }
    
    public function login()
    {
        return view('login');
    }
    
    public function home()
    {
        return view('home');
    }
    
    public function welcome(){
        return view('welcome');
    }
    
    public function vehicles(){
        return view('vehicles');
    }

    public function locations(){
        return view('locations');
    }
    
    public function faq(){
        return view('faq');
    }
    
    public function terms(){
        return view('terms');
    }

    public function privacy(){
        return view('privacy');
    }

    public function refund(){
        return view('refund');
    }

    public function thankyou(){
        return view('booking.thankyou');
    }
    
    public function create(){
        return view('booking.create');
    }
    

    
}
