@extends('admin.layouts.master')

@section('content')

{!! Form::model($creditapplication, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.creditapplication.update', $creditapplication->id))) !!}

<style>
.form-group label{
 /* border:1px solid #dce1e4;*/
 font-weight:bold;
}

.panel .form-group{ padding:0px !important;margin:0px !important; }

.panel .col-sm-4,.panel .col-sm-2,.panel .col-sm-12,.panel .col-sm-5,.panel .col-sm-8 {
    border: 1px solid #dce1e4;
    padding: 8px;
</style>


 <div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">Applicant Information</h4>
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
	 <span>{!! $creditapplication->appinfo_first_name!!}</span>
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
	
	<div class="col-sm-5">	
	<label class="">How long?:</label> 	
	<span>{!! $creditapplication->appinfo_previous_how_long!!}</span>
	</div>
 
 
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
	
	<div class="col-sm-4"> 
	<label class="">Phone:</label>
	<span>{!! $creditapplication->emp_phone!!}</span>
	
	</div>
	
	<div class="col-sm-4"> 
	<label class="">E-mail:</label>
	<span>{!! $creditapplication->emp_e_mail!!}</span>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">Fax:</label>
	<span>{!! $creditapplication->emp_fax!!}</span>
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
	<span>{!! $creditapplication->emp_previous_hourly_value_main!!}</span>
		 <?php if($creditapplication->emp_previous_hourly_value_main=="Hourly"){ ?>
	 <span>( {!! $creditapplication->emp_previous_hourly_value!!} /hour )</span>
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
	
	<div class="col-sm-4"> 
	<label class="">Phone</label>
	<span>{!! $creditapplication->coemp_phone!!}</span>
	</div>
	
	<div class="col-sm-4"> 
	<label class="">E-mail</label>
	<span>{!! $creditapplication->coemp_e_mail!!}</span>
	</div>	
	
	<div class="col-sm-4"> 
	<label class="">Fax</label>
	<span>{!! $creditapplication->coemp_fax!!}</span>	
	</div>
	
	
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

 
 


 
   
									 
									 
									                                 </form>		
		
		
<?php /*		
 <div class="form-group">
    {!! Form::label('ref_name', 'Name', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('ref_name', old('ref_name',$creditapplication->ref_name), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('ref_address', 'Address', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('ref_address', old('ref_address',$creditapplication->ref_address), array('class'=>'form-control')) !!}
        
    </div>
</div>



 <div class="form-group">
    {!! Form::label('ref_phone', 'Phone', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('ref_phone', old('ref_phone',$creditapplication->ref_phone), array('class'=>'form-control')) !!}
        
    </div>
</div>
  */ ?>
 
 
<br>
<br>
<div class="form-group">
<div class="row">
    <div class="col-sm-12">
	<?php /*
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.creditapplication.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
	  
	  */ ?>
	  {!! link_to_route(config('quickadmin.route').'.creditapplication.index', trans('Back'), null, array('class' => 'btn btn-primary')) !!}
	  
    </div>
    </div>	
</div>


  </div>
</div>


{!! Form::close() !!}


@endsection