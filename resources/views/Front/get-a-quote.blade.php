@extends('Front.layouts.layout')
@section('content')

<div class="page-title-area bg-8">
   <div class="container">
      <div class="page-title-content">
         <h2>Get A Quote</h2>
         <ul>
            <li>
               <a href="www.splyint.com">
               Home
               </a>
            </li>
            
               <i class='bx bx-chevrons-right'></i>
            
            <li class="active">Get A Quote</li>
         </ul>
      </div>
   </div>
</div> 

<!-- about us section start here -->
<section class="about-us-area">
    <div class="container">
        <div class="row align-items-center">
		
		
		
		
		@if($errors->any())
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
				</ul>
			</div>
		@endif
		
			
			<div class="col-lg-12">
				@if(Session::has('message'))
					<p class="alert alert-info">{{ Session::get('message') }}</p>
				@endif
				  <form method="post" name="demoform" id="demoform" action="{{ route('dropzone') }}" enctype="multipart/form-data">
				 @csrf
					<div align="center">
						<h3 class="fs-subtitle">Pallets and Packages - Get a Quote</h3>
					</div>
					
					 <div class="heading">
                       <h2 class="fs-title">1.Details 1</h2>
                    </div>
					
					<!-- Start main add items-->
					
				<div clas="mail_form_first" id="main_form_id_first">
					<div clas="mail_form" id="main_form_id">
					
						<div class="form-group required mt-3">
							@if($errors->has('pallet_category.0'))
								<div class="text-danger">{{ $errors->first('pallet_category.0') }}</div>
							@endif
							
							<div class="row align-items-center">
								<div class="col-sm-6">
									<label class="control-label ">Category </label>
									
									<select class="form-select" id="pallet_category" name="pallet_category[]">
										<option selected="selected" value="">select</option>
										<option  value="Pallets" @if (old('pallet_category.0') == "Pallets") {{ 'selected' }} @endif>Pallets</option>
										<option  value="Pallecons" @if (old('pallet_category.0') == "Pallecons") {{ 'selected' }} @endif>Pallecons</option>
										<option  value="Packages" @if (old('pallet_category.0') == "Packages") {{ 'selected' }} @endif>Packages, Boxes or Cartons</option>
									</select>
									
								</div>
							</div>
						</div>
						
						<div class="form-group mt-3">
							<div class="row">
								<div class="col-sm-6">
								<label class="control-label">Auction item or Online Purchase :</label>
									<div class="form-check form-switch">
									   <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="action_perchese[]" value="1">
									</div>
								</div>
							</div>
						</div>
						
						<div class="form-group mt-3" id="actionWebsite">
                            <div class="row">
								<div class="col-sm-6">
									<label>Which Auction Website</label>
									<select class="js-example-basic-single w-100" name="which_website[]">
									  <option value="Grays Online">Grays Online</option>
									  <option value="Facebook">Facebook</option>
									  <option value="America">America</option>
									  <option value="Canada">Canada</option>
									  <option value="Russia">Russia</option>
									</select>
								</div>
							</div>
						</div>
						
						<div class="form-group mt-3" id="content_pallet">
                            <div class="row ">
								<div class="col-sm-6">
									<label class="col-form-label">Contents on Pallet </label>
									<input type="text" class="form-control" name="content_pallet[]" >
								</div>
							</div>
						</div>
						
						<div class="form-group mt-3" id="needMoving">
                            <div class="row">
                                <div class="col-sm-6">  
								  <label class="control-label col-sm-4">What Needs Moving </label>
								  <div class="col-sm-8">
										<input type="text" class="form-control" name="whate_need_moving[]">
								  </div>
								</div>
							</div>
						</div>
						
						
						<div class="row align-items-center mt-3 ">
							<div class="col-sm-6">
						  
						  	@if($errors->has('pallet_size.0'))
							<div class="text-danger">{{ $errors->first('pallet_size.0') }}</div>
							@endif
						  <label class="col-form-label">Pallet Size </label>
						  
								<div class="row align-items-center">
									<div class="col-sm-7">
										<select class="form-control" name="pallet_size[]">
											<option selected="selected" value=""></option>
											<option value="Standard" @if (old('pallet_size.0') == "Standard") {{ 'selected' }} @endif>Standard (116.5cm x 116.5cm)</option>
											<option value="Euro" @if (old('pallet_size.0') == "Euro") {{ 'selected' }} @endif>Euro (100cm x 120cm)</option>
											<option value="Euro2" @if (old('pallet_size.0') == "Euro2") {{ 'selected' }} @endif>Euro (80cm x 120cm)</option>
											<option value="Non" @if (old('pallet_size.0') == "Non") {{ 'selected' }} @endif>Non Standard</option>
										</select>
									</div>

									<div class="col-sm-5">
										<div class="quantity_section">
											@if($errors->has('quantity.0'))
											<div class="text-danger">{{ $errors->first('quantity.0') }}</div>
											@endif
										   <label class="col-form-label">Quantity </label>
											<div class="value-button" id="decrease" value="Decrease Value">-</div>
												<input type="number" id="number" @if (old('quantity.0')>0)value="{{old('quantity.0')}}" @else value="0" @endif  name="quantity[]"/>
											<div class="value-button" id="increase" value="Increase Value">+</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
						
						<div class="form-group mt-3">
                            <div class="row">
								<div class="col-sm-6">
									<div class="unsure_weight_section">
									   <div class="form-check form-check-primary ">
											<label class="form-check-label">
											  <input type="checkbox" class="form-check-input" value="1" name="unsure_weight[]">
											  Unsure of Weight or Dimensions
											<i class="input-helper"></i></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="form-group mt-3" id="height_per_pallet">
                            <div class="row">
								<div class="col-sm-6 ">
									<div class="row align-items-center">
										<div class="col-sm-8 form-group">
											<input type="text" class="form-control" placeholder="height per Pallet" name="height_per_pallet[]">
										</div>
										<div class="col-sm-2 form-group">
											<input type="radio" class="form-check-input" name="pallet_cm[]" id="ExampleRadio1" value="cm"> CM
										</div>
										<div class="col-sm-2 form-group">
											<input type="radio" class="form-check-input" name="pallet_cm[]" id="ExampleRadio2" value="meter"> Meters
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row form-group"> 
							<div id="lengthperItems"> 
								<div class="col-sm-8 form-group">
									<input type="text" class="form-control" placeholder="length per items" name="length_per_items[]">
								</div>
								<div class="col-sm-2 form-group">
									<input type="radio" class="form-check-input" id="ExampleRadio1" value="cm"  name="package_cm1[]"> CM
								</div>
								<div class="col-sm-2 form-group">
									<input type="radio" class="form-check-input" id="ExampleRadio2" value ="meter" name="package_cm1[]"> Meters
								</div>
								
								<div class="col-sm-8 form-group">
									<input type="text" class="form-control" placeholder="width per items" name="width_per_items[]">
								</div>
								<div class="col-sm-2 form-group">
									<input type="radio" class="form-check-input" id="ExampleRadio1" value="cm" name="package_cm2[]"> CM
								</div>
								<div class="col-sm-2 form-group">
									<input type="radio" class="form-check-input" id="ExampleRadio2" value="meter" name="package_cm2[]"> Meters
								</div>
								
								<div class="col-sm-8 form-group">
									<input type="text" class="form-control" placeholder="height per items" name="heigh_per_items[]">
								</div>
								<div class="col-sm-2 form-group">
									<input type="radio" class="form-check-input" id="ExampleRadio1" value="cm" name="package_cm3[]"> CM
								</div>
								<div class="col-sm-2 form-group">
									<input type="radio" class="form-check-input" id="ExampleRadio2" value="meter" name="package_cm3[]"> Meters
								</div>
								
							</div>
						</div>
						
						<div class="row mt-3">
                           <div class="col-sm-6">
								<div class="form-group" id="total_cubic_meter">
									<label class="col-form-label">Total Cubic Meters (m3)</label>
									<input type="text" class="form-control" name="total_cubic_meter[]">
								</div>
							</div>
						</div>
						
						
						<div class="row align-items-center mt-3">
                            <div class="col-sm-6">
								<div class="row align-items-center">
									<div class="col-sm-8">
										<div class="form-group">
											@if($errors->has('weight_per_pallet.0'))
											<div class="text-danger">{{ $errors->first('weight_per_pallet.0') }}</div>
											@endif
											<input type="text" class="form-control" placeholder="Weight per Pallet" name="weight_per_pallet[]">
										</div>
									</div>
									
									@if($errors->has('toncm.0'))
									<div class="text-danger">{{ $errors->first('toncm.0') }}</div>
									@endif
									
									<div class="col-sm-2">
										<div class="form-group">
											<input type="radio" class="form-check-input" name="toncm[]" value="kg" id="ExampleRadio1" @if(old('toncm.0') == "kg") {{'checked'}}@endif>KG
										</div>
									</div>
									<div class="col-sm-2 ">
										<div class="form-group">
											<input type="radio" class="form-check-input" name="toncm[]" value="tons" id="ExampleRadio2" @if(old('toncm.0') == "tons") {{'checked'}}@endif>TONS
										</div>
									</div>
								</div>
							</div>
						</div>
						
                        <div class="form-group required mt-3">
							<div class="row">
								<div class="col-sm-6">
									<label class="control-label ">Is this Dangerous Goods (DG)</label>
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" id="DangerousGoods" value="1" name="dangerousgoods[]">
									</div>
								</div>
							</div>
						</div>
						
						<div class="row mt-3">
                            <div class="col-sm-6">
								<div class="form-group" id="what_dangerous">
									<label>What class of DG </label>
									<select class="js-example-basic-single w-100" name="class_dg[]">
									  <option value="1">Class 1 : Explosives</option>
									  <option value="2">Class 2 : Gases</option>
									  <option value="3">Class 3 : Flammable liquids</option>
									  <option value="4">Class 4 : Flammable solids</option>
									  <option value="5">Class 5 : Oxidizing substances and organic peroxides</option>
									  <option value="6">Class 6 : Toxic and infectious substances</option>
									  <option value="7">Class 7: Radioactive material</option>
									  <option value="8">Class 8: Corrosive substances</option>
									  <option value="9">Class 9: Miscellaneous dangerous substances and articles</option>
									</select>
								</div>
							</div>
						</div>
						

						<div class="form-group required mt-3">
                            <div class="row">
                                <div class="col-sm-6">
									<label class="control-label ">I Require a Tailgate Lift </label>
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" value="1" name="required_tailgate[]">
									</div>
								</div>
							</div>
						</div>
						
						<div class="row mt-3">
                            <div class="col-sm-6">
								<div class="form-check form-check-info">
									<label class="form-check-label">
									  <input type="checkbox" class="form-check-input" name="items_secure[]" value="1">Items secured to Pallet
									<i class="input-helper"></i></label>
								</div>
								<div class="form-check form-check-info">
									<label class="form-check-label">
									  <input type="checkbox" class="form-check-input" name="more_details[]" id="moreDetailscheck" value="1">Add More Details
									<i class="input-helper"></i></label>
								</div>
							</div>
                        </div>
						
						<div class="form-group row" id="moreDetailscontent">
							<div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
										<label class="col-form-label">More Details </label>
										<textarea name="more_details_content[]" placeholder="eg. access issues, loading and unloading facilities, special hours of operation, special instructions" rows="4" cols="50"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group required mt-3">
                            <div class="row">
                                <div class="col-sm-6">
									<h2>Take/ Upload photo</h2>
									<input type="file" id="take_photo" name="take_photo[]" accept="image/png, image/jpeg">	
								
								</div>
							</div>
						</div>
						
					</div> 
				</div> 
					<!-- End main add items-->

					
					<div class="row">
						<div class="col-sm-6">
							<div _ngcontent-c2="" >
								<a id="addRow" class="btn btn-primary btn-lg" href="javascript:;">+ ADD ANOTHER ITEM</a>
							</div>
						</div>
					</div>
							
					
				<div class="second_part">
					<div class="row">
						<div class="col-sm-12">
							<div class="heading">
								<h2 class="fs-title">2. Collection & Delivery Locations</h2>
							</div>
						</div>
					</div>
					
					<div class="form-group  jls-field-wrapper jls-address-lookup">
					    <div class="row">
					        <div class="col-sm-6">
						@if($errors->has('collection_address'))
							<div class="text-danger">{{ $errors->first('collection_address') }}</div>
						@endif
						<label class="col-form-label">Collection Address</label>
						<input  type="text" class="form-control" autocomplete="off" id="collection_address" name="collection_address" value="{{old('collection_address')}}">
						</div>
						</div>
					</div>
					
					<div class="form-group row">
					    <div class="row">
					        <div class="col-sm-6">
						@if($errors->has('delivery_address'))
							<div class="text-danger">{{ $errors->first('delivery_address') }}</div>
						@endif
						
						<label class="col-form-label">Delivery Address</label>
						<input type="text" class="form-control" id="delivery_address" name="delivery_address" value="{{old('delivery_address')}}">
						</div>
						</div>
					</div>
					
					<div class="form-group i-am">
					    <div class="row">
					        <div class="col-sm-6">
						@if($errors->has('iam'))
							<div class="text-danger">{{ $errors->first('iam') }}</div>
						@endif
						
						<label class="col-form-label">I am</label>
						<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
						  <input type="radio" class="btn-check" name="iam" id="btnradio1" value="sender" @if(old('iam')== "sender"){{'checked' }} @endif>
						  <label class="btn btn-outline-primary" for="btnradio1">Sender</label>

						  <input type="radio" class="btn-check" name="iam" id="btnradio2" value="receiver" @if(old('iam') == "receiver"){{'checked' }} @endif>
						  <label class="btn btn-outline-primary" for="btnradio2">Receiver</label>

						  <input type="radio" class="btn-check" name="iam" id="btnradio3" value="both" @if(old('iam') == "both") {{'checked'}}@endif>
						  <label class="btn btn-outline-primary" for="btnradio3">Both</label>
						</div>
						</div>
						</div>
					</div>
					
					<div class="form-group">
					    <div class="row">
					        <div class="col-sm-6">
						@if($errors->has('load_location'))
							<div class="text-danger">{{ $errors->first('load_location') }}</div>
						@endif
						<label>Load Location</label>
						<select class="js-example-basic-single" name="load_location">
							<option value="" > </option>
							<option value="1" @if(old('load_location')==1){{'selected'}}@endif>Residential</option>
							<option value="2" @if(old('load_location')==2) {{ 'selected' }} @endif>Commercial with loading facilities</option>
							<option value="3" @if(old('load_location')==3) {{ 'selected' }} @endif>Commercial without loading facilities</option>
							<option value="4" @if(old('load_location')==4) {{ 'selected' }} @endif>Farm (assumes loading available)</option>
							<option value="5" @if(old('load_location')==5) {{ 'selected' }} @endif>Storage (assumes no loading facilities)</option>
							<option value="6" @if(old('load_location')==6) {{ 'selected' }} @endif>Auction Site (assumes loading available)</option>
							<option value="7" @if(old('load_location')==7) {{ 'selected' }} @endif>Construction Site (loading available)</option>
												  
						</select>
					</div>
						</div>
							</div>
					
					<div class="form-group">
					      <div class="row">
					        <div class="col-sm-6">
						@if($errors->has('unload_location'))
							<div class="text-danger">{{ $errors->first('unload_location') }}</div>
						@endif
						<label>Unloading Location</label>
						<select class="js-example-basic-single" name="unload_location">>
							<option value=""> </option>
							<option value="2" @if(old('unload_location')==2) {{ 'selected' }} @endif>Residential</option>
							<option value="3" @if(old('unload_location')==3) {{ 'selected' }} @endif>Commercial with unloading facilities</option>
							<option value="4" @if(old('unload_location')==4) {{ 'selected' }} @endif>Commercial without unloading facilities</option>
							<option value="5" @if(old('unload_location')==5) {{ 'selected' }} @endif>Farm (assumes unloading available)</option>
							<option value="6" @if(old('unload_location')==6) {{ 'selected' }} @endif>Storage (assumes no unloading facilities)</option>
							<option value="7" @if(old('unload_location')==7) {{ 'selected' }} @endif>Auction Site (assumes unloading available)</option>
							<option value="8" @if(old('unload_location')==8) {{ 'selected' }} @endif>Construction Site (unloading available)</option>

						</select>
					</div>
					</div>
					</div>
					
					<div class="row">
					    <div class="col-sm-6">
					        <div class="row">
                      <div class="col-md-6">
					  <label class="form-check-label">Collection Date </label>
                        <div class="form-group">
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
							@if($errors->has('collection'))
							<div class="text-danger">{{ $errors->first('collection') }}</div>
							@endif
                              <input type="radio" class="form-check-input" name="collection" id="ReadyNow" value="Ready Now" @if(old('collection') == "Ready Now"){{'checked' }} @endif>
                              Ready Now
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check form-check-success">
                            <label class="form-check-label">
							@if($errors->has('collection'))
							<div class="text-danger">{{ $errors->first('collection') }}</div>
							@endif
                              <input type="radio" class="form-check-input" name="collection" id="collectionDateRange" value="Date Range" @if(old('collection') == "Date Range"){{'checked' }} @endif>
                              Date Range
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check form-check-info">
                            <label class="form-check-label">
							@if($errors->has('collection'))
							<div class="text-danger">{{ $errors->first('collection') }}</div>
							@endif
                              <input type="radio" class="form-check-input" name="collection" id="NoDate" value="no date" @if(old('collection') == "no date"){{'checked' }} @endif >
                              No Date/Budgeting
                            <i class="input-helper"></i></label>
                          </div>
						  
						<div class="form-group" id="collectionEarliest">
							<label>Collection Earliest </label>
							<input type="text" name="collectiondaterange" id="collectiondateranges" value="" />
						</div>
						
						  
                        </div>
                      </div>
                      <div class="col-md-6">
					  <label class="form-check-label">Delivery Date</label>
                        <div class="form-group">
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
							@if($errors->has('delivery'))
							<div class="text-danger">{{ $errors->first('delivery') }}</div>
							@endif
                              <input type="radio" class="form-check-input" name="delivery" id="deliverynow" value="ready now" @if(old('delivery') == "ready now"){{'checked' }} @endif>
                              Ready Now
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check form-check-success">
                            <label class="form-check-label">
							@if($errors->has('delivery'))
							<div class="text-danger">{{ $errors->first('delivery') }}</div>
							@endif
                              <input type="radio" class="form-check-input" name="delivery" id="DeliveryDaterange" value="Date Range" @if(old('delivery') == "Date Range"){{'checked' }} @endif>
                              Date Range
                            <i class="input-helper"></i></label>
                          </div>
                          <div class="form-check form-check-info">
                            <label class="form-check-label">
							@if($errors->has('delivery'))
							<div class="text-danger">{{ $errors->first('delivery') }}</div>
							@endif
                              <input type="radio" class="form-check-input" name="delivery" id="DeliverynoDate" value="no date" @if(old('delivery') == "no date"){{'checked' }} @endif>
                              No Date/Budgeting
                            <i class="input-helper"></i></label>
                          </div>
						  
						<div class="form-group " id="DeliveryEarliest">
						   
							@if($errors->has('deliveryearliestdate'))
							<div class="text-danger">{{ $errors->first('deliveryearliestdate') }}</div>
							@endif
							<label>Delivery Earliest</label>
							<input type="text" name="deliveryearliestdate" id="DeliveryearliestDates" value="" />
							</div>
						</div>
					
                        </div>
                      </div>
                    </div>
                    </div>
                    </div>
					
					<div class="form-group ">
						<div class="row">
						    <div class="col-sm-6">
							<div class="jumbotron">
								<div _ngcontent-c2="" class="footer-suggestion">
									<div _ngcontent-c2="" class="dates-suggest">
										<div _ngcontent-c2="" class="row">
											<div _ngcontent-c2="" class="col-sm-12">
												<span _ngcontent-c2="" class="glyphicon glyphicon-calendar">
												</span> Request for Collection
												<span id="request_collection"></span>
											</div>
										</div>
										<div _ngcontent-c2="" class="row">
											<div class="col-sm-12"> 
												<span class="glyphicon glyphicon-calendar"></span> 
												Request for Delivery
												<span id="request_delivery">
													<span class="error-dates"></span> 
												</span>
											</div>
										</div>
										<div _ngcontent-c2="" class="row  expire-text">
											<div _ngcontent-c2="" class="col-sm-12">
											<span _ngcontent-c2="" class="glyphicon glyphicon-hourglass"></span> 
											You Listing will expire in 
												<select id="expiry_selector" name="expiry_date">
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							</div>
							</div>
						
					</div>
					
					<div class="form-group">
					     <div class="row">
						        <div class="col-sm-6">
					@if($errors->has('budget'))
					<div class="text-danger">{{ $errors->first('budget') }}</div>
					@endif
						<label class="col-form-label">Your budget for this job (optional) </label>
						<input type="number" name="budget" class="form-control" placeholder="eg. $1000" value="{{old('budget')}}">
					</div>
					</div>
					</div>
					
					<div class="form-group">
					     <div class="row">
						        <div class="col-sm-6">
				 <input type="submit" class="form-control sumbit_btn" value="Continue">
				</div>
				</div>
				</div>
				</div>
				</form>
			</div>
			
			<div class="col-lg-3">
			   
                  
            </div>
               
		</div>
	</div>
</section>
      <!-- Register section end here -->
@endsection