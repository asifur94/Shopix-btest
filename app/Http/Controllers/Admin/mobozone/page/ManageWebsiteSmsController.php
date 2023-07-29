<?php

namespace App\Http\Controllers\Admin\mobozone\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ManageWebsiteSmsController extends Controller
{
    public function sendsms(){

        // $url = 'https://api.sms.net.bd/sendsms';
        // $data = [
        //     'api_key' => '6eZ68Djo83apfC3J94M7R511CZv9X9g29xB11TKc',
        //     'msg' => 'This is first test sms',
        //     'to' => '8801726848561',
        // ];
        $response = Http::post('https://api.sms.net.bd/sendsms', [
            'api_key' => '6eZ68Djo83apfC3J94M7R511CZv9X9g29xB11TKc',
            'msg' => 'This is first test sms',
            'to' => '8801726848561',
        ]);

        $response = json_decode($response->body());

        return $response;
    }



    public function getbalance(){
        $url = 'https://api.sms.net.bd/user/balance/';
        $data = [
            'api_key' => '6eZ68Djo83apfC3J94M7R511CZv9X9g29xB11TKc',

        ];

        $response = Http::get($url, $data);

        $response = json_decode($response->body());

        return $response;

    }
}
