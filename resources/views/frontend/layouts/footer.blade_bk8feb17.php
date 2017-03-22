@foreach ($footersetting as $row)  

  <footer> 
            <div class="footer">

                <div class="container">

                    <div class="col-md-2">

                        <div class="copyright-bg">

                            <div class="wow slideInLeft">
								 <a class="color_wh" title="Georgia Independent Automobile Dealers Association" target="_blank" href="https://giada.org/">
								  <img class="giadocss" src="{{ URL::asset('/') }}images/giado.png">
								</a> 
                                <span class="copyright">{{ $row->copyright }}</span> 

                            </div> 

                        </div>

                    </div>

                    <div class="col-md-8">

                        <div class="footer-navigation">

                            <ul class="clearfix footeredit text-center wow zoomInUp">

                                <li> 
                                <li><a href="{{ URL::asset('/') }}">Home</a></li> 
                                <li class="border-radius-footer"></li>  
								  

								
								@foreach ($pagesetting as $setting)  
								
								@if($setting->id == '1')
                                <li><a href="{{ URL::asset('/') }}{{ $setting->seo_url }}">About</a></li> 
                                <li class="border-radius-footer"></li> 
								
								<li><a href="{{ URL::asset('/inventory') }}">Current Inventory</a></li> 
								<li class="border-radius-footer"></li> 	 
								
								@endif
								
								
							@if($setting->id == '2') 
								
								<li><a href="{{ $setting->seo_url }}">Financing</a></li> 
								<li class="border-radius-footer"></li> 	 

								<li><a href="{{ URL::asset('/gallery') }}">gallery</a></li> 
								<li class="border-radius-footer"></li> 
							
							@endif 
								
								<?php /*
								 @if($setting->id == '3')
                                <li><a href="{{ URL::asset('/') }}{{ $setting->seo_url }}">services</a></li> 
                                <li class="border-radius-footer"></li> 
								@endif  
								*/ ?>
								
								@endforeach  
								
								
								<?php /*
								 <li><a href="{{ URL::asset('/our-team') }}">out team</a></li>  
								 */ ?>
                                 
                                <li><a href="{{ URL::asset('/') }}contact">contact us</a></li> 
                                </li>

                            </ul>

                            <a href="#" class="scrollToTop wow zoomInLeft scrrol-to-top"><img src="{{ URL::asset('frontend/assets/') }}/images/scroll-top.png"></a>

                        </div>

                    </div>

                    <div class="col-md-2">

                        <div class="text-right foot-images">
							@if($row->footer_logo != '')<img src="{{ asset('public/uploads') . '/'.  $row->footer_logo }}" class="wow slideInright">@endif
                            

                        </div>

                    </div>

                </div>

            </div>



        </footer>

@endforeach  		
		
