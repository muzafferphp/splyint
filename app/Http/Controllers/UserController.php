<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Admin;
use App\Models\Carrier;

use App\Models\Collection;
use App\Models\Quote;
use App\Models\QuoteRequest;
use App\Models\AssignCarrier;
use App\Models\QuoteNotification;

use Auth;
use Hash;
use DB;
use Session;
class UserController extends Controller
{
    public function register(Request $request){
		
		if($request->isMethod('post')){
			$data = $request->all();
			
			$this->validate($request, [
				'name' => 'required|min:2',
				'office_no' => 'required|min:11|numeric',
				'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
				'email' => 'required|email|unique:carriers,email',
				'password' => 'required|min:6|regex:/^.*(?=.*[!$#%@]).*$/',
				'address' => 'required|min:5',
				'full_address' => 'required|min:10',
				'anb_no' => 'required',
			],
			 $messages = [
                'password.regex' => "Password must contain at least one !$#%@ special character",
            ]);
		
			$user = new User;
			
			if($request->file('attachment')){
				$file = $request->file('attachment');
				$filename = time().'_'.$file->getClientOriginalName();
				$location = "users_pic";
				$file->move(public_path($location),$filename);
				$user->attachment = $filename;
			}
			
			$user->name = $data['name'];
			$user->email = $data['email'];
			$user->mobile = $data['mobile'];
			$user->address = $data['address'];
			$user->office_no = $data['office_no'];
			$user->anb_no = $data['office_no'];
			$user->full_address = $data['full_address'];
			$user->status = 0;
			$user->password = bcrypt($data['password']);
			$user->save();
		   
			$email = $data['email'];
			
			$messageData = ['email'=>$data['email'],'name'=>$data['name'],'code'=>base64_encode($data['email'])];
					
			Mail::send('mail.user_register',$messageData,function($message) use($email){
				$message->to($email)->subject('Email verification');
			});
			
			return redirect()->back()->with("message","Please check your mail to verify email!");
		}
		return view('user.register');
	}
	
	
	public function confirmEmail($email){
		$email = base64_decode($email);
		$usersCount = User::where('email',$email)->count();
		
		if($usersCount >0){
			$userstatus = User::where('email',$email)->first();
			if($userstatus->status ==0){
				DB::table('users')->where('email', $email)->update(['status' =>1]);
				return redirect('/user/login')->with('message','You have successfully verify email!. Login below');
			}else{
				return redirect('user/register')->with("message","Your given link expired");
			}
		}
	}
	
	public function login(Request $request){
	
		if($request->isMethod('post')){
			$data = $request->all();
			Session::flush();
			if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
				return redirect('/user/dashboard');
			}else{
				return back()->with('message','Your Email or Password incorrect');
			}
		}
		return view('user.login');
	}
	
	public function userdashboard(Request $request){
		return view('user.dashboard');
	}
	
	public function userLogout(){
		Session::flush();
		return redirect('/user/login');
	}
	public function passwordForget(Request $request){
	
		if($request->isMethod('post')){
			$data = $request->all();
			
			$password = Str::random(8);
			$random_password = Hash::make($password);
			
			$email = $data['email'];
			
			$checkEmail = User::where('email',$email)->count();
		
			
			if($checkEmail >0){
			
				$users = User::where('email',$email)->first();
			
				User::where('email', $email)->update(['password' => $random_password]);
				$messageData = ['email'=>$data['email'],'name'=>$users->name,'password'=>$password];
				
				Mail::send('mail.forgetpassword',$messageData,function($message) use($email){
					$message->to($email)->subject('Forget password in Logistic website');
				});
				return redirect()->back()->with("success","Changed your password check your email !");
			
			}else{
				return redirect()->back()->with("success","Your selected email doesn't exist !");
			}
		}
		return view('user.password');
	}
	
		
	public function profileUpdate(Request $request){
	
		$title = 'Profile Update';
		$id = Auth::user()->id;
		$user_details = User::find($id);
		
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
				$user_details->pic = $filename;
			}
			
			$user_details->name = $data['name'];
			$user_details->email = $data['email'];
			$user_details->mobile = $data['mobile'];
			$user_details->password = bcrypt($data['password']);
			$user_details->save();
			return back()->with('message','You have successfully updated.');
		}
		
		return view('user.profile_update')->with(['controller'=>'user','title'=>$title,'carrier_id'=>$id,'carrier_details'=>$user_details]);
		
	}
	
	public function quoteList(){
		if(Auth::check()){
			$title = 'Quote';
			$id = Auth::user()->id;
			$addedCollection = Collection::where('user_id',$id)->get()->toArray();
			return view('user.quote_list')->with(['controller'=>'user','title'=>$title,'addedCollection'=>$addedCollection]);
		
		}
	}
	
	public function quoteView($id){
		$title = "Quote view";
		$collequotes = Collection::with('Quotes')->where('id',$id)->get()->toArray();
		
		//Notification read
		//QuoteNotification::where('collection_id', $id)->update(['status' =>1]);
		
		return view('user.quote_view')->with(['controller'=>'admin','title'=>$title,'collequotes'=>$collequotes,'quote_id'=>$id,'page_type'=>'admin']);
	
	}
	
	
}
