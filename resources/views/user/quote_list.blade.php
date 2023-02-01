@extends('layouts.layout')
@section('content')  
	<!-- partial -->
        <div class="content-wrapper">
          <div class="row">
			
			
			<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Quote List</h4>
				  
				@if(session('success_carrier'))
					<div class="alert alert-info w-50">{{session('success_carrier')}}</div>
				@endif
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Email</th>
                          <th>Collection</th>
                          <th>Delivery</th>
                          <th>Sender</th>
                          <th>Load</th>
                          <th>Unload</th>
                          <th>From</th>
                          <th>To</th>
                          <th>View</th>
                        </tr>
                      </thead>
                      <tbody>
					  @foreach($addedCollection as $quotes)
                        <tr>
                          <td>{{@$quotes['id']}}</td>
                          <td>{{@$quotes['user_email']}}</td>
                          <td>{{@$quotes['collection_address']}}</td>
                          <td>{{@$quotes['delivery_address']}}</td>
						  <td>{{@$quotes['iam']}}</td>
                          <td>{{@$quotes['load_location']}}</td>
                          <td>{{@$quotes['unload_location']}}</td>
                          <td>{{@$quotes['collection_from']}}</td>
                          <td>{{@$quotes['collection_to']}}</td>
						  <td><a href="{{route('quote.view.user',$quotes['id'])}}">View</a></td>
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
@endsection