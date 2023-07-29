<?php

namespace App\Http\Controllers\Admin\mobozone\page;

use App\Http\Controllers\Controller;
use App\Models\Temp_image_faculty;
use App\Models\WebsiteData;
use App\Models\WebsiteSetting;
use App\Models\WebsiteSetting1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image as ResizeImage;

class ManageWebsiteContoller extends Controller
{
    public function editindex(Request $request){

        $websitedata = WebsiteSetting::first();
        $websitedata1 = WebsiteSetting1::first();

        // dd($websitedata->website_title);

        $data['websitedata'] = $websitedata;
        $data['websitedata1'] = $websitedata1;

        return view('admin.mobozone.pages.managewebsite.create',$data);
    }



    public function save(Request $request)
    {
        // dd($request->all());
        // echo "<pre>";
        // print_r($request->all());

        $validator = validator($request->all(), [
        ]);




        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors(),
            ]);
        } else {
            $editwebsite = WebsiteSetting::first();


            if (empty($editwebsite)) {
                return response()->json([
                    'status' => 20,
                ]);
            }

            $editwebsite->website_title =  $request->website_title;
            $editwebsite->theme_color =  $request->theme_color;

            if($request->system_logo!= null){
                $systemlogo = time() . "sys.". $request->file('system_logo')->getClientOriginalExtension();
                $request->file('system_logo')->move(public_path().'/uploads/logos', $systemlogo);
                $editwebsite->system_logo =  $systemlogo;

            }

            if($request->header_logo!= null){
                $headerlogo = time() . "hed.". $request->file('header_logo')->getClientOriginalExtension();
                $request->file('header_logo')->move(public_path().'/uploads/logos', $headerlogo);
                $editwebsite->header_logo =  $headerlogo;

            }

            if($request->fabicon!= null){
                $fabicon = time() . "fab.". $request->file('fabicon')->getClientOriginalExtension();
                $request->file('fabicon')->move(public_path().'/uploads/logos', $fabicon);
                $editwebsite->fabicon =  $fabicon;
            }

            $editwebsite->save();


            $request->session()->get('success', 'Order Edit Done.');
            session()->flash('success', 'Order Edit Done.');

             return redirect('/admin/editwebste');
        }
    }

    public function save1(Request $request)
    {
        // dd($request->all());
        // echo "<pre>";
        // print_r($request->all());

        $validator = validator($request->all(), [
        ]);




        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors(),
            ]);
        } else {
            $editwebsite = WebsiteSetting1::first();


            if (empty($editwebsite)) {
                return response()->json([
                    'status' => 20,
                ]);
            }
            if($request->fabicon!= null){
                $invoicelogo = time() . "inv.". $request->file('invoice_logo')->getClientOriginalExtension();
                $request->file('invoice_logo')->move(public_path().'/uploads/logos', $invoicelogo);
                $editwebsite->invoice_logo =  $invoicelogo;
            }

            $editwebsite->address =  $request->address;
            $editwebsite->email =  $request->email;
            $editwebsite->phone =  $request->phone;

            $editwebsite->save();


            $request->session()->get('success', 'Order Edit Done.');
            session()->flash('success', 'Order Edit Done.');

             return redirect('/admin/editwebste');
        }
    }

}
