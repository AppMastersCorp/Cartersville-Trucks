<?php
ini_set('display_errors',0);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*
Route::get('/', function () {
    return view('frontend.pages.home');
});
*/

/*
Route::get('/', function()
{
$fetchData = DB::select('select * from users where id = ?', array(1));
echo "<pre>";
print_r($fetchData);
echo "</pre>";

return view('frontend.pages.home',['data'=>$fetchData]);

});
*/ 

/* Route::resource('users', 'UsersController');*/

Route::get('/admin','dashboard@index')
->where(['id' => '[0-9,]+', 'name' =>'[a-z,A-Z,0-9,-]+']);


/************** print content **************/


Route::get('/callajax/printContenttestdrive/{id?}', function($id='0')
{ 

 
$rm = DB::table('testdrive')->where('id', $id)->whereNull('deleted_at')->get();
	
	foreach($rm as $testdrive){

		echo '<div class="table-responsive">
<table class="table table-bordered">
<tr>
<td class="fist-div"> 
Name

</td>
<td> 
<span id="idname">'. $testdrive->name.'</span>
</td>
</tr>

<tr>
<td class="fist-div"> 
Suffix

</td>
<td> 
<span>'. $testdrive->suffix.'</span>
</td>
</tr>


<tr>
<td class="fist-div"> Phone

</td>
<td> 
<span>'. $testdrive->phone.'</span>
</td>
</tr>
 

<tr>
<td class="fist-div">
  Email
</td>
<td> 
 
         
<span>'. $testdrive->email.'</span>
</td>
</tr>

<tr>
<td class="fist-div">
   Address
</td>
<td> 
 
        
<span>'. $testdrive->address.'</span>
</td>
</tr>

<tr>
<td class="fist-div">
  CITY
</td>
<td> 
 
        
        
<span>'. $testdrive->city.'</span>
</td>
</tr>

<tr>
<td class="fist-div">
   State
</td>
<td> 
 
 
        
<span>'. $testdrive->state.'</span>
</td>
</tr>

<tr>
<td class="fist-div">
   ZIPCODE
</td>
<td> 
 
        
        
<span>'. $testdrive->zip.'</span>
</td>
</tr>

<tr>
<td class="fist-div">
   Employment Status
</td>
<td> 
 
 
        
<span>'. $testdrive->employment_status.'</span>
</td>
</tr>

<tr>
<td class="fist-div">
    Company Name
</td>
<td> 
 
 
        
<span>'. $testdrive->company_name.'</span>
</td>
</tr>

<tr>
<td class="fist-div">
 Gross Income
</td>
<td> 
 
 
        
<span>'. $testdrive->gross_income.'</span>
</td>
</tr>

<tr>
<td class="fist-div">
   Driver License Number
</td>
<td> 
 
 
        
<span>'. $testdrive->driver_license_number.'</span>
</td>
</tr>

<tr>
<td class="fist-div">
   Driver License Expiration Date
</td>
<td>  
 
        
<span>'. $testdrive->driver_license_expiration_date.'</span>
</td>
</tr>

<tr>
<td class="fist-div">
 Insurance Carrier
</td>
<td>  
 
        
<span>'. $testdrive->insurance_carrier.'</span>
</td>
</tr>

<tr>
<td class="fist-div">
    Insurance Id Number
</td>
<td>  
        
<span>'. $testdrive->insurance_id_number.'</span>
</td>
</tr>

<tr>
<td class="fist-div">
  Insurance Agent Name
</td>
<td> 
 
 
        
<span>'. $testdrive->insurance_agent_name.'</span>
</td>
</tr>


<tr>
<td class="fist-div">
    Insurance Agent Phone Number
</td>
<td> 
 
 
        
<span>'. $testdrive->insurance_agent_phone_number.'</span>
</td>
</tr>

<tr>
<td class="fist-div">
   Submit Date
</td>
<td> 
 
 
        
<span>'. $testdrive->submit_date.'</span>
</td>
</tr>



</table>
</div>';
	
	
	
		
	}
	
	
})->where(['id' => '[0-9]+']); 	


