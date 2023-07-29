<?php

namespace App\Http\Controllers\Admin\mobozone\pages;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Temp_image_faculty;
use Illuminate\Support\Facades\DB;

use Intervention\Image\Facades\Image as ResizeImage;

class AdminProfileController extends Controller
{
    public function index()
    {
        return view('admin.mobozone.pages.admin.adminprofile');
    }



    public function update( Request $request)
    {
        // echo "I am here";
        // dd($request->all());

        $id = Auth::guard('admin')->user()->id;

        // dd($id);
        $validator = validator($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
        ]);


        $oldpass=  $request->old_password;

        // dd($oldpass);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors(),
            ]);
        } else {
            $getadmin = Admin::where('id', $id)->first();

            $oldpass =  $request->old_password;

            // dd(decrypt(Auth::guard('admin')->user()->password));

            if (empty($getadmin)) {
                return response()->json([
                    'status' => 0,
                ]);
            }
            $getadmin->name = $request->name;
            $getadmin->email = $request->email;
            $getadmin->status = $request->status;
            $getadmin->save();


            if ($request->image_id > 0) {
                $tempImage = Temp_image_faculty::where('temp_image_faculties_id', $request->image_id)->first();
                $tempFileName = $tempImage->name;
                $imageArray = explode('.', $tempFileName);
                $ext = end($imageArray);

                $newFileName = 'admin-'.strtotime('now') . $request->image_id . '.' . $ext;

                $sourcePath = './uploads/temp/' . $tempFileName;

                // echo "$sourcePath";

                //Generate Small Thumbnail
                $dPath = './uploads/admin/thumb/small/' . $newFileName;
                $img = ResizeImage::make($sourcePath);
                $img->resize(90, 90, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save($dPath);

                //Generate large Thumbnail
                $dPath = './uploads/admin/thumb/large/' . $newFileName;
                $img = ResizeImage::make($sourcePath);
                $img->resize(1150, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save($dPath);

                $getadmin->img = $newFileName;
                $getadmin->save();


            }

            $request->session()->get('success', 'Personal Info edit Done.');
            session()->flash('success', 'Personal Info edit Done.');

            return response()->json([
                'status' => 200,
                'message' => 'Personal Info edit Successfully.',
            ]);
        }
    }




    public function chnagepass( Request $request)
    {
        // echo "I am here";
        // dd($request->all());

        $id = Auth::guard('admin')->user()->id;

        // dd($id);
        $validator = validator($request->all(), []);


        $oldpass=  $request->old_password;

        // dd($oldpass);

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors(),
            ]);
        } else {
            $getadmin = Admin::where('id', $id)->first();

            $oldpass =  $request->old_password;

            // dd(decrypt(Auth::guard('admin')->user()->password));

            if (empty($getadmin)) {
                return response()->json([
                    'status' => 0,
                ]);
            }
            if( Hash::check($oldpass, Auth::guard('admin')->user()->password)){

                $getadmin->password = bcrypt($request->new_password);
                $getadmin->save();

                $request->session()->get('success', 'Password Change Done.');
                session()->flash('success', 'Password Change Done.');

                return response()->json([
                    'status' => 200,
                    'message' => 'Password Change Successfully.',
                ]);
            } else {
                $request->session()->get('errors', 'Old Password Didnt Math.');
                session()->flash('errors', 'Old Password Didnt Math!');

                return response()->json([
                    'status' => 0,
                    'message' => 'Password change not working.',
                ]);
            }
        }
    }
}
