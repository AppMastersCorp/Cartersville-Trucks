<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        {{ trans('quickadmin::admin.partials-header-title') }}
    </title>

    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0"
          name="viewport"/>
    <meta http-equiv="Content-type"
          content="text/html; charset=utf-8">

<?php /*		  
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"
          rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet"
          href="{{ url('quickadmin/css') }}/font-awesome.min.css"/>
    <link rel="stylesheet"
          href="{{ url('quickadmin/css') }}/bootstrap.min.css"/>
    <link rel="stylesheet"
          href="{{ url('quickadmin/css') }}/components.css"/>
    <link rel="stylesheet"
          href="{{ url('quickadmin/css') }}/quickadmin-layout.css"/>
    <link rel="stylesheet"
          href="{{ url('quickadmin/css') }}/quickadmin-theme-default.css"/>
    <link rel="stylesheet"
          href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet"
          href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.standalone.min.css"/>
	*/ ?>	  
	
	
	
        <!-- Styles -->
        <link href="{{ url('quickadmin/assets') }}/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="{{ url('quickadmin/assets') }}/plugins/uniform/css/default.css" rel="stylesheet"/>
        <link href="{{ url('quickadmin/assets') }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ url('quickadmin/assets') }}/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="{{ url('quickadmin/assets') }}/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="{{ url('quickadmin/assets') }}/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="{{ url('quickadmin/assets') }}/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="{{ url('quickadmin/assets') }}/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ url('quickadmin/assets') }}/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        
        <!-- Theme Styles -->
        <link href="{{ url('quickadmin/assets') }}/css/meteor.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ url('quickadmin/assets') }}/css/layers/dark-layer.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="{{ url('quickadmin/assets') }}/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="{{ url('quickadmin/assets') }}/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="{{ url('quickadmin/assets') }}/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
 

	
		  
</head>

    <body class="page-login">
 
 
 <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="panel panel-white" id="js-alerts"> 
                                <div class="panel-body">
                                    <div class="login-box">
                                        <a href=":javascript" class="logo-name text-lg text-center m-t-xs">CTrucks</a>
                                       
										 
										@if (count($errors) > 0)
											<div class="alert alert-danger">
												<strong>{{ trans('quickadmin::auth.whoops') }}</strong> {{ trans('quickadmin::auth.some_problems_with_input') }}
												<br><br>
												<ul>
													@foreach ($errors->all() as $error)
														<li>{{ $error }}</li>
													@endforeach
												</ul>
											</div>
										
										@else
										
										 <p class="text-center m-t-md">Please login into your account.</p>
										
										
										@endif
										
										
                                        <form class="m-t-md" action="{{ url('login') }}" role="form"  method="POST">
										 <input type="hidden" name="_token" value="{{ csrf_token() }}">
										
                                            <div class="form-group">
                                                 
												
												 <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="{{ old('email') }}" placeholder="{{ trans('quickadmin::auth.login-email') }}">
                                            </div>
                                            <div class="form-group">
                                                 
												  <input type="password"
                                       class="form-control"
                                       name="password"
									   
									   placeholder="{{ trans('quickadmin::auth.login-password') }}"
									   >
									   
                                            </div>
											
											
									<div class="form-group">  
										<label>
										<input type="checkbox"
										name="remember">{{ trans('quickadmin::auth.login-remember_me') }}
										</label> 
									</div>
											
											
                                             
											
											<button type="submit"
                                        class="btn btn-success btn-block"
                                         >  {{ trans('quickadmin::auth.login-btnlogin') }}
											</button>
                                          
											<?php /*
											<a href="forgot.html" class="display-block text-center m-t-md text-sm">Forgot Password?</a>
                                            <p class="text-center m-t-xs text-sm">Do not have an account?</p>
                                            <a href="register.html" class="btn btn-default btn-block m-t-md">Create an account</a>
											*/ ?>
                                        </form>
                                        <p class="text-center m-t-xs text-sm">2016 &copy; stacks</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content --> 
 
  
		
        <script src="assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/pace-master/pace.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/js/meteor.min.js"></script>

    </body>
</html>		