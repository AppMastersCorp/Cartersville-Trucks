 @include('frontend.layouts.header')
 



<section class="meet-team clearfix">
    
        <div class="container">
            <div class="meet-team-text">
                <h2 class="col-sm-8"> <?php echo $con['title']; ?></h2>
				
				
				<div class="col-sm-4 text-right">
				<?php /*
				<img  src="{{ URL::asset('/') }}images/logofb.jpg" style="max-width: 126px; text-align: right;">*/ ?>
				</div>					
				 
            </div>
        </div>
         
</section>





<section class="about-us2 defaultcss">
<div class="container">

 <?php

echo $con['content'];

if($con['id']==2){
?>


<div><iframe frameborder="0" height="1300" id="655e071b2261" scrolling="no" src="http://widgets.calculatestuff.com/?token=655e071b2261" style="height:1300px;width:100%; border:none;"></iframe></div>
	
	
	
<?php

}


if($con['id']==6){
?>

<link href="http://fonts.googleapis.com/css?family=Lato&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('frontend/assets/') }}/form/gsi-step-indicator.min.css" rel="stylesheet">    
<link href="{{ URL::asset('frontend/assets/') }}/form/tsf-step-form-wizard.min.css" rel="stylesheet">     
<link href="{{ URL::asset('frontend/assets/') }}/form/demo.min.css" rel="stylesheet">     
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">  
<link rel="stylesheet" href="{{ URL::asset('frontend/assets/') }}/form/bootstrap.min.css">   
<link href="{{ URL::asset('frontend/assets/') }}/form/parsley.css" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
.formcss {  
	font-size: 16px; 
 } 
 
.tsf-controls {
    display: block !important;
}
</style>


<?php /********/ ?>
<div class="container">
<div class="row" id="formid3">

  <div class="tsf-wizard tsf-wizard-1">
        <div class="tsf-nav-step">
            <ul class="gsi-step-indicator triangle gsi-style-1  gsi-transition ">
 
                        <li class="current" data-target="step-1">
                            <a href="javascript:;">
                                <span class="number">1</span>
                                <span class="desc">
                                    <label>Contact Information</label>
									<span>Contact Information</span>		
                                </span>
                            </a>
                        </li>
                        <li data-target="step-2">
                            <a href="javascript:;">
                                <span class="number">2</span>
                                <span class="desc">
                                    <label>Personal Information</label> 
									<span>Personal Information</span>	
                                </span>
                            </a>
                        </li>  
						
                    </ul> 
                </div>
 

				<div  class='msgid alert alert-danger display-block'  style='display:none;'>* Please fill all required fields.</div>
				
                <div class="tsf-container" >
                     <form class="tsf-content" action="javascript:;">
					 
					 
			<div class="tsf-step step-1 active">
			<fieldset>
			  <legend>Contact Information</legend>
			<div class="row">
			<div class="tsf-step-content">
			<div class="col-lg-12">


													<?php /* step 1*/ ?>
									 


 <div class="form-group">
	<div class="row"> 
	 <div class="col-sm-6">
		<label class="" for="name">Name<span style="color:#ff0000">*</span></label>
		<input type="text" class="form-control step_req required" id="name" name="name" placeholder="Enter name">
	  </div>
	  
	<div class="col-sm-6">
		<label class="" for="suffix">Suffix<span style="color:#ff0000">*</span></label> 
		  <select class="form-control step_req required" id="suffix" name="suffix">
			<option value="">-suffix-</option>
			<?php
			foreach( $con['suffix'] as $suffix){

			 echo "<option value='".$suffix->suffix."'>".$suffix->suffix."</option>";

			}
			?> 		
			
		  </select> 
	</div>
  
  </div>
 </div>
  
 
  
  
  
 <div class="form-group">
 	<div class="row"> 
	 <div class="col-sm-6"> 
    <label class="" for="phone">Phone<span style="color:#ff0000">*</span></label> 
      <input type="text" class="form-control step_req required" id="phone" name="phone" onkeydown="javascript:backspacerDOWN(this,event);"
onkeyup="javascript:backspacerUP(this,event);" placeholder="(xxx)xxx-xxxx" autocomplete="off">
    </div>
  
 
	<div class="col-sm-6"> 
 
    <label class="" for="email">Email<span style="color:#ff0000">*</span></label>
    
      <input type="email" onkeyup="ValidateEmail(this.id,this.value);" class="form-control step_req required" id="email" name="email" placeholder="Enter email id">
    </div>
	
 </div>
</div>
  
  
 <div class="form-group">
  	<div class="row"> 
	 <div class="col-sm-6"> 
 
    <label class="" for="address">Address<span style="color:#ff0000">*</span></label>
    
    
	  
<input type="text" class="form-control step_req required" id="address" name="address" placeholder="Enter Address">	  
	  
    </div>
 
 
 
	<div class="col-sm-6"> 
    <label class="" for="city">City<span style="color:#ff0000">*</span></label>
    
      <input type="text" class="form-control step_req required" id="city" name="city" placeholder="Enter city">
    </div>
 </div>
</div>
	
 

 <div class="form-group">
   	<div class="row"> 
	 <div class="col-sm-6"> 
 
 
    <label class="" for="state">State<span style="color:#ff0000">*</span></label>
    

 
	  <select class="form-control step_req required" id="state" name="state">
	    <option value="">-State-</option>
 

		<?php
		foreach( $con['state'] as $state){

		 echo "<option value='".$state->state."'>".$state->state."</option>";

		}
		?> 
 
 
	  </select>	  	  
	  
	  
    </div>
 
  
 
	 <div class="col-sm-6"> 
    <label class="" for="zip">Zip Code<span style="color:#ff0000">*</span></label>
    
      <input type="text" class="form-control step_req required" id="zip" name="zip" placeholder="Enter ZipCode">
    </div>
	
</div>
</div>	
   
  

									  
													<?php /* step 1*/ ?>
			
			

			</div>
			</div>
			</div>  
			</fieldset>
			</div>	
			
			
			<div class="tsf-step step-2 ">
			<fieldset>
			   <legend>Personal Information</legend>
			<div class="row">
			<div class="tsf-step-content">
			<div class="col-lg-12">			
			
									<?php /*step_2 stepreq*/ ?>
									 

 <div class="form-group">
 
	<div class="row"> 
	<div class="col-sm-6"> 
 
    <label class="" for="employment_status">Employment Status<span style="color:#ff0000">*</span></label>
    
 
	  <select class="form-control step_req required" id="employment_status" name="employment_status">
	    <option value="">-Employment Status-</option>
		<option value="Full-time">Full-time</option>
		<option value="Part-time">Part-time</option>
		<option value="Not Employed">Not Employed</option>
		<option value="Self-Employed">Self-Employed</option>
	  </select>	  
	  
	  
    </div>
  

  <div class="col-sm-6"> 
    <label class="" for="company_name">Company Name<span style="color:#ff0000">*</span></label>
    
      <input type="text" class="form-control step_req required" id="company_name" name="company_name" placeholder="Enter Company Name">
    </div>
	
</div>
</div>	
   
  
  <div class="form-group">
  
	<div class="row"> 
	<div class="col-sm-6">  
  
    <label class="" for="gross_income">Anual Income<span style="color:#ff0000">*</span></label>
    
 
	  
	  <select class="form-control step_req required" id="gross_income" name="gross_income">
	    <option value="">-Anual Income-</option>
		<option value="1">0-10000</option>
		<option value="2">10001-20000</option>
		<option value="2">20001-40000</option>
		<option value="2">40001-80000</option>
		<option value="2">80001-100000</option>
		<option value="2">100001-120000</option>
		<option value="2">120000+</option>
	  </select>	  	  
	  
	  
    </div>
  
  


 <div class="col-sm-6">
    <label class="" for=" driver_license_number "> Driver License Number <span style="color:#ff0000">*</span></label>
    
      <input type="text" class="form-control step_req required" id="driver_license_number" name="driver_license_number" placeholder="Enter Driver License Number">
    </div>
	
</div>
</div>	
 

 <div class="form-group">
 	<div class="row"> 
	<div class="col-sm-6">  
 
    <label class="" for="driver_license_expiration_date">Driver License Expiration Date<span style="color:#ff0000">*</span></label>
    
      <input type="text" class="form-control form_date step_req required" id="driver_license_expiration_date" name="driver_license_expiration_date" placeholder="Enter Driver License Expiration Date"  data-date="" data-date-format="dd MM yyyy" data-link-field="driver_license_expiration_date" data-link-format="yyyy-mm-dd">
    </div>
     
  
  
<div class="col-sm-6"> 
    <label class="" for="insurance_carrier">Insurance Carrier<span style="color:#ff0000">*</span></label>
    
     
	   <select  onchange="fun_insurance_carrier(this.value);" class="form-control step_req required" id="insurance_carrier" name="insurance_carrier">
			<option value="">-Insurance Carrier-</option>
			<option value="Allied Property & Casualty Insurance Company">Allied Property & Casualty Insurance Company</option>
			<option value="Allstate Fire &Casualty Insurance Company">Allstate Fire &Casualty Insurance Company</option>
			<option value="Allstate Indemnity Company">Allstate Indemnity Company </option>
			<option value="Allstate Insurance Company ">Allstate Insurance Company </option>
			<option value="Allstate Property & Casualty Insurance Company">Allstate Property & Casualty Insurance Company</option>
			<option value="Depositors Insurance Company (An Allied company)">Depositors Insurance Company (An Allied company)</option>
			<option value="Direct General Insurance Company">Direct General Insurance Company</option>
			<option value="Esurance Insurance Company">Esurance Insurance Company</option>
			<option value="Geico General Insurance Company">Geico General Insurance Company </option>
			<option value="GEICO Indemnity Company">GEICO Indemnity Company </option>
			<option value="Government Employees Insurance Company">Government Employees Insurance Company</option>
			<option value="Infinity Auto Insurance Company">	Infinity Auto Insurance Company </option>
			<option value="Liberty Mutual Insurance Company">Liberty Mutual Insurance Company </option>
			<option value="Mercury Insurance Company of Florida">Mercury Insurance Company of Florida </option>
			<option value="Metropolitan Casualty Insurance Company">	Metropolitan Casualty Insurance Company </option>
			<option value="Progressive America Insurance Company">Progressive America Insurance Company</option>
			<option value="Progressive Select Insurance Company ">	Progressive Select Insurance Company </option>
			<option value="Safeco Insurance Company of Illinois">Safeco Insurance Company of Illinois </option>
			<option value="Security National Insurance Company">Security National Insurance Company </option>
			<option value="State Farm Fire & Casualty Company">State Farm Fire & Casualty Company</option>
			<option value="State Farm Mutual Automobile Insurance Company ">State Farm Mutual Automobile Insurance Company </option>
			<option value="United Automobile Insurance Company (NOT a part of USAA)">United Automobile Insurance Company (NOT a part of USAA)</option>
			<option value="United Services Automobile Association">United Services Automobile Association</option>
			<option value="USAA Casualty Insurance Company ">USAA Casualty Insurance Company </option>
			
			<option value="other">Other</option>

	   </select>
	   
	   <br>
	   <input type="text" class="form-control  " id="insurance_carrier_2" name="insurance_carrier_2" placeholder="Enter Insurance Carrier" style="display:none;">
	   
	  
    </div>
	
 </div>
 </div> 
    

  
  
 <div class="form-group">
 
 	<div class="row"> 
	<div class="col-sm-6">  
 
    <label class="" for="insurance_id_number">Insurance ID Number<span style="color:#ff0000">*</span></label>
    
      <input type="text" class="form-control datepicker step_req required" id="insurance_id_number" name="insurance_id_number" placeholder="Enter Insurance ID Number">
    </div>
  
  
  
	<div class="col-sm-6"> 
    <label class="" for="insurance_carrier">Insurance Agent Name</label>
    
      <input type="text" class="form-control datepicker required" id="insurance_agent_name" name="insurance_agent_name" placeholder="Enter Insurance Agent Name">
    </div>
</div>
</div>	
	
     

 <div class="form-group">
 <div class="row"> 
	<div class="col-sm-6"> 
    <label class="" for="insurance_agent_phone_number">Insurance Agent Phone Number</label>
    
      <input type="text" class="form-control datepicker step_req required" id="insurance_agent_phone_number" name="insurance_agent_name" placeholder="(xxx)xxx-xxxx" onkeydown="javascript:backspacerDOWN(this,event);"
onkeyup="javascript:backspacerUP(this,event);" >
    </div>
 </div>
 </div> 
	
 									   
									<?php /*step_2 stepreq*/ ?>					
			
			

			
			</div>
			</div>
			</div>  
			</fieldset>
			</div>	
			
			

				</form>

 
					
				
                    
					<div class="tsf-controls ">
					<button type="button" data-type="prev" class="btn btn-left tsf-wizard-btn">
					<i class="fa fa-chevron-left"></i> PREV
					</button>
					<button type="button" data-type="next" class="btn btn-right tsf-wizard-btn ">
					NEXT <i class="fa fa-chevron-right"></i>
					</button>
					<button type="button" data-type="finish" class="btn btn-right tsf-wizard-btn submittestdrive">
					FINISH
					</button>
					</div>
                     
                </div>
                


            </div>
            <!-- END STEP FORM WIZARD -->
            <div class="clearfix"></div>
			
			
 
        </div>
		</div>
        <br><hr><br>
		 
  
	
	
 
	
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>
	<script src="{{ URL::asset('frontend/assets/') }}/form/jquery-3.1.0.min.js"></script>
    <script src="{{ URL::asset('frontend/assets/') }}/form/demo.js"></script>

    <!--Plugin for validation-->
    <script src="{{ URL::asset('frontend/assets/') }}/form/parsley.min.js"></script>
    <script src="{{ URL::asset('frontend/assets/') }}/form/tsf-wizard-plugin.js"></script>

    <script>
			
		/**/	
function fun_insurance_carrier(val){

 
 if(val=="other"){
 
  $("#insurance_carrier_2").addClass("required");
  $("#insurance_carrier_2").css('display', 'block');
 }else{
  $("#insurance_carrier_2").css('display', 'none');
  $("#insurance_carrier_2").removeClass("required");
 }


}	
/**/
	
        $(function () {
            pageLoadScript();
			$('button.submittestdrive').text('Submit');
        });


        function pageLoadScript() {

            _stepEffect = $('#stepEffect').val();
            _style = 'style3';
            _stepTransition = $('#stepTransition').is(':checked');
            _showButtons = $('#showButtons').is(':checked');
            _showStepNum = $('#showStepNum').is(':checked');


			/*
            $('.tsf-wizard-1').tsfWizard({
                stepEffect: _stepEffect,
                stepStyle: _style,
                navPosition: 'top',
                stepTransition: _stepTransition,
                showButtons: _showButtons,
                showStepNum: _showStepNum,
                height: 'auto'
            });
			
			*/
			
$('.tsf-wizard-1').tsfWizard({
					stepEffect: 'basic',
					stepStyle: 'style3',
					navPosition: 'top',
					stepTransition: true,
					validation:true,
					showButtons: true,
					showStepNum: true,
					height: 'auto',
					 
					onNextClick: function (e, from, to, validation) {

					},
					onPrevClick: function (e, from, to) {
						/*$('#result').append('onPrevClick from ' + from + ' - to ' + to)*/
					},
					onFinishClick: function (e, validation) {
						/*$('#result').append('onFinishClick validation ' + validation)*/
					}        
			});						
			
			

            $('.tsf-wizard-2').tsfWizard({
                stepEffect: 'slideDownUp',
                stepStyle: _style,
                navPosition: 'right',
                stepTransition: _stepTransition,
                showButtons: _showButtons,
                showStepNum: _showStepNum,
                height: '300px'
            });
            $('.tsf-wizard-3').tsfWizard({
                stepEffect: _stepEffect,
                stepStyle: _style,
                navPosition: 'left',
                stepTransition: _stepTransition,
                showButtons: _showButtons,
                showStepNum: _showStepNum,
                height: '300px'
            });
            $('.tsf-wizard-4').tsfWizard({
                stepEffect: _stepEffect,
                stepStyle: _style,
                navPosition: 'bottom',
                stepTransition: _stepTransition,
                showButtons: _showButtons,
                showStepNum: _showStepNum,
                height: '300px'
            });
 

        }
		
		
		
          $(document).ready(function () {  
				  
					$("input,select").val('');
					 
				 


					$(".submittestdrive").click(function(){ 
					  
					    
						 var homeurl=$("#homeurl").val();						

						 var name=$("#name").val();
						 //var suffix=$("#suffix").val('');
						 var suffix = $('select#suffix option:selected').val();
						  
						  if(suffix==""){
						  $("#suffix").addClass("has-error");
						  }
						 
						 var phone=$("#phone").val();
						 var email=$("#email").val();
						 var address=$("#address").val();
						 var city=$("#city").val();
						 //var state=$("#state").val('');
						  var state = $('select#state option:selected').val();
						  
						  if(state==""){
						  $("#state").addClass("has-error");
						  }						  
						  
						 
						 var zip=$("#zip").val();
						 //var employment_status=$("#employment_status").val();
						  var employment_status = $('select#employment_status option:selected').val();
						  if(employment_status==""){
						  $("#employment_status").addClass("has-error");
						  }							 
						 
						 var company_name=$("#company_name").val();
						 //var gross_income=$("#gross_income").val('');
						 
						  var gross_income = $('select#gross_income option:selected').val();
						  
						  if(gross_income==""){
						  $("#gross_income").addClass("has-error");
						  }							  
						 
						 
						 var driver_license_number=$("#driver_license_number").val();
						 var driver_license_expiration_date=$("#driver_license_expiration_date").val();
						//var insurance_carrier=$("#insurance_carrier").val('');
						
						var insurance_carrier = $('select#insurance_carrier option:selected').val();
						  if(insurance_carrier==""){
						  $("#insurance_carrier").addClass("has-error");
						  }							 
						 
						 var insurance_id_number=$("#insurance_id_number").val();
						 var insurance_agent_name=$("#insurance_agent_name").val();
						 var insurance_agent_phone_number=$("#insurance_agent_phone_number").val();
						 
						 var insurance_carrier_2=$("#insurance_carrier_2").val();
						 
						 if(insurance_carrier=="other"){
						  var insurance_carrier=$("#insurance_carrier_2").val();						 
						 }
						  
						

 ii=1; 

	$('.step_req').each(function(){   

		if(!/[\S]/.test($(this).html())) {  
			    
			  
			  if($(this).val()==""){
			  
			  
			  $(".msgid").show("slow"); 
			  $(".msgid").html("Fill all textbox");
			   
					setTimeout(function() {
						 $(".msgid").hide('slow');
					}, 5000);		  
			  ii=0; 
			  $(this).addClass("parsley-error");
			   
			  }
			  
		} 
		
	}) 

 
 

var email=$("#email").val();
 
 
 
 
if(ii==0){  return false; }else{  $(".display-block").css("display","none");  						
						
						
						 $.ajax({
							type: "POST",
							url: homeurl+'/callajax/submit_test_drive?submit=1',
							data: {name:name,suffix:suffix,phone:phone,email:email,address:address,city:city,state:state,zip:zip,employment_status:employment_status,company_name:company_name,gross_income:gross_income,driver_license_number:driver_license_number,driver_license_expiration_date:driver_license_expiration_date,insurance_carrier:insurance_carrier,insurance_id_number:insurance_id_number,insurance_agent_name:insurance_agent_name,insurance_agent_phone_number:insurance_agent_phone_number},
							type: 'get',
							success: function( response ) {
							
								if(response==1){
								
								$("#formid3").html('<div class=\"alert alert-success\">Successfully Sent</div>');
								
								}else{
								$("#formid3").html('<div class=\"alert alert-danger\">Sending Fail</div>');
								
								}
							}
						});
						
						}
						
						
					});	
            });		
			
			
$( "input,select" ).change(function() {
   var id=$(this).attr('id');   
   $(this).removeClass("has-error");
});			
	 
 $('.mymodelcss').click(function() { 

	$("body").addClass("modal-open");
	$("#myModal").addClass("in");
	$("#myModal").css("display","block"); 
 });	
 
 
  
function closepopup(){
	
 
	$("body").removeClass("modal-open"); 
	$("#myModal").removeClass("in");
	$("#myModal").css("display","none");

} 
</script>	

<?php /*******/ ?> 
 
 
		
		
<?php
}

?>

	
</div>
</section>
 



  @include('frontend.layouts.contactinfo') 
		
		
@include('frontend.layouts.footer')		

 