Route::get('/callajax/printContent/{id?}', function($id='0')
{ 

 
$rm = DB::table('creditapplication')->where('id', $id)->whereNull('deleted_at')->get();
	
 
	
	
	foreach($rm as $creditapplication){


echo ' <div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">Applicant Information</h4> 
		</div>
		<div class="panel-body"> 
  
  
<div class="table-responsive">
   									  
 <table class="table table-bordered">
	
	<tr>
	<td>
	 <label class="">First name:</label> 
	 <span id="idname">'.$creditapplication->appinfo_first_name.'</span>
	</td>
	
	<td>
	<label class="">Middle name:</label> 
	 <span>'.$creditapplication->appinfo_middle_name.'</span>
	</td>

	<td>
	<label class="">Last name:</label> 
	 <span>'.$creditapplication->appinfo_last_name.'</span>
	</td>
	
	</tr>
 
 
	<tr>
	
	<td>
	<label class="">D.O.B:</label> 
	<span>'.$creditapplication->appinfo_last_name.'</span>
	</td>

	<td>
	<label class="">SSN:</label>
	<span>'.$creditapplication->appinfo_last_name.'</span>
	</td>
	
	<td>
	<label class="">Phone:</label>
	 <span>'.$creditapplication->appinfo_last_name.'</span>
	</td> 
	</tr>
	
 
 
    <tr>
	<td colspan="3">
	<label class="">Current address:</label>
	<span>'.$creditapplication->appinfo_last_name.'</span>
	</td>
	</tr>

						
	<tr>
	<td> 
	<label class="">CITY:</label>
	<span>'.$creditapplication->appinfo_city.'</span>  
	</td>
	
	<td> 
	<label class="">STATE:</label>
	<span>'.$creditapplication->appinfo_state.'</span> 
	</td>
	
	<td> 
	<label class="">ZIPCODE:</label>
	<span>'.$creditapplication->appinfo_zipcode.'</span>
 	
	</td>
	</tr>
	 
 	<tr>
	<td colspan="3" class="p0"> 
	
	<table class="table table-bordered">
	<tr><td>
	<label class="">Own/Rent:</label>
	<span>'.$creditapplication->appinfo_own_rent.'</span>	
	</td>
	
	<td>
	<label class="">Monthly payment or rent:</label>
	<span>'.$creditapplication->appinfo_monthly_payment_or_rent.'</span>	
	</td>
	
	<td>
	<label class="">How long?:</label>	
	<span>'.$creditapplication->appinfo_how_long.'</span> 	
	</td>
	</tr>
	</table>
	
	</td>
	
	
 
  </tr>';
 
 
 	 
  
 
if($creditapplication->appinfo_how_long!='More than 24 months'){
 
  
echo '<tr>
<td colspan="3">  
	<label class="">Previous address:</label>
	<span>'.$creditapplication->appinfo_previous_address.'</span>
</td>
</tr>		
		
<tr> 
	<td> 
	<label class="">CITY:</label>
	<span>'.$creditapplication->appinfo_previous_city.'</span> 
	</td>
	
	<td> 
	<label class="">STATE:</label>
	<span>'.$creditapplication->appinfo_previous_state.'</span>
	</td>	
	
	<td> 
	<label class="">ZIPCODE:</label>	
	<span>'.$creditapplication->appinfo_previous_zipcode.'</span>
	</td> 
</tr>


<tr>
	<td>
    <label class="">Own/Rent:</label> 
	<span>'.$creditapplication->appinfo_previous_own_rent.'</span>
	</td>
	
	<td> 	 
	<label class="">Monthly payment or rent:</label>
	<span>'.$creditapplication->appinfo_previous_monthly_payment_or_rent.'</span>
	</td>
</tr>';	
 

  }  
   

echo '';   
   
   
   
  
echo '</table> </div> </div></div>';	
	
	
echo '<div class="panel panel-white">
	<div class="panel-heading clearfix">
	<h4 class="panel-title">Employment Information</h4>
	</div>
	
	<div class="panel-body table-responsive">

		<table class="table table-bordered">
			<tr>
				<td colspan="3"> 
				<label class="">Current Employer:</label>
				<span>'.$creditapplication->emp_current_employer.'</span>
				</td>
			</tr>


			<tr>
				<td colspan="3">
				<label class="">Employer Address:</label>
				<span>'.$creditapplication->emp_employer_address.'</span>
				</td>
			</tr>		


			<tr>	
			<td colspan="3"> 
			  
			<label class="">Phone:</label>
			<span>'.$creditapplication->emp_phone.'</span>

			</td>  
			</tr>


			<tr>

				<td> 
				<label class="">CITY:</label>
				<span>'.$creditapplication->emp_city.'</span>

				</td>

				<td> 
				<label class="">STATE:</label>
				<span>'.$creditapplication->emp_state.'</span>
				</td>	

				<td> 
				<label class="">ZIPCODE:</label>
				<span>'.$creditapplication->emp_zipcode.'</span>	
				</td>


			</tr>';

		echo '<tr>

				<td> 
				<label class="">Position:</label>
				<span>'.$creditapplication->emp_position.'</span>	
				</td>

				<td>  
				<label class="">Hourly/Salary:</label> 
				<span>'.$creditapplication->emp_hourly_salary.'</span>';

				if($creditapplication->emp_hourly_salary=="Hourly"){  
				 echo '<span>( '.$creditapplication->emp_hourly_value.' / Hour )</span>';
				} 
				echo '</td>	 

				<td> 
				<label class="">How Long?</label>	
				<span>'.$creditapplication->emp_how_long.'</span>
				</td> 
			</tr>';



			if($creditapplication->emp_how_long!='More than 24 months'){

			echo '<tr>
			<td colspan="3"> 
			<label class="">Previous address:</label>
			<span>'.$creditapplication->emp_previous_address.'</span>
			</td>
			</tr>

			<tr>
			<td> 
			<label class="">Phone:</label>
			<span>'.$creditapplication->emp_previous_phone.'</span>
			</td>

			<td> 
			<label class="">E-mail:</label>
			<span>'.$creditapplication->emp_previous_e_mail.'</span>
			</td>	

			<td> 
			<label class="">Fax:</label>
			<span>'.$creditapplication->emp_previous_fax.'</span>
			</td>	
			</tr>

			<tr> 
			<td> 
			<label class="">CITY:</label>
			<span>'.$creditapplication->emp_previous_city.'</span>
			</td>

			<td> 
			<label class="">STATE:</label>
			<span>'.$creditapplication->emp_previous_state.'</span>
			</td>	

			<td> 
			<label class="">ZIPCODE:</label>	
			<span>'.$creditapplication->emp_previous_zipcode.'</span>
			</td> 
			</tr>


			<tr>
			<td colspan="3" class="p0">
				<table class="table table-bordered">
					<tr>
					<td>
					<label class="">Position:</label> 
					<span>'.$creditapplication->emp_previous_position.'</span>
					</td>

					<td>  
					<label class="">Previous Hourly Salary:</label>
					<span>'.$creditapplication->emp_previous_hourly_salary.'</span>';
					
					if($creditapplication->emp_previous_hourly_salary=="Hourly"){  
					echo '<span>( '.$creditapplication->emp_previous_hourly_value_main.' /hour )</span>';
					}  
					echo '</td>';

					echo '<td>	
					<label class="">Annual Income:</label> 	
					<span>'.$creditapplication->emp_previous_annual_income.'</span>
					</td>  
					</tr>
				</table>
			</td>
			
			</tr>';  
			}    
		
echo '</table>	
	</div>		
</div>';	
	
	
	
echo '<div class="panel panel-white">
	<div class="panel-heading clearfix">
	<h4 class="panel-title">Co-Signer Information</h4>
	</div>
	<div class="panel-body table-responsive">
	 

	<table class="table table-bordered">
	<tr> 
		<td colspan="3">
		<label class="">Will there be a Co-Signer For this Application? </label> 
		<span>'.$creditapplication->cosigner_status_co_app.'</span> 
		</td>
	</tr>';	
	
 if($creditapplication->cosigner_status_co_app=="on"){  
	 
 echo '<tr>
	
	<td>
	<label class="">First name</label> 
	<span>'.$creditapplication->cosigner_first_name.'</span>
	</td>
	
	<td>
	<label class="">Middle name</label> 
	<span>'.$creditapplication->cosigner_middle_name.'</span>
	</td>

	<td>
	<label class="">Last name</label> 
	<span>'.$creditapplication->cosigner_last_name.'</span>
	</td>	
	
	</tr>	
 

								
	<tr> 
		<td>
		<label class="">D.O.B</label> 
		<span>'.$creditapplication->cosigner_dob.'</span>
		</td>

		<td>
		<label class="">SSN</label>
		<span>'.$creditapplication->cosigner_ssn.'</span>
		</td>
		
		<td>
		<label class="">Phone</label>
		<span>'.$creditapplication->cosigner_phone.'</span>
		</td>
		
	</tr>

	<tr>
		
		<td colspan="3">
		<label class="">Current address</label>
		<span>'.$creditapplication->cosigner_curraddress.'</span>
		</td>
	</tr>	


							
	<tr>
		
		<td> 
		<label class="">CITY</label>
		<span>'.$creditapplication->cosigner_city.'</span>
		</td>
		
		<td> 
		<label class="">STATE</label>
		<span>'.$creditapplication->cosigner_state.'</span>
		</td>
		
		<td> 
		<label class="">ZIPCODE</label>
		<span>'.$creditapplication->cosigner_zipcode.'</span>	
		</td>
		
		
	</tr>

					
	<tr> 
		<td> 
		<label class="">Own/Rent:</label>
		<span>'.$creditapplication->cosigner_own_rent.'</span>
		</td>
		
		<td> 
		<label class="">Monthly Payment or Rent</label>
		<span>'.$creditapplication->cosigner_monthly_payment_or_rent.'</span>
		</td>
		
		<td> 
		<label class="">How Long?</label>
		<span>'.$creditapplication->cosigner_how_long.'</span>	
		</td>
	</tr>';


 
if($creditapplication->cosigner_how_long!='More than 24 months'){
 
  
	echo '<tr>
	<tr colspan="3"> 
		<label class="">Previous address:</label>
		<span>'.$creditapplication->cosigner_previous_address.'</span>
	</td>
	</tr>       

	    				
<tr>
	
	<td> 
	<label class="">CITY:</label>
	<span>'.$creditapplication->cosigner_previous_city.'</span>
	
	</td>
	
	<td> 
	<label class="">STATE:</label>
	<span>'.$creditapplication->cosigner_previous_state.'</span>
	</td>
	
	<td> 
	<label class="">ZIPCODE:</label>	
	<span>'.$creditapplication->cosigner_previous_zipcode.'</span>
	</td>
	
	
</tr>


 <tr>
 <td>
	
	<table class="table table-bordered p0">
		<tr>
			<td> 
			<label class="">Own/Rent:</label> 
			<span>'.$creditapplication->cosigner_previous_own_rent.'</span>
			</td>
			
			<td>
			<label class="">Monthly Payment or Rent:</label>
			<span>'.$creditapplication->cosigner_previous_monthly_payment_or_rent.'</span> 
			</td>
		</tr>
	</table>
	
 </td>
</tr></table>';

  }  
	
	
	echo '<br>
	<br>	
<div class="panel panel-white">
	<div class="panel-heading clearfix">
	<h4 class="panel-title">Co-Signer Employment Information</h4>
	</div>
	<div class="panel-body table-responsive">
	 

	<table class="table table-bordered">
 

<tr> 
	<td>
	<label class="">Current address:</label>
	<span>'.$creditapplication->coemp_current_employer.'</span>
	</td>
</tr>	

<tr>
	<td>
	<label class="">Employer Address:</label>
	<span>'.$creditapplication->coemp_employer_address.'</span>
	</td>
</tr>
	
	
<tr>
	
	<td colspan="3"> 
	<label class="">Phone</label>
	<span>'.$creditapplication->coemp_phone.'</span>
	</td>
	 
	
</tr>
 	
	
<tr>
	
	<td> 
	<label class="">CITY:</label>
	<span>'.$creditapplication->coemp_city.'</span>
	
	</td>
	
	<td> 
	<label class="">STATE:</label>
	<span>'.$creditapplication->coemp_state.'</span>
	</td>
	
	<td> 
	<label class="">ZIPCODE:</label>	
	<span>'.$creditapplication->coemp_zipcode.'</span>
	</td>
	
</tr>	

<tr>
	
	<td> 
	<label class="">Position:</label>
	<span>'.$creditapplication->coemp_position.'</span>	
	</td>
	
	<td> 
   
     <label class="">Hourly/Salary:</label> 
	  <span>'.$creditapplication->coemp_hourly_salary.'</span>
 
	 if($creditapplication->coemp_hourly_salary=="Hourly"){  
	 <span>( '.$creditapplication->coemp_hourly_value.' / Hour )</span>
	  } 
	</td>
	
	<td> 
	<label class="">How Long?</label>	
	<span>'.$creditapplication->coemp_how_long.'</span>
	</td>
	
</tr>  ';


 
if($creditapplication->coemp_how_long!='More than 24 months'){
 
  echo '
<tr>
<td>
	<label class="">Previous address:</label>
	<span>'.$creditapplication->coemp_previous_address.'</span>
</td>
</tr>       

	   
<tr>
	
	<td> 
	<label class="">Phone:</label>
	<span>'.$creditapplication->coemp_previous_phone.'</span>
	
	</td>
	
	<td> 
	<label class="">E-mail:</label>
	<span>'.$creditapplication->coemp_previous_e_mail.'</span>
	</td>
	
	<td> 
	<label class="">Fax:</label>
	<span>'.$creditapplication->coemp_previous_fax.'</span>
	</td>
</tr>	
						
<tr>
	
	<td> 
	<label class="">CITY:</label>
	<span>'.$creditapplication->coemp_previous_city.'</span> 
	</td>
	
	<td> 
	<label class="">STATE:</label>
	<span>'.$creditapplication->coemp_previous_state.'</span>
	</td>	
	
	<td> 
	<label class="">ZIPCODE:</label>	
	<span>'.$creditapplication->coemp_previous_zipcode.'</span>
	</td>
</tr>

<tr>
<td>
	<table class="table table-bordered p0">	
		
		<tr>
		<td>	  
		<label class="">Position:</label> 
		<span>'.$creditapplication->coemp_previous_position.'</span>
		</td>
		
		<td> 	  
		
		<label class="">Previous Hourly Salary:</label>
		<span>'.$creditapplication->coemp_previous_hourly_salary.'</span>';
			
			if($creditapplication->coemp_previous_hourly_salary=="Hourly"){  
		 echo ' <span>( '.$creditapplication->coemp_previous_hourly_value.' /hour )</span>';
		   }  
		echo '</td>
		
		<td>	
		<label class="">Annual Income:</label> 	
		<span>'.$creditapplication->coemp_previous_annual_income.'</span>
		</tr>
	</table>	
 </td>
</tr>';

  }  
	
	
  } 

echo '</table>  
</div>
</div>	';	
	
	
	
	
echo '	<div class="panel panel-white">
	<div class="panel-heading clearfix">
	<h4 class="panel-title">Co-Applicant Info</h4>
	</div>
	<div class="panel-body table-responsive">
 

	<table class="table table-bordered">
	<tr> 
		<td colspan="3">
			<label class="">Will there be a Co-Applicant For this Application? </label> 
			<span>'.$creditapplication->coapplicant_status_co_app.'</span>
			</td> 
	</tr>';	
	
if($creditapplication->coapplicant_status_co_app=="On"){


echo '
<tr>
	
	<td>
	 <label class="">First name:</label> 
	 <span>'.$creditapplication->coapplicant_first_name.'</span>
	</td>
	
	<td>
	<label class="">Middle name:</label> 
	 <span>'.$creditapplication->coapplicant_middle_name.'</span>
	</td>

	<td>
	<label class="">Last name:</label> 
	 <span>'.$creditapplication->coapplicant_last_name.'</span>
	</td>
	
</tr>
               
                                
                                
<tr>
	
	<td>
	<label class="">D.O.B:</label> 
	<span>'.$creditapplication->coapplicant_dob.'</span>
	</td>

	<td>
	<label class="">SSN:</label>
	<span>'.$creditapplication->coapplicant_ssn.'</span>
	</td>
	
	<td>
	<label class="">Phone:</label>
	 <span>'.$creditapplication->coapplicant_phone.'</span>
	</td>
	
</tr>

<tr>
<td class="p0">

	<table class="table table-bordered ">
	<tr>
		<td	
		<label class="">Current address:</label>
		<span>'.$creditapplication->coapplicant_curraddress.'</span>
		</td>
		
		<td>	
		<label class="">Current address:</label>
		<span>'.$creditapplication->coapplicant_e_mail.'</span>
		</td>	
	</tr>

	</table>
</td>	
</tr>
         

<tr> 
	<td> 
	<label class="">CITY:</label>
	<span>'.$creditapplication->coapplicant_city.'</span>  
	</td>
	
	<td> 
	<label class="">STATE:</label>
	<span>'.$creditapplication->coapplicant_state.'</span> 
	</td>	
	
	<td> 
	<label class="">ZIPCODE:</label>
	<span>'.$creditapplication->coapplicant_zipcode.'</span>
 	
	</td>
	
</tr>
 
<tr>
<td>
<table class="table table-bordered p0">
<tr>
 	
	
	<td>
	<label class="">Own/Rent:</label>
	<span>'.$creditapplication->coapplicant_own_rent.'</span>	
	</td>
	
	<td>	  
	
	<label class="">Monthly payment or rent:</label>
	<span>'.$creditapplication->coapplicant_monthly_payment_or_rent.'</span>	 
	</td>
	
	<td> 
	<label class="">How long?:</label>	
	<span>'.$creditapplication->coapplicant_how_long.'</span> 
	</td>
</tr>
</table>	
	
 
 </td>
</tr>	 ';
  
 
if($creditapplication->coapplicant_how_long!='More than 24 months'){
 
  echo '
<tr>
<td colspan="3"> 
	<label class="">Previous address:</label>
	<span>'.$creditapplication->coapplicant_previous_address.'</span>
</td>
</tr>        

						
<tr> 
	<td> 
	<label class="">CITY:</label>
	<span>'.$creditapplication->coapplicant_previous_city.'</span>
	
	</td>
	
	<td> 
	<label class="">STATE:</label>
	<span>'.$creditapplication->coapplicant_previous_state.'</span>
	</td>	
	
	<td> 
	<label class="">ZIPCODE:</label>	
	<span>'.$creditapplication->coapplicant_previous_zipcode.'</span>
	</td>
	
</tr>


<tr>
<td>
<table class="table table-bordered p0">	
	
	
	<td> 	  
    <label class="">Own/Rent:</label> 
	<span>'.$creditapplication->coapplicant_previous_own_rent.'</span>
	</td>
	
	<td> 
	<label class="">Monthly payment or rent:</label>
	<span>'.$creditapplication->coapplicant_previous_own_rent_opt.'</span>
	
	</td>
	
</table>	
</td>	
</tr>';

 } 




 }  
echo '
</table> 
 
	</div>
	</div>';	
	
	
	
echo '
<div class="panel panel-white">
		<div class="panel-heading clearfix">
			<h4 class="panel-title">References</h4>
		</div>
		<div class="panel-body  table-responsive">
<table class="table table-bordered">
<tr>
	<td> 
		<label class="">Name:</label>
		<span>'.$creditapplication->ref_name.'</span>
	</td>
	
	<td> 
	<label class="">Address:</label>
	<span>'.$creditapplication->ref_address.'</span>
	</td>	
	
	<td> 
	<label class="">Phone:</label>
	<span>'.$creditapplication->ref_phone.'</span>
	</td>
	
</tr>';

 
 if($creditapplication->ref2_name){
 
 echo '
<tr>
	<td> 
		<label class="">Name:</label>
		<span>'.$creditapplication->ref2_name.'</span>
	</td>
	
	<td> 
	<label class="">Address:</label>
	<span>'.$creditapplication->ref2_address.'</span>
	</td>	
	
	<td> 
	<label class="">Phone:</label>
	<span>'.$creditapplication->ref2_phone.'</span>
	</td>
	
	
</tr>';
  }  

 
 
 if($creditapplication->ref3_name){
 
 echo  '
<tr>
	<td> 
		<label class="">Name:</label>
		<span>'.$creditapplication->ref3_name.'</span>
	</td>
	
	<td> 
	<label class="">Address:</label>
	<span>'.$creditapplication->ref3_address.'</span>
	</td>	
	
	<td> 
	<label class="">Phone:</label>
	<span>'.$creditapplication->ref3_phone.'</span>
	</td>
	
</tr>';
  }  
									 
echo '									 
</table>									                                	
	 
 
 
<br>
<br>



</div>
</div>';	
	
	
	
	
	}

	
})->where(['id' => '[0-9]+']); 


