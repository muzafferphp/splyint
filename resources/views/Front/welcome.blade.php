@extends('Front.layouts.layout')
@section('content') 
      <!-- banner section start here -->
      <div class="banner-section">
          <div class="bg-video-wrap">
    <video  autoplay muted loop id="myVideo">
        <source  src="{{asset('front/assets/video/trucking.mp4')}}" type="video/mp4">
        <source  src="{{asset('front/assets/video/trucking.webm')}}" type="video/webm">
    </video>
    <div class="overlay">
    </div>
    <div class="container">
    <div class="banner_text wow fadeInDown animated" data-wow-duration="3s" style="visibility: visible;-webkit-animation-duration: 3s; -moz-animation-duration: 3s; animation-duration: 3s;">
        
                     <span>Logistics through innovation,<br> dedication, and technology.</span>
                    
                    
                    
                  </div>
   
  </div>
  </div>
          
         
      </div>
      <!-- banner section end here -->
      <!-- about us section start here -->
      <section class="about-us-area" id="about">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <div class="about-img wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                     <img src="{{asset('front/assets/images/about-img.jpg')}}" alt="Image" class="w-100" />
                     
                  </div>
               </div>
               <div class="col-lg-6">
                 <div class="about-content wow fadeInRight" data-wow-delay="0.1s" style="visibility: visible; -webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
                     
                     <h2>Freight transport and supply chain services all across Australia including warehouse.</h2>
                     <p>
                        Splyint incorporates freight transport and warehousing services with advanced technology and customer centric approach, we have expertise in logistics and supply chain with more than 9 years of experience and made us to serve successful deliveries of freight all across Australia. Splyint ensures to focus by taking complete ownership and follows all safety norms and procedures for safe and timely delivery,we provide end to end solutions to the client from Drayage to on the road, In-land transportation and warehousing solutions. 
                     </p>
                     
                   
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="video-us-area">
         <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                 <div class="about-content wow fadeInRight" data-wow-delay="0.1s" style="visibility: visible; -webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
                     
                     <h2>Why do choose us</h2>
                     <p>
                        Splyint services are completely free of cost we provide bridging between shippers and carriers for easy and accelerated movement of the freight. 
                     </p>
                      <p>
                        Splyint takes complete initiate and responsibility from pick up of the freight till delivery. Splyint assigns an agent per very load to ensure proper communication between shipper and carrier and our customer service works 24/7 to ensure all needs are met.  
                     </p>
                     
                   
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="video-sec wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                     <video autoplay="" muted="" loop="" id="video">
                        <source src="https://splyint.com/front/assets/video/warehousin.mp4" type="video/mp4">
                    </video>
                     
                  </div>
               </div>
               
            </div>
         </div>
      </section>
      <!-- about section end here -->
      <!-- services section start here -->
      <section class="service_section">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="services_headingtext ">
                     <h2>Industries We Serve</h2>
                  </div>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-lg-2 mt-4 wow fadeInLeft animated" data-wow-delay="0.1s" style="visibility: visible;-webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
                  <div class="services_box">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                     <img src="{{asset('front/assets/images/retail.png')}}" alt="truck">
                     <h2>Retail</h2>
                     
                  </div>
               </div>
               <div class="col-lg-2 mt-4">
                  <div class="services_box wow fadeInLeft animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                     <img src="{{asset('front/assets/images/electronic.png')}}" alt="recurring">
                      <h2>Electronics</h2>
                     
                  </div>
               </div>
               <div class="col-lg-2 mt-4">
                  <div class="services_box wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                     <img src="{{asset('front/assets/images/manufacture.png')}}" alt="truck">
                      <h2>Manufacturing</h2>
                  </div>
               </div>
               <div class="col-lg-2 mt-4">
                  <div class="services_box wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible;-webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
                     <img src="{{asset('front/assets/images/food.png')}}" alt="truck">
                     <h2>Food</h2>
                  </div>
               </div>
               <div class="col-lg-2 mt-4">
                  <div class="services_box wow fadeInLeft animated" data-wow-delay="0.5s" style="visibility: visible;-webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">
                     <img src="{{asset('front/assets/images/wholesale.png')}}" alt="truck">
                     <h2>Wholesale</h2>
                  </div>
               </div>
            </div>
            <div class="row mt-4">
               <div class="col-lg-12">
                  <div class="services_headingtext">
                     <h2>Trucks We Cover</h2>
                  </div>
               </div>
            </div>
            <div class="row justify-content-center  second_services">
               <div class="col-lg-3 mt-4">
                  <div class="services_box wow fadeInRight animated" data-wow-delay="0.1s" style="visibility: visible;-webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
                     <img src="{{asset('front/assets/images/truck.png')}}" alt="truck">
                      <h2>Full Truck</h2>
                  </div>
               </div>
               <div class="col-lg-3 mt-4">
                  <div class="services_box wow fadeInRight animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                     <img src="{{asset('front/assets/images/load-truck.png')}}" alt="recurring">
                      <h2>Partial Truck Load</h2>
                     
                  </div>
               </div>
               <div class="col-lg-3 mt-4">
                  <div class="services_box wow fadeInRight animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                     <img src="{{asset('front/assets/images/refrigerator.png')}}" alt="truck">
                      <h2>Refrigerated</h2>
                  </div>
               </div>
               <div class="col-lg-3 mt-4">
                  <div class="services_box wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible;-webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
                     <img src="{{asset('front/assets/images/cargo.png')}}" alt="truck">
                     <h2>Drayage</h2>
                  </div>
               </div>
             
            </div>
         </div>
         </div>
      </section>
      <!-- services section end here -->
      
     <!--map section start here-->
     <section class="main-contact-area" id="contact">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-md-5">
                  
                    <div class="map-section">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.7220825785607!2d144.70973531520835!3d-37.81997817975136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad68be276c12a91%3A0xb4f1bdf1d72bfc94!2s7%20Oats%20Wy%2C%20Truganina%20VIC%203029%2C%20Australia!5e0!3m2!1sen!2sin!4v1658127320857!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
              </div>
              <div class="col-md-7">
      <div class="section-title">
      <h2>Drop Us A Message For Any Query</h2>
      </div>
      <form id="contactForm" novalidate="true">
      <div class="row ">
      <div class="col-lg-6 col-sm-6">
      <div class="form-group">
      <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name" placeholder="Your Name" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
      <div class="help-block with-errors"></div>
      </div>
      </div>
      <div class="col-lg-6 col-sm-6">
      <div class="form-group">
      <input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email" placeholder="Your Email">
      <div class="help-block with-errors"></div>
      </div>
      </div>
      <div class="col-lg-6 col-sm-6">
      <div class="form-group">
      <input type="text" name="phone_number" id="phone_number" required="" data-error="Please enter your number" class="form-control" placeholder="Your Phone">
      <div class="help-block with-errors"></div>
      </div>
      </div>
      <div class="col-lg-6 col-sm-6">
      <div class="form-group">
      <input type="text" name="msg_subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject" placeholder="Your Subject">
      <div class="help-block with-errors"></div>
      </div>
      </div>
      <div class="col-lg-12 col-md-12">
      <div class="form-group">
      <textarea name="message" class="form-control" id="message" col="30" rows="10" required="" data-error="Write your message" placeholder="Your Message"></textarea>
      <div class="help-block with-errors"></div>
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
      </div>
      </form>
      </div>
      </div>
      </section>
   
     <!--map section end here-->
@endsection