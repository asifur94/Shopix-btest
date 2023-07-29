<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCatagory;
use App\Models\blogs;
use App\Models\Brand;
use App\Models\HomePageHeroSlide;
use App\Models\ModelsProductCategories;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {


        return view('admin.layoutsmain.dashbord2');
    }
}
