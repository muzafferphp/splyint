<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;
	
	public function carrier()
    {
        //return $this->hasOne(Carrier::class,'id');
        //return $this->belongsTo(Carrier::class,'user_id')->where('user_role','carrier');
        return $this->belongsTo(Carrier::class,'user_id');
    }
}
