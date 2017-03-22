<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class CreditApplication extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'creditapplication';
    
    protected $fillable = [
					'appinfo_first_name',
					'appinfo_middle_name',
					'appinfo_last_name',
					'appinfo_dob',
					'appinfo_ssn',
					'appinfo_phone',
					'appinfo_curraddress',
					'appinfo_city',
					'appinfo_state',
					'appinfo_zipcode',
					'appinfo_own_rent',
					'appinfo_monthly_payment_or_rent',
					'appinfo_how_long',
					'appinfo_previous_address',
					'appinfo_previous_city',
					'appinfo_previous_state',
					'appinfo_previous_zipcode',
					'appinfo_previous_own_rent',
					'appinfo_previous_monthly_payment_or_rent',
					'appinfo_previous_how_long',
					'emp_current_employer',
					'emp_employer_address',
					'emp_how_long',
					'emp_phone',
					'emp_e_mail',
					'emp_fax',
					'emp_city',
					'emp_state',
					'emp_zipcode',
					'emp_position',
					'emp_hourly_salary',
					'emp_annual_income',
					'coappinfo_first_name',
					'coappinfo_middle_name',
					'coappinfo_last_name',
					'coappinfo_dob',
					'coappinfo_ssn',
					'coappinfo_phone',
					'coappinfo_curraddress',
					'coappinfo_city',
					'coappinfo_state',
					'coappinfo_zipcode',
					'coappinfo_own_rent',
					'coappinfo_monthly_payment_or_rent',
					'coappinfo_how_long',
					'coappinfo_previous_address',
					'coappinfo_previous_city',
					'coappinfo_previous_state',
					'coappinfo_previous_zipcode',
					'coappinfo_previous_own_rent',
					'coappinfo_previous_monthly_payment_or_rent',
					'coappinfo_previous_how_long',
					'coemp_current_employer',
					'coemp_employer_address',
					'coemp_how_long',
					'coemp_phone',
					'coemp_e_mail',
					'coemp_fax',
					'coemp_city',
					'coemp_state',
					'coemp_zipcode',
					'coemp_position',
					'coemp_hourly_salary',
					'coemp_annual_income',
					'ref_name',
					'ref_address',
					'ref_phone',  
];
    

    public static function boot()
    {
        parent::boot();

        CreditApplication::observe(new UserActionsObserver);
    }
    
    
    
    
}