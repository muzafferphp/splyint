// items increase
jQuery(document).ready(function(){
	$(document).on('click','#increase', function(){
	   var vals = $(this).closest('#main_form_id').find('#number').val();
	   vals = isNaN(vals) ? 0 : vals;
	   vals++;
	   $(this).closest('#main_form_id').find('#number').val(vals);
		
	});
	
	$(document).on('click','#decrease', function(){
		var value = $(this).closest('#main_form_id').find('#number').val();
		value = isNaN(value) ? 0 : value;
		value < 1 ? value = 1 : '';
		value--;
		$(this).closest('#main_form_id').find('#number').val(value);
	});
});
	

$(function() {
  $('input[name="collectiondaterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
  $("#request_collection").html("");
  $("#collectiondateranges").val("");
});	
	
$(function() {

  $('input[name="deliveryearliestdate"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
  $("#request_delivery").html("");
  $("#DeliveryearliestDates").val("");
});
	
	jQuery( document ).ready(function() {
		var count=1;
		$("#addRow").click(function () {
			var html = '';
			html +='<div clas="mail_form" id="main_form_id"><div class="form-group required mt-3"> <div class="heading"><h2 class="fs-title">ITEM '+count+'</h2><button id="removeRow" type="button" class="btn btn-danger">Remove</button></div><div class="row align-items-center"><div class="col-sm-6"><label class="control-label col-sm-3">Category</label><div class="col-sm-6"><select class="form-select" id="pallet_category" name="pallet_category[]" required><option selected="selected" value="">select</option><option value="Pallets">Pallets</option><option value="Pallecons">Pallecons</option><option value="Packages">Packages, Boxes or Cartons</option></select></div></div></div></div><div class="form-group mt-3"><div class="row"><div class="col-sm-6"><label class="control-label">Auction item or Online Purchase :</label><div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="action_perchese[]" value="1"></div></div></div></div><div class="form-group mt-3" id="actionWebsite"><div class="row"><div class="col-sm-6"><label>Which Auction Website</label><select class="js-example-basic-single w-100" name="which_website[]"><option value="Grays Online">Grays Online</option><option value="Facebook">Facebook</option><option value="America">America</option><option value="Canada">Canada</option><option value="Russia">Russia</option></select></div></div></div><div class="form-group mt-3" id="content_pallet"><div class="row"><div class="col-sm-6"><label class="col-form-label">Contents on Pallet</label><input type="text" class="form-control" name="content_pallet[]"></div></div></div><div class="form-group mt-3" id="needMoving"><div class="row"><div class="col-sm-6"><label class="control-label col-sm-4">What Needs Moving</label><div class="col-sm-8"><input type="text" class="form-control" name="whate_need_moving[]"></div></div></div></div><div class="row align-items-center mt-3"><div class="col-sm-6"><label class="col-form-label">Pallet Size</label><div class="row align-items-center"><div class="col-sm-7"><select class="form-control" name="pallet_size[]" required><option selected="selected" value=""></option><option value="Standard">Standard (116.5cm x 116.5cm)</option><option value="Euro">Euro (100cm x 120cm)</option><option value="Euro2">Euro (80cm x 120cm)</option><option value="Non">Non Standard</option></select></div><div class="col-sm-5"><div class="quantity_section"><label class="col-form-label">Quantity</label><div class="value-button" id="decrease" value="Decrease Value">-</div><input type="number" id="number" value="0" name="quantity[]"><div class="value-button" id="increase" value="Increase Value">+</div></div></div></div></div></div><div class="form-group mt-3"><div class="row"><div class="col-sm-6"><div class="unsure_weight_section"><div class="form-check form-check-primary"><label class="form-check-label"><input type="checkbox" class="form-check-input" value="1" name="unsure_weight[]"> Unsure of Weight or Dimensions<i class="input-helper"></i></label></div></div></div></div></div><div class="form-group mt-3" id="height_per_pallet"><div class="row"><div class="col-sm-6"><div class="row align-items-center"><div class="col-sm-8 form-group"><input type="text" class="form-control" placeholder="height per Pallet" name="height_per_pallet[]"></div><div class="col-sm-2 form-group"><input type="radio" class="form-check-input" name="pallet_cm[]" id="ExampleRadio1" value="cm"> CM</div><div class="col-sm-2 form-group"><input type="radio" class="form-check-input" name="pallet_cm[]" id="ExampleRadio2" value="meter"> Meters</div></div></div></div></div><div class="row form-group"><div id="lengthperItems"><div class="col-sm-8 form-group"><input type="text" class="form-control" placeholder="length per items" name="length_per_items[]"></div><div class="col-sm-2 form-group"><input type="radio" class="form-check-input" id="ExampleRadio1" value="cm" name="package_cm1[]"> CM</div><div class="col-sm-2 form-group"><input type="radio" class="form-check-input" id="ExampleRadio2" value="meter" name="package_cm1[]"> Meters</div><div class="col-sm-8 form-group"><input type="text" class="form-control" placeholder="width per items" name="width_per_items[]"></div><div class="col-sm-2 form-group"><input type="radio" class="form-check-input" id="ExampleRadio1" value="cm" name="package_cm2[]"> CM</div><div class="col-sm-2 form-group"><input type="radio" class="form-check-input" id="ExampleRadio2" value="meter" name="package_cm2[]"> Meters</div><div class="col-sm-8 form-group"><input type="text" class="form-control" placeholder="height per items" name="heigh_per_items[]"></div><div class="col-sm-2 form-group"><input type="radio" class="form-check-input" id="ExampleRadio1" value="cm" name="package_cm3[]"> CM</div><div class="col-sm-2 form-group"><input type="radio" class="form-check-input" id="ExampleRadio2" value="meter" name="package_cm3[]"> Meters</div></div></div><div class="row mt-3"><div class="col-sm-6"><div class="form-group" id="total_cubic_meter"><label class="col-form-label">Total Cubic Meters (m3)</label><input type="text" class="form-control" name="total_cubic_meter[]"></div></div></div><div class="row align-items-center mt-3"><div class="col-sm-6"><div class="row align-items-center"><div class="col-sm-8"><div class="form-group"><input type="text" class="form-control" placeholder="Weight per Pallet" name="weight_per_pallet[]" required></div></div><div class="col-sm-2"><div class="form-group"><input type="radio" class="form-check-input" name="toncm[]" value="kg" id="ExampleRadio1">KG</div></div><div class="col-sm-2"><div class="form-group"><input type="radio" class="form-check-input" name="toncm[]" value="tons" id="ExampleRadio2">TONS</div></div></div></div></div><div class="form-group required mt-3"><div class="row"><div class="col-sm-6"><label class="control-label">Is this Dangerous Goods (DG)</label><div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="DangerousGoods" value="1" name="dangerousgoods[]"></div></div></div></div><div class="row mt-3"><div class="col-sm-6"><div class="form-group" id="what_dangerous"><label>What class of DG</label><select class="js-example-basic-single w-100" name="class_dg[]"><option value="1">Class 1 : Explosives</option><option value="2">Class 2 : Gases</option><option value="3">Class 3 : Flammable liquids</option><option value="4">Class 4 : Flammable solids</option><option value="5">Class 5 : Oxidizing substances and organic peroxides</option><option value="6">Class 6 : Toxic and infectious substances</option><option value="7">Class 7: Radioactive material</option><option value="8">Class 8: Corrosive substances</option><option value="9">Class 9: Miscellaneous dangerous substances and articles</option></select></div></div></div><div class="form-group required mt-3"><div class="row"><div class="col-sm-6"><label class="control-label">I Require a Tailgate Lift</label><div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" value="1" name="required_tailgate[]"></div></div></div></div><div class="row mt-3"><div class="col-sm-6"><div class="form-check form-check-info"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="items_secure[]" value="1">Items secured to Pallet<i class="input-helper"></i></label></div><div class="form-check form-check-info"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="more_details[]" id="moreDetailscheck" value="1">Add More Details<i class="input-helper"></i></label></div></div></div><div class="form-group row" id="moreDetailscontent"><div class="row"><div class="col-sm-6"><div class="form-group"><label class="col-form-label">More Details</label><textarea name="more_details_content[]" placeholder="eg. access issues, loading and unloading facilities, special hours of operation, special instructions" rows="4" cols="50"></textarea></div></div></div></div><div class="form-group required mt-3"><div class="row"><div class="col-sm-6"><h2>Take/ Upload photo</h2><input type="file" id="take_photo" name="take_photo[]" accept="image/png, image/jpeg"></div></div></div></div>';
			
			//$('#main_form_id').after(html);
			$('#main_form_id_first').append(html);
			
			count++;
		});
    // remove row
		$(document).on('click', '#removeRow', function () {
			$(this).closest('#main_form_id').remove();
			//alert('hiii');
		});

	});


//Action website 	
jQuery(document).ready(function(){
    $(document).on('change','#flexSwitchCheckChecked', function() {
        if ($(this).prop('checked')) {
            $(this).closest('#main_form_id').find("#actionWebsite").show(); //checked
        }
        else {
            $(this).closest('#main_form_id').find("#actionWebsite").hide(); //not checked
        }
    });
}); 


//select category and show length per items
$(document).on('change','#pallet_category',function(){

 var val = $(this).val();

switch (val) {
    case "Pallets":
    $(this).closest('#main_form_id').find('#lengthperItems').hide()
	$(this).closest('#main_form_id').find('#needMoving').hide()
	$(this).closest('#main_form_id').find('#height_per_pallet').show()
	$(this).closest('#main_form_id').find('#content_pallet').show()
    break;
    case "Pallecons":
    $(this).closest('#main_form_id').find('#lengthperItems').hide()
	$(this).closest('#main_form_id').find('#needMoving').hide()
	$(this).closest('#main_form_id').find('#height_per_pallet').show()
	$(this).closest('#main_form_id').find('#content_pallet').show()
    break;
    case "Packages":
    $(this).closest('#main_form_id').find('#lengthperItems').show()
    $(this).closest('#main_form_id').find('#needMoving').show()
    $(this).closest('#main_form_id').find('#height_per_pallet').hide()
    $(this).closest('#main_form_id').find('#total_cubic_meter').hide()
    $(this).closest('#main_form_id').find('#content_pallet').hide()
    break;
	
	}
});

// Dangerous goods class
 $(document).on('change', '#DangerousGoods', function() {
        if ($(this).prop('checked')) {
            $(this).closest("#main_form_id").find("#what_dangerous").show(); //checked
        }
        else {
            $(this).closest("#main_form_id").find("#what_dangerous").hide(); //not checked
        }
});




//show more details
 $(document).on('change','#moreDetailscheck', function(){
	if ($(this).prop('checked')) {
		$(this).closest('#main_form_id').find("#moreDetailscontent").show(); //checked
	}
	else {
		$(this).closest('#main_form_id').find("#moreDetailscontent").hide(); //not checked
	}
});

//dropzone 

// drop down date
$(document).ready(function(){

const getNewString = (dateString) => {
  const date = new Date(dateString);
  return `${date.getDate()}-${date.getMonth()+1}-${date.getFullYear()}`;
}

var dataHtml = "";
  for(i=1;i<15;i++){
		var daynumber = i;
		var newDate = new Date(Date.now()+daynumber*24*60*60*1000);
		var expdate = getNewString(newDate);
		
		dataHtml+= '<option value="'+expdate+'">'+ daynumber +'  days ('+ expdate +')</option>';
	}
	$("#expiry_selector").html(dataHtml);
});
	
	
	
//Collection Date
 $(document).on('change','#collectionDateRange', function(){
	if ($(this).prop('checked')) {
		$("#collectionEarliest").show();
		$("#request_collection").html("");
	}
});

 $(document).on('change','#ReadyNow', function(){
	if ($(this).prop('checked')) {
		$("#request_collection").html('Ready Now');
		$("#collectionEarliest").hide();
		$("#collectiondateranges").val("");
		
	}
});

 $(document).on('change','#NoDate', function(){
	if ($(this).prop('checked')) {
		$("#request_collection").html('No Date/Budgeting');
		$("#collectionEarliest").hide();
		$("#collectiondateranges").val("");
	}
});

 $(document).on('change','#collectiondateranges', function(){
	var colldate = $("#collectiondateranges").val();
	$("#request_collection").html(colldate);
});
 

//Delivery Date Date
 $(document).on('change','#DeliveryDaterange', function(){
	if ($(this).prop('checked')) {
		$("#DeliveryEarliest").show();
		$("#request_delivery").html("");
	}
});

 $(document).on('change','#deliverynow', function(){
	if ($(this).prop('checked')) {
		$("#request_delivery").html('Ready Now');
		$("#DeliveryEarliest").hide();
		$("#DeliveryearliestDates").val("");
	}
});

 $(document).on('change','#DeliverynoDate', function(){
	if ($(this).prop('checked')) {
		$("#request_delivery").html("No Date/Budgeting");
		$("#DeliveryEarliest").hide();
		$("#DeliveryearliestDates").val("");
	}
});

$(document).on('change', '#DeliveryearliestDates', function(){
	var deliverydate = $("#DeliveryearliestDates").val();
	$("#request_delivery").html(deliverydate);
});


if($("#collectionDateRange").prop('checked') == false){
    $("#collectiondateranges").val("");
}

jQuery(document).ready(function(){
	autocomplete = new google.maps.places.Autocomplete((document.getElementById('collection_address')));
	autocomplete = new google.maps.places.Autocomplete((document.getElementById('delivery_address')));
});