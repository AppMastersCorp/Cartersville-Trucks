@include('frontend.layouts.header')	
    <!-- slider -->
    
@foreach ($cttrucklisting as $row)

<style>
.featurescss li{
	font-size: 14px;
	font-weight: bold;  

	padding: .22em 0 .22em .8em;
	position: relative;	
	display:inline-block;
	margin:auto 12px;
}

.featurescss ul{
 text-align:center;
}

.keyfeatures .headings{
    font-weight: bold;
    padding-left: 20px;
    text-transform: uppercase;
    font-size: 20px;
    font-style: italic;
    margin-bottom: 8px;
    text-align: center;
}	

.keyfeatures li span:before {
    content: "";
    display: block;
    position: absolute;
    width: 7px;
    height: 7px;
    top: .6em;
    left: 0;
    background: #85250b;
    border-radius: 50%;
}

.keyfeatures .col-md-10.col-sm-offset-1.bottomcus {
  border-bottom:1px solid rgb(233,233,233);
  padding-bottom: 20px;
}

.keyfeatures .clearfix{
  margin-bottom: 25px;

}

.interest:before {
    content: "%";
	font-weight:bold;
}


 .gallery .carousel-main img{
   height: auto;
   cursor: pointer;
}

 .gallery .carousel-main .imgcss{
  border:1px solid #ccc;
  padding:8px;
  margin:4px;
}

.carousel-main.col-sm-4.gallery{
  padding:4px;
}
</style>



<section class="meet-team clearfix det">
    
        <div class="container">
            <div class="meet-team-text">
                <h2 class="col-sm-8">{{ isset($row->ctregistered->year) ? $row->ctregistered->year : '' }} {{ isset($row->ctmake->make) ? $row->ctmake->make : '' }} {{ isset($row->ctmodels->model) ? $row->ctmodels->model : '' }} </h2>
				
				
 				<div class="col-sm-4 text-right">
				<?php /*
				<img  src="{{ URL::asset('/') }}images/logofb.jpg" style="max-width: 126px; text-align: right;">*/ ?>
				</div>	 
				
            </div>
        </div>
</section>

<section class="page-detail-slider det">
    <div class="container">
        <div class="">
            <div class="col-md-8">
                <div class="span12 page-detail-carousal">

                <div id="sync1" class="owl-carousel"> 
					 <?php 
					 if($row->public_id){
					 
					  echo $img_arr_large[$row->id];
					  
					 }else if($row->image){ ?>
				
					@if($row->image != '')
					<div class="item"><img src="{{ asset('public/uploads') . '/'.  $row->image }}"></div>
					@endif 
					
					<?php }else{ ?>
					<div class="item"><img src="{{ asset('images/no_image.png') }}"></div>
					
					<?php } ?>
					
					
					<?php
					if(isset($all_img_arr_large[$row->id])){
					
						foreach($all_img_arr_large[$row->id] as $img){
						 
						  echo $img;
						
						}
						
					
					}else{
					
					
					?>
					
					
					@foreach ($trucklisting_img as $img) 
					@if($img->imgname != '')					 
						<div class="item"><img src="{{ asset('public/truckimage') . '/'.  $img->imgname }}"></div>
					@endif
					@endforeach  
                    
					<?php } ?>
                </div>

                <div id="sync2" class="owl-carousel"> 
				
					<?php
					if($row->public_id){
					 
					  echo $img_arr_large[$row->id];
					  
					 }else{
					?>
				
					 @if($row->image != '')
					 <div class="item"> 
					 <img src="{{ asset('public/uploads') . '/'.  $row->image }}"> 
					 </div>
					 @endif 
					 
					 <?php } ?>
					 
					 <?php
					
					 
					if(isset($all_img_arr_large[$row->id])){
					
						
						foreach($all_img_arr_small[$row->id] as $img){
						 
						  echo $img;
						
						}
						
					
					}else{ ?>
					 
					@foreach ($trucklisting_img as $img)  
					@if($img->imgname != '') 
					<div class="item"> 
					 <img src="{{ asset('public/truckimage/thumb') . '/'.  $img->imgname }}">
					</div>
					@endif
					@endforeach	

					<?php } ?>
                </div>


                </div>
            </div>
			
            <div class="col-md-4">
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
                            <p class="year-color">  {{ $row->stock_auto }}</p>
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
if(isset($cttrucklisting->ctsubmodels) and $cttrucklisting->ctsubmodels!=""){
echo $cttrucklisting->ctsubmodels;
}else{
echo 'N/A';
}

