<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Contactsetting extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'contactsetting';
    
    protected $fillable = [
          'showroom_1_address',
		  
		  'showroom_2_address',
          'showroom_1_tell',
          'showroom_1_fax',
          'showroom_1_email',
          'showroom_2_tell',
          'showroom_2_fax',
          'showroom_2_email',
          'map_iframe',
          'map_address'
    ];
    

    public static function boot()
    {
        parent::boot();

        Contactsetting::observe(new UserActionsObserver);
    }
    
    
    
    
}