@extends('admin.layouts.master')

@section('content')

{!! Form::model($creditapplication, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.creditapplication.update', $creditapplication->id))) !!}


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


 
 
 <div class="form-group">
    {!! Form::label('appinfo_first_name', 'First name', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_first_name', old('appinfo_first_name',$creditapplication->appinfo_first_name), array('class'=>'form-control')) !!}
        
    </div>
</div>

 <div class="form-group">
    {!! Form::label('appinfo_middle_name', 'Middle Name', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_middle_name', old('appinfo_middle_name',$creditapplication->appinfo_middle_name), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('appinfo_last_name', 'Last Name', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_last_name', old('appinfo_last_name',$creditapplication->appinfo_last_name), array('class'=>'form-control')) !!}
        
    </div>
</div>
 

  <div class="form-group">
    {!! Form::label('appinfo_dob', 'D.O.B', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_dob', old('appinfo_dob',$creditapplication->appinfo_dob), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('appinfo_ssn', 'SSN', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_ssn', old('appinfo_ssn',$creditapplication->appinfo_ssn), array('class'=>'form-control')) !!}
        
    </div>
</div>


 


 <div class="form-group">
    {!! Form::label('appinfo_phone', 'Phone', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_phone', old('appinfo_phone',$creditapplication->appinfo_phone), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('appinfo_curraddress', 'Current address', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_curraddress', old('appinfo_curraddress',$creditapplication->appinfo_curraddress), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('appinfo_city', 'CITY', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_city', old('appinfo_city',$creditapplication->appinfo_city), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('appinfo_state', 'STATE', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_state', old('appinfo_state',$creditapplication->appinfo_state), array('class'=>'form-control')) !!}
        
    </div>
</div>



 <div class="form-group">
    {!! Form::label('appinfo_zipcode', 'ZIPCODE', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_zipcode', old('appinfo_zipcode',$creditapplication->appinfo_zipcode), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('appinfo_own_rent', 'Own/Rent ', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_own_rent', old('appinfo_own_rent',$creditapplication->appinfo_own_rent), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('appinfo_monthly_payment_or_rent', 'Monthly payment or rent', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_monthly_payment_or_rent', old('appinfo_monthly_payment_or_rent',$creditapplication->appinfo_monthly_payment_or_rent), array('class'=>'form-control')) !!}
        
    </div>
</div>



 <div class="form-group">
    {!! Form::label('appinfo_how_long', 'How long?', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_how_long', old('appinfo_how_long',$creditapplication->appinfo_how_long), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('appinfo_previous_address', 'Previous address', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_previous_address', old('appinfo_previous_address',$creditapplication->appinfo_previous_address), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('appinfo_previous_city', 'CITY', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_previous_city', old('appinfo_previous_city',$creditapplication->appinfo_previous_city), array('class'=>'form-control')) !!}
        
    </div>
</div>



 <div class="form-group">
    {!! Form::label('appinfo_previous_state', 'STATE', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_previous_state', old('appinfo_previous_state',$creditapplication->appinfo_previous_state), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('appinfo_previous_zipcode', 'ZIPCODE', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_previous_zipcode', old('appinfo_previous_zipcode',$creditapplication->appinfo_previous_zipcode), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('appinfo_previous_own_rent', 'Own/Rent ', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_previous_own_rent', old('appinfo_previous_own_rent',$creditapplication->appinfo_previous_own_rent), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('appinfo_previous_monthly_payment_or_rent', 'Monthly payment or rent', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_previous_monthly_payment_or_rent', old('appinfo_previous_monthly_payment_or_rent',$creditapplication->appinfo_previous_monthly_payment_or_rent), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('appinfo_previous_how_long', 'How long?', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('appinfo_previous_how_long', old('appinfo_previous_how_long',$creditapplication->appinfo_previous_how_long), array('class'=>'form-control')) !!}
        
    </div>
</div>


    </div>
</div>
 <div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">Employment Information</h4>
		</div>
		<div class="panel-body">


 <div class="form-group">
    {!! Form::label('emp_current_employer', 'Current employer', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('emp_current_employer', old('emp_current_employer',$creditapplication->emp_current_employer), array('class'=>'form-control')) !!}
        
    </div>
</div>

 <div class="form-group">
    {!! Form::label('emp_employer_address', 'Employer address', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('emp_employer_address', old('emp_employer_address',$creditapplication->emp_employer_address), array('class'=>'form-control')) !!}
        
    </div>
</div>

 <div class="form-group">
    {!! Form::label('emp_how_long', 'How long?', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('emp_how_long', old('emp_how_long',$creditapplication->emp_how_long), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('emp_phone', 'Phone', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('emp_phone', old('emp_phone',$creditapplication->emp_phone), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('emp_e_mail', 'E-mail', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('emp_e_mail', old('emp_e_mail',$creditapplication->emp_e_mail), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('emp_fax', 'Fax', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('emp_fax', old('emp_fax',$creditapplication->emp_fax), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('emp_city', 'CITY', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('emp_city', old('emp_city',$creditapplication->emp_city), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('emp_state', 'STATE', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('emp_state', old('emp_state',$creditapplication->emp_state), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('emp_zipcode', 'ZIPCODE', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('emp_zipcode', old('emp_zipcode',$creditapplication->emp_zipcode), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('emp_position', 'Position', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('emp_position', old('emp_position',$creditapplication->emp_position), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('emp_hourly_salary', 'Hourly/Salary ', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('emp_hourly_salary', old('emp_hourly_salary',$creditapplication->emp_hourly_salary), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('emp_annual_income', 'Annual income', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('emp_annual_income', old('emp_annual_income',$creditapplication->emp_annual_income), array('class'=>'form-control')) !!}
        
    </div>
</div>


    </div>
</div>
 <div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">Co-applicant Information</h4>
		</div>
		<div class="panel-body">


 <div class="form-group">
    {!! Form::label('coappinfo_first_name', 'First name', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_first_name', old('coappinfo_first_name',$creditapplication->coappinfo_first_name), array('class'=>'form-control')) !!}
        
    </div>
</div>



 <div class="form-group">
    {!! Form::label('coappinfo_middle_name', 'Middle Name', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_middle_name', old('coappinfo_middle_name',$creditapplication->coappinfo_middle_name), array('class'=>'form-control')) !!}
        
    </div>
</div>



 <div class="form-group">
    {!! Form::label('coappinfo_last_name', 'Last Name', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_last_name', old('coappinfo_last_name',$creditapplication->coappinfo_last_name), array('class'=>'form-control')) !!}
        
    </div>
</div>



 <div class="form-group">
    {!! Form::label('coappinfo_dob', 'D.O.B', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_dob', old('coappinfo_dob',$creditapplication->coappinfo_dob), array('class'=>'form-control')) !!}
        
    </div>
</div>



 <div class="form-group">
    {!! Form::label('coappinfo_ssn', 'SSN', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_ssn', old('coappinfo_ssn',$creditapplication->coappinfo_ssn), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('coappinfo_phone', 'Phone', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_phone', old('coappinfo_phone',$creditapplication->coappinfo_phone), array('class'=>'form-control')) !!}        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('coappinfo_curraddress', 'Current address', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_curraddress', old('coappinfo_curraddress',$creditapplication->coappinfo_curraddress), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('coappinfo_city', 'CITY', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_city', old('coappinfo_city',$creditapplication->coappinfo_city), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('coappinfo_state', 'STATE', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_state', old('coappinfo_state',$creditapplication->coappinfo_state), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('coappinfo_zipcode', 'Zipcode', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_zipcode', old('coappinfo_zipcode',$creditapplication->coappinfo_zipcode), array('class'=>'form-control')) !!}
        
    </div>
</div>



 <div class="form-group">
    {!! Form::label('coappinfo_own_rent', 'Own/Rent ', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_own_rent', old('coappinfo_own_rent',$creditapplication->coappinfo_own_rent), array('class'=>'form-control')) !!}
        
    </div>
</div>




 <div class="form-group">
    {!! Form::label('coappinfo_monthly_payment_or_rent', 'Monthly payment or rent', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_monthly_payment_or_rent', old('coappinfo_monthly_payment_or_rent',$creditapplication->coappinfo_monthly_payment_or_rent), array('class'=>'form-control')) !!}
        
    </div>
</div>




 <div class="form-group">
    {!! Form::label('coappinfo_how_long', 'How long', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_how_long', old('coappinfo_how_long',$creditapplication->coappinfo_how_long), array('class'=>'form-control')) !!}
        
    </div>
</div>




 <div class="form-group">
    {!! Form::label('coappinfo_previous_address', 'Previous address', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_previous_address', old('coappinfo_previous_address',$creditapplication->coappinfo_previous_address), array('class'=>'form-control')) !!}
        
    </div>
</div>




 <div class="form-group">
    {!! Form::label('coappinfo_previous_city', 'CITY', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_previous_city', old('coappinfo_previous_city',$creditapplication->coappinfo_previous_city), array('class'=>'form-control')) !!}
        
    </div>
</div>




 <div class="form-group">
    {!! Form::label('coappinfo_previous_state', 'STATE', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_previous_state', old('coappinfo_previous_state',$creditapplication->coappinfo_previous_state), array('class'=>'form-control')) !!}
        
    </div>
</div>



 <div class="form-group">
    {!! Form::label('coappinfo_previous_zipcode', 'ZIPCODE', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_previous_zipcode', old('coappinfo_previous_zipcode',$creditapplication->coappinfo_previous_zipcode), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('coappinfo_previous_own_rent', 'Own/Rent ', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_previous_own_rent', old('coappinfo_previous_own_rent',$creditapplication->coappinfo_previous_own_rent), array('class'=>'form-control')) !!}
        
    </div>
</div>



 <div class="form-group">
    {!! Form::label('coappinfo_previous_monthly_payment_or_rent', 'Monthly payment or rent', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_previous_monthly_payment_or_rent', old('coappinfo_previous_monthly_payment_or_rent',$creditapplication->coappinfo_previous_monthly_payment_or_rent), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('coappinfo_previous_how_long', 'How long', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coappinfo_previous_how_long', old('coappinfo_previous_how_long',$creditapplication->coappinfo_previous_how_long), array('class'=>'form-control')) !!}
        
    </div>
</div>


    </div>
</div>
 <div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">Co-applicant Employment Information</h4>
		</div>
		<div class="panel-body">


 <div class="form-group">
    {!! Form::label('coemp_current_employer', 'Current employer', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coemp_current_employer', old('coemp_current_employer',$creditapplication->coemp_current_employer), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('coemp_employer_address', 'Employer address', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coemp_employer_address', old('coemp_employer_address',$creditapplication->coemp_employer_address), array('class'=>'form-control')) !!}
        
    </div>
</div>



 <div class="form-group">
    {!! Form::label('coemp_how_long', 'How long', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coemp_how_long', old('coemp_how_long',$creditapplication->coemp_how_long), array('class'=>'form-control')) !!}
        
    </div>
</div>



 <div class="form-group">
    {!! Form::label('coemp_phone', 'Phone', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coemp_phone', old('coemp_phone',$creditapplication->coemp_phone), array('class'=>'form-control')) !!}
        
    </div>
</div>



 <div class="form-group">
    {!! Form::label('coemp_e_mail', 'E-mail', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coemp_e_mail', old('coemp_e_mail',$creditapplication->coemp_e_mail), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('coemp_fax', 'Fax', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coemp_fax', old('coemp_fax',$creditapplication->coemp_fax), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('coemp_city', 'CITY', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coemp_city', old('coemp_city',$creditapplication->coemp_city), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('coemp_state', 'STATE', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coemp_state', old('coemp_state',$creditapplication->coemp_state), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('coemp_zipcode', 'ZIPCODE', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coemp_zipcode', old('coemp_zipcode',$creditapplication->coemp_zipcode), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('coemp_position', 'Position', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coemp_position', old('coemp_position',$creditapplication->coemp_position), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('coemp_hourly_salary', 'Hourly/Salary ', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coemp_hourly_salary', old('coemp_hourly_salary',$creditapplication->coemp_hourly_salary), array('class'=>'form-control')) !!}
        
    </div>
</div>


 <div class="form-group">
    {!! Form::label('coemp_annual_income', 'Annual income', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('coemp_annual_income', old('coemp_annual_income',$creditapplication->coemp_annual_income), array('class'=>'form-control')) !!}
        
    </div>
</div>

    </div>
</div>
 <div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">References</h4>
		</div>
		<div class="panel-body">

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
  
 
 

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
	<?php /*
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.creditapplication.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
	  
	  */ ?>
	  {!! link_to_route(config('quickadmin.route').'.creditapplication.index', trans('Back'), null, array('class' => 'btn btn-primary')) !!}
	  
    </div>
</div>


  </div>
</div>


{!! Form::close() !!}


@endsection