?></dd>
						
<dt class=" info-backgorund-color">Body Style:</dt>
<dd class="year-color  info-backgorund-color">
<?php 
 
if(isset($row->ctbodystyle->bodystyle)){ echo $row->ctbodystyle->bodystyle; }else{ echo 'N/A'; }
?>
</dd>


<dt class="">Body Type:</dt>
<dd class="year-color">{{ isset($row->bodytype->body_type) ? $row->bodytype->body_type : 'N/A' }}</dd>						
						
						
                        <dt class=" info-backgorund-color">Mileage:</dt>
                        <dd class="year-color  info-backgorund-color">
						 <?php if($row->mileage != '') { echo $row->mileage; }else{ echo 'N/A'; }  ?>
						</dd>
                        
						<dt class="">Transmission:</dt>
                        <dd class="year-color ">{{ isset($row->cttransmission->transmission) ? $row->cttransmission->transmission : 'N/A' }}</dd>
						
						<?php /*
                        <dt class="">Horsepower:</dt>
                        <dd class="year-color"> 
						{{isset($row->horsepower->horsepower) ? $row->horsepower->horsepower : 'N/A' }}
						</dd>	
						
						
						<dt class="info-backgorund-color">Torque:</dt>
                        <dd class="year-color info-backgorund-color">{{ isset($row->torque->torque) ? $row->torque->torque : 'N/A' }}</dd>						
						*/ ?>	
						
                        <dt class=" info-backgorund-color">Drive Train:</dt>
                        <dd class="year-color  info-backgorund-color"> 
						{{isset($row->drivetrain->drivetrain) ? $row->drivetrain->drivetrain : 'N/A' }}
						</dd>							
						
	 							
						
						
						
                    </dl>	
                   
				   <div class='clearfix'></div>
				    
					<?php 
					/*
					<img style="width: 150px" src="{{ URL::asset('frontend/assets/') }}/images/carfax_logo.png"><img src="{{ URL::asset('frontend/assets/') }}/images/carfax.PNG">
					
                    <li style="list-style: none;" class="monthlyPayment"><a class="calculate" href="#"><strong>Your estimated monthly payment:</strong></a><br><a class="calculate" href="#"><strong class="h2">$401</strong></a> <span class="perMonthLabel">per month   </span> <br>
                    <p style="font-size: 15px;">72 Months @ 2.9% A.P.R. (estimated financing rate on approved credit)<br> ($4,421 Down Payment)</p></li>
					*/ 
					?>
					
					
					
                </div>
				
				
				<div class="btn-cr">
				
					<a href="/credit-application" class="btn btn-default">Credit Application</a>
					
					<a href="/test-drive-policy" class="btn btn-default">Test Drive Policy</a>
				
				</div>
				
				
				
				
            </div>
        </div>
    </div>
</section>







<section class="contact-tabs page-details page-detail-slider det">
    <div class="container">
        <div class="col-md-8">
            <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#description">Description</a></li>
                <li><a data-toggle="pill" href="#images">images</a></li>
                <li><a data-toggle="pill" href="#video">video</a></li>
               <?php /* <li><a data-toggle="pill" href="#review">reviews</a></li> */ ?>
            </ul>

            <div class="tab-content">
                <div id="description" class="tab-pane fade in active">
                    <ul>
                        <li>
                            <p>
                              <?php
							   print_r($row->description);
							  ?>
                            </p>
							
							
                        </li>
                    </ul>
					
