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
                @foreach ($errors->all() as $error)
				 <li class="error"> 
				 <?php 
				  $error= str_replace("ct","",$error);
				  $error= str_replace("id","",$error);
				 echo str_replace("ct","",$error); ?> 
				 </li>
				@endforeach
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::model($cttrucklisting, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.cttrucklisting.update', $cttrucklisting->id))) !!}


<div class="form-group">
    {!! Form::label('vin', 'VIN', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('vin', old('vin',$cttrucklisting->vin), array('class'=>'form-control')) !!}
        
    </div>
</div>


<div class="form-group">
    {!! Form::label('stock_auto', 'Stock#', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('stock_auto', old('stock_auto',$cttrucklisting->stock_auto), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    {!! Form::label('ctmake_id', 'Make*', array('class'=>'col-sm-2 control-label ')) !!}
    <div class="col-sm-10">
        <?php /* 
		{!! Form::select('ctmake_id', $ctmake, old('ctmake_id',$cttrucklisting->ctmake_id), array('class'=>'form-control getctmake_id')) !!}
		*/ ?> 
		<select class="form-control getctmake_id" id="ctmake_id" name="ctmake_id" onchange="fun_display(this.id,this.value);">
			<option value="">Please select</option> 
			@foreach ($ctmake as $row) 
			 <?php  
			 if($cttrucklisting->ctmake_id==$row->id){  echo $selected='selected'; }else{ $selected=''; } 
			 ?> 
			 <option  <?php echo $selected; ?> value="{{ $row->id }}">{{ $row->make }}</option> 
			 @endforeach  	
			 <option value="other">Other</option> 				 
		</select>	 
    </div>
</div>

<div class="form-group" id="ctmake_id_dis" style="display:none;">
<div class="col-sm-2 control-label"> 
 Make Other Value
</div>
 <div class="col-sm-10"> 
		<input id="ctmake_id_other" placeholder="Enter Make Other Field Value" class="form-control" name="ctmake_id_other" type="text">
    </div>
</div>


<?php /*Model*/ ?>

<div class="form-group">
    {!! Form::label('ctmodels_id', 'Model*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
       <?php /* {!! Form::select('ctmodels_id', $ctmodels, old('ctmodels_id',$cttrucklisting->ctmodels_id), array('class'=>'form-control')) !!} */ ?>
	   
			<select class="form-control " id="ctmodels_id" name="ctmodels_id" onchange="fun_display(this.id,this.value);">
			<option value="">Please select</option> 
				@foreach ($ctmodels as $row) 
				
				<?php  
				 if($cttrucklisting->ctmodels_id==$row->id){  echo $selected='selected'; }else{ $selected=''; } 
				 ?> 
				
				 <option <?php echo $selected; ?>  value="{{ $row->id }}">{{ $row->model }}</option> 
				 @endforeach  
	
			      <option value="other">Other</option> 				 		
			</select>  	   
	   
        
    </div>
</div>


<div class="form-group" id="ctmodels_id_dis" style="display:none;">
<div class="col-sm-2 control-label"> 
 Model Other Value
</div>
 <div class="col-sm-10"> 
		<input id="ctmodels_id_other" placeholder="Enter Model Other Field Value" class="form-control" name="ctmodels_id_other" type="text">
    </div>
</div>
 <?php /*Model*/ ?>
 
 
 
<?php /*Sub Model*/ ?>

<div class="form-group">
    {!! Form::label('ctmodels_id', 'Sub Model*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
       <?php /* {!! Form::select('ctmodels_id', $ctmodels, old('ctmodels_id',$cttrucklisting->ctmodels_id), array('class'=>'form-control')) !!} */ ?>
	   
 
	   
			<select class="form-control " id="ctsubmodels_id" name="ctsubmodels_id" onchange="fun_display(this.id,this.value);" required>
			<option value="">Please select</option>
				 
				@foreach ($ctsubmodels as $row) 
				
				<?php  
				 if($cttrucklisting->ctsubmodels_id==$row->id){  echo $selected='selected'; }else{ $selected=''; } 
				 ?>  
				 <option <?php echo $selected; ?>  value="{{ $row->id }}">{{ $row->submodels }}</option> 
				 @endforeach   
	
			      <option value="other">Other</option> 				 		
			</select>  	   
	   
        
    </div>
</div>


<div class="form-group" id="ctsubmodels_id_dis" style="display:none;">
<div class="col-sm-2 control-label"> 
 Sub Model Other Value
</div>
 <div class="col-sm-10"> 
		<input id="ctsubmodels_id_other" placeholder="Enter Sub Model Other Field Value" class="form-control" name="ctsubmodels_id_other" type="text">
    </div>
</div>
 <?php /*Model*/ ?>
 
 
 
<?php /*Body Style*/ ?>
<div class="form-group">
    {!! Form::label('ctbodystyle_id', 'Body Style', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        
		 <select class="form-control " id="ctbodystyle_id" name="ctbodystyle_id" onchange="fun_display(this.id,this.value);">

		<option value="0">Please select</option> 
		@foreach ($ctbodystyle as $row) 

		<?php  
		 if($cttrucklisting->ctbodystyle_id==$row->id){  echo $selected='selected'; }else{ $selected=''; } 
		 ?> 				

		 <option <?php echo $selected; ?>  value="{{ $row->id }}">{{ $row->bodystyle }}</option> 
		 @endforeach 
		<option value="other">Other</option> 		
		</select>
        
    </div>
</div>

<div class="form-group" id="ctbodystyle_id_dis" style="display:none;">
<div class="col-sm-2 control-label"> 
 Body Style Other Value
</div>
 <div class="col-sm-10"> 
		<input id="ctbodystyle_id_other" placeholder="Enter Type Other Field Value" class="form-control" name="ctbodystyle_id_other" type="text">
    </div>
</div>
<?php /*Body Style*/ ?> 
 
 
 
 
<?php /*Body Type*/ ?>
<div class="form-group">
    {!! Form::label('bodytype_id', 'Body Type', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        
		 <select class="form-control " id="bodytype_id" name="bodytype_id" onchange="fun_display(this.id,this.value);">

		<option value="0">Please select</option> 
		@foreach ($bodytype as $row) 

		<?php  
		 if($cttrucklisting->bodytype_id==$row->id){  echo $selected='selected'; }else{ $selected=''; } 
		 ?> 				

		 <option <?php echo $selected; ?>  value="{{ $row->id }}">{{ $row->body_type }}</option> 
		 @endforeach 
		<option value="other">Other</option> 		
		</select>
        
    </div>
</div>

<div class="form-group" id="bodytype_id_dis" style="display:none;">
<div class="col-sm-2 control-label"> 
 Body Type Other Value
</div>
 <div class="col-sm-10"> 
		<input id="bodytype_id_other" placeholder="Enter Body Type Other Field Value" class="form-control" name="bodytype_id_other" type="text">
    </div>
</div>
<?php /*Body Style*/ ?> 
 
 
 
 
<div class="form-group">
    {!! Form::label('ctregistered_id', 'Year*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
       <?php /* {!! Form::select('ctregistered_id', $ctregistered, old('ctregistered_id',$cttrucklisting->ctregistered_id), array('class'=>'form-control')) !!} */ ?>
        
			<select class="form-control " id="ctregistered_id" name="ctregistered_id" onchange="fun_display(this.id,this.value);">
			<option value="">Please select</option> 
				@foreach ($ctregistered as $row) 
				
				<?php  
				 if($cttrucklisting->ctregistered_id==$row->id){  echo $selected='selected'; }else{ $selected=''; } 
				 ?> 
				
				 <option <?php echo $selected; ?>  value="{{ $row->id }}">{{ $row->year }}</option> 
				 @endforeach 

				<option   value="other">Other</option> 	
			</select>  			
    </div>
</div>


<div class="form-group" id="ctregistered_id_dis" style="display:none;">
<div class="col-sm-2 control-label"> 
 Year Other Value
</div>
 <div class="col-sm-10"> 
		<input id="ctregistered_id_other" placeholder="Enter Year Other Field Value" class="form-control" name="ctregistered_id_other" type="text">
    </div>
</div>


<?php /*engine*/ ?>


<div class="form-group">
    {!! Form::label('enginesize', 'Engine*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        
		<?php /*
		{!! Form::text('engine_size', old('engine_size',$cttrucklisting->engine_size), array('class'=>'form-control')) !!}
		*/ ?>
			<select class="form-control " id="engine_size_id" name="engine_size_id" onchange="fun_display(this.id,this.value);">
			<option value="">Please select</option> 
				@foreach ($enginesize as $row) 
				<?php  
				 if($cttrucklisting->engine_size_id==$row->id){  echo $selected='selected'; }else{ $selected=''; } 
				 ?>  
				 <option <?php echo $selected; ?>  value="{{ $row->id }}">{{ $row->engine_size }}</option> 
				 @endforeach 
					<option   value="other">Other</option> 
			</select>  		
		
        
    </div>
</div>

<div class="form-group" id="engine_size_id_dis" style="display:none;">
<div class="col-sm-2 control-label"> 
 Engine size Other Value
</div>
 <div class="col-sm-10"> 
		<input id="engine_size_id_other" placeholder="Enter Engine Size Other Field Value" class="form-control" name="engine_size_id_other" type="text">
    </div>
</div>


<?php /*Horsepower  ?>

<div class="form-group">
    {!! Form::label('horsepower_id', 'Horsepower', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
<select class="form-control " id="horsepower_id" name="horsepower_id" onchange="fun_display(this.id,this.value);">
			<option value="0">Please select</option> 
				@foreach ($horsepower as $row) 
				
				<?php  
				 if($cttrucklisting->horsepower_id==$row->id){  echo $selected='selected'; }else{ $selected=''; } 
				 ?> 				
				
				 <option <?php echo $selected; ?>  value="{{ $row->id }}">{{ $row->horsepower }}</option> 
				 @endforeach  	
					<option   value="other">Other</option> 
			</select>  		
        
    </div>
</div>


<div class="form-group" id="horsepower_id_dis" style="display:none;">
<div class="col-sm-2 control-label"> 
 Horsepower Other Value
</div>
 <div class="col-sm-10"> 
		<input id="horsepower_id_other" placeholder="Enter Horsepower Other Field Value" class="form-control" name="horsepower_id_other" type="text">
    </div>
</div>

*/ ?>

 

<?php /*Torque  ?>

<div class="form-group">
    {!! Form::label('torque_id', 'Torque', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        	 <select class="form-control " id="torque_id" name="torque_id" onchange="fun_display(this.id,this.value);">
			 <option value="0">Please select</option> 
				@foreach ($torque as $row) 
				
				<?php  
				 if($cttrucklisting->torque_id==$row->id){  echo $selected='selected'; }else{ $selected=''; } 
				 ?> 					
				
				 <option  <?php echo $selected; ?>  value="{{ $row->id }}">{{ $row->torque }}</option> 
				 @endforeach
					<option   value="other">Other</option> 
			</select>         
    </div>
</div>

<div class="form-group" id="torque_id_dis" style="display:none;">
<div class="col-sm-2 control-label"> 
Torque Other Value
</div>
 <div class="col-sm-10"> 
		<input id="torque_id_other" placeholder="Enter Torque Other Field Value" class="form-control" name="torque_id_other" type="text">
    </div>
</div>

*/ ?>



<?php /*Drive train*/ ?>

<div class="form-group">
    {!! Form::label('drivetrain_id', 'Drive Train', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
          <select class="form-control " id="drivetrain_id" name="drivetrain_id" onchange="fun_display(this.id,this.value);">
			 <option value="0">Please select</option> 
				@foreach ($drivetrain as $row) 
				
				<?php  
				 if($cttrucklisting->drivetrain_id==$row->id){  echo $selected='selected'; }else{ $selected=''; } 
				 ?> 				
				
				 <option <?php echo $selected; ?>  value="{{ $row->id }}">{{ $row->drivetrain }}</option> 
				 @endforeach 
					<option   value="other">Other</option> 
			</select> 
    </div>
</div>


<div class="form-group" id="drivetrain_id_dis" style="display:none;">
<div class="col-sm-2 control-label"> 
Drive Train Other Value
</div>
 <div class="col-sm-10"> 
		<input id="drivetrain_id_other" placeholder="Enter Drive Train Other Field Value" class="form-control" name="drivetrain_id_other" type="text">
    </div>
</div>

<?php /*Transmission*/ ?>

<div class="form-group">
    {!! Form::label('cttransmission_id', 'Transmission', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
			
			<select class="form-control " id="cttransmission_id" name="cttransmission_id" onchange="fun_display(this.id,this.value);">
			<option value="0">Please select</option> 
				@foreach ($cttransmission as $row) 
				<?php  
				 if($cttrucklisting->cttransmission_id==$row->id){  echo $selected='selected'; }else{ $selected=''; } 
				 ?>  
				 <option <?php echo $selected; ?>  value="{{ $row->id }}">{{ $row->transmission }}</option> 
				 @endforeach
					<option   value="other">Other</option> 
			</select>  	
        
    </div>
</div>


<div class="form-group" id="cttransmission_id_dis" style="display:none;">
<div class="col-sm-2 control-label"> 
Transmission Other Value
</div>
 <div class="col-sm-10"> 
		<input id="cttransmission_id_other" placeholder="Enter Transmission Other Field Value" class="form-control" name="cttransmission_id_other" type="text">
    </div>
</div>

<?php /*Max Seating*/ ?>

<div class="form-group">
    {!! Form::label('seating_id', 'Max Seating', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
       	    <select class="form-control " id="seating_id" name="seating_id" onchange="fun_display(this.id,this.value);">
			<option value="0">Please select</option> 
				@foreach ($maxseating as $row) 
				<?php  
				 if($cttrucklisting->seating_id==$row->id){  echo $selected='selected'; }else{ $selected=''; } 
				 ?> 				
				
				 <option  <?php echo $selected; ?>  value="{{ $row->id }}">{{ $row->seating }}</option> 
				 @endforeach
					<option   value="other">Other</option> 
			</select> 
        
    </div>
</div>


<div class="form-group" id="seating_id_dis" style="display:none;">
<div class="col-sm-2 control-label"> 
Max Seating Other Value
</div>
 <div class="col-sm-10"> 
		<input id="seating_id_other" placeholder="Enter Max Seating Other Field Value" class="form-control" name="seating_id_other" type="text">
    </div>
</div>

<?php /*Weight ?>

<div class="form-group">
    {!! Form::label('weight', 'Weight', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
         {!! Form::text('weight', old('weight',$cttrucklisting->weight), array('class'=>'form-control')) !!}
        
    </div>
</div>
*/ ?>

<?php /*Max Towing capacity*/ ?>


<div class="form-group">
    {!! Form::label('max_towing_capacity', 'Max Towing Capacity', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
          {!! Form::text('max_towing_capacity', old('max_towing_capacity',$cttrucklisting->max_towing_capacity), array('class'=>'form-control')) !!}
        
    </div>
</div>


<div class="form-group">
    {!! Form::label('ctcondition_id', 'Condition*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
<select class="form-control " id="ctcondition_id" name="ctcondition_id" onchange="fun_display(this.id,this.value);">
			<option value="">Please select</option> 
				@foreach ($ctcondition as $row) 
				
				<?php  
				 if($cttrucklisting->ctcondition_id==$row->id){  echo $selected='selected'; }else{ $selected=''; } 
				 ?> 				
				
				 <option <?php echo $selected; ?>  value="{{ $row->id }}">{{ $row->condition }}</option> 
				 @endforeach  
				<option value="other">Other</option> 		
			</select>  		
        
    </div>
</div>

<div class="form-group" id="ctcondition_id_dis" style="display:none;">
<div class="col-sm-2 control-label"> 
 Condition Other Value
</div>
 <div class="col-sm-10"> 
		<input id="ctcondition_id_other" placeholder="Enter Condition Other Field Value" class="form-control" name="ctcondition_id_other" type="text">
    </div>
</div>

<?php /*

 {!! Form::hidden('stock_auto',$cttrucklisting->stock_auto) !!}
 */ ?>
 



<div class="form-group">
    {!! Form::label('mileage', 'Mileage', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('mileage', old('mileage',$cttrucklisting->mileage), array('class'=>'form-control')) !!}
        
    </div>
</div>
 




<div class="form-group">
    {!! Form::label('ctexteriorcolor_id', 'Exterior Color', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        	 <select class="form-control " id="ctexteriorcolor_id" name="ctexteriorcolor_id" onchange="fun_display(this.id,this.value);">
			<option value="0">Please select</option> 
				@foreach ($ctexteriorcolor as $row) 
				
				<?php  
				 if($cttrucklisting->ctexteriorcolor_id==$row->id){  echo $selected='selected'; }else{ $selected=''; } 
				 ?> 				
				
				 <option <?php echo $selected; ?>  value="{{ $row->id }}">{{ $row->exterior_color }}</option> 
				 @endforeach  
				<option value="other">Other</option> 		
			</select> 
        
    </div>
</div>

<div class="form-group" id="ctexteriorcolor_id_dis" style="display:none;">
<div class="col-sm-2 control-label"> 
 Exterior Color Other Value
</div>
 <div class="col-sm-10"> 
		<input id="ctexteriorcolor_id_other" placeholder="Enter Exterior Color Other Field Value" class="form-control" name="ctexteriorcolor_id_other" type="text">
    </div>
</div>




<div class="form-group">
    {!! Form::label('ctcolor_id', 'Interior Color', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
			<select class="form-control " id="ctcolor_id" name="ctcolor_id" onchange="fun_display(this.id,this.value);">
			<option value="0">Please select</option> 
				@foreach ($ctcolor as $row) 
				
				<?php  
				 if($cttrucklisting->ctcolor_id==$row->id){  echo $selected='selected'; }else{ $selected=''; } 
				 ?> 				
				
				 <option <?php echo $selected; ?>  value="{{ $row->id }}">{{ $row->color }}</option> 
				 @endforeach  
				<option value="other">Other</option> 		
			</select> 
    </div>
</div>

<div class="form-group" id="ctcolor_id_dis" style="display:none;">
<div class="col-sm-2 control-label"> 
 Color Other Value
</div>
 <div class="col-sm-10"> 
		<input id="ctcolor_id_other" placeholder="Enter Color Other Field Value" class="form-control" name="ctcolor_id_other" type="text">
    </div>
</div>


<?php /**/ ?>

<div class="form-group">
    {!! Form::label('price', 'Price1: (Only Displayed to Customer)*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('price', old('price',$cttrucklisting->price), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    {!! Form::label('price_2', 'Price2: Displayed to ADMIN/ClosedGroup/Agent', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('price_2', old('price_2',$cttrucklisting->price_2), array('class'=>'form-control')) !!}
        
    </div>
</div>

<?php /*

<div class="form-group">
    {!! Form::label('price_3', 'Price3: Displayed to ADMIN/ClosedGroup/Agent', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('price_3', old('price_3',$cttrucklisting->price_3), array('class'=>'form-control')) !!}
        
    </div>
</div>


<div class="form-group">
    {!! Form::label('price_4', 'Price4: Displayed to Managers', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('price_4', old('price_4',$cttrucklisting->price_4), array('class'=>'form-control')) !!}
        
    </div>
</div>


<div class="form-group">
    {!! Form::label('price_5', 'Price5: Displayed to ADMIN', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('price_5', old('price_5',$cttrucklisting->price_5), array('class'=>'form-control')) !!}
        
    </div>
</div>

*/ ?>

<?php /*
<div class="form-group">
    {!! Form::label('previous_owners', 'Previous Owners', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('previous_owners', old('previous_owners',$cttrucklisting->previous_owners), array('class'=>'form-control')) !!}
        
    </div>
</div>
*/ ?>

<div class="form-group">
    {!! Form::label('features', 'Feature 1: Safety', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('features', old('features',$cttrucklisting->features), array('class'=>'form-control')) !!}
    </div>
</div>

 
<div class="form-group">
    {!! Form::label('features_2', 'Feature 2: Comfort & Convenience', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('features_2', old('features_2',$cttrucklisting->features_2), array('class'=>'form-control')) !!}        
    </div>
</div> 

<div class="form-group">
    {!! Form::label('features_3', 'Features3: Music & Entertainment', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('features_3', old('features_3',$cttrucklisting->features_3), array('class'=>'form-control')) !!}
        
    </div>
</div>


<div class="form-group">
    {!! Form::label('features_4', 'Features4: Interior', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('features_4', old('features_4',$cttrucklisting->features_4), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    {!! Form::label('features_5', 'Features5: Exterior', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('features_5', old('features_5',$cttrucklisting->features_5), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    {!! Form::label('features_6', 'Features6: Tires', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('features_6', old('features_6',$cttrucklisting->features_6), array('class'=>'form-control')) !!}
        
    </div>
</div>

<input type="hidden" name="features_7">
<?php /*
<div class="form-group">
    {!! Form::label('features_7', 'Features7: Wheels', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('features_7', old('features_7',$cttrucklisting->features_7), array('class'=>'form-control')) !!}
        
    </div>
</div>
*/ ?>


<div class="form-group">
    {!! Form::label('gas_mileage_city', 'Gas Mileage City', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('gas_mileage_city', old('gas_mileage_city',$cttrucklisting->gas_mileage_city), array('class'=>'form-control')) !!}
        
    </div>
</div>




<div class="form-group">
    {!! Form::label('gas_mileage_highway', 'Gas mileage Highway', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('gas_mileage_highway', old('gas_mileage_highway',$cttrucklisting->gas_mileage_highway), array('class'=>'form-control')) !!}
        
    </div>
</div>


<div class="form-group">
    {!! Form::label('seo_url', 'SEO URL', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('seo_url', old('seo_url',$cttrucklisting->seo_url), array('class'=>'form-control')) !!}
        
    </div>
</div>












<?php /*
<div class="form-group">
    {!! Form::label('variant', 'Variant', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('variant', old('variant',$cttrucklisting->variant), array('class'=>'form-control')) !!}
        
    </div>
</div>
  
<div class="form-group">
    {!! Form::label('registration', 'Registration', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('registration', old('registration',$cttrucklisting->registration), array('class'=>'form-control')) !!}
        
    </div>
</div>



<div class="form-group">
    {!! Form::label('fuel_consumption', 'Fuel Consumption', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('fuel_consumption', old('fuel_consumption',$cttrucklisting->fuel_consumption), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('tax_band', 'Tax Band', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('tax_band', old('tax_band',$cttrucklisting->tax_band), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('tax_cost', 'Tax Cost', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('tax_cost', old('tax_cost',$cttrucklisting->tax_cost), array('class'=>'form-control')) !!}
        
    </div>
</div>





<div class="form-group">
    {!! Form::label('doors', 'Doors', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('doors', old('doors',$cttrucklisting->doors), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('ctfueltype_id', 'Fuel Type', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('ctfueltype_id', $ctfueltype, old('ctfueltype_id',$cttrucklisting->ctfueltype_id), array('class'=>'form-control')) !!}
        
    </div>
</div>
<div class="form-group">
    {!! Form::label('ctbodystyle_id', 'Bodystyle', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('ctbodystyle_id', $ctbodystyle, old('ctbodystyle_id',$cttrucklisting->ctbodystyle_id), array('class'=>'form-control')) !!}
        
    </div>
</div>








<div class="form-group">
    {!! Form::label('seats', 'Seats', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('seats', old('seats',$cttrucklisting->seats), array('class'=>'form-control')) !!}
        
    </div>
</div>






<div class="form-group">
    {!! Form::label('location', 'Location', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('location', old('location',$cttrucklisting->location), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    {!! Form::label('description', 'Description', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('description', old('description',$cttrucklisting->description), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div>

*/ ?>



<div class="form-group">
    {!! Form::label('description', 'Description', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('description', old('description',$cttrucklisting->description), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div>


<div class="form-group">
    {!! Form::label('video', 'Video', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('video', old('video',$cttrucklisting->video), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
<div class="col-sm-2"></div>
<?php if($cttrucklisting->image){ ?>
<div class="col-sm-10 rem_main_img" >
<img src="{{ asset('public/uploads/thumb') }}/<?php echo $cttrucklisting->image; ?>">

	  <br>
	  <a href="javascript:;" onclick="fun_rem_main(<?php echo $cttrucklisting->id; ?>);" class="tag label label-info" >remove</a>
</div>
<?php } ?>
</div>

<div class="form-group">
    {!! Form::label('image', 'Primary Image', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('image') !!}
        {!! Form::hidden('image_w', 4096) !!}
        {!! Form::hidden('image_h', 4096) !!}
        
    </div>
</div>

<div class="form-group">
    {!! Form::label('image', 'Gallery Images', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('image_file[]', array('class' => '','multiple' => 'multiple')) !!}
        {!! Form::hidden('image_file_w', 4096) !!}
        {!! Form::hidden('image_file_h', 4096) !!}
        
    </div>
</div>

<div class="form-group">
	<div class="col-sm-2">
	</div>
	
	<div class="col-sm-10 gallery">
 
@foreach ($trucklisting_img as $img) 

	@if($img->imgname != '')
	
	 <div class='col-sm-2 rem_<?php echo $img->id; ?>'>
 
	<img  class=" img-responsive thumbnail" src="{{ asset('public/truckimage/thumb') . '/'.  $img->imgname }}">
 
	  <a href="javascript:;" onclick="fun_rem(<?php echo $img->id; ?>);" class="tag label label-info" >remove</a>
	 </div>
	 
	 
	@endif 

@endforeach	
	
	
	</div> 
</div>



<div class="form-group">
    {!! Form::label('featured', 'Feature', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::hidden('featured','0') !!}
        {!! Form::checkbox('featured', 1, $cttrucklisting->featured == 1) !!}        
    </div>
</div>


<?php /*
<div class="form-group">
    {!! Form::label('show_gallery', 'Home page Gallery', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::hidden('show_gallery','0') !!}
        {!! Form::checkbox('show_gallery', 1, $cttrucklisting->show_gallery == 1) !!}        
    </div>
</div>

*/ ?>


<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.cttrucklisting.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

</div>
</div>

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
                $("#ctmodels_id").html(""+response+"");
            }
        });
		
		
		
    });
});


function fun_rem(id){

		var homeurl=$("#homeurl").val();

		 $.ajax({
            type: "POST",
            url: homeurl+'/callajax/remimg/'+id,
            data: {id: id},
			type: 'get',
            success: function( response ) {
                 
				 
				 $(".rem_"+response+"").remove();
				 
            }
        });


}


function fun_rem_main(id){


var result = confirm("Are you sure you want to delete?");

if (result) {

		var homeurl=$("#homeurl").val();

		 $.ajax({
            type: "POST",
            url: homeurl+'/callajax/remimg_main/'+id,
            data: {id: id},
			type: 'get',
            success: function( response ) {
                 
				 
				 $(".rem_main_img").remove();
				 
            }
        });
}

}





/*ctmake_id*/	
function fun_display(con,val){
	var con1=con;
	con=con+'_dis';
	con_other=con1+'_other';
	if(val=='other'){
		
		 
	   $('#'+con+'').css('display','block');
	    
	    $('#'+con_other+'').attr("required", "true");
	    

	}else{
	  $('#'+con+'').css('display','none');
       $('#'+con_other+'').removeAttr("required", "false");
	}


} 
 
/*ctmake_id*/


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
 

{!! Form::close() !!}

@endsection

