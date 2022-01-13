<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact_post(Request $request)
    {
        //validate data
        $validate_data = $request->validate([
            'customer_name'=>'required',
            'customer_phone'=>'required',
            'customer_email'=>'required',
            'customer_message'=>'required',
        ],[
            'customer_name.required'=>'We need your name',
            'customer_phone.required'=>'We need your Phone Number',
            'customer_email.required'=>'We need your Email',
            'customer_message.required'=>'Please, write something one us',
        ]);


        if($validate_data)
        {
            $contact_instance = new Contact();
            

        }
    }
}
