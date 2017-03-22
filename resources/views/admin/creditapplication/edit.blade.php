@extends('admin.layouts.master')

@section('content')

{!! Form::model($creditapplication, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.creditapplication.update', $creditapplication->id))) !!}

<style>
.form-group label{
 font-weight:bold;
}

.panel .form-group{ padding:0px !important;margin:0px !important; }

.panel .col-sm-4,.panel .col-sm-2,.panel .col-sm-12,.panel .col-sm-5,.panel .col-sm-8 {
    border: 1px solid #dce1e4;
    padding: 8px;
	}
</style>


 <div id="print_containt">	


 <div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">Applicant Information</h4>
			<div class="pull-right"> 
			<a href="javascript:;" class="btn btn-xs btn-success" onclick="printContent(<?php echo $creditapplication->id; ?>,'<?php echo $creditapplication->appinfo_first_name; ?>');" >Print</a>
			
			</div>
		</div>
		<div class="panel-body">


<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
      

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>


 

<form class="tsf-step-content">
                                       
<div class="col-lg-12">
                                           
										  
										  

 
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4">
	 <label class="">First name:</label> 
	 <span id="idname">{!! $creditapplication->appinfo_first_name!!}</span>
	</div>
	
	<div class="col-sm-4">
	<label class="">Middle name:</label> 
	 <span> {!!$creditapplication->appinfo_middle_name!!}</span>
	</div>

	<div class="col-sm-4">
	<label class="">Last name:</label> 
	 <span>{!! $creditapplication->appinfo_last_name!!}</span>
	</div>	
	
	</div>
	
</div>
               
                                
                                
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4">
	<label class="">D.O.B:</label> 
	<span>{!! $creditapplication->appinfo_last_name!!}</span>
	</div>

	<div class="col-sm-4">
	<label class="">SSN:</label>
	<span>{!! $creditapplication->appinfo_last_name!!}</span>
	</div>
	
	<div class="col-sm-4">
	<label class="">Phone:</label>
	 <span>{!! $creditapplication->appinfo_last_name!!}</span>
	</div>
	
	
 
	</div>
	
</div>

<div class="form-group">
    <div class="row">
	<div class="col-sm-12">	
	<label class="">Current address:</label>
	<span>{!! $creditapplication->appinfo_last_name!!}</span>
    </div>
	</div>
</div>
         

						
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
	<label class="">CITY:</label>
	<span>{!! $creditapplication->appinfo_city!!}</span>  
	</div>
	
	<div class="col-sm-4"> 
	<label class="">STATE:</label>
	<span>{!! $creditapplication->appinfo_state!!}</span> 
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">ZIPCODE:</label>
	<span>{!! $creditapplication->appinfo_zipcode!!}</span>
 	
	</div>
	
	
	</div>
</div>
 

<div class="form-group">
 <div class="row">
	
	<div class="col-sm-2">
	<label class="">Own/Rent:</label>
	<span>{!! $creditapplication->appinfo_own_rent!!}</span>	
	</div>
	
	<div class="col-sm-5"> 	  
	
	<label class="">Monthly payment or rent:</label>
	<span>{!! $creditapplication->appinfo_monthly_payment_or_rent!!}</span>	 
	</div>
	
	<div class="col-sm-5"> 	  
	
	<label class="">How long?:</label>	
	<span>{!! $creditapplication->appinfo_how_long!!}</span>
	
	</div>
 
 
 </div>
</div>		 
  
<?php
if($creditapplication->appinfo_how_long!='More than 24 months'){
?>
  
<div class="form-group">
<div class="row">
<div class="col-sm-12"> 
	<label class="">Previous address:</label>
	<span>{!! $creditapplication->appinfo_previous_address!!}</span>
</div>
</div>
</div>        

						
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
	<label class="">CITY:</label>
	<span>{!! $creditapplication->appinfo_previous_city!!}</span>
	
	</div>
	
	<div class="col-sm-4"> 
	<label class="">STATE:</label>
	<span>{!! $creditapplication->appinfo_previous_state!!}</span>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">ZIPCODE:</label>	
	<span>{!! $creditapplication->appinfo_previous_zipcode!!}</span>
	</div>
	
	
	</div>
</div>


<div class="form-group">
 <div class="row">
	
	<div class="col-sm-2"> 	  
    <label class="">Own/Rent:</label> 
	<span>{!! $creditapplication->appinfo_previous_own_rent!!}</span>
	</div>
	
	<div class="col-sm-5"> 	  
	
	<label class="">Monthly payment or rent:</label>
	<span>{!! $creditapplication->appinfo_previous_monthly_payment_or_rent!!}</span>
	
	</div>
	
	<?php /*
	<div class="col-sm-5">	
	<label class="">How long?:</label> 	
	<span>{!! $creditapplication->appinfo_previous_how_long!!}</span>
	</div>
	*/ ?>
 
 
 </div>
</div>

<?php } ?>
   

  
														  
										  
										  
                                         </div> 
											 
                                    </form>
                                    <!-- END STEP CONTENT-->
									
</div> 

</div>




 <div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">Employment Information</h4>
		</div>
		<div class="panel-body">


<div class="form-group">
<div class="row">
<div class="col-sm-12"> 
	<label class="">Current Employer:</label>
	<span>{!! $creditapplication->emp_current_employer!!}</span>
</div>
</div>
</div>    	


<div class="form-group">
<div class="row">
<div class="col-sm-12"> 
	<label class="">Employer Address:</label>
	<span>{!! $creditapplication->emp_employer_address!!}</span>
</div>
</div>
</div> 	
		
	   
	   
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-12"> 
	<label class="">Phone:</label>
	<span>{!! $creditapplication->emp_phone!!}</span>
	
	</div>
	
	 
	
	
	</div>
</div>	
	
	   
	   
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
	<label class="">CITY:</label>
	<span>{!! $creditapplication->emp_city!!}</span>
	
	</div>
	
	<div class="col-sm-4"> 
	<label class="">STATE:</label>
	<span>{!! $creditapplication->emp_state!!}</span>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">ZIPCODE:</label>
	<span>{!! $creditapplication->emp_zipcode!!}</span>	
	</div>
	
	
	</div>
</div>	


<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
	<label class="">Position:</label>
	<span>{!! $creditapplication->emp_position!!}</span>	
	</div>
	
	<div class="col-sm-4"> 
   
     <label class="">Hourly/Salary:</label> 
	  <span>{!! $creditapplication->emp_hourly_salary!!}</span>
 
	 <?php if($creditapplication->emp_hourly_salary=="Hourly"){ ?>
	 <span>( {!! $creditapplication->emp_hourly_value!!} / Hour )</span>
	 <?php } ?>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">How Long?</label>	
	<span>{!! $creditapplication->emp_how_long!!}</span>
	</div>
	
	
	</div>
</div>   


 
<?php
if($creditapplication->emp_how_long!='More than 24 months'){
?>
  
<div class="form-group">
<div class="row">
<div class="col-sm-12"> 
	<label class="">Previous address:</label>
	<span>{!! $creditapplication->emp_previous_address!!}</span>
</div>
</div>
</div>        

	   
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
	<label class="">Phone:</label>
	<span>{!! $creditapplication->emp_previous_phone!!}</span>
	
	</div>
	
	<div class="col-sm-4"> 
	<label class="">E-mail:</label>
	<span>{!! $creditapplication->emp_previous_e_mail!!}</span>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">Fax:</label>
	<span>{!! $creditapplication->emp_previous_fax!!}</span>
	</div>
	
	
	</div>
</div>	
						
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
	<label class="">CITY:</label>
	<span>{!! $creditapplication->emp_previous_city!!}</span>
	
	</div>
	
	<div class="col-sm-4"> 
	<label class="">STATE:</label>
	<span>{!! $creditapplication->emp_previous_state!!}</span>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">ZIPCODE:</label>	
	<span>{!! $creditapplication->emp_previous_zipcode!!}</span>
	</div>
	
	
	</div>
</div>


<div class="form-group">
 <div class="row">
	
	<div class="col-sm-2"> 	  
    <label class="">Position:</label> 
	<span>{!! $creditapplication->emp_previous_position!!}</span>
	</div>
	
	<div class="col-sm-5"> 	  
	
	<label class="">Previous Hourly Salary:</label>
	<span>{!! $creditapplication->emp_previous_hourly_salary!!}</span>
		 <?php if($creditapplication->emp_previous_hourly_salary=="Hourly"){ ?>
	 <span>( {!! $creditapplication->emp_previous_hourly_value_main!!} /hour )</span>
	 <?php } ?>
	</div>
	
	<div class="col-sm-5">	
	<label class="">Annual Income:</label> 	
	<span>{!! $creditapplication->emp_previous_annual_income!!}</span>
	</div>
 
 
 </div>
</div>

<?php } ?>
	   
						 
									 
									 
									 
                                
                                <!-- END STEP CONTENT-->
                            </div>		

	 



    </div>
	
	
 
 
	<div class="panel panel-white">
	<div class="panel-heading clearfix">
	<h4 class="panel-title">Co-Signer Information</h4>
	</div>
	<div class="panel-body">
	<form class="tsf-step-content">

	
	<div class="form-group">
		<div class="row">
		
		<div class="col-sm-12">
		<label class="">Will there be a Co-Signer For this Application? </label> 
		<span>{!! $creditapplication->cosigner_status_co_app!!}</span>
		</div>
		
		</div>
	</div>	
	
<?php if($creditapplication->cosigner_status_co_app=="on"){ ?>	
	
	
	
	


<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4">
	<label class="">First name</label> 
	<span>{!! $creditapplication->cosigner_first_name!!}</span>
	</div>
	
	<div class="col-sm-4">
	<label class="">Middle name</label> 
	<span>{!! $creditapplication->cosigner_middle_name!!}</span>
	</div>

	<div class="col-sm-4">
	<label class="">Last name</label> 
	<span>{!! $creditapplication->cosigner_last_name!!}</span>
	</div>	
	
	</div>	
</div>	

							
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4">
	<label class="">D.O.B</label> 
	<span>{!! $creditapplication->cosigner_dob!!}</span>
	</div>

	<div class="col-sm-4">
	<label class="">SSN</label>
	<span>{!! $creditapplication->cosigner_ssn!!}</span>
	</div>
	
	<div class="col-sm-4">
	<label class="">Phone</label>
	<span>{!! $creditapplication->cosigner_phone!!}</span>
	</div> 
	
	</div> 
</div>

<div class="form-group">
	<div class="row">
	
	<div class="col-sm-12"> 
	<label class="">Current address</label>
	<span>{!! $creditapplication->cosigner_curraddress!!}</span>
	</div>
	</div>
</div>	


						
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
	<label class="">CITY</label>
	<span>{!! $creditapplication->cosigner_city!!}</span>
	</div>
	
	<div class="col-sm-4"> 
	<label class="">STATE</label>
	<span>{!! $creditapplication->cosigner_state!!}</span>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">ZIPCODE</label>
	<span>{!! $creditapplication->cosigner_zipcode!!}</span>	
	</div>
	
	
	</div>
</div>

					
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
	<label class="">Own/Rent:</label>
	<span>{!! $creditapplication->cosigner_own_rent!!}</span>
	</div>
	
	<div class="col-sm-4"> 
	<label class="">Monthly Payment or Rent</label>
	<span>{!! $creditapplication->cosigner_monthly_payment_or_rent!!}</span>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">How Long?</label>
	<span>{!! $creditapplication->cosigner_how_long!!}</span>	
	</div>
	
	
	</div>
</div>



	

<?php
if($creditapplication->cosigner_how_long!='More than 24 months'){
?>
  
<div class="form-group">
<div class="row">
<div class="col-sm-12"> 
	<label class="">Previous address:</label>
	<span>{!! $creditapplication->cosigner_previous_address!!}</span>
</div>
</div>
</div>        

	    				
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
	<label class="">CITY:</label>
	<span>{!! $creditapplication->cosigner_previous_city!!}</span>
	
	</div>
	
	<div class="col-sm-4"> 
	<label class="">STATE:</label>
	<span>{!! $creditapplication->cosigner_previous_state!!}</span>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">ZIPCODE:</label>	
	<span>{!! $creditapplication->cosigner_previous_zipcode!!}</span>
	</div>
	
	
	</div>
</div>


<div class="form-group">
 <div class="row">
	
	<div class="col-sm-2"> 	  
    <label class="">Own/Rent:</label> 
	<span>{!! $creditapplication->cosigner_previous_own_rent!!}</span>
	</div>
	
	<div class="col-sm-5"> 	  
	
	<label class="">Monthly Payment or Rent:</label>
	<span>{!! $creditapplication->cosigner_previous_monthly_payment_or_rent!!}</span>
		 
	</div>
	
 
 
 
 </div>
</div>

<?php } ?>	
	
	
	<br>
	<br>	

<h4>Co-Signer Employment Information</h4>
<br>

<div class="form-group">
	<div class="row">
	
	<div class="col-sm-12"> 
	<label class="">Current address:</label>
	<span>{!! $creditapplication->coemp_current_employer!!}</span>
	</div>
	</div>
</div>	

<div class="form-group">
	<div class="row"> 
	<div class="col-sm-12"> 
	<label class="">Employer Address:</label>
	<span>{!! $creditapplication->coemp_employer_address!!}</span>
	</div>
	</div>
</div>	
	
	
	
						
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-12"> 
	<label class="">Phone</label>
	<span>{!! $creditapplication->coemp_phone!!}</span>
	</div>
	<?php /*
	<div class="col-sm-4"> 
	<label class="">E-mail</label>
	<span>{!! $creditapplication->appinfo_e_mail!!}</span>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">Fax</label>
	<span>{!! $creditapplication->coemp_fax!!}</span>	
	</div>
	*/ ?>
	
	</div>
</div>
 	
	
					
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
	<label class="">CITY:</label>
	<span>{!! $creditapplication->coemp_city!!}</span>
	
	</div>
	
	<div class="col-sm-4"> 
	<label class="">STATE:</label>
	<span>{!! $creditapplication->coemp_state!!}</span>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">ZIPCODE:</label>	
	<span>{!! $creditapplication->coemp_zipcode!!}</span>
	</div>
	
	
	</div>
</div>	




<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
	<label class="">Position:</label>
	<span>{!! $creditapplication->coemp_position!!}</span>	
	</div>
	
	<div class="col-sm-4"> 
   
     <label class="">Hourly/Salary:</label> 
	  <span>{!! $creditapplication->coemp_hourly_salary!!}</span>
 
	 <?php if($creditapplication->coemp_hourly_salary=="Hourly"){ ?>
	 <span>( {!! $creditapplication->coemp_hourly_value!!} / Hour )</span>
	 <?php } ?>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">How Long?</label>	
	<span>{!! $creditapplication->coemp_how_long!!}</span>
	</div>
	
	
	</div>
</div>   


 
<?php
if($creditapplication->coemp_how_long!='More than 24 months'){
?>
  
<div class="form-group">
<div class="row">
<div class="col-sm-12"> 
	<label class="">Previous address:</label>
	<span>{!! $creditapplication->coemp_previous_address!!}</span>
</div>
</div>
</div>        

	   
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
	<label class="">Phone:</label>
	<span>{!! $creditapplication->coemp_previous_phone!!}</span>
	
	</div>
	
	<div class="col-sm-4"> 
	<label class="">E-mail:</label>
	<span>{!! $creditapplication->coemp_previous_e_mail!!}</span>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">Fax:</label>
	<span>{!! $creditapplication->coemp_previous_fax!!}</span>
	</div>
	
	
	</div>
</div>	
						
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
	<label class="">CITY:</label>
	<span>{!! $creditapplication->coemp_previous_city!!}</span>
	
	</div>
	
	<div class="col-sm-4"> 
	<label class="">STATE:</label>
	<span>{!! $creditapplication->coemp_previous_state!!}</span>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">ZIPCODE:</label>	
	<span>{!! $creditapplication->coemp_previous_zipcode!!}</span>
	</div>
	
	
	</div>
</div>


<div class="form-group">
 <div class="row">
	
	<div class="col-sm-2"> 	  
    <label class="">Position:</label> 
	<span>{!! $creditapplication->coemp_previous_position!!}</span>
	</div>
	
	<div class="col-sm-5"> 	  
	
	<label class="">Previous Hourly Salary:</label>
	<span>{!! $creditapplication->coemp_previous_hourly_salary!!}</span>
		 <?php if($creditapplication->coemp_previous_hourly_salary=="Hourly"){ ?>
	 <span>( {!! $creditapplication->coemp_previous_hourly_value!!} /hour )</span>
	 <?php } ?>
	</div>
	
	<div class="col-sm-5">	
	<label class="">Annual Income:</label> 	
	<span>{!! $creditapplication->coemp_previous_annual_income!!}</span>
	</div>
 
 


 </div>
</div>

<?php } ?>
	
	
<?php } ?>	
	
	
	</form>
	</div>
	</div>	   

 
 
 
	<div class="panel panel-white">
	<div class="panel-heading clearfix">
	<h4 class="panel-title">Co-Applicant Info</h4>
	</div>
	<div class="panel-body">
	<form class="tsf-step-content">

	
	<div class="form-group">
		<div class="row">
		
		<div class="col-sm-12">
		<label class="">Will there be a Co-Applicant For this Application? </label> 
		<span>{!! $creditapplication->coapplicant_status_co_app!!}</span>
		</div>
		
		</div>
	</div>	
	
<?php if($creditapplication->coapplicant_status_co_app=="On"){ ?>	



<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4">
	 <label class="">First name:</label> 
	 <span>{!! $creditapplication->coapplicant_first_name!!}</span>
	</div>
	
	<div class="col-sm-4">
	<label class="">Middle name:</label> 
	 <span> {!!$creditapplication->coapplicant_middle_name!!}</span>
	</div>

	<div class="col-sm-4">
	<label class="">Last name:</label> 
	 <span>{!! $creditapplication->coapplicant_last_name!!}</span>
	</div>	
	
	</div>
	
</div>
               
                                
                                
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4">
	<label class="">D.O.B:</label> 
	<span>{!! $creditapplication->coapplicant_dob!!}</span>
	</div>

	<div class="col-sm-4">
	<label class="">SSN:</label>
	<span>{!! $creditapplication->coapplicant_ssn!!}</span>
	</div>
	
	<div class="col-sm-4">
	<label class="">Phone:</label>
	 <span>{!! $creditapplication->coapplicant_phone!!}</span>
	</div>
	
	
 
	</div>
	
</div>

<div class="form-group">
    <div class="row">
	<div class="col-sm-8">	
	<label class="">Current address:</label>
	<span>{!! $creditapplication->coapplicant_curraddress!!}</span>
    </div>
	
	<div class="col-sm-4">	
	<label class="">Current address:</label>
	<span>{!! $creditapplication->coapplicant_e_mail!!}</span>
	</div>
	
	
	
	</div>
</div>
         

						
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
	<label class="">CITY:</label>
	<span>{!! $creditapplication->coapplicant_city!!}</span>  
	</div>
	
	<div class="col-sm-4"> 
	<label class="">STATE:</label>
	<span>{!! $creditapplication->coapplicant_state!!}</span> 
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">ZIPCODE:</label>
	<span>{!! $creditapplication->coapplicant_zipcode!!}</span>
 	
	</div>
	
	
	</div>
</div>
 

<div class="form-group">
 <div class="row">
	
	<div class="col-sm-2">
	<label class="">Own/Rent:</label>
	<span>{!! $creditapplication->coapplicant_own_rent!!}</span>	
	</div>
	
	<div class="col-sm-5"> 	  
	
	<label class="">Monthly payment or rent:</label>
	<span>{!! $creditapplication->coapplicant_monthly_payment_or_rent!!}</span>	 
	</div>
	
	<div class="col-sm-5"> 	  
	
	<label class="">How long?:</label>	
	<span>{!! $creditapplication->coapplicant_how_long!!}</span>
	
	</div>
 
 
 </div>
</div>		 
  
<?php
if($creditapplication->coapplicant_how_long!='More than 24 months'){
?>
  
<div class="form-group">
<div class="row">
<div class="col-sm-12"> 
	<label class="">Previous address:</label>
	<span>{!! $creditapplication->coapplicant_previous_address!!}</span>
</div>
</div>
</div>        

						
<div class="form-group">
	<div class="row">
	
	<div class="col-sm-4"> 
	<label class="">CITY:</label>
	<span>{!! $creditapplication->coapplicant_previous_city!!}</span>
	
	</div>
	
	<div class="col-sm-4"> 
	<label class="">STATE:</label>
	<span>{!! $creditapplication->coapplicant_previous_state!!}</span>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">ZIPCODE:</label>	
	<span>{!! $creditapplication->coapplicant_previous_zipcode!!}</span>
	</div>
	
	
	</div>
</div>


<div class="form-group">
 <div class="row">
	
	<div class="col-sm-2"> 	  
    <label class="">Own/Rent:</label> 
	<span>{!! $creditapplication->coapplicant_previous_own_rent!!}</span>
	</div>
	
	<div class="col-sm-5"> 	  
	
	<label class="">Monthly payment or rent:</label>
	<span>{!! $creditapplication->coapplicant_previous_own_rent_opt!!}</span>
	
	</div>
	
 
 
 
 </div>
</div>

<?php } ?>




 <?php } ?>
 
 	</form>
	</div>
	</div>	



 <div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">References</h4>
		</div>
		<div class="panel-body">

<form class="tsf-step-content">
                                        

<div class="form-group">
	<div class="row">
	<div class="col-sm-4"> 
		<label class="">Name:</label>
		<span>{!! $creditapplication->ref_name!!}</span>
	</div>
	
	<div class="col-sm-4"> 
	<label class="">Address:</label>
	<span>{!! $creditapplication->ref_address!!}</span>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">Phone:</label>
	<span>{!! $creditapplication->ref_phone!!}</span>
	</div>
	
	
	
	</div>
</div>

 
 <?php 
 if($creditapplication->ref2_name){
 ?>
 
<div class="form-group">
	<div class="row">
	<div class="col-sm-4"> 
		<label class="">Name:</label>
		<span>{!! $creditapplication->ref2_name!!}</span>
	</div>
	
	<div class="col-sm-4"> 
	<label class="">Address:</label>
	<span>{!! $creditapplication->ref2_address!!}</span>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">Phone:</label>
	<span>{!! $creditapplication->ref2_phone!!}</span>
	</div>
	
	
	
	</div>
</div>
<?php } ?>

 
 <?php 
 if($creditapplication->ref3_name){
 ?>
 
<div class="form-group">
	<div class="row">
	<div class="col-sm-4"> 
		<label class="">Name:</label>
		<span>{!! $creditapplication->ref3_name!!}</span>
	</div>
	
	<div class="col-sm-4"> 
	<label class="">Address:</label>
	<span>{!! $creditapplication->ref3_address!!}</span>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">Phone:</label>
	<span>{!! $creditapplication->ref3_phone!!}</span>
	</div>
	
	
	
	</div>
</div>
<?php } ?>  
									 
									 
									                                 </form>		
	 
 
 
<br>
<br>



</div>
</div>
</div>



<div>
<div>

<div class="form-group">
<div class="row">
    <div class="col-sm-12">
	 
	  {!! link_to_route(config('quickadmin.route').'.creditapplication.index', trans('Back'), null, array('class' => 'btn btn-primary')) !!}
	  
    </div>
    </div>	
</div>


  </div>
</div>


{!! Form::close() !!}


@endsection

 

<input type="hidden" id="homeurl" value="{{ url('/') }}">
<script>

function printContent(id,name){
 

 
 		var homeurl=$("#homeurl").val(); 
		
		 $.ajax({
            type: "POST",
            url: homeurl+'/callajax/printContent/'+id,
            data: {id: id},
			type: 'get',
            success: function( response ) {
			 


			var contents = response;


			var idname = name;
 

            var frame1 = document.createElement('iframe');
            frame1.name = "frame1";
            frame1.style.position = "absolute";
            frame1.style.top = "-1000000px";
            document.body.appendChild(frame1);
            var frameDoc = frame1.contentWindow ? frame1.contentWindow : frame1.contentDocument.document ? frame1.contentDocument.document : frame1.contentDocument;
            frameDoc.document.open();
            frameDoc.document.write('<html><head><title>Test Drive ('+idname+')</title>');
           
			frameDoc.document.write('<style>table {  border-collapse: collapse;  border-spacing: 0;} .table td, .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th{ padding:8px 18px;  } .table-bordered, .table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > thead > tr > th {     border: 1px solid #e2e2e2;} .p0{  padding:0px !important; }  .table.table-bordered { min-width: 728px; } </style>');
		   
		    frameDoc.document.write('</head><body>');
            frameDoc.document.write(contents);
            frameDoc.document.write('</body></html>');
            frameDoc.document.close();
            setTimeout(function () {
                window.frames["frame1"].focus();
                window.frames["frame1"].print();
                document.body.removeChild(frame1);
            }, 500);
            return false;	

 			
				
				
            }
        });
 
	
	
	
}

</script>