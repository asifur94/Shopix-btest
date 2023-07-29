<?php

namespace App\Http\Controllers\Admin\mobozone\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ManageShippingCotroller extends Controller
{
    public function shipping(){


        // dd("Hello Word!");


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
            "Authorization" => "Bearer $access_token",
            "Content-Type" => "application/json",
            "Accept" => "application/json",

        ])->get('https://api-hermes.pathao.com/aladdin/api/v1/countries/1/city-list');


        $data2 = (array)json_decode($response2->body());
        // print_r($data2);
        // die;
        // echo $citydata =  $data2['city_id'];
        // die;
        // dd($data2['data']);

        // dd($data2);


        $response3 = Http::withHeaders([
            "Authorization" => "Bearer $access_token",
            "Content-Type" => "application/x-www-form-urlencoded",
            "Accept" => "application/json",

        ])->post('https://api-hermes.pathao.com/aladdin/api/v1/orders',[
            'from_params' => [
                "store_id" => "91006",
                "merchant_order_id" => "011",
                "sender_name" => "Ridoy Khan",
                "sender_phone" => "01726848561",
                "recipient_name" => "Rana",
                "recipient_phone" => "01976848561",
                "recipient_address" => "45 no kajla, jatrabari, Dhaka, Bangladesh",
                "recipient_city" => "Dhaka",
                "recipient_zone" => "",
                "recipient_area" => "",
                "delivery_type" => "Normal Delivery",
                "item_type" => "1",
                "special_instruction" => "This is test.",
                "item_quantity" => "1",
                "item_weight" => "1kg",
                "amount_to_collect" => "1000",
                "item_description" => "This is a test.",
            ]
        ]);

        dd($response3);

        $data3 = json_decode($response3->body());


        print_r($data3);
        die;
    }
}
