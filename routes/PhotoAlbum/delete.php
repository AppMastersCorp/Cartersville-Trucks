<?php 
require 'main.php';
 
 echo cl_image_tag("number-1.jpg.jpg", array("width"=>1400, "height"=>300, "crop"=>"pad")  ); 
 
 
\Cloudinary\Uploader::destroy('ctrucks/number-1.jpg');

	
	?>