 @include('frontend.layouts.header')
 
	
		<!-- slider -->

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->

            <div class="carousel-inner" role="listbox">

	 
			
        <div class="carousel-inner">
            <?php $i=0; ?>
			@foreach ($cttrucklisting as $row)
			 
			
			
			 
			
			
			@if($row->image != ''  || $row->public_id !='') 
			<?php $i=$i+1 ?>
			
			<div class="item   <?php if ($i==1){ ?> active <?php } ?> ">
              <div class="holder col-sm-9">
			  
			  
						@if($row->seo_url != '') 
						<a href="{{ url(asset('')) }}truck/{{ $row->seo_url}}">

						@else
						<a href="{{ url(asset('')) }}truck/{{ $row->id}}">

						 @endif
			  
			  <?php
			       
				  
				  if($row->public_id){
					 
					 echo $img_arr_large[$row->id];
					 
				  }else{
			  ?>
					<img class="img-responsive" src="{{ asset('public/uploads') . '/'.  $row->image }}" alt="{{ isset($row->ctregistered->year) ? $row->ctregistered->year : '' }}  {{ isset($row->ctmake->make) ? $row->ctmake->make : '' }}  {{ isset($row->ctmodels->model) ? $row->ctmodels->model : '' }}  {{ $row->engine_size}}" title="{{ isset($row->ctregistered->year) ? $row->ctregistered->year : '' }}  {{ isset($row->ctmake->make) ? $row->ctmake->make : '' }}  {{ isset($row->ctmodels->model) ? $row->ctmodels->model : '' }}  {{ $row->engine_size}}">
			   <?php } ?>
			  
			  
			  </a>
             </div>
			
            <div class="col-sm-3 ">
			
				<div class="page-detail-slider homepage-slider">
			
			
                <div class="carousel-caption ">
				<h1>{{ isset($row->ctregistered->year) ? $row->ctregistered->year : '' }}  {{ isset($row->ctmake->make) ? $row->ctmake->make : '' }}  {{ isset($row->ctmodels->model) ? $row->ctmodels->model : '' }}  {{ $row->engine_size}}</h1>
				
     <h2 class="dollar-heading">$ {{ $row->price }}</h2>
                <table>
                    <tr>
                        <th>
                            Registration Date
                            <p class="year-color">{{ isset($row->ctregistered->year) ? $row->ctregistered->year : 'N/A' }}</p>
                        </th>
						 
                        <th>
                            Condition
                            <p class="year-color">{{ isset($row->ctcondition->condition) ? $row->ctcondition->condition : 'N/A' }}</p>
                        </th>
						 
                        <th>
                            Stock#
                            <p class="year-color"> {{ $row->stock_auto }} </p>
                        </th>
                    </tr>
                </table>
                <div class="information">
 
					
					<dl>
                        <dt>Make:</dt>
                        <dd class="year-color">{{ isset($row->ctmake->make) ? $row->ctmake->make : 'N/A' }}</dd>
						
						
                        <dt class="info-backgorund-color">Model:</dt>
                        <dd class="year-color info-backgorund-color">{{ isset($row->ctmodels->model) ? $row->ctmodels->model : 'N/A' }}</dd>
						
                        <dt class="">Sub Model:</dt>
                        <dd class="year-color">
						<?php
						 $ctsubmodels_id=$row->ctsubmodels_id;
						 $ctsubmodels = DB::table('ctsubmodels')->where('id',"=",$ctsubmodels_id)->whereNull('deleted_at')->get();	
						
						if(isset($ctsubmodels[0])){

						echo $ctsubmodels[0]->submodels;	
							 
						}else{

						echo 'N/A';
						}
						
						/*
						if(isset($cttrucklisting->ctsubmodels) and $cttrucklisting->ctsubmodels!=""){
						echo $cttrucklisting->ctsubmodels;
						}else{
						echo 'N/A';
						}
						*/

						?>						
						
                        <dt class="">Mileage:</dt>
                        <dd class="year-color">
						<?php  
						if($row->mileage != '') { echo $row->mileage; }else{ echo 'N/A'; }  ?>
						</dd>
                       
					   <?php /*
					   <dt class="info-backgorund-color">Transmission:</dt>
                        <dd class="year-color info-backgorund-color">{{ isset($row->cttransmission->transmission) ? $row->cttransmission->transmission : 'N/A' }}</dd>
						*/ ?>
						
                    </dl>					
					
					
					
                </div> 
					
                </div>
				
			 </div>	
				
            </div>
			</div>
       		   @endif
			
		   @endforeach  

