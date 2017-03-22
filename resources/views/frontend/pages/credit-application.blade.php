 @include('frontend.layouts.header')
 
 <style>
.gsi-step-indicator .desc span {  font-size:12px !important; }
 </style>
 
    <link href="http://fonts.googleapis.com/css?family=Lato&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('frontend/assets/') }}/form/gsi-step-indicator.min.css" rel="stylesheet">    
    <link href="{{ URL::asset('frontend/assets/') }}/form/tsf-step-form-wizard.min.css" rel="stylesheet">     
    <link href="{{ URL::asset('frontend/assets/') }}/form/demo.min.css" rel="stylesheet">     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="{{ URL::asset('frontend/assets/') }}/form/bootstrap.min.css">   
    <link href="{{ URL::asset('frontend/assets/') }}/form/parsley.css" rel="stylesheet">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 <section class="meet-team clearfix">
    
        <div class="container">
            <div class="meet-team-text">
                <h2 class="col-sm-8"> Credit Application</h2>
				<div class="col-sm-4 text-right">
				<?php /*
				<img  src="{{ URL::asset('/') }}images/logofb.jpg" style="max-width: 126px; text-align: right;">
				*/ ?>
				</div>	 
            </div> 
        </div> 
</section>
  
  
<div class="container">
<div class="row">   
  
  <div class="tsf-wizard tsf-wizard-1">
        <div class="tsf-nav-step">
            <ul class="gsi-step-indicator triangle gsi-style-1  gsi-transition ">
                
 
						
						<li class="current" data-target="step-1">
                            <a href="javascript:;">
                                <span class="number">1</span>
                                <span class="desc">
                                    <label>Applicant Info.</label> 
                                </span>
                            </a>
                        </li>
                        <li data-target="step-2" >
                            <a href="javascript:;">
                                <span class="number">2</span>
                                <span class="desc">
                                    <label>Applicant Employee Info.</label>  
                                </span>
                            </a>
                        </li>
                       
					   <li data-target="step-3">
                            <a href="javascript:;">
                                <span class="number">
                                    3
                                </span>
                                <span class="desc">
                                    <label>Co-Signer Info.</label> 
                                </span>
                            </a>
                        </li>
						
                        
						<li data-target="step-4">
                            <a href="javascript:;">
                                <span class="number">
                                    4
                                </span>
                                <span class="desc">
                                    <label>Co-Applicant Info</label> 
                                </span>
                            </a>
                        </li>
						 
						 				
										
						<li data-target="step-5">
                            <a href="javascript:;">
                                <span class="number">
                                    5
                                </span>
                                <span class="desc">
                                    <label>References</label>                                     
                                </span>
                            </a>
                        </li> 
			 
            </ul>
        </div>
		
				
		<div class='alert alert-danger display-block' style='display:none;'>* Please fill all required fields.</div>		
		
 
        <div class="tsf-container" id="formid2">
            <form class="tsf-content" action="javascript:;">
               
			   
			   <?php /*
                <div class="tsf-step step-1 active">
                    <fieldset>
                        <legend>Provide your account details</legend>
                        <div class="row">
                            <div class="tsf-step-content">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control required" id="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
				*/ ?>
              
			
			
			  
	    <div class="tsf-step step-1 active">
                    <fieldset>
                         <legend>Applicant Information</legend>
                        <div class="row">
                            <div class="tsf-step-content">
                                <div class="col-lg-12">
								

<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4">
	<label class="">First Name<span style="color:#ff0000">*</span></label> 
	<input name="appinfo_first_name" class="form-control step_1 required  app_stepreq" maxlength="255" id="appinfo_first_name"  autocomplete="false" type="text">
	</div>
	
	<div class="col-sm-4">
	<label class="">Middle Name</label> 
	<input name="appinfo_middle_name" class="form-control step_1 " maxlength="255" id="appinfo_middle_name"  autocomplete="false" type="text">
	</div>

	<div class="col-sm-4">
	<label class="">Last Name<span style="color:#ff0000">*</span></label> 
	<input name="appinfo_last_name" class="form-control required   step_1 app_stepreq" maxlength="255" id="appinfo_last_name"  autocomplete="false" type="text">
	</div> 
	
	</div> 
</div>
               
                                
                                
<div class="form-group">
	<div class="row">
	
		<div class="col-sm-4">
		<label class="">D.O.B<span style="color:#ff0000">*</span></label> 
		<input name="appinfo_dob" class="form-control step_1  form_date app_stepreq required" maxlength="255" id="appinfo_dob"  autocomplete="false" type="text"  data-date="" data-date-format="dd MM yyyy" data-link-field="appinfo_dob" data-link-format="yyyy-mm-dd"> 
		</div>

		<div class="col-sm-4">
		<label class="">SSN<span style="color:#ff0000">*</span></label>
		<input name="appinfo_ssn" id="appinfo_ssn" class="form-control step_1 app_stepreq required" step="any"   autocomplete="false" type="text"   onkeyup = "myFunc(this.id)" placeholder="xxx-xx-xxxx">
		</div>
		
		<div class="col-sm-4"> 
		<label class="">Phone<span style="color:#ff0000">*</span></label>
		<input name="appinfo_phone" id="appinfo_phone" class="form-control step_1 app_stepreq required" step="any"   autocomplete="false" type="text" onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);"   placeholder="(xxx)xxx-xxxx">
		</div>  
 
	</div> 
</div>


<div class="form-group">
	<div class="row">
	
		<div class="col-sm-8"> 
		<label class="">Current Address<span style="color:#ff0000">*</span></label> 
		<input name="appinfo_curraddress" class="form-control step_1 app_stepreq required" maxlength="255" id="appinfo_curraddress" autocomplete="false" type="text">
		</div>
		
		<div class="col-sm-4"> 
			<label class="">E-mail<span style="color:#ff0000">*</span></label>
			<input name="appinfo_e_mail" class="form-control step_1 cosigner_stepreq3" maxlength="255" id="appinfo_e_mail" autocomplete="false" type="email" onkeyup="ValidateEmail2(this.id,this.value);"> 
		</div>	
	
	
	</div>
</div>
         

						
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
	<label class="">City<span style="color:#ff0000">*</span></label>
	<input name="appinfo_city" class="form-control step_1 app_stepreq required" maxlength="255" id="appinfo_city" autocomplete="false" type="text">  
	</div>
	
	<div class="col-sm-4"> 
	<label class="">State<span style="color:#ff0000">*</span></label> 
	  <select class="form-control app_stepreq required" id="appinfo_state" name="appinfo_state">
	    <option value="">-State-</option> 
		<?php
		foreach( $con['state'] as $state){
		 echo "<option value='".$state->state."'>".$state->state."</option>";
		}
		?>  
	  </select>	 
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">Zip Code<span style="color:#ff0000">*</span></label>
	<input name="appinfo_zipcode" class="form-control step_1 app_stepreq required" maxlength="255" id="appinfo_zipcode" autocomplete="false" type="text"> 	
	</div>  
	</div>
</div>


<div class="form-group">
 <div class="row">
	
	<div class="col-sm-2"> 	  
    <label class="radio-inline">
      <input type="radio" name="appinfo_own_rent" onclick="pay_ownrent_1();" value="Own" checked>Own
    </label>
    <label class="radio-inline" >
      <input type="radio" name="appinfo_own_rent" onclick="pay_ownrent_1();" value="Rent">Rent
    </label> 
	</div>
	
	<div class="col-sm-5"> 	 	
	  <label class="" id="appinfo_monthly_payment_or_rent_label">Monthly Payment or Rent<span style="color:#ff0000">*</span></label>	 
	  <select class="form-control app_stepreq required" id="appinfo_monthly_payment_or_rent" name="appinfo_monthly_payment_or_rent">
			<option value="" id="appinfo_monthly_payment_or_rent_opt">-Rent-</option> 	
			<option value="0 - 500">0 - 500</option>  
			<option value="501 - 1000">501 - 1000</option> 
			<option value="1001 -1500">1001 -1500</option> 
			<option value="1501 - 2000">1501 - 2000</option> 
			<option value="2001 - 2500">2001 - 2500</option> 
			<option value="2501 - 3000">2501 - 3000</option> 
			<option value="3000+">3000+ </option>  	
	  </select>  
	</div>
	
	<div class="col-sm-5"> 	 
	  <label class="">How Long?<span style="color:#ff0000">*</span></label>		 
	  <select class="form-control app_stepreq required" id="appinfo_how_long" name="appinfo_how_long">
	    <option selected="selected" value="">-How Long?-</option> 
		<option value="0-6 months">0-6 months</option>
		<option value="6-12 Months">6-12 Months</option>
		<option value="12-18 Months">12-18 Months</option>
		<option value="18-24 Months">18-24 Months</option>
		<option value="More than 24 months">More than 24 months</option>
	  </select>	 
	</div> 
 </div>
</div>		 
  
<div id="appinfo_how_long_main" style="display:none;"> 
	<div class="form-group" >
		<label class="">Previous Address<span style="color:#ff0000">*</span></label> 
		<input name="appinfo_previous_address" class="form-control step_1 app_stepreq2" maxlength="255" id="appinfo_previous_address" autocomplete="false" type="text"> 	
	</div> 
							
	<div class="form-group">
		<div class="row">
		
			<div class="col-sm-4"> 
			<label class="">City<span style="color:#ff0000">*</span></label>
			<input name="appinfo_previous_city" class="form-control step_1 app_stepreq2" maxlength="255" id="appinfo_previous_city" autocomplete="false" type="text"> 	
			</div>
			
			<div class="col-sm-4"> 
			<label class="">State<span style="color:#ff0000">*</span></label> 
			  <select class="form-control app_stepreq2 " id="appinfo_previous_state" name="appinfo_previous_state">
				<option selected value="">-State-</option> 
				<?php
				foreach( $con['state'] as $state){

				 echo "<option value='".$state->state."'>".$state->state."</option>";

				}
				?>  
			  </select>	
			</div>	
			
			<div class="col-sm-4"> 
			<label class="">Zip Code<span style="color:#ff0000">*</span></label>
			<input name="appinfo_previous_zipcode" class="form-control step_1 app_stepreq2" maxlength="255" id="appinfo_previous_zipcode" autocomplete="false" type="text"> 	
			</div> 
		
		</div>
	</div>


<div class="form-group">
 <div class="row">
	
	<div class="col-sm-2"> 	  
		<label class="radio-inline">
		  <input type="radio" name="appinfo_previous_own_rent" onclick="pay_ownrent_2();" value="Own" checked>Own
		</label>
		<label class="radio-inline" >
		  <input type="radio" name="appinfo_previous_own_rent" onclick="pay_ownrent_2();" value="Rent">Rent
		</label> 
	</div>
	
	<div class="col-sm-5">
	  <label class="" id="appinfo_previous_own_rent_label">Monthly Payment or Rent<span style="color:#ff0000">*</span></label>	
	  <select class="form-control app_stepreq2" id="appinfo_previous_monthly_payment_or_rent" name="appinfo_previous_monthly_payment_or_rent">
			<option selected value="" id="appinfo_previous_own_rent_opt">-Rent-</option> 	
			<option value="0 - 500">0 - 500</option>  
			<option value="501 - 1000">501 - 1000</option> 
			<option value="1001 -1500">1001 -1500</option> 
			<option value="1501 - 2000">1501 - 2000</option> 
			<option value="2001 - 2500">2001 - 2500</option> 
			<option value="2501 - 3000">2501 - 3000</option> 
			<option value="3000+">3000+ </option>  	
	  </select>	 
	</div> 
	
 </div>
