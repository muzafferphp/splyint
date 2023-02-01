<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>{{ isset($title) ? $title : 'logistics'}}</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admins/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('admins/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('admins/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('admins/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('admins/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('admins/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admins/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
 <link rel="shortcut icon" href="{{asset('admins/images/icon_logo.jpg')}}" />
 
   @if(isset($page_type) && $page_type =="admin")
	<link rel="stylesheet" href="{{asset('admins/developer/style.css')}}">
  @endif
  
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

@include('layouts.header')

@if(Auth::guard('admin')->check())
	@include('layouts.admin_sidebar')
@endif

@if(Auth::guard('carrier')->check())
	@include('layouts.sidebar')
@endif


@if(Auth::user())
    @include('layouts.user_sidebar')   
@endif

@yield('content')
@include('layouts.footer')

</div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  

  <!-- plugins:js -->
  <script src="{{asset('admins/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('admins/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('admins/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('admins/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('admins/js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('admins/js/off-canvas.js')}}"></script>
  <script src="{{asset('admins/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('admins/js/template.js')}}"></script>
  <script src="{{asset('admins/js/settings.js')}}"></script>
  <script src="{{asset('admins/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('admins/js/dashboard.js')}}"></script>
  <script src="{{asset('admins/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
  
  @if(isset($page_type) && $page_type =="admin")
	<script src="{{asset('admins/developer/developer.js')}}"></script>
  @endif
  
  <script> 
$.ajax({
  url: "https://geolocation-db.com/jsonp",
  jsonpCallback: "callback",
  dataType: "jsonp",
  success: function(location) {
    $('#liveCountry').html(location.country_name);
    $('#livecity').html(location.state);
    //$('#liveCountry').html(location.city);
    //$('#latitude').html(location.latitude);
    //$('#longitude').html(location.longitude);
    //$('#ip').html(location.IPv4);
  }
});

		
	jQuery( document ).ready(function() {
	var count=0;
		$("#addRow").click(function () {
			var html = '';
			var name = "title_"+count+"[]"
			html += '<div id="inputFormRow">';
			html += '<div class="input-group mb-3">';
			html += '<input type="text" name="'+name+'" class="form-control m-input" placeholder="Enter title" autocomplete="off">';
			html += '<div class="input-group-append">';
			html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
			html += '</div>';
			html += '</div>';

			$('#newRow').append(html);
			count++;
		});

    // remove row
		$(document).on('click', '#removeRow', function () {
			$(this).closest('#inputFormRow').remove();
		});
	});

	
	$(document).ready(function () {
		$('.table-hover').DataTable({
			"order": [[0,"desc"]],
			"columnDefs": [
				{ "orderable": false, "targets": "_all" }
			  ]
		});
	});
</script>
  
</body>

</html>