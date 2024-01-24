<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\AssetRegister;
use App\Models\Construction;
use App\Models\FastTrack;
use App\Models\HiredOffice;
use App\Models\InfrastructureManual;
use App\Models\InfrastructureOfficerDetail;
use App\Models\InfrastructurePpt;
use App\Models\Instruction;
use App\Models\LandAssets;
use App\Models\ReadyBuilt;
use App\Models\RepairMaintenance;
use App\Models\VariousCommunication;
use Illuminate\Http\Request;

class InfrastructureController extends Controller
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

    public function Infra_officer_details_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = InfrastructureOfficerDetail::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = InfrastructureOfficerDetail::where('id', $id)->first();
        }
        return view('Dghrd.Admin.Infrastructure.Infra_OfficerDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function Infra_officer_details_save(Request $request)
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
        $data = InfrastructureOfficerDetail::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-infra_officer-details'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function Infra_officer_details_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = InfrastructureOfficerDetail::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-infra_officer-details'))->with(['success' => 'Data Updated Successfully']);
    }

    public function Infra_officer_details_delete($id)
    {
        $data = InfrastructureOfficerDetail::where('id', $id)->delete();
        return redirect(url('add-infra_officer-details'))->with(['error' => 'Data deleted successfully']);
    }


    #Instructions
    public function instructions_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = Instruction::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = Instruction::where('id', $id)->first();
        }
        return view('Dghrd.Admin.Infrastructure.instruction_Details', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function instructions_save(Request $request)
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
        $data = Instruction::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-instructions-details'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function instructions_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = Instruction::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-instructions-details'))->with(['success' => 'Data Updated Successfully']);
    }

    public function instructions_delete($id)
    {
        $data = Instruction::where('id', $id)->delete();
        return redirect(url('add-instructions-details'))->with(['error' => 'Data deleted successfully']);
    }

#FastTrack

public function fastTrack_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = FastTrack::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = FastTrack::where('id', $id)->first();
        }
        return view('Dghrd.Admin.Infrastructure.FastTrack_Details', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function fastTrack_save(Request $request)
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
        $data = FastTrack::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-fast_track-details'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function fastTrack_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
            'tittle' => "required"
        ]);
        $data = FastTrack::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-fast_track-details'))->with(['success' => 'Data Updated Successfully']);
    }

    public function FastTrack_delete($id)
    {
        $data = FastTrack::where('id', $id)->delete();
        return redirect(url('add-fast_track-details'))->with(['error' => 'Data deleted successfully']);
    }

#Infrestructure Ppt

public function ppt_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = InfrastructurePpt::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = InfrastructurePpt::where('id', $id)->first();
        }
        return view('Dghrd.Admin.Infrastructure.PPT_Details', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function ppt_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
            'tittle' => "required",

        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = InfrastructurePpt::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-ppt-details'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function ppt_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
            'tittle' => "required"
        ]);
        $data = InfrastructurePpt::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-ppt-details'))->with(['success' => 'Data Updated Successfully']);
    }

    public function ppt_delete($id)
    {
        $data = InfrastructurePpt::where('id', $id)->delete();
        return redirect(url('add-ppt-details'))->with(['error' => 'Data deleted successfully']);
    }

#Infrestructure Manual

public function manual_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = InfrastructureManual::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = InfrastructureManual::where('id', $id)->first();
        }
        return view('Dghrd.Admin.Infrastructure.Manual_Details', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function manual_save(Request $request)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
            'tittle' => "required",

        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = InfrastructureManual::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-manual-details'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function manual_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
            'tittle' => "required"
        ]);
        $data = InfrastructureManual::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-manual-details'))->with(['success' => 'Data Updated Successfully']);
    }

    public function manual_delete($id)
    {
        $data = InfrastructureManual::where('id', $id)->delete();
        return redirect(url('add-manual-details'))->with(['error' => 'Data deleted successfully']);
    }

    #Infrestructure Asset Register

public function asset_register_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = AssetRegister::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = AssetRegister::where('id', $id)->first();
    }
    return view('Dghrd.Admin.Infrastructure.asset_registers_Details', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function asset_register_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = AssetRegister::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-asset_register-details'))->with(['success' => 'Data uploaded Successfully']);
}

public function asset_register_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
        'tittle' => "required"
    ]);
    $data = AssetRegister::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-asset_register-details'))->with(['success' => 'Data Updated Successfully']);
}

public function asset_register_delete($id)
{
    $data = AssetRegister::where('id', $id)->delete();
    return redirect(url('add-asset_register-details'))->with(['error' => 'Data deleted successfully']);
}

