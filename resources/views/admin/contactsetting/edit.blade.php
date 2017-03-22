@extends('admin.layouts.master')

@section('content')

<div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">Contact Setting  </h4>
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

{!! Form::model($contactsetting, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.contactsetting.update', $contactsetting->id))) !!}

<div class="form-group">
    {!! Form::label('showroom_1_address', 'Address', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('showroom_1_address', old('showroom_1_address',$contactsetting->showroom_1_address), array('class'=>'form-control')) !!}
        
    </div>
</div>


<div class="form-group">
    {!! Form::label('showroom_1_tell', 'Tell', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('showroom_1_tell', old('showroom_1_tell',$contactsetting->showroom_1_tell), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('showroom_1_fax', 'Fax', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('showroom_1_fax', old('showroom_1_fax',$contactsetting->showroom_1_fax), array('class'=>'form-control')) !!}
        
    </div>
</div>


<div class="form-group">
    {!! Form::label('showroom_1_email', 'Email', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('showroom_1_email', old('showroom_1_email',$contactsetting->showroom_1_email), array('class'=>'form-control')) !!}
        
    </div>
</div>


<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.contactsetting.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>
</div>
</div>


<div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">Mail Setting </h4>
		</div>
		<div class="panel-body">

<div class="form-horizontal">
 


 

 
<input type="hidden" name="showroom_2_tell">
<input type="hidden" name="showroom_2_address">
<input type="hidden" name="showroom_2_fax">


<div class="form-group">
    {!! Form::label('showroom_2_email', 'Email', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('showroom_2_email', old('showroom_2_email',$contactsetting->showroom_2_email), array('class'=>'form-control')) !!}
        
    </div>
</div>


</div>
</div>
</div>

<div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">Contact Setting  ( Map ) </h4>
		</div>
		<div class="panel-body">
<div class="form-horizontal">

<div class="form-group">
    {!! Form::label('map_iframe', 'Map Iframe Url', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('map_iframe', old('map_iframe',$contactsetting->map_iframe), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
  <div class="col-sm-10 text-center">
    OR
    </div>
</div>

<div class="form-group">
    {!! Form::label('map_address', 'Map Address', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('map_address', old('map_address',$contactsetting->map_address), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.contactsetting.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

</div>
</div>
</div>

{!! Form::close() !!}

@endsection