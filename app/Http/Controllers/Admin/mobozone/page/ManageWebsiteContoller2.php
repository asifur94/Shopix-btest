<?php

namespace App\Http\Controllers\Admin\mobozone\page;

use App\Http\Controllers\Controller;
use App\Models\Temp_image_faculty;
use App\Models\WebsiteData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image as ResizeImage;

class ManageWebsiteContoller2 extends Controller
{
    public function editindex(Request $request){

        $websitedata = DB::table('website_data')->first();

        $data['websitedata'] = $websitedata;

        return view('admin.mobozone.pages.managewebsite.create',$data);
    }



    public function save(Request $request)
    {
        // dd($request->all());
        $validator = validator($request->all(), [
        ]);




        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors(),
            ]);
        } else {
            $editwebsite = WebsiteData::first();


            if (empty($editwebsite)) {
                return response()->json([
                    'status' => 20,
                ]);
            }

            $editwebsite->website_title =  $request->website_title;
            $editwebsite->topbar =  $request->topbar;
            $editwebsite->sticy_topbar =  $request->sticy_topbar;
            $editwebsite->herotitle =  $request->herotitle;
            // $editwebsite->hero_bg_video =  $request->hero_bg_video;
            $editwebsite->why_buy =  $request->why_buy;
            $editwebsite->why_buy_points =  $request->why_buy_points;
            $editwebsite->why_buy_img =  $request->why_buy_img;
            $editwebsite->timer_title =  $request->timer_title;
            $editwebsite->timer_date =  $request->timer_date;
            $editwebsite->prdouct_bottom_text =  $request->prdouct_bottom_text;
            $editwebsite->footer =  $request->footer;
            $editwebsite->save();

            if ($request->image_id > 0) {
                $tempImage = Temp_image_faculty::where('temp_image_faculties_id', $request->image_id)->first();
                $tempFileName = $tempImage->name;
                $imageArray = explode('.', $tempFileName);
                $ext = end($imageArray);

                $newFileName = 'editwebsite-' . $request->image_id . '.' . $ext;

                $sourcePath = './uploads/temp/' . $tempFileName;

                // echo "$sourcePath";

                //Generate Small Thumbnail
                $dPath = './uploads/website/thumb/small/' . $newFileName;
                $why_buy_img = ResizeImage::make($sourcePath);
                $why_buy_img->resize(126, 174, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $why_buy_img->save($dPath);

                //Generate large Thumbnail
                $dPath = './uploads/website/thumb/large/' . $newFileName;
                $why_buy_img = ResizeImage::make($sourcePath);
                $why_buy_img->resize(187, 225, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $why_buy_img->save($dPath);

                $editwebsite->why_buy_img = $newFileName;
                $editwebsite->save();


            }

            $request->session()->get('success', 'Order Edit Done.');
            session()->flash('success', 'Order Edit Done.');

             return redirect('/admin/conframorder');
        }
    }
}
