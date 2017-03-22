@extends('admin.layouts.master')

@section('content')

<style>
.fist-div{
  width:100px;
}

label {
    font-weight: bold;
}
</style>



<div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">Test Drive</h4>
			
			<div class="pull-right"> <a onclick="printContent(<?php echo $testdrive->id; ?>,'<?php echo $testdrive->name; ?>');" href="javascript:;" class="tag label label-success">Print</a></div>
			
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

{!! Form::model($testdrive, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.testdrive.update', $testdrive->id))) !!}

<div id="print_containt">	

<div class="table-responsive">
<table class="table table-bordered">
<tr>
<td class="fist-div"> 
{!! Form::label('name', 'Name', array('class'=>'control-label')) !!}

</td>
<td> 
<span id="idname">{!! $testdrive->name!!}</span>
</td>
</tr>

<tr>
<td class="fist-div"> 
{!! Form::label('name', 'Suffix', array('class'=>'control-label')) !!}

</td>
<td> 
<span>{!! $testdrive->suffix!!}</span>
</td>
</tr>


<tr>
<td class="fist-div"> 
{!! Form::label('name', 'Phone', array('class'=>'control-label')) !!}

</td>
<td> 
<span>{!! $testdrive->phone!!}</span>
</td>
</tr>
 

<tr>
<td class="fist-div">
    {!! Form::label('email', 'Email', array('class'=>'')) !!}
</td>
<td> 
 
         
<span>{!! $testdrive->email!!}</span>
</td>
</tr>

<tr>
<td class="fist-div">
    {!! Form::label('address', 'Address', array('class'=>'')) !!}
</td>
<td> 
 
        
<span>{!! $testdrive->address!!}</span>
</td>
</tr>

<tr>
<td class="fist-div">
    {!! Form::label('city', 'CITY', array('class'=>'')) !!}
</td>
<td> 
 
        
        
<span>{!! $testdrive->city!!}</span>
</td>
</tr>

<tr>
<td class="fist-div">
    {!! Form::label('state', 'State', array('class'=>'')) !!}
</td>
<td> 
 
 
        
<span>{!! $testdrive->state!!}</span>
</td>
</tr>

<tr>
<td class="fist-div">
    {!! Form::label('zip', 'ZIPCODE', array('class'=>'')) !!}
</td>
<td> 
 
        
        
<span>{!! $testdrive->zip!!}</span>
</td>
</tr>

<tr>
<td class="fist-div">
    {!! Form::label('employment_status', 'Employment Status', array('class'=>'')) !!}
</td>
<td> 
 
 
        
<span>{!! $testdrive->employment_status!!}</span>
</td>
</tr>

<tr>
<td class="fist-div">
    {!! Form::label('company_name', 'Company Name', array('class'=>'')) !!}
</td>
<td> 
 
 
        
<span>{!! $testdrive->company_name!!}</span>
</td>
</tr>

<tr>
<td class="fist-div">
    {!! Form::label('gross_income', 'Gross Income', array('class'=>'')) !!}
</td>
<td> 
 
 
        
<span>{!! $testdrive->gross_income!!}</span>
</td>
</tr>

<tr>
<td class="fist-div">
    {!! Form::label('driver_license_number', 'Driver License Number', array('class'=>'')) !!}
</td>
<td> 
 
 
        
<span>{!! $testdrive->driver_license_number!!}</span>
</td>
</tr>

<tr>
<td class="fist-div">
    {!! Form::label('driver_license_expiration_date', 'Driver License Expiration Date', array('class'=>'')) !!}
</td>
<td>  
 
        
<span>{!! $testdrive->driver_license_expiration_date!!}</span>
</td>
</tr>

<tr>
<td class="fist-div">
    {!! Form::label('insurance_carrier', 'Insurance Carrier', array('class'=>'')) !!}
</td>
<td>  
 
        
<span>{!! $testdrive->insurance_carrier!!}</span>
</td>
</tr>

<tr>
<td class="fist-div">
    {!! Form::label('insurance_id_number', 'Insurance Id Number', array('class'=>'')) !!}
</td>
<td>  
        
<span>{!! $testdrive->insurance_id_number!!}</span>
</td>
</tr>

<tr>
<td class="fist-div">
    {!! Form::label('insurance_agent_name', 'Insurance Agent Name', array('class'=>'')) !!}
</td>
<td> 
 
 
        
<span>{!! $testdrive->insurance_agent_name!!}</span>
</td>
</tr>


<tr>
<td class="fist-div">
    {!! Form::label('insurance_agent_phone_number', 'Insurance Agent Phone Number', array('class'=>'')) !!}
</td>
<td> 
 
 
        
<span>{!! $testdrive->insurance_agent_phone_number!!}</span>
</td>
</tr>

<tr>
<td class="fist-div">
    {!! Form::label('submit_date', 'Submit Date', array('class'=>'')) !!}
</td>
<td> 
 
 
        
<span>{!! $testdrive->submit_date!!}</span>
</td>
</tr>



</table>
</div>

 
</div>
<!-- print con -->



<div class="form-group">
    <div class="col-sm-12  ">
      <?php /*
	  {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.testdrive.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
	  */ ?>
	  
	  	  {!! link_to_route(config('quickadmin.route').'.testdrive.index', trans('Back'), null, array('class' => 'btn btn-primary')) !!}	  
	  
	  
    </div>
</div>

{!! Form::close() !!}

@endsection




</div>
</div> 


<input type="hidden" id="homeurl" value="{{ url('/') }}">
<script>

function printContent(id,name){
 

 
 		var homeurl=$("#homeurl").val(); 
		
		 $.ajax({
            type: "POST",
            url: homeurl+'/callajax/printContenttestdrive/'+id,
            data: {id: id},
			type: 'get',
            success: function( response ) {
			 


			var contents = response;


			var idname = name;
 

            var frame1 = document.createElement('iframe');
            frame1.name = "frame1";
            frame1.style.position = "absolute";
            frame1.style.top = "-1000000px";
            document.body.appendChild(frame1);
            var frameDoc = frame1.contentWindow ? frame1.contentWindow : frame1.contentDocument.document ? frame1.contentDocument.document : frame1.contentDocument;
            frameDoc.document.open();
            frameDoc.document.write('<html><head><title>Test Drive ('+idname+')</title>');
           
			frameDoc.document.write('<style>table {  border-collapse: collapse;  border-spacing: 0;} .table td, .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th{ padding:8px 18px;  } .table-bordered, .table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > thead > tr > th {     border: 1px solid #e2e2e2;} .p0{  padding:0px !important; } .table.table-bordered { min-width: 728px; } </style>');
		   
		    frameDoc.document.write('</head><body>');
            frameDoc.document.write(contents);
            frameDoc.document.write('</body></html>');
            frameDoc.document.close();
            setTimeout(function () {
                window.frames["frame1"].focus();
                window.frames["frame1"].print();
                document.body.removeChild(frame1);
            }, 500);
            return false;	

 			
				
				
            }
        });
 
	
	
	
}

</script>