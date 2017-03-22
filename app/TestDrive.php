<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class TestDrive extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'testdrive';
    
    protected $fillable = [
          'name',
          'suffix',
          'phone',
          'email',
          'address',
          'city',
          'state',
          'zip',
          'employment_status',
          'company_name',
          'gross_income',
          'driver_license_number',
          'driver_license_expiration_date',
          'insurance_carrier',
          'insurance_id_number',
          'insurance_agent_name',
          'insurance_agent_phone_number',
          'submit_date'
    ];
    

    public static function boot()
    {
        parent::boot();

        TestDrive::observe(new UserActionsObserver);
    }
    
    
    
    
}