</div>


</div>
   

  
<?php /*********** step 1***********/ ?>		
		
                                   
									
									
									
                                </div>
                            </div>
                        </div> 
						
						
                    </fieldset>
                </div>		  
			  
			  
			<div class="tsf-step step-2">
                    <fieldset>
                          <legend>Employment Information</legend>
                        <div class="row">
                            <div class="tsf-step-content">
                                <div class="col-lg-12">
                                    
<?php  /********************/ ?>

<div class="form-group">
	<label class="">Current Employer<span style="color:#ff0000">*</span></label>
	<input name="emp_current_employer" id="emp_current_employer"  class="form-control step_2 emp_stepreq  required" maxlength="255" autocomplete="false" type="text"> 
</div>


<div class="form-group">
	<div class="row">
	
	<div class="col-sm-12">		
	  <label class="">Employer Address<span style="color:#ff0000">*</span></label>
	  <input name="emp_employer_address" id="emp_employer_address"  class="form-control step_2 emp_stepreq  required" maxlength="255" autocomplete="false" type="text"> 
	</div>
	
	</div>
</div>
	
	
<div class="form-group">
		<div class="row"> 
			
			<div class="col-sm-4"> 
			<label class="">Phone<span style="color:#ff0000">*</span></label>
			<input name="emp_phone" class="form-control step_1 emp_stepreq  required" maxlength="255" id="emp_phone" autocomplete="false" type="text" onkeydown="javascript:backspacerDOWN(this,event);"
		onkeyup="javascript:backspacerUP(this,event);" > 
			</div>
			
			<?php /*
			<div class="col-sm-4"> 
			<label class="">E-mail<span style="color:#ff0000">*</span></label>
			<input name="emp_e_mail" class="form-control step_1 emp_stepreq  required" maxlength="255" id="emp_e_mail" autocomplete="false" type="email" onkeyup="ValidateEmail2(this.id,this.value);"> 
			</div>	
			
			
			<div class="col-sm-4"> 
			<label class="">Fax</label>
			<input name="emp_fax" class="form-control step_1" maxlength="255" id="emp_fax" autocomplete="false" type="text"> 	
			</div> 
			*/ ?>
			
		</div>
	</div>	
	
	   
		   
	<div class="form-group">
		<div class="row">
		
		<div class="col-sm-4"> 
		<label class="">City<span style="color:#ff0000">*</span></label>
		<input name="emp_city" class="form-control step_1 emp_stepreq  required" maxlength="255" id="emp_city" autocomplete="false" type="text"> 	
		</div>
		
		<div class="col-sm-4"> 
		<label class="">State<span style="color:#ff0000">*</span></label>	 
		  <select class="form-control emp_stepreq  required " id="emp_state" name="emp_state">
			<option value="">-State-</option> 
			<?php
			foreach( $con['state'] as $state){

			 echo "<option value='".$state->state."'>".$state->state."</option>";

			}
			?>  
		  </select>	 
		</div>	
		
		<div class="col-sm-4"> 
		<label class="">Zip Code<span style="color:#ff0000">*</span></label>
		<input name="emp_zipcode" class="form-control step_1 emp_stepreq  required" maxlength="255" id="emp_zipcode" autocomplete="false" type="text"> 	
		</div>
		
		
		</div>
	</div>	


	<div class="form-group">
		<div class="row">
		
		<div class="col-sm-4"> 
		<label class="">Position<span style="color:#ff0000">*</span></label>
		<input name="emp_position" class="form-control step_1 emp_stepreq  required" maxlength="255" id="emp_position" autocomplete="false" type="text"> 
		
		</div>
		
		<div class="col-sm-4"> 
		 <label class="radio-inline">
		  <input type="radio" name="emp_hourly_salary" value="Salary" onclick="fun_emp_hourly_salary();">Salary
		</label> 
		
		 <label class="radio-inline">
		  <input type="radio" name="emp_hourly_salary" value="Hourly" onclick="fun_emp_hourly_salary();" checked>Hourly
		</label>


		<label class="radio-inline css_hr" id="emp_hourly_value_main" >
		<input type="text" value="" id="emp_hourly_value" class="form-control" style="display:inline-block;">/Hour
		</label>
	 
		</div>		
	
	
	
	
	
	<div class="col-sm-4">
	  <label class="">How Long?<span style="color:#ff0000">*</span></label> 
	  <select class="form-control emp_stepreq  required" id="emp_how_long" name="emp_how_long">
	    <option value="">-How Long?-</option> 
		<option value="0-6 months">0-6 months</option>
		<option value="6-12 Months">6-12 Months</option>
		<option value="12-18 Months">12-18 Months</option>
		<option value="18-24 Months">18-24 Months</option>
		<option value="More than 24 months">More than 24 months</option>
	  </select>	
	</div>
	
</div>
</div>

       
<div id="emp_how_long_main" style="display:none;">

	<div class="form-group" >
		<label class="">Previous Address<span style="color:#ff0000">*</span></label> 
		<input name="emp_previous_address" class="form-control step_1 emp_stepreq2" maxlength="255" id="emp_previous_address" autocomplete="false" type="text"> 	
	</div>
		   
	<div class="form-group">
		<div class="row"> 
			
			<div class="col-sm-4"> 
			<label class="">Phone<span style="color:#ff0000">*</span></label>
			<input name="emp_previous_phone" class="form-control step_1 emp_stepreq2" maxlength="255" id="emp_previous_phone" autocomplete="false" type="text" onkeydown="javascript:backspacerDOWN(this,event);"
		onkeyup="javascript:backspacerUP(this,event);" > 
			</div>
			
			<div class="col-sm-4"> 
			<label class="">E-mail<span style="color:#ff0000">*</span></label>
			<input name="emp_previous_e_mail" class="form-control step_1 emp_stepreq2" maxlength="255" id="emp_previous_e_mail" autocomplete="false" type="email" onkeyup="ValidateEmail2(this.id,this.value);"> 
			</div>	
			
			<div class="col-sm-4"> 
			<label class="">Fax</label>
			<input name="emp_previous_fax" class="form-control step_1" maxlength="255" id="emp_previous_fax" autocomplete="false" type="text"> 	
			</div> 
			
		</div>
	</div>	
	
	   
		   
	<div class="form-group">
		<div class="row">
		
		<div class="col-sm-4"> 
		<label class="">City<span style="color:#ff0000">*</span></label>
		<input name="emp_previous_city" class="form-control step_1 emp_stepreq2" maxlength="255" id="emp_previous_city" autocomplete="false" type="text"> 	
		</div>
		
		<div class="col-sm-4"> 
		<label class="">State<span style="color:#ff0000">*</span></label>	 
		  <select class="form-control emp_stepreq2 " id="emp_previous_state" name="emp_previous_state">
			<option value="">-State-</option> 
			<?php
			foreach( $con['state'] as $state){

			 echo "<option value='".$state->state."'>".$state->state."</option>";

			}
			?>  
		  </select>	 
		</div>	
		
		<div class="col-sm-4"> 
		<label class="">Zip Code<span style="color:#ff0000">*</span></label>
		<input name="emp_previous_zipcode" class="form-control step_1 emp_stepreq2" maxlength="255" id="emp_previous_zipcode" autocomplete="false" type="text"> 	
		</div>
		
		
		</div>
	</div>	


	<div class="form-group">
		<div class="row">
		
		<div class="col-sm-4"> 
		<label class="">Position<span style="color:#ff0000">*</span></label>
		<input name="emp_previous_position" class="form-control step_1 emp_stepreq2" maxlength="255" id="emp_previous_position" autocomplete="false" type="text"> 
		
		</div>
		
		<div class="col-sm-4"> 
		 <label class="radio-inline">
		  <input type="radio" name="emp_previous_hourly_salary" value="Salary" onclick="fun_emp_previous_hourly_salary();">Salary
		</label> 
		
		 <label class="radio-inline">
		  <input type="radio" name="emp_previous_hourly_salary" value="Hourly" onclick="fun_emp_previous_hourly_salary();" checked>Hourly
		</label>


		<label class="radio-inline css_hr" id="emp_previous_hourly_value_main" >
		<input type="text" value="" id="emp_previous_hourly_value" class="form-control" style="display:inline-block;">/Hour
		</label>
	 
		</div>	
		
		<div class="col-sm-4"> 
		<label class="">Annual Income<span style="color:#ff0000">*</span></label>  
		  <select class="form-control emp_stepreq2" id="emp_previous_annual_income" name="emp_previous_annual_income">
			<option value="">-Annual Income-</option> 
			<option value="0-10000">0-10000</option>
			<option value="10001 - 20000">10001 - 20000</option>
			<option value="20001 - 30000">20001 - 30000</option>
			<option value="30001 - 40000">30001 - 40000</option>
			<option value="40001 - 50000">40001 - 50000</option>
			<option value="50001 - 60000">50001 - 60000</option>
			<option value="60001 - 70000">60001 - 70000</option>
			<option value="70001 - 80000">70001 - 80000</option>
			<option value="80001 - 90000">80001 - 90000</option>
			<option value="90001 - 100000">90001 - 100000</option>
			<option value="100001 - 110000">100001 - 110000</option>
			<option value="110001 - 120000">110001 - 120000</option>
			<option value="120000+">120000+</option>		  
		  </select>	 
		</div> 
		
		</div>
	</div> 
	
</div>


									
									
<?php /*********************/ ?>									
									
                                </div>
                            </div>
                        </div> 
						
						
                    </fieldset>
                </div>			  
			  
			  
			  
			<div class="tsf-step step-3">
                    <fieldset>
                         <legend>Co-Signer Information</legend>
                        <div class="row">
                            <div class="tsf-step-content">
                                <div class="col-lg-12">
                               
							   
                                  
<?php  /********************/ ?>


<div class="form-group">
	<div class="row"> 
		<div class="col-sm-12"> 
			 
			<label>Will there be a Co-Signer For this Application? </label>
			<label class="radio-inline">
			  <input type="radio" value="on" name="cosigner_status_co_app" onclick="show_step3_con(1);">Yes
			</label>
			<label class="radio-inline">
			  <input type="radio" value="off" id="cosigner_status_co_app_id" name="cosigner_status_co_app" checked onclick="show_step3_con(0);">No
			</label>  
			 
		</div>
	</div>
</div>
<hr>