<?php /*other details */ ?>					
					

	
<?php /********* Tier 1 Features **********/ ?>

	
        <div class="col-md-12 keyfeatures">
            <div class="basic-parameter clearfix">
                
				  <div class="row">
				 
				 <?php if($row->features){ ?>
				<div class="col-sm-3">
				<h3 class="headings">Safety</h3>
                <div class="col-md-12 bottomcus">
                    <div class="information">                         
						 <div class="featurescss">
						<ul>
						<?php
						 $features=explode(",",$row->features);
						 
						foreach($features as $val){
						  
						  if($val){  echo "<li class='col-sm-12 text-left'> <span>".$val."</span></li>"; }
						
						} 
						?>
						</ul>
						</div>  
                    </div>
                </div>
				
			   <div class="clearfix"></div>
			   </div>
			   <?php } ?>
			   

				<?php if($row->features_2){ ?>
				<div class="col-sm-3">
				<h3 class="headings">Comfort & Convenience</h3>
                <div class="col-md-12  bottomcus">
						<div class="information">                         
						 <div class="featurescss">
						<ul>
						<?php
						 $features=explode(",",$row->features_2);
						 
						foreach($features as $val){
						  
						   if($val){  echo "<li class='col-sm-12 text-left'> <span>".$val."</span></li>"; }
						
						} 
						?>
						</ul>
						</div> 
                    </div>
                </div> 
				<div class="clearfix"></div> 
				</div>
				<?php } ?>
				
				
				<?php if($row->features_3){ ?>
				<div class="col-sm-3">
				<h3 class="headings">Music & Entertainment</h3>
                <div class="col-md-12 bottomcus">
						<div class="information">                         
						 <div class="featurescss">
						<ul>
						<?php
						 $features=explode(",",$row->features_3);
						 
						foreach($features as $val){
						  
						   if($val){  echo "<li class='col-sm-12 text-left'> <span>".$val."</span></li>"; }
						
						} 
						?>
						</ul>
						</div> 
                    </div>
                </div> 
				<div class="clearfix"></div> 
				</div>				
				<?php } ?>
				
				
				<?php if($row->features_4){ ?>
				<div class="col-sm-3">
				<h3 class="headings">Interior</h3>
                <div class="col-md-12 bottomcus">
						<div class="information">                         
						 <div class="featurescss">
						<ul>
						<?php
						 $features=explode(",",$row->features_4);
						 
						foreach($features as $val){
						  
						   if($val){  echo "<li class='col-sm-12 text-left'> <span>".$val."</span></li>"; }
						
						} 
						?>
						</ul>
						</div> 
                    </div>
                </div> 
				<div class="clearfix"></div> 
				</div>
				<?php } ?>
				
				
				</div>
				
				<div class="row">

				<?php if($row->features_5){ ?>
				<div class="col-sm-3">
				<h3 class="headings">Exterior</h3>
                <div class="col-md-12 bottomcus">
						<div class="information">                         
						 <div class="featurescss">
						<ul>
						<?php
						 $features=explode(",",$row->features_5);
						 
						foreach($features as $val){
						  
						   if($val){  echo "<li class='col-sm-12 text-left'> <span>".$val."</span></li>"; }
						
						} 
						?>
						</ul>
						</div> 
                    </div>
                </div> 
				<div class="clearfix"></div> 
				</div>
				<?php } ?>

				
				<?php if($row->features_6){ ?>
				<div class="col-sm-3">
				<h3 class="headings">Tires</h3>
                <div class="col-md-12 bottomcus">
						<div class="information">                         
						 <div class="featurescss">
						<ul>
						<?php
						 $features=explode(",",$row->features_6);
						 
						foreach($features as $val){
						  
						   if($val){  echo "<li class='col-sm-12 text-left'> <span>".$val."</span></li>"; }
						
						} 
						?>
						</ul>
						</div> 
                    </div>
                </div> 
				
				</div>
				
				<?php } ?>


				
<?php /*				
				<div class="col-sm-3">
				<h3 class="headings">Wheels</h3>
                <div class="col-md-12 bottomcus">
						<div class="information">                         
						 <div class="featurescss">
						<ul>
						<?php
						 $features=explode(",",$row->features_7);
						 
						foreach($features as $val){
						  
						   if($val){  echo "<li class='col-sm-12 text-left'> <span>".$val."</span></li>"; }
						
						} 
						?>
						</ul>
						</div> 
                    </div>
                </div> 
				<div class="clearfix"></div> 
				</div>
*/ ?>				
				
				
			   
				 
				 </div>
              
              				
				 
            </div>
        </div>
		
	
