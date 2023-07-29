<?php

namespace App\Http\Controllers\admin\mobozone\page;

use App\Http\Controllers\Controller;
use App\Models\Sheeping;
use Illuminate\Http\Request;

class ManageSeepingController extends Controller
{
    public function shipping(){


        $sipping = Sheeping::first();

        $data['sipping'] = $sipping;

        return view('admin.mobozone.pages.managesheeping.sheeping',$data);
    }

    public function saveupdate(Request $request)
    {
        // dd($request->all());
        $validator = validator($request->all(), [
        ]);




        if ($validator->fails()) {
            return response()->json([
                'status' => 0,
                'errors' => $validator->errors(),
            ]);
        } else {
            $managesipping = Sheeping::first();


            if (empty($managesipping)) {
                return response()->json([
                    'status' => 20,
                ]);
            }

            $managesipping->sheepings_text =  $request->sheepings_text;
            $managesipping->save();


            $request->session()->get('success', 'shipping Edit Done.');
            session()->flash('success', 'shipping Edit Done.');

             return redirect('/admin/shipping');
        }
    }
}
