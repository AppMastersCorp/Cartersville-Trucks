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
			<h4 class="panel-title">User Contact</h4>
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

{!! Form::model($usercontact, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.usercontact.update', $usercontact->id))) !!}


<form class="tsf-step-content">
                                    
<div class="col-lg-12">

<div class="form-group">
<div class="col-sm-12">
    {!! Form::label('name', 'Name:', array('class'=>' control-label')) !!}
    
         
        <span>{!! $usercontact->name!!}</span>
    </div>
</div>


<div class="form-group">
<div class="col-sm-12">
    {!! Form::label('email', 'Email:', array('class'=>' control-label')) !!}
   
	<span>{!! $usercontact->email!!}</span>		
    </div>
</div>



<div class="form-group">
<div class="col-sm-12">
    {!! Form::label('address', 'Address:', array('class'=>' control-label')) !!}
     
        <span>{!! $usercontact->address!!}</span>	
    </div>
</div>


<div class="form-group">
<div class="col-sm-12">
    {!! Form::label('comment', 'Comment:', array('class'=>'  control-label')) !!}
    
		<span>{!! $usercontact->comment!!}</span>	
        
    </div>
</div>

<div class="form-group">
	<div class="col-sm-12">
    {!! Form::label('date', 'Date:', array('class'=>' control-label')) !!}
    
        <span>{!! $usercontact->date!!}</span>	
    </div>
</div>

<div class="form-group">
    <div class="col-sm-12">
       
      
	  
	  {!! link_to_route(config('quickadmin.route').'.usercontact.index', trans('Back'), null, array('class' => 'btn btn-primary')) !!}
    </div>
</div>

</div>
</div>


</div>
</div>

{!! Form::close() !!}

@endsection