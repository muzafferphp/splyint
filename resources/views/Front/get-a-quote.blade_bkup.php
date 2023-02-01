@extends('Front.layouts.layout')
@section('content')  

<div class="page-title-area bg-8">
   <div class="container">
      <div class="page-title-content">
         <h2>Get A Quote</h2>
         <ul>
            <li>
               <a href="https://splyint.com/">
               Home
               </a>
            </li>
            
               <i class='bx bx-chevrons-right'></i>
            
            <li class="active">Get A Quote</li>
         </ul>
      </div>
   </div>
</div>

<section class="user-area-style ptb-100">
  <div class="container">
    <div class="contact-form-action">
      <div class="account-title">
        <h2>Get A Quote</h2>
		
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
      <form action="{{route('quote')}}" method="post" id="carrierRegister">
	  @csrf
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label>Name</label>
              <input class="form-control" type="text" name="name" value="{{old('name')}}">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label>Email address</label>
              <input class="form-control" type="email" name="email" value="{{old('email')}}">
            </div>
          </div>
          <div class="col-12">
            <div class="form-group">
              <label>Message</label>
              <input class="form-control" type="tel" name="mobile" value="{{old('mobile')}}">
            </div>
          </div>
          
          <div class="col-12">
            <div class="row align-items-center">
              <div class="col-lg-6 col-sm-6">
                <button class="default-btn register" type="submit">
                  <span>Submit</span>
                </button>
              </div>
              
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
