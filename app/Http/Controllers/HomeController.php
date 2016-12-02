<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHome () {
    	return view('home');
    }

    public function getLogin () {
    	return view('login');
    }

    public function getStudent () {
    	return  view('student');
    }

    public function getBegeleider () {
    	return view('begeleider');
    }
}
