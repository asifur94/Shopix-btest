<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use App\Models\BlogComments;
// use App\Models\Blogs;
use App\Models\Faculty;
use App\Models\HomePageHeroSlide;
use App\Models\ModelsProductCategories;
use App\Models\Order;
use App\Models\Product;
use App\Models\Services;
use App\Models\SingleProduct;
use App\Models\WebsiteData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(Request $request){


        $getproduct = DB::table('single_products')->first();
        $websitedata = WebsiteData::first();


        // $response = Http::post('https://api-hermes.pathao.com/aladdin/api/v1/issue-token',[
        //     'client_id' => 'VolejE4djN',
        //     'client_secret' => '3V6O15wqMsrOZJT0JezQYjwMVcQ9jYe2TP2gnXnW',
        //     'username' => 'shopix.com.bd@gmail.com',
        //     'password' => '622680498',
        //     'grant_type' => 'password',
        // ]);


        // $data = (array)json_decode($response->body());

        //     // print_r($data);
        //     // die;

        // $access_token =  $data['access_token'];
        // $refresh_token =  $data['refresh_token'];

        // $response1 = Http::post('https://api-hermes.pathao.com/aladdin/api/v1/issue-token',[
        //     'client_id' => 'VolejE4djN',
        //     'client_secret' => '3V6O15wqMsrOZJT0JezQYjwMVcQ9jYe2TP2gnXnW',
        //     'refresh_token' => $refresh_token,
        //     'grant_type' => 'refresh_token',
        // ]);

        // $data1 = (array)json_decode($response1->body());
        // // print_r($data1);
        // // die;
        // $new_refresh_token =  $data['refresh_token'];

        // $response2 = Http::withHeaders([
        //     "Authorization" => "Bearer ". $access_token,
        //     "Content-Type" => "application/json",
        //     "Accept" => "application/json",

        // ])->get('https://api-hermes.pathao.com/aladdin/api/v1/countries/1/city-list');


        // $data2 = json_decode($response2->body());
        // $jsonData = (array)$response2['data']->json();

        // dd($data2->data->data);

        // $newdata = $data2->data->data;


        // foreach($newdata as $newdatas){

        //     echo $newdatas->city_name;
        // }
        // exit;


        // print_r($data2);
        // die;
        // echo $citydata =  $data2['city_id'];
        // die;
        // dd($data2['data']);







        $data['getproduct'] = $getproduct;
        $data['websitedata'] = $websitedata;
        // $data['newdata'] = $newdata;




        return view('fontend.home',$data);
    }


    public function save(Request $request)
    {

        // dd($request->all());
        $validator = validator($request->all(), [
            'customer_name' => 'required|min:3',
            'phone' => 'required|numeric|digits:11',
            // 'customer_area' => 'required',
            'customer_full_address' => 'required|min:10',
        ]);

        // dd($request->all());

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),0
            ]);
        } else {

            $getproductdittels = DB::table('single_products')->first();

            $order = new Order();
            $order->customer_name = $request->customer_name;
            $order->phone = $request->phone;
            $order->customer_area = $request->customer_area;
            $order->customer_zone = $request->customer_zone;
            $order->customer_particular_zone = $request->customer_particular_zone;
            $order->delivery_type = $request->delivery_type;
            $order->item_type = $request->item_type;
            $order->item_weight = $request->item_weight;
            $order->customer_full_address = $request->customer_full_address;
            $order->product_name = $getproductdittels->name;
            $order->product_price = $getproductdittels->discount;
            $order->total_bill = $getproductdittels->discount;
            $order->payment_status = "Unpaid";
            $order->order_status = "PLACE ORDER";

            $order->save();


            $request->session()->get('success', 'Order Created Successfully.');
            session()->flash('success', 'Task was successful!');

             $getlastorder = DB::table('orders')->latest()->first();
            //  dd($getlastorder);
            // $data = "RIdoy Khan";
            return response()->json($getlastorder, 300);
        }
    }


    public function zone(Request $request){


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

        ])->get('https://api-hermes.pathao.com/aladdin/api/v1/cities/'.$request->city.'/zone-list');


        $data2 = json_decode($response2->body());
        // $jsonData = (array)$response2['data']->json();

        // dd($data2->data->data);

        $newdata2 = $data2->data->data;

        return $newdata2;

    }

    public function particularzone(Request $request){


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

        // dd($request->all());

        // $datar = $request->zone_id;

        $response2 = Http::withHeaders([
            "Authorization" => "Bearer ". $access_token,
            "Content-Type" => "application/json",
            "Accept" => "application/json",

        ])->get('https://api-hermes.pathao.com/aladdin/api/v1/zones/'.$request->zone . '/area-list');


        $data2 = json_decode($response2->body());
        // $jsonData = (array)$response2['data']->json();

        // dd($data2->data->data);

        $newdata2 = $data2->data->data;

        return $newdata2;

    }

}

