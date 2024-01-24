<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MiniSlider;
use App\Models\Notification;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class CMSController extends Controller
{




    public function slider($id = null)
    {
        $admin = request()->session()->get('admin-auth');

        $data = Slider::orderBy('id', 'DESC')->get();

        $value = null;
        if ($id) {
            $value = Slider::where('id', $id)->first();
        }
        return view('Dghrd.Admin.Home.Slider', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function sliderSave(Request $request)
    {

        #validation
        $this->validate($request, [
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $file = Null;
        if ($request->has('image')) {
            $file = $this->UploadImage('Admin/Images', '', $request->file('image'));
        }
        $data = Slider::create([
            'image' => $file,
        ]);
        return redirect(url('slider'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function sliderUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        $mini = Slider::find($id);
        $fileName = $mini->image;
        if ($request->has('image')) {
            $fileName = $this->UploadImage('Admin/Images', '', $request->file('image'));
        }

        $mini->image = $fileName;
        $mini->save();
        return redirect(url('slider'))->with(['success' => 'Data uploaded Successfully']);
    }


    public function sliderdelete($id)
    {
        $image = Slider::where('id', $id)->delete();
        return redirect()->back()->with(['error' => 'Data deleted successfully']);
    }





    #notification

    public function notification_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');

        $data = Notification::orderBy('id', 'DESC')->get();

        $value = null;
        if ($id) {
            $value = Notification::where('id', $id)->first();
        }
        return view('Dghrd.Admin.Home.Notification', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }


    public function notification_save(Request $request)
    {

        #validation
        $this->validate($request, [
            "pdf" => "mimes:pdf|max:10000"
        ]);

        $file = Null;
        if ($request->has('pdf')) {
            $file = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data = Notification::create([
            'heading' => $request->heading,
            'pdf' => $file,
        ]);

        return redirect(url('notification'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function notification_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            "pdf" => "mimes:pdf|max:10000"
        ]);
        $data = Notification::find($id);
        $fileName = $data->pdf;
        if ($request->has('pdf')) {
            $fileName = $this->UploadImage('Admin/Pdf', '', $request->file('pdf'));
        }
        $data->heading = $request->heading;
        $data->pdf = $fileName;
        $data->save();
        return redirect(url('notification'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function notification_delete($id)
    {
        $image = Notification::where('id', $id)->delete();
        return redirect(url('notification'))->with(['error' => 'Data deleted successfully']);
    }


    #media



    #minislider
    public function mini_slider($id = null)
    {
        $admin = request()->session()->get('admin-auth');

        $data = MiniSlider::orderBy('id', 'DESC')->get();

        $value = null;
        if ($id) {
            $value = MiniSlider::where('id', $id)->first();
        }
        return view('Dghrd.Admin.Home.MiniSlider', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function mini_slider_save(Request $request)
    {
        #validation
        $this->validate($request, [
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        $file = Null;
        if ($request->has('image')) {
            $file = $this->UploadImage('Admin/Images', '', $request->file('image'));
        }
        $data = MiniSlider::create([
            'image' => $file,
        ]);

        return redirect(url('mini-slider'))->with(['success' => 'Data uploaded Successfully']);
    }


    public function mini_slider_update(Request $request, $id)
    {
        #validation
        $this->validate($request, [
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        $data = MiniSlider::find($id);
        $fileName = $data->image;
        if ($request->has('image')) {
            $fileName = $this->UploadImage('Admin/Images', '', $request->file('image'));
        }
        $data->image = $fileName;
        $data->save();
        return redirect(url('mini-slider'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function mini_slider_delete($id)
    {
        $image = MiniSlider::where('id', $id)->delete();
        return redirect(url('mini-slider'))->with(['error' => 'Data deleted successfully']);
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
