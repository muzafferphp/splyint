@extends('Front.layouts.layout')
@section('content')  
<div class="page-title-area bg-8">
   <div class="container">
      <div class="page-title-content">
         <h2>Contact Us</h2>
         <ul>
            <li>
               <a href="index.html">
               Home
               </a>
            </li>
            
               <i class='bx bx-chevrons-right'></i>
            
            <li class="active">Contact Us</li>
         </ul>
      </div>
   </div>
</div>
<section class="contact-info-area">
   <div class="container">
   <div class="row">
   <div class="col-lg-3 col-sm-6">
   <div class="single-contact-info wow fadeInLeft  animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
   <i class="bx bx-envelope"></i>
   <h3>Email Us:</h3>
   <a href="mailto:support@splyint.com">support@splyint.com</a>
   
   </div>
   </div> 
   <div class="col-lg-3 col-sm-6">
   <div class="single-contact-info fadeInLeft  animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
   <i class="bx bx-phone-call"></i>
   <h3>Call Us:</h3>
   <a href="tel:03 9989 3652"> 03 9989 3652</a>
   
   </div>
   </div>
   <div class="col-lg-3 col-sm-6">
   <div class="single-contact-info wow fadeInLeft  animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
   <i class="bx bx-location-plus"></i>
   <h3>Address</h3>
   <a href="#">Truganina 3029 Victoria</a>
   </div>
   </div>
   <div class="col-lg-3 col-sm-6">
   <div class="single-contact-info wow fadeInLeft  animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
   <i class="bx bx-support"></i>
   <h3>Live Chat</h3>
   <a href="#">Live Chat All The Time With Our Company 24/7</a>
   </div>
   </div>
   </div>
   </div>
   </section>
   <section class="main-contact-area">
      <div class="container">
      <div class="section-title">
      <h2>Drop Us A Message For Any Query</h2>
      </div>
	  
	  	@if(Session::has('message'))
		<p class="alert alert-info">{{ Session::get('message') }}</p>
		@endif
	  
	  <form action="{{route('contact')}}" method="post" id="contactForm" novalidate="true">
	  @csrf
      <div class="row">
      <div class="col-lg-6 col-sm-6">
      <div class="form-group">
      <input type="text" name="name" id="name" class="form-control" required="" value="{{old('name')}}"data-error="Please enter your name" placeholder="Your Name" style="">
      <div class="help-block with-errors">
		@if($errors->has('name'))
			<div class="error text-danger">{{ $errors->first('name') }}</div>
		@endif
	  </div>
      </div>
      </div>
      <div class="col-lg-6 col-sm-6">
      <div class="form-group">
      <input type="email" name="email" id="email" class="form-control" required="" value="{{old('email')}}" data-error="Please enter your email" placeholder="Your Email">
      <div class="help-block with-errors">
		@if($errors->has('email'))
			<div class="error text-danger">{{ $errors->first('email') }}</div>
			@endif
	  </div>
      </div>
      </div>
      <div class="col-lg-6 col-sm-6">
      <div class="form-group">
      <input type="text" name="mobile" id="phone_number" required="" value="{{old('mobile')}}" data-error="Please enter your number" class="form-control" placeholder="Your Phone">
      <div class="help-block with-errors">
		@if($errors->has('mobile'))
			<div class="error text-danger">{{ $errors->first('mobile') }}</div>
		@endif
	  </div>
      </div>
      </div>
      <div class="col-lg-6 col-sm-6">
      <div class="form-group">
      <input type="text" name="subject" id="msg_subject" class="form-control" required="" value="{{old('subject')}}" data-error="Please enter your subject" placeholder="Your Subject">
      <div class="help-block with-errors">
		
		@if($errors->has('subject'))
			<div class="error text-danger">{{ $errors->first('subject') }}</div>
		@endif
	  
	  </div>
      </div>
      </div>
      <div class="col-lg-12 col-md-12">
      <div class="form-group">
      <textarea name="message" class="form-control" id="message" col="30" rows="10" value="{{old('message')}}" required="" data-error="Write your message" placeholder="Your Message"></textarea>
      <div class="help-block with-errors">
		@if($errors->has('message'))
			<div class="error text-danger">{{ $errors->first('message') }}</div>
		@endif
	  </div>
      </div>
      </div>
      <div class="col-12">
      <div class="form-group checkboxs">
      <input type="checkbox" id="chb2" required>
      <p>
      Accept <a href="#">Terms &amp; Conditions</a> And <a href="#">Privacy Policy.</a>
      </p>
      </div>
      </div>
      <div class="col-12">
      <button type="submit" class="default-btn " style=" cursor: pointer;">
      Send Message
      </button>
      <div id="msgSubmit" class="h3 text-center hidden"></div>
      <div class="clearfix"></div>
      </div>
      </div>
      </form>
	  
	  
      </div>
      </section>
      <div class="map-section">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.7220825785607!2d144.70973531520835!3d-37.81997817975136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad68be276c12a91%3A0xb4f1bdf1d72bfc94!2s7%20Oats%20Wy%2C%20Truganina%20VIC%203029%2C%20Australia!5e0!3m2!1sen!2sin!4v1658127320857!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
