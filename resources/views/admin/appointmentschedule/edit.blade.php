@extends('admin.layouts.master')

@section('content')

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
			<h4 class="panel-title">Appointment Schedule </h4>
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

{!! Form::model($appointmentschedule, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.appointmentschedule.update', $appointmentschedule->id))) !!}


 

<form class="tsf-step-content">
                                       
<div class="col-lg-12">	
		

<div class="form-group"> 
    <div class="col-sm-12">  
	<label class="">Name:</label> 
	<span>{!! $appointmentschedule->name!!}</span> 
    </div>
</div>

<div class="form-group"> 
    <div class="col-sm-12">  
	<label class="">Email:</label> 
	<span>{!! $appointmentschedule->email!!}</span> 
    </div>
</div>

<div class="form-group"> 
    <div class="col-sm-12">  
	<label class="">Phone number:</label> 
	<span>{!! $appointmentschedule->phone_number!!}</span> 
    </div>
</div>

 <div class="form-group"> 
    <div class="col-sm-12">  
	<label class="">Day/time:</label> 
	<span>{!! $appointmentschedule->day_time!!}</span> 
    </div>
</div>
 
 </form>

<div class="form-group">
    <div class="col-sm-12">
 
	  
	  	  {!! link_to_route(config('quickadmin.route').'.appointmentschedule.index', trans('Back'), null, array('class' => 'btn btn-primary')) !!}
    </div>
</div>

{!! Form::close() !!}


</div>
</div>

@endsection