@extends('Front.layouts.layout')
@section('content')  

<div class="page-title-area bg-8">
   <div class="container">
      <div class="page-title-content">
         <h2>About Us</h2>
         <ul>
            <li>
               <a href="index.html">
               Home
               </a>
            </li>
            
               <i class='bx bx-chevrons-right'></i>
            
            <li class="active">About Us</li>
         </ul>
      </div>
   </div>
</div>
<!-- about us section start here -->
      <section class="about-us-area">
         <div class="container">
            <div class="row align-items-center">
               
               <div class="col-lg-7">
                 <div class="about-content wow fadeInRight" data-wow-delay="0.1s" style="visibility: visible; -webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
                     <span class="top-title">About Us</span>
                     <h2>Modern And Trusted Logistics Company</h2>
                     <p>
                        As a carrier that provides rapid, safe and successful delivery across the nation, dock to dock, and overall a remarkable choice of transportation modes, “Splyint” connects individuals, organizations, or manufacturers that need delivery services with bearers who can deliver goods in a timely, safe and efficient manner.
                     </p>
                     <p>With over a decade of experience in transportation, warehousing and supply chain management, Splyint is dedicated to serving its customers needs whether they are customers or carriers. Our main focus is to provide a reliable and time delivery with both cost efficiency and 24/7 customer support. As a result of extraordinary inclusions, we guarantee that your products will arrive where you need them, within the specified time frame. No matter where the load is transported. Our objective is to deliver the load in accordance with all safety guidelines until it is delivered to the customer. We operate all across Australia and cover drayage of all major parts.</p>
                    
                  </div>
               </div>
               <div class="col-lg-5">
                  <div class="about-img2 wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; -webkit-animation-delay: 0.2s; -moz-animation-delay: 0.3s; animation-delay: 0.2s;">
                     <img src="{{asset('front/assets/images/about-us.png')}}" alt="Image" class="w-100" />
                    
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about section end here -->
      <section id="counter-stats" class="wow fadeInRight" data-wow-duration="1.4s">
	<div class="container">
		<div class="row">

			<div class="col-lg-3">
                <div class="single-counter">
				<i class="flaticon-package"></i>
				<div class="counting" data-count="900000">0</div>
				<p>Lines of code</p>
                
                </div>
			</div>

			<div class="col-lg-3">
                <div class="single-counter">
				<i class="flaticon-worldwide"></i>
				<div class="counting" data-count="280">0</div>
				<p>Projects done</p>
                </div>
			</div>

			<div class="col-lg-3 ">
                <div class="single-counter">
				<i class="flaticon-user"></i>
				<div class="counting" data-count="75">0</div>
				<p>Happy clients</p>
                </div>
			</div>

			<div class="col-lg-3 ">
                <div class="single-counter">
				<i class="flaticon-location-1"></i>
				<div class="counting" data-count="999">0</div>
				<p>Cups of coffee</p>
                </div>
			</div>


		</div>
		<!-- end row -->
	</div>
	<!-- end container -->

</section>
      <!-- Register section end here -->
@endsection

<style>
span.error {
    color: red;
}
</style>
