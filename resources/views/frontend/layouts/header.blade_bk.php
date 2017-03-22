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
                        <ul class="clearfix top-navigaion" style="display:inline-block">
					
					@foreach ($pagesetting as $setting)  
						@if($setting->id == '4')
                        
						 <li><a href="{{ $setting->seo_url }}"><img src="{{ URL::asset('frontend/assets/') }}/images/google.png"> Store Location</a></li>
						@endif
						
						
						@if($setting->id == '5')
                        
						<li><a href="{{ $setting->seo_url }}"><img src="{{ URL::asset('frontend/assets/') }}/images/star.png">We Are Different</a></li>
						@endif						
						
						@endforeach  
                       

                        

                    </ul>

                        <a href="" class="quote btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">schedule an appointment</a>

                        <div class="social-icons">

                            <a href="{{ $row->gmail }}" class="icon-google"></a> 

                            <a href="{{ $row->twitter }}" class="icon-twitter"></a> 

                            <a href="{{ $row->facebook }}" class="icon-facebook"></a>

                        </div>
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <!-- <h4 class="modal-title">Modal Header</h4> -->
                                    </div>
                                    <div class="modal-body text-center">
                                        <input type="email" placeholder="ex@gmail.com">
                                        <input type="text" placeholder="Quote">
                                    </div>
                                    <!-- <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>	

            </div>

            <div class="logo">

                <div class="container">

                    <div class="col-md-6">

                        <div class="logo-image">

                           <a href="{{ URL::asset('/') }}">
						   
						   
						   @if($row->header_logo != '')<img src="{{ asset('public/uploads/') . '/'.  $row->header_logo }}">@endif
                           
                         
						   
						   </a>
                        </div>
               
                        
                        
 <p style="color:#FFF;margin-left:85px;margin-top:20px;font-size: 14px;font-style: italic;font-weight: bold; ">Your Diesel Trucks Specialist</p> 

                    </div>

                    <div class="col-md-6">

                        <div class="call-us text-right">

                            <span class="text-center">

                                <h5 class="opening-heading">Opening Hour</h5>

                                <span class="time-hour text-center">{{ $row->opening_hour }}</span>

                            </span>

                            <span class="text-center">

                                <h5 class="opening-heading">Call Now</h5>

                                <span class="contact text-center">{{ $row->call_now }}</span>

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
                        <li><a href="{{ $setting->seo_url }}">financing</a></li>
						@endif
						@endforeach  

                        <li><a href="{{ URL::asset('/') }}gallery">gallery</a></li>

                        <li><a href="{{ URL::asset('/') }}contact">contact us</a></li>            

                    </ul>

                </div>

            </div>

        </nav>

        <!-- /navigation -->

		