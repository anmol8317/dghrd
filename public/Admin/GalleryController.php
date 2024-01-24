<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;

class GalleryController extends Controller
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

    public function gallery_view($id = null)
    {
        $admin = request()->session()->get('admin-auth');

        $data = Gallery::orderBy('id', 'DESC')->get();

        $value = null;
        if ($id) {
            $value = Gallery::where('id', $id)->first();
        }
        return view('Dghrd.Admin.gallery.galleryDetailes', ['admin' => $admin, 'data' => $data, 'value' => $value]);
    }

    public function gallery_save(Request $request)
    {

        #validation
        $this->validate($request, [
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $file = Null;
        if ($request->has('image')) {
            $file = $this->UploadImage('Admin/Images', '', $request->file('image'));
        }
        $data = Gallery::create([
            'image' => $file,
        ]);
        return redirect(url('gallery'))->with(['success' => 'Data uploaded Successfully']);
    }

    public function gallery_update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        $mini = Gallery::find($id);
        $fileName = $mini->image;
        if ($request->has('image')) {
            $fileName = $this->UploadImage('Admin/Images', '', $request->file('image'));
        }

        $mini->image = $fileName;
        $mini->save();
        return redirect(url('gallery'))->with(['success' => 'Data uploaded Successfully']);
    }


    public function gallery_delete($id)
    {
        $image = Gallery::where('id', $id)->delete();
        return redirect(url('gallery'))->with(['error' => 'Data deleted successfully']);
    }

}
