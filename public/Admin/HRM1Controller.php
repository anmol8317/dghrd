<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apar;
use App\Models\CadreRestructuring2018;
use App\Models\DPC;
use App\Models\EmpanelmentDeputation;
use App\Models\IPR;
use App\Models\OfficerDetails;
use App\Models\RecruitmentRules;
use App\Models\SeniorityList;
use App\Models\Sparrow;
use App\Models\SparrowCBIC;
use App\Models\VariousCommunicationFieldFormations;
use Illuminate\Http\Request;

class HRM1Controller extends Controller
{
    public function Sparrow_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = Sparrow::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = Sparrow::where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.Sparrow', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }


    public function Sparrow_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = Sparrow::create([
            'tab' => $request->tab,
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-sparrow'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function Sparrow_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tab' => "required"
        ]);
        $data = Sparrow::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tab = $request->tab;
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-sparrow'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function Sparrow_delete($id)
    {
        $data = Sparrow::where('id', $id)->delete();
        return redirect(url('add-sparrow'))->with(['error' => 'Data deleted successfully']);
    }


    #Apar
    public function apar_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = Apar::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = Apar::where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.Apar', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }


    public function apar_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = Apar::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-apar'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function apar_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = Apar::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-apar'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function apar_delete($id)
    {
        $data = Apar::where('id', $id)->delete();
        return redirect(url('add-apar'))->with(['error' => 'Data deleted successfully']);
    }


    #IPR
    public function ipr_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = IPR::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = IPR::where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.IPR', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }


