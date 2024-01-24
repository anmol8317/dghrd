<?php

namespace App\Http\Controllers\Admin;

use App\Models\BudgetaryAuthority;
use App\Models\EmcManual;
use App\Models\EmcOfficerDetail;
use App\Models\EmcVariousCommunication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Crb;
use App\Models\EmcPpt;
use App\Models\FundAllocation;
use App\Models\GemEprocurement;
use App\Models\VehiclePolicy;

class EmcController extends Controller
{
    public function UploadImage($storage, $path, $image)
    {

        if (count(array($image)) > 0) {
            $new_name_of_profile_photo = uniqid('', true) . "." . $image->getClientOriginalExtension();
            $image->move($storage, $new_name_of_profile_photo);
            return $path . '/' . $new_name_of_profile_photo;
        } else {
        }
    }
#officer Detailes
    public function emc_officer_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = EmcOfficerDetail::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = EmcOfficerDetail::where('id', $id)->first();
        }
        return view('Dghrd.Admin.EMC.emc_OfficerDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

     public function emc_officer_save(Request $request)
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
        $data = EmcOfficerDetail::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-emc_officer-details'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function emc_officer_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = EmcOfficerDetail::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-emc_officer-details'))->with(['success' => 'Data Updated Successfully']);
    }

    public function emc_officer_delete($id)
    {
        $data = EmcOfficerDetail::where('id', $id)->delete();
        return redirect(url('add-emc_officer-details'))->with(['error' => 'Data deleted successfully']);
    }

    #Fund allocations and utilization
    public function fund_allocation_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = FundAllocation::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = FundAllocation::where('id', $id)->first();
        }
        return view('Dghrd.Admin.EMC.fund_allocationDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

     public function fund_allocation_save(Request $request)
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
        $data = FundAllocation::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-fund_allocation-details'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function fund_allocation_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = FundAllocation::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-fund_allocation-details'))->with(['success' => 'Data Updated Successfully']);
    }

    public function fund_allocation_delete($id)
    {
        $data = FundAllocation::where('id', $id)->delete();
        return redirect(url('add-fund_allocation-details'))->with(['error' => 'Data deleted successfully']);
    }

     #EMC Ppt
    public function emc_ppt_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = EmcPpt::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = EmcPpt::where('id', $id)->first();
        }
        return view('Dghrd.Admin.EMC.emc_pptDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

     public function emc_ppt_save(Request $request)
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
        $data = EmcPpt::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-emc_ppt-details'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function emc_ppt_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = EmcPpt::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-emc_ppt-details'))->with(['success' => 'Data Updated Successfully']);
    }

    public function emc_ppt_delete($id)
    {
        $data = EmcPpt::where('id', $id)->delete();
        return redirect(url('add-emc_ppt-details'))->with(['error' => 'Data deleted successfully']);
    }
#EMC Manual
    public function emc_manual_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = EmcManual::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = EmcManual::where('id', $id)->first();
        }
        return view('Dghrd.Admin.EMC.emc_manualDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

     public function emc_manual_save(Request $request)
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
        $data = EmcManual::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-emc_manual-details'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function emc_manual_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = EmcManual::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-emc_manual-details'))->with(['success' => 'Data Updated Successfully']);
    }

    public function emc_manual_delete($id)
    {
        $data = EmcManual::where('id', $id)->delete();
        return redirect(url('add-emc_manual-details'))->with(['error' => 'Data deleted successfully']);
    }

    #Budjetary Authorities
    public function budgetary_authority_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = BudgetaryAuthority::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = BudgetaryAuthority::where('id', $id)->first();
        }
        return view('Dghrd.Admin.EMC.budgetary_authoritylDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

     public function budgetary_authority_save(Request $request)
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
        $data = BudgetaryAuthority::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-budgetary_authority-details'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function budgetary_authority_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = BudgetaryAuthority::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-budgetary_authority-details'))->with(['success' => 'Data Updated Successfully']);
    }

    public function budgetary_authority_delete($id)
    {
        $data = BudgetaryAuthority::where('id', $id)->delete();
        return redirect(url('add-budgetary_authority-details'))->with(['error' => 'Data deleted successfully']);
    }

    #GeM/E Procurement
    public function gem_eprocurements_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = GemEprocurement::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = GemEprocurement::where('id', $id)->first();
        }
        return view('Dghrd.Admin.EMC.gem_eprocurementsDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

     public function gem_eprocurements_save(Request $request)
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
        $data = GemEprocurement::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-gem_eprocurements-details'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function gem_eprocurements_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = GemEprocurement::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-gem_eprocurements-details'))->with(['success' => 'Data Updated Successfully']);
    }

    public function gem_eprocurements_delete($id)
    {
        $data = GemEprocurement::where('id', $id)->delete();
        return redirect(url('add-gem_eprocurements-details'))->with(['error' => 'Data deleted successfully']);
    }

# Vechicle Policy
public function vehicle_policy_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = VehiclePolicy::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = VehiclePolicy::where('id', $id)->first();
    }
    return view('Dghrd.Admin.EMC.vehicle_policyDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

 public function vehicle_policy_save(Request $request)
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
    $data = VehiclePolicy::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-vehicle_policy-details'))->with(['success' => 'Data uploaded Successfully']);
}

public function vehicle_policy_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx",
        'tittle' => "required"
    ]);
    $data = VehiclePolicy::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-vehicle_policy-details'))->with(['success' => 'Data Updated Successfully']);
}

public function vehicle_policy_delete($id)
{
    $data = VehiclePolicy::where('id', $id)->delete();
    return redirect(url('add-vehicle_policy-details'))->with(['error' => 'Data deleted successfully']);
}


# CRB
public function crb_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = Crb::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = Crb::where('id', $id)->first();
    }
    return view('Dghrd.Admin.EMC.crbDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

 public function crb_save(Request $request)
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
    $data = Crb::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-crb-details'))->with(['success' => 'Data uploaded Successfully']);
}

public function crb_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx",
        'tittle' => "required"
    ]);
    $data = Crb::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-crb-details'))->with(['success' => 'Data Updated Successfully']);
}

public function crb_delete($id)
{
    $data = Crb::where('id', $id)->delete();
    return redirect(url('add-crb-details'))->with(['error' => 'Data deleted successfully']);
}

#Various Communications with field Formatations
public function emc_communication_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = EmcVariousCommunication::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = EmcVariousCommunication::where('id', $id)->first();
    }
    return view('Dghrd.Admin.EMC.emc-communicationDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

 public function emc_communication_save(Request $request)
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
    $data = EmcVariousCommunication::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-emc_communication-details'))->with(['success' => 'Data uploaded Successfully']);
}

public function emc_communication_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx",
        'tittle' => "required"
    ]);
    $data = EmcVariousCommunication::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-emc_communication-details'))->with(['success' => 'Data Updated Successfully']);
}

public function emc_communication_delete($id)
{
    $data = EmcVariousCommunication::where('id', $id)->delete();
    return redirect(url('add-emc_communication-details'))->with(['error' => 'Data deleted successfully']);
}




}