<?php /******** Tier 1 Features **********/ ?>				

			
					
					
<?php /*other details */ ?>		
					
                </div>
               
			   <div id="images" class="tab-pane fade">
                  

				  <ul>
                        <li>
                            <p>
 
 <?php /*
<div class='list-group gallery'>	
@foreach ($trucklisting_img as $img) 

	@if($img->imgname != '')
	
	
            <div class='col-sm-3 gallery'>
			 
			
                <a style="width:auto;" class="fancybox " rel="ligthbox" href="javascript:;">
                  
					<img style="height:160px;width:auto;" class="img-responsive thumbnail"   src="{{ asset('public/truckimage') . '/'.  $img->imgname }}">
                </a>
            </div> <!-- col-6 / end -->
	
	
	@endif 

@endforeach								
			
</div>	 
*/ ?>


<?php /****************************************************************************************************************************************************************************************************************************************************************************************************************/ ?>

<script type="text/javascript" src="{{ URL::asset('frontend/slider/') }}/js/jquery-1.10.1.min.js"></script>
<link href="{{ URL::asset('frontend/slider/') }}/css/lightbox-carousel.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="{{ URL::asset('frontend/slider/') }}/js/lightbox-carousel.js"></script> 
<script type="text/javascript">
	$(function() {
		var LBC = new carouselLightbox({
			"selector": ".main"
		});
	})
</script> 
 
		
		
		<div class="main gallery" style="position: relative;">
		
		
<?php

if(isset($all_img_arr_large[$row->id])){

	
	foreach($all_img_arr_large[$row->id] as $img){
	 
	 
	 echo '<div class="carousel-main col-sm-4 gallery" style=" ">
				<div class="imgcss">';
	 
	  echo $img;
	  
	  
	  echo '</div>
			</div>';
	
	}
	

}

?>		
		
		
		
		
		@foreach ($trucklisting_img as $img) 

		@if($img->imgname != '')
		
			<div class="carousel-main col-sm-4 gallery" style=" ">
				<div class="imgcss">
				<img style="" title="" src="{{ asset('public/truckimage') . '/'.  $img->imgname }}"  />
				</div>
			</div>
			
			@endif 

		@endforeach				
			
		</div>
		
		
<?php /****************************************************************************************************************************************************************************************************************************************************************************************************************/ ?>


                                
                            </p>
                        </li>
                       
                    </ul>
                </div>
                
                 <div id="video" class="tab-pane fade">
                    <ul>
                        <li>
                            <p>
                               
							<?php
								$videolink=$row->video;
								
								if($videolink){
								$ytarray=explode("/", $videolink);
								$ytendstring=end($ytarray);
								$ytendarray=explode("?v=", $ytendstring);
								$ytendstring=end($ytendarray);
								$ytendarray=explode("&", $ytendstring);
								$ytcode=$ytendarray[0];
								echo "<iframe width=\"100%\" height=\"360\" src=\"http://www.youtube.com/embed/$ytcode\" frameborder=\"0\" allowfullscreen></iframe>";
								}
							?>
								
								
                            </p>
                        </li>
                       
                    </ul>
                </div>
				
				 <div id="review" class="tab-pane fade">
                     <ul>
                        <li>
                           <p>
                                
                            </p>
                        </li>
                       
                    </ul>
                </div>
				
            </div>
            
        </div>
		
		 <div class="col-md-4">

<?php /*calculator*/ ?>		

 
  


 
<div class="calsdiv">		 
		 
<div class="calc">
 
  <h1>Auto Loan Calculator</h1>
  
  
<div class="form-group">
	<div  class="input-group">
	<span class="input-group-addon"><i class="fa fa-usd"></i></span>
	<input type="text" id="amount" name="amount" placeholder="Loan Amount">
	 </div>
</div>  
  
 <div class="form-group">
	<div  class="input-group">
	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
 <input type="text" id="months" placeholder="Months">
	 </div>
