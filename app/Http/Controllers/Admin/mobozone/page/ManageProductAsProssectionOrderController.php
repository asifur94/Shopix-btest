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
class ManageProductAsProssectionOrderController extends Controller
{
    public function porssising(Request $request){

        $order = DB::table('orders')->where('order_status', "PROCESSING ORDER")->where('is_fake',0)->get();
        $totalorder = Order::where('order_status', "PROCESSING ORDER")->count();
        $newdata = 1;








        $data['newdata'] = $newdata;
        $data['order'] = $order;
        $data['totalorder'] = $totalorder;

        return view('admin.mobozone.pages.manageorder.processingorder', $data);
    }
}
