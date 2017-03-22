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
                                <?php /*
								<li><a href="{{ URL::asset('/') }}{{ $setting->seo_url }}">About</a></li> 
                                <li class="border-radius-footer"></li> */ ?>
								
								<li><a href="{{ URL::asset('/inventory') }}">Current Inventory</a></li> 
								<li class="border-radius-footer"></li> 	 
								
								@endif
								
								
							@if($setting->id == '2') 
								
								<li><a class="lin" href="{{URL::asset('/')}}{{$setting->seo_url }}">Financing</a></li> 
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
					<button onClick="closepopup();" type="button" class="close cancel" data-dismiss="modal">&times;</button>
					 <h4 class="modal-title">Schedule an Appointment</h4> 
				</div>
				
				<div class="modal-body" id="appdiv">
					
					    
						<div class="modal-body">
						<p id="msgid" class="alert-danger" style="display:none;color: rgb(255, 0, 0); font-size: 16px; padding: 6px;"></p>
							 
							<div class="form-group">
								<label for="name">Name</label>
								<div  class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control app_imp" required="" name="appname" id="appname" value="">
								 </div>
							</div>
							
							<div class="form-group">
								<label for="name">Email</label>
								<div  class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="email" class="form-control app_imp" required="" name="appemail" id="appemail" value=""   >
								 </div>
							</div>								
							
							<div class="form-group has-feedback">
								<label for="name">Phone number</label>
								<div  class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
								
								<input type="text" class="form-control app_imp" required="" name="appphone" id="appphone" value="" onkeydown="javascript:backspacerDOWN(this,event);" onkeyup="javascript:backspacerUP(this,event);" maxlength="14"  >
								 </div>	
							</div>								
							
							<div class="form-group">
								
								<div class="row">
								
								<div class="col-sm-8">
								<label for="appday">Day/time</label>
								<div  class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>	
								<input type="text" class="form-control form_date app_imp" required="" name="appday" id="appday" value="" data-date="" data-date-format="dd MM yyyy" data-link-field="appday" data-link-format="yyyy-mm-dd">
								</div>								
								</div>
								
								<div class="col-sm-4">	
								  <label for="appday_time">&nbsp;</label>								
								 <select class="form-control step_req app_imp" id="appday_time" name="appday_time">
										<option value="">Select Time</option>
										<option value="9:00 AM - 9:30 AM">9:00 AM - 9:30 AM</option> 
										<option value="9:30 AM - 10:00 AM">9:30 AM - 10:00 AM</option> 
										
										<option value="10:00 AM - 10:30 AM">10:00 AM - 10:30 AM</option> 
										<option value="10:30 AM - 11:00 AM">10:30 AM - 11:00 AM</option> 
										
										<option value="10:00 AM - 10:30 AM">10:00 AM - 10:30 AM</option> 
										<option value="10:30 AM - 11:00 AM">10:30 AM - 11:00 AM</option> 
		
										<option value="11:00 AM - 11:30 AM">11:00 AM - 11:30 AM</option> 
										<option value="11:30 AM - 12:00 AM">11:30 AM - 12:00 PM</option> 

										<option value="12:00 PM - 12:30 PM">12:00 PM - 12:30 PM</option> 
										<option value="12:30 PM - 1:00 PM">12:30 PM - 1:00 PM</option>

										<option value="1:00 PM - 1:30 PM">1:00 PM - 1:30 PM</option> 
										<option value="1:30 PM - 2:00 PM">1:30 PM - 2:00 PM</option>
										
										<option value="2:00 PM - 2:30 PM">2:00 PM - 2:30 PM</option> 
										<option value="2:30 PM - 3:00 PM">2:30 PM - 3:00 PM</option>										
										<option value="3:00 PM - 3:30 PM">3:00 PM - 3:30 PM</option> 
										<option value="3:30 PM - 4:00 PM">3:30 PM - 4:00 PM</option>
										
										<option value="4:00 PM - 4:30 PM">4:00 PM - 4:30 PM</option> 
										<option value="4:30 PM - 5:00 PM">4:30 PM - 5:00 PM</option>										
 										<option value="5:00 PM - 5:30 PM">5:00 PM - 5:30 PM</option> 
										<option value="5:30 PM - 6:00 PM">5:30 PM - 6:00 PM</option>										
										 
								 </select>
								 
								</div>
								
								 
							</div>								
														
							
						 </div>	

							<div class="modal-footer">
							 
							<button  name="button"  class="submitapp btn  btn-icon cust-button"><i class="fa fa-check"></i> Save</button>
							
							<button onclick="closepopup();" type="button" class="btn btn-default btn-icon cancel" data-dismiss="modal"><i class="fa fa-times-circle"></i> Cancel</button>
							</div>						 
					 
					
					
				</div>
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div> -->
			</div>
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
			
			
$( "select,#appday" ).change(function() {
   var id=$(this).attr('id');  
	if( $(this).val() ){
	 $(this).removeClass("has-error");
	}  
});		

