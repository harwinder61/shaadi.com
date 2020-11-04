<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Str;
use App\User;
use Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
    	$userDetails = User::where('role','=','user')->orderBy('id','DESC')->paginate(10);
		
    	return view('admin.users.list')->withUsers($userDetails);
    }

    public function create(Request $request)
    {
    	return view('admin.users.create');
    }

    public function store(Request $request)
    {
        //die('data');
    	$name 		= $request->first_name;
    	$last_name 	= $request->last_name;
    	$email 		= $request->email;
    	$gender 	= $request->gender;
    	$mobile 	= $request->mobile;
        $dob        = $request->dob;
    	$var 		= rand(10,100);

    	$code = 'shaadi-'.$var;
        $temp = "91".$mobile;     
      
        // Account details
        $apiKey = urlencode('sHOubLoehbw-dRt33t5kBrP8RIY1wlwRlgAwqZahWB');
        
        // Message details
        $numbers = array($temp);  
     
        $sender = urlencode('TXTLCL');
        $message = rawurlencode("Your OTP number for Shaadi.com registration is $code");
     
        $numbers = implode(',', $numbers);
    

        // Prepare data for POST request
        $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
     
        // Send the POST request with cURL
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $res = json_decode($response,true);
        // Process your response here

        $user_details = User::create([
    						'name' 		=> $name,
    						'last_name' => $last_name,
    						'email' 	=> $email,
    						'gender' 	=> $gender,
    						'mobile' 	=> $mobile,
    						'role' 		=> 'user',
    						'code' 		=> $code,
                            'dob'       => $dob
    						
    	]);
    	return redirect('/admin/users')->with('msg_send','User Registration Successfull.');
    }

    public function editUser($id)
    {
    	$userDetail = User::find($id);
    	return view('admin.users.edit', compact('userDetail'));
    }

    public function update(Request $request)
    {
    	$id 		= $request->id;
    	$name 		= $request->first_name;
    	$last_name 	= $request->last_name;
    	$email 		= $request->email;
    	$gender 	= $request->gender;
    	$mobile 	= $request->mobile;
        $dob        = $request->dob;

    	$userDetail = User::find($id);

    	if(empty($userDetail))
    	{
    		return redirect('/admin/users')->with('msg_error','User Registration Failed.');
    	}else{

    		$userDetail->name = $name;
    		$userDetail->last_name = $last_name;
    		$userDetail->email = $email;
    		$userDetail->gender = $gender;
    		$userDetail->mobile = $mobile;
            $userDetail->dob    = $dob;
    		$userDetail->save();

    		return redirect('/admin/users')->with('msg_send','User Registration Updation Successfull.');

    	}
    }

    public function userDelete(Request $request)
    {
        $user_id    = $request->user_id;
        $deletedRows = User::find($user_id)->delete();
        return redirect('/admin/users')->with('msg_send','Deleted Successfully');
    }
}
