
@extends('Front.layouts.layout')
@section('content') 
 <div class="page-title-area bg-8">
   <div class="container">
      <div class="page-title-content">
         <h2>Registration</h2>
         <ul>
            <li>
               <a href="www.splyint.com">
               Home
               </a>
            </li>
            
               <i class="bx bx-chevrons-right"></i>
            
            <li class="active">Registration</li>
         </ul>
      </div>
   </div>
</div>
<section class="user-area-style ptb-100">
  <div class="container">
  
      <div class="account-title">
        <h2>Registration</h2>
		
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		 

		 @if(Session::has('message'))
		<p class="alert alert-info">{{ Session::get('message') }}</p>
		@endif

      </div>
	  
      <form action="{{route('carrier.register')}}" method="post" id="carrierRegister" enctype="multipart/form-data">
	  @csrf
        <div class="row">
		
		<div class="colmd-md-12">
		    <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Full name</label>
              <input class="form-control" type="text" name="name" value="{{old('name')}}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Address</label>
              <input class="form-control" type="text" name="address" value="{{old('address')}}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mt-3">
              <label>User Email</label>
              <input class="form-control" type="email" name="email" value="{{old('email')}}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mt-3">
              <label>License No</label>
              <input class="form-control" type="text" name="lince_no" value="{{old('lince_no')}}">
            </div>
          </div>
		  
		  <div class="col-md-6">
            <div class="form-group mt-3">
              <label>Password</label>
              <input class="form-control" type="password" name="password" id="test-input" value="{{old('password')}}">
            </div>
            <div class="row align-items-center mt-3">
             
              <div class="col-lg-6 col-sm-6 text-right">
                <input id="remember-1" type="checkbox">
                <label>Show password ?</label>
              </div>

            </div>
          </div>
		  
          <div class="col-md-6">
            <div class="form-group mt-3">
              <label>Contact No</label>
              <input class="form-control" type="tel" name="mobile" value="{{old('mobile')}}">
            </div>
          </div>
		  
		  <div class="col-md-6">
            <div class="form-group mt-3">
              <label>Company Name</label>
              <input class="form-control" type="text" name="company_name" id="test-input" value="{{old('company_name')}}">
            </div>
          </div>
		  
		  
		  <div class="col-md-6">
            <div class="form-group mt-3">
              <label>Company Email</label>
              <input class="form-control" type="text" name="company_email" id="test-input" value="{{old('company_email')}}">
            </div>
          </div>
		  

		  
		   <div class="col-md-6">
            <div class="form-group mt-3">
              <label>Insurance no</label>
              <input class="form-control" type="text" name="insurance_no" id="test-input" value="{{old('insurance_no')}}">
            </div>
          </div>
		  
		  
		  <div class="col-md-6">
            <div class="form-group mt-3">
              <label>Gst no</label>
              <input class="form-control" type="text" name="gst_no" id="test-input" value="{{old('gst_no')}}">
            </div>
          </div>
		  
		  
		   <div class="col-md-6">
            <div class="form-group mt-3">
              <label>Type of truck owned</label>
              <input class="form-control" type="text" name="type_of_truck" id="test-input" value="{{old('type_of_truck')}}">
            </div>
          </div>
		  
		  
		  <div class="col-md-6 mt-3">
            <div class="form-group">
              <label>Attachment </label>
              <input class="form-control" type="file" name="attachment" id="test-input">
            </div>
          </div>
		  
          <div class="col-md-12">
            <div class="form-group mt-3">
              <label>Is it owner operated / corporate or / trucking fleet company </label>
				<textarea class="form-control" name="it_is_owned_corporate" id="test-input" value="{{old('it_is_owned_corporate')}}" rows="2" cols="20" placeholder="Enter full address">
				
				</textarea>
			</div>
          </div>
          	
       <div class="col-md-9">
            <div class="row align-items-center mt-3 text-center">
              
                <button class="default-btn register" type="submit">
                  <span>Register now</span>
                </button>
              
              
            </div>
          </div>
		  
		    <div class="col-lg-3">
				<br>
				<p>Have an account? <a href="{{route('carrier.login')}}">Login now!</a></p>
			</div>
          
        </div>
        </div>
		
		
	
		
      </form>
  
  </div>
  </div>
</section>
      <!-- Register section end here -->
@endsection

<style>
span.error {
    color: red;
}
</style>