/************** print content **************/


Route::get('/callajax/remimg/{id?}', function($id='0')
{



$rm=DB::table('trucklisting_img')->where('id', $id)->delete();

echo $id;
	
})->where(['id' => '[0-9]+']); 


/*remimg_cloud*/

Route::get('/callajax/remimg_cloud/{id?}', function($id='0')
{
 require 'PhotoAlbum/main.php';

 $fetchData = DB::select('select * from photo_truck where id ="'.$id.'" ');
 
 
 
 $rm=DB::table('photo_truck')->where('id', $id)->delete();


  \Cloudinary\Uploader::destroy(''.$fetchData[0]->public_id.''); 

echo trim($id);
die();	
})->where(['id' => '[0-9]+']); 

/*remimg_cloud*/



/*rem main img*/

Route::get('/callajax/remimg_main/{id?}', function($id='0')
{

$resp=DB::table('cttrucklisting')
            ->where('id', $id)
            ->update(['image' => '']); 
/* $rm=DB::table('trucklisting_img')->where('id', $id)->delete();*/



echo $id;
	
})->where(['id' => '[0-9]+']); 

/*rem main img*/


Route::get('/callajax/remimg_main_cloud/{id?}', function($id='0')
{

 require 'PhotoAlbum/main.php';
$fetchData = DB::select('select * from cttrucklisting where id ="'.$id.'" ');

$resp=DB::table('cttrucklisting')
            ->where('id', $id)
            ->update(['image' => '']);
			
			
$resp=DB::table('cttrucklisting')
            ->where('id', $id)
            ->update(['public_id' => '']);	

$resp=DB::table('cttrucklisting')
            ->where('id', $id)
            ->update(['signature' => '']);

$resp=DB::table('cttrucklisting')
            ->where('id', $id)
            ->update(['version' => '']);			
	 		
			 
			
/* $rm=DB::table('trucklisting_img')->where('id', $id)->delete();*/ 

\Cloudinary\Uploader::destroy(''.$fetchData[0]->public_id.'');  


echo $id;
	
})->where(['id' => '[0-9]+']); 