<!--<section class="user-area-style ptb-100">-->
<!--  <div class="container">-->
<!--    <div class="contact-form-action">-->
<!--      <div class="account-title">-->
<!--        <h2>Contact Us</h2>-->
		<!--
<!--		@if (count($errors) > 0)-->
<!--			<div class="alert alert-danger">-->
<!--				<ul>-->
<!--					@foreach ($errors->all() as $error)-->
<!--						<li>{{ $error }}</li>-->
<!--					@endforeach-->
<!--				</ul>-->
<!--			</div>-->
<!--		@endif-->
<!--		 -->

<!--		 @if(Session::has('message'))-->
<!--		<p class="alert alert-info">{{ Session::get('message') }}</p>-->
<!--		@endif-->

<!--      </div>-->
<!--      <form action="{{route('contact')}}" method="post" id="carrierRegister">-->
<!--	  @csrf-->
<!--        <div class="row">-->
<!--          <div class="col-12">-->
<!--            <div class="form-group">-->
<!--              <label>Full name</label>-->
<!--              <input class="form-control" type="text" name="name" value="{{old('name')}}">-->
           
<!--			@if($errors->has('name'))-->
<!--			<div class="error text-danger">{{ $errors->first('name') }}</div>-->
<!--			@endif-->
<!--			</div>-->
<!--          </div>-->
<!--          <div class="col-12">-->
<!--            <div class="form-group">-->
<!--              <label>Email address</label>-->
<!--              <input class="form-control" type="email" name="email" value="{{old('email')}}">-->
            
<!--			@if($errors->has('email'))-->
<!--			<div class="error text-danger">{{ $errors->first('email') }}</div>-->
<!--			@endif-->
<!--			</div>-->
<!--          </div>-->
<!--          <div class="col-12">-->
<!--            <div class="form-group">-->
<!--              <label>Message</label>-->
<!--              <input class="form-control" type="tel" name="message" value="{{old('message')}}">-->
            
<!--			@if($errors->has('message'))-->
<!--			<div class="error text-danger">{{ $errors->first('message') }}</div>-->
<!--			@endif-->
<!--			</div>-->
<!--          </div>-->
          
<!--          <div class="col-12">-->
<!--            <div class="row align-items-center">-->
<!--              <div class="col-lg-6 col-sm-6">-->
<!--                <button class="default-btn register" type="submit">-->
<!--                  <span>Submit</span>-->
<!--                </button>-->
<!--              </div>-->
              
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </form>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->
      <!-- Register section end here -->
@endsection

<style>
span.error {
    color: red;
}
</style>
