
$(document).on('click','#switchStatus',function(){
	var quoteId = $(this).data("id");
	var status = $(this).data("status");
	if(confirm("Are you sure you want to change status ?")){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
	    	url: '/splyint/admin/quote-status', 
	    	type: "POST",             
	    	data: {quote_id:quoteId,status:status},
            dataType: "json",
	    	success: function(data){
				console.log(data);
	    	}
	  	});
	}else{
		return false;
	}
});

$(document).on('click','#forwardCollection',function(){
	var row = $(this).closest("tr");    // Find the row
    var id = row.find(".id").text(); // Find the id
    var name = row.find(".name").text(); // Find the name
    var email = row.find(".email").text(); // Find the email
    var mobile = row.find(".mobile").text(); // Find the mobile
    var quote = row.find(".quote option:selected"); // Find the quote
	var collectionid = quote.val(); 
	alert(collectionid);
    alert("Your data is: " + id + " , " + name + " , " + email + " , "+ mobile + ", " + collectionid );

});

$(document).on('click','#fwdCollection',function(){
	var row = $(this).closest("tr");
	var id = row.find(".id").text();
	$("#selectedCollection").val(id);
});

$(document).on('click','#sendCollection',function(){
	var checkValues = $('input[name=checkboxlist]:checked').map(function(){
        return $(this).val();
    }).get();
	var collectionId = $("#selectedCollection").val();
	if(checkValues ==""){
		$("#sendMsg").html("Select the carrier field is required")
		return false;
	}
	
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
	    	url: '/splyint/admin/quote-forward', 
	    	type: "POST",             
	    	data: {carriers_id:checkValues,collection_id:collectionId},
            dataType: "json",
	    	success: function(response){
				if(response.state ==200){
					$("#sendMsg").html(response.message);
					
					setTimeout( function(){ 
						$("#myModal").hide();
						$(".modal-backdrop").hide();
					}, 8000 );
				}
	    	},
            error:function(){
                console.log("Some things wrong");
            }
	  	});
	
});

