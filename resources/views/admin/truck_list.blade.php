@extends('layouts.layout')
@section('content')  
	<!-- partial -->
        <div class="content-wrapper">
          <div class="row">
			
			
			<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Truck List</h4>
				  
				@if(session('success_carrier'))
					<div class="alert alert-info w-50">{{session('success_carrier')}}</div>
				@endif
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Company</th>
                          <th>Email</th>
                          <th>Contact</th>
                          <th>Truck Type</th>
                          <th>Insurance</th>
                          <th>User id</th>
                          <th>User role</th>
                          <th>Created</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  @foreach($trucks as $truck)
                        <tr>
                          <td>{{@$truck['company_name']}}</td>
                          <td>{{@$truck['email']}}</td>
						  <td>{{@$truck['contact_number']}}</td>
                          <td>{{@$truck['truck_type']}}</td>
                          <td>{{@$truck['insurance_number']}}</td>
                          <td>{{@$truck['user_id']}}</td>
                          <td>{{@$truck['user_role']}}</td>
                          <td>{{date('d-m-Y', strtotime($truck['created_at']))}}</td>
						   <td>
							<a href="{{route('truck.view',$truck['id'])}}">View</a>
						  </td>
                        </tr>
						@endforeach
                      </tbody>
                    </table>
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
	</style>
@endsection