</div> 

 
 <input type="hidden" id="years" placeholder="Years">


	<div class="form-group">
		<div  class="input-group">
		<span class="input-group-addon"><i class="fa interest" style=""></i></span>
		<input type="text" id="interest" placeholder="Interest Rate">
		 </div>
	</div> 
	
	
	<div class="form-group">
		<div  class="input-group">
		<span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>
		<input type="text" id="down" placeholder="Down Payment">
		 </div>
	</div> 
	
 
    <p>
        <button class="btn" onclick="myFunction()">Calculate</button>
		
		
		
    </p>
    <p id="output">Monthly Payment</p>
</div>

</div>
<?php /*calculator*/ ?>		 
		 
		 
		 </div>	
		
		
		<?php /*
        <div class="col-md-12">
            <div class="basic-parameter clearfix">
                <h3 class="heading">basic parameters</h3>
                <div class="col-md-6">
                    <div class="information">
                        <dl>
                            <dt class="info-backgorund-color">Engine:</dt>
                            <dd class="year-color info-backgorund-color">{{ $row->engine_size }}</dd>
                            <dt>Drivetrain:</dt>
                            <dd class="year-color">{{ $row->drive_train }}</dd>
                            <dt class="info-backgorund-color">Transmission:</dt>
                            <dd class="year-color info-backgorund-color">{{ isset($row->cttransmission->transmission) ? $row->cttransmission->transmission : 'N/A' }}</dd>
                        </dl>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="information">
                        <dl>
                            <dt class="info-backgorund-color">Exterior Color:</dt>
                            <dd class="year-color info-backgorund-color">{{ isset($row->ctexteriorcolor->color) ? $row->ctexteriorcolor->color : 'N/A' }}</dd>
                            <dt class="">Interior Color:</dt>
                            <dd class="year-color">{{ isset($row->ctcolor->color) ? $row->ctcolor->color : 'N/A' }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
		*/ ?>
	
<div class="clearfix"></div>		
		

<ul class="pager">
  <li class="previous"><a href="javascript:;" onclick="goBack();">Previous</a></li>
  
  <?php if($nextpage!=0){ ?>
  <li class="next"><a href="{{ URL::asset('/truck/') }}/{{ $nextpage}}"  >Next</a></li>
  <?php 
  } ?>
  
</ul>	 
		
		
    </div>
</section>
@endforeach





@include('frontend.layouts.contactinfo') 


@include('frontend.layouts.footer')    


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 
<script src="{{ URL::asset('frontend/assets/') }}/js/owl.carousel.js"></script>

 <style>
 
/*owl*/

 .owl-prev, .owl-next {
    display: none;
    position: absolute;
    top: calc(50% - 18px);
    z-index: 3;
    height: 36px;
    width: 36px;
    background: rgba(255, 255, 255, 0.74);
  }
  .owl-prev:hover, .owl-prev:hover {
    background: rgba(255, 255, 255, 0.94);
  }
  .owl-prev {
    right: 0;
  }
  
  .owl-prev {
    left: 0;
  }
  .owl-prev a{
    display: inherit;
    -ms-transform: rotate(270deg);
    -webkit-transform: rotate(270deg);
    transform: rotate(270deg);
    background: url("/resources/images/layout/chevron.png") center no-repeat;
    width: 32px;
    height: 34px;
  }
  .owl-next a {
    display: inherit;
    -ms-transform: rotate(90deg);
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    width: 32px;
    height: 40px;
    float: right;
  }
  .owl-theme .owl-controls {
    position: absolute;
    margin: 0;
    width: 100%;
  }
  .owl-theme .owl-dots .owl-dot span {
    background-color: rgba(170, 170, 170, 0.88);
    height: 8px;
    width: 8px;
  }
  .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot.active:hover span {
    background-color: rgba(0, 0, 0, 0.88);
  }
  .owl-theme .owl-dots .owl-dot:hover span {
    background-color: rgba(51, 51, 51, 0.88);
  }
  .owl-item{
    z-index:1; /* Fix for OwlCarousel2 Issue #772 (loop flicker) */
  }
  
.owl-prev,.owl-next{  
	font-size: 26px !important;  
}
.owl-theme .owl-controls{
  top: calc(50% - 19px);

}

