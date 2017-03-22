@include('frontend.layouts.header')
 
<link href="{{ URL::asset('frontend/assets/') }}/css/sumoselect.css" rel="stylesheet" />
  
<?php
if(!isset($_REQUEST['make'])){

$_REQUEST['make']='';
}

if(!isset($_REQUEST['sortby'])){

$_REQUEST['sortby']='';
}

if(!isset($_REQUEST['year'])){

$_REQUEST['year']='';
}


if(!isset($_REQUEST['type'])){

$_REQUEST['type']='';
}

?> 	
	
<section class="meet-team clearfix">
    
        <div class="container">
            <div class="meet-team-text">
				<h2 class="col-sm-8"> Inventory</h2>
				<div class="col-sm-4 text-right">
				<?php /*<img  src="{{ URL::asset('/') }}images/logofb.jpg" style="max-width: 126px; text-align: right;">*/ ?>
				</div>
            </div>
        </div>
         
</section>
	
 

 <form method="get">
        <section class="tabs-home-page wow zoomInUp">

            <div class="container">
			
			
                <div class="search-tab-bg">
				
				<div class="tabs-home-page "><div class="col-sm-12 inventory2-select-box text-center" style="width:100%;"><label>Find Your Diesel Truck</label></div></div>
                    <div class="clearfix inventory2-select">
                        <div class="inventory2-select-box">
                            
                            <div class="box"> 
								
								 <select id="drpmake" name="make[]" multiple="multiple" placeholder="Make" onchange="console.log($(this).children(':selected').length)" class="testSelAll2 wide">
								
                                   <?php /* <option value='' data-display="Make">All</option> */ ?>
                                   

								@foreach ($ctmake as $row)	
								 
								 <?php 
								 $selected='';
									
								if($_REQUEST['make']){	
								 
								 if (in_array($row->id,$_REQUEST['make'] )){ $selected='selected'; } 
								 
								 }
								 
								 ?>
								 
								 <option  <?php echo $selected; ?> value="{{ $row->id }}">{{ $row->make }}</option>
                                   
                                 @endforeach        
									 
									 
									 
                                </select>
                            </div>
                        </div>
                       

					   <div class="inventory2-select-box">
                           
                            <div class="box">
                                <select id="drpyear"   name="year[]"  multiple="multiple" placeholder="Year" onchange="console.log($(this).children(':selected').length)" class="testSelAll2 wide">
								
									<?php /*	<option value='' data-display="Year">All</option> */ ?>
									
								@foreach ($ctregistered as $row)	
								
									<?php 
									 $selected='';
										
									if($_REQUEST['year']){	
									 
									 if (in_array($row->id,$_REQUEST['year'] )){ $selected='selected'; } 
									 
									 }
									?>
								
								   <option <?php echo $selected; ?>  value="{{ $row->id }}">{{ $row->year }}</option>
                                   
                                 @endforeach   
                                </select>
                            </div>
                        </div>
						
						
					   <div class="inventory2-select-box">
                            
                            <div class="box">
                                <select id="drptype"  name="type[]"  multiple="multiple" placeholder="Type" onchange="console.log($(this).children(':selected').length)" class="testSelAll2 wide" >
                                     
								@foreach ($ctbodystyle as $row)	 
									 
									<?php
									$selected='';

									if($_REQUEST['type']){	

										if (in_array($row->id,$_REQUEST['type'] )){ $selected='selected'; } 

									}
									?>	 
									 
								   <option <?php echo $selected; ?>   value="{{ $row->id }}">{{ $row->bodystyle }}</option>
                                   
                                 @endforeach   
									
                                </select>
                            </div>
                        </div>						
						
						
						<?php /*
                        <div class="inventory2-select-box">
                            <label>Vehicle Price</label>
                            <div class="box">

                                <select class="wide">
                                    <option data-display="Select">Nothing</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>        
                                    <option value="4">Potato</option>
                                </select>
                            </div>
                        </div>
						
                        <div class="inventory2-select-box">
                            <label></label>
                            <div class="box">
                                <select class="wide">
                                    <option data-display="Select">Nothing</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>        
                                    <option value="4">Potato</option>
                                </select>
                            </div>
                        </div>
						*/ ?>
						
                        <div class="tabs-search-button">
                          
							<button type="submit">search</button>
							<a class="btn-clear" href="http://cartersvilletrucks.com/inventory">Clear </a>
                        </div>
                    </div> 
					
                </div>
            </div>
        </section>

<!-- grid view -->
        <section class="best-choices" >
            <div class="container">
                <div class="clearfix inventory2-select">
                   
 				
        <div class="grid-list-view clearfix">
                        <a id="grid"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                        <a id="list"><i class="fa fa-list" aria-hidden="true"></i></a>
                    </div>						
					
