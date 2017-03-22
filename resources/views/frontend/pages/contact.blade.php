 @include('frontend.layouts.header')


<section class="meet-team clearfix">
    
        <div class="container">
            <div class="meet-team-text">
                <h2 class="col-sm-8">contact us</h2>
				
				<div class="col-sm-4 text-right">
				<?php /*<img  src="{{ URL::asset('/') }}images/logofb.jpg" style="max-width: 126px; text-align: right;">*/ ?>
				</div>					
                   
            </div>
        </div>
         
</section>








@foreach ($contactsetting as $row)	

<section class="contact-tabs">
    <div class="container">
        <div class="col-md-4">
            <?php /*
			<ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#home">showroom 1</a></li>
                <li><a data-toggle="pill" href="#menu1">showroom 2</a></li>    
            </ul>
			*/ ?>

			
			
			
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <ul>
                        <li>
                            <span class="tabs-icon"><i aria-hidden="true" class="fa fa-location-arrow"></i></span>
                            <p> {{ isset($row->showroom_1_address) ? $row->showroom_1_address : 'N/A' }}</p>
                        </li>
                        <li>
                            <span class="tabs-icon"><i aria-hidden="true" class="fa fa-phone"></i></span>
                            <p>Tel:  {{ isset($row->showroom_1_tell) ? $row->showroom_1_tell : 'N/A' }}
							<br>Fax: {{ isset($row->showroom_1_fax) ? $row->showroom_1_fax : 'N/A' }}</p>
                        </li>
                        <li>
                            <span class="tabs-icon"><i aria-hidden="true" class="fa fa-phone fa-envelope"></i></span>
                           <a href="mailto:{{ isset($row->showroom_1_email) ? $row->showroom_1_email : 'N/A' }}" target="_top"><p>{{ isset($row->showroom_1_email) ? $row->showroom_1_email : 'N/A' }}</p></a> 
                        </li>
                    </ul>
                </div>
                
				<?php /*
				<div id="menu1" class="tab-pane fade">
                    <ul>
                        <li>
                            <span class="tabs-icon"><i aria-hidden="true" class="fa fa-phone"></i></span>
                            <p> {{ isset($row->showroom_2_address) ? $row->showroom_2_address : 'N/A' }}</p>
                        </li>
                        <li>
                            <span class="tabs-icon"><i aria-hidden="true" class="fa fa-phone"></i></span>
                            <p>Tel:  {{ isset($row->showroom_2_tell) ? $row->showroom_2_tell : 'N/A' }}
							<br>Fax: {{ isset($row->showroom_2_fax) ? $row->showroom_2_fax : 'N/A' }}</p>
                        </li>
                        <li>
                            <span class="tabs-icon"><i aria-hidden="true" class="fa fa-phone"></i></span>
                            <p>{{ isset($row->showroom_2_email) ? $row->showroom_2_email : 'N/A' }}</p>
                        </li>
                    </ul>
                </div>
				*/ ?>
				
            </div>

        </div>








        <div class="col-md-8">
            <div style="text-decoration:none;height:100%;overflow:hidden;max-width:100%;">
                <div id="gmap_display" style="height:100%; width:100%;max-width:100%;">
				
				@if($row->map_address != '') 
				
                    <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps?q={{$row->map_address}} &output=embed"></iframe>
					
				@else	
					
				
                    <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="{{$row->map_iframe}}"></iframe>

				 @endif		
					
					
					
                </div>
                <a class="code-for-google-map" rel="nofollow" href="https://www.interserver-coupons.com" id="enable-map-data">https://www.interserver-coupons.com</a>
                <style>
                    #gmap_display img{max-width:none!important;background:none!important;}
                </style>
            </div>
            <script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=910cdfc3-4752-8b4b-7262-1b5ae447c14c&c=code-for-google-map&u=1479122058" defer="defer" async="async">
            </script>
        </div>
    </div>
</section>

@endforeach  


@include('frontend.layouts.contactinfo') 
	
	
@include('frontend.layouts.footer')		