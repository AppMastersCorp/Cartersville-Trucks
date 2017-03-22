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

{!! Form::model($footersetting, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.footersetting.update', $footersetting->id))) !!}

<div class="form-group">
    {!! Form::label('footer_logo', 'Footer Logo', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('footer_logo') !!}
        {!! Form::hidden('footer_logo_w', 4096) !!}
        {!! Form::hidden('footer_logo_h', 4096) !!}
        
    </div>
</div>

<div class="form-group">
    {!! Form::label('copyright', 'Copyright', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('copyright', old('copyright',$footersetting->copyright), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.footersetting.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>



</div>
</div>





<div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">Footer Left Content</h4>
		</div>
		<div class="panel-body">
		
<div class="row">
    <div class="form-horizontal">		
	

	
<div class="form-group">
    {!! Form::label('footer_left_con_title', 'Title', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('footer_left_con_title', old('footer_left_con_title',$footersetting->footer_left_con_title), array('class'=>'form-control')) !!}
        
    </div>
</div>		
		
		
<div class="form-group">
    {!! Form::label('footer_left_con', 'Content', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('footer_left_con', old('footer_left_con',$footersetting->footer_left_con), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div>		
	


	
		
	<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.footersetting.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
	</div>	 
	
	</div>
	</div>
	
</div>
</div>




{!! Form::close() !!}

@endsection


 