<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Str;
use App\User;
use Auth;

class SettingController extends Controller
{
    public function index(Request $request)
    {
        $AuthDetails = Auth::user();
        return view('admin.setting.index', compact('AuthDetails'));
    }

    public function update(Request $request)
    {
        $id         = $request->user_id;
        $name       = $request->first_name;
        $last_name  = $request->last_name;
        $email      = $request->email;
        $gender     = $request->gender;
        $mobile     = $request->mobile;
        $dob       = $request->dob;

        $User = User::find($id);

        $User->name         = $name;
        $User->last_name    = $last_name;
        $User->email        = $email;
        $User->gender       = $gender;
        $User->mobile       = $mobile;
        $User->dob       = $dob;
        $User->save();

        return redirect('/admin/setting')->with('msg_send','Updation Successfull');
    }

    public function pswd(Request $request)
    {
        $AuthDetails = Auth::user();
        return view('admin.setting.change_pswd', compact('AuthDetails'));
    }

    public function changepswd(Request $request)
    {
        $id                 = $request->user_id;
        $old_password       = $request->old_password;
        $new_password       = $request->new_password;
        $confirm_password   = $request->confirm_password;

        if(empty($old_password))
        {
            return redirect('/admin/pswd')->with('msg_error','All field are required');

        }else{
            if(empty($new_password))
            {
                return redirect('/admin/pswd')->with('msg_error','New password must be required');

            }elseif(empty($confirm_password))
            {
                return redirect('/admin/pswd')->with('msg_error','confirm password must be required');

            }else{
                $userdetail = User::where('code','=',$old_password)->first();

                if(empty($userdetail))
                {
                    return redirect('/admin/pswd')->with('msg_error','Old password does not match . Please fill correct old password');

                }else{

                    if($new_password == $confirm_password)
                    {
                        $user = User::find($id);

                        $user->code = $new_password;
                        $user->save();

                        return redirect('/admin/pswd')->with('msg_send','Login with your new password');

                    }else{
                        return redirect('/admin/pswd')->with('msg_error','New password and confirm password does not match');
                    }
                }
            }
        }

    }
}
