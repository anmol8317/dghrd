<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function dashboard(){
        return view('Dghrd.Admin.Dashboard.Dashboard');
    }

    public function project_view($id = null)
{
    $admin = request()->session()->get('admin-auth');
    $data = Project::orderBy('id', 'DESC')->get();
    $value = null;
    if ($id) {
        $value = Project::where('id', $id)->first();
    }
    return view('Dghrd.Admin.Dashboard.project', ['admin' => $admin, 'data' => $data, 'value' => $value]);
}

public function project_save(Request $request)
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
    $data = Project::create([
        'tittle' => $request->tittle,
        'pdf' => $file,
        'date' => $request->date
    ]);

    return redirect(url('add-project'))->with(['success' => 'Data uploaded Successfully']);
}

public function project_update(Request $request, $id)
{
    #validation
    $this->validate($request, [
        "pdf" => "mimes:doc,pdf,docx",
        'tittle' => "required"
    ]);
    $data = Project::find($id);
    $fileName = $data->pdf;
    if ($request->has('pdf')) {
        $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
    }
    $data->tittle = $request->tittle;
    $data->pdf = $fileName;
    $data->date = $request->date;
    $data->save();
    return redirect(url('add-project'))->with(['success' => 'Data Updated Successfully']);
}

public function project_delete($id)
{
    $data = Project::where('id', $id)->delete();
    return redirect(url('add-project'))->with(['error' => 'Data deleted successfully']);
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
