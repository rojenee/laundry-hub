<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function validation(){
        return view ('validation');
    }
    public function info (Request $request){
        $rules = [
                'email' => 'required|email',
                'fullname' => 'required|',
                'password' => 'required|min:6|max:12|',
                'cpassword' => 'required|min:6|max:12|same:password',

        ];
        $customMessage = [
            'required' => 'This field is required*',
            'email' => 'Please enter your valid email',
            'cpassword' => 'Password does not match',


        ];
            $this->validate($request, $rules, $customMessage);


        return view('sidebar'
            // "fname" => $request->input('fname'),
            // "sex" => $request->input('sex'),
            // "phone_number" => $request->input('phone_number'),
            // "address" => $request->input('address'),
            // "email" => $request->input('email'),
            // "password" => $request->input('password'),
            // "cpassword" => $request->input('cpassword'),
        );
    }
}
