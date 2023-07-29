<?php

namespace App\Http\Controllers\Admin\shopx;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashbordConoller extends Controller
{
    public function dashbord(Request $request){


        $plaseorder = DB::table('orders')->where('order_status', 'PLACE ORDER')->where('is_fake', 0)->count();
        $rejectorder = DB::table('orders')->where('order_status', 'REJECTED ORDER')->where('is_fake', 0)->count();
        $confromrder = DB::table('orders')->where('order_status', 'CONFRIM ORDER')->where('is_fake', 0)->count();
        $prossaingorder = DB::table('orders')->where('order_status', 'PROCESSING ORDER')->where('is_fake', 0)->count();
        $fakeorder = DB::table('orders')->where('is_fake', 1)->count();
        $tranjenorder = DB::table('orders')->where('order_status', 'PRODUCTS IN TRANSIT')->where('is_fake', 0)->count();
        $deliveryorder = DB::table('orders')->where('order_status', 'DELIVERY ORDER')->where('is_fake', 0)->count();
        $cancalorder = DB::table('orders')->where('order_status', 'CANCELL ORDER')->where('is_fake', 0)->count();

// dd($rejectorder);



        $data['plaseorder'] = $plaseorder;
        $data['rejectorder'] = $rejectorder;
        $data['confromrder'] = $confromrder;
        $data['prossaingorder'] = $prossaingorder;
        $data['fakeorder'] = $fakeorder;
        $data['tranjenorder'] = $tranjenorder;
        $data['deliveryorder'] = $deliveryorder;
        $data['cancalorder'] = $cancalorder;

        return view('admin.layoutsMain.dashbord2',$data);
    }

    public function rejectorder(Request $request){

        $name = "REJECTED ORDER";
        $totleorder = DB::table('orders')->where('is_fake', 0)->count();
        $rejectorder1 = DB::table('orders')->where('order_status', 'REJECTED ORDER')->where('is_fake', 0)->count();

        $persentagereject =$rejectorder1 / $totleorder;
        $persentagereject2 = $persentagereject * 100;
        $lastpersentreject = number_format($persentagereject2, 0);
        // dd($lastpersentreject);
        $rejectorder_data = [
            'name'=> $name,
            'data' => $lastpersentreject,

        ];

        return response()->json([
            'status'=>200,
            'rejectorder_data'=> $rejectorder_data,
        ]);
    }
}