</div>	 
            <!-- Controls -->

            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
 
 



        <section class="best-choices">

            <div class="container">

                <div class="text-center wow fadeInDown">

                    <!-- <p class="welcome-text">welcome to cartersvilletrucks</p> -->

                    <h2 class="heading text-center clearfix">Featured Trucks</h2>

                </div>

                <div class="features-cars clearfix">
					
					<?php $ii=0; ?>
                    
					@foreach ($cttrucklisting as $row)
					
					
					 <?php $ii=$ii+1; 
					 
					 if($ii>5){  break; }
					 ?>
					
					<div class="col-md-3 col-sm-6 col-xs-12 clearfix equalheight" style="height: 360px;">

                        <p class="featured-on-image">

                          

						@if($row->seo_url != '') 
						<a href="{{ url(asset('')) }}truck/{{ $row->seo_url}}">

						@else
						<a href="{{ url(asset('')) }}truck/{{ $row->id}}">

						 @endif

						 <?php 
						 if($row->public_id){
						 
						 echo $img_arr_small[$row->id];
						 
						 }else if($row->image){ ?>
						 <img alt="{{ isset($row->ctregistered->year) ? $row->ctregistered->year : '' }}  {{ isset($row->ctmake->make) ? $row->ctmake->make : '' }}  {{ isset($row->ctmodels->model) ? $row->ctmodels->model : '' }}  {{ $row->engine_size}}" title="{{ isset($row->ctregistered->year) ? $row->ctregistered->year : '' }}  {{ isset($row->ctmake->make) ? $row->ctmake->make : '' }}  {{ isset($row->ctmodels->model) ? $row->ctmodels->model : '' }}  {{ $row->engine_size}}" src="{{ asset('public/uploads/thumb') . '/'}}<?php echo $row->image; ?>">
						 <?php }else{ ?>
						 
						 
						 <img alt="{{ isset($row->ctregistered->year) ? $row->ctregistered->year : '' }}  {{ isset($row->ctmake->make) ? $row->ctmake->make : '' }}  {{ isset($row->ctmodels->model) ? $row->ctmodels->model : '' }}  {{ $row->engine_size}}" title="{{ isset($row->ctregistered->year) ? $row->ctregistered->year : '' }}  {{ isset($row->ctmake->make) ? $row->ctmake->make : '' }}  {{ isset($row->ctmodels->model) ? $row->ctmodels->model : '' }}  {{ $row->engine_size}}" style="max-width:200px;" src="{{ asset('/images/no_image.png') }}">
						 
						 <?php } ?>
						 
						 </a>

                         <!--<span class="featured">featured</span>-->
							
						 <?php
						 if($row->soldstatus==1){
						 ?>
						 <span class="featured">Sold</span>						 
						 <?php } ?>
						 
						</p>

                     <div class="feature-information">
  


                        <h4 class="featureheading">{{ isset($row->ctregistered->year) ? $row->ctregistered->year : '' }}  {{ isset($row->ctmake->make) ? $row->ctmake->make : '' }}  {{ isset($row->ctmodels->model) ? $row->ctmodels->model : '' }}  {{ $row->engine_size}}</h4>

                        <p class="price-dollar">$ {{ $row->price}}</p>

                        <p class="color-grey-text">
                            Mileage: -{{ $row->mileage}} <br>
							 
                            Engine: {{ isset($row->enginesize->engine_size) ? $row->enginesize->engine_size : '' }}<br>
                           
                            <?php /*
							Condition: <span class="color-type">{{ isset($row->ctcondition->condition) ? $row->ctcondition->condition : '' }}</span>
							*/ ?>
                        </p>
						@if($row->seo_url != '') 
                        <a href="{{ url(asset('')) }}truck/{{ $row->seo_url}}">
						
						@else
						<a href="{{ url(asset('')) }}truck/{{ $row->id}}">
						
						 @endif
						 
						 
						<button> details</button>						
						</a> 
						<?php /*
                        <button>compare</button>
						*/ ?>
						
                    </div>
                </div>

				@endforeach 
				
				 
		
		
		
    </div>

