<?php

namespace App\Http\Controllers\admin\mobozone\page;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ManageProductAsCanceledController extends Controller
{
    public function canceled(){



        $order = DB::table('orders')->where('order_status', "PROCESSING ORDER")->where('is_fake',0)->get();
        // $totalorder = Order::where('order_status', "PLACE ORDER")->where('is_fake',0)->count();





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

            // dd($data);

        $access_token =  $data['access_token'];
        // $refresh_token =  $data['refresh_token'];
        // die;


        foreach($order as $orders)
        {
            // print_r($orders->consignment_id);
            $consignmentId = $orders->consignment_id;
            $orders_id = $orders->orders_id;
            $response2 = Http::withHeaders([
                "Authorization" => "Bearer $access_token",
                "Content-Type" => "application/json",
                "Accept" => "application/json",

            ])->get("https://api-hermes.pathao.com/aladdin/api/v1/orders/{$consignmentId}");


            $data2 = json_decode($response2->body());
            // $jsonData = (array)$response2['data']->json();

            // dd($data2->data->data);

            // $newdata = $data2;

            // echo print_r($data2) ;
                // die;

            // dd($response2->body());
            // dd($data2->data->order_status);

            if($data2->data->order_status == "Delivery_Failed"){
                // $lastdata[] = $orders_id;

                $getorder = Order::find($orders_id);

                $getorder->order_status2 = "Delivery_Failed";
                $getorder->save();
            }

        }
        // die;

        // dd($access_token);
        $order = DB::table('orders')->where('order_status', "Delivery_Failed")->where('is_fake',0)->get();
        $totalorder = DB::table('orders')->where('order_status', "Delivery_Failed")->where('is_fake',0)->count();

        $data['order'] = $order;
        $data['totalorder'] = $totalorder;




        // foreach($newdata as $newdatas){

        //     echo $newdatas->city_name;
        // }
        // exit;


        // print_r($data2);
        // die;
        // echo $citydata =  $data2['city_id'];
        // die;
        // dd($data2['data']);

        return view('admin.mobozone.pages.manageorder.canceledorder', $data);


    }
}
