@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_create-add_new') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::open(array('route' => config('quickadmin.route').'.ctsubmodels.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="form-group">
    {!! Form::label('submodel_make', 'Make*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
				<select class="form-control getctmake_id" id="submodel_make" name="submodel_make"  required="true">
				<option value="">Select</option>
				 <?php 
				 foreach ($ctmake as $key=>$row) 
				 {
					 
				 echo ' <option   value="'.$row->id.'">'.$row->make.'</option> ';
				 
				 }
				 ?>
				 </select>
        
    </div>
</div>


<div class="form-group">
    {!! Form::label('ctmodel_id', 'Model*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        <?php /* {!! Form::select('ctmodel_id', $ctmodel, old('ctmodel_id'), array('class'=>'form-control')) !!} */ ?>
				<select class="form-control " id="ctmodel_id" name="ctmodel_id"  required="true">
				<option value="">Select</option>
				
				 </select> 
    </div>
</div>


<div class="form-group">
    {!! Form::label('submodels', 'Sub Model*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('submodels', old('submodels'), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-primary')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection


<script src="{{ url('quickadmin/js/') }}/jquery.min.js"></script>

<input type="hidden" id="homeurl" value="{{ url('/') }}">

 
<script>
$(document).ready(function(){
    $(".getctmake_id").change(function(){
	
	  var ctmake_id=this.value;
	 
		var homeurl=$("#homeurl").val();
		
		if(ctmake_id=='other'){
		  ctmake_id=0;
		}		
		
		 $.ajax({
            type: "POST",
            url: homeurl+'/callajax/'+ctmake_id,
            data: {ctmake_id: ctmake_id},
			type: 'get',
            success: function( response ) {
                $("#ctmodel_id").html(""+response+"");
            }
        });
		
		
		
    });
 });	
/**/	

</script>