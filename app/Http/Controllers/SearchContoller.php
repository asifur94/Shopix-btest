<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchContoller extends Controller
{
    public function index(Request $request)
    {
        $product = Product::orderBy('created_at', 'DESC')->where('status', 1);
        $blog = blogs::orderBy('created_at', 'DESC')->where('status', 1);
        // dd($product);

        if (!empty($request->keyword)) {
            $product = $product->where('name', 'like', '%' . $request->keyword . '%');
        }

        if (!empty($request->keyword)) {
            $blog = $product->where('name', 'like', '%' . $request->keyword . '%');
        }



        $product = $product->get();

        $data['product'] = $product;
        $data['blog'] = $blog;

        return view('fontend.mobozone.search', $data);
    }

}
