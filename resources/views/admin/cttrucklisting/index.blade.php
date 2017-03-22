@extends('admin.layouts.master')

@section('content')

<style>

.input-group .col-sm-4{ padding:6px; }


.table td, .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th{ 
   padding: 14px !important; 
}
</style>

<div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">Trucklisting</h4>
		</div>
		<div class="panel-body">
		
		<div class="row">
		<div class="search p bg-light m-b-sm col-sm-8 col-sm-offset-2">
		
<?php

$i=0;

if(!isset($_REQUEST['search'])){

$_REQUEST['search']='';
}
if(!isset($_REQUEST['con'])){

$_REQUEST['con']='';
}

if(!isset($_REQUEST['make'])){

$_REQUEST['make']='';
}

if(!isset($_REQUEST['mod'])){

$_REQUEST['mod']='';
}

if(!isset($_REQUEST['y'])){

$_REQUEST['y']='';
}

if(!isset($_REQUEST['s'])){

$_REQUEST['s']='';
}

if(!isset($_REQUEST['stock'])){

$_REQUEST['stock']='';
}

if(!isset($_REQUEST['featured'])){
$_REQUEST['featured']='all';
}


if(!isset($_REQUEST['page']) || ($_REQUEST['page']=='all') ){
 $_REQUEST['page']='all';
 
}else{

	 
 $i=( $_REQUEST['page']-1)*25;

} 
 


 
 
?>		
		
			<form action="" method="GET" data-default="150">
				<div class="input-group">
					<input type="hidden" value="<?php echo $_REQUEST['page']; ?>" name="page">	
						
					<div class=" col-sm-4">
					<select class="form-control input-search" name="con">
						<option value="">Select Condition</option> 
						@foreach ($ctcondition as $row) 
						
						<?php 
						$selected='';
						 
						 if($_REQUEST['con']==$row->id){  echo $selected='selected'; } 
						 
						 
						 ?> 				
						
						 <option <?php echo $selected; ?>  value="{{ $row->id }}">{{ $row->condition }}</option> 
						 @endforeach  
					 					   
					</select>	
					</div>
					
					
					<div class=" col-sm-4">
					<select class="form-control input-search getctmake_id" name="make">
						<option value="">Select Make</option> 
									@foreach ($ctmake as $row) 
									 <?php  
									 if($_REQUEST['make']==$row->id){  echo $selected='selected'; }else{ $selected=''; } 
									 ?> 
									 <option  <?php echo $selected; ?> value="{{ $row->id }}">{{ $row->make }}</option> 
									 @endforeach  	 
					 					   
					</select>	
					</div>	


					<div class=" col-sm-4">
					<select class="form-control input-search" id="mod" name="mod" >
							<option value="">Select Model</option>  
							<?php if($_REQUEST['make']){ ?>
							
							@foreach ($ctmodels as $row)  
							<?php  
							 if($_REQUEST['mod']==$row->id){  echo $selected='selected'; }else{ $selected=''; } 
							 ?>  
							 <option <?php echo $selected; ?>  value="{{ $row->id }}">{{ $row->model }}</option> 
							 @endforeach 									 
					 			
							<?php } ?>			
					</select>	
					</div>	


					<div class=" col-sm-4">
					<select class="form-control input-search" name="y" >
						            <option value="">Select Year</option>  
									@foreach ($ctregistered as $row) 

									<?php  
									 if($_REQUEST['y']==$row->id){  echo $selected='selected'; }else{ $selected=''; } 
									 ?> 

									<option <?php echo $selected; ?>  value="{{ $row->id }}">{{ $row->year }}</option> 
									@endforeach 	 
					</select>	
					</div>						
 
 
 					<div class=" col-sm-4">
						<select class="form-control input-search" name="s" >
						<option value="">Select Status</option> 
						<option <?php if($_REQUEST['s']==1){ echo 'selected'; } ?> value="1">Active</option>
						<option <?php if($_REQUEST['s']=='0'){ echo 'selected'; } ?> value="0">In active</option> 

						</select>	
					</div>	
					
					<div class="col-sm-4">
					  <input type="text" class="form-control" value="<?php echo $_REQUEST['stock']; ?>" name="stock" placeholder="Stock#">
					</div>
					
					<div class="row"> <br>
							
						<div class="col-sm-8 text-center" style="margin-top: 16px;">
							<label>Featured:</label>
							 
							<label class="radio-inline">
							  <input type="radio" name="featured" value="all" <?php if($_REQUEST['featured']=='all'){ ?> checked <?php } ?> >All
							</label>
							<label class="radio-inline">
							  <input type="radio" name="featured" value="1" <?php if($_REQUEST['featured']=='1'){ ?> checked <?php } ?>>Yes
							</label>
							<label class="radio-inline">
							  <input type="radio" name="featured" value="0" <?php if($_REQUEST['featured']=='0'){ ?> checked <?php } ?>>No
							</label>							
							
						</div>
						<div class="col-sm-4 text-right">
						<span class="input-group-btn">
							<button class="btn btn-success" type="submit"><i class="fa fa-search"></i> &nbsp; Search</button>
						</span>
						</div>
					</div>
					
				</div>
			</form>
		</div>
	</div>		
		 
