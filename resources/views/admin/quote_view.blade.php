@extends('layouts.layout')
@section('content')  
	<!-- partial -->
        <div class="content-wrapper">
          <div class="row">
			
			
			<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Quotes view</h4>
				  
					@if(Session::has('success'))
						<p class="alert alert-info" style="width:50%">{{ Session::get('success') }}</p>
					@endif
				  <div class="col-12 float-right">
                    <a class="btn btn-primary" href="{{route('quote.list')}}"><i class="ti-home mr-2"></i>Back to QUotes</a>
                  </div>
				

						<form method="post" id="carrierAssign" action="{{route('assign.carrier')}}">
						@csrf
						<input type="hidden" name="quote_id" value="{{$quote_id}}"> 
							<div class="col-md-6 grid-margin stretch-card">
								<div class="card">
									<div class="card-body">
										<div class="form-group">
											<label>Assign to carrier</label>
											<select name="carrier" class="js-example-basic-single w-100 select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true" required>
											  <option value="">Select</option>
											  
											  @foreach($carriers as $carrier)
											  
											  @php 
											 if(in_array($carrier['id'], $assignCarrier)){
												$addvalue = "selected";
											  }else{
												$addvalue = "";
											  }
											  
											  @endphp
											  
											  
											  <option {{$addvalue}} value="{{@$carrier['id']}}" data-select2-id="3">{{@$carrier['name']}}</option>
											  
											  @endforeach
											</select>
										</div>
									</div>
								</div>
							
								<button type="submit" class="btn btn-primary">Assign</button>
							</div>
						</form>
					
				  
				@if(session('success_carrier'))
					<div class="alert alert-info w-50">{{session('success_carrier')}}</div>
				@endif
				
                  
					<div class="container">			  
					  <div class="row">
					  
					  @foreach($collequotes[0]['quotes'] as $quote )
					
						<div class="col-md-6">
							
							<ul class="list-group">
							  <li class="list-group-item">Category : {{ @$quote['pallet_category']}}</li>
							  <li class="list-group-item">Action Perchase : {{ @$quote['action_perchese']}}</li>
							  <li class="list-group-item">Which Website : {{ @$quote['which_website']}}</li>
							  <li class="list-group-item">Content Pallet : {{ @$quote['content_pallet']}}</li>
							  <li class="list-group-item">Whate Need Moving : {{ @$quote['whate_need_moving']}}</li>
							  <li class="list-group-item">Pallet Size : {{ @$quote['pallet_size']}}</li>
							  <li class="list-group-item">Quantity : {{ @$quote['Content Pallet']}}</li>
							  <li class="list-group-item">Unsure Weight : {{ @$quote['unsure_weight']}}</li>
							  <li class="list-group-item">Height Per Pallet : {{ @$quote['height_per_pallet']}}</li>
							  <li class="list-group-item">Weight Per Pallet : {{ @$quote['weight_per_pallet']}}</li>
							  <li class="list-group-item">Pallet CM : {{ @$quote['pallet_cm']}}</li>
							  <li class="list-group-item">Length Per Items : {{ @$quote['length_per_items']}}</li>
							  <li class="list-group-item">Width Per Items : {{ @$quote['width_per_items']}}</li>
							  <li class="list-group-item">Peigh Per Iems : {{ @$quote['heigh_per_items']}}</li>
							  <li class="list-group-item">Package_cm1 : {{ @$quote['package_cm1']}}</li>
							  <li class="list-group-item">Package_cm2 : {{ @$quote['package_cm2']}}</li>
							  <li class="list-group-item">Package_cm3 : {{ @$quote['package_cm3']}}</li>
							  <li class="list-group-item">Toncm : {{ @$quote['toncm']}}</li>
							  <li class="list-group-item">Total Cubic Meter : {{ @$quote['total_cubic_meter']}}</li>
							  <li class="list-group-item">Dangerousgoods : {{ @$quote['dangerousgoods']}}</li>
							  <li class="list-group-item">Class Dg : {{ @$quote['class_dg']}}</li>
							  <li class="list-group-item">Required Tailgate : {{ @$quote['required_tailgate']}}</li>
							  <li class="list-group-item">Items Secure : {{ @$quote['items_secure']}}</li>
							  <li class="list-group-item">More Details : {{ @$quote['more_details']}}</li>
							  <li class="list-group-item">More Details_content : {{ @$quote['more_details_content']}}</li>
							  <li class="list-group-item"> <img src="{{ asset('public/quote')}}/{{@$quote['take_photo']}}" > </li>
							 
							</ul>
						
						</div>
						@endforeach
						
						@foreach($collequotes as $quot)
						<div class="col-md-6">
							<ul class="list-group">
							  <li class="list-group-item">Collect : {{@$quot['collection_address']}}</li>
							  <li class="list-group-item">Delivery : {{@$quot['delivery_address']}}</li>
							  <li class="list-group-item">Sender : {{@$quot['iam']}}</li>
							  <li class="list-group-item">Load : {{@$quot['load_location']}}</li>
							</ul>
						</div>
						@endforeach
						@foreach($collequotes as $quot)
						<div>
							<ul>
							  <li class="list-group-item">Unload : {{@$quot['unload_location']}}</li>
							  <li class="list-group-item">From : {{@$quot['collection_from']}}</li>
							  <li class="list-group-item">To : {{@$quot['collection_to']}}</li>
							  <li class="list-group-item">Budget : {{@$quot['budget']}}</li>
							</ul>
						</div>
						@endforeach
						
					  </div>
					</div>
                </div>
              </div>
            </div>
			
		</div>
	<!-- main-panel ends -->
	<style>
	label.badge.badge-info a {
		color: #fff;
	}
	label.badge.badge-danger a {
		color: #fff;
	}
	.float-right a.btn.btn-primary { 
    float: right;
    margin-top: -40px;
}
	
	</style>
@endsection