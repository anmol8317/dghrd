<?php

namespace App\Http\Controllers\website;

use App\Models\E_Dispostion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CivilList;
use App\Models\DpcModuleUpdate;
use App\Models\EmployeeCode;
use App\Models\EVacencyModuleUpdate;
use App\Models\HalfYearlyBrochure;
use App\Models\Hop;
use App\Models\HrmVariousCommunication;
use App\Models\IrsOfficer;
use App\Models\ModuleUpdate;
use App\Models\Policy;
use App\Models\PostingTransfer;
use App\Models\SanctionedWorking;
use App\Models\SwachhtaActionPlan;
use App\Models\TenderNotice;
use App\Models\VerifiedData;

class Hrm2Controller extends Controller
{
    public function posting_transfers(){
        $senior= PostingTransfer::all();
        return view('Dghrd.website.hrm2.posting_transfers',compact('senior'));
    }

    public function e_diposition(){
        $senior= E_Dispostion::all();
        return view('Dghrd.website.hrm2.e-diposition',compact('senior'));
    }
    public function sanctioned_working(){
        $senior= SanctionedWorking::all();
        return view('Dghrd.website.hrm2.sanctioned-working',compact('senior'));
    }
    public function hop(){
        $senior= Hop::all();
        return view('Dghrd.website.hrm2.hop',compact('senior'));
    }
    public function empolyee_code(){
        $senior= EmployeeCode::all();
        return view('Dghrd.website.hrm2.empolyee_code',compact('senior'));
    }
    public function swachhta($tab)
    {
        $sparrowContent = SwachhtaActionPlan::where('tab', $tab)->get();
        return view('Dghrd.website.hrm2.swachhta', compact('sparrowContent','tab'));
    }

    public function v_communication()
    {
        $senior = HrmVariousCommunication::all();
        return view('Dghrd.website.hrm2.various_communication', compact('senior'));
    }
    public function tender_notice(){
        $senior= TenderNotice::all();
        return view('Dghrd.website.hrm2.tender_notice',compact('senior'));
    }

    public function verified($tab)
    {
        $sparrowContent = VerifiedData::where('tab', $tab)->get();
        return view('Dghrd.website.hrm2.verified_data', compact('sparrowContent','tab'));
    }
    public function module_updates(){
        $senior= ModuleUpdate::all();
        return view('Dghrd.website.hrm2.module_updates',compact('senior'));
    }

    public function irs_officer(){
        $senior= IrsOfficer::all();
        return view('Dghrd.website.hrm2.irs_officers',compact('senior'));
    }

    public function e_vacency(){
        $senior= EVacencyModuleUpdate::all();
        return view('Dghrd.website.hrm2.e_vacency',compact('senior'));
    }

    public function civil_list(){
        $senior= CivilList::all();
        return view('Dghrd.website.hrm2.civil_list',compact('senior'));
    }

    public function half_yearly_brochure(){
        $senior= HalfYearlyBrochure::all();
        return view('Dghrd.website.hrm2.half_yearly_brochure',compact('senior'));
    }
    public function dpc_module(){
        $senior= DpcModuleUpdate::all();
        return view('Dghrd.website.hrm2.dpc_module',compact('senior'));
    }

    public function policy($tab)
    {
        $sparrowContent = Policy::where('tab', $tab)->get();
        return view('Dghrd.website.hrm2.policy', compact('sparrowContent','tab'));
    }
}
