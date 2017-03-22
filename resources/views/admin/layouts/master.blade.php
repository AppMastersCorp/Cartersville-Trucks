@include('admin.partials.header')

<style>
table th,table td{

 font-size:13px;
}

.toast, .toast-success{
 display:none !important;
}
</style>


<div class="overlay"></div>   
<main class="page-content content-wrap">

@include('admin.partials.topbar')

<div class="page-sidebar sidebar">
	@include('admin.partials.sidebar')
</div>



<?php /**************** content ****************/ ?>
    
			
            <div class="page-inner">
                <div class="page-title">
				
				<h3 class="breadcrumb-header">
				{{ preg_replace('/([a-z0-9])?([A-Z])/','$1 $2',str_replace('Controller','',explode("@",class_basename(app('request')->route()->getAction()['controller']))[0])) }}
				
				</h3>
				
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    
	
	 
           

						<div class="row">
							<div class="col-md-12">

								@if (Session::has('message'))
									<div class="note note-info">
										<p>{{ Session::get('message') }}</p>
									</div>
								@endif

								@yield('content')

							</div>
						</div>

     		
					
					
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s"></p>
						<a class="color_wh" title="" target="_blank" href="javascript:;">
						 <img style="float: right; margin: 20px; padding-bottom: 20px;" class="giadocss" src="{{ URL::asset('/') }}images/app-master.png">
						</a> 
						<br>
						
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
		
		
		
		
        
		
        <div class="cd-overlay"></div>
		
<?php /**************** content ****************/ ?>	 
		



@include('admin.partials.javascripts')

@yield('javascript')
@include('admin.partials.footer') 