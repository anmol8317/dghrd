<?php

namespace App\Http\Controllers\website;

use App\Models\EmcManual;
use App\Models\VehiclePolicy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BudgetaryAuthority;
use App\Models\Crb;
use App\Models\EmcOfficerDetail;
use App\Models\EmcPpt;
use App\Models\EmcVariousCommunication;
use App\Models\FundAllocation;
use App\Models\GemEprocurement;

class EmcController extends Controller
{
    public function emc_officer(){
        $senior= EmcOfficerDetail::all();
        return view('Dghrd.website.emc.emc_officer',compact('senior'));
    }

    public function fund_allocation(){
        $senior= FundAllocation::all();
        return view('Dghrd.website.emc.fund_allocation',compact('senior'));
    }

    public function emc_ppt(){
        $senior= EmcPpt::all();
        return view('Dghrd.website.emc.emc_ppt',compact('senior'));
    }

    public function emc_manual(){
        $senior= EmcManual::all();
        return view('Dghrd.website.emc.emc_manual',compact('senior'));
    }

    public function budgetary_authority(){
        $senior= BudgetaryAuthority::all();
        return view('Dghrd.website.emc.budgetary_authority',compact('senior'));
    }

    public function gem_eprocurements(){
        $senior= GemEprocurement::all();
        return view('Dghrd.website.emc.gem_eprocurements',compact('senior'));
    }

    public function vehicle_policy(){
        $senior= VehiclePolicy::all();
        return view('Dghrd.website.emc.vehicle_policy',compact('senior'));
    }

    public function crb(){
        $senior= Crb::all();
        return view('Dghrd.website.emc.crb',compact('senior'));
    }

    public function emc_communication(){
        $senior= EmcVariousCommunication::all();
        return view('Dghrd.website.emc.emc_communication',compact('senior'));
    }
}
