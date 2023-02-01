@extends('Front.layouts.layout')
@section('content') 
<!--
<div class="page-title-area bg-8">
   <div class="container">
      <div class="page-title-content">
         <h2>Get A Quote</h2>
         <ul>
            <li>
               <a href="index.html">
               Home
               </a>
            </li>
            
               <i class='bx bx-chevrons-right'></i>
            
            <li class="active">Get A Quote</li>
         </ul>
      </div>
   </div>
</div> -->

<section class="user-area-style ptb-100">
  <div class="container">
  
  <div class="row">
  <div class="col-xs-12" style="padding-right:0px;padding-left:0px;">
    <div class="col-md-10 col-xs-12 col-md-offset-1">
		
      <!-- multistep form -->
      <form class="form-horizontal form" id="msform" method="POST" action="" enctype="multipart/form-data">
        <!-- progressbar -->
        <ul id="progressbar">
          <li class="active">Step One</li>
          <li>Step Two</li>
          <li>Step Three</li>
          <li>Final Step</li>
        </ul>
        
        <div id="sucessmsg" style="display:none;"><h2 class="fs-subtitle" style="color: #dc3c52; font-size:22px; text-align:center;">Form Submitted Successfully</h2></div>
		<div id="errormsg" style="display:none;"><h2 class="fs-subtitle" style="color: #dc3c52; font-size:22px; text-align:center;">Oops.. Something wrong.</h2></div>
        
        <!-- fieldsets -->
        <fieldset id="step1">
			
			
		<div align="center">
			<h3 class="fs-subtitle">Pallets and Packages - Get a Quote</h3>
			
		</div>		
		   
          <h2 class="fs-title">1.Details 1</h2>
        
         <div class="form-group required">
          <label class="control-label col-sm-3">Category </label>
          <div class="col-sm-6">
		  
		  
			<select class="form-select" aria-label="Default select example">
				<option  value="Pallets" selected="selected">Pallets</option>
				<option  value="Pallecons">Pallecons</option>
				<option  value="Packages">Packages, Boxes or Cartons</option>
			</select>

		  
         </div>
         </div>
		 
		 
		    <div class="form-group required">  
				  <label class="control-label col-sm-4">Auction item or Online Purchase :</label>
				  <div class="col-sm-8">
				  <label class="checkstyle">
				  <input type="radio" name="gender" value="Male">
				  <span class="checkmark"></span>
				  </label>

				  </div>
			</div>
         <br>
			<div class="form-group required"> 
				<label class="control-label col-sm-3">Contents on Pallet : </label>
				<div class="col-sm-6">
					<input type="text" name="lastname" />
				</div>
		 
			</div>
                  
        <input style="float:right;" type="button" id="stepone" name="next" class="next action-button" value="CONTINUE" />
         
        </fieldset>
        
        <fieldset id="step2">
			
			<h2 class="fs-title">Contact Information</h2>
			
		<div class="form-group required">
          <label class="control-label col-sm-2">Email: </label>
          <div class="col-sm-10">
          <input type="text" name="email"/>
         </div>
         </div>
			
         <div class="form-group required">
          <label class="control-label col-sm-2">Mobile Number: </label>
          <div class="col-sm-10">
          <input type="text" name="mobilenumber"/>
         </div>
         </div> 
          
       
          <input type="button" name="previous" id="previous1" class="previous action-button" value="Previous" />
          <input style="float:right;" type="button" id="steptwo" name="next" class="next action-button" value="Next" />
        </fieldset>
        
        
        <fieldset id="step3">
          	
          <h2 class="fs-title">Address Information</h2>
          
          <div class="form-group required">
          <label class="control-label col-sm-2">Address: </label>
          <div class="col-sm-10">
          <input type="text" name="address"/>
         </div>
         </div>
         
         <div class="form-group required">
          <label class="control-label col-sm-2">Postal Code: </label>
          <div class="col-sm-10">
          <input type="text" name="postalcode"/>
         </div>
         </div>
         
         <div class="form-group required">
          <label class="control-label col-sm-2">City Name: </label>
          <div class="col-sm-10">
          <input type="text" name="cityname"/>
         </div>
         </div>
      
          
          <input type="button" name="previous"  id="previous2" class="previous action-button" value="Previous" />
          <input style="float:right;" type="button" id="stepthree" name="next" class="next action-button" value="Next" />
        </fieldset>
        
        
        <fieldset id="step4">
			
          	
          <h2 class="fs-title">Upload Document</h2>
          
          <div class="form-group">
			  <label class="control-label col-sm-2">Upload File: </label>
          <div class="col-sm-5">
		  <input type="file" name="uploadFile">
          </div>
          </div>
          
          <div class="form-group">
          <div class="col-sm-10">
			  <a href = "#" style="text-decoration: none;" class="terms_text">
			  <label style="padding-left: 30px;" class="checkstyle">I have read, agree and accept the terms and conditions
			  <input type="checkbox" id="termscls" name="termsclsname">
			  <span class="checkmark"></span></a>
			  </label>
			  <label id="temsandconderror" style="color:red;display:none;">Please Accept Terms & Conditions</label>
          </div>
          </div>
          
          <input type="button" name="previous" id="previous3" class="previous action-button" value="Previous" />
		  
		  <input style="float:right;" type="submit" id="stepfour" name="submit" class="submitbutton" value="Submit" />

        </fieldset>
       
      </form>
	 
</div>
</div>
</div>      
</div>
 </section>
@endsection

