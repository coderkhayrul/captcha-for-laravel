<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaServiceController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function capthcaFormValidate(Request $request)
    {
        return $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'captcha' => 'required|captcha'
        ]);
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img('flat')]);
    }
}
