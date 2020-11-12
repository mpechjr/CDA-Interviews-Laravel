<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\Page;

class MailController extends Controller
{
    //
    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

    $info = Page::select('email_1')->first();
     Mail::to($info->email_1)->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
