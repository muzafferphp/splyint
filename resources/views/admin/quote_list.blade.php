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
                          <th>Id</th>
                          <th>Collection</th>
                          <th>Delivery</th>
                          <th>Sender</th>
                          <th>Load</th>
                          <th>Unload</th>
                          <th>From</th>
                          <th>To</th>
                          <th>Active</th>
                         <!-- <th>Created</th> -->
                          <th>Action</th>
                          <th>Send</th>
                        </tr>
                      </thead>
                      <tbody>
					  @foreach($quote as $quot)
                        <tr>
                          <td class="id">{{@$quot['id']}}</td>
                          <td>{{@$quot['collection_address']}}</td>
                          <td>{{@$quot['delivery_address']}}</td>
						  <td>{{@$quot['iam']}}</td>
                          <td>{{@$quot['load_location']}}</td>
                          <td>{{@$quot['unload_location']}}</td>
                          <td>{{@$quot['collection_from']}}</td>
                          <td>{{@$quot['collection_to']}}</td>
                          <!--<td>{{@$quot['status']}}</td> -->
                          <td><label class="switch">
								<input class="switch-input" type="checkbox" {{ (@$quot['status'] == 1) ? 'checked' : ''}} />
								<span class="switch-label" id="switchStatus" data-id="{{@$quot['id']}}" data-status="{{@$quot['status']}}" data-on="Yes" data-off="No"></span> 
								<span class="switch-handle"></span> 
								</label>
							</td> 
                            <!-- <td>{{date('d-m-Y', strtotime($quot['created_at']))}}</td> -->
						   <td>
							<!--<a href="{{route('truck.view',$quot['id'])}}">View</a> -->
							<a href="{{route('quote.view',$quot['id'])}}">View</a>
						  </td>
						  <td><button type="button" class="btn btn-inverse-success btn-fw" id="fwdCollection" data-toggle="modal" data-target="#myModal">Forward</button></td>
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
	<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lm">
      <div class="modal-content">
        <div class="modal-header">
		<p>Forward to carriers</p>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
		<h5 id="sendMsg" style="color:green; margin-top:10px"></h5>
        <div class="modal-body">
		<input type="hidden" name="collection" value="" id="selectedCollection"/>
		@foreach($usersCarrier as $carrier)
		<div class="modelText">
			<label for="exampleInputEmail1">{{$carrier['name']}}</label> : 
			<label class="form-check-label"> 
				<input type="checkbox" name="checkboxlist" value="{{$carrier['id']}}" />
				<i class="input-helper"></i>
			</label>
		</div>
		@endforeach
        </div>
        <div class="modal-footer">
		  <button type="button" class="btn btn-primary" id="sendCollection">Send</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	
	<style>
	label.badge.badge-info a {
		color: #fff;
	}
	label.badge.badge-danger a {
		color: #fff;
	}
	</style>
@endsection