$( "input" ).keyup(function() {
   var id=$(this).attr('id');  
	if( $(this).val() ){
	 $(this).removeClass("has-error");
	} 
	
	if( id=='appemail' || id=="email" ){
			var email=$(this).val()
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; 
            if (reg.test(email) == false) 
            {
               $('#'+id+'').addClass("has-error");
                return (false);
            }else{
			
			   $('#'+id+'').removeClass("has-error");
			}	 
	 
	 
	}
   
});	
				  
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
						 var appday_time=   $('select#appday_time option:selected').val();
						
						 
	
 	
	ii=1; 
	$('.app_imp').each(function(){   

		if(!/[\S]/.test($(this).html())) {  
			  
			  
			  if($(this).val()==""){
			  

				$("#msgid").css('display', 'block');
				$("#msgid").html("Fill all textbox");

				setTimeout(function() {
				$("#msgid").css('display', 'none');
				}, 5000);	 
			  ii=0; 
			  $(this).addClass("has-error");
			   
			  }
			  
		} 
		
	});

if(appday_time==""){

	$("#msgid").css('display', 'block');
	$("#msgid").html("Fill all textbox");

	setTimeout(function() {
	$("#msgid").css('display', 'none');
	}, 5000);	 
	ii=0; 
	$("#appday_time").addClass("has-error");
	
}

if(ii==0){  return false; }

var email=$("#appemail").val();
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; 
if (reg.test(email) == false) 
{

$('#'+email+'').addClass("has-error");

$("#msgid").css('display', 'block');
$("#msgid").html("Fill valid email address.");

setTimeout(function() {
$("#msgid").css('display', 'none');
}, 5000);	 
ii=0; 

return (false);
} 
	
if(ii==0){  return false; }
 
 

 					
						 
						 
						 
						
						day=day+" "+appday_time; 
						
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
        showMeridian: 1,
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
	
	


/**************USA Phone Format***********/
var zChar = new Array(' ', '(', ')', '-', '.');
var maxphonelength = 14;
var phonevalue1;
var phonevalue2;
var cursorposition;

function ParseForNumber1(object){
  phonevalue1 = ParseChar(object.value, zChar); 
 
}

function ParseForNumber2(object){
  phonevalue2 = ParseChar(object.value, zChar);
}

function backspacerUP(object,e) {
  if(e){
    e = e
  } else {
    e = window.event
  }
  if(e.which){
    var keycode = e.which
  } else {
    var keycode = e.keyCode
  }

   
  ParseForNumber1(object)

  
  
  if(keycode >= 48){
    ValidatePhone(object)
  }
}

function backspacerDOWN(object,e) {

  if(e){
    e = e
  } else {
    e = window.event
  }
  if(e.which){
    var keycode = e.which
  } else {
    var keycode = e.keyCode
  }
  ParseForNumber2(object)
}

