<?php

namespace App\Http\Controllers\admin\mobozone\pages;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\ModelsProductCategories;
use App\Models\Product;
use App\Models\SingleProduct;
use App\Models\Temp_image_faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Intervention\Image\Facades\Image as ResizeImage;


class AdminProductController extends Controller
{


    public function create(Request $request){

        $getproduct = DB::table('single_products')->first();

        $data['getproduct'] = $getproduct;


        return view('admin.mobozone.pages.productblades.create', $data);
    }

    public function save(Request $request)
    {

        // dd($request->all());
        $validator = validator($request->all(), [
            'name' => 'required',
        ]);

        // dd($request->all());

        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors(),
            ]);
        } else {

            SingleProduct::truncate();
            $product = new SingleProduct();
            $product->name = $request->name;
            $product->color = $request->color;
            $product->type = $request->type;
            $product->sold_in_last_10_hours = $request->sold_in_last_10_hours;
            $product->short_desc = $request->short_desc;
            $product->full_desc = $request->full_desc;
            $product->tag = $request->tag;
            $product->productcode = $request->productcode;
            $product->reviews = $request->reviews;
            $product->Viewing = $request->Viewing;
            $product->Brand = $request->Brand;
            $product->leathertype = $request->leathertype;
            $product->material = $request->material;
            $product->active_noise_cancellation = $request->active_noise_cancellation;
            $product->communication = $request->communication;
            $product->control_the_volumes = $request->control_the_volumes;
            $product->sensitivity = $request->sensitivity;
            $product->impedance_range = $request->impedance_range;
            $product->modelnumber = $request->modelnumber;
            $product->headphone_pad_material = $request->headphone_pad_material;
            $product->bluetooth_version = $request->bluetooth_version;
            $product->frequency_response_range = $request->frequency_response_range;
            $product->total_harmonic_distortion = $request->total_harmonic_distortion;
            $product->charging_method = $request->charging_method;
            $product->maximum_output = $request->maximum_output;
            $product->codecs = $request->codecs;
            $product->resistance = $request->resistance;
            $product->features = $request->features;
            $product->price = $request->price;
            $product->point_1 = $request->point_1;
            $product->point_2 = $request->point_2;
            $product->exchangeable = $request->exchangeable;
            $product->refundable = $request->refundable;
            $product->manufacturername = $request->manufacturername;
            $product->manufacturerbrand = $request->manufacturerbrand;
            $product->stocks = $request->stocks;
            $product->discount = $request->discount;
            $product->visibility = $request->visibility;
            $product->status = $request->status;
            $product->save();

            if ($request->image_id > 0) {
                $tempImage = Temp_image_faculty::where('temp_image_faculties_id', $request->image_id)->first();
                $tempFileName = $tempImage->name;
                $imageArray = explode('.', $tempFileName);
                $ext = end($imageArray);

                $newFileName = 'product-' . $request->image_id . '.' . $ext;

                $sourcePath = './uploads/temp/' . $tempFileName;

                // echo "$sourcePath";

                //Generate Small Thumbnail
                $dPath = './uploads/product/thumb/small/' . $newFileName;
                $img = ResizeImage::make($sourcePath);
                $img->resize(126, 174, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save($dPath);

                //Generate large Thumbnail
                $dPath = './uploads/product/thumb/large/' . $newFileName;
                $img = ResizeImage::make($sourcePath);
                $img->resize(187, 225, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save($dPath);

                $product->img = $newFileName;
                $product->save();


            }

            $request->session()->get('success', 'Product Created Successfully.');
            session()->flash('success', 'Task was successful!');


            return response()->json([
                'status' => 200,
                'message' => 'Product Created Successfully.',
            ]);
        }
    }



    public function delete($id,Request $request)
    {
        $product = product::where('products_id', $id)->delete();

        if(empty($product)){
            return redirect()->route('admin.product.index');
        }else{
            return redirect()->route('admin.product.index');
        }
    }


}
