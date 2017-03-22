@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::model($ctcarlisting2, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.ctcarlisting2.update', $ctcarlisting2->id))) !!}

<div class="form-group">
    {!! Form::label('text_field', 'Text Field*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('text_field', old('text_field',$ctcarlisting2->text_field), array('class'=>'form-control')) !!}
        <p class="help-block">Text Field comment</p>
    </div>
</div><div class="form-group">
    {!! Form::label('email_field', 'Email Field', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::email('email_field', old('email_field',$ctcarlisting2->email_field), array('class'=>'form-control')) !!}
        <p class="help-block">Email Field comment</p>
    </div>
</div><div class="form-group">
    {!! Form::label('long_text', 'Long TEXT', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('long_text', old('long_text',$ctcarlisting2->long_text), array('class'=>'form-control')) !!}
        <p class="help-block">Long TEXT comment</p>
    </div>
</div><div class="form-group">
    {!! Form::label('long_text_ck', 'LongTextCk', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('long_text_ck', old('long_text_ck',$ctcarlisting2->long_text_ck), array('class'=>'form-control ckeditor')) !!}
        <p class="help-block">LongTextCk comment</p>
    </div>
</div><div class="form-group">
    {!! Form::label('radio_btn', 'Radio button', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::radio('radio_btn', '1,2,3', false) !!}
        <p class="help-block">radio button comment</p>
    </div>
</div><div class="form-group">
    {!! Form::label('checkbox', 'Checkbox', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::hidden('checkbox','') !!}
        {!! Form::checkbox('checkbox', 1, $ctcarlisting2->checkbox == 1) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('datepicker', 'Date Picker', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('datepicker', old('datepicker',$ctcarlisting2->datepicker), array('class'=>'form-control datepicker')) !!}
        <p class="help-block">comment Datepicker</p>
    </div>
</div><div class="form-group">
    {!! Form::label('datetimepicker', 'Date Time Picker', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('datetimepicker', old('datetimepicker',$ctcarlisting2->datetimepicker), array('class'=>'form-control datetimepicker')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('ctcarlisting_id', 'Relationship', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('ctcarlisting_id', $ctcarlisting, old('ctcarlisting_id',$ctcarlisting2->ctcarlisting_id), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('file_field', 'File Field', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('file_field') !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('photo_field', 'Photo Field', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('photo_field') !!}
        {!! Form::hidden('photo_field_w', 4096) !!}
        {!! Form::hidden('photo_field_h', 4096) !!}
        <p class="help-block">Photo Field comment</p>
    </div>
</div><div class="form-group">
    {!! Form::label('money_field', 'Money field', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('money_field', old('money_field',$ctcarlisting2->money_field), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('enumfield', 'Enum Field', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('enumfield', $enumfield, old('enumfield',$ctcarlisting2->enumfield), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.ctcarlisting2.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection