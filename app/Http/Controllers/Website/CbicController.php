<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shraddhanjali;

class CbicController extends Controller
{
    public function shrdhanjali()
    {
        $senior= Shraddhanjali::all();
        return view('Dghrd.website.cbic.shrdhanjali',compact('senior'));
    }
}
