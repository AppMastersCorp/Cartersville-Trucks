@extends('admin.layouts.master')

@section('content')

<div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h4>
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

{!! Form::model($headersetting, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.headersetting.update', $headersetting->id))) !!}

<div class="form-group">
    {!! Form::label('header_logo', 'Header Logo', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('header_logo') !!}
        {!! Form::hidden('header_logo_w', 4096) !!}
        {!! Form::hidden('header_logo_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('opening_hour', 'Opening Hour', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('opening_hour', old('opening_hour',$headersetting->opening_hour), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('call_now', 'Call Now', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('call_now', old('call_now',$headersetting->call_now), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('gmail', 'Gmail', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('gmail', old('gmail',$headersetting->gmail), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('facebook', 'Facebook', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('facebook', old('facebook',$headersetting->facebook), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('twitter', 'Instagram', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('twitter', old('twitter',$headersetting->twitter), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('youtube', 'Youtube', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('youtube', old('youtube',$headersetting->youtube), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.headersetting.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

</div>
</div>

@endsection