<?php
if(!isset(Auth::user()->role_id)){
	
	?>
	<script>
		window.location = "login";
	</script>
	<?php
	exit;
}
?>


@extends('admin.layouts.master')

@section('content')


<style>
.max-height{ 
	max-height: 366px;
    overflow: scroll;
    overflow-x: auto;
}	

.pulll{

    font-size: 40px;
    display: block;
    float: left;
    margin: 14px 15px 0 0;
    color: #878c8e;

}
</style>	
     
 <?php
/* {{ trans('quickadmin::admin.dashboard-title') }} */
 ?>
<div class="col-md-12"> 
<div class="panel panel-white"> 
<div class="panel-body"> 
<div class="row">

	<div class="col-md-3">
		<div class="weather-current pull-left">
			<i class="fa fa-truck pulll"></i>
			<p><span><?php echo count($cttrucklisting); ?><br><sup>Trucks</sup></span></p>
		</div> 
	</div> 
	
	<div class="col-md-3">
		<div class="weather-current pull-left">
			<i class="icon-grid pulll"></i>
			<p><span><?php echo count($ctmake); ?><br><sup>Make</sup></span></p>
		</div> 
	</div> 	
	
 
	<div class="col-md-3">
		<div class="weather-current pull-left">
			<i class="fa fa-users pulll"></i>
			<p><span><?php echo count($ctclientreview); ?><br><sup>Team</sup></span></p>
		</div> 
	</div>  
 
 
 
	<div class="col-md-3">
		<div class="weather-current pull-left">
			<i class="icon-user pulll"></i>
			<p><span><?php echo count($usercontact); ?><br><sup>User Contact</sup></span></p>
		</div> 
	</div> 



 
 
</div> 
</div>  
</div>
</div> 
<?php /******************************************************************/ ?>
 
						<div class="col-md-6">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h3 class="panel-title">Truck Listing</h3>
									
                                    <div class="panel-control">
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a> 
                                    </div>
                                </div>
                                <div class="panel-body statement-card max-height">
                                
@if ($cttrucklisting->count())									
                                    <table class="table table-responsive">
                                        <tbody>
                                           
								   
										   
									@foreach ($cttrucklisting as $row)	   
										   <tr>
                                                <th scope="row">{{ isset($row->ctmake->make) ? $row->ctmake->make : 'N/A' }}</th>
                                                <td>{{ isset($row->ctmodels->model) ? $row->ctmodels->model : 'N/A' }}</td>
                                                <td>{{ isset($row->ctregistered->year) ? $row->ctregistered->year : 'N/A' }}</td>
                                                <td class="text-success"><b>${{ $row->price }}</b></td>
                                            </tr>
                                       @endforeach      
											 
                                        </tbody>
                                    </table>
									
@else
   
   <div class="alert">No records Found.</div>
   
@endif									
									
									
                                </div>
                            </div>
                        </div> 
						
<?php /******************************************************************/ ?>				
						
 

 
 
<?php /******************************************************************/ ?>


						<div class="col-md-6">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h3 class="panel-title">Make</h3>
									
                                    <div class="panel-control">
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a> 
                                    </div>
                                </div>
                                <div class="panel-body statement-card max-height">
                                
@if ($ctmake->count())									
                                    <table class="table table-responsive">
                                        <tbody>
                                           
								   
										   
									@foreach ($ctmake as $row)	   
										   <tr>
                                                <th scope="row">{{ isset($row->make) ? $row->make : 'N/A' }}</th> 
                                            </tr>
                                       @endforeach      
											 
                                        </tbody>
                                    </table>
									
@else
   
   <div class="alert">No records Found.</div>
   
@endif									
									
									
                                </div>
                            </div>
                        </div> 
						
<?php /******************************************************************/ ?>						
 
 
 <div class="clearfix"></div>
 
 
<?php /******************************************************************/ ?>


						<div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h3 class="panel-title">Client Review</h3>
									
                                    <div class="panel-control">
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a> 
                                    </div>
                                </div>
                                <div class="panel-body statement-card">
                                
@if ($ctmake->count())									
                                    <table class="table table-responsive">
                                        <tbody>
                                           
								   <?php $ii=0; ?>
										   
									@foreach ($ctclientreview as $row)	  

											<?php $ii=$ii+1; if($ii>6){ break; } ?>	
											
										   <tr>
                                                <td>@if($row->image != '')<img src="{{ asset('public/uploads/thumb') . '/'.  $row->image }}">@endif</td>
												
												
												<th scope="row">{{ isset($row->client_name) ? $row->client_name : 'N/A' }}</th> 
												
												<td scope="row">{{ isset($row->message) ? $row->message : 'N/A' }}</td> 
												
                                            </tr>
                                       @endforeach      
											 
                                        </tbody>
                                    </table>
									
@else
   
   <div class="alert">No records Found.</div>
   
@endif									
									
									
                                </div>
                            </div>
                        </div> 
						
<?php /******************************************************************/ ?>		
 
 

@endsection 
