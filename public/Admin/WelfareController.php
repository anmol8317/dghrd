<?php

namespace App\Http\Controllers\Admin;

use App\Models\HotelDraft;
use App\Models\HotelTieup;
use App\Models\Scheme;
use App\Models\ActionPlan;
use App\Models\Compendium;
use App\Models\WelfarePpt;
use App\Models\WelfareVariousCommuniction;
use Illuminate\Http\Request;
use App\Models\WelfareScheme;
use App\Models\WelfareOfficer;
use App\Http\Controllers\Controller;
use App\Models\CommanFacility;
use App\Models\Covid19;
use App\Models\GuestHouse;
use App\Models\WelfareManual;
use App\Models\WelfareProposel;

class WelfareController extends Controller
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

    public function welfare_officer_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = WelfareOfficer::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = WelfareOfficer::where('id', $id)->first();
        }
        return view('Dghrd.Admin.welfare.welfare_OfficerDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function welfare_officer_save(Request $request)
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
        $data = WelfareOfficer::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-welfare_officer-details'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function welfare_officer_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = WelfareOfficer::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-welfare_officer-details'))->with(['success' => 'Data Updated Successfully']);
    }

    public function welfare_officer_delete($id)
    {
        $data = WelfareOfficer::where('id', $id)->delete();
        return redirect(url('add-welfare_officer-details'))->with(['error' => 'Data deleted successfully']);
    }


    #Compendium
    public function compendium_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = Compendium::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = Compendium::where('id', $id)->first();
        }
        return view('Dghrd.Admin.welfare.compendiumDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function compendium_save(Request $request)
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
        $data = Compendium::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-compendium-details'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function compendium_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = Compendium::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-compendium-details'))->with(['success' => 'Data Updated Successfully']);
    }

    public function compendium_delete($id)
    {
        $data = Compendium::where('id', $id)->delete();
        return redirect(url('add-compendium-details'))->with(['error' => 'Data deleted successfully']);
    }

    # Welfare Schems
    public function welfare_schemes_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = WelfareScheme::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = WelfareScheme::where('id', $id)->first();
        }
        return view('Dghrd.Admin.welfare.welfare_schemesDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function welfare_schemes_save(Request $request)
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
        $data = WelfareScheme::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-welfare_sechemes-details'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function welfare_schemes_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = WelfareScheme::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-welfare_sechemes-details'))->with(['success' => 'Data Updated Successfully']);
    }

    public function welfare_schemes_delete($id)
    {
        $data = WelfareScheme::where('id', $id)->delete();
        return redirect(url('add-welfare_sechemes-details'))->with(['error' => 'Data deleted successfully']);
    }


    # Action Plans

    public function action_plan_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = ActionPlan::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = ActionPlan::where('id', $id)->first();
        }
        return view('Dghrd.Admin.welfare.action_planDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function action_plan_save(Request $request)
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
        $data = ActionPlan::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-action_plan-details'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function action_plan_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = ActionPlan::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-action_plan-details'))->with(['success' => 'Data Updated Successfully']);
    }

    public function action_plan_delete($id)
    {
        $data = ActionPlan::where('id', $id)->delete();
        return redirect(url('add-action_plan-details'))->with(['error' => 'Data deleted successfully']);
    }


    #  Schems
    public function schemes_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = Scheme::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = Scheme::where('id', $id)->first();
        }
        return view('Dghrd.Admin.welfare.schemesDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function schemes_save(Request $request)
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
        $data = Scheme::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-schemes-details'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function schemes_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = Scheme::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-schemes-details'))->with(['success' => 'Data Updated Successfully']);
    }

    public function schemes_delete($id)
    {
        $data = Scheme::where('id', $id)->delete();
        return redirect(url('add-schemes-details'))->with(['error' => 'Data deleted successfully']);
    }

 # Welfare PPT
 public function welfare_ppt_view($id = null)
 {
     $admin = request()->session()->get('admin-auth');
     $data = WelfarePpt::orderBy('id', 'DESC')->get();
     $value = null;
     if ($id) {
         $value = WelfarePpt::where('id', $id)->first();
     }
     return view('Dghrd.Admin.welfare.welfare_pptDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
 }

 public function welfare_ppt_save(Request $request)
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
     $data = WelfarePpt::create([
         'tittle' => $request->tittle,
         'pdf' => $file,
         'date' => $request->date
     ]);

     return redirect(url('add-welfare_ppt-details'))->with(['success' => 'Data uploaded Successfully']);
 }

 public function welfare_ppt_update(Request $request, $id)
 {
     #validation
     $this->validate($request, [
         "pdf" => "mimes:doc,pdf,docx",
         'tittle' => "required"
     ]);
     $data = WelfarePpt::find($id);
     $fileName = $data->pdf;
     if ($request->has('pdf')) {
         $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
     }
     $data->tittle = $request->tittle;
     $data->pdf = $fileName;
     $data->date = $request->date;
     $data->save();
     return redirect(url('add-welfare_ppt-details'))->with(['success' => 'Data Updated Successfully']);
 }

 public function welfare_ppt_delete($id)
 {
     $data = WelfarePpt::where('id', $id)->delete();
     return redirect(url('add-welfare_ppt-details'))->with(['error' => 'Data deleted successfully']);
 }

 # Welfare Manual
 public function welfare_manual_view($id = null)
 {
     $admin = request()->session()->get('admin-auth');
     $data = WelfareManual::orderBy('id', 'DESC')->get();
     $value = null;
     if ($id) {
         $value = WelfareManual::where('id', $id)->first();
     }
     return view('Dghrd.Admin.welfare.welfare_manualDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
 }

 public function welfare_manual_save(Request $request)
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
     $data = WelfareManual::create([
         'tittle' => $request->tittle,
         'pdf' => $file,
         'date' => $request->date
     ]);

     return redirect(url('add-welfare_manual-details'))->with(['success' => 'Data uploaded Successfully']);
 }

 public function welfare_manual_update(Request $request, $id)
 {
     #validation
     $this->validate($request, [
         "pdf" => "mimes:doc,pdf,docx",
         'tittle' => "required"
     ]);
     $data = WelfareManual::find($id);
     $fileName = $data->pdf;
     if ($request->has('pdf')) {
         $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
     }
     $data->tittle = $request->tittle;
     $data->pdf = $fileName;
     $data->date = $request->date;
     $data->save();
     return redirect(url('add-welfare_manual-details'))->with(['success' => 'Data Updated Successfully']);
 }

 public function welfare_manual_delete($id)
 {
     $data = WelfareManual::where('id', $id)->delete();
     return redirect(url('add-welfare_manual-details'))->with(['error' => 'Data deleted successfully']);
 }
