<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Str;
use App\User;
use App\BankDetail;
use Auth;
use Illuminate\Support\Facades\Input;
use DB;
//use Excel;

class PanditController extends Controller
{
    // private $excel;

    // public function __construct(Excel $excel)
    // {
    //     $this->excel = $excel;
    // }

    // public function downloadFranchise()
    // {
    //     // Excel file name for download 
    //     $fileName = "FranchiseView-" . date('Ymd') . ".xls"; 
         
    //     // Column names 
    //     $fields = array('Code', 'Name', 'Email', 'Mobile Number', 'Mobile2 Number', 'Son/Daughter of','Address','Landmark','Gender','DOB','Account Name','Account Number','Bank Name','IFSC Code','Bank Address');

    //     // Display column names as first row 
    //     $excelData = implode("\t", array_values($fields)) . "\n";  

        
    //     $query = User::where('role','=','pandit')->orderBy('id','DESC')->get();

    //     if(count($query) != 0 )
    //     {
    //         $i = 0;
    //         foreach($query as $rs)
    //         {
    //             $i++; 
    //             $rowData = array($rs->code, $rs->name.' '.$rs->last_name, $rs->email, $rs->mobile1, $rs->mobile2,$rs->son_daughter, $rs->address, $rs->landmark, $rs->gender,date('d-m-Y', strtotime($rs->dob)),$rs->user_bankdetail->account_name,$rs->user_bankdetail->account_nbr,$rs->user_bankdetail->bank_name,$rs->user_bankdetail->ifsc_code,$rs->user_bankdetail->bank_address); 

    //             //array_walk($rowData, $this->filterData($fields)); 
    //             $excelData .= implode("\t", array_values($rowData)) . "\n"; 
    //         }
    //     }else{
    //         $excelData .= 'No records found...'. "\n"; 
    //     }

    //     // Headers for download 
    //     header("Content-Disposition: attachment; filename=\"$fileName\""); 
    //     header("Content-Type: application/vnd.ms-excel"); 
         
    //     // Render excel data 
    //     echo $excelData; 
         
    //     exit;
    // }


    public function index(Request $request)
    {
    	$userDetails = User::where('role','=','pandit')->orderBy('id','DESC')->paginate(10);
		
    	return view('admin.pandits.users')->withUsers($userDetails);
    }

    public function create(Request $request)
    {
    	return view('admin.pandits.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mobile1' => 'required|digits:10',
            'mobile2' => 'required|digits:10'

        ]);

    	$name 		= $request->first_name;
    	$last_name 	= $request->last_name;
    	$email 		= $request->email;
    	$gender 	= $request->gender;
    	$mobile1 	= $request->mobile1;
        $mobile2    = $request->mobile2;
        $dob        = $request->dob;
        $son_daughter  = $request->son_daughter;
        $address       = $request->address;
        $landmark      = $request->landmark;

        $account_name   = $request->account_name;
        $account_nbr    = $request->account_nbr;
        $bank_name      = $request->bank_name;
        $ifsc_code      = $request->ifsc_code;
        $bank_address   = $request->bank_address;

        

       


    	$var 		= rand(10,100);

    	$code = 'shaadi-'.$var;
        $temp = "91".$mobile1;     
      
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

        if ($request->hasFile('adhar_card'))
        {
            $adhar_card = $request->file('adhar_card');   
          //  $imagenameadhar = time().'.'.$adhar_card->getClientOriginalExtension();   

            $imagenameadhar=$adhar_card->getClientOriginalName();
            $destinationPath = public_path('/adhar_card');
            $adhar_card->move($destinationPath, $imagenameadhar);
            
          
        }

        if ($request->hasFile('image'))
        {  
            $image = $request->file('image');   
           // $imagenamephoto = time().'.'.$image->getClientOriginalExtension(); 
            $imagenamephoto=$image->getClientOriginalName();

            $destinationPath = public_path('/photo');
            $image->move($destinationPath, $imagenamephoto);
            
          
        }

        if ($request->hasFile('cancel_check'))
        {  
            $cancel_check = $request->file('cancel_check');   
           // $imagenamephoto = time().'.'.$image->getClientOriginalExtension(); 
            $imagenamecancel_check=$cancel_check->getClientOriginalName();

            $destinationPath = public_path('/cancel_check');
            $cancel_check->move($destinationPath, $imagenamecancel_check);
            
          
        }

        if(isset($imagenameadhar))
        {
            $finaladhar_card  = $imagenameadhar;
        }else{

            $finaladhar_card = '';
        }

        if(isset($imagenamephoto))
        {
            $finalphoto  = $imagenamephoto;

        }else{
            $finalphoto = '';
        }

        if(isset($imagenamecancel_check))
        {
            $cancel_checkphoto  = $imagenamecancel_check;

        }else{
            $cancel_checkphoto = '';
        }