<div class="step3_con" style="display: none;">

	<div class="form-group">
		<div class="row">
		
		<div class="col-sm-4">
		<label class="">First Name<span style="color:#ff0000">*</span></label> 
		<input name="cosigner_first_name" class="form-control step_1 cosigner_stepreq" maxlength="255" id="cosigner_first_name"  autocomplete="false" type="text">
		</div>
		
		<div class="col-sm-4">
		<label class="">Middle Name</label> 
		<input name="cosigner_middle_name" class="form-control step_1 " maxlength="255" id="cosigner_middle_name"  autocomplete="false" type="text">
		</div>

		<div class="col-sm-4">
		<label class="">Last Name<span style="color:#ff0000">*</span></label> 
		<input name="cosigner_last_name" class="form-control  step_1 cosigner_stepreq" maxlength="255" id="cosigner_last_name"  autocomplete="false" type="text">
		</div>	
		
		</div>
		
	</div>
			   
								
									
	<div class="form-group">
		<div class="row">
		
			<div class="col-sm-4">
				<label class="">D.O.B<span style="color:#ff0000">*</span></label> 
				<input name="cosigner_dob" class="form-control step_1 form_date cosigner_stepreq" maxlength="255" id="cosigner_dob"  autocomplete="false" type="text"  data-date="" data-date-format="dd MM yyyy" data-link-field="cosigner_dob" data-link-format="yyyy-mm-dd"> 
			</div>

			<div class="col-sm-4">
				<label class="">SSN<span style="color:#ff0000">*</span></label>
				<input name="cosigner_ssn" id="cosigner_ssn" class="form-control step_1 cosigner_stepreq" step="any"   autocomplete="false" type="text" onkeyup = "myFunc(this.id)" maxlength="11" placeholder="xxx-xx-xxxx">
			</div>
			
			<div class="col-sm-4">
				<label class="">Phone<span style="color:#ff0000">*</span></label>
				<input name="cosigner_phone" id="cosigner_phone" class="form-control step_1 cosigner_stepreq" step="any"   autocomplete="false" type="text" onkeydown="javascript:backspacerDOWN(this,event);"
			onkeyup="javascript:backspacerUP(this,event);"  placeholder="(xxx)xxx-xxxx">
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="row">
		
		<div class="col-sm-8">
		<label class="">Current Address<span style="color:#ff0000">*</span></label> 
		<input name="cosigner_curraddress" class="form-control step_1 cosigner_stepreq" maxlength="255" id="cosigner_curraddress" autocomplete="false" type="text"> 
		</div>
		
		<div class="col-sm-4"> 
			<label class="">E-mail<span style="color:#ff0000">*</span></label>
			<input name="cosigner_e_mail" class="form-control step_1 cosigner_stepreq3" maxlength="255" id="cosigner_e_mail" autocomplete="false" type="email" onkeyup="ValidateEmail2(this.id,this.value);"> 
		</div>		
		
		
		</div>
		
	</div>
		 

						
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
	<label class="">City<span style="color:#ff0000">*</span></label>
	<input name="cosigner_city" class="form-control step_1 cosigner_stepreq" maxlength="255" id="cosigner_city" autocomplete="false" type="text"> 
	
	</div>
	
	<div class="col-sm-4"> 
	  <label class="">State<span style="color:#ff0000">*</span></label>
	  <select class="form-control cosigner_stepreq" id="cosigner_state" name="cosigner_state">
	    <option value="">-State-</option> 
		<?php
		foreach( $con['state'] as $state){
		 echo "<option value='".$state->state."'>".$state->state."</option>";
		}
		?>  
	  </select>		
	</div>	
	
	<div class="col-sm-4"> 
		<label class="">Zip Code<span style="color:#ff0000">*</span></label>
		<input name="cosigner_zipcode" class="form-control step_1 cosigner_stepreq" maxlength="255" id="cosigner_zipcode" autocomplete="false" type="text"> 	
	</div>
	
	
	</div>
</div>
 

<div class="form-group">
 <div class="row">
	
	<div class="col-sm-2"> 	  
	<label class="radio-inline">
	  <input type="radio" name="cosigner_own_rent" onclick="pay_ownrent_3();" value="Own" checked>Own
	</label>
	<label class="radio-inline" >
	  <input type="radio" name="cosigner_own_rent" onclick="pay_ownrent_3();" value="Rent">Rent
	</label> 
	</div>
	
	<div class="col-sm-5">
	  <label class="" id="cosigner_own_rent_label">Monthly Payment or Rent<span style="color:#ff0000">*</span></label> 
	  <select class="form-control cosigner_stepreq" id="cosigner_monthly_payment_or_rent" name="cosigner_monthly_payment_or_rent">
			<option value="" id="cosigner_own_rent_opt">-Rent-</option> 	
			<option value="0 - 500">0 - 500</option>  
			<option value="501 - 1000">501 - 1000</option> 
			<option value="1001 -1500">1001 -1500</option> 
			<option value="1501 - 2000">1501 - 2000</option> 
			<option value="2001 - 2500">2001 - 2500</option> 
			<option value="2501 - 3000">2501 - 3000</option> 
			<option value="3000+">3000+ </option>  	
	  </select>	 
	</div>
	
	<div class="col-sm-5"> 	 	
	  <label class="">How Long?<span style="color:#ff0000">*</span></label> 
	  <select class="form-control cosigner_stepreq " id="cosigner_how_long" name="cosigner_how_long">
	    <option value="">-How Long?-</option> 
		<option value="0-6 months">0-6 months</option>
		<option value="6-12 Months">6-12 Months</option>
		<option value="12-18 Months">12-18 Months</option>
		<option value="18-24 Months">18-24 Months</option>
		<option value="More than 24 months">More than 24 months</option>
	  </select>	 
	</div> 
	
 </div>
</div>		 
  
  
 <?php /*none*/ ?> 
<div id="cosigner_how_long_main" style="display:none;">

	<div class="form-group" >
		<label class="">Previous Address<span style="color:#ff0000">*</span></label>	 
		<input name="cosigner_previous_address" class="form-control step_1 cosigner_stepreq2" maxlength="255" id="cosigner_previous_address" autocomplete="false" type="text"> 
	</div>
		 

						
	<div class="form-group">
		<div class="row">		
		
		<div class="col-sm-4"> 
		<label class="">City<span style="color:#ff0000">*</span></label>
		<input name="cosigner_previous_city" class="form-control step_1 cosigner_stepreq2" maxlength="255" id="cosigner_previous_city" autocomplete="false" type="text"> 		
		</div>
		
		<div class="col-sm-4"> 
		<label class="">State<span style="color:#ff0000">*</span></label>
		  <select class="form-control cosigner_stepreq2 " id="cosigner_previous_state" name="cosigner_previous_state">
			<option value="">-State-</option> 
			<?php
			foreach( $con['state'] as $state){
			 echo "<option value='".$state->state."'>".$state->state."</option>";
			}
			?>  
		  </select>	
		</div>	
		
		<div class="col-sm-4"> 
		<label class="">Zip Code<span style="color:#ff0000">*</span></label>
		<input name="cosigner_previous_zipcode" class="form-control step_1 cosigner_stepreq2" maxlength="255" id="cosigner_previous_zipcode" autocomplete="false" type="text"> 	
		</div>
		
		
		</div>
	</div>


	<div class="form-group">
	 <div class="row">
		 
		<div class="col-sm-2"> 	  
		<label class="radio-inline">
		  <input type="radio" name="cosigner_previous_own_rent"  onclick="pay_ownrent_4();" value="Own" checked>Own
		</label>
		<label class="radio-inline" >
		  <input type="radio" onclick="pay_ownrent_4();" name="cosigner_previous_own_rent" value="Rent">Rent
		</label> 
		</div>
		
		<div class="col-sm-5"> 	  
		
		<label class="" id="cosigner_previous_own_rent_label">Monthly Payment or Rent<span style="color:#ff0000">*</span></label> 
		  <select class="form-control cosigner_stepreq2 " id="cosigner_previous_monthly_payment_or_rent" name="cosigner_previous_monthly_payment_or_rent">
				<option value="" id="cosigner_previous_own_rent_opt">-Rent-</option> 	
				<option value="0 - 500">0 - 500</option>  
				<option value="501 - 1000">501 - 1000</option> 
				<option value="1001 -1500">1001 -1500</option> 
				<option value="1501 - 2000">1501 - 2000</option> 
				<option value="2001 - 2500">2001 - 2500</option> 
				<option value="2501 - 3000">2501 - 3000</option> 
				<option value="3000+">3000+ </option>  	
		  </select>	
		</div>	
	</div>	
	</div>	 
	
</div>
	
	

	<div class="col-sm-12"> <br><br> <p> <hr> </p></div>
	<hr>

 
<div  style="display: block;"> 
	<h4>Co-Signer Employment Information</h4>
	<br>

	<div class="form-group">
		<label class="">Current Employer<span style="color:#ff0000">*</span></label>
		<input name="coemp_current_employer" id="coemp_current_employer"  class="form-control step_2 cosigner_stepreq3" maxlength="255" autocomplete="false" type="text"> 
	</div>


	<div class="form-group">
		<div class="row">
			
			<div class="col-sm-12">			
			<label class="">Employer Address<span style="color:#ff0000">*</span></label>
			<input name="coemp_employer_address" id="coemp_employer_address"  class="form-control step_2 cosigner_stepreq3" maxlength="255" autocomplete="false" type="text"> 
			</div>
		</div>
	</div>	
			
			
			
			
		<div class="form-group">
		<div class="row">
		
		<div class="col-sm-4"> 
			<label class="">Phone<span style="color:#ff0000">*</span></label>
			<input name="coemp_phone" class="form-control step_1 cosigner_stepreq3" maxlength="255" id="coemp_phone" autocomplete="false" type="text" onkeydown="javascript:backspacerDOWN(this,event);"
			onkeyup="javascript:backspacerUP(this,event);" placeholder="(xxx)xxx-xxxx" >
		</div>
		
		<?php /*
		<div class="col-sm-4"> 
			<label class="">E-mail<span style="color:#ff0000">*</span></label>
			<input name="coemp_e_mail" class="form-control step_1 cosigner_stepreq3" maxlength="255" id="coemp_e_mail" autocomplete="false" type="email" onkeyup="ValidateEmail2(this.id,this.value);"> 
		</div>	
		
		
		<div class="col-sm-4"> 
			<label class="">Fax</label>
			<input name="coemp_fax" class="form-control step_1 " maxlength="255" id="coemp_fax" autocomplete="false" type="text"> 	
		</div>
*/ ?>		
		
		</div>
	</div>	
	
	   
	   
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
		<label class="">City<span style="color:#ff0000">*</span></label>
		<input name="coemp_city" class="form-control step_1 cosigner_stepreq3" maxlength="255" id="coemp_city" autocomplete="false" type="text"> 	
	</div>
	
	<div class="col-sm-4"> 
	  <label class="">State<span style="color:#ff0000">*</span></label>
	  <select class="form-control cosigner_stepreq3" id="coemp_state" name="coemp_state">
	    <option value="">-State-</option> 
		<?php
		foreach( $con['state'] as $state){

		 echo "<option value='".$state->state."'>".$state->state."</option>";

		}
		?>  
	  </select>	
	</div>	
	
	<div class="col-sm-4"> 
		<label class="">Zip Code<span style="color:#ff0000">*</span></label>
		<input name="coemp_zipcode" class="form-control step_1 cosigner_stepreq3" maxlength="255" id="coemp_zipcode" autocomplete="false" type="text"> 	
	</div>
	
	
	</div>
</div>	


<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
		<label class="">Position<span style="color:#ff0000">*</span></label>
		<input name="coemp_position" class="form-control step_1 cosigner_stepreq3" maxlength="255" id="coemp_position" autocomplete="false" type="text"> 	
	</div>
	
	<div class="col-sm-4"> 
		<label class="radio-inline" >
		  <input type="radio" name="coemp_hourly_salary" onclick="fun_coemp_hourly_salary();" value="Salary">Salary
		</label> 
		
		 <label class="radio-inline">
		  <input type="radio" name="coemp_hourly_salary" onclick="fun_coemp_hourly_salary();" value="Hourly" checked>Hourly
		</label>	
		
		<label class="radio-inline css_hr" id="coemp_hourly_value_main">
		 <input type="text" value="" id="coemp_hourly_value" class="form-control" style="display:inline-block;">/Hour
		</label>
	</div>		
			
			
			
			<div class="col-sm-4">
			  <label class="">How long?<span style="color:#ff0000">*</span></label>  
			  <select class="form-control cosigner_stepreq3 " id="coemp_how_long" name="coemp_how_long">
					<option value="">-How long?-</option> 
					<option value="0-6 months">0-6 months</option>
					<option value="6-12 Months">6-12 Months</option>
					<option value="12-18 Months">12-18 Months</option>
					<option value="18-24 Months">18-24 Months</option>
					<option value="More than 24 months">More than 24 months</option>
				  </select>	
			</div>
			
		</div>
	</div>
       
	   