#Infrestructure Land Assets

public function land_asset_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = LandAssets::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = LandAssets::where('id', $id)->first();
    }
    return view('Dghrd.Admin.Infrastructure.land_assets_Details', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function land_asset_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = LandAssets::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-land_assets-details'))->with(['success' => 'Data uploaded Successfully']);
}

public function land_asset_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
        'tittle' => "required"
    ]);
    $data = LandAssets::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-land_assets-details'))->with(['success' => 'Data Updated Successfully']);
}

public function land_asset_delete($id)
{
    $data = LandAssets::where('id', $id)->delete();
    return redirect(url('add-land_assets-details'))->with(['error' => 'Data deleted successfully']);
}
#Infrestructure construction

public function construction_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = Construction::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = Construction::where('id', $id)->first();
    }
    return view('Dghrd.Admin.Infrastructure.construction_Details', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function construction_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = Construction::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-construction-details'))->with(['success' => 'Data uploaded Successfully']);
}

public function construction_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
        'tittle' => "required"
    ]);
    $data = Construction::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-construction-details'))->with(['success' => 'Data Updated Successfully']);
}

public function construction_delete($id)
{
    $data = Construction::where('id', $id)->delete();
    return redirect(url('add-construction-details'))->with(['error' => 'Data deleted successfully']);
}

#Infrestructure Repair and Maintenance

public function repair_maintenance_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = RepairMaintenance::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = RepairMaintenance::where('id', $id)->first();
    }
    return view('Dghrd.Admin.Infrastructure.repair_maintenance_Details', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function repair_maintenance_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = RepairMaintenance::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-repair_maintenance-details'))->with(['success' => 'Data uploaded Successfully']);
}

public function repair_maintenance_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
        'tittle' => "required"
    ]);
    $data = RepairMaintenance::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-repair_maintenance-details'))->with(['success' => 'Data Updated Successfully']);
}

public function repair_maintenance_delete($id)
{
    $data = RepairMaintenance::where('id', $id)->delete();
    return redirect(url('add-repair_maintenance-details'))->with(['error' => 'Data deleted successfully']);
}



#Infrestructure Ready Built Accommodation

public function ready_built_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = ReadyBuilt::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = ReadyBuilt::where('id', $id)->first();
    }
    return view('Dghrd.Admin.Infrastructure.ready_built_Details', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function ready_built_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = ReadyBuilt::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-ready_built-details'))->with(['success' => 'Data uploaded Successfully']);
}

public function ready_built_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
        'tittle' => "required"
    ]);
    $data = ReadyBuilt::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-ready_built-details'))->with(['success' => 'Data Updated Successfully']);
}

public function ready_built_delete($id)
{
    $data = ReadyBuilt::where('id', $id)->delete();
    return redirect(url('add-ready_built-details'))->with(['error' => 'Data deleted successfully']);
}

#Infrestructure Hired Office Buildings

public function hired_office_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = HiredOffice::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = HiredOffice::where('id', $id)->first();
    }
    return view('Dghrd.Admin.Infrastructure.hired_office_Details', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function hired_office_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = HiredOffice::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-hired_office-details'))->with(['success' => 'Data uploaded Successfully']);
}

public function hired_office_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
        'tittle' => "required"
    ]);
    $data = HiredOffice::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-hired_office-details'))->with(['success' => 'Data Updated Successfully']);
}

public function hired_office_delete($id)
{
    $data = HiredOffice::where('id', $id)->delete();
    return redirect(url('add-hired_office-details'))->with(['error' => 'Data deleted successfully']);
}

#Infrestructure Various Communication With Field Formations

public function Various_communication_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = VariousCommunication::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = VariousCommunication::where('id', $id)->first();
    }
    return view('Dghrd.Admin.Infrastructure.various_communication_Details', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function Various_communication_save(Request $request)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
        'tittle' => "required",

    ]);

    $file = Null;
    if ($request->has('pdf')) {
        $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data = VariousCommunication::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-various_coomunication-details'))->with(['success' => 'Data uploaded Successfully']);
}

public function Various_communication_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx,ppt,xls,xls",
        'tittle' => "required"
    ]);
    $data = VariousCommunication::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-various_coomunication-details'))->with(['success' => 'Data Updated Successfully']);
}

public function Various_communication_delete($id)
{
    $data = VariousCommunication::where('id', $id)->delete();
    return redirect(url('add-various_coomunication-details'))->with(['error' => 'Data deleted successfully']);
}


}
