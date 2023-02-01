<?php

namespace App\Http\Controllers\Carrier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TruckStore;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

use Hash;
use Auth;
use Session;
use App\Models\User;
use App\Models\Admin;
use App\Models\Carrier;
use App\Models\Truck;
use App\Models\QuoteNotification;
use App\Models\AssignCarrier;
use App\Models\Collection;
use App\Models\Quote;
use DB;

class CarrierController extends Controller
{
    public function register(Request $request){
		
		if($request->isMethod('post')){
			$data = $request->all();
			
			$this->validate($request, [
				'name' => 'required|min:2',
				'lince_no' => 'required|min:11|numeric',
				'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
				'email' => 'required|email|unique:carriers,email',
				'password' => 'required|min:6|regex:/^.*(?=.*[!$#%@]).*$/',
				'address' => 'required|min:5',
				'it_is_owned_corporate' => 'required|min:10',
				'company_name' => 'required',
				'company_email' => 'required',
				'gst_no' => 'required',
				'type_of_truck' => 'required',
			],
			 $messages = [
                'password.regex' => "Password must contain at least one !$#%@ special character",
            ]);
			
			
		$carrier = new Carrier;
		if($request->file('attachment')){
			$file = $request->file('attachment');
			$filename = time().'_'.$file->getClientOriginalName();
			$location = "carrier_register";
			$file->move(public_path($location),$filename);
			$carrier->attachment = $filename;
		}
		
		$carrier->name = $data['name'];
		$carrier->email = $data['email'];
		$carrier->mobile = $data['mobile'];
		$carrier->address = $data['address'];
		$carrier->lince_no = $data['lince_no'];
		$carrier->insurance_no = $data['insurance_no'];
		$carrier->it_is_owned_corporate = $data['it_is_owned_corporate'];
		$carrier->company_name = $data['company_name'];
		$carrier->company_email = $data['company_email'];
		$carrier->gst_no = $data['gst_no'];
		$carrier->type_of_truck = $data['type_of_truck'];
		$carrier->status = 0;
		$carrier->password = bcrypt($data['password']);
		$carrier->save();
		
		
		$email = $data['email'];
		$messageData = ['email'=>$data['email'],'name'=>$data['name'],'code'=>base64_encode($data['email'])];
		Mail::send('mail.carrier_register',$messageData,function($message) use($email){
			$message->to($email)->subject('Email verification');
		});
		
		return redirect()->back()->with("message","Please check your mail to verify email address!");
		//return redirect('/carrier/login')->with('message','You have successfully register!. Login below');
		}
	
		return view('carrier.register');
	}
	
	public function confirmEmail($email){
		$email = base64_decode($email);
		$carrierCount = Carrier::where('email',$email)->count();
		
		if($carrierCount >0){
			$carrierstatus = Carrier::where('email',$email)->first();
			if($carrierstatus->status ==0){
				DB::table('carriers')->where('email', $email)->update(['status' =>1]);
				return redirect('/carrier/login')->with('message','You have successfully verify email!. Login below');
			}else{
				return redirect('carrier/register')->with("message","Your given link expired");
			}
		}
	}
	
	public function login(Request $request){
	
		if($request->isMethod('post')){
			$data = $request->all();
			Session::flush();
			
			//check carrier ststus email varification
			$usercount = Carrier::where('email',$data['email'])->count();
			if($usercount == 0){
				return back()->with('message','Your Email or Password incorrect');
			}else{
				$userStatus = Carrier::where('email',$data['email'])->first();
				if($userStatus->status ==0){
					Session::flush();
					return redirect()->back()->with('message','Your account is dactive please contact to admin or / Confirm mail link !');
				}
			}
			if(Auth::guard('carrier')->attempt(['email'=>$data['email'],'password'=>$data['password']])){
				return redirect('/carrier/dashboard');
			}else{
				return back()->with('message','Your Email or Password incorrect');
			}
		}
		
		
		return view('carrier.login');
	}
	
	public function carrierdashboard(Request $request){
		$title = 'Carrier || Dashboard';
		return view('carrier.dashboard')->with(['controller'=>'carrier','title'=>$title,'page_type'=>'admin']);
	}
	
	public function carrierLogout(){
		Session::flush();
		return redirect('/carrier/login');
	}
	
	public function truck(){
		$title = 'Carrier || Truck';
	    return view('carrier.truck')->with(['controller'=>'carrier','title'=>$title]);
	}
	
	public function addTruck(TruckStore $request){
	
		$data = $request->all();
		
		/* echo "<pre>";
		print_r($value);
		die; */
		
		$truck = new Truck;
		 if($request->file('file')){
				$allFile =[];
				foreach($request->file('file') as $key=>$value){
					//$file = $request->file('file');
					$filename = time().'_'.$value->getClientOriginalName();
					$location = "truck_file";
					$value->move(public_path($location),$filename);
					$allFile[] = $filename;
				}
				$files = implode(",",$allFile);
				$truck->file = $files;
			}
		
		$truck->company_name = $data['company_name'];
		$truck->postal_address = $data['postal_address'];
		$truck->abn = $data['abn'];
		$truck->contact_number = $data['contact_number'];
		$truck->phone_number = $data['phone_number'];
		$truck->email = $data['email'];
		$truck->key_contact = $data['key_contact'];
		$truck->user_id = Auth::guard('carrier')->user()->id;
		$truck->user_role = "carrier";
		$truck->truck_type = $data['truck_type'];
		$truck->dry_reefer = $data['dry_reefer'];
		$truck->insurance_number = $data['insurance_number'];
		$truck->permit_type = $data['permit_type'];
		$truck->save();
		return redirect()->back()->with("success","Successfully form submitted!");
	}
	