<div id="coemp_how_long_main" style="display:none;">	   
	   
	<div class="form-group">
		<label class="">Previous Address<span style="color:#ff0000">*</span></label> 
		<input name="coemp_previous_address" class="form-control step_1 cosigner_stepreq4" maxlength="255" id="coemp_previous_address" autocomplete="false" type="text"> 	
	</div>	   
	   
	   
	<div class="form-group">
		<div class="row">
		
		<div class="col-sm-4"> 
			<label class="">Phone<span style="color:#ff0000">*</span></label>
			<input name="coemp_previous_phone" class="form-control step_1 cosigner_stepreq4" maxlength="255" id="coemp_previous_phone" autocomplete="false" type="text" onkeydown="javascript:backspacerDOWN(this,event);"
			onkeyup="javascript:backspacerUP(this,event);" >
		</div>
		
		<div class="col-sm-4"> 
			<label class="">E-mail<span style="color:#ff0000">*</span></label>
			<input name="coemp_previous_e_mail" class="form-control step_1 cosigner_stepreq4" maxlength="255" id="coemp_previous_e_mail" autocomplete="false" type="email" onkeyup="ValidateEmail2(this.id,this.value);"> 
		</div>	
		
		<div class="col-sm-4"> 
			<label class="">Fax</label>
			<input name="coemp_previous_fax" class="form-control step_1 " maxlength="255" id="coemp_previous_fax" autocomplete="false" type="text"> 	
		</div>		
		
		</div>
	</div>	
	
	   
	   
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
		<label class="">City<span style="color:#ff0000">*</span></label>
		<input name="coemp_previous_city" class="form-control step_1 cosigner_stepreq4" maxlength="255" id="coemp_previous_city" autocomplete="false" type="text"> 	
	</div>
	
	<div class="col-sm-4"> 
	  <label class="">State<span style="color:#ff0000">*</span></label>
	  <select class="form-control cosigner_stepreq4" id="coemp_previous_state" name="coemp_previous_state">
	    <option value="">-State-</option> 
		<?php
		foreach( $con['state'] as $state){

		 echo "<option value='".$state->state."'>".$state->state."</option>";

		}
		?>  
	  </select>	
	</div>	
	
	<div class="col-sm-4"> 
		<label class="">Zip Code<span style="color:#ff0000">*</span></label>
		<input name="coemp_previous_zipcode" class="form-control step_1 cosigner_stepreq4" maxlength="255" id="coemp_previous_zipcode" autocomplete="false" type="text"> 	
	</div>
	
	
	</div>
</div>	


<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
		<label class="">Position<span style="color:#ff0000">*</span></label>
		<input name="coemp_previous_position" class="form-control step_1 cosigner_stepreq4" maxlength="255" id="coemp_previous_position" autocomplete="false" type="text"> 	
	</div>
	
	<div class="col-sm-4"> 
		<label class="radio-inline" >
		  <input type="radio" name="coemp_previous_hourly_salary" onclick="fun_coemp_previous_hourly_salary();" value="Salary">Salary
		</label> 
		
		 <label class="radio-inline">
		  <input type="radio" name="coemp_previous_hourly_salary" onclick="fun_coemp_previous_hourly_salary();" value="Hourly" checked>Hourly
		</label>	
		
		<label class="radio-inline css_hr" id="coemp_previous_hourly_value_main">
		 <input type="text" value="" id="coemp_previous_hourly_value" class="form-control" style="display:inline-block;">/Hour
		</label>
	</div>	
	
	<div class="col-sm-4"> 
	  <label class="">Annual Income<span style="color:#ff0000">*</span></label>	 
	  <select class="form-control cosigner_stepreq4" id="coemp_previous_annual_income" name="coemp_previous_annual_income">
	    <option value="">-Annual Income-</option> 
		<option value="0-10000">0-10000</option>
		<option value="10001 - 20000">10001 - 20000</option>
		<option value="20001 - 30000">20001 - 30000</option>
		<option value="30001 - 40000">30001 - 40000</option>
		<option value="40001 - 50000">40001 - 50000</option>
		<option value="50001 - 60000">50001 - 60000</option>
		<option value="60001 - 70000">60001 - 70000</option>
		<option value="70001 - 80000">70001 - 80000</option>
		<option value="80001 - 90000">80001 - 90000</option>
		<option value="90001 - 100000">90001 - 100000</option>
		<option value="100001 - 110000">100001 - 110000</option>
		<option value="110001 - 120000">110001 - 120000</option>
		<option value="120000+">120000+</option>		  
	  </select>	
	</div>
	
	
	</div>
</div> 
	

 
</div>
 
<div class="form-group">
	<div class="row">
		<div class="col-sm-12">
		
          <label class="">
		   <input type="checkbox"  value="agree" id="cosigner_status_co_app_agree" name="cosigner_status_co_app_agree" class="" style="display: inline-block;" value="agree"/>
		   Check here to indicate that you have read and agree to the terms of the "<a href="javascript:;" onclick="cosigner_status_co_app_agree();">Cosigner Disclaimer</a>"
		  </label>
		  
		</div>		
	</div>
</div>

</div>	
	
</div>

 								
									
<?php /*********************/ ?>								   
							   
							   
							   
							   
                                </div>
                            </div>
                        </div> 
						
						
                    </fieldset>
                </div>	


			<div class="tsf-step step-4">
                    <fieldset>
                        <legend>Co-Applicant Info</legend>
                        <div class="row">
                            <div class="tsf-step-content">
                                <div class="col-lg-12">
 <?php /*step 4*/?>	                                   
	
<div class="form-group">
	<div class="row"> 
	<div class="col-sm-12"> 

		<label>
		Will there be a Co-Applicant For this Application
		</label>
		<label class="radio-inline">
		<input type="radio" value="On" name="coapplicant_status_co_app" onclick="show_step4_con(1);">Yes
		</label>
		<label class="radio-inline">
		<input type="radio" value="Off" id="coapplicant_status_co_app" name="coapplicant_status_co_app" checked="true" onclick="show_step4_con(0);">No
		</label>  

	</div>	
	</div>	
</div>								 
									 
									 
<div class="step4_con" style="display:none;">
 
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4">
	<label class="">First Name<span style="color:#ff0000">*</span></label> 
	<input name="coapplicant_first_name" class="form-control step_1 coapplicant_stepreq" maxlength="255" id="coapplicant_first_name"  autocomplete="false" type="text">
	</div>
	
	<div class="col-sm-4">
	<label class="">Middle Name</label> 
	<input name="coapplicant_middle_name" class="form-control step_1 " maxlength="255" id="coapplicant_middle_name"  autocomplete="false" type="text">
	</div>

	<div class="col-sm-4">
	<label class="">Last Name<span style="color:#ff0000">*</span></label> 
	<input name="coapplicant_last_name" class="form-control  step_1 coapplicant_stepreq" maxlength="255" id="coapplicant_last_name"  autocomplete="false" type="text">
	</div>	
	
	</div>
	
</div>
               
                                
                                
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4">
	<label class="">D.O.B<span style="color:#ff0000">*</span></label> 
	<input name="coapplicant_dob" class="form-control step_1 form_date coapplicant_stepreq" maxlength="255" id="coapplicant_dob"  autocomplete="false" type="text"  data-date="" data-date-format="dd MM yyyy" data-link-field="coapplicant_dob" data-link-format="yyyy-mm-dd"> 
	</div>

	<div class="col-sm-4">
	<label class="">SSN<span style="color:#ff0000">*</span></label>
	<input name="coapplicant_ssn" id="coapplicant_ssn" class="form-control step_1 coapplicant_stepreq" step="any"   autocomplete="false" type="text"  maxlength="11" onkeyup = "myFunc(this.id)">
	</div>
	
	<div class="col-sm-4"> 
	<label class="">Phone<span style="color:#ff0000">*</span></label>
	<input name="coapplicant_phone" id="coapplicant_phone" class="form-control step_1 coapplicant_stepreq" step="any"   autocomplete="false" type="text" onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);" maxlength="14" >
	</div>
	
	
 
	</div>
	
</div>

<div class="form-group">
	<div class="row">
	
	<div class="col-sm-8"> 
	<label class="">Current Address<span style="color:#ff0000">*</span></label>	
	<input name="coapplicant_curraddress" class="form-control step_1 coapplicant_stepreq" maxlength="255" id="coapplicant_curraddress" autocomplete="false" type="text">	
	</div>
	
	<div class="col-sm-4"> 
	<label class="">E-mail<span style="color:#ff0000">*</span></label>
	<input name="coapplicant_e_mail" class="form-control step_1 cosigner_stepreq3" maxlength="255" id="coapplicant_e_mail" autocomplete="false" type="email" onkeyup="ValidateEmail2(this.id,this.value);"> 
	</div>
	
	</div>
</div>
         

						
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
	<label class="">City<span style="color:#ff0000">*</span></label>
	<input name="coapplicant_city" class="form-control step_1 coapplicant_stepreq" maxlength="255" id="coapplicant_city" autocomplete="false" type="text"> 
	
	</div>
	
	<div class="col-sm-4"> 
	   <label class="">State<span style="color:#ff0000">*</span></label>	 
	  <select class="form-control coapplicant_stepreq " id="coapplicant_state" name="coapplicant_state">
	    <option value="">-State-</option> 
		<?php
		foreach( $con['state'] as $state){

		 echo "<option value='".$state->state."'>".$state->state."</option>";

		}
		?>  
	  </select>		
	
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">Zip Code<span style="color:#ff0000">*</span></label>
	<input name="coapplicant_zipcode" class="form-control step_1 coapplicant_stepreq" maxlength="255" id="coapplicant_zipcode" autocomplete="false" type="text"> 	
	</div>
	
	
	</div>
</div>
 

<div class="form-group">
 <div class="row">
	
	<div class="col-sm-2"> 	  
    <label class="radio-inline">
      <input type="radio" name="coapplicant_own_rent" onclick="pay_ownrent_5();" value="Own" checked>Own
    </label>
    <label class="radio-inline" >
      <input type="radio" name="coapplicant_own_rent" onclick="pay_ownrent_5();" value="Rent">Rent
    </label> 
	</div>
	
	<div class="col-sm-5"> 	 
	  <label class="" id="coapplicant_monthly_payment_or_rent_label">Monthly Payment or Rent<span style="color:#ff0000">*</span></label> 
	  <select class="form-control coapplicant_stepreq" id="coapplicant_monthly_payment_or_rent" name="coapplicant_monthly_payment_or_rent">
			<option value="" id="coapplicant_monthly_payment_or_rent_opt">-Rent-</option> 	
			<option value="0 - 500">0 - 500</option>  
			<option value="501 - 1000">501 - 1000</option> 
			<option value="1001 -1500">1001 -1500</option> 
			<option value="1501 - 2000">1501 - 2000</option> 
			<option value="2001 - 2500">2001 - 2500</option> 
			<option value="2501 - 3000">2501 - 3000</option> 
			<option value="3000+">3000+ </option>  	
	  </select>		
	
	
	</div>
	
	<div class="col-sm-5"> 	 
	  <label class="">How Long?<span style="color:#ff0000">*</span></label>	
	  <select class="form-control coapplicant_stepreq" id="coapplicant_how_long" name="coapplicant_how_long">
	    <option selected="selected" value="">-How Long?-</option> 
		<option value="0-6 months">0-6 months</option>
		<option value="6-12 Months">6-12 Months</option>
		<option value="12-18 Months">12-18 Months</option>
		<option value="18-24 Months">18-24 Months</option>
		<option value="More than 24 months">More than 24 months</option>
	  </select>	
	</div>
 </div>
