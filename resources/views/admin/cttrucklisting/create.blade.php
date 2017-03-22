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
		
		<div id="msg" class="alert alert-danger" style="display:none;">
			Fill all required textbox.
		</div>	

		<?php if(isset($_REQUEST['insert'])){ ?>
		<div id="updated" class="alert alert-success">
          Inserted Successfully
		</div>		
		<?php } ?>
		
		
    </div>
</div>

{!! Form::open(array('files' => true, 'route' => config('quickadmin.route').'.cttrucklisting.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}



<div class="form-group">
    {!! Form::label('v_id', 'Search V Id', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('v_id', old('v_id'), array('id'=>'v_id','class'=>'form-control')) !!}
    </div>
</div>

<hr>

<div class="form-group">
    
	<label for="vin" class="col-sm-2 control-label"><span>1- </span> VIN*</label>
    <div class="col-sm-10">
        {!! Form::text('vin', old('vin'), array('id'=>'vin','class'=>'form-control required')) !!}
        
    </div>
</div>

<div class="form-group"> 
	
	<label for="stock_auto" class="col-sm-2 control-label"><span>2- </span> Stock#*</label>
    <div class="col-sm-10">
        {!! Form::text('stock_auto', old('stock_auto'), array('id'=>'stock_auto','class'=>'form-control required')) !!}
        
    </div>
</div>


<?php /*make*/ ?>
<div class="form-group">
	<label for="ctmake_id" class="col-sm-2 control-label"><span>3- </span> Make*</label>
    <div class="col-sm-10">
			 <?php     
			/*
				  {!! Form::select('ctmake_id', $ctmake, old('ctmake_id'), array('class'=>'form-control getctmake_id')) !!}
			*/ ?>
			<select class="form-control getctmake_id required" id="ctmake_id" name="ctmake_id" onchange="fun_display(this.id,this.value);" required="true">
			<option value="">Please select</option> 
				@foreach ($ctmake as $row) 
				 <option   value="{{ $row->id }}">{{ $row->make }}</option> 
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


<?php /*model*/ ?>
<div class="form-group">
	<label for="ctmodels_id" class="col-sm-2 control-label"><span>4- </span>Model*</label>    
    <div class="col-sm-10">  
			<select class="form-control getctmodels_id required" id="ctmodels_id" name="ctmodels_id" onchange="fun_display(this.id,this.value);" required="true">
			<option value="">Please select</option> 
			 				 
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

<?php /*model*/ ?>




<?php /*sub model*/ ?>
<div class="form-group">
	<label for="ctsubmodels_id" class="col-sm-2 control-label"><span>5- </span>Sub Model*</label>
    <div class="col-sm-10">  
			<select class="form-control required" id="ctsubmodels_id" name="ctsubmodels_id" onchange="fun_display(this.id,this.value);" required="true">
				<option value="">Please select</option> 
			 
				 <option   value="other">Other</option> 				 
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

<?php /*sub model*/ ?>


<?php /*Body Style*/ ?>
<div class="form-group">
	<label for="ctbodystyle_id" class="col-sm-2 control-label"><span>6- </span>Body Style</label>
    
    <div class="col-sm-10">
	
	 <select class="form-control " id="ctbodystyle_id" name="ctbodystyle_id" onchange="fun_display(this.id,this.value);">
       <option value="0">Please select</option> 
		@foreach ($ctbodystyle as $row)  

		 <option   value="{{ $row->id }}">{{ $row->bodystyle }}</option> 
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




<?php /*bodytype*/ ?>
<div class="form-group">
	<label for="bodytype_id" class="col-sm-2 control-label"><span>7- </span>Body Type</label>
   
    <div class="col-sm-10">
	
	 <select class="form-control " id="bodytype_id" name="bodytype_id" onchange="fun_display(this.id,this.value);">
       <option value="0">Please select</option> 
		@foreach ($bodytype as $row)  

		 <option   value="{{ $row->id }}">{{ $row->body_type }}</option> 
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



<?php /*year*/ ?>
<div class="form-group">
 
	<label for="ctregistered_id" class="col-sm-2 control-label"><span>8- </span>Year*</label>
    <div class="col-sm-10">    
	   
			<select class="form-control required" id="ctregistered_id" name="ctregistered_id" onchange="fun_display(this.id,this.value);" required="true">
			<option value="">Please select</option> 
				@foreach ($ctregistered as $row) 
				 <option   value="{{ $row->id }}">{{ $row->year }}</option> 
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
	<label for="engine_size_id" class="col-sm-2 control-label"><span>9- </span>Engine*</label>
    
    <div class="col-sm-10">
      <?php /*  {!! Form::text('engine_size', old('engine_size'), array('class'=>'form-control')) !!}*/ ?>
	  
		<select class="form-control required" id="engine_size_id" name="engine_size_id" onchange="fun_display(this.id,this.value);" required="true">
		<option value="">Please select</option> 
			@foreach ($enginesize as $row) 
			  
			 <option   value="{{ $row->id }}">{{ $row->engine_size }}</option> 
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
				 <option   value="{{ $row->id }}">{{ $row->horsepower }}</option> 
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
				 <option   value="{{ $row->id }}">{{ $row->torque }}</option> 
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
	<label for="drivetrain_id" class="col-sm-2 control-label"><span>10- </span>Drive Train</label>
    <div class="col-sm-10">
          <select class="form-control " id="drivetrain_id" name="drivetrain_id" onchange="fun_display(this.id,this.value);">
			 <option value="0">Please select</option> 
				@foreach ($drivetrain as $row) 
				 <option   value="{{ $row->id }}">{{ $row->drivetrain }}</option> 
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
<label for="cttransmission_id" class="col-sm-2 control-label"><span>11- </span>Transmission</label>
 
    <div class="col-sm-10">
        
		
			<select class="form-control " id="cttransmission_id" name="cttransmission_id" onchange="fun_display(this.id,this.value);">
			<option value="0">Please select</option> 
				@foreach ($cttransmission as $row) 
				 <option   value="{{ $row->id }}">{{ $row->transmission }}</option> 
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
	<label for="seating_id" class="col-sm-2 control-label"><span>12- </span>Max Seating</label>
	
     
    <div class="col-sm-10">
       	    <select class="form-control " id="seating_id" name="seating_id" onchange="fun_display(this.id,this.value);">
			<option value="0">Please select</option> 
				@foreach ($maxseating as $row) 
				 <option   value="{{ $row->id }}">{{ $row->seating }}</option> 
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
        {!! Form::text('weight', old('weight'), array('class'=>'form-control')) !!}
        
    </div>
</div>
*/ ?>

<?php /*Max Towing capacity*/ ?>

<div class="form-group">
<label for="max_towing_capacity" class="col-sm-2 control-label"><span>13- </span>Max Towing Capacity</label>
    <div class="col-sm-10">
        {!! Form::text('max_towing_capacity', old('max_towing_capacity'), array('id'=>'max_towing_capacity','class'=>'form-control')) !!}
        
    </div>
</div>



<div class="form-group">
<label for="ctcondition_id" class="col-sm-2 control-label"><span>7- </span>Condition*</label>   
    <div class="col-sm-10">
			<select class="form-control required" id="ctcondition_id" name="ctcondition_id" onchange="fun_display(this.id,this.value);">
			<option value="">Please select</option> 
				@foreach ($ctcondition as $row) 
				 <option   value="{{ $row->id }}">{{ $row->condition }}</option> 
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
{!! Form::hidden('stock_auto',mt_rand(100000, 999999)) !!}
*/ ?>






<div class="form-group">
<label for="mileage" class="col-sm-2 control-label"><span>14- </span>Mileage</label>
    <div class="col-sm-10">
        {!! Form::text('mileage', old('mileage'), array('id'=>'mileage','class'=>'form-control')) !!}
        
    </div>
</div>

 


 

<div class="form-group">
<label for="ctexteriorcolor_id" class="col-sm-2 control-label"><span>15- </span>Exterior Color</label>
    <div class="col-sm-10">
        	 <select class="form-control " id="ctexteriorcolor_id" name="ctexteriorcolor_id" onchange="fun_display(this.id,this.value);">
			<option value="0">Please select</option> 
				@foreach ($ctexteriorcolor as $row) 
				 <option   value="{{ $row->id }}">{{ $row->exterior_color }}</option> 
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
	<label for="ctcolor_id" class="col-sm-2 control-label"><span>16- </span>Interior Color</label>
    <div class="col-sm-10">
			<select class="form-control " id="ctcolor_id" name="ctcolor_id" onchange="fun_display(this.id,this.value);">
			<option value="0">Please select</option> 
				@foreach ($ctcolor as $row) 
				 <option   value="{{ $row->id }}">{{ $row->color }}</option> 
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
 
 
<div class="form-group">
<label for="price" class="col-sm-2 control-label"><span>17- </span>Price1: (Only Displayed to Customer) *</label>
    <div class="col-sm-10">
        {!! Form::text('price', old('price'), array('id'=>'price','class'=>'form-control required')) !!}
        
    </div>
</div>




<div class="form-group">
<label for="price_2" class="col-sm-2 control-label"><span>18- </span>Price2: Displayed to ADMIN/ClosedGroup/Agent</label>
    <div class="col-sm-10">
        {!! Form::text('price_2', old('price_2'), array('id'=>'price_2','class'=>'form-control')) !!}
        
    </div>
</div>

<?php /*
<div class="form-group">
    {!! Form::label('price_3', 'Price3: Displayed to ADMIN/ClosedGroup/Agent', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('price_3', old('price_3'), array('class'=>'form-control')) !!}
        
    </div>
</div>


<div class="form-group">
    {!! Form::label('price_4', 'Price4: Displayed to Managers', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('price_4', old('price_4'), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    {!! Form::label('price_5', 'Price5: Displayed to ADMIN', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('price_5', old('price_5'), array('class'=>'form-control')) !!}
        
    </div>
</div>

*/ ?>

<?php /*
<div class="form-group">
    {!! Form::label('previous_owners', 'Previous Owners', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('previous_owners', old('previous_owners'), array('class'=>'form-control')) !!}
        
    </div>
</div>
*/ ?>
 


<div class="form-group">
<label for="features" class="col-sm-2 control-label"><span>19- </span>Feature 1: Safety</label>
    <div class="col-sm-10">
        {!! Form::text('features', old('features'), array('id'=>'features','class'=>'form-control')) !!}
        
    </div>
</div>


<div class="form-group">
<label for="features_2" class="col-sm-2 control-label"><span>20- </span>Feature 2: Comfort & Convenience</label>
    <div class="col-sm-10">
        {!! Form::text('features_2', old('features_2'), array('id'=>'features_2','class'=>'form-control')) !!}
        
    </div>
</div>


<div class="form-group">
<label for="features_3" class="col-sm-2 control-label"><span>21- </span>Features3: Music & Entertainment</label>
    <div class="col-sm-10">
        {!! Form::text('features_3', old('features_3'), array('id'=>'features_3','class'=>'form-control')) !!} 
    </div>
</div>


<div class="form-group">
<label for="features_4" class="col-sm-2 control-label"><span>22- </span>Features4: Interior</label>
    <div class="col-sm-10">
        {!! Form::text('features_4', old('features_4'), array('id'=>'features_4','class'=>'form-control')) !!} 
        
    </div>
</div>

<div class="form-group">
<label for="features_5" class="col-sm-2 control-label"><span>23- </span>Features5: Exterior</label>
    <div class="col-sm-10">
         {!! Form::text('features_5', old('features_5'), array('id'=>'features_5','class'=>'form-control')) !!} 
        
    </div>
</div>

<div class="form-group">
<label for="features_6" class="col-sm-2 control-label"><span>24- </span>Features6: Tires</label>
    <div class="col-sm-10">
        {!! Form::text('features_6', old('features_6'), array('id'=>'features_6','class'=>'form-control')) !!} 
        
    </div>
</div>

<input type="hidden" name="features_7">
<?php /*
<div class="form-group">
    {!! Form::label('features_7', 'Features7: Wheels', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
         {!! Form::text('features_7', old('features_7'), array('class'=>'form-control')) !!} 
        
    </div>
</div>
*/ ?>






<div class="form-group">
<label for="gas_mileage_city" class="col-sm-2 control-label"><span>25- </span>Gas Mileage City</label>
 
    <div class="col-sm-10">
        {!! Form::text('gas_mileage_city', old('gas_mileage_city'), array('id'=>'gas_mileage_city','class'=>'form-control')) !!}
        
    </div>
</div>


<div class="form-group">
<label for="gas_mileage_highway" class="col-sm-2 control-label"><span>26- </span>Gas mileage Highway</label>
   
    <div class="col-sm-10">
        {!! Form::text('gas_mileage_highway', old('gas_mileage_highway'), array('id'=>'gas_mileage_highway','class'=>'form-control')) !!}
        
    </div>
</div>


<div class="form-group">
<label for="seo_url" class="col-sm-2 control-label"><span>27- </span>SEO URL</label>

    <div class="col-sm-10">
        {!! Form::text('seo_url', old('seo_url'), array('id'=>'seo_url','class'=>'form-control')) !!}
        
    </div>
</div>




<?php /*
<div class="form-group">
    {!! Form::label('variant', 'Variant', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('variant', old('variant'), array('class'=>'form-control')) !!}
        
    </div>
</div>




<div class="form-group">
    {!! Form::label('registration', 'Registration', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('registration', old('registration'), array('class'=>'form-control')) !!}
        
    </div>
</div>



<div class="form-group">
    {!! Form::label('fuel_consumption', 'Fuel Consumption', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('fuel_consumption', old('fuel_consumption'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('tax_band', 'Tax Band', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('tax_band', old('tax_band'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('tax_cost', 'Tax Cost', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('tax_cost', old('tax_cost'), array('class'=>'form-control')) !!}
        
    </div>
</div>




<div class="form-group">
    {!! Form::label('doors', 'Doors', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('doors', old('doors'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('ctfueltype_id', 'Fuel Type', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('ctfueltype_id', $ctfueltype, old('ctfueltype_id'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('ctbodystyle_id', 'Bodystyle', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('ctbodystyle_id', $ctbodystyle, old('ctbodystyle_id'), array('class'=>'form-control')) !!}
        
    </div>
</div>










<div class="form-group">
    {!! Form::label('seats', 'Seats', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('seats', old('seats'), array('class'=>'form-control')) !!}
        
    </div>
</div>

 
<div class="form-group">
    {!! Form::label('location', 'Location', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('location', old('location'), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    {!! Form::label('description', 'Description', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('description', old('description'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div>


*/ ?>



<div class="form-group">
<label for="description" class="col-sm-2 control-label"><span>28- </span>Description</label>     
    <div class="col-sm-10">
        {!! Form::textarea('description', old('description'), array('id'=>'description','class'=>'form-control ckeditor')) !!}
        
    </div>
</div>


<div class="form-group">
<label for="video" class="col-sm-2 control-label"><span>29- </span>Video</label>
    
    <div class="col-sm-10">
        {!! Form::text('video', old('video'), array('id'=>'video','class'=>'form-control')) !!}
        
    </div>
</div>

 

 
{!! Form::hidden('show_gallery','0') !!}
<?php /*
<div class="form-group">
    {!! Form::label('show_gallery', 'Home page Gallery', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::hidden('show_gallery','0') !!}
        {!! Form::checkbox('show_gallery', 1, false) !!}
        
    </div>
</div>
*/?>

<div class="form-group">
<label for="image" class="col-sm-2 control-label"><span>30- </span>Primary Image</label> 
    <div class="col-sm-10">
        {!! Form::file('image') !!}
        {!! Form::hidden('image_w', 4096) !!}
        {!! Form::hidden('image_h', 4096) !!}
        
    </div>
</div>

<div class="form-group">
<label for="image" class="col-sm-2 control-label"><span>31- </span>Gallery Images</label>
     
    <div class="col-sm-10">
        {!! Form::file('image_file[]', array('id'=>'imgupload','class' => '','multiple' => 'multiple')) !!} 
		 
        {!! Form::hidden('image_file_w', 4096) !!}
        {!! Form::hidden('image_file_h', 4096) !!}
        <span id="img_msg" style="display:none;">Please Upload maximum 15 MB images</span>
    </div>
</div>
 
<div class="form-group">
<label for="featured" class="col-sm-2 control-label"><span>32- </span>Feature</label>
  
    <div class="col-sm-10">
        {!! Form::hidden('featured','0') !!}
        {!! Form::checkbox('featured', 1, false) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      <?php /**{!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-primary')) !!} */ ?>
	  
	  <input class="btn btn-primary" value="Create" type="button" onclick="fun_valid();">
    </div>
</div>

</div>
</div>


<script src="{{ url('quickadmin/js/') }}/jquery.min.js"></script>

<input type="hidden" id="homeurl" value="{{ url('/') }}">

 
<script>
$(document).ready(function(){


setTimeout(function(){ $('#updated').hide(800);  }, 6000);


$('#imgupload').change(function(){
  
 
    var imageSizeArr = 0;
    var imageSize = document.getElementById('imgupload');
                var imageCount = imageSize.files.length; 
				imageSizes=0;
                for (var i = 0; i < imageSize.files.length; i++)
                {
                    var imageSizes = imageSizes+imageSize.files[i].size;
					 
					 
					 
                }
				imageSizes=( parseFloat(imageSizes)/ 1024);
				imageSizes=( parseFloat(imageSizes)/ 1024);
				
				if(imageSizes>15){
				  
					$('#img_msg').css('display','block');
					
				}else{
				   $('#img_msg').css('display','none');
				}
				
				
			 
 }); 

$( "select,input" ).change(function() {
  
  var val=$(this).val();  
	if(val!=""){
	 $(this).removeClass("has-error");
	}
  
});

$( "input" ).keypress(function() {
  
  var val=$(this).val();  
	if(val!=""){
	 $(this).removeClass("has-error");
	}
  
});


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
                $("#ctmodels_id").html(""+response+"<option value='other'>Other</option>");
            }
        });
		
		
		
    });
	
	
	

/**********************************/
	
	
    $(".getctmodels_id").change(function(){
	
	  var ctmodels_id=this.value;
	 
		var homeurl=$("#homeurl").val();
		
		if(ctmodels_id=='other'){
		  ctmodels_id=0;
		}
		
		 $.ajax({
            type: "POST",
            url: homeurl+'/callajax/ctmodels_id/'+ctmodels_id,
            data: {ctmodels_id: ctmodels_id},
			type: 'get',
            success: function( response ) {
                $("#ctsubmodels_id").html(""+response+"<option value='other'>Other</option>");
            }
        });
		
		
		
    });	
	
	
	
/********************************/		
	
/**/	

 
 var homeurl=$("#homeurl").val();	
$(function() {
    $( "#v_id" ).autocomplete({
        source: homeurl+'/callajax/autocomplete/',
		 select: function (event, ui) {  
			var val=ui.item.label;
			var homeurl=$("#homeurl").val();
			 
			$.ajax({
				type: "POST",
				url: homeurl+'/callajax/autocomplete/getvalue/',
				data: {val: val},
				type: 'get',
				success: function( response ) {
					var data = jQuery.parseJSON(response);
					 
					  /*data[0].id;*/
						$("#vin").val(data[0].vin);
						 
						
					document.getElementById('stock_auto').value = data[0].stock_auto; 
						
						 
					document.getElementById('ctmake_id').value = data[0].ctmake_id;
					
					/*
					document.getElementById('ctmodels_id').value = data[0].ctmodels_id;
					document.getElementById('ctsubmodels_id').value = data[0].ctsubmodels_id;
					*/
					callfirst(data[0].ctmake_id,data[0].ctmodels_id);
					callsecond(data[0].ctmodels_id,data[0].ctsubmodels_id)
					
					
					document.getElementById('ctregistered_id').value = data[0].ctregistered_id;
					
					/*document.getElementById('previous_owners').value = data[0].previous_owners;*/
					document.getElementById('price').value = data[0].price;
					document.getElementById('ctcolor_id').value = data[0].ctcolor_id;document.getElementById('ctexteriorcolor_id').value = data[0].ctexteriorcolor_id;document.getElementById('ctbodystyle_id').value = data[0].ctbodystyle_id;
					
					document.getElementById('bodytype_id').value = data[0].bodytype_id;
					
					document.getElementById('mileage').value = data[0].mileage;
					document.getElementById('engine_size_id').value = data[0].engine_size_id;
					document.getElementById('cttransmission_id').value = data[0].cttransmission_id;
					document.getElementById('seating_id').value = data[0].seating_id;
					document.getElementById('price_2').value = data[0].price_2;
					
					
					document.getElementById('drivetrain_id').value = data[0].drivetrain_id;
					document.getElementById('ctcondition_id').value = data[0].ctcondition_id;					
					
					/*document.getElementById('price_3').value = data[0].price_3;
					document.getElementById('price_4').value = data[0].price_4;
					document.getElementById('price_5').value = data[0].price_5;*/
					document.getElementById('features').value = data[0].features;
					
					
					document.getElementById('features_2').value = data[0].features_2;
					document.getElementById('features_3').value = data[0].features_3;
					
					document.getElementById('features_4').value = data[0].features_4;
					document.getElementById('features_5').value = data[0].features_5;
					document.getElementById('features_6').value = data[0].features_6;
					document.getElementById('features_7').value = data[0].features_7;

					
					
					
					document.getElementById('gas_mileage_city').value = data[0].gas_mileage_city;
					document.getElementById('gas_mileage_highway').value = data[0].gas_mileage_highway;
					

					
					/* document.getElementById('horsepower_id').value = data[0].horsepower_id; */
					/*document.getElementById('torque_id').value = data[0].torque_id;*/
					
					/*document.getElementById('weight').value = data[0].weight;*/
					
					document.getElementById('max_towing_capacity').value = data[0].max_towing_capacity;
					

					document.getElementById('description').value = data[0].description;
					
					
					
					
					$(".cke_contents_ltr").val(data[0].description);
					
					document.getElementById('video').value = data[0].video;
					 
					
				}
			});
		 
		 
		 }
    });
});
 
	
/**/	
	
	

	
	
});


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


