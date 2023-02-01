@extends('layouts.layout')
@section('content')  
	<!-- partial -->
        <div class="content-wrapper">
          <div class="row">
			
			
			<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Carrier List</h4>
				  
				@if(session('success_carrier'))
					<div class="alert alert-info w-50">{{session('success_carrier')}}</div>
				@endif
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Collection</th>
                          <th>Delivery</th>
                          <th>Sender</th>
                          <th>load location</th>
                          <th>Unload location</th>
                          <th>Collection from</th>
                          <th>Collection to</th>
                          <th>Status</th>
                          <th>Created</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  @foreach($quote as $quot)
                        <tr>
                          <td>{{@$quot['collection']}}</td>
                          <td>{{@$quot['delivery']}}</td>
						  <td>{{@$quot['iam']}}</td>
                          <td>{{@$quot['load_location']}}</td>
                          <td>{{@$quot['unload_location']}}</td>
                          <td>{{@$quot['collection_from']}}</td>
                          <td>{{@$quot['collection_to']}}</td>
                          <td>{{@$quot['status']}}</td>
                          <td>{{date('d-m-Y', strtotime($quot['created_at']))}}</td>
						   <td>
							<!--<a href="{{route('truck.view',$quot['id'])}}">View</a> -->
							<a href="#">View</a>
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