# Comman Facilities
public function comman_facilties_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = CommanFacility::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = CommanFacility::where('id', $id)->first();
    }
    return view('Dghrd.Admin.welfare.comman_faciltiesDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function comman_facilties_save(Request $request)
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
    $data = CommanFacility::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-comman_facilties-details'))->with(['success' => 'Data uploaded Successfully']);
}

public function comman_facilties_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx",
        'tittle' => "required"
    ]);
    $data = CommanFacility::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-comman_facilties-details'))->with(['success' => 'Data Updated Successfully']);
}

public function comman_facilties_delete($id)
{
    $data = CommanFacility::where('id', $id)->delete();
    return redirect(url('add-comman_facilties-details'))->with(['error' => 'Data deleted successfully']);
}

# List Of hotel TieUps
public function hotel_tieup_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = HotelTieup::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = HotelTieup::where('id', $id)->first();
    }
    return view('Dghrd.Admin.welfare.hotel_tieupDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function hotel_tieup_save(Request $request)
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
    $data = HotelTieup::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-hotel_tieup-details'))->with(['success' => 'Data uploaded Successfully']);
}

public function hotel_tieup_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx",
        'tittle' => "required"
    ]);
    $data = HotelTieup::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-hotel_tieup-details'))->with(['success' => 'Data Updated Successfully']);
}