Route::get('/callajax/changestatus/', function($id='0')
{
 
$id=$_REQUEST['id'];
$status=$_REQUEST['status'];

if($_REQUEST['id']){
 
$resp=DB::table('cttrucklisting')
            ->where('id', $id)
            ->update(['status' => ''.$status.'']); 


if($resp){ echo $status;  }else{ 0; }			
			
			
}	
	
die();	
});



Route::get('/callajax/changesold/', function($id='0')
{
 
$id=$_REQUEST['id'];
$status=$_REQUEST['status'];

if($_REQUEST['id']){
 
$resp=DB::table('cttrucklisting')
            ->where('id', $id)
            ->update(['soldstatus' => ''.$status.'']); 


if($resp){ echo $status;  }else{ 0; }			
			
			
}	
	
die();	
});



Route::get('/callajax/get-inventory-filter', function($id='0')
{


 
 $filter=$_REQUEST['filter'];
 if($filter){
   
   if($filter=="fuel-type"){
    
	$datas = DB::table('ctfueltype')->whereNull('deleted_at')->get();
	
 
//print json_encode($datas);
	
	
   }
 
 
 
 } 
 
 /*
 echo "<pre>";
  print_r($_REQUEST);
 echo "</pre>";  
 */
});


Route::get('/callajax/submitcreditform', function($id='0')
{ 

 

if($_REQUEST['submit']!='' and $_REQUEST['appinfo_first_name']!=''  and $_REQUEST['appinfo_last_name']!='' and $_REQUEST['appinfo_dob']!='' and $_REQUEST['appinfo_ssn']!='' ){
 
if(!isset($_REQUEST['appinfo_first_name'])){  
   $_REQUEST['appinfo_first_name'] ='';                     
} 



if(!isset($_REQUEST['appinfo_middle_name'])){
$_REQUEST['appinfo_middle_name']  ='';
} 

if(!isset($_REQUEST['appinfo_last_name'])){
 $_REQUEST['appinfo_last_name'] ='';
 }
 
if(!isset($_REQUEST['appinfo_dob'])){
	$_REQUEST['appinfo_dob'] ='';
} 

if(!isset($_REQUEST['appinfo_ssn'])){
$_REQUEST['appinfo_ssn'] ='';
} 

if(!isset($_REQUEST['appinfo_phone'])){ 
$_REQUEST['appinfo_phone'] ='';
} 

if(!isset($_REQUEST['appinfo_curraddress'])){ 
$_REQUEST['appinfo_curraddress'] ='';
} 

if(!isset($_REQUEST['appinfo_city'])){ 
$_REQUEST['appinfo_city'] ='';
} 

if(!isset($_REQUEST['appinfo_state'])){ 
$_REQUEST['appinfo_state'] ='';
} 

if(!isset($_REQUEST['appinfo_zipcode'])){ 
$_REQUEST['appinfo_zipcode'] ='';
} 

if(!isset($_REQUEST['appinfo_own_rent'])){ 
$_REQUEST['appinfo_own_rent'] ='';
} 

if(!isset($_REQUEST['appinfo_monthly_payment_or_rent'])){ 
$_REQUEST['appinfo_monthly_payment_or_rent'] ='';
} 

if(!isset($_REQUEST['appinfo_how_long'])){ 
$_REQUEST['appinfo_how_long'] ='';
} 

if(!isset($_REQUEST['appinfo_previous_address'])){ 
$_REQUEST['appinfo_previous_address'] ='';
} 

if(!isset($_REQUEST['appinfo_previous_city'])){
$_REQUEST['appinfo_previous_city'] ='';
 } 

if(!isset($_REQUEST['appinfo_previous_state'])){
$_REQUEST['appinfo_previous_state'] ='';
 } 

if(!isset($_REQUEST['appinfo_previous_zipcode'])){
$_REQUEST['appinfo_previous_zipcode'] ='';
 } 

if(!isset($_REQUEST['appinfo_previous_own_rent'])){ 
$_REQUEST['appinfo_previous_own_rent'] ='';
} 

if(!isset($_REQUEST['appinfo_previous_monthly_payment_or_rent'])){ 
$_REQUEST['appinfo_previous_monthly_payment_or_rent'] ='';
} 

if(!isset($_REQUEST['emp_current_employer'])){ 
$_REQUEST['emp_current_employer'] ='';
} 

if(!isset($_REQUEST['emp_employer_address'])){
$_REQUEST['emp_employer_address'] ='';
 } 

if(!isset($_REQUEST['emp_phone'])){ 
$_REQUEST['emp_phone'] ='';
} 

if(!isset($_REQUEST['cosigner_e_mail'])){ 
$_REQUEST['cosigner_e_mail'] ='';
} 

if(!isset($_REQUEST['emp_fax'])){ 
$_REQUEST['emp_fax'] ='';
} 

if(!isset($_REQUEST['emp_city'])){
$_REQUEST['emp_city'] ='';
 } 

if(!isset($_REQUEST['emp_state'])){ 
$_REQUEST['emp_state'] ='';
} 

if(!isset($_REQUEST['emp_zipcode'])){ 
$_REQUEST['emp_zipcode'] ='';
} 

if(!isset($_REQUEST['emp_position'])){ 
$_REQUEST['emp_position'] ='';
} 

if(!isset($_REQUEST['emp_hourly_salary'])){ 
$_REQUEST['emp_hourly_salary'] ='';
} 

if(!isset($_REQUEST['emp_hourly_value'])){ 
$_REQUEST['emp_hourly_value'] ='';
} 

if(!isset($_REQUEST['emp_how_long'])){
$_REQUEST['emp_how_long'] ='';
 } 

if(!isset($_REQUEST['emp_previous_address'])){
$_REQUEST['emp_previous_address'] ='';
 } 

if(!isset($_REQUEST['emp_previous_phone'])){ 
$_REQUEST['emp_previous_phone'] ='';
} 

if(!isset($_REQUEST['emp_previous_e_mail'])){ 
$_REQUEST['emp_previous_e_mail'] ='';
} 

if(!isset($_REQUEST['emp_previous_fax'])){ 
$_REQUEST['emp_previous_fax'] ='';
} 

if(!isset($_REQUEST['emp_previous_city'])){ 
$_REQUEST['emp_previous_city'] ='';
} 

if(!isset($_REQUEST['emp_previous_state'])){
$_REQUEST['emp_previous_state'] ='';
 } 

if(!isset($_REQUEST['emp_previous_zipcode'])){ 
$_REQUEST['emp_previous_zipcode'] ='';
} 

if(!isset($_REQUEST['emp_previous_position'])){
$_REQUEST['emp_previous_position'] ='';
 } 

if(!isset($_REQUEST['emp_previous_hourly_salary'])){
$_REQUEST['emp_previous_hourly_salary'] ='';
 } 

if(!isset($_REQUEST['emp_previous_hourly_value_main'])){ 
$_REQUEST['emp_previous_hourly_value_main'] ='';
} 

if(!isset($_REQUEST['emp_previous_annual_income'])){
$_REQUEST['emp_previous_annual_income'] ='';
 } 
 

if(!isset($_REQUEST['cosigner_status_co_app'])){ 
$_REQUEST['cosigner_status_co_app'] ='';
} 

if(!isset($_REQUEST['cosigner_first_name'])){
$_REQUEST['cosigner_first_name'] ='';
 } 

if(!isset($_REQUEST['cosigner_middle_name'])){
$_REQUEST['cosigner_middle_name'] ='';
 } 

if(!isset($_REQUEST['cosigner_last_name'])){ 
$_REQUEST['cosigner_last_name'] ='';
} 

if(!isset($_REQUEST['cosigner_dob'])){ 
$_REQUEST['cosigner_dob'] ='';
} 

if(!isset($_REQUEST['cosigner_ssn'])){ 
$_REQUEST['cosigner_ssn'] ='';
} 

if(!isset($_REQUEST['cosigner_phone'])){ 
$_REQUEST['cosigner_phone'] ='';
} 

if(!isset($_REQUEST['cosigner_curraddress'])){
$_REQUEST['cosigner_curraddress'] ='';
 } 

if(!isset($_REQUEST['cosigner_city'])){ 
$_REQUEST['cosigner_city'] ='';
} 

if(!isset($_REQUEST['cosigner_state'])){
$_REQUEST['cosigner_state'] ='';
 } 

if(!isset($_REQUEST['cosigner_zipcode'])){ 
$_REQUEST['cosigner_zipcode'] ='';
} 

if(!isset($_REQUEST['cosigner_own_rent'])){ 
$_REQUEST['cosigner_own_rent'] ='';
} 	

if(!isset($_REQUEST['cosigner_monthly_payment_or_rent'])){ 
$_REQUEST['cosigner_monthly_payment_or_rent'] ='';
} 

if(!isset($_REQUEST['cosigner_how_long'])){ 
$_REQUEST['cosigner_how_long'] ='';
} 

if(!isset($_REQUEST['cosigner_previous_address'])){ 
$_REQUEST['cosigner_previous_address'] ='';
} 

if(!isset($_REQUEST['cosigner_previous_city'])){
$_REQUEST['cosigner_previous_city'] ='';
 } 

if(!isset($_REQUEST['cosigner_previous_state'])){ 
$_REQUEST['cosigner_previous_state'] ='';
} 

if(!isset($_REQUEST['cosigner_previous_zipcode'])){ 
$_REQUEST['cosigner_previous_zipcode'] ='';
} 	

if(!isset($_REQUEST['cosigner_previous_own_rent'])){
$_REQUEST['cosigner_previous_own_rent'] ='';
 } 	

if(!isset($_REQUEST['cosigner_previous_monthly_payment_or_rent'])){ 
$_REQUEST['cosigner_previous_monthly_payment_or_rent'] ='';
} 

if(!isset($_REQUEST['coemp_current_employer'])){ 
$_REQUEST['coemp_current_employer'] ='';
} 

if(!isset($_REQUEST['coemp_employer_address'])){ 
$_REQUEST['coemp_employer_address'] ='';
} 

if(!isset($_REQUEST['coemp_phone'])){ 
$_REQUEST['coemp_phone'] ='';
} 

if(!isset($_REQUEST['appinfo_e_mail'])){ 
$_REQUEST['appinfo_e_mail'] ='';
} 

if(!isset($_REQUEST['coapplicant_e_mail'])){ 
$_REQUEST['coapplicant_e_mail'] ='';
} 





if(!isset($_REQUEST['coemp_fax'])){
$_REQUEST['coemp_fax'] ='';
 } 

if(!isset($_REQUEST['coemp_city'])){
$_REQUEST['coemp_city'] ='';
 } 

if(!isset($_REQUEST['coemp_state'])){ 
$_REQUEST['coemp_state'] ='';
} 

if(!isset($_REQUEST['coemp_zipcode'])){ 
$_REQUEST['coemp_zipcode'] ='';
} 

if(!isset($_REQUEST['coemp_position'])){
$_REQUEST['coemp_position'] ='';
 } 

if(!isset($_REQUEST['coemp_hourly_salary'])){ 
$_REQUEST['coemp_hourly_salary'] ='';
} 	

if(!isset($_REQUEST['coemp_hourly_value'])){
$_REQUEST['coemp_hourly_value'] ='';
} 

if(!isset($_REQUEST['coemp_how_long'])){
$_REQUEST['coemp_how_long'] ='';
} 

if(!isset($_REQUEST['coemp_previous_address'])){ 
$_REQUEST['coemp_previous_address'] ='';
} 

if(!isset($_REQUEST['coemp_previous_phone'])){
$_REQUEST['coemp_previous_phone'] ='';
} 

if(!isset($_REQUEST['coemp_previous_e_mail'])){
$_REQUEST['coemp_previous_e_mail'] ='';
} 

if(!isset($_REQUEST['coemp_previous_fax'])){
$_REQUEST['coemp_previous_fax'] ='';
} 

if(!isset($_REQUEST['coemp_previous_city'])){ 
$_REQUEST['coemp_previous_city'] ='';
 } 

if(!isset($_REQUEST['coemp_previous_state'])){
$_REQUEST['coemp_previous_state'] ='';
} 

if(!isset($_REQUEST['coemp_previous_zipcode'])){
$_REQUEST['coemp_previous_zipcode'] ='';
} 

if(!isset($_REQUEST['coemp_previous_position'])){
$_REQUEST['coemp_previous_position'] ='';
} 	

if(!isset($_REQUEST['coemp_previous_hourly_salary'])){
$_REQUEST['coemp_previous_hourly_salary'] ='';
} 

if(!isset($_REQUEST['coemp_previous_hourly_value'])){
$_REQUEST['coemp_previous_hourly_value'] ='';
} 

if(!isset($_REQUEST['coemp_previous_annual_income'])){
$_REQUEST['coemp_previous_annual_income'] ='';
 } 

if(!isset($_REQUEST['cosigner_status_co_app_agree'])){ 
$_REQUEST['cosigner_status_co_app_agree'] ='';
} 
	

if(!isset($_REQUEST['coapplicant_status_co_app'])){ 
$_REQUEST['coapplicant_status_co_app'] ='';
} 
if(!isset($_REQUEST['coapplicant_first_name'])){ 
$_REQUEST['coapplicant_first_name'] ='';
} 
if(!isset($_REQUEST['coapplicant_middle_name'])){ 
$_REQUEST['coapplicant_middle_name'] ='';
} 
if(!isset($_REQUEST['coapplicant_last_name'])){
$_REQUEST['coapplicant_last_name'] ='';
 } 
if(!isset($_REQUEST['coapplicant_dob'])){ 
$_REQUEST['coapplicant_dob'] ='';
} 
if(!isset($_REQUEST['coapplicant_ssn'])){ 
$_REQUEST['coapplicant_ssn'] ='';
} 
if(!isset($_REQUEST['coapplicant_phone'])){
$_REQUEST['coapplicant_phone'] ='';
 } 
if(!isset($_REQUEST['coapplicant_curraddress'])){ 
$_REQUEST['coapplicant_curraddress'] ='';
} 
if(!isset($_REQUEST['coapplicant_city'])){ 
$_REQUEST['coapplicant_city'] ='';
} 
if(!isset($_REQUEST['coapplicant_state'])){ 
$_REQUEST['coapplicant_state'] ='';
} 
if(!isset($_REQUEST['coapplicant_zipcode'])){
$_REQUEST['coapplicant_zipcode'] ='';
 } 	
if(!isset($_REQUEST['coapplicant_own_rent'])){ 
$_REQUEST['coapplicant_own_rent'] ='';
} 
if(!isset($_REQUEST['coapplicant_monthly_payment_or_rent'])){ 
$_REQUEST['coapplicant_monthly_payment_or_rent'] ='';
} 
if(!isset($_REQUEST['coapplicant_how_long'])){ 
$_REQUEST['coapplicant_how_long'] ='';
} 
if(!isset($_REQUEST['coapplicant_previous_address'])){
$_REQUEST['coapplicant_previous_address'] =''; 
} 
if(!isset($_REQUEST['coapplicant_previous_city'])){ 
$_REQUEST['coapplicant_previous_city'] ='';
} 
if(!isset($_REQUEST['coapplicant_previous_state'])){ 
$_REQUEST['coapplicant_previous_state'] ='';
} 
if(!isset($_REQUEST['coapplicant_previous_zipcode'])){
$_REQUEST['coapplicant_previous_zipcode'] ='';
 } 
if(!isset($_REQUEST['coapplicant_previous_own_rent'])){ 
$_REQUEST['coapplicant_previous_own_rent'] ='';
} 
if(!isset($_REQUEST['coapplicant_previous_monthly_payment_or_rent'])){ 
$_REQUEST['coapplicant_previous_monthly_payment_or_rent'] ='';
} 
if(!isset($_REQUEST['coapplicant_status_co_app_agree'])){ 
$_REQUEST['coapplicant_status_co_app_agree'] ='';
} 
		 
 if(!isset($_REQUEST['ref_name'])){ 
$_REQUEST['ref_name'] ='';
} 
if(!isset($_REQUEST['ref_address'])){ 
$_REQUEST['ref_address'] ='';
} 
if(!isset($_REQUEST['ref_phone'])){
$_REQUEST['ref_phone'] ='';
 } 

if(!isset($_REQUEST['ref2_name'])){ 
$_REQUEST['ref2_name'] ='';
} 
if(!isset($_REQUEST['ref2_address'])){ 
$_REQUEST['ref2_address'] ='';
} 
if(!isset($_REQUEST['ref2_phone'])){
$_REQUEST['ref2_phone'] ='';
 } 

if(!isset($_REQUEST['ref3_name'])){ 
$_REQUEST['ref3_name'] ='';
} 
if(!isset($_REQUEST['ref3_address'])){
$_REQUEST['ref3_address'] ='';
 } 
 
if(!isset($_REQUEST['ref3_phone'])){ 
$_REQUEST['ref3_phone'] ='';
} 

 
 
$affected = DB::insert("INSERT INTO creditapplication (
`appinfo_first_name`,
`appinfo_middle_name`,
`appinfo_last_name`,
`appinfo_dob`,
`appinfo_ssn`,
`appinfo_phone`,
`appinfo_curraddress`,
`appinfo_city`,
`appinfo_state`,
`appinfo_zipcode`,
`appinfo_own_rent`,
`appinfo_monthly_payment_or_rent`,
`appinfo_how_long`,
`appinfo_previous_address`,
`appinfo_previous_city`,
`appinfo_previous_state`,
`appinfo_previous_zipcode`,
`appinfo_previous_own_rent`,
`appinfo_previous_monthly_payment_or_rent`,

`emp_current_employer`,
`emp_employer_address`,
`emp_phone`,
`cosigner_e_mail`,
`emp_fax`,
`emp_city`,
`emp_state`,
`emp_zipcode`,
`emp_position`,
`emp_hourly_salary`,
`emp_hourly_value`,
`emp_how_long`,
`emp_previous_address`,
`emp_previous_phone`,
`emp_previous_e_mail`,
`emp_previous_fax`,
`emp_previous_city`,
`emp_previous_state`,
`emp_previous_zipcode`,
`emp_previous_position`,
`emp_previous_hourly_salary`,
`emp_previous_hourly_value_main`,
`emp_previous_annual_income`,


`cosigner_status_co_app`,
`cosigner_first_name`,
`cosigner_middle_name`,
`cosigner_last_name`,
`cosigner_dob`,
`cosigner_ssn`,
`cosigner_phone`,
`cosigner_curraddress`,
`cosigner_city`,
`cosigner_state`,
`cosigner_zipcode`,
`cosigner_own_rent`,	
`cosigner_monthly_payment_or_rent`,
`cosigner_how_long`,
`cosigner_previous_address`,
`cosigner_previous_city`,
`cosigner_previous_state`,
`cosigner_previous_zipcode`,	
`cosigner_previous_own_rent`,	
`cosigner_previous_monthly_payment_or_rent`,
`coemp_current_employer`,
`coemp_employer_address`,
`coemp_phone`,
`appinfo_e_mail`,
`coapplicant_e_mail`,

`coemp_fax`,
`coemp_city`,
`coemp_state`,
`coemp_zipcode`,
`coemp_position`,
`coemp_hourly_salary`,	
`coemp_hourly_value`,
`coemp_how_long`,
`coemp_previous_address`,
`coemp_previous_phone`,
`coemp_previous_e_mail`,
`coemp_previous_fax`,
`coemp_previous_city`,
`coemp_previous_state`,
`coemp_previous_zipcode`,
`coemp_previous_position`,	
`coemp_previous_hourly_salary`,
`coemp_previous_hourly_value`,
`coemp_previous_annual_income`,
`cosigner_status_co_app_agree`,


`coapplicant_status_co_app`,
`coapplicant_first_name`,
`coapplicant_middle_name`,
`coapplicant_last_name`,
`coapplicant_dob`,
`coapplicant_ssn`,
`coapplicant_phone`,
`coapplicant_curraddress`,
`coapplicant_city`,
`coapplicant_state`,
`coapplicant_zipcode`,	
`coapplicant_own_rent`,
`coapplicant_monthly_payment_or_rent`,
`coapplicant_how_long`,
`coapplicant_previous_address`,
`coapplicant_previous_city`,
`coapplicant_previous_state`,
`coapplicant_previous_zipcode`,
`coapplicant_previous_own_rent`,
`coapplicant_previous_monthly_payment_or_rent`,
`coapplicant_status_co_app_agree`,

`ref_name`,
`ref_address`,
`ref_phone`,

`ref2_name`,
`ref2_address`,
`ref2_phone`,

`ref3_name`,
`ref3_address`,
`ref3_phone`,


`created_at`)
VALUES ('".$_REQUEST['appinfo_first_name']."',
'".$_REQUEST['appinfo_middle_name']."',
'".$_REQUEST['appinfo_last_name']."',
'".$_REQUEST['appinfo_dob']."',
'".$_REQUEST['appinfo_ssn']."',
'".$_REQUEST['appinfo_phone']."',
'".$_REQUEST['appinfo_curraddress']."',
'".$_REQUEST['appinfo_city']."',
'".$_REQUEST['appinfo_state']."',
'".$_REQUEST['appinfo_zipcode']."',
'".$_REQUEST['appinfo_own_rent']."',
'".$_REQUEST['appinfo_monthly_payment_or_rent']."',
'".$_REQUEST['appinfo_how_long']."',
'".$_REQUEST['appinfo_previous_address']."',
'".$_REQUEST['appinfo_previous_city']."',
'".$_REQUEST['appinfo_previous_state']."',
'".$_REQUEST['appinfo_previous_zipcode']."',
'".$_REQUEST['appinfo_previous_own_rent']."',
'".$_REQUEST['appinfo_previous_monthly_payment_or_rent']."',

'".$_REQUEST['emp_current_employer']."',
'".$_REQUEST['emp_employer_address']."',
'".$_REQUEST['emp_phone']."',
'".$_REQUEST['cosigner_e_mail']."',
'".$_REQUEST['emp_fax']."',
'".$_REQUEST['emp_city']."',
'".$_REQUEST['emp_state']."',
'".$_REQUEST['emp_zipcode']."',
'".$_REQUEST['emp_position']."',
'".$_REQUEST['emp_hourly_salary']."',
'".$_REQUEST['emp_hourly_value']."',
'".$_REQUEST['emp_how_long']."',
'".$_REQUEST['emp_previous_address']."',
'".$_REQUEST['emp_previous_phone']."',
'".$_REQUEST['emp_previous_e_mail']."',
'".$_REQUEST['emp_previous_fax']."',
'".$_REQUEST['emp_previous_city']."',
'".$_REQUEST['emp_previous_state']."',
'".$_REQUEST['emp_previous_zipcode']."',
'".$_REQUEST['emp_previous_position']."',
'".$_REQUEST['emp_previous_hourly_salary']."',
'".$_REQUEST['emp_previous_hourly_value_main']."',
'".$_REQUEST['emp_previous_annual_income']."',



'".$_REQUEST['cosigner_status_co_app']."',
'".$_REQUEST['cosigner_first_name']."',
'".$_REQUEST['cosigner_middle_name']."',
'".$_REQUEST['cosigner_last_name']."',
'".$_REQUEST['cosigner_dob']."',
'".$_REQUEST['cosigner_ssn']."',
'".$_REQUEST['cosigner_phone']."',
'".$_REQUEST['cosigner_curraddress']."',
'".$_REQUEST['cosigner_city']."',
'".$_REQUEST['cosigner_state']."',
'".$_REQUEST['cosigner_zipcode']."',
'".$_REQUEST['cosigner_own_rent']."',	
'".$_REQUEST['cosigner_monthly_payment_or_rent']."',
'".$_REQUEST['cosigner_how_long']."',
'".$_REQUEST['cosigner_previous_address']."',
'".$_REQUEST['cosigner_previous_city']."',
'".$_REQUEST['cosigner_previous_state']."',
'".$_REQUEST['cosigner_previous_zipcode']."',	
'".$_REQUEST['cosigner_previous_own_rent']."',	
'".$_REQUEST['cosigner_previous_monthly_payment_or_rent']."',
'".$_REQUEST['coemp_current_employer']."',
'".$_REQUEST['coemp_employer_address']."',
'".$_REQUEST['coemp_phone']."',
'".$_REQUEST['appinfo_e_mail']."',
'".$_REQUEST['coapplicant_e_mail']."',

'".$_REQUEST['coemp_fax']."',
'".$_REQUEST['coemp_city']."',
'".$_REQUEST['coemp_state']."',
'".$_REQUEST['coemp_zipcode']."',
'".$_REQUEST['coemp_position']."',
'".$_REQUEST['coemp_hourly_salary']."',	
'".$_REQUEST['coemp_hourly_value']."',
'".$_REQUEST['coemp_how_long']."',
'".$_REQUEST['coemp_previous_address']."',
'".$_REQUEST['coemp_previous_phone']."',
'".$_REQUEST['coemp_previous_e_mail']."',
'".$_REQUEST['coemp_previous_fax']."',
'".$_REQUEST['coemp_previous_city']."',
'".$_REQUEST['coemp_previous_state']."',
'".$_REQUEST['coemp_previous_zipcode']."',
'".$_REQUEST['coemp_previous_position']."',	
'".$_REQUEST['coemp_previous_hourly_salary']."',
'".$_REQUEST['coemp_previous_hourly_value']."',
'".$_REQUEST['coemp_previous_annual_income']."',
'".$_REQUEST['cosigner_status_co_app_agree']."',


'".$_REQUEST['coapplicant_status_co_app']."',
'".$_REQUEST['coapplicant_first_name']."',
'".$_REQUEST['coapplicant_middle_name']."',
'".$_REQUEST['coapplicant_last_name']."',
'".$_REQUEST['coapplicant_dob']."',
'".$_REQUEST['coapplicant_ssn']."',
'".$_REQUEST['coapplicant_phone']."',
'".$_REQUEST['coapplicant_curraddress']."',
'".$_REQUEST['coapplicant_city']."',
'".$_REQUEST['coapplicant_state']."',
'".$_REQUEST['coapplicant_zipcode']."',	
'".$_REQUEST['coapplicant_own_rent']."',
'".$_REQUEST['coapplicant_monthly_payment_or_rent']."',
'".$_REQUEST['coapplicant_how_long']."',
'".$_REQUEST['coapplicant_previous_address']."',
'".$_REQUEST['coapplicant_previous_city']."',
'".$_REQUEST['coapplicant_previous_state']."',
'".$_REQUEST['coapplicant_previous_zipcode']."',
'".$_REQUEST['coapplicant_previous_own_rent']."',
'".$_REQUEST['coapplicant_previous_monthly_payment_or_rent']."',
'".$_REQUEST['coapplicant_status_co_app_agree']."',

'".$_REQUEST['ref_name']."',
'".$_REQUEST['ref_address']."',
'".$_REQUEST['ref_phone']."',

'".$_REQUEST['ref2_name']."',
'".$_REQUEST['ref2_address']."',
'".$_REQUEST['ref2_phone']."',

'".$_REQUEST['ref3_name']."',
'".$_REQUEST['ref3_address']."',
'".$_REQUEST['ref3_phone']."'


, now())");
 
 
echo $affected==1?"1":"0";
 
}else{

 
echo '0';
}
  
});