    public function ipr_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = IPR::create([

            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-ipr'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function ipr_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = IPR::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }

        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-ipr'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function ipr_delete($id)
    {
        $data = IPR::where('id', $id)->delete();
        return redirect(url('add-ipr'))->with(['error' => 'Data deleted successfully']);
    }




    public function group_a_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = RecruitmentRules::where('tab', 'group_a')->orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = RecruitmentRules::where('tab', 'group_a')->where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.RecruitmentRules.GroupA', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }


    public function group_a_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'subtab' => "required",
            'tittle' => "required"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = RecruitmentRules::create([
            'tab' => 'group_a',
            'sub_tab' => $request->subtab,
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-group-a'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function group_a_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'subtab' => "required"
        ]);
        $data = RecruitmentRules::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->sub_tab = $request->subtab;
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-group-a'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function group_a_delete($id)
    {
        $data = RecruitmentRules::where('id', $id)->delete();
        return redirect(url('add-group-a'))->with(['error' => 'Data deleted successfully']);
    }


    public function group_b_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = RecruitmentRules::where('tab', 'group_b')->orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = RecruitmentRules::where('tab', 'group_b')->where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.RecruitmentRules.GroupB', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }


    public function group_b_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'subtab' => "required",
            'tittle' => "required"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = RecruitmentRules::create([
            'tab' => 'group_b',
            'sub_tab' => $request->subtab,
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-group-b'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function group_b_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'subtab' => "required"
        ]);
        $data = RecruitmentRules::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->sub_tab = $request->subtab;
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-group-b'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function group_b_delete($id)
    {
        $data = RecruitmentRules::where('id', $id)->delete();
        return redirect(url('add-group-b'))->with(['error' => 'Data deleted successfully']);
    }


    public function group_c_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = RecruitmentRules::where('tab', 'group_c')->orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = RecruitmentRules::where('tab', 'group_c')->where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.RecruitmentRules.GroupC', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function group_c_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'sub_tab' => "required",
            'tittle' => "required"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = RecruitmentRules::create([
            'tab' => 'group_c',
            'sub_tab' => $request->sub_tab,
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-group-c'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function group_c_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'subtab' => "required"
        ]);
        $data = RecruitmentRules::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->sub_tab = $request->subtab;
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-group-c'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function group_c_delete($id)
    {
        $data = RecruitmentRules::where('id', $id)->delete();
        return redirect(url('add-group-c'))->with(['error' => 'Data deleted successfully']);
    }


    public function canteen_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = RecruitmentRules::where('tab', 'canteen_staff')->orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = RecruitmentRules::where('tab', 'canteen_staff')->where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.RecruitmentRules.CanteenStaff', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function canteen_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'sub_tab' => "required",
            'tittle' => "required"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = RecruitmentRules::create([
            'tab' => 'canteen_staff',
            'sub_tab' => $request->sub_tab,
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-canteen-staff'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function canteen_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'sub_tab' => "required"
        ]);
        $data = RecruitmentRules::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->sub_tab = $request->sub_tab;
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-canteen-staff'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function canteen_delete($id)
    {
        $data = RecruitmentRules::where('tab', 'canteen_staff')->where('id', $id)->delete();
        return redirect(url('add-canteen-staff'))->with(['error' => 'Data deleted successfully']);
    }


    public function cbn_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = RecruitmentRules::where('tab', 'cbn')->orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = RecruitmentRules::where('tab', 'cbn')->where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.RecruitmentRules.CBN', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function cbn_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'sub_tab' => "required",
            'tittle' => "required"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = RecruitmentRules::create([
            'tab' => 'cbn',
            'sub_tab' => $request->sub_tab,
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-cbn'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function cbn_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'sub_tab' => "required"
        ]);
        $data = RecruitmentRules::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->sub_tab = $request->sub_tab;
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-cbn'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function cbn_delete($id)
    {
        $data = RecruitmentRules::where('tab', 'cbn')->where('id', $id)->delete();
        return redirect(url('add-cbn'))->with(['error' => 'Data deleted successfully']);
    }


    #CRCL
    public function crcl_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = RecruitmentRules::where('tab', 'crcl')->orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = RecruitmentRules::where('tab', 'crcl')->where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.RecruitmentRules.CRCL', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function crcl_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'sub_tab' => "required",
            'tittle' => "required"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = RecruitmentRules::create([
            'tab' => 'crcl',
            'sub_tab' => $request->sub_tab,
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-crcl'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function crcl_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'sub_tab' => "required"
        ]);
        $data = RecruitmentRules::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->sub_tab = $request->sub_tab;
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-crcl'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function crcl_delete($id)
    {
        $data = RecruitmentRules::where('tab', 'crcl')->where('id', $id)->delete();
        return redirect(url('add-crcl'))->with(['error' => 'Data deleted successfully']);
    }

    #dgpm

    public function dgpm_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = RecruitmentRules::where('tab', 'dgpm')->orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = RecruitmentRules::where('tab', 'dgpm')->where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.RecruitmentRules.DGPM', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function dgpm_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'sub_tab' => "required",
            'tittle' => "required"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = RecruitmentRules::create([
            'tab' => 'dgpm',
            'sub_tab' => $request->sub_tab,
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-dgpm'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function dgpm_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'sub_tab' => "required"
        ]);
        $data = RecruitmentRules::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->sub_tab = $request->sub_tab;
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-dgpm'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function dgpm_delete($id)
    {
        $data = RecruitmentRules::where('tab', 'dgpm')->where('id', $id)->delete();
        return redirect(url('add-dgpm'))->with(['error' => 'Data deleted successfully']);
    }


    #Directorate_of_logistics

    public function Directorate_of_logistics_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = RecruitmentRules::where('tab', 'directorate_of_logistics')->orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = RecruitmentRules::where('tab', 'directorate_of_logistics')->where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.RecruitmentRules.Directorate_of_logistics', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function Directorate_of_logistics_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'sub_tab' => "required",
            'tittle' => "required"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = RecruitmentRules::create([
            'tab' => 'directorate_of_logistics',
            'sub_tab' => $request->sub_tab,
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-directorate-of-logistics'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function Directorate_of_logistics_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'sub_tab' => "required"
        ]);
        $data = RecruitmentRules::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->sub_tab = $request->sub_tab;
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-directorate-of-logistics'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function Directorate_of_logistics_delete($id)
    {
        $data = RecruitmentRules::where('tab', 'directorate_of_logistics')->where('id', $id)->delete();
        return redirect(url('add-directorate-of-logistics'))->with(['error' => 'Data deleted successfully']);
    }


    #dppr

    public function dppr_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = RecruitmentRules::where('tab', 'dppr')->orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = RecruitmentRules::where('tab', 'dppr')->where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.RecruitmentRules.DPPR', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function dppr_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'sub_tab' => "required",
            'tittle' => "required"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = RecruitmentRules::create([
            'tab' => 'dppr',
            'sub_tab' => $request->sub_tab,
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-dppr'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function dppr_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'sub_tab' => "required"
        ]);
        $data = RecruitmentRules::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->sub_tab = $request->sub_tab;
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-dppr'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function dppr_delete($id)
    {
        $data = RecruitmentRules::where('tab', 'dppr')->where('id', $id)->delete();
        return redirect(url('add-dppr'))->with(['error' => 'Data deleted successfully']);
    }


    #DRI
    public function dri_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = RecruitmentRules::where('tab', 'dri')->orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = RecruitmentRules::where('tab', 'dri')->where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.RecruitmentRules.DRI', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function dri_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'sub_tab' => "required",
            'tittle' => "required"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = RecruitmentRules::create([
            'tab' => 'dri',
            'sub_tab' => $request->sub_tab,
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-dri'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function dri_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'sub_tab' => "required"
        ]);
        $data = RecruitmentRules::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->sub_tab = $request->sub_tab;
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-dri'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function dri_delete($id)
    {
        $data = RecruitmentRules::where('tab', 'dri')->where('id', $id)->delete();
        return redirect(url('add-dri'))->with(['error' => 'Data deleted successfully']);
    }



    #rrs_of_directorates
    public function rrs_of_directorates_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = RecruitmentRules::where('tab', 'rrs_of_directorates')->orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = RecruitmentRules::where('tab', 'rrs_of_directorates')->where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.RecruitmentRules.Rrs_of_directorates', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function rrs_of_directorates_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'sub_tab' => "required",
            'tittle' => "required"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = RecruitmentRules::create([
            'tab' => 'rrs_of_directorates',
            'sub_tab' => $request->sub_tab,
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-rrs-of-directorates'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function rrs_of_directorates_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'sub_tab' => "required"
        ]);
        $data = RecruitmentRules::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->sub_tab = $request->sub_tab;
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-rrs-of-directorates'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function rrs_of_directorates_delete($id)
    {
        $data = RecruitmentRules::where('tab', 'rrs_of_directorates')->where('id', $id)->delete();
        return redirect(url('add-rrs-of-directorates'))->with(['error' => 'Data deleted successfully']);
    }


    #systum_data_management
    public function systum_data_management_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = RecruitmentRules::where('tab', 'systum_data_management')->orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = RecruitmentRules::where('tab', 'systum_data_management')->where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.RecruitmentRules.Systum_data_management', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function systum_data_management_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = RecruitmentRules::create([
            'tab' => 'systum_data_management',
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-systum-data-management'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function systum_data_management_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
        ]);
        $data = RecruitmentRules::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-systum-data-management'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function systum_data_management_delete($id)
    {
        $data = RecruitmentRules::where('tab', 'systum_data_management')->where('id', $id)->delete();
        return redirect(url('add-systum-data-management'))->with(['error' => 'Data deleted successfully']);
    }

