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
                          <th>Carrier Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                        </tr>
                      </thead>
                      <tbody>
					  @foreach($usersCarrier as $carrier)
                        <tr>
                          <td>{{$carrier['name']}}</td>
                          <td>{{$carrier['email']}}</td>
                          <td>{{$carrier['mobile']}}</td>
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