<div class="inventory2-select-box pull-right price-select-box">
	<div class="box">
		<select class="wide" name="sortby" id="sortby"  onchange="this.form.submit()">
			<option value='' data-display="Sort By">Sort By</option> 
			<option <?php if($_REQUEST['sortby']=='asc'){  echo 'selected'; } ?>  value="asc">Price (Low > High)</option>        
			<option <?php if($_REQUEST['sortby']=='desc'){  echo 'selected'; } ?> value="desc">Price (High > Low)</option>
		</select>
	</div>
</div>	
					
					
</div>
		
	</div>
</section>
		
</form>				
				
				
				
        <section class="best-choices" >
            <div class="container">				
				
                <div class="inventory2" id="grid-view">
                    
					<?php /*
					
					<div class="text-center">
                        <h2 class="heading text-center clearfix">The best choic for you</h2>
                    </div>
					
					*/ ?>
					
					
					
                    <ul id="listingList">
@if ($cttrucklisting->count())
 
@foreach ($cttrucklisting as $row)	

					   <li class="clearfix">
                            <div class="inventory2 cleaerfix">
							
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
						 
                          <img src="{{ asset('public/uploads/thumb') . '/'.  $row->image }}">
						 
						 <?php }else{ ?>
						 
						 <img src="{{ asset('images/no_image.png') }}">
						 
						 <?php } ?>
								 
						 </a>
						 
						 <?php
						 if($row->soldstatus==1){
						 ?>
						 <span class="featured">Sold</span>						 
						 <?php } ?>
						 </p>
							
								
								
                                <div class="clearfix right2">
                                    <h4 class="clearfix">
                                        <span class="pull-left">{{ isset($row->ctregistered->year) ? $row->ctregistered->year : '' }}  {{ isset($row->ctmake->make) ? $row->ctmake->make : '' }}  {{ isset($row->ctmodels->model) ? $row->ctmodels->model : '' }}  {{ $row->engine_size}}</span>
                                        <span class="pull-right">$ {{ $row->price}}</span>
                                    </h4>
                                    <div class="button-information clearfix">
                                        <p>
											
										   @if($row->ctmake['make']) 
                                            <span>
                                               <i class="fa fa-make" aria-hidden="true"></i><br>
                                               {{ isset($row->ctmake->make) ? $row->ctmake->make : '' }}
                                            </span>
											@endif

										   @if($row->ctmodels['model']) 
                                            <span>
                                              <i class="fa fa-model" aria-hidden="true"></i>  <br>
                                              {{ isset($row->ctmodels->model) ? $row->ctmodels->model : '' }}
                                            </span>
											@endif											
											
											
											@if($row->ctregistered['year']) 
										   
										    <span>
                                                 <i class="fa fa-year" aria-hidden="true"></i> <br>
                                                {{ isset($row->ctregistered->year) ? $row->ctregistered->year : '' }}
                                            </span>
										   
											@endif
											 
                                           
										  <?php if($row->enginesize){ ?>
                                            <span> 
                                                <i class="fa fa-enginesize" aria-hidden="true"></i><br>
                                               {{ isset($row->enginesize->engine_size) ? $row->enginesize->engine_size : '' }}
                                            </span>
											<?php } ?>
											
											@if($row->mileage) 
                                            <span>
                                               <i class="fa fa-mileage" aria-hidden="true"></i> <br>
                                               {{ $row->mileage}}
                                            </span>
											@endif 
											
                                        </p>
										
										
                                        <div class="clearfix inventorybutton">
										
 @if($row->seo_url != '') 
                        <a href="{{ url(asset('')) }}truck/{{ $row->seo_url}}">
						
						@else
						<a href="{{ url(asset('')) }}truck/{{ $row->id}}">
						
						 @endif

                                           
											
											
											
											 <button>details</button></a><br>
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                     
@endforeach  

</ul>  
				
 @else
   <div class="col-md-12 text-center alert" >  No record Found </div>
   
@endif

				
                     
                </div>
            </div>
        </section>


<!-- list view -->
        <section class="best-choices">
            <div class="container">
                <div class="clearfix" id="list-view">
                    
					<?php /*
					<div class="text-center"> 
                    <h2 class="heading text-center clearfix">the best choic for you</h2>
                    </div>
					*/ ?>
					
                <div class="features-cars clearfix" >
  
<div id="listingGrid"  >
  
@if ($cttrucklisting->count())
  
