<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ForgotController extends Controller
{
    public function forgot_pswd(Request $request)
    {
    	$mobile = $request->mobile;

    	if($mobile == '')
    	{
    		return redirect('/forget_pswd')->with('msg_error','Mobile number required !');
    	}else{

    		$user = User::where('mobile',$mobile)->first();

	    	if(!empty($user))
	    	{
	    		$var 		= rand(10,100);

		    	$code = 'shaadi-'.$var;
		        $temp = "91".$mobile;  
		        $apiKey = urlencode('sHOubLoehbw-dRt33t5kBrP8RIY1wlwRlgAwqZahWB');
	        
	        // Message details
		        $numbers = array($temp);  
		     
		        $sender = urlencode('TXTLCL');
		        $message = rawurlencode("Shubhvivahceremony.com your new password $code");
		     
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

		        User::where('id', $user->id)->update(['code' => $code]);

		        return redirect('/login')->with('msg_send','Your Password Reset Successfull. Please check device send to new password and login with your new password.');

	    	}else{

	    		return redirect('/forget_pswd')->with('msg_error','Please fill correct mobile number. ');
	    	}
    	}	
    }

}