function GetCursorPosition(){

  var t1 = phonevalue1;
  var t2 = phonevalue2;
  var bool = false
  for (i=0; i<t1.length; i++)
  {
    if (t1.substring(i,1) != t2.substring(i,1)) {
      if(!bool) {
        cursorposition=i
        window.status=cursorposition
        bool=true
      }
    }
  }
  
   
}

function ValidatePhone(object){

  var p = phonevalue1

  p = p.replace(/[^\d]*/gi,"");
  
  if (p.length < 3) {
    object.value=p
  } else if(p.length==3){
  
 
    pp=p;
	
    d4=p.indexOf('(')
    d5=p.indexOf(')')
    if(d4==-1){
      pp="("+pp;
    }
    if(d5==-1){
      pp=pp+")";
    }
	  
	object.value = pp;
	  
		
  } else if(p.length>3 && p.length < 7){
  
 
    p ="(" + p;
    l30=p.length;
    p30=p.substring(0,4);
    p30=p30+") "

    p31=p.substring(4,l30);
    pp=p30+p31;

    object.value = pp;

  } else if(p.length >= 7){
    p ="(" + p;
    l30=p.length;
    p30=p.substring(0,4);
    p30=p30+") "

    p31=p.substring(4,l30);
    pp=p30+p31;

    l40 = pp.length;
    p40 = pp.substring(0,9);
    p40 = p40 + "-"

    p41 = pp.substring(9,l40);
    ppp = p40 + p41;

    object.value = ppp.substring(0, maxphonelength);
  }


  GetCursorPosition()

 
  if(cursorposition >= 0){
    if (cursorposition == 0) {
      cursorposition = 2
    } else if (cursorposition <= 2) {
      cursorposition = cursorposition + 1
    } else if (cursorposition <= 4) {
      cursorposition = cursorposition + 3
    } else if (cursorposition == 5) {
      cursorposition = cursorposition + 3
    } else if (cursorposition == 6) {
      cursorposition = cursorposition + 3
    } else if (cursorposition == 7) {
      cursorposition = cursorposition + 4
    } else if (cursorposition == 8) {
      cursorposition = cursorposition + 4
      e1=object.value.indexOf(')')
      e2=object.value.indexOf('-')
      if (e1>-1 && e2>-1){
        if (e2-e1 == 4) {
          cursorposition = cursorposition - 1
        }
      }
    } else if (cursorposition == 9) {
      cursorposition = cursorposition + 4
    } else if (cursorposition < 11) {
      cursorposition = cursorposition + 3
    } else if (cursorposition == 11) {
      cursorposition = cursorposition + 1
    } else if (cursorposition == 12) {
      cursorposition = cursorposition + 1
    } else if (cursorposition >= 13) {
      cursorposition = cursorposition
    }
 


    var txtRange = object.createTextRange();
    txtRange.moveStart( "character", cursorposition);
    txtRange.moveEnd( "character", cursorposition - object.value.length);
    txtRange.select();
  }

}

function ParseChar(sStr, sChar)
{
 

  if (sChar.length == null)
  {
    zChar = new Array(sChar);
  }
    else zChar = sChar;

  for (i=0; i<zChar.length; i++)
  {
    sNewStr = "";

    var iStart = 0;
    var iEnd = sStr.indexOf(sChar[i]);

    while (iEnd != -1)
    {
      sNewStr += sStr.substring(iStart, iEnd);
      iStart = iEnd + 1;
      iEnd = sStr.indexOf(sChar[i], iStart);
    }
    sNewStr += sStr.substring(sStr.lastIndexOf(sChar[i]) + 1, sStr.length);

    sStr = sNewStr;
  }

  return sNewStr;
}
/****************end*********************/	


/****************ValidateEmail*********************/
function ValidateEmail(id,email) {

            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            //var address = document.getElementById[email].value;
            if (reg.test(email) == false) 
            {
               $('#'+id+'').addClass("has-error");
                return (false);
            }else{
			
			   $('#'+id+'').removeClass("has-error");
			}
 }	
/****************ValidateEmail*********************/	
</script>	
				
			
			
    </body>

</html>