<?php

namespace App\Http\Controllers\Traits;
 

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use App\Http\Requests; 
use Input;
use Validator;
use Redirect; 
use Session;

use DB;

use Illuminate\Routing\Controller;

trait FileUploadTrait
{


	public function create_photo( $file_path, $orig_name,$stock_auto )
	{
	 

		# Upload the received image file to Cloudinary
		$result = \Cloudinary\Uploader::upload($file_path, array(
				"tags" => "ctrucks",
				"public_id" => "ctrucks/".$stock_auto."/".$orig_name,
		));

$data = url()->current();
$iid=basename($data);

$iid=(int)$iid;

if($iid==0){
$iid=9999999;
}else{ 
 unlink($file_path);
}		
		

		error_log("Upload result: " . \PhotoAlbum\ret_var_dump($result));
		$photo = \PhotoAlbum\create_photo_model($result);
		
		
		return $result;
	}


    /**
     * File upload trait used in controllers to upload files
     */
  
  public function saveFiles(Request $request)
    {
	
	
require 'PhotoAlbum/main.php';	
$files_data = array();		
	
$data = url()->current();
$iid=basename($data);

$iid=(int)$iid;
 
if($iid==0){
$iid=9999999;
} 
 
 
 
if(isset($request->all()['stock_auto'])){

$stock_auto=$request->all()['stock_auto'];
}else{
$stock_auto='';
} 
 
 
		
        if (!file_exists(public_path('uploads'))) {
            mkdir(public_path('uploads'), 0777);
            mkdir(public_path('uploads/thumb'), 0777);
        }
		
		
		
        foreach ($request->all() as $key => $value) {
		
/*foreach*/		
		
		
		
 	
/*insert*/
/* if($iid==9999999){ */

					if($key=='image_file' and $iid==9999999){
					
					 
					 
if(1==1){
/********************************/
					 
					 
/*strpos*/

 foreach ($value as $file) {

    $rules = array('file' => 'required');  
    $validator = Validator::make(array('file'=> $file), $rules);

    if($validator->passes()) {
 
	$filename = $file->getClientOriginalName(); 
	$filename=time().'-'.$filename; 
 	 
	$returnvalue=$this->create_photo($file->getRealPath(), $filename,$stock_auto);
	array_push($files_data, $returnvalue);	 
 
 
$public_id=$returnvalue['public_id'];
$version=$returnvalue['version'];
$signature=$returnvalue['signature'];
$width=$returnvalue['width'];
$height=$returnvalue['height'];
$format=$returnvalue['format'];
$resource_type=$returnvalue['resource_type'];
$created_at=$returnvalue['created_at'];

$bytes=$returnvalue['bytes'];
$type=$returnvalue['type'];
$etag=$returnvalue['etag'];

$url=$returnvalue['url'];
$secure_url=$returnvalue['secure_url'];
$original_filename=$returnvalue['original_filename'];

if(isset($returnvalue['moderated'])){
 $moderated=$returnvalue['moderated'];
}else{
 $moderated=0;
}
$overwritten='';

DB::insert("INSERT INTO photo_truck (`truck_id`,`public_id`,`version`,`signature`,`width`,`height`,`resource_type`,`created_at`,`bytes`,`type`,`etag`, `url`, `secure_url`, `original_filename`, `moderated`, `overwritten`)
VALUES ('".$iid."','".$public_id."','".$version."','".$signature."','".$width."','".$height."','".$resource_type."','".$created_at."','".$bytes."','".$type."','".$etag."', '".$url."', '".$secure_url."', '".$original_filename."', '".$moderated."', '".$overwritten."')");






   }
					 
}	

	
/*strpos*/					 
					 
					 
					 
/*******************************/					 
					 
}else{					 
/****************************************  image upload  ****************************************/					  
					  
					 if (!file_exists(public_path('truckimage'))) {
								mkdir(public_path('truckimage'), 0777);
								mkdir(public_path('truckimage/thumb'), 0777);
					  }

 			
 foreach ($value as $file) {	
 
    $rules = array('file' => 'required');  
    $validator = Validator::make(array('file'=> $file), $rules);

    if($validator->passes()) {
        
		$filename = $file->getClientOriginalName(); 
	    $filename=time().'-'.$filename; 
		
		

		
/*resize img */		

/*	*/	
$destinationPath = public_path('/truckimage/thumb'); 
$thumb_img = Image::make($file->getRealPath())->resize(177, 110);
$thumb_img->save($destinationPath.'/'.$filename,80);


/*resize img */		
	
$destinationPath = public_path('truckimage'); 
$upload_success = $file->move($destinationPath, $filename);		
	

 DB::table('trucklisting_img')->insert([
    ['imgname' => "$filename", 'truckid' =>$iid,'status'=>1],
]);		
 
        
    }   
 
 
 
 
}
		
		 		  
/****************************************  image upload  ****************************************/

}
 
					
					}
			
//}			
/*insert*/					

	
		
		
            if ($request->hasFile($key)) {
			
			
 			
			
			
                if ($request->has($key . '_w') && $request->has($key . '_h')) {
                    // Check file width
					
					
					
 		
	
					
					
					/*image_file*/
					if($key=='image_file'){
					
					
					 
if (strpos($data, 'cttrucklisting') !== false) {

/*strpos*/

 foreach ($value as $file) {

    $rules = array('file' => 'required');  
    $validator = Validator::make(array('file'=> $file), $rules);

    if($validator->passes()) {
 
	$filename = $file->getClientOriginalName(); 
	$filename=time().'-'.$filename; 


	
	
 
 
 
	$returnvalue=$this->create_photo($file->getRealPath(), $filename,$stock_auto);
 
 
 
$public_id=$returnvalue['public_id'];
$version=$returnvalue['version'];
$signature=$returnvalue['signature'];
$width=$returnvalue['width'];
$height=$returnvalue['height'];
$format=$returnvalue['format'];
$resource_type=$returnvalue['resource_type'];
$created_at=$returnvalue['created_at'];

$bytes=$returnvalue['bytes'];
$type=$returnvalue['type'];
$etag=$returnvalue['etag'];

$url=$returnvalue['url'];
$secure_url=$returnvalue['secure_url'];
$original_filename=$returnvalue['original_filename'];

if(isset($returnvalue['moderated'])){
 $moderated=$returnvalue['moderated'];
}else{
 $moderated=0;
}
$overwritten='';

DB::insert("INSERT INTO photo_truck (`truck_id`,`public_id`,`version`,`signature`,`width`,`height`,`resource_type`,`created_at`,`bytes`,`type`,`etag`, `url`, `secure_url`, `original_filename`, `moderated`, `overwritten`)
VALUES ('".$iid."','".$public_id."','".$version."','".$signature."','".$width."','".$height."','".$resource_type."','".$created_at."','".$bytes."','".$type."','".$etag."', '".$url."', '".$secure_url."', '".$original_filename."', '".$moderated."', '".$overwritten."')");




	array_push($files_data, $returnvalue);

   }
					 
}	

	
/*strpos*/
					 
}else{					 
/****************************************  image upload  ****************************************/					  
					  
					 if (!file_exists(public_path('truckimage'))) {
								mkdir(public_path('truckimage'), 0777);
								mkdir(public_path('truckimage/thumb'), 0777);
					  }

 			
 foreach ($value as $file) {	
 
    $rules = array('file' => 'required');  
    $validator = Validator::make(array('file'=> $file), $rules);

    if($validator->passes()) {
        
		$filename = $file->getClientOriginalName(); 
	    $filename=time().'-'.$filename; 
		
		

		
/*resize img */		

/*	*/	
$destinationPath = public_path('/truckimage/thumb'); 
$thumb_img = Image::make($file->getRealPath())->resize(177, 110);
$thumb_img->save($destinationPath.'/'.$filename,80);


/*resize img */		
	
$destinationPath = public_path('truckimage'); 
$upload_success = $file->move($destinationPath, $filename);		
	

 DB::table('trucklisting_img')->insert([
    ['imgname' => "$filename", 'truckid' =>$iid,'status'=>1],
]);		
 
        
    }   
 
 
 
 
}
		
		 		  
/****************************************  image upload  ****************************************/
}


					/*image_file*/ 
					}else{
					/**************/
				 
					
/************************************************************/

if (strpos($data, 'cttrucklisting') !== false) {


$filename = time() . '-' . $request->file($key)->getClientOriginalName();
$file     = $request->file($key);
 
 
$returnvalue=$this->create_photo($file->getRealPath(), $filename,$stock_auto);

array_push($files_data, $returnvalue);
 	
	
$public_id=$returnvalue['public_id'];	

$version=$returnvalue['version'];	
$signature=$returnvalue['signature'];	

/*if($iid==9999999){ */
 
DB::table('cttrucklisting')
            ->where('id', $iid)
            ->update(['public_id' => ''.$public_id.'', 'version' => ''.$version.'', 'signature' => ''.$signature.'']);
			
/*}*/

 

}else{					
		 	 
					
$filename = time() . '-' . $request->file($key)->getClientOriginalName();
$file     = $request->file($key);
$image    = Image::make($file);
					
					
if (strpos($data, 'cttrucklisting') !== false) {
 
 
  
  Image::make($file)->resize(200, 150)->save(public_path('uploads/thumb') . '/' . $filename);
 
}else{

 Image::make($file)->resize(50, 50)->save(public_path('uploads/thumb') . '/' . $filename);
 
}					
			
			
                    $width  = $image->width();
                    $height = $image->height();
                    if ($width > $request->{$key . '_w'} && $height > $request->{$key . '_h'}) {
                        $image->resize($request->{$key . '_w'}, $request->{$key . '_h'});
                    } elseif ($width > $request->{$key . '_w'}) {
                        $image->resize($request->{$key . '_w'}, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    } elseif ($height > $request->{$key . '_w'}) {
                        $image->resize(null, $request->{$key . '_h'}, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    }
                    $image->save(public_path('uploads') . '/' . $filename);
                    $request = new Request(array_merge($request->all(), [$key => $filename]));
                
				
				
				/*********************/
				}
				
				}
				
				} else {
                    $filename = time() . '-' . $request->file($key)->getClientOriginalName();
                    $request->file($key)->move(public_path('uploads'), $filename);
                    $request = new Request(array_merge($request->all(), [$key => $filename]));
                }
            }
			
/*foreach*/				
			
        }

	 
        return $request;
    }
	
	
	 
	
}