<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Stevebauman\Location\Facades\Location;

use Hash;
use Auth;
use Session;
use App\Models\User;
use App\Models\Carrier;
use App\Models\Admin;
use App\Models\Truck;
use App\Models\Collection;
use App\Models\Quote;
use App\Models\QuoteRequest;
use App\Models\AssignCarrier;
use App\Models\QuoteNotification;
use DB;

class AdminController extends Controller
{
     public function register(Request $request){
		
		if($request->isMethod('post')){
			$data = $request->all();
			
			$admin = new Admin;
			
			$this->validate($request, [
				'name' => 'required|min:2',
				'email' => 'required|email',
				'password' => 'required|min:6|regex:/^.*(?=.*[!$#%@]).*$/',
				'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

			]);
		
			 if($request->file('image')){
			 
				$file = $request->file('image');
				$filename = time().'_'.$file->getClientOriginalName();
				$location = "users_pic";
				$file->move(public_path($location),$filename);
				$admin->pic = $filename;
			}
		
		$admin->name = $data['name'];
		$admin->email = $data['email'];
		$admin->password = bcrypt($data['password']);
		$admin->save();
   
        return back()->with('message','You have successfully register.');

		}
	
		return view('admin.register');
	}
	
	public function login(Request $request){
	
		if(Session::get('Login') =='Yes'){
			return redirect('/admin/dashboard');
		}
	
		if($request->isMethod('post')){
			Session::flush();
			$data = $request->all();
			
			if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
				Session::put('Login', 'Yes');
				return redirect('/admin/dashboard');
			}else{
				return back()->with('message','Your Email or Password incorrect');
			}
		}
		
		
		return view('admin.login');
	}
	
	public function admindashboard(Request $request){
		$ip = "157.39.129.1";
		
        //$currentUserInfo = Location::get($ip);
		
		//dd($currentUserInfo);
		
		return view('admin.dashboard');
	}
	
	public function adminLogout(){
		Session::flush();
		return redirect('/admin/login');
	}
	
	public function usersList(){
		$title = 'User list';
		$usersCarrier = Carrier::get()->toArray();
		$usersUser = User::get()->toArray();
		//$userslist = array_merge($usersCarrier,$usersUser);
		return view('admin.users_list',compact('usersCarrier','usersUser', 'title'));
	}
	
	public function carrierUpdate(Request $request,$id){
		$usersCarrier = Carrier::find($id);
		$title = "User update";
		
		if($request->isMethod('post')){
			$data = $request->all();
			
			$this->validate($request, [
				'name' => 'required|min:2',
				'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
				'email' => 'required|email',
				'password' => 'required|min:6|regex:/^.*(?=.*[!$#%@]).*$/',

			]);
			
			$usersCarrier->name = $data['name'];
			$usersCarrier->email = $data['email'];
			$usersCarrier->mobile = $data['mobile'];
			$usersCarrier->password = bcrypt($data['password']);
			$usersCarrier->save();
			
			$email = $data['email'];
			$password = $data['password'];
			
			$messageData = ['email'=>$data['email'],'name'=>$data['name'],'password'=>$password];
			Mail::send('mail.userupdate',$messageData,function($message) use($email){
				$message->to($email)->subject('Updated details');
			});
			
			return back()->with('message','You have successfully user updated.');
		}
		return view('admin.users.carrier_update',compact('usersCarrier','title'));
		
	}
	
	public function carrierDelete(Request $request,$id){
		$carrier = Carrier::find($id)->delete();
		return redirect()->back()->with("success_carrier","Carrier record deleted !");
	}
	
	public function userUpdate(Request $request,$id){
		$users = User::find($id);
		$title = "User update";
		
		if($request->isMethod('post')){
			$data = $request->all();
			
			$this->validate($request, [
				'name' => 'required|min:2',
				'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
				'email' => 'required|email',
				'password' => 'required|min:6|regex:/^.*(?=.*[!$#%@]).*$/',

			]);
			
			$users->name = $data['name'];
			$users->email = $data['email'];
			$users->mobile = $data['mobile'];
			$users->password = bcrypt($data['password']);
			$users->save();
			
			$email = $data['email'];
			$password = $data['password'];
			
			$messageData = ['email'=>$data['email'],'name'=>$data['name'],'password'=>$password];
			Mail::send('mail.userupdate',$messageData,function($message) use($email){
				$message->to($email)->subject('Updated details');
			});
			
			return back()->with('message','You have successfully user updated.');
		}
		return view('admin.users.user_update',compact('users','title'));
	}
	
	public function userDelete(Request $request,$id){
		$carrier = User::find($id)->delete();
		return redirect()->back()->with("success","Users record deleted !");
	}
	
	public function adminProfile(Request $request){
		$title = "Profile";
		$admin = Auth::guard('admin')->user();
		$admin_id = Auth::guard('admin')->user()->id;
		
		if($request->isMethod('post')){
			$data = $request->all();
			
			$admin = Admin::find($admin_id);
			
			$this->validate($request, [
				'name' => 'required|min:2',
				'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
				'email' => 'required|email',
				'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

			]);
			
			if($request->file('image')){
			 
				$file = $request->file('image');
				$filename = time().'_'.$file->getClientOriginalName();
				$location = "users_pic";
				$file->move(public_path($location),$filename);
				$admin->pic = $filename;
			}
			
			$admin->name = $data['name'];
			$admin->email = $data['email'];
			$admin->mobile = $data['mobile'];
			$admin->save();
			return back()->with('message','You have successfully updated.');
			
		}
		
		return view('admin.profile_update',compact('admin','title'));
	}
	
	public function adminPassword(Request $request){
		$title = "password";
		$admin = Auth::guard('admin')->user();
		$id = Auth::guard('admin')->user()->id;
		
		if($request->isMethod('post')){
			$data = $request->all();
		
			$request->validate([
				'email' => 'required|email|exists:admins',
				'new_password' => 'min:6|required_with:confirm_password|same:confirm_password',
				'confirm_password' => 'min:6'
			]);
			
			if(!Hash::check($request['password'], Auth::guard('admin')->user()->password)) {
				  return back()->with('error','The old password does not match our records.');
			}
			$admin = Admin::find($id);
			$admin->password = bcrypt($data['new_password']);
			$admin->save();
			return back()->with('message','Your password updated.');
		}
		return view('admin.password_update',compact('admin','title'));
	}
	
	public function passwordReset(Request $request){
		$title = 'Forget Password';
		if($request->isMethod('post')){
			$data = $request->all();
			
			$email = $data['email'];
			
			$checkEmail = Admin::where('email',$email)->count();
			
			
			if($checkEmail >0){
				$admin = Admin::where('email',$email)->first();
				
				//Admin::where('email', $email)->update(['password' => $random_password]);

				$messageData = ['email'=>$data['email'],'name'=>$admin->name,'code'=>base64_encode($data['email'])];
				
				Mail::send('mail.confirmation',$messageData,function($message) use($email){
					$message->to($email)->subject('Forget password in Logistic website');
				});
				DB::table('admins')->where('email', $data['email'])->update(['status' =>1]);
				
				return redirect()->back()->with("success","Please check your email inbox !");
				
			}else{
				return redirect()->back()->with("success","Your selected email doesn't exist !");
			}
		}
		return view('admin.password_reset')->with(['controller'=>'admin','title'=>$title]);
	}
	
	public function confirmEmail($email){
		$email = base64_decode($email);
		$userCount = Admin::where('email',$email)->count();
		
		if($userCount >0){
			$adminLinkstatus = Admin::where('email',$email)->first();
			if($adminLinkstatus->status ==0){
				return redirect('admin/password-reset')->with("success","Your given link expired");
			}else{
				
				return view('admin.password_reset_link')->with(['controller'=>'admin','email'=>$email]);
			}
		}
	}
	public function passwordResetLink(Request $request){
		if($request->isMethod('post')){
			$data = $request->all();
			$password = bcrypt($data['password']);
			DB::table('admins')->where('email', $data['email'])->update(['password' => $password, 'status' =>0]);
			return redirect('admin/login')->with("message","Your password reset successfully!");
		}
	
	}
	
	public function truckList(){
		$title = "Truck List";
		$trucks = Truck::all();
		return view('admin.truck_list')->with(['controller'=>'admin','title'=>$title,'trucks'=>$trucks]);
	}
	
	public function truckView(Request $request, $id = Null){
		$title = "Truck view";
		$trucks = Truck::with('carrier')->where('id',$id)->get()->toArray();
		return view('admin.truck_view')->with(['controller'=>'admin','title'=>$title,'trucks'=>$trucks]);
	}
	
	public function quoteList(){
		$title = "Quote List";
		$collections = Collection::with('Quotes')->get()->toArray();
		$usersCarrier = Carrier::get()->toArray();
		return view('admin.quote_list')->with(['controller'=>'admin','title'=>$title,'quote'=>$collections,'usersCarrier'=>$usersCarrier,'page_type'=>'admin']);
	}
	
	public function quoteView($id){
		$title = "Quote view";
		$collequotes = Collection::with('Quotes')->where('id',$id)->get()->toArray();
		$carriers = Carrier::get()->where('status',1)->toArray();
		$assignCarrier = AssignCarrier::select('carrier_id')->where('collection_id',$id)->get()->toArray();
		//Notification read
		QuoteNotification::where('collection_id', $id)->update(['status' =>1]);
		
		$assignCarriers = [];
		foreach($assignCarrier as $key=>$value){
			$assignCarriers[] = $value['carrier_id'];
		}
		
		return view('admin.quote_view')->with(['controller'=>'admin','title'=>$title,'collequotes'=>$collequotes,'carriers'=>$carriers,'quote_id'=>$id,'page_type'=>'admin','assignCarrier'=>$assignCarriers]);
	
}
	
	public function forwardCarrier(){
		$title = "Froward carriers";
		$usersCarrier = Carrier::get()->toArray();
		$collection = Collection::with('Quotes')->get()->where('status',1)->toArray();
		/* echo"<pre>";
		print_r($collection);
		die; */
		return view('admin.carrier_forward')->with(['collection'=>$collection, 'controller'=>'admin','title'=>$title,'usersCarrier'=>$usersCarrier,'page_type'=>'admin']);
	}
	
	public function quoteStatus(Request $request){
		if($request->ajax()){
            $data = $request->all();
			$id = $data['quote_id'];
			$status = $data['status'];
			
			$current_status ="";
			if($status ==0){
				$current_status = 1;
			}else{
				$current_status = 0;
			}
		
			$collection = Collection::find($id);
			$collection->status = $current_status;
			$collection->save();
			return response()->json(['message' => 'Status updated', 'state' => 200]);
			
        }
	}
	
	public function quoteForward(Request $request){
		if($request->ajax()){
            $data = $request->all();
			$data['carriers_id'];
			
			//$collDetails = Collection::find($data['collection_id'])->toArray();
			$collDetails = Collection::with('Quotes')->where('id',$data['collection_id'])->get()->toArray();
			
			$startDate = $collDetails[0]['collection_from'];
			$endDate = $collDetails[0]['collection_to'];
			$budget = $collDetails[0]['budget'];
			$pick = $collDetails[0]['collection_address'];
			$drop = $collDetails[0]['delivery_address'];
			
			foreach($data['carriers_id'] as $carrier){
				$carrierList = Carrier::select('email','name')->where('id', $carrier)->first();
				$email = $carrierList['email'];
				$quoterequest = new QuoteRequest;
				$quoterequest->quote_id = $data['collection_id'];
				$quoterequest->carrier_id = $carrier;
				$quoterequest->carrier_name = $carrierList['name'];
				$quoterequest->carrier_email = $email;
				$quoterequest->status = 0;
				$quoterequest->save();

				$messageData = ['allCollectionDetails'=>$collDetails,'email'=>$carrierList['email'],'name'=>$carrierList['name'],'startDate'=>$startDate,'endDate'=>$endDate,'budget'=>$budget,'pick'=>$pick,'drop'=>$drop];
				
				Mail::send('mail.forward',$messageData,function($message) use($email){
					$message->to($email)->subject('Forward carrier request');
				}); 
				
			}
			
			return response()->json(['message' => 'Sent quote request to the selected carriers', 'state' => 200]);
		}
	}
	
	public function assignCarrier(Request $request){
		if($request->isMethod('post')){
			$data = $request->all();
			$collection_id = $data['quote_id'];
			$carrier_id = $data['carrier'];
			$collDetails = Collection::find($collection_id)->toArray();
			$usersCarrier = Carrier::find($carrier_id)->toArray();
			
			$assigncarrier = new AssignCarrier;
			
			$assigncarrier->collection_id = $collection_id;
			$assigncarrier->collect_address = $collDetails['collection_address'];
			$assigncarrier->delivery_address = $collDetails['delivery_address'];
			$assigncarrier->collection_from = $collDetails['collection_from'];
			$assigncarrier->collection_to = $collDetails['collection_to'];
			$assigncarrier->budget = $collDetails['budget'];
			$assigncarrier->carrier_id = $carrier_id;
			$assigncarrier->carrier_name = $usersCarrier['name'];
			$assigncarrier->carrier_email = $usersCarrier['email'];
			$assigncarrier->carrier_moble = $usersCarrier['mobile'];
			$assigncarrier->carrier_address = $usersCarrier['address'];
			$assigncarrier->status =0;
			$assigncarrier->save();
			return redirect()->back()->with("success","Your have assigned quote to the carrier" );
		}
		
	}
	// Quote Notification 
	public function quoteNotifications(){
		$title = "Notification";
		$notification = QuoteNotification::get()->toArray();
		return view('admin.notification_list')->with(['controller'=>'admin','title'=>$title,'notification'=>$notification,'page_type'=>'admin']);
	}
	
	public function supportRequest(Request $request){
		echo "Hello";
		die;
	} 
}