</div>		 
  
<div id="coapplicant_how_long_main" style="display:none;">
  
	<div class="form-group" >
		<label class="">Previous Address<span style="color:#ff0000">*</span></label>
		<input name="coapplicant_previous_address" class="form-control step_1 coapplicant_stepreq2" maxlength="255" id="coapplicant_previous_address" autocomplete="false" type="text"> 	
	</div>
         

							
	<div class="form-group">
		<div class="row">
		
		<div class="col-sm-4"> 
		<label class="">City<span style="color:#ff0000">*</span></label>
		<input name="coapplicant_previous_city" class="form-control step_1 coapplicant_stepreq2" maxlength="255" id="coapplicant_previous_city" autocomplete="false" type="text"> 
		
		</div>
		
		<div class="col-sm-4"> 
		<label class="">State<span style="color:#ff0000">*</span></label>	
		  <select class="form-control coapplicant_stepreq2" id="coapplicant_previous_state" name="coapplicant_previous_state">
			<option selected value="">-State-</option> 
			<?php
			foreach( $con['state'] as $state){

			 echo "<option value='".$state->state."'>".$state->state."</option>";

			}
			?>  
		  </select>			
		
		</div>	
		
		<div class="col-sm-4"> 
		<label class="">Zip Code<span style="color:#ff0000">*</span></label>
		<input name="coapplicant_previous_zipcode" class="form-control step_1 coapplicant_stepreq2" maxlength="255" id="coapplicant_previous_zipcode" autocomplete="false" type="text"> 	
		</div>
		
		
		</div>
	</div>


<div class="form-group">
 <div class="row">
	
	<div class="col-sm-2"> 	  
    <label class="radio-inline">
      <input type="radio" name="coapplicant_previous_own_rent" onclick="pay_ownrent_2();" value="Own" checked>Own
    </label>
    <label class="radio-inline" >
      <input type="radio" name="coapplicant_previous_own_rent" onclick="pay_ownrent_2();" value="Rent">Rent
    </label> 
	</div>
	
	<div class="col-sm-5"> 
	   <label class="" id="coapplicant_previous_own_rent_label">Monthly Payment or Rent<span style="color:#ff0000">*</span></label>
	  <select class="form-control coapplicant_stepreq2" id="coapplicant_previous_monthly_payment_or_rent" name="coapplicant_previous_monthly_payment_or_rent">
			<option selected value="" id="coapplicant_previous_own_rent_opt">-Rent-</option> 	
			<option value="0 - 500">0 - 500</option>  
			<option value="501 - 1000">501 - 1000</option> 
			<option value="1001 -1500">1001 -1500</option> 
			<option value="1501 - 2000">1501 - 2000</option> 
			<option value="2001 - 2500">2001 - 2500</option> 
			<option value="2501 - 3000">2501 - 3000</option> 
			<option value="3000+">3000+ </option>  	
	  </select>	 
	</div> 
 
 </div>
</div>
 

</div>


<div class="form-group">
	<div class="row">
		<div class="col-sm-12">		
          <label class="">
		   <input   value="agree" id="coapplicant_status_co_app_agree" style="display: inline-block;" name="coapplicant_status_co_app_agree" type="checkbox" class="">
		   Check here to indicate that you have read and agree to the terms of the "<a href="javascript:;" onclick="coapplicant_status_co_app_agree();">Co-Applicant Disclaimer</a>"
		  </label>
		  
		</div>		
	</div>
</div>
     
    </div>
<?php /*step 4*/?>									
									
									
									
									
                                </div>
                            </div>
                        </div>  
                    </fieldset>
                </div>


		 


			<div class="tsf-step step-5">
                    <fieldset>
                           <legend>References</legend>
                        <div class="row">
                            <div class="tsf-step-content">
                                <div class="col-lg-12">
                                    
<?php /**/ ?>	

  
<div class="form-group">

	<div class="row">
 
	
	
	<div class="col-sm-4"> 

	<label class="">Name:</label>
	<input name="ref_name" id="ref_name"  class="form-control step_2 stepreq required" maxlength="255" autocomplete="false" type="text" placeholder="Reference 1">
	</div>
	
	<div class="col-sm-4"> 
	<label class="">Address:</label>
	<input name="ref_address" id="ref_address"  class="form-control step_2 stepreq required" maxlength="255" autocomplete="false" type="text"> 	
	</div>

	<div class="col-sm-4">	
	<label class="">Phone:</label>
	<input name="ref_phone" id="ref_phone"  class="form-control step_2 stepreq required" maxlength="255" autocomplete="false" type="text" onkeydown="javascript:backspacerDOWN(this,event);"
onkeyup="javascript:backspacerUP(this,event);" placeholder="(xxx)xxx-xxxx"> 	
	</div>	
	</div>
</div>
 
  
<div class="form-group">

	<div class="row">
 
	
	
	<div class="col-sm-4"> 

 
	<input name="ref2_name" id="ref2_name"  class="form-control step_2 " maxlength="255" autocomplete="false" type="text" placeholder="Reference 2">
	</div>
	
	<div class="col-sm-4"> 
 
	<input name="ref2_address" id="ref2_address"  class="form-control step_2 " maxlength="255" autocomplete="false" type="text" > 	
	</div>

	<div class="col-sm-4">	
 
	<input name="ref2_phone" id="ref2_phone"  class="form-control step_2 " maxlength="255" autocomplete="false" type="text" onkeydown="javascript:backspacerDOWN(this,event);"
onkeyup="javascript:backspacerUP(this,event);" placeholder="(xxx)xxx-xxxx"> 	
	</div>	
	</div>
</div>

 
 
  
<div class="form-group">

	<div class="row"> 
	
	<div class="col-sm-4"> 
	<input name="ref3_name" id="ref3_name"  class="form-control step_2 " maxlength="255" autocomplete="false" type="text" placeholder="Reference 3">
	</div>
	
	<div class="col-sm-4">
	<input name="ref3_address" id="ref3_address"  class="form-control step_2 " maxlength="255" autocomplete="false" type="text"> 	
	</div>

	<div class="col-sm-4">	
	<input name="ref3_phone" id="ref3_phone"  class="form-control step_2 " maxlength="255" autocomplete="false" type="text" onkeydown="javascript:backspacerDOWN(this,event);"
onkeyup="javascript:backspacerUP(this,event);" placeholder="(xxx)xxx-xxxx"> 	
	</div>	
	</div>
</div>

								
<?php /**/ ?>									
									
									
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
                <button type="button" data-type="finish" class="btn btn-right tsf-wizard-btn submit">
                    FINISH
                </button>
            </div>
        </div>
    </div>
	
</div>
</div>	
             
 <br>
 <br>
 <br>
	

<script async="" src="https://www.google-analytics.com/analytics.js"></script>
<script src="{{ URL::asset('frontend/assets/') }}/form/jquery-3.1.0.min.js"></script>
<script src="{{ URL::asset('frontend/assets/') }}/form/demo.js"></script>

<!--Plugin for validation-->
<script src="{{ URL::asset('frontend/assets/') }}/form/parsley.min.js"></script>
<script src="{{ URL::asset('frontend/assets/') }}/form/tsf-wizard-plugin.js"></script>

<?php /*popup*/ ?>
		
<div class="popupcss modal fade " id="myModal2" role="dialog">
		<div class="modal-dialog "> <!--modal-lg -->
		
		
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					 <h4 class="modal-title">FAIR CREDIT REPORTING ACT TO CONSUMER</h4> 
				</div>
				
				<div class="modal-body" id="">
					
					    
						<div class="modal-body"> 							 
							 <p>
							  This will advise your retail installment sales contract and buyer’s application for secured debt will be summited to financial institutions and their affiliates for purchase and consideration as to whether you meet their credit requirements. The undersigned further authorizes these financial institution and their affiliates to obtain such information that they may require in order to verify information relative to this request including contacting spouses to verify spouse related information. I certify that all the information given by me on this application is complete and accurate. I give my permission for any financial institution which will review this credit application, to investigate my credit and employment history, and to answer questions about their credit experience with me including but not limited to late payments, missed payments or other defaults and this information may be reported in your credit report.
							  </p> 
						 	 
							<div class="checkbox">
							<label><input type="checkbox"  name="termaccept" id="termaccept"  value="1">Accept Term & Condition</label>
							</div> 	 
						 </div>	

							<div class="modal-footer">
							 
							<button  name="button"  class="submit btn  btn-icon cust-button"><i class="fa fa-check"></i> Save</button>
							
							<button type="button" class="btn btn-default btn-icon btn-cancel" data-dismiss="modal"><i class="fa fa-times-circle"></i> Cancel</button>
							</div> 
				</div>
	 
			</div>
		</div>
	</div>
</div>	
<?php /*popup*/?>




<?php /*popup*/ ?>
		
<div class="popupcss modal fade " id="myModal3" role="dialog">
		<div class="modal-dialog "> <!--modal-lg -->
		
		
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					 <h4 class="modal-title">Cosigner Disclaimer</h4> 
				</div>
				
				<div class="modal-body" id="">
					
					    
						<div class="modal-body"> 							 
							 <p>
							 <b>Pease Note:</b>Cartersville Trucks is not a financial institution and does not offer financing of any kind. For buyers who are seeking financing, Cartersville Trucks provides referrals to financial institutions which we have established relationships. </p>
							 
							 
<p>Co-applicants legally agree to share the property and the responsibility for repayment of the loan. A  <b>Co-Signer </b>, while ultimately liable for the loan amount, typically does not share in the ownership of the property.</p>

<p>As the Co-Signer, <br>
 <b>(1) </b>	You agree to have your personal credit history evaluated for the purchase of a vehicle<br>
 <b>(2) </b>	You agree to accept financial responsibility in the event the borrower does not fulfill any aspect of the financing of the vehicle, and<br>
 <b>(3) </b>	You understand your name does not automatically appear on the title of the vehicle as a result of your agreeing to serve as a cosigner for the vehicle. In order to have your name appear on the title of the vehicle, you must also request to be added as a co-applicant on the vehicle. </p>


<p>You are being asked to guarantee this debt. Think carefully before you agree to serve as a cosigner. If the borrower does not pay the debt, you will be held responsible for the debt in its entirety. </p>

<p>
You may have to pay up to the full amount of the debt if the borrower does not pay. You may also have to pay late fees or collection costs, which increase this amount. </p>


<p>The creditor can collect this debt from you without first trying to collect from the borrower. The creditor can use the same collection methods against you that can be used against the borrower, such as suing you, garnishing your wages, etc. If this debt is ever in default, it may become part of your credit record. </p>


