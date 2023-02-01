
@extends('Front.layouts.layout')
@section('content') 
<div class="page-title-area bg-8">
   <div class="container">
      <div class="page-title-content">
         <h2>Registration</h2>
         <ul>
            <li>
               <a href="https://splyint.com/">
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
    <div class="contact-form-action">
      
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
	  
      <form action="{{route('user.register')}}" method="post" id="userRegister" enctype="multipart/form-data">
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
              <label>Email address</label>
              <input class="form-control" type="email" name="email" value="{{old('email')}}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mt-3">
              <label>Office no.</label>
              <input class="form-control" type="text" name="office_no" value="{{old('office_no')}}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group mt-3">
              <label>Contact no.</label>
              <input class="form-control" type="tel" name="mobile" value="{{old('mobile')}}">
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
		   <div class="col-md-12">
            <div class="form-group mt-3">
              <label>Abn no</label>
              <input class="form-control" type="text" name="anb_no" id="test-input" value="{{old('anb_no')}}">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group mt-3">
              <label>Full Address</label>
				<textarea class="form-control" name="full_address" id="test-input" value="{{old('full_address')}}" rows="2" cols="20" placeholder="Enter full address">
				
				</textarea>
			</div>
          </div>
          	<div class="col-md-12 mt-3">
            <div class="form-group">
              <label>Attachment </label>
              <input class="form-control" type="file" name="attachment" id="test-input">
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
				<p>Have an account? <a href="{{route('login')}}">Login now!</a></p>
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