public function hotel_tieup_delete($id)
{
    $data = HotelTieup::where('id', $id)->delete();
    return redirect(url('add-hotel_tieup-details'))->with(['error' => 'Data deleted successfully']);
}
# Draft List for hotels
public function hotel_draft_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = HotelDraft::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = HotelDraft::where('id', $id)->first();
    }
    return view('Dghrd.Admin.welfare.hotel_draftDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function hotel_draft_save(Request $request)
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
    $data = HotelDraft::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-hotel_draft-details'))->with(['success' => 'Data uploaded Successfully']);
}

public function hotel_draft_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx",
        'tittle' => "required"
    ]);
    $data = HotelDraft::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-hotel_draft-details'))->with(['success' => 'Data Updated Successfully']);
}

public function hotel_draft_delete($id)
{
    $data = HotelDraft::where('id', $id)->delete();
    return redirect(url('add-hotel_draft-details'))->with(['error' => 'Data deleted successfully']);
}


# Departemental Guest House
public function guest_house_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = GuestHouse::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = GuestHouse::where('id', $id)->first();
    }
    return view('Dghrd.Admin.welfare.guest_houseDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function guest_house_save(Request $request)
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
    $data = GuestHouse::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-guest_house-details'))->with(['success' => 'Data uploaded Successfully']);
}

public function guest_house_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx",
        'tittle' => "required"
    ]);
    $data = GuestHouse::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-guest_house-details'))->with(['success' => 'Data Updated Successfully']);
}

public function guest_house_delete($id)
{
    $data = GuestHouse::where('id', $id)->delete();
    return redirect(url('add-guest_house-details'))->with(['error' => 'Data deleted successfully']);
}

# COVID 19
public function covid_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = Covid19::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = Covid19::where('id', $id)->first();
    }
    return view('Dghrd.Admin.welfare.covidDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function covid_save(Request $request)
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
    $data = Covid19::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-covid-details'))->with(['success' => 'Data uploaded Successfully']);
}

public function covid_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx",
        'tittle' => "required"
    ]);
    $data = Covid19::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-covid-details'))->with(['success' => 'Data Updated Successfully']);
}

public function covid_delete($id)
{
    $data = Covid19::where('id', $id)->delete();
    return redirect(url('add-covid-details'))->with(['error' => 'Data deleted successfully']);
}

# Welfare Praposels
public function proposels_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = WelfareProposel::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = WelfareProposel::where('id', $id)->first();
    }
    return view('Dghrd.Admin.welfare.praposelsDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function proposels_save(Request $request)
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
    $data = WelfareProposel::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-praposels-details'))->with(['success' => 'Data uploaded Successfully']);
}

public function proposels_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx",
        'tittle' => "required"
    ]);
    $data = WelfareProposel::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-praposels-details'))->with(['success' => 'Data Updated Successfully']);
}

public function proposels_delete($id)
{
    $data = WelfareProposel::where('id', $id)->delete();
    return redirect(url('add-praposels-details'))->with(['error' => 'Data deleted successfully']);
}

# Welfare various Communicationes
public function welfare_communication_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = WelfareVariousCommuniction::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = WelfareVariousCommuniction::where('id', $id)->first();
    }
    return view('Dghrd.Admin.welfare.welfare_communicationDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function welfare_communication_save(Request $request)
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
    $data = WelfareVariousCommuniction::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-welfare_communication-details'))->with(['success' => 'Data uploaded Successfully']);
}

public function welfare_communication_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx",
        'tittle' => "required"
    ]);
    $data = WelfareVariousCommuniction::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-welfare_communication-details'))->with(['success' => 'Data Updated Successfully']);
}

public function welfare_communication_delete($id)
{
    $data = WelfareVariousCommuniction::where('id', $id)->delete();
    return redirect(url('add-welfare_communication-details'))->with(['error' => 'Data deleted successfully']);
}

}
