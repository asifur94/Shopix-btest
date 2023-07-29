<?php

namespace App\Http\Controllers\Admin\mobozone\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\SingleProduct;
use App\Models\Temp_image_faculty;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Intervention\Image\Facades\Image as ResizeImage;
class ManageProductAsConframOrderController extends Controller
{
    public function conframorder(Request $request){

        $order = DB::table('orders')->where('order_status', "CONFRIM ORDER")->where('is_fake',0)->get();
        $totalorder = Order::where('order_status', "CONFRIM ORDER")->count();

        $data['order'] = $order;
        $data['totalorder'] = $totalorder;

        return view('admin.mobozone.pages.manageorder.conferamorder', $data);
    }

    public function plaseorderedit($id,Request $request){

        $singelorder = Order::find($id);
        return response()->json([
            'status'=>200,
            'singelorder'=> $singelorder,
        ]);
    }


    public function update($id, Request $request)
    {
        // dd($request->all());
        // die;
        $validator = validator($request->all(), [
        ]);




        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors(),
            ]);
        } else {
            $order = Order::find($id);

            $getorderdata = Order::where('orders_id', $id)->first();

            // dd($getorderdata->customer_name);


            if (empty($order)) {
                return response()->json([
                    'status' => 20,
                ]);
            }







            // Pathow Push Api:
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


            // dd($access_token);


            $response = Http::withHeaders([
                'Authorization' => "Bearer $access_token",
                'Content-Type' => "application/json",
                'Accept' => "application/json",
             ])
             ->send('POST', 'https://api-hermes.pathao.com/aladdin/api/v1/orders', [
                'body' => json_encode([
                             'store_id' => "91006",
                             'merchant_order_id' => "$id",
                             'sender_name' => "Shopx",
                             'sender_phone' => "01726848561",
                             'recipient_name' => "$getorderdata->customer_name",
                             'recipient_phone' => "$getorderdata->phone",
                             'recipient_address' => "$getorderdata->customer_full_address",
                             'recipient_city' => "$getorderdata->customer_area_no",
                             'recipient_zone' => "$getorderdata->customer_zone_no",
                             'recipient_area' => "$getorderdata->customer_particular_zone_no",
                             'delivery_type' => "48",
                             'item_type' => "2",
                             'special_instruction' => "$getorderdata->extra_note",
                             'item_quantity' => "$getorderdata->quantity",
                             'item_weight' => "1",
                             'amount_to_collect' => "$getorderdata->total_bill",
                             'item_description' => "$getorderdata->extra_note",

                         ])
             ])->json();

            //  $mydata = json_encode($response->data[0]);
            // $data2 = json_decode($response);consignment_id

            //  dd($response[4]->data[0]);
            //  dd($mydata);

            //  $data2 = (string)($response);
             // $jsonData = (array)$response2['data']->json();

            //    $data = json_decode($response);

            // foreach ($data as $file) {
            //     echo $file->consignment_id;
            //  }
            //  die;

            // $jsonArray = json_decode($response,true);
                // dd($response);


            // echo "<pre>";

            // foreach($response as $responses)
            // {
            // }
            // die;

            //  $newdata = $data2->data->data;

            // dd($response['data']['consignment_id']);

            $order->consignment_id =  $response['data']['consignment_id'];
            $order->order_status =  "PROCESSING ORDER";
            $order->save();












            $request->session()->get('success', 'Order Edit Done.');
            session()->flash('success', 'Order Edit Done.');

             return redirect('/admin/conframorder');
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