</div>
 

		
<div class="popupcss modal fade " id="myModal" role="dialog">
		<div class="modal-dialog "> <!--modal-lg -->
		
		
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					 <h4 class="modal-title">Schedule an Appointment</h4> 
				</div>
				
				<div class="modal-body" id="appdiv">
					
					    
						<div class="modal-body">
						<p id="msgid" class="alert-danger" style="display:none;color: rgb(255, 0, 0); font-size: 16px; padding: 6px;"></p>
							 
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" required="" name="appname" id="appname" value="">
								 
							
							<div class="form-group">
								<label for="name">Email</label>
								<input type="email" class="form-control" required="" name="appemail" id="appemail" value="">
								 
							</div>								
							
							<div class="form-group">
								<label for="name">Phone number</label>
								<input type="number" class="form-control" required="" name="appphone" id="appphone" value="">
								 
							</div>								
							
							<div class="form-group">
								<label for="name">Day/time</label>
								<input type="text" class="form-control form_datetime " required="" name="appday" id="appday" value="">
								 
							</div>								
														
							
						 </div>	

							<div class="modal-footer">
							 
							<button  name="button"  class="submitapp btn btn-success btn-icon cust-button"><i class="fa fa-check"></i> Save</button>
							
							<button type="button" class="btn btn-default btn-icon " data-dismiss="modal"><i class="fa fa-times-circle"></i> Cancel</button>
							</div>						 
					 
					
					
				</div>
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div> -->
			</div>
		</div>
	</div>

 
		<?php
		$url= basename($_SERVER['REQUEST_URI']);

		if($url!='credit-application' and $url!='test-drive-policy'){
		?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

        <script src="http://bxslider.com/lib/jquery.bxslider.js"></script>

        <script src="{{ URL::asset('frontend/assets/') }}/js/bootstrap.min.js"></script>

        <script src="{{ URL::asset('frontend/assets/') }}/js/jquery.js"></script>

        <script src="{{ URL::asset('frontend/assets/') }}/js/jquery.nice-select.min.js"></script>

        <script src="{{ URL::asset('frontend/assets/') }}/js/owl.carousel.js"></script>

        <script src="{{ URL::asset('frontend/assets/') }}/js/waypoints.min.js"></script>

        <script src="{{ URL::asset('frontend/assets/') }}/js/wow.min.js"></script> 
		
		<?php } ?>	
		
			
   <link rel="stylesheet" href="{{ URL::asset('frontend/assets/') }}/instashow/jquery.instashow.css">
    <script src="{{ URL::asset('frontend/assets/') }}/vendors/handlebars.runtime.min.js"></script>

	<?php /*
	    <script src="{{ URL::asset('frontend/assets/') }}/vendors/jquery.min.js"></script>
		
		*/ ?>
	
    <script src="{{ URL::asset('frontend/assets/') }}/instashow/jquery.instashow.js"></script>
	
			
		
    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        items : 2,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });

    }); 
    </script>
        <script>

            new WOW().init();

        </script>

        <script>

		/*
		
            $(document).ready(function () {

                $('select:not(.ignore)').niceSelect();

                FastClick.attach(document.body);

				
					   alert('ss');
				
            });
			*/
		
		
		
            $(document).ready(function () {  
				  
				$("#appname").val('');
				$("#appemail").val('');
				$("#appphone").val('');
				$("#appday").val('');  


					$(".submitapp").click(function(){ 
					  
					   
						 var homeurl=$("#homeurl").val();						
						 var name=$("#appname").val();
						 var email=$("#appemail").val();
						 var phone=$("#appphone").val();
						 var day=$("#appday").val();
						
						 if(name==""){  
						 
						   $("#msgid").css('display', 'block');
						   $("#msgid").html("Fill all textbox");
							
							setTimeout(function() {
								 $("#msgid").css('display', 'none');
							}, 5000);
						 
						 return false; 
						 
						 }
						
						
						 $.ajax({
							type: "POST",
							url: homeurl+'/callajax/submitapp?submit=1',
							data: {name: name,email: email,phone:phone,day:day},
							type: 'get',
							success: function( response ) {
							
								if(response==1){
								
								$("#appdiv").html('<div class=\"alert alert-success\">Successfully Sent</div>');
								
								}else{
								$("#appdiv").html('<div class=\"alert alert-danger\">Sending Fail</div>');
								
								}
							}
						});
						
						
						
					});	
            });

        </script>

        <script type="text/javascript">

           

            $(document).ready(function () {



                 

                $(window).scroll(function () {

                    if ($(this).scrollTop() > 100) {

                        $('.scrollToTop').fadeIn();

                    } else {

                        $('.scrollToTop').fadeOut();

                    }

                });



                

                $('.scrollToTop').click(function () {

                    $('html, body').animate({scrollTop: 0}, 'slow');

                    return false;

                })



            });





        </script>

        <script type="text/javascript"> 
		
            $('.container').each(function () { 

                var highestBox = 0;  

                $('.equalheight', this).each(function () {  

                    if ($(this).height() > highestBox) {

                        highestBox = $(this).height();

                    } 
                }); 

                $('.equalheight', this).height(highestBox);
				
/**************/


                var highestBox = 0;  

                $('.featureheading', this).each(function () {  

                    if ($(this).height() > highestBox) {

                        highestBox = $(this).height();

                    } 
                }); 

                $('.featureheading', this).height(highestBox);				
				
				

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

			
				
			
        </script>

          <script type="text/javascript">
          $(window).bind("load resize slid.bs.carousel", function() {
              var imageHeight = $(".active .holder").height();
              $(".controllers").height( imageHeight );
              console.log("Slid");
          });   
         </script>       
            
			
 		
		
	
<link href="{{ URL::asset('frontend/cal/') }}/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">				
<script type="text/javascript" src="{{ URL::asset('frontend/cal/') }}/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>

 <script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	
	$('.form_date').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });/*
	$('.form_time').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });*/
</script>	
				
			
			
    </body>

</html>