<p>You promise that the information stated in this Loan Application is true and correct to the best of your knowledge. The financing institution and/or dealership or their agents are authorized to investigate your credit worthiness, employment history, and to obtain a credit report and to answer questions about its credit history with you. </p>


<p>The financing institution and/or dealership may also obtain credit reports to update, increase, extend or renew credit with you. False or misleading statements in your application may cause any loan to be in default. You agree that this application shall be the financing institution and/or dealership’s property whether or not this application is approved. You will notify the financing institution and/or dealership in writing immediately of any changes in your name, address or employment. </p>

<p>You understand that it is a crime to willfully and deliberately provide incomplete or incorrect information to obtain credit. If you request, you will be provided the name and address of any credit bureau from which we received a credit report. The USA Patriot Act requires that we verify the identity of all account holders. We may ask you or your co-borrower to show proof of your identity.</p> 

							  </p> 
						  	 
						 </div>	

							<div class="modal-footer"> 
 
							<button type="button" class="btn btn-default btn-icon btn-cancel-div" data-dismiss="modal">  Ok</button>
							</div> 
				</div>
	 
			</div>
		</div>
	</div>
</div>	
<?php /*popup*/?>




<?php /*popup*/ ?>
		
<div class="popupcss modal fade " id="myModal4" role="dialog">
		<div class="modal-dialog "> <!--modal-lg -->
		
		
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					 <h4 class="modal-title">Co-Applicant Disclaimer</h4> 
				</div>
				
				<div class="modal-body" id="">
					
					    
						<div class="modal-body"> 							 
							 <p>
							<b> Please Note:</b> Cartersville Trucks is not a financial institution and does not offer financing of any kind. For buyers who are seeking financing, Cartersville Trucks provides referrals to financial institutions which we have established relationships.</p>
<p>A <b>Co-Applicant</b> legally agree to share the property and the responsibility for repayment of the loan. A co-signer, while ultimately liable for the loan amount, typically does not share in the ownership of the property.</p>

<p>As the Co-Applicant, <br>
 <b>(1) </b>	You agree to have your personal credit history evaluated for the purchase of a vehicle<br>
 <b>(2) </b>	You agree to accept financial responsibility in the event the borrower does not fulfill any aspect of the financing of the vehicle, and<br>
 <b>(3) </b>	Your name will appear on the title of the vehicle as a result of your agreeing to serve as a co-applicant for the vehicle. </p>


<p>You are being asked to guarantee this debt. Think carefully before you agree to serve as a cosigner. If the borrower does not pay the debt, you will be held responsible for the debt in its entirety. </p>
<p>You may have to pay up to the full amount of the debt if the borrower does not pay. You may also have to pay late fees or collection costs, which increase this amount. </p>
<p>The creditor can collect this debt from you without first trying to collect from the borrower. The creditor can use the same collection methods against you that can be used against the borrower, such as suing you, garnishing your wages, etc. If this debt is ever in default, it may become part of your credit record. </p>
<p>You promise that the information stated in this Loan Application is true and correct to the best of your knowledge. The financing institution and/or dealership or their agents are authorized to investigate your credit worthiness, employment history, and to obtain a credit report and to answer questions about its credit history with you. </p>
<p>The financing institution and/or dealership may also obtain credit reports to update, increase, extend or renew credit with you. False or misleading statements in your application may cause any loan to be in default. You agree that this application shall be the financing institution and/or dealership’s property whether or not this application is approved. You will notify the financing institution and/or dealership in writing immediately of any changes in your name, address or employment. </p>
<p>You understand that it is a crime to willfully and deliberately provide incomplete or incorrect information to obtain credit. If you request, you will be provided the name and address of any credit bureau from which we received a credit report. The USA Patriot Act requires that we verify the identity of all account holders. We may ask you or your co-borrower to show proof of your identity. 

							  </p> 
						 	 
			  
						 </div>	

							<div class="modal-footer">  
							<button type="button" class="btn btn-default btn-icon btn-cancel-div" data-dismiss="modal">  Ok</button>
							</div> 
				</div>
	 
			</div>
		</div>
	</div>
</div>	
<?php /*popup*/?>
	
<style>
.form-group input[type="checkbox"] {
    display: none;
}

.form-group input[type="checkbox"] + .btn-group > label span {
    width: 20px;
}

.form-group input[type="checkbox"] + .btn-group > label span:first-child {
    display: none;
}
.form-group input[type="checkbox"] + .btn-group > label span:last-child {
    display: inline-block;   
}

.form-group input[type="checkbox"]:checked + .btn-group > label span:first-child {
    display: inline-block;
}
.form-group input[type="checkbox"]:checked + .btn-group > label span:last-child {
    display: none;   
}
</style>	
	
	
	 	
	
<script>

fun_emp_hourly_salary(); 
fun_coemp_hourly_salary(); 
fun_emp_previous_hourly_salary();
fun_coemp_previous_hourly_salary()

function fun_emp_hourly_salary(){

  var emp_hourly_salary=$('input[name=emp_hourly_salary]:checked').val();
   
  	if(emp_hourly_salary=='Hourly'){
	   
	   
	   $('#emp_hourly_value_main').css('display','inline-block');
	   
	   
	   
	}else{
	
	  $('#emp_hourly_value_main').css('display','none');
	  
	 
	}
  

}



function fun_coemp_hourly_salary(){

  var coemp_hourly_salary=$('input[name=coemp_hourly_salary]:checked').val();
  
  	if(coemp_hourly_salary=='Hourly'){  
	   
	   $('#coemp_hourly_value_main').css('display','inline-block');
	   
	}else{
	
	  $('#coemp_hourly_value_main').css('display','none');
	
	}
  

}

function fun_emp_previous_hourly_salary(){

  var emp_previous_hourly_salary=$('input[name=emp_previous_hourly_salary]:checked').val();
  
  	if(emp_previous_hourly_salary=='Hourly'){  
	   
	   $('#emp_previous_hourly_value_main').css('display','inline-block');
	   
	}else{
	
	  $('#emp_previous_hourly_value_main').css('display','none');
	
	}
  

}
 
 function fun_coemp_previous_hourly_salary(){

  var coemp_previous_hourly_salary=$('input[name=coemp_previous_hourly_salary]:checked').val();
  
  	if(coemp_previous_hourly_salary=='Hourly'){  
	   
	   $('#coemp_previous_hourly_value_main').css('display','inline-block');
	   
	}else{
	
	  $('#coemp_previous_hourly_value_main').css('display','none');
	
	}
  

}
 
 
 
pay_ownrent_1();
pay_ownrent_2();
pay_ownrent_3();
pay_ownrent_4();
pay_ownrent_5();

function pay_ownrent_1(){

  var appinfo_own_rent=$('input[name=appinfo_own_rent]:checked').val();
  
  	if(appinfo_own_rent=='Own'){
	   
	   
	   $('#appinfo_monthly_payment_or_rent_label').html('Monthly Mortgage Payments <span style="color:#ff0000">*</span>');
	   $('#appinfo_monthly_payment_or_rent_opt').html('--Mortgage--');
	   
	   
	   
	}else{
	
	  $('#appinfo_monthly_payment_or_rent_label').html('Monthly payment or rent <span style="color:#ff0000">*</span>');
	  
	   $('#appinfo_monthly_payment_or_rent_opt').html('--Rent--');
	  
	 
	}
  

}


function pay_ownrent_2(){

  var appinfo_own_rent=$('input[name=appinfo_previous_own_rent]:checked').val();
  
  	if(appinfo_own_rent=='Own'){
	   
	   
	   $('#appinfo_previous_own_rent_label').html('Monthly Mortgage Payments <span style="color:#ff0000">*</span>');
	   $('#appinfo_previous_own_rent_opt').html('--Mortgage--');
	   
	   
	   
	}else{
	
	  $('#appinfo_previous_own_rent_label').html('Monthly payment or rent <span style="color:#ff0000">*</span>');
	  
	   $('#appinfo_previous_own_rent_opt').html('--Rent--');
	} 
}


function pay_ownrent_3(){

  var cosigner_own_rent=$('input[name=cosigner_own_rent]:checked').val();
 
  	if(cosigner_own_rent=='Own'){
	   
	   $('#cosigner_own_rent_label').html('Monthly Mortgage Payments <span style="color:#ff0000">*</span>');
	   $('#cosigner_own_rent_opt').html('--Mortgage--');
	   
	}else{
	
	  $('#cosigner_own_rent_label').html('Monthly payment or rent <span style="color:#ff0000">*</span>');
	   $('#cosigner_own_rent_opt').html('--Rent--');
	} 
}


function pay_ownrent_4(){


  var cosigner_previous_own_rent=$('input[name=cosigner_previous_own_rent]:checked').val();
 
	
  	if(cosigner_previous_own_rent=='Own'){
	   
	   
	   $('#cosigner_previous_own_rent_label').html('Monthly Mortgage Payments <span style="color:#ff0000">*</span>');
	   $('#cosigner_previous_own_rent_opt').html('--Mortgage--');
	   
	   
	   
	}else{
	
	  $('#cosigner_previous_own_rent_label').html('Monthly payment or rent <span style="color:#ff0000">*</span>');
	  
	   $('#cosigner_previous_own_rent_opt').html('--Rent--');
	} 
}


function pay_ownrent_5(){


  var coapplicant_own_rent=$('input[name=coapplicant_own_rent]:checked').val();
 
	
  	if(coapplicant_own_rent=='Own'){
	   
	   
	   $('#coapplicant_monthly_payment_or_rent_label').html('Monthly Mortgage Payments <span style="color:#ff0000">*</span>');
	   $('#coapplicant_monthly_payment_or_rent_opt').html('--Mortgage--');
	   
	   
	   
	}else{
	
	  $('#coapplicant_monthly_payment_or_rent_label').html('Monthly payment or rent <span style="color:#ff0000">*</span>');
	  
	   $('#coapplicant_monthly_payment_or_rent_opt').html('--Rent--');
	} 
}


function cosigner_status_co_app_agree(){

$("body").addClass("modal-open");
$("#myModal3").addClass("in");
$("#myModal3").css("display","block"); 

}