#sync2 .owl-controls.clickable{
 display:none;
}
.owl-next{
  right:0px;
} 

/*owl*/
</style>
  

    <script>
    $(document).ready(function() {

      var sync1 = $("#sync1");
      var sync2 = $("#sync2");

      sync1.owlCarousel({
        singleItem : true,
        slideSpeed : 1000,
        navigation: true,
		 navigationText: [
        "<i class='fa fa-chevron-left'></i>",
        "<i class='fa fa-chevron-right'></i>"],  
        pagination:false,
        afterAction : syncPosition,
        responsiveRefreshRate : 200,
      });

      sync2.owlCarousel({
        items : 5,
		navigation:true,
		navigationText: [
      "<i class='fa fa-chevron-left'></i>",
      "<i class='fa fa-chevron-right'></i>"
      ],
        itemsDesktop      : [1199,3],
        itemsDesktopSmall     : [979,3],
        itemsTablet       : [768,2],
        itemsMobile       : [479,2],
        pagination:false,
        responsiveRefreshRate : 100,
        afterInit : function(el){
          el.find(".owl-item").eq(0).addClass("synced");
        }
      });

      function syncPosition(el){
        var current = this.currentItem;
        $("#sync2")
          .find(".owl-item")
          .removeClass("synced")
          .eq(current)
          .addClass("synced")
        if($("#sync2").data("owlCarousel") !== undefined){
          center(current)
        }

      }

      $("#sync2").on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo",number);
      });

      function center(number){
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;

        var num = number;
        var found = false;
        for(var i in sync2visible){
          if(num === sync2visible[i]){
            var found = true;
          }
        }

        if(found===false){
          if(num>sync2visible[sync2visible.length-1]){
            sync2.trigger("owl.goTo", num - sync2visible.length+2)
          }else{
            if(num - 1 === -1){
              num = 0;
            }
            sync2.trigger("owl.goTo", num);
          }
        } else if(num === sync2visible[sync2visible.length-1]){
          sync2.trigger("owl.goTo", sync2visible[1])
        } else if(num === sync2visible[0]){
          sync2.trigger("owl.goTo", num-1)
        }
      }

    });
	
	
	function goBack() {
	window.history.back();
	}
	
	function gonext(url){
	  window.location(url);
	}
	
	
function myFunction() {
    var loan = $('#amount').val(),
        month = $('#months').val(),
        int = $('#interest').val(),
        years = $('#years').val(),
        down = $('#down').val(),
        amount = parseInt(loan),
        months = parseInt(month),
        down = parseInt(down),
        annInterest = parseFloat(int),
        monInt = annInterest / 1200,
        calculation = ((monInt + (monInt / (Math.pow((1 + monInt), months) -1))) * (amount - (down || 0))).toFixed(2);
  
    document.getElementById("output").innerHTML = calculation;
}


$(function(){
	var month = $(this).val(),
      doneTypingInterval = 500,
      months = parseInt(month),
      typingTimer;

  $('#months').keyup(function(){
      month = $(this).val();
      months = parseInt(month);
  
      clearTimeout(typingTimer);
      if (month) {
          typingTimer = setTimeout(doneTyping, doneTypingInterval);
      }
  });

  function doneTyping () {
    $('#years').val(months/12);  
  }
})

$(function(){
	var month = $(this).val(),
      doneTypingInterval = 500,
      months = parseInt(month),
      typingTimer;

  $('#months').keyup(function(){
      month = $(this).val();
      months = parseInt(month);
  
      clearTimeout(typingTimer);
      if (month) {
          typingTimer = setTimeout(doneTyping, doneTypingInterval);
      }
  });

  function doneTyping () {
    $('#years').val(months/12);  
  }
})


$(function(){
	var year = $(this).val(),
      doneTypingInterval = 500,
      years = parseInt(year),
      typingTimer;

  $('#years').keyup(function(){
      year = $(this).val();
      myears = parseInt(year);
  
      clearTimeout(typingTimer);
      if (year) {
          typingTimer = setTimeout(doneTyping, doneTypingInterval);
      }
  });

  function doneTyping () {
    $('#months').val(year * 12);  
  }
})


	
	
    </script> 