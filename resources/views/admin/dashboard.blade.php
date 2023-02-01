@extends('layouts.layout')
@section('content')  
	<!-- main-panel start -->
	
	
<div class="main-panel">
	<div class="content-wrapper">
	  <div class="row">
		<div class="col-md-12 grid-margin">
		  <div class="row">
			<div class="col-12 col-xl-8 mb-4 mb-xl-0">
			  <h3 class="font-weight-bold">Welcome {{Auth::guard('admin')->user()->name}}</h3>
			  
			  
			</div>

			
		  </div>
		</div>
	  </div>
	  <div class="row">
		<div class="col-md-6 grid-margin stretch-card">
		  <div class="card tale-bg">
			<div class="card-people mt-auto">
			  <img src="{{asset('admins/images/dashboard/people.svg')}}" alt="people">
			  <div class="weather-info">
				<div class="d-flex">
				  <div>
					<!-- <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2> -->
				  </div>
				  <div class="ml-2">
					<h4 class="location font-weight-normal" id="livecity"></h4>
					<h6 class="font-weight-normal" id="liveCountry"></h6>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		<div class="col-md-6 grid-margin transparent">
		  <div class="row">
			<div class="col-md-6 mb-4 stretch-card transparent">
			  <div class="card card-tale">
				<div class="card-body">
				  <p class="mb-4">Total Trucks </p>
				  <p class="fs-30 mb-2">{{ Helper::truckscount()}}</p>
				  
				</div>
			  </div>
			</div>
			<div class="col-md-6 mb-4 stretch-card transparent">
			  <div class="card card-dark-blue">
				<div class="card-body">
				  <p class="mb-4">Total Bookings</p>
				  <p class="fs-30 mb-2">0</p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
			  <div class="card card-light-blue">
				<div class="card-body">
				  <p class="mb-4">Total Users </p>
				  <p class="fs-30 mb-2">{{ Helper::userscount()}}</p>
				  
				</div>
			  </div>
			</div>
			<div class="col-md-6 stretch-card transparent">
			  <div class="card card-light-danger">
				<div class="card-body">
				  <p class="mb-4"></p>Total Carriers</p>
				  <p class="fs-30 mb-2">{{ Helper::carrierscount()}}</p>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  
	  
	  
	  
	</div>
	
	<!-- main-panel ends -->
@endsection
