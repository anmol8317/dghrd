<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function cbic(){
        return view('Dghrd.website.cbic');
    }
    public function about(){
        return view('Dghrd.website.who-we-are');
    }
    public function contact(){
        return view('Dghrd.website.contact-us');
    }
    public function citizen(){
        return view('Dghrd.website.citizen');
    }

}
