<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Truck;
use App\Models\Collection;
use App\Models\QuoteNotification;
use App\Models\Quote;
use Carbon\Carbon;
use Auth;

class FrontController extends Controller
{
    public function index(){
	$title = 'Home';
	$truecklist = Truck::get();
	$truecklist = json_decode(json_encode($truecklist));
	
    return view('Front.welcome',compact('truecklist','title'));
	
	}
	
	public function about(){
	  $title = 'About Us';
	  return view('Front.about_us',compact('title'));
	}
	
	public function contact(Request $request){
	      $title = 'Contact Us';
		  if($request->isMethod('post')){
			$data = $request->all();
			
			$this->validate($request, [
				'name' => 'required|min:5',
				'email' => 'required|email',
				'message' => 'required|min:5',
				'mobile' => 'required|min:10',
				'subject' => 'required',
			]);
			
			$email = $data['email'];
			$adminmailid ="himwebcoder@gmail.com";
	
			$messageData = ['email'=>$data['email'],'name'=>$data['name'],'mobile'=>$data['mobile'],'subjects'=>$data['subject'],'datamessage'=>$data['message']];
			Mail::send('mail.contact',$messageData,function($message) use($adminmailid){
				$message->to($adminmailid)->subject('Contact Us');
			});
			
			return back()->with('message','Thanks for contacting us! We will get in touch with you shortly.');
			
			
		  }
		  
	      return view('Front.contact',compact('title'));
	}
	public function quote(){
	
	 if(!Auth::user()) {
        return redirect('/user/register');
    }
	
	  $title = 'Quote';
	  return view('Front.get-a-quote')->with(['title'=>$title,'controller'=>'front','page_type'=>'quote']);
	}
	