</div>

</section>



<section class="whychose-section">

    <div class="container">

	<?php foreach($why_choose as $why_choos){ ?>
	
        <div class="text-center wow fadeInDown">

            <h2 class="heading text-center clearfix">
			<?php /*	why choose <span class="carterviltruck-color">cartersvilletruck</span> ? */ ?>
			
			
			<?php echo $why_choos->title; ?>
			</h2>

        </div>

        <div class="whychose-information clearfix">
 
 


<div class="whychose-information clearfix">
 
 

            <div class="col-md-8 wow slideInRight" style="visibility: visible; animation-name: slideInRight;">

			  <?php echo $why_choos->content; ?>
                 
            </div>

            <div class="col-md-4 pull-right wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">

               @if($why_choos->imageone != '')<img src="{{ asset('public/uploads') . '/'.  $why_choos->imageone }}" class="pull-right">@endif

             @if($why_choos->imagetwo != '')<img src="{{ asset('public/uploads') . '/'.  $why_choos->imagetwo }}"  class="pull-right">@endif

            </div>

        
	 
			
			
        </div> 
			
			
        </div>

    </div>
	
<?php } ?>
</section>



<section class="sell-and-buy clearfix">

    <div class="look-car wow zoomInRight sellcar-height">

        <div class="look-car-inner clearfix">

            <img src="{{ URL::asset('frontend/assets/') }}/images/sell-search.png">

            <div class="clearfix sell-but-information" style="height:70px;">

                <h3>Find Your Perfect Truck Here?<br></h3>

               <!-- <p class="clearfix paragraph">                    

                    Totam rem aperiam, eaque ipsa quae inventore veritatis at equasi 

                </p>-->

            </div>

            <button onclick="location.href='{{ URL::asset('/') }}inventory'">search</button>

        </div>

    </div>

    <div class="sell-car wow zoomInRight sellcar-height">

        <div class="sell-car-inner clearfix">

            <img src="{{ URL::asset('frontend/assets/') }}/images/sell-dollar.png">

            <div class="clearfix sell-but-information" style="height:70px;">

                <h3>Our Test Drive Policy<br></h3>

                <!--<p class="clearfix paragraph">                    

                    Totam rem aperiam, eaque ipsa quae inventore veritatis at equasi 

                </p>-->

            </div>
			@foreach ($pagesetting as $setting) 
			@if($setting->id == '6')
            <button class="" onclick="location.href='{{ $setting->seo_url }}'">Appointment</button>
			@endif
			@endforeach
			
			
            <div class="modal fade" id="sellModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body text-center">
                            <p style="color:#000">Contact Seller</p>
                        </div>
                                    <!-- <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </section>







            <section class="whyclient-section">
                <div id="demo">
                    <div class="container">
                        <div class="text-center">
                            <h2 class="heading text-center clearfix">why clients love us</h2>
                        </div>
                        <div class="row">
                            <div class="span12">
                                <div id="owl-demo" class="owl-carousel">
                                    
									
									 @foreach ($clientReviews as $row)
									
									<div class="item">
                                        <div class="client-owl-information">
                                            <p>
                                                {{ $row->message }} .
                                            </p>
                                            <span class="client-feedback">
                                                <?php /*
												<img src="{{ URL::asset('frontend/assets/') }}/images/client-feedback1.png">
												*/ ?>
												@if($row->image != '')<img src="{{ asset('public/uploads/') . '/'.  $row->image }}">@endif
												
                                                <h4 class="client-name">{{ $row->client_name }}</h4>
                                            </span>
                                        </div>
                                    </div>
									
                                    @endforeach 
							 
								
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

       

  @include('frontend.layouts.contactinfo') 


  @include('frontend.layouts.footer')    