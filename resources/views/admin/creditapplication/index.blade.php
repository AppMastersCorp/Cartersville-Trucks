@extends('admin.layouts.master')

@section('content')

<?php /*
<p>{!! link_to_route(config('quickadmin.route').'.creditapplication.create', trans('quickadmin::templates.templates-view_index-add_new') , null, array('class' => 'btn btn-success')) !!}</p>
*/ ?>

 <div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">Credit Application</h4>
		</div>
		<div class="panel-body">

@if ($creditapplication->count())
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">{{ trans('quickadmin::templates.templates-view_index-list') }}</div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-hover table-responsive datatable" id="datatable">
                <thead>
                    <tr>
                        <th>
                            {!! Form::checkbox('delete_all',1,false,['class' => 'mass']) !!}
                        </th>
                        <th>First name</th>
<th>Middle name</th>
<th>Last name</th>
<th>D.O.B</th>
<th>SSN</th>
<th>Phone</th>
<th>ZIPCODE</th>
 


                        <th style="width: 135px;">&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($creditapplication as $row)
                        <tr>
                            <td>
                                {!! Form::checkbox('del-'.$row->id,1,false,['class' => 'single','data-id'=> $row->id]) !!}
                            </td>
                            <td>{{ $row->appinfo_first_name }}</td>
<td>{{ $row->appinfo_middle_name }}</td>
<td>{{ $row->appinfo_last_name }}</td>
<td>{{ $row->appinfo_dob }}</td>
<td>{{ $row->appinfo_ssn }}</td>
<td>{{ $row->appinfo_phone }}</td>
<td>{{ $row->appinfo_zipcode }}</td>

<?php /*
<td>{{ $row->howlong }}</td>
<td>{{ $row->homephone }}</td>
<td>{{ $row->cellphone }}</td>
<td>{{ $row->residentialstatus }}</td>
<td>{{ $row->monthly_rent_mortage_pmt }}</td>
<td>{{ $row->landlord_or_mortage_holders_name }}</td>
<td>{{ $row->previous_address }}</td>
<td>{{ $row->current_employee_name }}</td>
<td>{{ $row->current_employee_address }}</td>
<td>{{ $row->gross_monthly_salary }}</td>
<td>{{ $row->work_phone }}</td>
<td>{{ $row->occupational_title }}</td>
<td>{{ $row->how_lone }}</td>
<td>{{ $row->previously_employer }}</td>
<td>{{ $row->residential_status }}</td>
<td>{{ $row->gross_monthly_other_income }}</td>
<td>{{ $row->other_income_source }}</td>
<td>{{ $row->reference1 }}</td>
<td>{{ $row->phone }}</td>
<td>{{ $row->reference2 }}</td>
*/ ?>


                            <td>
								
								<a href="javascript:;" class="btn btn-xs btn-success" onclick="printContent(<?php echo $row->id; ?>,'<?php echo $row->appinfo_first_name; ?>');" >Print</a>
                               
								 {!! 
								link_to_route(config('quickadmin.route').'.creditapplication.edit', trans('View'), array($row->id), array('class' => 'btn btn-xs btn-info')) !!}
								
								
                                {!! Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => "return confirm('".trans("quickadmin::templates.templates-view_index-are_you_sure")."');",  'route' => array(config('quickadmin.route').'.creditapplication.destroy', $row->id))) !!}
                                {!! Form::submit(trans('quickadmin::templates.templates-view_index-delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-xs-12">
                    <button class="btn btn-danger" id="delete">
                        {{ trans('quickadmin::templates.templates-view_index-delete_checked') }}
                    </button>
                </div>
            </div>
            {!! Form::open(['route' => config('quickadmin.route').'.creditapplication.massDelete', 'method' => 'post', 'id' => 'massDelete']) !!}
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
    </script>
@stop


<input type="hidden" id="homeurl" value="{{ url('/') }}">
<script>

function printContent(id,name){
 

 
 		var homeurl=$("#homeurl").val(); 
		
		 $.ajax({
            type: "POST",
            url: homeurl+'/callajax/printContent/'+id,
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
           
			frameDoc.document.write('<style>table {  border-collapse: collapse;  border-spacing: 0;} .table td, .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th{ padding:8px 18px;  } .table-bordered, .table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > thead > tr > th {     border: 1px solid #e2e2e2;} .p0{  padding:0px !important; } table { width: 800px; } </style>');
		   
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