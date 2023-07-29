<?php

namespace App\Http\Controllers\Admin\mobozone\page;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\SingleProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductListController extends Controller
{
    public function productlist(Request $request){

        $product = DB::table('single_products')->first();
        $getproduct = DB::table('single_products')->first();
        $getslod = DB::table('orders')->where('order_status', 'CONFRIM ORDER')->count();

        $data['product'] = $product;
        $data['getproduct'] = $getproduct;
        $data['getslod'] = $getslod;

        return view('admin.mobozone.pages.manageproduct.productlist',$data);
    }

    public function addstrok(Request $request){

        $singelproduct = SingleProduct::first();


        if (empty($singelproduct)) {
            return response()->json([
                'status' => 0,
            ]);
        }
        $singelproduct->stocks = $request->stocks;
        $singelproduct->save();

        $request->session()->get('success', 'Product Stock Update Done.');
        session()->flash('success', 'Product Stock Update Done.');

        return response()->json([
            'status' => 200,
            'message' => 'Product Stock Update Successfully.',
        ]);
    }

    public function getstrok(Request $request){

        $singeproduct = SingleProduct::first();
        return response()->json([
            'status'=>200,
            'singeproduct'=> $singeproduct,
        ]);
    }

    public function productedit(Request $request){

        $getsingelproductid = SingleProduct::first();
        // dd($getsingelproductid);

        $singelproduct = SingleProduct::find($getsingelproductid->single_products_id);
        return response()->json([
            'status'=>200,
            'singelproduct'=> $singelproduct,
        ]);
    }

    public function update( Request $request)
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
            $getsingelproductid = SingleProduct::first();


            $singelproduct = SingleProduct::find($getsingelproductid->single_products_id);


            if (empty($singelproduct)) {
                return response()->json([
                    'status' => 20,
                ]);
            }
            $singelproduct->name = $request->name;
            $singelproduct->color = $request->color;
            $singelproduct->type = $request->type;
            $singelproduct->short_desc = $request->short_desc;
            $singelproduct->Brand = $request->Brand;
            $singelproduct->tag = $request->tag;
            $singelproduct->price = $request->price;
            $singelproduct->discount = $request->discount;
            $singelproduct->manufacturername =  $request->manufacturername;
            $singelproduct->manufacturerbrand =  $request->manufacturerbrand;
            $singelproduct->stocks =  $request->stocks;
            $singelproduct->visibility =  $request->visibility;
            $singelproduct->status =  $request->status;
            $singelproduct->save();

            $request->session()->get('success', 'Product Edit Done.');
            session()->flash('success', 'Product Edit Done.');

            return response()->json([
                'status' => 200,
                'message' => 'Product Edit Successfully.',
            ]);
        }
    }


    public function delete( Request $request)
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
            $getsingelproductid = SingleProduct::first();


            $singelproduct = SingleProduct::find($getsingelproductid->single_products_id);


            if (empty($singelproduct)) {
                return response()->json([
                    'status' => 20,
                ]);
            }
            $singelproduct->name = "";
            $singelproduct->color = "";
            $singelproduct->type = "";
            $singelproduct->sold_in_last_10_hours = "";
            $singelproduct->short_desc = "";
            $singelproduct->full_desc = "";
            $singelproduct->tag = "";
            $singelproduct->productcode = "";
            $singelproduct->reviews = "";
            $singelproduct->Viewing = "";
            $singelproduct->Brand = "";
            $singelproduct->leathertype = "";
            $singelproduct->material = "";
            $singelproduct->active_noise_cancellation = "";
            $singelproduct->communication = "";
            $singelproduct->control_the_volumes = "";
            $singelproduct->sensitivity = "";
            $singelproduct->impedance_range = "";
            $singelproduct->modelnumber = "";
            $singelproduct->headphone_pad_material = "";
            $singelproduct->bluetooth_version = "";
            $singelproduct->frequency_response_range = "";
            $singelproduct->total_harmonic_distortion = "";
            $singelproduct->charging_method = "";
            $singelproduct->maximum_output = "";
            $singelproduct->codecs = "";
            $singelproduct->resistance = "";
            $singelproduct->features = "";
            $singelproduct->price = 0;
            $singelproduct->point_1 = "";
            $singelproduct->point_2 = "";
            $singelproduct->exchangeable = "";
            $singelproduct->refundable = "";
            $singelproduct->manufacturername = "";
            $singelproduct->manufacturerbrand = "";
            $singelproduct->stocks = "";
            $singelproduct->discount = 0;
            $singelproduct->visibility = "";
            $singelproduct->status = "";
            $singelproduct->save();

            $request->session()->get('success', 'Product Edit Done.');
            session()->flash('success', 'Product Edit Done.');

            return response()->json([
                'status' => 200,
                'message' => 'Product Edit Successfully.',
            ]);
        }
    }
}
