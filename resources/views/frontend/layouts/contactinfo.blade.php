
<section class="contact-information">

            <div class="container">

                <div class="col-md-4 wow slideInRight animated">

                    <div class="about-us">
					<?php /*
					@foreach ($footersetting as $row) 
                        <h3 class="heading">{{ $row->footer_left_con_title }}</h3>                    
                        <p>
                        <?php echo $row->footer_left_con; ?>
						</p>
						
					@endforeach  
						*/ ?>
						
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcartersvilletrucks&tabs=timeline&width=340&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="300" style="border:none;overflow:hidden; max-width:100%;" scrolling="no" frameborder="0" allowTransparency="true" ></iframe>						
						
						
                    </div>

                </div>

                 <div class="col-md-4 wow bounceInDown animated">

                <h3 class="heading">contact form</h3>

                <div class="contact-us clearfix wow zoomInUp">

                        <div class="contact-form clearfix">                         

                            <form id="formid">

                                <div class="col-md-12"> 
                                    <div class="form-group"> 
                                        <input type="text" class="form-control" id="name" placeholder="Enter your name"> 
                                    </div> 
                                </div>

                                <div class="col-md-12"> 
                                    <div class="form-group"> 
                                        <input type="email" class="form-control" id="email" placeholder="Enter your email"> 
                                    </div> 
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="address" placeholder="Enter your address">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">                                     
                                        <textarea class="form-control" rows="5" id="comment" placeholder="Enter message"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="button" class="btn btn-default btnsubmit">Submit</button>
                                </div>
								
                            </form>

							
							
                        </div>

                </div>

            </div>

                <div class="col-md-4 wow slideInLeft animated">

                    <div class="gallery">

                        <h3 class="heading">gallery</h3> 
 
		 
		
<div class="col-sm-12"> 					
 <div data-is data-is-access-token="2951254194.f08c3d1.c2053102435141469e64ebbe03377602"  data-is-columns="4"
     data-is-rows="3"></div>				
</div>

                    </div>

                </div>

            </div> 
<input type="hidden" id="homeurl" value="{{ url('/') }}">
        </section>

<?php
$url= basename($_SERVER['REQUEST_URI']);

if($url!='credit-application' and $url!='test-drive-policy'){
?>
<script src="{{ url('quickadmin/js/') }}/jquery.min.js"></script>
<?php } ?>



<script>
$(document).ready(function(){

 
$("#name").val('');
$("#email").val('');
$("#address").val('');
$("#comment").val('');  

    $(".btnsubmit").click(function(){ 
	 
		var homeurl=$("#homeurl").val();
		
		 var name=$("#name").val();
		 var email=$("#email").val();
		 var address=$("#address").val();
		 var comment=$("#comment").val();
		
		
		 $.ajax({
            type: "POST",
            url: homeurl+'/callajax/submitcontact?submit=1',
            data: {name: name,email: email,address:address,comment:comment},
			type: 'get',
            success: function( response ) {
			
				if(response==1){
				
				$("#formid").html('<div class=\"alert alert-success\">Successfully Sent</div>');
				
				}else{
                $("#formid").html('<div class=\"alert alert-danger\">Sending Fail</div>');
				
				}
            }
        });
		
		
		
    });
});
</script>		