	public function termsConditions(){
	  $title = 'Terms Conditions';
	  return view('Front.terms_conditions',compact('title'));
	}
	public function getquoteForm(Request $request){
		$data = $request->all();
		// save collection data
		
		$this->validate($request, [
			'pallet_category.*' => 'required',
			'pallet_size.*' => 'required',
			'quantity.*' => 'required',
			'weight_per_pallet.*' => 'required',
			'toncm.*' => 'required',
			'collection' => 'required',
			'delivery' => 'required',
			'iam' => 'required',
			'load_location' => 'required',
			'unload_location' => 'required',
			'collection' => 'required',
			'delivery' => 'required',
			'budget' => 'required',
		],
		[
			'pallet_category.*.required' => 'Pallet category field is required!',
			'pallet_size.*.required' => 'Pallet size field is required!',
			'quantity.*.required' => 'Pallet quantity field is required!',
			'weight_per_pallet.*.required' => 'Pallet weight field is required!',
			'toncm.*.required' => 'This field is required!',
			'collection.required' => 'Collection Address field is required!',
			'delivery.required' => 'Delivery Address field is required!',
			'iam.required' => 'Sender field is required!',
			'load_location.required' => 'Load location field is required!',
			'unload_location.required' => 'Unloading location field is required!',
			'collection.required' => 'Collection field is required!',
			'delivery.required' => 'Delivery field is required!',
			'budget.required' => 'Budget field is required!',
		] 
		
		);
		
		$collection = new Collection;
		
		if(!empty($data['collectiondaterange'])){
			$collectdate = explode("-",$data['collectiondaterange']);
			$collection_from = Carbon::parse($collectdate[0])->format('Y-m-d');
			$collection_to = Carbon::parse($collectdate[1])->format('Y-m-d');
			$collection->collection_from = isset($collection_from) ? $collection_from : "";
			$collection->collection_to = isset($collection_to) ? $collection_to : "";
		}
		
		if(!empty($data['deliveryearliestdate'])){
			$deliverydate = explode("-",$data['deliveryearliestdate']);
			$deliverydate_from = Carbon::parse($deliverydate[0])->format('Y-m-d');
			$deliverydate_to = Carbon::parse($deliverydate[1])->format('Y-m-d');
			$collection->delivery_from = isset($deliverydate_from) ? $deliverydate_from : "";
			$collection->delivery_to = isset($deliverydate_to) ? $deliverydate_to : "";
			
		}
		
		$collection->user_id = @Auth::user()->id;
		$collection->user_email = @Auth::user()->email;
		$collection->collection_address = $data['collection_address'];
		$collection->delivery_address = $data['delivery_address'];
		$collection->collection = $data['collection'];
		$collection->delivery = $data['delivery'];
		$collection->iam = $data['iam'];
		$collection->load_location = $data['load_location'];
		$collection->unload_location = $data['unload_location'];
		$collection->expiry_date = $data['expiry_date'];
		$collection->budget = $data['budget']; 
		$collection->save();
		
		$insertedId = $collection->id;
		$count = count($data['pallet_category']);
		
		for ($i=0; $i < $count; $i++) { 
			$quote = new Quote();
			$quote->collection_id = $insertedId; 
			$quote->pallet_category = $data['pallet_category'][$i];
			$quote->action_perchese = isset($data['action_perchese'][$i]) ? $data['action_perchese'][$i] : "0";
			$quote->which_website =   isset($data['which_website'][$i]) ? $data['which_website'][$i] : "";
			$quote->content_pallet = isset($data['content_pallet'][$i]) ? $data['content_pallet'][$i] : "";
			$quote->whate_need_moving = isset($data['whate_need_moving'][$i]) ? $data['whate_need_moving'][$i] : "";			
			$quote->pallet_size = isset($data['pallet_size'][$i]) ? $data['pallet_size'][$i] : "";
			$quote->quantity = isset($data['quantity'][$i]) ? $data['quantity'][$i] : "";
			$quote->unsure_weight = isset($data['unsure_weight'][$i]) ? $data['unsure_weight'][$i] : "0";
			$quote->height_per_pallet =  isset($data['height_per_pallet'][$i]) ? $data['height_per_pallet'][$i] : "";
			$quote->weight_per_pallet = isset($data['weight_per_pallet'][$i]) ? $data['weight_per_pallet'][$i] : "";
			$quote->pallet_cm = isset($data['pallet_cm'][$i]) ? $data['pallet_cm'][$i] : "0";
			$quote->length_per_items = isset($data['length_per_items'][$i]) ? $data['length_per_items'][$i] : "";
			$quote->width_per_items = isset($data['width_per_items'][$i]) ? $data['width_per_items'][$i] : "";
			$quote->heigh_per_items = isset($data['heigh_per_items'][$i]) ? $data['heigh_per_items'][$i] : "";
			$quote->package_cm1 = isset($data['package_cm1'][$i]) ? $data['package_cm1'][$i] : "0";
			$quote->package_cm2 = isset($data['package_cm2'][$i]) ? $data['package_cm2'][$i] : "0";
			$quote->package_cm3 = isset($data['package_cm3'][$i]) ? $data['package_cm3'][$i] : "0";
			$quote->toncm =  isset($data['toncm'][$i]) ? $data['toncm'][$i] : "0";
			$quote->total_cubic_meter = isset($data['total_cubic_meter'][$i]) ? $data['total_cubic_meter'][$i] : "";
			$quote->dangerousgoods = isset($data['dangerousgoods'][$i]) ? $data['dangerousgoods'][$i] : "0";
			$quote->class_dg = isset($data['class_dg'][$i]) ? $data['class_dg'][$i] : "";
			$quote->required_tailgate = isset($data['required_tailgate'][$i]) ? $data['required_tailgate'][$i] : "0";
			$quote->items_secure = isset($data['items_secure'][$i]) ? $data['items_secure'][$i] : "0";
			$quote->more_details = isset($data['more_details'][$i]) ? $data['more_details'][$i] : "0";
			$quote->more_details_content = isset($data['more_details_content'][$i]) ? $data['more_details_content'][$i] : "";
			
			
			if(isset($request->file('take_photo')[$i])){
				$file = isset($request->file('take_photo')[$i]) ? $request->file('take_photo')[$i] : "";
				$filename = time().'_'.$file->getClientOriginalName();
				$location = "quote";
				$file->move(public_path($location),$filename);
				$quote->take_photo = $filename;
				$quote->save();
			}
			
		}
		
		// Quote Notification
		$quoteNotification = new QuoteNotification;
		$quoteNotification->collection_id = $insertedId;
		$quoteNotification->collection_address = $data['collection_address'];
		$quoteNotification->delivery_address = $data['delivery_address'];
		$quoteNotification->budget = $data['budget'];
		$quoteNotification->user_id = @Auth::user()->id;
		$quoteNotification->user_name = @Auth::user()->name;
		$quoteNotification->user_email = @Auth::user()->email;
		$quoteNotification->save();
	
		return back()->with('message','Data inserted successfully.');
	}
	
	
}