Route::get('/credit-application', function () {

/*
$input = Input::all();
$data[]='';
Mail::send('emails.creditapp', $data, function($message) use ($input)
{
    $message->to('manojb99.ccna@gmail.com');
    $message->subject('Welcome to Laravel');
    $message->from('sender@domain.net');
    $message->attach('path_to_pdf_file', array(
        'as' => 'pdf-report.zip', 
        'mime' => 'application/pdf')
    );
}); 
 */
 
$headersetting = DB::table('headersetting')->where('id','1')->whereNull('deleted_at')->get();
$footersetting = DB::table('footersetting')->where('id','1')->whereNull('deleted_at')->get(); 
$pagesetting =   DB::table('pagesetting')->whereNull('deleted_at')->get();
 $fetchCon['state'] =DB::table('state')->whereNull('deleted_at')->get();


return view('frontend.pages.credit-application',['headersetting'=>$headersetting,'footersetting'=>$footersetting,'pagesetting'=>$pagesetting,'con'=>$fetchCon] );

}); 



Route::get('/callajax/submitcontact', function($id='0')
{
  
$submit=$_REQUEST['submit'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$comment=$_REQUEST['comment'];

if($name!='' and $email!='' and $address!=''){

$affected = DB::insert("INSERT INTO usercontact (`name`, `email`, `address`, `comment`, `date`, `created_at`)
VALUES ('".$name."', '".$email."', '".$address."', '".$comment."', now(), now())");


echo $affected==1?"1":"0";

/*mail*/

			$contactsetting = DB::table('contactsetting')->get();  

			$to=$contactsetting[0]->showroom_2_email;
			
			if($to){
			
			$subject='User Contact';
			$from=$email; 
			

			$message="<table width='500' border='0' cellpadding='3' cellspacing='1'>
			<tr><td width='30%'><b>Name: </b></td><td>".$name."</td></tr>
			<tr><td width='30%'><b>Email Address: </b></td><td>".$email."</td></tr>
			<tr><td width='30%' valign='top'><b>Address: </b></td><td>".$address."</td></tr>
			<tr><td width='30%' valign='top'><b>Comment: </b></td><td>".$comment."</td></tr>
			</table>";
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: '.$name.'<'.$from.'>' . "\r\n";

			mail($to,$subject,$message,$headers);
			
			}
/*mail*/
 
 }else{
 
 echo 0;
 
 }
 
 
	
});


Route::get('/callajax/submitapp', function($id='0')
{
  
 
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$day=$_REQUEST['day'];
$now=date("Y-m-d h:i:s");

if($name!='' and $email!='' and $phone!='' and $day!=''){

$affected = DB::insert("INSERT INTO appointmentschedule (`name`, `email`, `phone_number`, `day_time`, `created_at`)
VALUES ('".$name."', '".$email."', '".$phone."', '".$day."','".$now."')");


echo $affected==1?"1":"0";
 
 

/*mail*/

			$contactsetting = DB::table('contactsetting')->get();  

			$to=$contactsetting[0]->showroom_2_email;
			
			if($to){
			
			$subject='Appointment Schedule';
			$from=$email; 
			

			$message="<table width='500' border='0' cellpadding='3' cellspacing='1'>
			<tr><td width='30%'><b>Name: </b></td><td>".$name."</td></tr>
			<tr><td width='30%'><b>Email Address: </b></td><td>".$email."</td></tr>
			<tr><td width='30%' valign='top'><b>Phone: </b></td><td>".$phone."</td></tr>
			<tr><td width='30%' valign='top'><b>Day: </b></td><td>".$day."</td></tr>
			</table>";
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: '.$name.'<'.$from.'>' . "\r\n";

			mail($to,$subject,$message,$headers);
			
			}
/*mail*/ 
 
 }else{
 
 echo 0;
 
 }
 
 
	
});

Route::get('/callajax/submit_test_drive', function($id='0')
{


$name=$_REQUEST['name'];
$suffix=$_REQUEST['suffix'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$zip=$_REQUEST['zip'];
$employment_status=$_REQUEST['employment_status'];
$company_name=$_REQUEST['company_name'];
$gross_income=$_REQUEST['gross_income'];
$driver_license_number=$_REQUEST['driver_license_number'];
$driver_license_expiration_date=$_REQUEST['driver_license_expiration_date'];
$insurance_carrier=$_REQUEST['insurance_carrier'];
$insurance_id_number=$_REQUEST['insurance_id_number'];
$insurance_agent_name=$_REQUEST['insurance_agent_name'];
$insurance_agent_phone_number=$_REQUEST['insurance_agent_phone_number'];


$submit_date=date("Y-m-d h:i:s");

if($suffix!='' and $email!='' and $address!='' and $state!=''){

$affected = DB::insert("INSERT INTO testdrive (`name`,`suffix`,`phone`,`email`,`address`,`city`,`state`,`zip`,`employment_status`,`company_name`,`gross_income`,`driver_license_number`,`driver_license_expiration_date`,`insurance_carrier`,`insurance_id_number`,`insurance_agent_name`,`insurance_agent_phone_number`,`submit_date`, `created_at`)
VALUES ('".$name."','".$suffix."','".$phone."','".$email."','".$address."','".$city."','".$state."','".$zip."','".$employment_status."','".$company_name."','".$gross_income."','".$driver_license_number."','".$driver_license_expiration_date."','".$insurance_carrier."','".$insurance_id_number."','".$insurance_agent_name."','".$insurance_agent_phone_number."','".$submit_date."','".$submit_date."')");


echo $affected==1?"1":"0";




/*mail*/

			$contactsetting = DB::table('contactsetting')->get();  

			$to=$contactsetting[0]->showroom_2_email;
			
			if($to){
			
			$subject='Test Drive Policy';
			$from=$email; 
			

			$message="<table width='500' border='0' cellpadding='3' cellspacing='1'>
			<tr><td width='60%' colspan='2'><b style='font-size:15px;'>Contact Information</b><br><br></td></tr>
			<tr><td width='30%'><b>Name: </b></td><td>".$name."</td></tr>
			<tr><td width='30%'><b>Suffix: </b></td><td>".$suffix."</td></tr>
			<tr><td width='30%'><b>Phone: </b></td><td>".$phone."</td></tr>
			<tr><td width='30%'><b>Email Address: </b></td><td>".$email."</td></tr> 
			<tr><td width='30%'><b>Address: </b></td><td>".$address."</td></tr>
			
			<tr><td width='30%'><b>Address: </b></td><td>".$address."</td></tr>
			<tr><td width='30%'><b>City: </b></td><td>".$city."</td></tr>
			
			<tr><td width='30%'><b>State: </b></td><td>".$state."</td></tr>
			<tr><td width='30%'><b>Zip code: </b></td><td>".$zip."</td></tr>
			
			<tr><td width='60%' colspan='2'><p>&nbsp;</p><b style='font-size:15px;'>Personal Information</b><br><br></td></tr>
			
			<tr><td width='30%'><b>Employment Status: </b></td><td>".$employment_status."</td></tr>
			<tr><td width='30%'><b>Company Name: </b></td><td>".$company_name."</td></tr>
			<tr><td width='30%'><b>Gross Income: </b></td><td>".$gross_income."</td></tr>
			<tr><td width='30%'><b>Driver License Number: </b></td><td>".$driver_license_number."</td></tr>
			
			
			<tr><td width='30%'><b>Driver License Expiration Date: </b></td><td>".$driver_license_expiration_date."</td></tr>
			
			<tr><td width='30%'><b>Insurance Carrier: </b></td><td>".$insurance_carrier."</td></tr>
			
			<tr><td width='30%'><b>Insurance ID Number: </b></td><td>".$insurance_id_number."</td></tr>
			<tr><td width='30%'><b>Insurance Agent Name: </b></td><td>".$insurance_agent_name."</td></tr>
			
			<tr><td width='30%'><b>Insurance Agent Phone Number: </b></td><td>".$insurance_agent_phone_number."</td></tr>
			
			
			</table>";
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: '.$name.'<'.$from.'>' . "\r\n";

			mail($to,$subject,$message,$headers);
			
			}
/*mail*/ 
 
 }else{
 
 echo 0;
 
 }



});




 


Route::get('/callajax/autocomplete', function($id='0')
{
$searchTerm = $_REQUEST['term'];
 
 

$query = DB::select("select * from cttrucklisting WHERE `v_id` LIKE '".$searchTerm."%'  ");

 $data='';

foreach ($query as $key => $v) {


	if($v->v_id and $v->deleted_at==""){    $data[]=$v->v_id; }

}


echo json_encode($data);
 
die();	
});


Route::get('/callajax/autocomplete/getvalue/', function($id='0')
{
$v_id=$_REQUEST['val'];
$data = DB::select("select * from cttrucklisting WHERE `v_id`='".$v_id."'  limit 1 ");

 

echo json_encode($data);

die();
});



Route::get('/callajax/selectedctsubmodels_id/{id?}', function($id='0')
{

	$datas = DB::table('ctsubmodels')->where('ctmodel_id',''.$id.'')->whereNull('deleted_at')->get();

	$output=''; 
	$output.='<option value="">Please select</option>'; 
	foreach($datas as $data){  
		
		$selected='';
		if($_REQUEST['ctsubmodels_id']==$data->id){ $selected='selected'; }
		
		$output.='<option '.$selected.' value="'.$data->id.'">'.$data->submodels.'</option>'; 
	} 
	 

	echo $output; 
	
})->where(['id' => '[0-9]+']); 


Route::get('/callajax/ctmodels_id/{id?}', function($id='0')
{

	$datas = DB::table('ctsubmodels')->where('ctmodel_id',''.$id.'')->whereNull('deleted_at')->get();

	$output=''; 
	$output.='<option value="">Please select</option>'; 
	foreach($datas as $data){  
		
		$output.='<option value="'.$data->id.'">'.$data->submodels.'</option>'; 
	} 
	 

	echo $output; 
	
})->where(['id' => '[0-9]+']); 

Route::get('/callajax/selected/{id?}', function($id='0')
{

	$datas = DB::table('ctmodels')->where('ctmake_id',''.$id.'')->whereNull('deleted_at')->get();

	$output=''; 
	$output.='<option value="">Please select</option>'; 
	foreach($datas as $data){  
		
		$selected='';
		if($_REQUEST['ctmodel_id']==$data->id){ $selected='selected'; }
		
		$output.='<option '.$selected.' value="'.$data->id.'">'.$data->model.'</option>'; 
	} 
	 

	echo $output; 
	
})->where(['id' => '[0-9]+']); 


Route::get('/callajax/{id?}', function($id='0')
{

	$datas = DB::table('ctmodels')->where('ctmake_id',''.$id.'')->whereNull('deleted_at')->get();

	$output=''; 
	$output.='<option value="">Please select</option>'; 
	foreach($datas as $data){  
		
		$output.='<option value="'.$data->id.'">'.$data->model.'</option>'; 
	} 
	//$output.='<option value="other">Other</option>'; 

	echo $output; 
	
})->where(['id' => '[0-9]+']); 

 
Route::get('/contact','contactController@index'); 
 
Route::get('/our-team','ourteamController@index'); 
 
Route::get('/','homeController@index');






Route::get('/gallery', function () {

 
$headersetting = DB::table('headersetting')->where('id','1')->whereNull('deleted_at')->get();
$footersetting = DB::table('footersetting')->where('id','1')->whereNull('deleted_at')->get(); 
$pagesetting =   DB::table('pagesetting')->whereNull('deleted_at')->get();

return view('frontend.pages.gallery',['headersetting'=>$headersetting,'footersetting'=>$footersetting,'pagesetting'=>$pagesetting]);

}); 

//Route::post('/inventory','inventoryController@postinventory');

Route::get('/inventory','inventoryController@index');

 
Route::get('/ajax/inventory/{id?}',['uses'=>'inventoryController@loadMore']); 
  
   

Route::get('/{name?}', function ($name='0') {
	
	
$headersetting = DB::table('headersetting')->where('id','1')->whereNull('deleted_at')->get();
$footersetting = DB::table('footersetting')->where('id','1')->whereNull('deleted_at')->get(); 
$pagesetting =   DB::table('pagesetting')->whereNull('deleted_at')->get();	
	
 $fetchData = DB::select('select * from pagesetting where seo_url ="'.$name.'" ');
 $rrr=0; 
 foreach($fetchData as $data){
  
	$rrr=1;
	
 
 
  $fetchCon['id']=$data->id;
  $fetchCon['image']=$data->image;
  $fetchCon['content']=$data->content;
  $fetchCon['title']=$data->title;
  
 } 
 
if($fetchCon['id']==6){

 $fetchCon['state'] =DB::table('state')->whereNull('deleted_at')->get(); 
  $fetchCon['suffix'] =DB::table('suffix')->whereNull('deleted_at')->get(); 
} 
 
 

if($rrr==1){

	return view('frontend.pages.default',['con'=>$fetchCon,'headersetting'=>$headersetting,'footersetting'=>$footersetting,'pagesetting'=>$pagesetting]);	

}else{
	return view('errors.404',['headersetting'=>$headersetting,'footersetting'=>$footersetting,'pagesetting'=>$pagesetting]);	
 
} 


}); 



Route::get('truck/{name?}','truckdetails@index')
->where(['id' => '[0-9,]+', 'name' =>'[a-z,A-Z,0-9,-]+']);