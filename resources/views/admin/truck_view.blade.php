@extends('layouts.layout')
@section('content')  
	<!-- partial -->
        <div class="content-wrapper">
          <div class="row">
			
			
			<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Truck view</h4>
				  <div class="col-12 float-right">
                    <a class="btn btn-primary" href="{{route('truck.list')}}"><i class="ti-home mr-2"></i>Back to list</a>
                  </div>
				  
				@if(session('success_carrier'))
					<div class="alert alert-info w-50">{{session('success_carrier')}}</div>
				@endif
                  
					<div class="container">			  
					  <div class="row">
						<div class="col-md-6">
						<p>Truck info</p><hr>
							
							<ul class="list-group">
							  <li class="list-group-item">Company : {{ @$trucks[0]['company_name']}}</li>
							  <li class="list-group-item">Address : {{ @$trucks[0]['postal_address']}}</li>
							  <li class="list-group-item">Abn : {{ @$trucks[0]['abn']}}</li>
							  <li class="list-group-item">Contact : {{ @$trucks[0]['contact_number']}}</li>
							  <li class="list-group-item">Phone : {{ @$trucks[0]['phone_number']}}</li>
							  <li class="list-group-item">Email : {{ @$trucks[0]['email']}}</li>
							  <li class="list-group-item">Key contact : {{ @$trucks[0]['key_contact']}}</li>
							  <li class="list-group-item">Truck type : {{ @$trucks[0]['truck_type']}}</li>
							  <li class="list-group-item">Dry reefer : {{ @$trucks[0]['dry_reefer']}}</li>
							  <li class="list-group-item">Insurance : {{ @$trucks[0]['insurance_number']}}</li>
							  <li class="list-group-item">Permit type : {{ @$trucks[0]['permit_type']}}</li>
							
							</ul>
						
						</div>
						<div class="col-md-6">
						<p>User info</p><hr>
						
							<ul class="list-group">
							  <li class="list-group-item">Name : {{ @$trucks[0]['carrier']['name']}}</li>
							  <li class="list-group-item">Email : {{ @$trucks[0]['carrier']['email']}}</li>
							  <li class="list-group-item">Mobile : {{ @$trucks[0]['carrier']['mobile']}}</li>
							</ul>
						
						</div>
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