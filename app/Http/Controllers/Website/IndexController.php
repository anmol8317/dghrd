<?php

namespace App\Http\Controllers\website;

use App\Models\Slider;
use App\Models\Gallery;
use App\Models\MiniSlider;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;

class IndexController extends Controller
{
    public function index(){
        $slider = Slider::all();
        $mini= MiniSlider::all();
        $gallery= Gallery::all();
        $notification= Notification::all();
        return view('Dghrd.website.index',compact('slider','mini','gallery','notification'));
    }
    public function gallery(){
        $gallery= Gallery::all();

        return view('Dghrd.website.photo-gallery',compact('gallery'));
    }
    public function notification(){
        $notification= Notification::all();

        return view('Dghrd.website.notification',compact('notification'));
    }

    public function infrastructure_projects(){
        $senior= Project::all();

        return view('Dghrd.website.infrastructure_projects',compact('senior'));
    }

    public function manuals(){


        return view('Dghrd.website.manual');
    }

    public function suggestion(){


        return view('Dghrd.website.suggestion');
    }
}
