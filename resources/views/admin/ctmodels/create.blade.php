@extends('admin.layouts.master')

@section('content')

<div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">{{ trans('quickadmin::templates.templates-view_create-add_new') }}</h4>
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

{!! Form::open(array('route' => config('quickadmin.route').'.ctmodels.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="form-group">
    {!! Form::label('ctmake_id', 'Make*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        
		<?php /*{!! Form::select('ctmake_id', $ctmake, old('ctmake_id'), array('class'=>'form-control')) !!} */?>
	<select class="form-control " id="ctmake_id" name="ctmake_id">
<option value="">Please select</option>	
				@foreach ($ctmake as $row)	
			 
				 
				 <option   value="{{ $row->id }}">{{ $row->make }}</option>
				   
				 @endforeach 		
		</select>  
        
    </div>
</div><div class="form-group">
    {!! Form::label('model', 'Model*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('model', old('model'), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-primary')) !!}
    </div>
</div>

</div>
</div>


{!! Form::close() !!}

@endsection