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

{!! Form::model($ctsubmodels, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.ctsubmodels.update', $ctsubmodels->id))) !!}

<pre>
 
</pre>

<div class="form-group">
    {!! Form::label('submodel_make', 'Make*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
				<select class="form-control getctmake_id" id="submodel_make" name="submodel_make"  required="true">
				 <?php 
				 foreach ($ctmake as $key=>$row) 
				 {	
					$selected='';
					if($ctsubmodels->submodel_make==$row->id){ $selected='selected';  }
					 
				 echo ' <option '.$selected.'  value="'.$row->id.'">'.$row->make.'</option> ';
				 
				 }
				 ?>
				 </select>
        
    </div>
</div><div class="form-group">
    {!! Form::label('ctmodel_id', 'Model*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
       <?php /*
		{!! Form::select('ctmodel_id', $ctmodel, old('ctmodel_id',$ctsubmodels->ctmodel_id), array('class'=>'form-control')) !!}
		*/ ?>
		
				<select class="form-control " id="ctmodel_id" name="ctmodel_id"  required="true">
				 <?php 
				 foreach ($ctmodels as $row) 
				 {
					$select="";	
				if($ctsubmodels->ctmodel_id==$row->id){
				 $select="selected";
				}		
						
						
				 echo ' <option '.$select.'  value="'.$row->id.'">'.$row->model.'</option> ';
				 
				 }
				 ?>
				 </select>		
		
		
        
    </div>
</div><div class="form-group">
    {!! Form::label('submodels', 'Sub Model*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('submodels', old('submodels',$ctsubmodels->submodels), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.ctsubmodels.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
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
callfirst('<?php echo $ctsubmodels->submodel_make; ?>','<?php echo $ctsubmodels->ctmodel_id; ?>');

function callfirst(submodel_make,ctmodel_id){

	  
		var homeurl=$("#homeurl").val();
		
	 	
		
		 $.ajax({
            type: "POST",
            url: homeurl+'/callajax/selected/'+submodel_make,
            data: {submodel_make: submodel_make,ctmodel_id: ctmodel_id},
			type: 'get',
            success: function( response ) {
                $("#ctmodel_id").html(""+response+"");
            }
        });
		
}

</script>