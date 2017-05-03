<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\GeneralSettings\Entities\GeneralSetting;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {

        $this->validate($request, ['name' => 'required', 'email' => 'required|email', 'msg' => 'required']);

        $setting = GeneralSetting::where('key', 'contactUsEmail')->first();

        $contactEmail = $setting ? $setting->value : 'info@pakauction.com';

        \Mail::raw($request->msg, function($message) use($contactEmail){
            $message->subject('contact us');
           $message->to($contactEmail);
        });

        return  back()->with('alert-success', 'Thank you for contact us');

    }
}