<hr>

<p>{!! link_to_route(config('quickadmin.route').'.cttrucklisting.create', trans('quickadmin::templates.templates-view_index-add_new') , null, array('class' => 'btn btn-success')) !!}</p>

@if ($cttrucklisting->count())
    <div class="portlet box green">
        
		<?php /*
		<div class="portlet-title">
            <div class="caption">{{ trans('quickadmin::templates.templates-view_index-list') }}</div>
        </div>
		*/ ?> 
		
        <div class="portlet-body">
            <table class="table table-striped table-hover table-responsive datatable" id="datatable">
                <thead>
                    <tr>
                        <th>
                            {!! Form::checkbox('delete_all',1,false,['class' => 'mass']) !!}
                        </th>
						
				
<th>S.No.</th> 				
<th>Stock#</th> 
<th>Make</th>
<th>Model</th>

<?php /*<th>Registered</th> */ ?>

<th>Price</th>

<!--<th>Feature</th>-->

<th>Image</th>

<th>Vehicle Id</th>
<th>Status</th>
<th>Sold</th>
<?php 


/*
<th>Url</th>

<th>Features</th>
<th>Variant</th>
<th>Registration</th>
<th>Previous Owners</th>
<th>Fuel Consumption</th>
<th>Tax Band</th>
<th>Tax Cost</th>


<th>Colour</th>
<th>Exterior Colour</th>


<th>Doors</th>
<th>Fuel Type</th>
<th>Bodystyle</th>
<th>Mileage</th>
<th>Engine Size</th>
<th>Transmission</th>
<th>Seats</th>

<th>Video</th>
<th>Location</th>
*/ ?>



                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
				 
                    @foreach ($cttrucklisting as $row)
                        <tr>

                            <td>
                                {!! Form::checkbox('del-'.$row->id,1,false,['class' => 'single','data-id'=> $row->id]) !!}
						</td>
						
							<td>
							<?php
							echo $i=$i+1;							
							?>
							</td>

							
<td>{{ $row->stock_auto }}</td>

<td>{{ isset($row->ctmake->make) ? $row->ctmake->make : '' }}</td>
<td>{{ isset($row->ctmodels->model) ? $row->ctmodels->model : '' }}</td>

<?php /*<td>{{ isset($row->ctregistered->year) ? $row->ctregistered->year : '' }}</td>*/ ?>

<td>{{ $row->price }}</td>

<!--<td>{{ $row->featured }}</td>-->

<td>



<?php

if($row->public_id){

echo $img_arr[$row->id];


}else if($row->image != ''){ ?> 

	<img style="max-width:100px;" src="{{ asset('public/uploads/thumb') }}/<?php echo $row->image; ?>">

<?php } ?>



<?php if($row->image==""){ ?>

<img style="max-width:100px;" src="{{ asset('images/no_image.png') }}">
<?php } ?>

</td>

<td>{{ $row->v_id }}</td>




<td>

<?php
if($row->soldstatus==1){
?>

<a id="status_sold_<?php echo $row->id; ?>" href="javascript:;" class="btn btn-danger btn-xs" onclick="changeSold('<?php echo $row->id; ?>','0',this.id);">Make Unsold</a>
<?php
}else{
?>
<a id="status_sold_<?php echo $row->id; ?>" href="javascript:;" class="btn btn-success btn-xs" onclick="changeSold('<?php echo $row->id; ?>','1',this.id);">Make Sold</a>
<?php } ?>
</td>


<td>

<?php
if($row->status==1){
?>

<a id="status_<?php echo $row->id; ?>" href="javascript:;" class="btn btn-danger btn-xs" onclick="changeStatus('<?php echo $row->id; ?>','0',this.id);">Make Inactive</a>
<?php
}else{
?>
<a id="status_<?php echo $row->id; ?>" href="javascript:;" class="btn btn-success btn-xs" onclick="changeStatus('<?php echo $row->id; ?>','1',this.id);">Make Active</a>
<?php } ?>
</td>


