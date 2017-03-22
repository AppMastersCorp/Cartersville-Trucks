@extends('admin.layouts.master')

@section('content')
<div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">Contact Setting</h4>
		</div>
		<div class="panel-body">


 

@if ($contactsetting->count())
    <div class="portlet box green">
      
        <div class="portlet-body">
            <table class="table table-striped table-hover table-responsive datatable" id="datatable">
                <thead>
                    <tr>
                        <th>
                            {!! Form::checkbox('delete_all',1,false,['class' => 'mass']) !!}
                        </th>
<th>Showroom 1 Address</th>
 

<th>Showroom 1 Tell</th>
<th>Contact Email</th>

  

                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($contactsetting as $row)
                        <tr>
                            <td>
                                {!! Form::checkbox('del-'.$row->id,1,false,['class' => 'single','data-id'=> $row->id]) !!}
                            </td>
 <td>{{ $row->showroom_1_address }}</td>
 
 
<td>{{ $row->showroom_1_tell }}</td>
<td>{{ $row->showroom_1_email }}</td>

                            <td>
                                {!! link_to_route(config('quickadmin.route').'.contactsetting.edit', trans('quickadmin::templates.templates-view_index-edit'), array($row->id), array('class' => 'btn btn-xs btn-info')) !!}
								
								 
								
								
                                
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
   
            {!! Form::open(['route' => config('quickadmin.route').'.contactsetting.massDelete', 'method' => 'post', 'id' => 'massDelete']) !!}
			
			
			
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