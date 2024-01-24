<?php

namespace App\Http\Controllers\website;

use App\Models\InfrastructureManual;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AssetRegister;
use App\Models\Construction;
use App\Models\FastTrack;
use App\Models\HiredOffice;
use App\Models\InfrastructureOfficerDetail;
use App\Models\InfrastructurePpt;
use App\Models\Instruction;
use App\Models\LandAssets;
use App\Models\ReadyBuilt;
use App\Models\RepairMaintenance;
use App\Models\VariousCommunication;

class InfrastructureController extends Controller
{
    public function infra_officer(){
        $senior= InfrastructureOfficerDetail::all();
        return view('Dghrd.website.infrastructure.officer_detailes',compact('senior'));
    }

    public function instrustion(){
        $senior= Instruction::all();
        return view('Dghrd.website.infrastructure.instrustion',compact('senior'));
    }
    public function fast_track(){
        $senior= FastTrack::all();
        return view('Dghrd.website.infrastructure.fasttrack',compact('senior'));
    }
    public function infra_ppt(){
        $senior= InfrastructurePpt::all();
        return view('Dghrd.website.infrastructure.ppt',compact('senior'));
    }

    public function infra_manual(){
        $senior= InfrastructureManual::all();
        return view('Dghrd.website.infrastructure.manual',compact('senior'));
    }

    public function asset_register(){
        $senior= AssetRegister::all();
        return view('Dghrd.website.infrastructure.asset_register',compact('senior'));
    }
    public function land_assets(){
        $senior= LandAssets::all();
        return view('Dghrd.website.infrastructure.land_assets',compact('senior'));
    }

    public function construction(){
        $senior= Construction::all();
        return view('Dghrd.website.infrastructure.construction',compact('senior'));
    }

    public function repair_maintainence(){
        $senior= RepairMaintenance::all();
        return view('Dghrd.website.infrastructure.repair_maintainence',compact('senior'));
    }

    public function ready_built(){
        $senior= ReadyBuilt::all();
        return view('Dghrd.website.infrastructure.ready_built',compact('senior'));
    }
    public function hired_office(){
        $senior= HiredOffice::all();
        return view('Dghrd.website.infrastructure.hired_office',compact('senior'));
    }

    public function infra_various_communication(){
        $senior= VariousCommunication::all();
        return view('Dghrd.website.infrastructure.infra_various_communication',compact('senior'));
    }
}