function coapplicant_status_co_app_agree(){

$("body").addClass("modal-open");
$("#myModal4").addClass("in");
$("#myModal4").css("display","block"); 

}

	
 $(document).ready(function(){
        $('#cosigner_status').click(function(){
            $('.step4_con').toggle('slow');
        });
		
		$('#cosigner_status_co_app').click(function(){
            
			 
			$('.step3_con').slideDown('slow'); 
			
			 
        });
		
		
		
		$('#cosigner_status_co_app_off').click(function(){ 
			
			$('.step3_con').slideUp('slow'); 
        });		
		
		
		$('#cosigner_status_co_app_2').click(function(){
            
			 
			$('.step4_con').slideDown('slow'); 
			
			 
        });
		
		
		
		$('#cosigner_status_co_app_2_off').click(function(){ 
			
			$('.step4_con').slideUp('slow'); 
        });			
		
		
		
		
	
	$( "#appinfo_how_long" ).change(function() {
	   
	   var appinfo_how_long = $('select#appinfo_how_long option:selected').val();
	   if(appinfo_how_long!='More than 24 months' &&  appinfo_how_long!=''){
	   
	   
	     $(".app_stepreq2").addClass("required");
	   
	    $('#appinfo_how_long_main').show('slow');
	   }else{
	   
	    $(".app_stepreq2").removeClass("required");
	   $('#appinfo_how_long_main').hide('slow');
	   }
	   
	});	


	$( "#emp_how_long" ).change(function() {
	
	   var emp_how_long = $('select#emp_how_long option:selected').val();
	   if(emp_how_long!='More than 24 months' &&  emp_how_long!=''){
	   
		$(".emp_stepreq2").addClass("required");
		
	    $('#emp_how_long_main').show('slow');
	   }else{
	   
	   $(".emp_stepreq2").removeClass("required");
	   
	   $('#emp_how_long_main').hide('slow');
	   }
	   
	});		
	
	
	$( "#coappinfo_how_long" ).change(function() {
	   
	   var coappinfo_how_long = $('select#coappinfo_how_long option:selected').val();
	   if(coappinfo_how_long!='More than 24 months' &&  coappinfo_how_long!=''){
	   
	    $('#coappinfo_how_long_main').show('slow');
	   }else{
	   $('#coappinfo_how_long_main').hide('slow');
	   }
	   
	});		
	
	
	/*step 3*/
	
	$( "#cosigner_how_long" ).change(function() {
	   
	   var cosigner_how_long = $('select#cosigner_how_long option:selected').val();
	   if(cosigner_how_long!='More than 24 months' &&  cosigner_how_long!=''){
	     
		 $(".cosigner_stepreq2").addClass("required");
	    $('#cosigner_how_long_main').show('slow');
	   }else{
	   $(".cosigner_stepreq2").removeClass("required");
	   $('#cosigner_how_long_main').hide('slow');
	   }
	   
	});	
	
	$( "#coemp_how_long" ).change(function() {
	   
	   var coemp_how_long = $('select#coemp_how_long option:selected').val();
		
	   
	   if(coemp_how_long!='More than 24 months' &&  coemp_how_long!=''){
			
		  $(".cosigner_stepreq4").addClass("required");
	      $('#coemp_how_long_main').show('slow');   
		  
	   }else{
	   
		  $(".cosigner_stepreq4").removeClass("required");
	      $('#coemp_how_long_main').hide('slow');
	   }
	   
	});		
	
	
	
	
	/*step 3*/
	
	/*step 4*/
	
	$( "#coapplicant_how_long" ).change(function() {
	   
	   var coapplicant_how_long = $('select#coapplicant_how_long option:selected').val();
		
	   
	   if(coapplicant_how_long!='More than 24 months' &&  coapplicant_how_long!=''){
	  
			$(".coapplicant_stepreq2").addClass("required");
	      $('#coapplicant_how_long_main').show('slow');   
	   }else{
	      $(".coapplicant_stepreq2").removeClass("required");
	      $('#coapplicant_how_long_main').hide('slow');
		
	   }
	   
	});		
	
	/*step 4*/
	
	
	
	
	

	$('.btn-cancel').click(function() {
			 
				/* return confirm("Are you sure?");*/ 
				
				$("body").removeClass("modal-open");
				$("#myModal2").removeClass("in");
				$("#myModal2").css("display","none");				
				$('#termaccept').attr('checked', false);
				$('#termaccept').prop('checked', false);
				$("#myModal").removeClass("in");
				$("#myModal").css("display","none");				
				
	 
	 });	
	
	$('.btn-cancel-div').click(function() {
		$("body").removeClass("modal-open");
		$(".popupcss").removeClass("in");
		$(".popupcss").css("display","none");				

		$(".popupcss").removeClass("in");
		$(".popupcss").css("display","none");	

	 });
	
    });	

	
	
	
        $(function () {
            pageLoadScript();
			$('button.submit').text('Submit');
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
						 
						/*$('#result').append('onNextClick from ' + from + ' - to ' + to + ' validation ' + validation)*/
						 

						if(validation==false){
						   
						   
							$(".display-block").show("slow"); 			   
					   
							setTimeout(function() {
								 
								 $(".display-block").hide('slow');
								 
							}, 5000);						   
						   
						
						}	
 	
						
						
						
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
 
 $(function() {

 
$('.step_1').val("");
$('.form-control').val("");

$('.stepreq').val("");
$('.app_stepreq').val(""); 
$('.app_stepreq2').val("");

$('.emp_stepreq').val("");
$('.emp_stepreq2').val("");

$('.cosigner_stepreq').val("");
$('.cosigner_stepreq2').val("");
$('.cosigner_stepreq3').val("");
$('.cosigner_stepreq4').val("");

$('.coapplicant_stepreq').val("");
$('.coapplicant_stepreq2').val("");
 

$("option:selected").prop("selected", false); 
 
$("#cosigner_status_co_app_id").attr('checked', true);
$('#cosigner_status_co_app_id').prop('checked', true);

$("#coapplicant_status_co_app").attr('checked', true);
$('#coapplicant_status_co_app').prop('checked', true);

$('#termaccept').attr('checked', false); 
$('#termaccept').prop('checked', false);
 
 

$(".submit").click(function(){ 

 /*has-error*/
 
var ii=1; 
$('input,select').removeClass("has-error");


/****** step 1 ******/

$('.required').each(function(){   

    if(!/[\S]/.test($(this).html())) {  
		  
		  
		  if($(this).val()==""){
		  
				$(".display-block").show("slow"); 
		   
				setTimeout(function() {
					 $(".display-block").hide('slow');
				}, 5000);		  
		  ii=0; 
		  
		  $(this).addClass("has-error");
		  
		  }
		  
    } 
	
}) 

  



 
if(ii==0){  return false; }else{  $(".display-block").css("display","none");  


 
/*submit*/



var homeurl=$("#homeurl").val();



/******************* step 1*/
var appinfo_first_name=$("#appinfo_first_name").val();
var appinfo_middle_name=$("#appinfo_middle_name").val();
var appinfo_last_name=$("#appinfo_last_name").val();
var appinfo_dob=$("#appinfo_dob").val();
var appinfo_ssn=$("#appinfo_ssn").val();

var appinfo_phone=$("#appinfo_phone").val();
var appinfo_curraddress=$("#appinfo_curraddress").val();
var appinfo_city=$("#appinfo_city").val();

var appinfo_state = $('select#appinfo_state option:selected').val();

var appinfo_zipcode=$("#appinfo_zipcode").val();

var appinfo_own_rent=$('input[name=appinfo_own_rent]:checked').val();


var appinfo_monthly_payment_or_rent=$("#appinfo_monthly_payment_or_rent").val();
/*var appinfo_how_long=$("#appinfo_how_long").val();*/

var appinfo_how_long = $('select#appinfo_how_long option:selected').val();


var appinfo_previous_address=$("#appinfo_previous_address").val();
var appinfo_previous_city=$("#appinfo_previous_city").val();

var appinfo_previous_state = $('select#appinfo_previous_state option:selected').val();

var appinfo_previous_zipcode=$("#appinfo_previous_zipcode").val();

var appinfo_previous_own_rent=$('input[name=appinfo_previous_own_rent]:checked').val();

var appinfo_previous_monthly_payment_or_rent=$("#appinfo_previous_monthly_payment_or_rent").val();


/******************* step 1*/


/******************* step 2*/

var emp_current_employer=$("#emp_current_employer").val();
var emp_employer_address=$("#emp_employer_address").val();
var emp_phone=$("#emp_phone").val();

var cosigner_e_mail=$("#cosigner_e_mail").val();
var emp_fax='';
/**/


var emp_city=$("#emp_city").val();
var emp_state = $('select#emp_state option:selected').val();
var emp_zipcode=$("#emp_zipcode").val();
var emp_position=$("#emp_position").val();

var emp_hourly_salary=$('input[name=emp_hourly_salary]:checked').val();

var emp_hourly_value=$("#emp_hourly_value").val();
/*var emp_how_long=$("#emp_how_long").val(); */

var emp_how_long = $('select#emp_how_long option:selected').val();

var emp_previous_address=$("#emp_previous_address").val(); 
var emp_previous_phone=$("#emp_previous_phone").val(); 
var emp_previous_e_mail=$("#emp_previous_e_mail").val(); 
var emp_previous_fax=$("#emp_previous_fax").val(); 
var emp_previous_city=$("#emp_previous_city").val(); 

var emp_previous_state = $('select#emp_previous_state option:selected').val();


var emp_previous_zipcode=$("#emp_previous_zipcode").val(); 
var emp_previous_position=$("#emp_previous_position").val(); 

var emp_previous_hourly_salary=$('input[name=emp_previous_hourly_salary]:checked').val();

var emp_previous_hourly_value_main=$("#emp_previous_hourly_value").val();


 
var emp_previous_annual_income=$("#emp_previous_annual_income").val(); 

/******************* step 2*/


/******************* step 3*/
var cosigner_status_co_app=$('input[name=cosigner_status_co_app]:checked').val();

var cosigner_first_name=$("#cosigner_first_name").val(); 
var cosigner_middle_name=$("#cosigner_middle_name").val(); 
var cosigner_last_name=$("#cosigner_last_name").val(); 
var cosigner_dob=$("#cosigner_dob").val(); 
var cosigner_ssn=$("#cosigner_ssn").val(); 
var cosigner_phone=$("#cosigner_phone").val(); 

var cosigner_curraddress=$("#cosigner_curraddress").val(); 
var cosigner_city=$("#cosigner_city").val(); 
var cosigner_state=$("#cosigner_state").val(); 
var cosigner_zipcode=$("#cosigner_zipcode").val(); 


var cosigner_own_rent=$('input[name=cosigner_own_rent]:checked').val();

var cosigner_monthly_payment_or_rent=$("#cosigner_monthly_payment_or_rent").val(); 

var cosigner_how_long = $('select#cosigner_how_long option:selected').val();

var cosigner_previous_address=$("#cosigner_previous_address").val(); 
var cosigner_previous_city=$("#cosigner_previous_city").val(); 

var cosigner_previous_state = $('select#cosigner_previous_state option:selected').val();

var cosigner_previous_zipcode=$("#cosigner_previous_zipcode").val(); 

var cosigner_previous_own_rent=$('input[name=cosigner_previous_own_rent]:checked').val();


var cosigner_previous_monthly_payment_or_rent=$("#cosigner_previous_monthly_payment_or_rent").val(); 
var coemp_current_employer=$("#coemp_current_employer").val(); 
var coemp_employer_address=$("#coemp_employer_address").val(); 

var coemp_phone=$("#coemp_phone").val(); 
var appinfo_e_mail=$("#appinfo_e_mail").val(); 
var coapplicant_e_mail=$("#coapplicant_e_mail").val(); 

var coemp_fax='';
/**/

 
var coemp_city=$("#coemp_city").val(); 

var coemp_state=$("#coemp_state").val(); 
var coemp_zipcode=$("#coemp_zipcode").val(); 
var coemp_position=$("#coemp_position").val(); 
 
var coemp_hourly_salary=$('input[name=coemp_hourly_salary]:checked').val();

var coemp_hourly_value=$("#coemp_hourly_value").val(); 
 
var coemp_how_long = $('select#coemp_how_long option:selected').val();

var coemp_previous_address=$("#coemp_previous_address").val(); 
var coemp_previous_phone=$("#coemp_previous_phone").val(); 
var coemp_previous_e_mail=$("#coemp_previous_e_mail").val(); 

var coemp_previous_fax=$("#coemp_previous_fax").val(); 
var coemp_previous_city=$("#coemp_previous_city").val(); 

var coemp_previous_state = $('select#coemp_previous_state option:selected').val();

var coemp_previous_zipcode=$("#coemp_previous_zipcode").val(); 
var coemp_previous_position=$("#coemp_previous_position").val();

var coemp_previous_hourly_salary=$('input[name=coemp_previous_hourly_salary]:checked').val();
 
var coemp_previous_hourly_value=$("#coemp_previous_hourly_value").val(); 

var coemp_previous_annual_income = $('select#coemp_previous_annual_income option:selected').val();

var cosigner_status_co_app_agree=$('input[name=cosigner_status_co_app_agree]:checked').val();


/******************* step 3*/


/******************* step 4*/

var coapplicant_status_co_app=$('input[name=coapplicant_status_co_app]:checked').val();
var coapplicant_first_name=$("#coapplicant_first_name").val(); 
var coapplicant_middle_name=$("#coapplicant_middle_name").val(); 
var coapplicant_last_name=$("#coapplicant_last_name").val(); 
var coapplicant_dob=$("#coapplicant_dob").val(); 
var coapplicant_ssn=$("#coapplicant_ssn").val(); 
var coapplicant_phone=$("#coapplicant_phone").val(); 
var coapplicant_curraddress=$("#coapplicant_curraddress").val(); 
var coapplicant_city=$("#coapplicant_city").val(); 

var coapplicant_state = $('select#coapplicant_state option:selected').val(); 
var coapplicant_zipcode=$("#coapplicant_zipcode").val();

var coapplicant_own_rent=$('input[name=coapplicant_own_rent]:checked').val();

var coapplicant_monthly_payment_or_rent=$("#coapplicant_monthly_payment_or_rent").val();

 
var coapplicant_how_long = $('select#coapplicant_how_long option:selected').val(); 


var coapplicant_previous_address=$("#coapplicant_previous_address").val();
var coapplicant_previous_city=$("#coapplicant_previous_city").val();
var coapplicant_previous_state=$("#coapplicant_previous_state").val();
var coapplicant_previous_zipcode=$("#coapplicant_previous_zipcode").val();
var coapplicant_previous_own_rent=$("#coapplicant_previous_own_rent").val();

var coapplicant_previous_monthly_payment_or_rent = $('select#coapplicant_previous_monthly_payment_or_rent option:selected').val(); 
 

var coapplicant_status_co_app_agree=$('input[name=coapplicant_status_co_app_agree]:checked').val(); 

/******************* step 4*/



/******************* step 5*/
var ref_name=$("#ref_name").val();
var ref_address=$("#ref_address").val();
var ref_phone=$("#ref_phone").val();

var ref2_name=$("#ref2_name").val();
var ref2_address=$("#ref2_address").val();
var ref2_phone=$("#ref2_phone").val();

var ref3_name=$("#ref3_name").val();
var ref3_address=$("#ref3_address").val();
var ref3_phone=$("#ref3_phone").val();


/******************* step 5*/


 /*popup  myModal2*/
 
 var termaccept=$('input[name=termaccept]:checked').val();


 
 /*popup*/
 
 if(termaccept==1){
 
 
$("body").removeClass("modal-open");
$("#myModal2").removeClass("in");
$("#myModal2").css("display","none");				
$('#termaccept').attr('checked', false);
$('#termaccept').prop('checked', false);
 
 
 $.ajax({
	type: "POST",
	url: homeurl+'/callajax/submitcreditform?submit=1',
	data: {appinfo_first_name:appinfo_first_name,appinfo_middle_name:appinfo_middle_name,appinfo_last_name:appinfo_last_name,appinfo_dob:appinfo_dob,appinfo_ssn:appinfo_ssn,appinfo_phone:appinfo_phone,appinfo_curraddress:appinfo_curraddress,appinfo_city:appinfo_city,appinfo_state:appinfo_state,appinfo_zipcode:appinfo_zipcode,appinfo_own_rent:appinfo_own_rent,appinfo_monthly_payment_or_rent:appinfo_monthly_payment_or_rent,appinfo_how_long:appinfo_how_long,appinfo_previous_address:appinfo_previous_address,appinfo_previous_city:appinfo_previous_city,appinfo_previous_state:appinfo_previous_state,appinfo_previous_zipcode:appinfo_previous_zipcode,appinfo_previous_own_rent:appinfo_previous_own_rent,appinfo_previous_monthly_payment_or_rent:appinfo_previous_monthly_payment_or_rent,emp_current_employer:emp_current_employer,emp_employer_address:emp_employer_address,emp_phone:emp_phone,cosigner_e_mail:cosigner_e_mail,emp_fax:emp_fax,emp_city:emp_city,emp_state:emp_state,emp_zipcode:emp_zipcode,emp_position:emp_position,emp_hourly_salary:emp_hourly_salary,emp_hourly_value:emp_hourly_value,emp_how_long:emp_how_long,emp_previous_address:emp_previous_address,emp_previous_phone:emp_previous_phone,emp_previous_e_mail:emp_previous_e_mail,emp_previous_fax:emp_previous_fax,emp_previous_city:emp_previous_city,emp_previous_state:emp_previous_state,emp_previous_zipcode:emp_previous_zipcode,emp_previous_position:emp_previous_position,emp_previous_hourly_salary:emp_previous_hourly_salary,emp_previous_hourly_value_main:emp_previous_hourly_value_main,emp_previous_annual_income:emp_previous_annual_income, cosigner_status_co_app:cosigner_status_co_app,cosigner_first_name:cosigner_first_name,cosigner_middle_name:cosigner_middle_name,cosigner_last_name:cosigner_last_name,cosigner_dob:cosigner_dob,cosigner_ssn:cosigner_ssn,cosigner_phone:cosigner_phone,cosigner_curraddress:cosigner_curraddress,cosigner_city:cosigner_city,cosigner_state:cosigner_state,cosigner_zipcode:cosigner_zipcode,cosigner_own_rent:cosigner_own_rent,cosigner_monthly_payment_or_rent:cosigner_monthly_payment_or_rent,cosigner_how_long:cosigner_how_long,cosigner_previous_address:cosigner_previous_address,cosigner_previous_city:cosigner_previous_city,cosigner_previous_state:cosigner_previous_state,cosigner_previous_zipcode:cosigner_previous_zipcode,cosigner_previous_own_rent:cosigner_previous_own_rent,cosigner_previous_monthly_payment_or_rent:cosigner_previous_monthly_payment_or_rent,coemp_current_employer:coemp_current_employer,coemp_employer_address:coemp_employer_address,coemp_phone:coemp_phone,appinfo_e_mail:appinfo_e_mail,coemp_fax:coemp_fax,coemp_city:coemp_city,coemp_state:coemp_state,coemp_zipcode:coemp_zipcode,coemp_position:coemp_position,coemp_hourly_salary:coemp_hourly_salary,coemp_hourly_value:coemp_hourly_value,coemp_how_long:coemp_how_long,coemp_previous_address:coemp_previous_address,coemp_previous_phone:coemp_previous_phone,coemp_previous_e_mail:coemp_previous_e_mail,coemp_previous_fax:coemp_previous_fax,coemp_previous_city:coemp_previous_city,coemp_previous_state:coemp_previous_state,coemp_previous_zipcode:coemp_previous_zipcode,coemp_previous_position:coemp_previous_position,coemp_previous_hourly_salary:coemp_previous_hourly_salary,coemp_previous_hourly_value:coemp_previous_hourly_value,coemp_previous_annual_income:coemp_previous_annual_income,cosigner_status_co_app_agree:cosigner_status_co_app_agree,coapplicant_status_co_app:coapplicant_status_co_app,coapplicant_first_name:coapplicant_first_name,coapplicant_middle_name:coapplicant_middle_name,coapplicant_last_name:coapplicant_last_name,coapplicant_dob:coapplicant_dob,coapplicant_ssn:coapplicant_ssn,coapplicant_phone:coapplicant_phone,coapplicant_curraddress:coapplicant_curraddress,coapplicant_city:coapplicant_city,coapplicant_state:coapplicant_state,coapplicant_zipcode:coapplicant_zipcode,coapplicant_own_rent:coapplicant_own_rent,coapplicant_monthly_payment_or_rent:coapplicant_monthly_payment_or_rent,coapplicant_how_long:coapplicant_how_long,coapplicant_previous_address:coapplicant_previous_address,coapplicant_previous_city:coapplicant_previous_city,coapplicant_previous_state:coapplicant_previous_state,coapplicant_previous_zipcode:coapplicant_previous_zipcode,coapplicant_previous_own_rent:coapplicant_previous_own_rent,coapplicant_previous_monthly_payment_or_rent:coapplicant_previous_monthly_payment_or_rent,coapplicant_status_co_app_agree:coapplicant_status_co_app_agree,ref_name:ref_name,ref_address:ref_address,ref_phone:ref_phone,ref2_name:ref2_name,ref2_address:ref2_address,ref2_phone:ref2_phone,ref3_name:ref3_name,ref3_address:ref3_address,ref3_phone:ref3_phone },
	type: 'get',
	success: function( response ) {
	
		if(response==1){
		
		$("#formid2").html('<div class=\"alert alert-success\">Your Credit Application has been sent. We will revert back to you shortly.</div>');
		
		}else{
		$("#formid2").html('<div class=\"alert alert-danger\">Sending Fail</div>');
		
		}
	}
});


}else{

$("body").addClass("modal-open");
$("#myModal2").addClass("in");
$("#myModal2").css("display","block");
 
}



/*submit*/ 
}
 
 });
 
});

function myFunc(id) {
   var patt = new RegExp("\d{3}[\-]\d{2}[\-]\d{4}");
    
   var x = document.getElementById(""+id+"");
 
   
   var res = patt.test(x.value);
   if(!res){
    x.value = x.value
        .match(/\d*/g).join('')
        .match(/(\d{0,3})(\d{0,2})(\d{0,4})/).slice(1).join('-')
        .replace(/-*$/g, '');
   }
}


function show_step3_con(val) { 
 
 
 if(val=='1'){
	
	
  $("#cosigner_status_co_app_agree").addClass("required");
  $(".cosigner_stepreq3").addClass("required");
  $(".cosigner_stepreq").addClass("required");
  $('.step3_con').show('slow');
 
 }else{
  $("#cosigner_status_co_app_agree").removeClass("required");
  $(".cosigner_stepreq3").removeClass("required");
  $(".cosigner_stepreq2").removeClass("required");
  $(".cosigner_stepreq4").removeClass("required");
  $(".cosigner_stepreq").removeClass("required");
  $('.step3_con').hide('slow');
 
 }

}

function show_step4_con(val) { 
 
 
 if(val=='1'){

 
  $("#coapplicant_status_co_app_agree").addClass("required");
  $(".coapplicant_stepreq").addClass("required");
  
 
  $('.step4_con').show('slow');
 
 }else{
 
 $("#coapplicant_status_co_app_agree").removeClass("required");
 $(".coapplicant_stepreq").removeClass("required");
  
   
  $('.step4_con').hide('slow');
 
 }

}




function closepopup(){
	
 
	$("body").removeClass("modal-open"); 
	$("#myModal").removeClass("in");
	$("#myModal").css("display","none");

} 


 $('.mymodelcss').click(function() { 

	$("body").addClass("modal-open");
	$("#myModal").addClass("in");
	$("#myModal").css("display","block"); 
 });

    </script> 
	
	
@include('frontend.layouts.contactinfo')  
	
@include('frontend.layouts.footer')	



 