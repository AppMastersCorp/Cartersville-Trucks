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
        <link href="{{ url('quickadmin/assets') }}/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>	
        <link href="{{ url('quickadmin/assets') }}/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>	
        <link href="{{ url('quickadmin/assets') }}/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>	
        	
        <!-- Theme Styles -->
        <link href="{{ url('quickadmin/assets') }}/css/meteor.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ url('quickadmin/assets') }}/css/layers/dark-layer.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="{{ url('quickadmin/assets') }}/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="{{ url('quickadmin/assets') }}/plugins/3d-bold-navigation/js/modernizr.js"></script>

		<style>
		.toast-title,.toast, .toast-success {
		 display: none !important;
		 }
		</style>
	
		  
</head>
    <body class="compact-menu"> 