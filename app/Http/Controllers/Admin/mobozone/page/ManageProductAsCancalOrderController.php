<?php

namespace App\Http\Controllers\Admin\mobozone\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\SingleProduct;
use App\Models\Temp_image_faculty;
use Illuminate\Support\Facades\DB;

use Intervention\Image\Facades\Image as ResizeImage;
class ManageProductAsCancalOrderController extends Controller
{
    public function cancle(Request $request){

        $order = DB::table('orders')->where('order_status', "CANCELL ORDER")->where('is_fake',0)->get();
        $totalorder = Order::where('order_status', "CANCELL ORDER")->count();

        $data['order'] = $order;
        $data['totalorder'] = $totalorder;

        return view('admin.mobozone.pages.manageorder.cancelorder', $data);
    }
}

