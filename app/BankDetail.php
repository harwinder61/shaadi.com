<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BankDetail extends Authenticatable
{
	protected $table = 'bank_details';

	protected $fillable = ['id', 'user_id','account_name','account_nbr','bank_name','ifsc_code','bank_address','cancel_check']; 

	 /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
  
}