function callfirst(submodel_make,ctmodel_id){

	  
		var homeurl=$("#homeurl").val();
		
	 	
		
		 $.ajax({
            type: "POST",
            url: homeurl+'/callajax/selected/'+submodel_make,
            data: {submodel_make: submodel_make,ctmodel_id: ctmodel_id},
			type: 'get',
            success: function( response ) {
                $("#ctmodels_id").html(""+response+"<option value='other'>Other</option>");
            }
        });
		
}

function callsecond(ctmodels_id,ctsubmodels_id){

	  
		var homeurl=$("#homeurl").val();
		
	 	
		
		 $.ajax({
            type: "POST",
            url: homeurl+'/callajax/selectedctsubmodels_id/'+ctmodels_id,
            data: {ctmodels_id: ctmodels_id,ctsubmodels_id: ctsubmodels_id},
			type: 'get',
            success: function( response ) {
                $("#ctsubmodels_id").html(""+response+"<option value='other'>Other</option>");
            }
        });
		
}




function fun_valid(){


var ii=1; 

$('.required').each(function(){   

    if(!/[\S]/.test($(this).html())) {  
		  
		  
		  if($(this).val()==""){
		  
		  $(this).addClass("has-error");
		  $("#msg").css("display","block"); 
		  ii=0; 
		   $("html, body").animate({ scrollTop: 0 }, 1500);
		  
		  }
		  
    } 
	
}) 



var ctmake_id=$('select#ctmake_id option:selected').val(); 
if(ctmake_id==""){

	$("#ctmake_id").addClass("has-error");
	$("#ctmake_id").css("display","block"); 
	ii=0; 
	$("html, body").animate({ scrollTop: 0 }, 1500); 

}
 
var ctmodels_id=$('select#ctmodels_id option:selected').val(); 
if(ctmodels_id==""){

	$("#ctmodels_id").addClass("has-error");
	$("#ctmodels_id").css("display","block"); 
	ii=0; 
	$("html, body").animate({ scrollTop: 0 }, 1500); 

} 
 
var ctsubmodels_id=$('select#ctsubmodels_id option:selected').val(); 
if(ctsubmodels_id==""){

	$("#ctsubmodels_id").addClass("has-error");
	$("#ctsubmodels_id").css("display","block"); 
	ii=0; 
	$("html, body").animate({ scrollTop: 0 }, 1500); 

} 

var ctregistered_id=$('select#ctregistered_id option:selected').val(); 
if(ctregistered_id==""){

	$("#ctregistered_id").addClass("has-error");
	$("#ctregistered_id").css("display","block"); 
	ii=0; 
	$("html, body").animate({ scrollTop: 0 }, 1500); 

} 
 
 
var engine_size_id=$('select#engine_size_id option:selected').val(); 
if(engine_size_id==""){

	$("#engine_size_id").addClass("has-error");
	$("#engine_size_id").css("display","block"); 
	ii=0; 
	$("html, body").animate({ scrollTop: 0 }, 1500); 

}  


var ctcondition_id=$('select#ctcondition_id option:selected').val(); 
if(ctcondition_id==""){

	$("#ctcondition_id").addClass("has-error");
	$("#ctcondition_id").css("display","block"); 
	ii=0; 
	$("html, body").animate({ scrollTop: 0 }, 1500); 

}  
 
 
var imageSizeArr = 0;
var imageSize = document.getElementById('imgupload');
		var imageCount = imageSize.files.length; 
		imageSizes=0;
		for (var i = 0; i < imageSize.files.length; i++)
		{
			var imageSizes = imageSizes+imageSize.files[i].size;
			 
			 
			 
		}
		imageSizes=( parseFloat(imageSizes)/ 1024);
		imageSizes=( parseFloat(imageSizes)/ 1024);
		
		if(imageSizes>15){
		  
			$('#img_msg').css('display','block');
			ii=0; 
		}else{
		   $('#img_msg').css('display','none');
		} 
 
 
 
if(ii==0){  return false; }

$("#msg").css("display","none"); 

$( "#form-with-validation" ).submit();

}

</script>
	<style>
	.col-sm-2.control-label{
	  text-align: left !important;
	}
	
	.col-sm-2.control-label > span {
		padding: 4px;
		min-width: 28px;
		display: inline-block;
	 }
	 
	@media screen and (min-width: 910px) {
		
		.col-sm-2.control-label{ width:14.667% !important; }
		.col-sm-10 {
			width: 79.3333%;
		}
		
	}	 
	 
	 

	.has-error,.has-error:focus{
		border-color: #a94442;	
	 }
	 
	 #img_msg{
	  color: #a94442;
	  padding:6px;
	 }
	</style>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

{!! Form::close() !!}

@endsection