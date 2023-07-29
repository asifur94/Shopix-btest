<?php

namespace App\Http\Controllers\Admin\mobozone\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SmstemplateContoller extends Controller
{
    public function index(){

        return view('admin.mobozone.pages.websitesetting.smsservice.smstemplate');
    }
}