	public function truckList(){ 
		$truecklist = Truck::where('user_id', Auth::guard('carrier')->user()->id)->get();
		$truecklist = json_decode(json_encode($truecklist));
		$title = 'Truck list';
		return view('carrier.truck_list',compact('truecklist', 'title'));
	}
	
	public function truckEdit(Request $request,$id){
		$trueckEdit = Truck::find($id);
		
		if($request->isMethod('post')){
		$data = $request->all();
			
		$validated = $request->validate([
			'company_name' => 'required',
			'postal_address' => 'required',
			'abn' => 'required',
			'contact_number' => 'required',
			'phone_number' => 'required',
			'email' => 'required',
			'key_contact' => 'required',
			'truck_type' => 'required',
			'dry_reefer' => 'required',
			'insurance_number' => 'required',
			'permit_type' => 'required',
		]);
		
		$trueckEdit->company_name = $data['company_name'];
		$trueckEdit->postal_address = $data['postal_address'];
		$trueckEdit->abn = $data['abn'];
		$trueckEdit->contact_number = $data['contact_number'];
		$trueckEdit->phone_number = $data['phone_number'];
		$trueckEdit->email = $data['email'];
		$trueckEdit->key_contact = $data['key_contact'];
		$trueckEdit->truck_type = $data['truck_type'];
		$trueckEdit->dry_reefer = $data['dry_reefer'];
		$trueckEdit->insurance_number = $data['insurance_number'];
		$trueckEdit->permit_type = $data['permit_type'];
		$trueckEdit->save();
		return redirect()->back()->with("success","Successfully updated !");
		}
		return view('carrier.truck_edit',compact('trueckEdit'));
	}
	
	public function truckDelete($id){
		$truck=Truck::find($id)->delete();
		return redirect()->back()->with("success","Truck record deleted !");
	}
	
	public function passwordForget(Request $request){
	
		$title = 'Forget Password';
		
		if($request->isMethod('post')){
			$data = $request->all();
			
			$password = Str::random(8);
			$random_password = Hash::make($password);
			
			$email = $data['email'];
			
			$checkEmail = Carrier::where('email',$email)->count();
			
			
			if($checkEmail >0){
				$carrier = Carrier::where('email',$email)->first();
				
				Carrier::where('email', $email)->update(['password' => $random_password]);
				$messageData = ['email'=>$data['email'],'name'=>$carrier->name,'password'=>$password];
				
				Mail::send('mail.forgetpassword',$messageData,function($message) use($email){
					$message->to($email)->subject('Forget password in Logistic website');
				});
				return redirect()->back()->with("success","Changed your password check your email !");
			
			}else{
				return redirect()->back()->with("success","Your selected email doesn't exist !");
			}
		}
		return view('carrier.password')->with(['controller'=>'carrier','title'=>$title]);
	}
	
	public function profileUpdate(Request $request){
	
		$title = 'Profile Update';
		$carrier_id =  Auth::guard('carrier')->user()->id;
		$carrier_details = Carrier::find($carrier_id);
		
		if($request->isMethod('post')){
			$data = $request->all();
				$this->validate($request, [
				'name' => 'required|min:2',
				'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
				'email' => 'required|email',
				'password' => 'required|min:6|regex:/^.*(?=.*[!$#%@]).*$/',
				'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);
			
			 if($request->file('image')){
			 
				$file = $request->file('image');
				$filename = time().'_'.$file->getClientOriginalName();
				$location = "users_pic";
				$file->move(public_path($location),$filename);
				$carrier_details->pic = $filename;
			}
			
			
			
			$carrier_details->name = $data['name'];
			$carrier_details->email = $data['email'];
			$carrier_details->mobile = $data['mobile'];
			$carrier_details->password = bcrypt($data['password']);
			$carrier_details->save();
			return back()->with('message','You have successfully updated.');
		}
		
		return view('carrier.profile_update')->with(['controller'=>'carrier','title'=>$title,'carrier_id'=>$carrier_id,'carrier_details'=>$carrier_details]);
		
	}
	
	public function quoteNotifications(){
		$title = "Notifications";
		$user_id = Auth::guard('carrier')->user()->id;
		$assignCarriers = AssignCarrier::where('carrier_id',$user_id)->get()->toArray();
		return view('carrier.notification_list')->with(['controller'=>'carrier','title'=>$title,'notification'=>$assignCarriers]);
	}
	
	public function quoteAssigned($id){
		$title = "Quote view";
		$collequotes = Collection::with('Quotes')->where('id',$id)->get()->toArray();
		$carriers = Carrier::get()->where('status',1)->toArray();
		
		//Notification read
		AssignCarrier::where('collection_id', $id)->update(['status' =>1]);
		
		return view('carrier.quote_view')->with(['controller'=>'carrier','title'=>$title,'collequotes'=>$collequotes,'carriers'=>$carriers,'quote_id'=>$id,'page_type'=>'carrier']);
	
	}
	
}
