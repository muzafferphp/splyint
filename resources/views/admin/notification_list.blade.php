@extends('layouts.layout')
@section('content')  
	<!-- partial -->
        <div class="content-wrapper">
          <div class="row">
			
			
			<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Notification List</h4>
				  
				@if(session('success_carrier'))
					<div class="alert alert-info w-50">{{session('success_carrier')}}</div>
				@endif
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Collection Address</th>
                          <th>Delivery Address</th>
                          <th>Budget</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Read</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  @foreach($notification as $notifications)
                        <tr>
                          <td>{{@$notifications['collection_address']}}</td>
                          <td>{{@$notifications['delivery_address']}}</td>
						  <td>{{@$notifications['budget']}}</td>
                          <td>{{@$notifications['user_name']}}</td>
                          <td>{{@$notifications['user_email']}}</td>
                        
						  @php 
							if($notifications['status'] == 1){ 
								echo'<td class="yes">Yes</td>';
							}else{
								echo'<td class="no">No</td>';
							}
						  @endphp
						   
						   <td><a href="{{route('quote.view',$notifications['collection_id'])}}">View</a></td>
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