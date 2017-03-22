<!DOCTYPE html>

<html lang="en">

    <head>
		<title>@yield('title')</title>
		
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        

        <link href="https://fonts.googleapis.com/css?family=Rajdhani:600" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

        <link href="{{ URL::asset('frontend/assets/') }}/css/bootstrap.min.css" rel="stylesheet">

        <link href="{{ URL::asset('frontend/assets/') }}/css/owl.carousel.css" rel="stylesheet">

        <link href="{{ URL::asset('frontend/assets/') }}/css/owl.theme.css" rel="stylesheet">

        <link href="{{ URL::asset('frontend/assets/') }}/css/style.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ URL::asset('frontend/assets/') }}/css/nice-select.css">

        <link href="{{ URL::asset('frontend/assets/') }}/css/responsive.css" rel="stylesheet">

        <link href="{{ URL::asset('frontend/assets/') }}/css/animate.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>

          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

          <![endif]-->

    </head>

    <body>

    <div class="container-fluid">
        
 
	@foreach ($headersetting as $row)  
	

        <!-- header container-width-change  -->

        <header class="header">

            <div class="container container-width-change clearfix">

                <div class="col-sm-2">

                    

                </div>

                <div class="col-sm-10">

                    <div class="languagedit text-right">
                        <?php /*
						<ul class="clearfix top-navigaion" style="display:inline-block">
					     <li><img src="{{ URL::asset('frontend/assets/') }}/images/google.png">
						  <a href="javascript:;">5500 Highway 20 SE Cartersville, GA 30120</a>
						 </li>
                       </ul>
					   */ ?>

                        <a href="javascript:;" class="mymodelcss quote btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">schedule an appointment</a>

                        <div class="social-icons">
							<?php /*
							<?php if( $row->gmail ){ ?>
                            <a href="{{ $row->gmail }}" class="icon-google"></a> 
							<?php } ?>
							
							<?php if( $row->facebook ){ ?>
                            <a href="{{ $row->facebook }}" class="icon-facebook"></a>
							<?php } ?>
							
							<?php if( $row->twitter ){ ?>
							 <a href="{{ $row->twitter }}" class="icon-twitter"></a> 
							<?php } ?>
							*/ ?>
							<?php if( $row->gmail ){ ?>
                            <a target="_blank" href="{{ $row->gmail }}" class="fa fa-google"></a> 
							<?php } ?>
						    
							<?php if( $row->twitter ){ ?>
							 <a target="_blank" href="{{ $row->twitter }}" class="fa fa-instagram"></a> 
							<?php } ?>	
							
							<?php if( $row->facebook ){ ?>
                            <a target="_blank" href="{{ $row->facebook }}" class="fa fa-facebook"></a>
							<?php } ?>
							
						
							
                        </div>
                         
						
                    </div>

                </div>	

            </div>

            <div class="logo">

                <div class="container">

                    <div class="col-md-4">

                        <div class="logo-image">

                           <a title="CT" href="{{ URL::asset('/') }}">
						   
						   
						   @if($row->header_logo != '')<img src="{{ asset('public/uploads/') . '/'.  $row->header_logo }}">@endif
                           
                         
						   
						   </a>
                        </div>
               
                        
                        
 <p style="color:#FFF;margin-left:116px;margin-top:20px;font-size: 14px;font-style: italic;font-weight: bold; ">Your Diesel Trucks Specialist</p> 

                    </div>

                    <div class="col-md-8">

                        <div class="call-us text-right">

                            <span class="text-center">

                                <h5 class="opening-heading">Opening Hours</h5>

                                <span class="time-hour text-center">{{ $row->opening_hour }}</span>

                            </span>

                            <span class="text-center callus">

                                <h5 class="opening-heading">Call Now</h5>

                                <span class="contact text-center">{{ $row->call_now }}</span>

                            </span>
							<span class="text-center">
							 
							 <h5 class="opening-heading ">Store Location</h5>
							 <a href="https://www.google.com/maps/place/Cartersville+Trucks/@34.2064017,-84.779914,19.04z/data=!4m13!1m7!3m6!1s0x88f54ff121cab925:0x5f5ee5c4b7a989d2!2s5500+GA-20,+Cartersville,+GA+30121!3b1!8m2!3d34.2059515!4d-84.7801917!3m4!1s0x0:0xbefc03bd02f2abee!8m2!3d34.2061708!4d-84.7797755" target="_blank" class="contact text-center storecss" style="font-size:13px;">
							 5500 Highway 20 SE Cartersville, GA 30120  </a>
							 
							</span>

                        </div>

                    </div>

                </div>

            </div>

        </header>

        <!-- /header -->

		@endforeach  


        <!-- navigation -->

        <nav class="navbar main-nav navbar-default">

            <div class="container">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                </div>



                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav text-right pull-right">

                        <li class="dropdown">

                            <a href="{{ URL::asset('/inventory') }}" class="dropdown-toggle"  role="button"  aria-expanded="false">Current Inventory </a>

                            <!--aria-haspopup="true"  data-toggle="dropdown" <i class="fa fa-caret-down" aria-hidden="true"></i>-->

                        </li>

						@foreach ($pagesetting as $setting)  
						@if($setting->id == '2')
                        <li><a href="{{URL::asset('/')}}{{ $setting->seo_url }}">financing</a></li>
						@endif
						@endforeach  

                        <li><a href="{{ URL::asset('/') }}gallery">gallery</a></li>

                        <li><a href="{{ URL::asset('/') }}contact">contact us</a></li>            

                    </ul>

                </div>

            </div>

        </nav>

        <!-- /navigation --> 