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

{!! Form::model($ctbodystyle, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.ctbodystyle.update', $ctbodystyle->id))) !!}

<div class="form-group">
    {!! Form::label('bodystyle', 'Bodystyle*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('bodystyle', old('bodystyle',$ctbodystyle->bodystyle), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.ctbodystyle.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

</div>
</div>

@endsection