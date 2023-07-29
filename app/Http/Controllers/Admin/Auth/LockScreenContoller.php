<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LockScreenContoller extends Controller
{

    public function locked(Request $request)
    {
        // $request->session()->invalidate();
            // $request->session()->regenerateToken();


        // if (!session('lock-expires-at')) {
        //     return redirect('admin.auth.lockscreen');
        //     dd(session());
        // }

        // if (session('lock-expires-at') > now()) {
        //     return redirect('/');
        // }
            // dd(Auth::guard('admin')->user()->password);
        return view('admin.auth.lockscreen');
    }

    public function unlock(Request $request)
    {

        // dd(Auth::guard('admin')->user()->password);
        $check = Hash::check($request->input('password'), Auth::guard('admin')->user()->password);

        if (!$check) {

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/admin/login');
        }

        // session(['lock-expires-at' => now()->addMinutes($request->user()->getLockoutTime())]);
        $request->session()->regenerate();

        return redirect('/admin/dashbord');
    }
}
