<?php

namespace App\Http\Controllers\website;

use App\Models\Sparrow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Apar;
use App\Models\CadreRestructuring2018;
use App\Models\DPC;
use App\Models\EmpanelmentDeputation;
use App\Models\OfficerDetails;
use App\Models\RecruitmentRules;
use App\Models\SeniorityList;
use App\Models\SparrowCBIC;
use App\Models\VariousCommunicationFieldFormations;

class Hrm1Controller extends Controller
{
    public function online_writing(){
        return view('Dghrd.website.online-writing-apar');
    }

    public function help_desk(){
        return view('Dghrd.website.sparrow-help-desk');
    }
    public function showSparrowContent($tab)
    {
        $sparrowContent = Sparrow::where('tab', $tab)->get();
        return view('Dghrd.website.hrm1.sparrow', compact('sparrowContent','tab'));
    }

    public function apar_missing(){
        $apar= Apar::all();
        return view('Dghrd.website.hrm1.missing_apar',compact('apar'));
    }

    public function group_a($subTabId)
    {
        $tabName = 'group_a';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
                                           ->where('sub_tab', $subTabId)
                                           ->get();
        return view('Dghrd.website.hrm1.group_a', compact('recruitmentRules', 'tabName', 'subTabId'));
    }


    public function group_b($subTabId)
    {
        $tabName = 'group_b';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
                                           ->where('sub_tab', $subTabId)
                                           ->get();
        return view('Dghrd.website.hrm1.group_b', compact('recruitmentRules', 'tabName', 'subTabId'));
    }
    public function group_c($subTabId)
    {
        $tabName = 'group_c';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
                                           ->where('sub_tab', $subTabId)
                                           ->get();
        return view('Dghrd.website.hrm1.group_c', compact('recruitmentRules', 'tabName', 'subTabId'));
    }

    public function canteen($subTabId)
    {
        $tabName = 'canteen_staff';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
                                           ->where('sub_tab', $subTabId)
                                           ->get();
        return view('Dghrd.website.hrm1.canteen', compact('recruitmentRules', 'tabName', 'subTabId'));
    }
    public function cbn($subTabId)
    {
        $tabName = 'cbn';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
                                           ->where('sub_tab', $subTabId)
                                           ->get();
        return view('Dghrd.website.hrm1.cbn', compact('recruitmentRules', 'tabName', 'subTabId'));
    }
    public function crcl($subTabId)
    {
        $tabName = 'crcl';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
                                           ->where('sub_tab', $subTabId)
                                           ->get();
        return view('Dghrd.website.hrm1.crcl', compact('recruitmentRules', 'tabName', 'subTabId'));
    }

    public function dgpm($subTabId)
    {
        $tabName = 'dgpm';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
                                           ->where('sub_tab', $subTabId)
                                           ->get();
        return view('Dghrd.website.hrm1.dgpm', compact('recruitmentRules', 'tabName', 'subTabId'));
    }

    public function dol($subTabId)
    {
        $tabName = 'directorate_of_logistics';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
                                           ->where('sub_tab', $subTabId)
                                           ->get();
        return view('Dghrd.website.hrm1.director', compact('recruitmentRules', 'tabName', 'subTabId'));
    }

    public function dppr($subTabId)
    {
        $tabName = 'dppr';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
                                           ->where('sub_tab', $subTabId)
                                           ->get();
        return view('Dghrd.website.hrm1.dppr', compact('recruitmentRules', 'tabName', 'subTabId'));
    }
    public function dri($subTabId)
    {
        $tabName = 'dri';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
                                           ->where('sub_tab', $subTabId)
                                           ->get();
        return view('Dghrd.website.hrm1.dri', compact('recruitmentRules', 'tabName', 'subTabId'));
    }
    public function rrs_of_directorates($subTabId)
    {
        $tabName = 'rrs_of_directorates';
        $recruitmentRules = RecruitmentRules::where('tab', $tabName)
                                           ->where('sub_tab', $subTabId)
                                           ->get();
        return view('Dghrd.website.hrm1.rrs_of_directorates', compact('recruitmentRules', 'tabName', 'subTabId'));
    }

    public function telecommunication($tab)
    {
        $sparrowContent = RecruitmentRules::where('tab', $tab)->get();
        return view('Dghrd.website.hrm1.telecommunication', compact('sparrowContent','tab'));
    }


    public function seniorty_list(){
        $senior= SeniorityList::all();
        return view('Dghrd.website.hrm1.seniorty_list',compact('senior'));
    }


    public function dpc($tab)
    {
        $dpc = DPC::where('tab', $tab)->get();
        return view('Dghrd.website.hrm1.dpc', compact('dpc','tab'));
    }

    public function empanelment_deputation(){
        $senior= EmpanelmentDeputation::all();
        return view('Dghrd.website.hrm1.empanelment_deputation',compact('senior'));
    }


    public function cadre_restructuring(){
        $senior= CadreRestructuring2018::all();
        return view('Dghrd.website.hrm1.cadre_restructuring',compact('senior'));
    }

    public function cbic(){
        $senior= SparrowCBIC::all();
        return view('Dghrd.website.hrm1.sparrow_cbic',compact('senior'));
    }

    public function officer_detailes(){
        $senior= OfficerDetails::all();
        return view('Dghrd.website.hrm1.officer_detailes',compact('senior'));
    }

    public function various(){
        $senior= VariousCommunicationFieldFormations::all();
        return view('Dghrd.website.hrm1.various_communication',compact('senior'));
    }


}