<?php /*
<td>{{ $row->seo_url }}</td>


<td>{{ $row->features }}</td>
<td>{{ $row->variant }}</td>

<td>{{ $row->registration }}</td>
<td>{{ $row->previous_owners }}</td>
<td>{{ $row->fuel_consumption }}</td>
<td>{{ $row->tax_band }}</td>
<td>{{ $row->tax_cost }}</td>


<td>{{ isset($row->ctcolor->color) ? $row->ctcolor->color : '' }}</td>
<td>{{ isset($row->ctexteriorcolor->color) ? $row->ctexteriorcolor->color : '' }}</td>

<td>{{ $row->doors }}</td>
<td>{{ isset($row->ctfueltype->fuel_type) ? $row->ctfueltype->fuel_type : '' }}</td>
<td>{{ isset($row->ctbodystyle->bodystyle) ? $row->ctbodystyle->bodystyle : '' }}</td>
<td>{{ $row->mileage }}</td>
<td>{{ $row->engine_size }}</td>
<td>{{ isset($row->cttransmission->transmission) ? $row->cttransmission->transmission : '' }}</td>
<td>{{ $row->seats }}</td>
<td>@if($row->image != '')<img src="{{ asset('uploads/thumb') . '/'.  $row->image }}">@endif</td>
<td>{{ $row->video }}</td>
<td>{{ $row->location }}</td>
*/ ?>




                            <td>
                                {!! link_to_route(config('quickadmin.route').'.cttrucklisting.edit', trans('quickadmin::templates.templates-view_index-edit'), array($row->id), array('class' => 'btn btn-xs btn-info')) !!}
                                {!! Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => "return confirm('".trans("quickadmin::templates.templates-view_index-are_you_sure")."');",  'route' => array(config('quickadmin.route').'.cttrucklisting.destroy', $row->id))) !!}
                                {!! Form::submit(trans('quickadmin::templates.templates-view_index-delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

			
<div class="row">			
	<div class="col-sm-12 text-center">
	  <?php /* {{ $cttrucklisting->links() }} */ ?>
	  
	  {!! $cttrucklisting->appends(Input::except('page'))->links() !!}
    </div>
</div>	
			
			
			
            <div class="row">
                <div class="col-xs-12">
                    <button class="btn btn-danger" id="delete">
                        {{ trans('quickadmin::templates.templates-view_index-delete_checked') }}
                    </button>
                </div>
            </div>
            {!! Form::open(['route' => config('quickadmin.route').'.cttrucklisting.massDelete', 'method' => 'post', 'id' => 'massDelete']) !!}
                <input type="hidden" id="send" name="toDelete">
            {!! Form::close() !!}
        </div>
	</div>
@else
    {{ trans('quickadmin::templates.templates-view_index-no_entries_found') }}
@endif

@endsection


</div>
</div>
<input type="hidden" id="homeurl" value="{{ url('/') }}">

@section('javascript')
    <script>
        $(document).ready(function () {
            $('#delete').click(function () {
                if (window.confirm('{{ trans('quickadmin::templates.templates-view_index-are_you_sure') }}')) {
                    var send = $('#send');
                    var mass = $('.mass').is(":checked");
                    if (mass == true) {
                        send.val('mass');
                    } else {
                        var toDelete = [];
                        $('.single').each(function () {
                            if ($(this).is(":checked")) {
                                toDelete.push($(this).data('id'));
                            }
                        });
                        send.val(JSON.stringify(toDelete));
                    }
                    $('#massDelete').submit();
                }
            });
        });
		
function changeStatus(id,status,labelid){
var homeurl=$("#homeurl").val();

		 
		 $.ajax({
            type: "POST",
            url: homeurl+'/callajax/changestatus/',
            data: {id: id,status:status},
			type: 'get',
            success: function( response ) {
                 
				  
				 if(response==1){
				  
				   $("#"+labelid+"").addClass( "btn-danger" );
				   $("#"+labelid+"").removeClass( "btn-success" );
				  $("#"+labelid+"").html( "Make Inactive" );

				   $("#"+labelid+"").attr("onClick","changeStatus('"+id+"','0',this.id);");
 			  
				   
				 }else{
				   
				   $("#"+labelid+"").addClass("btn-success");
				   $("#"+labelid+"").removeClass("btn-danger");	
					$("#"+labelid+"").html( "Make Active" );		
					$("#"+labelid+"").attr("onClick","changeStatus('"+id+"','1',this.id);");					
				 }
				 
				 
            }
        });

}		
		
		
function changeSold(id,status,labelid){
var homeurl=$("#homeurl").val();

		 
		 $.ajax({
            type: "POST",
            url: homeurl+'/callajax/changesold/',
            data: {id: id,status:status},
			type: 'get',
            success: function( response ) {
                 
				  
				 if(response==1){
				  
				   $("#"+labelid+"").addClass( "btn-danger" );
				   $("#"+labelid+"").removeClass( "btn-success" );
				  $("#"+labelid+"").html( "Make Unsold" );

				   $("#"+labelid+"").attr("onClick","changeSold('"+id+"','0',this.id);");
 			  
				   
				 }else{
				   
				   $("#"+labelid+"").addClass("btn-success");
				   $("#"+labelid+"").removeClass("btn-danger");	
					$("#"+labelid+"").html( "Make Sold" );		
					$("#"+labelid+"").attr("onClick","changeSold('"+id+"','1',this.id);");					
				 }
				 
				 
            }
        });

}		

	
	 
 
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
                $("#mod").html(""+response+"");
            }
        });
		
		
		
    });
});

		
    </script>
@stop