<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shraddhanjali;


class CovidResponceController extends Controller
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
#Shraddhanjali
    public function shraddhanajli_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');
        $data = Shraddhanjali::orderBy('id', 'DESC')->get();
        $value = null;
        if ($id) {
            $value = Shraddhanjali::where('id', $id)->first();
        }
        return view('Dghrd.Admin.Cbic_Covid_responce.shraddhanjaliDetails', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

     public function shraddhanajli_save(Request $request)
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
        $data = Shraddhanjali::create([
            'tittle' => $request->tittle,
            'pdf' => $file,
            'date' => $request->date
        ]);

        return redirect(url('add-shrdhanjali-details'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function shraddhanajli_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:doc,pdf,docx",
            'tittle' => "required"
        ]);
        $data = Shraddhanjali::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->tittle = $request->tittle;
        $data->pdf = $fileName;
        $data->date = $request->date;
        $data->save();
        return redirect(url('add-shrdhanjali-details'))->with(['success' => 'Data Updated Successfully']);
    }

    public function shraddhanajli_delete($id)
    {
        $data = Shraddhanjali::where('id', $id)->delete();
        return redirect(url('add-shrdhanjali-details'))->with(['error' => 'Data deleted successfully']);
    }

}