    #TELECOMMUNICATION WING, DIRECTORATE OF LOGISTICS

    #systum_data_management
    public function telecommunication_wing_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = RecruitmentRules::where('tab', 'telecommunication_wing')->orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = RecruitmentRules::where('tab', 'telecommunication_wing')->where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.RecruitmentRules.Telecommunication_wing', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function telecommunication_wing_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = RecruitmentRules::create([
            'tab' => 'telecommunication_wing',
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-telecommunication-wing'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function telecommunication_wing_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
        ]);
        $data = RecruitmentRules::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-telecommunication-wing'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function telecommunication_wing_delete($id)
    {
        $data = RecruitmentRules::where('tab', 'telecommunication_wing')->where('id', $id)->delete();
        return redirect(url('add-telecommunication-wing'))->with(['error' => 'Data deleted successfully']);
    }


    #seniority_list

    public function seniority_list_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = SeniorityList::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = SeniorityList::where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.SeniorityList', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }


    public function seniority_list_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = SeniorityList::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-seniority-list'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function seniority_list_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = SeniorityList::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-seniority-list'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function seniority_list_delete($id)
    {
        $data = SeniorityList::where('id', $id)->delete();
        return redirect(url('add-seniority-list'))->with(['error' => 'Data deleted successfully']);
    }



    #DPC
    public function dpc_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = DPC::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = DPC::where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.DPC', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function dpc_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required",
            'tab' => "required",
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = DPC::create([
            'tab' => $request->tab,
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-dpc'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function dpc_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tab' => "required"
        ]);
        $data = DPC::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tab = $request->tab;
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-dpc'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function dpc_delete($id)
    {
        $data = DPC::where('id', $id)->delete();
        return redirect(url('add-dpc'))->with(['error' => 'Data deleted successfully']);
    }

    #Empanelment & Deputation
    public function empanelment_deputation_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = EmpanelmentDeputation::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = EmpanelmentDeputation::where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.EmpanelmentDeputation', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function empanelment_deputation_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required",

        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = EmpanelmentDeputation::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-empanelment-deputation'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function empanelment_deputation_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = EmpanelmentDeputation::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-empanelment-deputation'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function empanelment_deputation_delete($id)
    {
        $data = EmpanelmentDeputation::where('id', $id)->delete();
        return redirect(url('add-empanelment-deputation'))->with(['error' => 'Data deleted successfully']);
    }


    #Cadre Restructuring 2018
    public function cadre_restructuring_2018_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = CadreRestructuring2018::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = CadreRestructuring2018::where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.CadreRestructuring2018', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function cadre_restructuring_2018_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required",

        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = CadreRestructuring2018::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-cadre-restructuring-2018'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function cadre_restructuring_2018_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = CadreRestructuring2018::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-cadre-restructuring-2018'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function cadre_restructuring_2018_delete($id)
    {
        $data = CadreRestructuring2018::where('id', $id)->delete();
        return redirect(url('add-cadre-restructuring-2018'))->with(['error' => 'Data deleted successfully']);
    }

    #sparrow-cbic
    public function sparrow_cbic_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = SparrowCBIC::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = SparrowCBIC::where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.SparrowCBIC', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function sparrow_cbic_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required",

        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = SparrowCBIC::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-sparrow-cbic'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function sparrow_cbic_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = SparrowCBIC::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-sparrow-cbic'))->with(['success' => 'Data Updated Successfully']);
    }

    public function sparrow_cbic_delete($id)
    {
        $data = SparrowCBIC::where('id', $id)->delete();
        return redirect(url('add-sparrow-cbic'))->with(['error' => 'Data deleted successfully']);
    }


    #Officer Details
    public function officer_details_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = OfficerDetails::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = OfficerDetails::where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.OfficerDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function officer_details_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required",

        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = OfficerDetails::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-officer-details'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function officer_details_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = OfficerDetails::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-officer-details'))->with(['success' => 'Data Updated Successfully']);
    }

    public function officer_details_delete($id)
    {
        $data = OfficerDetails::where('id', $id)->delete();
        return redirect(url('add-officer-details'))->with(['error' => 'Data deleted successfully']);
    }


    #Various Communication with Field Formations
    public function various_communication_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = VariousCommunicationFieldFormations::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = VariousCommunicationFieldFormations::where('id', $id)->first();
        }
        return view('Dghrd.Admin.HRM1.VariousCommunication', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function various_communication_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required",

        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = VariousCommunicationFieldFormations::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-various-communication'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function various_communication_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = VariousCommunicationFieldFormations::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-various-communication'))->with(['success' => 'Data Updated Successfully']);
    }

    public function various_communication_delete($id)
    {
        $data = VariousCommunicationFieldFormations::where('id', $id)->delete();
        return redirect(url('add-various-communication'))->with(['error' => 'Data deleted successfully']);
    }

    #upload function
    public function UploadImage($storage, $path, $image)
    {

        if (count(array($image)) > 0) {
            $new_name_of_profile_photo = uniqid('', true) . "." . $image->getClientOriginalExtension();
            $image->move($storage, $new_name_of_profile_photo);
            return $path . '/' . $new_name_of_profile_photo;
        } else {
        }
    }
}
