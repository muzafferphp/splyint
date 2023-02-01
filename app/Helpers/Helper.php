<?php

namespace App\Helpers;

use App\Models\User;
use App\Models\Carrier;
use App\Models\Admin;
use App\Models\Truck;
use App\Models\Collection;
use App\Models\QuoteNotification;
use App\Models\AssignCarrier;
use DB;
use Auth;

class Helper
{
    public static function truckscount()
    {
        return Truck::count();
    }
	
	public static function userscount()
    {
        return User::count();
    }
	
	public static function carrierscount()
    {
        return Carrier::count();
    }
	
	public static function collectionNotification(){
		return QuoteNotification::where('status',0)->count();
	}
	
	public static function assignNotification(){
		$user_id = Auth::guard('carrier')->user()->id;
		return AssignCarrier::where(['carrier_id'=>$user_id,'status'=>0])->count();
	}
	
	
}