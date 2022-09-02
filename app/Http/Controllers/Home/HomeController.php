<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function cotactUs()
    {
        return view('home.contact-us');
    }
    public function teacher()
    {
        return view('home.teacher');
    }
}
