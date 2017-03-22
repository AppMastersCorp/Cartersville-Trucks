<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class CtTrucklisting extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'cttrucklisting';
    
    protected $fillable = [
          'ctcondition_id',
          'features',
          'ctmake_id',
          'ctmodels_id',
          'variant',
          'ctregistered_id',
          'registration',
          'previous_owners',
          'fuel_consumption',
          'tax_band',
          'tax_cost',
          'price',
		  'price_int',
          'ctcolor_id',
          'ctexteriorcolor_id',
          'doors',
          'ctfueltype_id',
          'ctbodystyle_id',
		  'bodytype_id',
          'mileage',
          'engine_size_id',
          'cttransmission_id',
          'seating_id',
		  'horsepower_id',
		  'torque_id',
		  'drivetrain_id',
		  'weight',
		  'max_towing_capacity',
		  
          'image',
          'video',
          'location',
          'description',
		  
		  'featured',
			'v_id',		  
			'vin',
			'stock_auto', 
			'drive_train',
			'price_2',
			'price_3',
			'price_4',
			'price_5',
			'features_2',
			'features_3',
			'features_4',
			'features_5',
			'features_6',
			'features_7',
			'gas_mileage_city', 
			'gas_mileage_highway',
			
			'seo_url',
			'show_gallery',
			'ctsubmodels_id',
			
    ];
    

    public static function boot()
    {
        parent::boot();

        CtTrucklisting::observe(new UserActionsObserver);
    }
    
    public function ctcondition()
    {
        return $this->hasOne('App\Ctcondition', 'id', 'ctcondition_id');
    }


    public function ctmake()
    {
        return $this->hasOne('App\CtMake', 'id', 'ctmake_id');
    }


    public function ctmodels()
    {
        return $this->hasOne('App\CtModels', 'id', 'ctmodels_id');
    }


    public function ctregistered()
    {
        return $this->hasOne('App\Ctregistered', 'id', 'ctregistered_id');
    }


    public function ctcolor()
    {
        return $this->hasOne('App\Ctcolor', 'id', 'ctcolor_id');
    }


    public function ctexteriorcolor()
    {
        return $this->hasOne('App\Ctexteriorcolor', 'id', 'ctexteriorcolor_id');
    }


    public function ctfueltype()
    {
        return $this->hasOne('App\Ctfueltype', 'id', 'ctfueltype_id');
    }


    public function ctbodystyle()
    {
        return $this->hasOne('App\Ctbodystyle', 'id', 'ctbodystyle_id');
    }


    public function cttransmission()
    {
        return $this->hasOne('App\Cttransmission', 'id', 'cttransmission_id');
    }

	
    public function enginesize()
    {
        return $this->hasOne('App\enginesize', 'id', 'engine_size_id');
    }	

     public function horsepower()
    {
        return $this->hasOne('App\horsepower', 'id', 'horsepower_id');
    }	   
    
	public function torque()
    {
        return $this->hasOne('App\torque', 'id', 'torque_id');
    }	   
 
	public function drivetrain()
    {
        return $this->hasOne('App\drivetrain', 'id', 'drivetrain_id');
    } 
	
	public function maxseating()
    {
        return $this->hasOne('App\maxseating', 'id', 'seating_id');
    } 
 
 
 	public function bodytype()
    {
        return $this->hasOne('App\bodytype', 'id', 'bodytype_id');
    } 
 
	
}