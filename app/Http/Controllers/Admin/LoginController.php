<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{

    public function index(Request $request)
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {
        $rules = [
            'username' => 'required',
            'password' => 'required',
            
        ];

        $customMessages = [
            'required' => 'The :attribute field is required.'
        ];

        $this->validate($request, $rules, $customMessages);

        $username = $request->username;
        $password = Hash::make($request->password);

        $loign_detail = User::where('email',$username)->where('password',$password)->first();

        echo "<pre/>"; print_r($loign_detail); die('login details ');

    	
    }
}
