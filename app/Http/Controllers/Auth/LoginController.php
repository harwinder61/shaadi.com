<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;
use DB;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
         // Check validation
        // $this->validate($request, [
        //     'mobile_no' => 'required|regex:/[0-9]{10}/|digits:10',            
        // ]);

        if($request->mobile_no == '')
        {
            return redirect('/login')->with('msg_error','All fields are required');
            
        }elseif($request->password == '')
        {
            return redirect('/login')->with('msg_error','All fields are required');
        }else{
            // Get user record
            $user = User::where('mobile1', '=',$request->mobile_no)->where('dob','=',$request->password)->first();

            if(empty($user))
            {
                return redirect('/login')->with('msg_error','Please fill correct credentials');

            }else{
                // Check Condition Mobile No. Found or Not
                if($request->mobile_no != $user->mobile1) 
                {
                    return redirect('/login')->with('msg_error','Please fill correct credentials');

                }else{
                    // Set Auth Details
                    Auth::login($user);
                
                    // Redirect home page
                    return redirect('/admin');
                } 
            }
        }
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/login');
    }
}
