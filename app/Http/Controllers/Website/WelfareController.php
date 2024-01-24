<?php

namespace App\Http\Controllers\website;

use App\Models\CommanFacility;
use App\Models\WelfareManual;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ActionPlan;
use App\Models\Compendium;
use App\Models\Covid19;
use App\Models\GuestHouse;
use App\Models\HotelDraft;
use App\Models\HotelTieup;
use App\Models\Scheme;
use App\Models\WelfareOfficer;
use App\Models\WelfarePpt;
use App\Models\WelfareProposel;
use App\Models\WelfareScheme;
use App\Models\WelfareVariousCommuniction;

class WelfareController extends Controller
{

    public function welfare_officer(){
        $senior= WelfareOfficer::all();
        return view('Dghrd.website.welfare.officer_detailes',compact('senior'));
    }

    public function compendium(){
        $senior= Compendium::all();
        return view('Dghrd.website.welfare.compendium',compact('senior'));
    }
    public function welfare_schems(){
        $senior= WelfareScheme::all();
        return view('Dghrd.website.welfare.poster',compact('senior'));
    }
    public function action_plan(){
        $senior= ActionPlan::all();
        return view('Dghrd.website.welfare.action_plan',compact('senior'));
    }

    public function schemes(){
        $senior= Scheme::all();
        return view('Dghrd.website.welfare.schemes',compact('senior'));
    }

    public function welfare_ppt(){
        $senior= WelfarePpt::all();
        return view('Dghrd.website.welfare.welfare_ppt',compact('senior'));
    }


    public function welfare_manual(){
        $senior= WelfareManual::all();
        return view('Dghrd.website.welfare.welfare_manual',compact('senior'));
    }

    public function comman_facilities(){
        $senior= CommanFacility::all();
        return view('Dghrd.website.welfare.comman_facilities',compact('senior'));
    }

    public function tie_up(){
        $senior= HotelTieup::all();
        return view('Dghrd.website.welfare.tie_up',compact('senior'));
    }

    public function draft(){
        $senior= HotelDraft::all();
        return view('Dghrd.website.welfare.draft',compact('senior'));
    }

    public function guest_house(){
        $senior= GuestHouse::all();
        return view('Dghrd.website.welfare.guest_house',compact('senior'));
    }

    public function covid(){
        $senior= Covid19::all();
        return view('Dghrd.website.welfare.covid',compact('senior'));
    }

    public function welfare_praposals(){
        $senior= WelfareProposel::all();
        return view('Dghrd.website.welfare.welfare_praposals',compact('senior'));
    }

    public function welfare_communication(){
        $senior= WelfareVariousCommuniction::all();
        return view('Dghrd.website.welfare.welfare_communication',compact('senior'));
    }


}
