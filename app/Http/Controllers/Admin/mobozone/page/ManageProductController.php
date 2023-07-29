<?php

namespace App\Http\Controllers\Admin\mobozone\page;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\SingleProduct;
use App\Models\Temp_image_faculty;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Intervention\Image\Facades\Image as ResizeImage;


class ManageProductController extends Controller
{
    public function plaseorder(Request $request){

        $order = DB::table('orders')->where('order_status', "PLACE ORDER")->where('is_fake',0)->get();
        $totalorder = Order::where('order_status', "PLACE ORDER")->where('is_fake',0)->count();


        $response = Http::post('https://api-hermes.pathao.com/aladdin/api/v1/issue-token',[
            'client_id' => 'VolejE4djN',
            'client_secret' => '3V6O15wqMsrOZJT0JezQYjwMVcQ9jYe2TP2gnXnW',
            'username' => 'shopix.com.bd@gmail.com',
            'password' => '622680498',
            'grant_type' => 'password',
        ]);


        $data = (array)json_decode($response->body());

            // print_r($data);
            // die;

        $access_token =  $data['access_token'];
        $refresh_token =  $data['refresh_token'];

        $response1 = Http::post('https://api-hermes.pathao.com/aladdin/api/v1/issue-token',[
            'client_id' => 'VolejE4djN',
            'client_secret' => '3V6O15wqMsrOZJT0JezQYjwMVcQ9jYe2TP2gnXnW',
            'refresh_token' => $refresh_token,
            'grant_type' => 'refresh_token',
        ]);

        $data1 = (array)json_decode($response1->body());
        // print_r($data1);
        // die;
        $new_refresh_token =  $data['refresh_token'];

        $response2 = Http::withHeaders([
            "Authorization" => "Bearer ". $access_token,
            "Content-Type" => "application/json",
            "Accept" => "application/json",

        ])->get('https://api-hermes.pathao.com/aladdin/api/v1/countries/1/city-list');


        $data2 = json_decode($response2->body());
        // $jsonData = (array)$response2['data']->json();

        // dd($data2->data->data);

        $newdata = $data2->data->data;


        // foreach($newdata as $newdatas){

        //     echo $newdatas->city_name;
        // }
        // exit;


        // print_r($data2);
        // die;
        // echo $citydata =  $data2['city_id'];
        // die;
        // dd($data2['data']);







        $data['newdata'] = $newdata;
        $data['order'] = $order;
        $data['totalorder'] = $totalorder;

        return view('admin.mobozone.pages.manageorder.plaseorder', $data);
    }

    public function plaseorderedit($id,Request $request){

        $singelorder = Order::find($id);
        return response()->json([
            'status'=>200,
            'singelorder'=> $singelorder,
        ]);
    }


    public function update1( Request $request)
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
            $order = Order::find($request->orders_id11);


            if (empty($order)) {
                return response()->json([
                    'status' => 20,
                ]);
            }
            $order->customer_name = $request->customer_name1;
            $order->customer_area = $request->customer_area1;
            $order->customer_full_address = $request->customer_full_address1;
            $order->product_name = $request->product_name1;
            $order->product_price = $request->product_price1;
            $order->quantity = $request->quantity1;
            $order->discount = $request->discount1;
            $tota_boll_data = ($request->product_price1 -$request->discount1) *$request->quantity1;
            $order->total_bill = $tota_boll_data;
            $order->Advance = $request->Advance1;
            $order->cash_collection =  $tota_boll_data-$request->Advance1;
            $order->extra_note =  $request->extra_note1;
            $order->payment_status =  $request->payment_status1;
            $order->order_status =  $request->order_status1;
            $order->save();

            $request->session()->get('success', 'Order Edit Done.');
            session()->flash('success', 'Order Edit Done.');

            return response()->json([
                'status' => 200,
                'message' => 'Order Edit Successfully.',
            ]);
        }
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
            $order = Order::find($request->orders_id);


            if (empty($order)) {
                return response()->json([
                    'status' => 20,
                ]);
            }
            $order->customer_name = $request->customer_name;
            $order->customer_area = $request->customer_area_change;
            $order->customer_zone = $request->customer_zone_change;
            $order->customer_particular_zone = $request->customer_particular_zone_change;

            $order->customer_area_no = $request->customer_area;
            $order->customer_zone_no = $request->customer_zone;
            $order->customer_particular_zone_no = $request->customer_particular_zone;

            $order->customer_full_address = $request->customer_full_address;
            $order->product_name = $request->product_name;
            $order->product_price = $request->product_price;
            $order->quantity = $request->quantity;
            $order->discount = $request->discount;
            $tota_boll_data = ($request->product_price -$request->discount) *$request->quantity;
            $order->total_bill = $tota_boll_data;
            $order->Advance = $request->Advance;
            $order->cash_collection =  $tota_boll_data-$request->Advance;
            $order->extra_note =  $request->extra_note;
            $order->payment_status =  $request->payment_status;
            $order->order_status =  $request->order_status;
            $order->save();

            $request->session()->get('success', 'Order Edit Done.');
            session()->flash('success', 'Order Edit Done.');

            return response()->json([
                'status' => 200,
                'message' => 'Order Edit Successfully.',
            ]);
        }
    }

    public function isfack($id, Request $request)
    {
        // dd($request->all());
        $validator = validator( $request->all(), [
        ]);




        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors(),
            ]);
        } else {
            $order = Order::find($id);


            if (empty($order)) {
                return response()->json([
                    'status' => 0,
                ]);
            }
            $order->is_fake = 1;
            $order->save();

            $request->session()->get('success', 'Order Fack Done.');
            session()->flash('success', 'Order Fack Done.');

            return response()->json([
                'status' => 200,
                'message' => 'Order Fack Successfully.',
            ]);
        }
    }
}
