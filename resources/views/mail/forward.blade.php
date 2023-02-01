<html>
<header>
<title>Confirmation password in Logistic website</title>
</header>
<body>
	<table>
		<tr><td>Dear {{$name}}</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Admin have send mail for you a quote request list.For the detail check below details:-</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Pick up Address : {{ $pick}}</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Drop Address : {{ $drop}}</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Budget : {{ $budget}}</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Start Date: {{$startDate}}</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>End Date : {{$endDate}}</td></tr>
		<tr><td>&nbsp;</td></tr>
		
	</table>
	
	
	<div class="container">			  
		<div class="row">
		  
		  @foreach($allCollectionDetails[0]['quotes'] as $key=>$quote )
			
			<div class="col-md-6">
				
				<ul class="list-group">
				<p><strong>{{$key+1}}</strong></p>
				  <li class="list-group-item">Category : {{ @$quote['pallet_category']}}</li>
				  <li class="list-group-item">Action Perchase : {{ @$quote['action_perchese']}}</li>
				  <li class="list-group-item">Which Website : {{ @$quote['which_website']}}</li>
				  <li class="list-group-item">Content Pallet : {{ @$quote['content_pallet']}}</li>
				  <li class="list-group-item">Whate Need Moving : {{ @$quote['whate_need_moving']}}</li>
				  <li class="list-group-item">Pallet Size : {{ @$quote['pallet_size']}}</li>
				  <li class="list-group-item">Quantity : {{ @$quote['Content Pallet']}}</li>
				  <li class="list-group-item">Unsure Weight : {{ @$quote['unsure_weight']}}</li>
				  <li class="list-group-item">Height Per Pallet : {{ @$quote['height_per_pallet']}}</li>
				  <li class="list-group-item">Weight Per Pallet : {{ @$quote['weight_per_pallet']}}</li>
				  <li class="list-group-item">Pallet CM : {{ @$quote['pallet_cm']}}</li>
				  <li class="list-group-item">Length Per Items : {{ @$quote['length_per_items']}}</li>
				  <li class="list-group-item">Width Per Items : {{ @$quote['width_per_items']}}</li>
				  <li class="list-group-item">Peigh Per Iems : {{ @$quote['heigh_per_items']}}</li>
				  <li class="list-group-item">Package_cm1 : {{ @$quote['package_cm1']}}</li>
				  <li class="list-group-item">Package_cm2 : {{ @$quote['package_cm2']}}</li>
				  <li class="list-group-item">Package_cm3 : {{ @$quote['package_cm3']}}</li>
				  <li class="list-group-item">Toncm : {{ @$quote['toncm']}}</li>
				  <li class="list-group-item">Total Cubic Meter : {{ @$quote['total_cubic_meter']}}</li>
				  <li class="list-group-item">Dangerousgoods : {{ @$quote['dangerousgoods']}}</li>
				  <li class="list-group-item">Class Dg : {{ @$quote['class_dg']}}</li>
				  <li class="list-group-item">Required Tailgate : {{ @$quote['required_tailgate']}}</li>
				  <li class="list-group-item">Items Secure : {{ @$quote['items_secure']}}</li>
				  <li class="list-group-item">More Details : {{ @$quote['more_details']}}</li>
				  <li class="list-group-item">More Details content : {{ @$quote['more_details_content']}}</li>
				</ul>
				<p>&nbsp;</p>
			</div>
			@endforeach
		 </div>
		<table>
			<tr><td>Thanks & Regards</td></tr>
			<tr><td>Logistic Website</td></tr>
		</table>
	</div>
	
</body>
</html>