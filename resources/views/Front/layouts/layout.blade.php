<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
	  
      <link href="{{asset('front/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
	  
      <link href="{{asset('front/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="{{asset('front/assets/css/flaticon.css')}}" />
      <link rel="stylesheet" href="{{asset('front/assets/css/boxicons.min.css')}}" />
      <link rel="stylesheet" href="{{asset('front/assets/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="{{asset('front/assets/css/owl.carousel.min.css')}}">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css">
      <title>{{ isset($title) ? $title : 'logistics'}}</title>
	  <script src="//code.tidio.co/szawjrrkfwfr2ddr3lxsjjeira6xfuk6.js" async></script>
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
	  <link rel="shortcut icon" href="{{asset('front/assets/images/icon_logo.jpg')}}" />

   </head>
   <body>


@include('Front.layouts.header')
@yield('content')
@include('Front.layouts.footer')

	@if(isset($page_type) && $page_type =="quote")
	
	  <!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('front/quote/css/reset.min.css')}}">
	<link rel="stylesheet" href="{{asset('front/quote/css/style.css')}}">
      

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
	<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdtG7jUunplpYeBa1sMCQE3W4QdPI6_xA&libraries=places&v=weekly"></script>
	
	<script src="{{asset('front/quote/js/developer.js')}}"></script>
   
	<script>
	
	
 
	</script>
	
	

	@else
	  
      <!-- footer section start here -->
      <script src="{{asset('front/assets/js/jquery.min.js')}}"></script>
      <script src="{{asset('front/assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('front/assets/js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('front/assets/js/custom.js')}}"></script>
      <script src="{{asset('front/assets/js/developer.js')}}"></script>
      <script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
	  <script src="{{asset('front/assets/js/jquery.validation.js')}}"></script>
	  	  
	  <script>
		
		$('#remember-1').change(function() {
			$(this).is(':checked') ? $('#test-input').attr('type', 'text') : $('#test-input').attr('type', 'password');
		});
		

		$('#togglePassword').click(function () {
			if ($("#password").attr("type") === "password") {
				$("#password").attr("type", "text");
			} else {
				$("#password").attr("type", "password");
			}
		});
		
		
	  </script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	  <script>
	  new WOW().init();
	  </script>
	  
	@endif
   </body>
</html>
</html>