        $user_details = User::create([
                            'name'          => $name,
                            'last_name'     => $last_name,
                            'email'         => $email,
                            'gender'        => $gender,
                            'mobile1'       => $mobile1,
                            'mobile2'       => $mobile2,
                            'son_daughter'  => $son_daughter,
                            'address'       => $address,
                            'landmark'      => $landmark,
                            'role'          => 'pandit',
                            'code'          => $code,
                            'dob'           => $dob,
                            'adhar_card'    => $finaladhar_card,
                            'photo'         => $finalphoto
        ]);
        

        $bank_details = BankDetail::create([
                            'user_id'       => $user_details->id,
                            'account_name'  =>$account_name,
                            'account_nbr'   => $account_nbr,
                            'bank_name'     => $bank_name,
                            'ifsc_code'     => $ifsc_code,
                            'bank_address'  => $bank_address,
                            'cancel_check'  => $cancel_checkphoto,

        ]);
        return redirect('/admin/pandits')->with('msg_send','Franchise Registration Successfull.');
    }

    public function editUser($id)
    {
    	$userDetail = User::find($id);
        return view('admin.pandits.edit', compact('userDetail'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'mobile1' => 'required|digits:10',
            'mobile2' => 'required|digits:10'

        ]);

        $id             = $request->id;
    	$name      = $request->first_name;
        $last_name  = $request->last_name;
        $email      = $request->email;
        $gender     = $request->gender;
        $mobile1    = $request->mobile1;
        $mobile2    = $request->mobile2;
        $dob        = $request->dob;
        $son_daughter  = $request->son_daughter;
        $address       = $request->address;
        $landmark      = $request->landmark;

        $account_name   = $request->account_name;
        $account_nbr    = $request->account_nbr;
        $bank_name      = $request->bank_name;
        $ifsc_code      = $request->ifsc_code;
        $bank_address   = $request->bank_address;

    	$userDetail = User::find($id);

    	if(empty($userDetail))
    	{
    		return redirect('/admin/pandits')->with('msg_error','Franchise Registration Failed.');
    	}else{

            if ($request->hasFile('adhar_card'))
            {
                $adhar_card = $request->file('adhar_card');   
              //  $imagenameadhar = time().'.'.$adhar_card->getClientOriginalExtension();   

                $imagenameadhar=$adhar_card->getClientOriginalName();
                $destinationPath = public_path('/adhar_card');
                $adhar_card->move($destinationPath, $imagenameadhar);
                
              
            }

            if ($request->hasFile('image'))
            {  
                $image = $request->file('image');   
               // $imagenamephoto = time().'.'.$image->getClientOriginalExtension(); 
                $imagenamephoto=$image->getClientOriginalName();

                $destinationPath = public_path('/photo');
                $image->move($destinationPath, $imagenamephoto);
            }

            if ($request->hasFile('cancel_check'))
            {
                $cancel_check = $request->file('cancel_check');   
              //  $imagenameadhar = time().'.'.$adhar_card->getClientOriginalExtension();   

                $imagenameacancel_check=$cancel_check->getClientOriginalName();
                $destinationPath = public_path('/cancel_check');
                $cancel_check->move($destinationPath, $imagenameacancel_check);
                
              
            }

    		$userDetail->name = $name;
    		$userDetail->last_name = $last_name;
    		$userDetail->email = $email;
    		$userDetail->gender = $gender;
    		$userDetail->mobile1 = $mobile1;
            $userDetail->mobile2    = $mobile2;
            $userDetail->son_daughter    = $son_daughter;
            $userDetail->address    = $address;
            $userDetail->landmark    = $landmark;
            if(isset($imagenameadhar))
            {
                 $userDetail->adhar_card  = $imagenameadhar;
            }

            if(isset($imagenamephoto))
            {
                $userDetail->photo  = $imagenamephoto;
            }

           
            
    		$userDetail->save();

            $userDetail->user_bankdetail->account_name  = $account_name;
            $userDetail->user_bankdetail->account_nbr   = $account_nbr;
            $userDetail->user_bankdetail->bank_name     = $bank_name;
            $userDetail->user_bankdetail->ifsc_code     = $ifsc_code;
            $userDetail->user_bankdetail->bank_address  = $bank_address;

             if(isset($imagenameacancel_check))
            {
                $userDetail->user_bankdetail->cancel_check  = $imagenameacancel_check;
            }
            $userDetail->user_bankdetail->save();

    		return redirect('/admin/pandits')->with('msg_send','Franchise Registration Updation Successfull.');

    	}
    }

    public function userDelete(Request $request)
    {
        $user_id    = $request->user_id;
        $deletedRows = User::find($user_id)->delete();
        $deletebankdetails = BankDetail::where('user_id',$user_id)->delete();
        return redirect('/admin/pandits')->with('msg_send','Deleted Successfully');
    }
}
