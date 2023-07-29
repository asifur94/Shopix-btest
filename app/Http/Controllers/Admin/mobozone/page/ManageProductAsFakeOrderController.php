<?php

namespace App\Http\Controllers\Admin\mobozone\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\SingleProduct;
use App\Models\Temp_image_faculty;
use Illuminate\Support\Facades\DB;

use Intervention\Image\Facades\Image as ResizeImage;
class ManageProductAsFakeOrderController extends Controller
{
    public function fakeorder(Request $request){

        $order = DB::table('orders')->where('is_fake',1)->get();
        $totalorder = Order::where('is_fake',1)->count();

        $data['order'] = $order;
        $data['totalorder'] = $totalorder;

        return view('admin.mobozone.pages.manageorder.fakeorder', $data);
    }
}