@foreach ($cttrucklisting as $row)		

				   <div class="col-md-3 col-sm-6 col-xs-12 clearfix equalheight" style="height: 375px; visibility: visible; animation-name: rotateIn;">
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
                          
						  <img src="{{ asset('public/uploads/thumb') . '/'.  $row->image }}">
						 
						 <?php }else{ ?>
						 
						 <img src="{{ asset('images/no_image.png') }}">
						  
						  <?php } ?>
						  
						  </a>
						  
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
								Mileage: {{ $row->mileage}}<br>
								Engine: - {{ isset($row->enginesize->engine_size) ? $row->enginesize->engine_size : '' }} <br>
								<?php  
								/*
								Condition: <span class="color-type">{{ isset($row->ctcondition->condition) ? $row->ctcondition->condition : '' }}
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
 
 

 
 
 @else
   <div class="col-md-12 text-center alert" >  No record Found </div>
   
@endif
 
 
                </div>
                </div>
            </div>
			
			
<div class="row">
	<div class="col-sm-12 text-center">  
		<a id="load-more-btn" href="javascript:;" class="btn quote" onclick="fun_loadmore(2);">
		  <i id="idspin" class="fa fa-refresh fa-spin" style="display:none;"></i>Load More
		</a> 
	</div> 
</div> 			
			
        </section>


		

@include('frontend.layouts.contactinfo') 


@include('frontend.layouts.footer')				
		
		
		
       
        <script src="{{ URL::asset('frontend/assets/') }}/js/jquery.js"></script>
       
        <script src="{{ URL::asset('frontend/assets/') }}/js/jquery.sumoselect.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                window.testSelAll2 = $('.testSelAll2').SumoSelect({selectAll:true });
            });
        </script>
		
		<input type="hidden" id="homeurl" value="{{ url('/') }}">
		
		  
        <script type="text/javascript">
         
		 function fun_loadmore(page){
	
			if(page=='0'){ return false; }
			 
			 var homeurl=$("#homeurl").val(); 
			  
			var drpmake = []; 
			$('#drpmake :selected').each(function(i, selected){ 
			  drpmake[i] = $(selected).text(); 
			});	
			
			var drpyear = []; 
			$('#drpyear :selected').each(function(i, selected){ 
			  drpyear[i] = $(selected).text(); 
			});				
				
			var drptype = []; 
			$('#drpyear :selected').each(function(i, selected){ 
			  drptype[i] = $(selected).text(); 
			});			

			
			var sortby = $('select#sortby option:selected').val(); 
			
			  $('#idspin').css('display','');
			  
			 $.ajax({
				type: "POST",
				url: homeurl+'/ajax/inventory',
				data: {page: page,drpmake:drpmake,drpyear:drpyear,drptype:drptype,sortby:sortby},
				type: 'get',
				success: function( response ) {
							var data = jQuery.parseJSON(response);
						
						var page2=page+1;
							
						if(data[0]==''){

						$("#load-more-btn").attr("onclick","fun_loadmore(0);");
						var data="<div class='col-sm-12 text-center'><br>Sorry, no posts available.<br></div>";
						$("#listingGrid").append(data);
						
						
						}else{	
						
						$("#load-more-btn").attr("onclick","fun_loadmore("+page2+");");  
						$("#listingGrid").append(data[0]);
						$("#listingList").append(data[1]);
						equalheight();
						
						}
						
						$('#idspin').css('display','none');
						
		
		
				}
				});

		}
		
		
		function equalheight(){ 
           
		     $('.container').each(function () { 

                var highestBox = 0;  

                $('.equalheight', this).each(function () {  

                    if ($(this).height() > highestBox) {

                        highestBox = $(this).height();

                    } 
                }); 

                $('.equalheight', this).height(highestBox);
				}); 
				
			}		
		 
		 
		 
       
            $("#grid").click(function(){
                  $("#grid-view").css('display', 'none');
                $("#list-view").css('display', 'block');
                $("#grid").AddClass('active');
            }); 

            $("#list").click(function(){
                  $("#list-view").css('display', 'none');
                    $("#grid-view").css('display', 'block');
                    // $("#list").css('color', 'rgb(156,29,39)');                
                    $("#list").AddClass('active');
            });

        </script>
        <script>
            $(document).ready(function () {
                $('select:not(.ignore)').niceSelect();
                FastClick.attach(document.body);
            });
        </script>
		 
        <script type="text/javascript">
            $("#item").hide();
            $("#button1").click(function () {
                var $this = $(this);
                $this.toggleClass('SeeMore2');
                if ($this.hasClass('SeeMore2')) {
                    $('#more-div').text('Less Option');
                    $("#icon-change").removeClass('fa fa-angle-down');
                    $("#icon-change").addClass('fa fa-angle-up');
                    $("#item").slideDown('slow');
                } else {
                    $("#more-div").text('More Option');
                    $("#icon-change").removeClass('fa fa-angle-up');
                    $("#icon-change").addClass('fa fa-angle-down');
                    $("#item").slideUp('slow');
                }
            });
			
			
			$(".btn-clear").click(function () {
			       
					 
			
			}); 
			
        </script>
		
<?php
if($_REQUEST['make']==""){
?>
		
		
		
<?php } ?>		
		
      