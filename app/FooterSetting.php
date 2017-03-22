<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class FooterSetting extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'footersetting';
    
    protected $fillable = [
          'footer_logo',
          'copyright',
		  
		  'footer_left_con_title',
		  
		  'footer_left_con'
    ];
    

    public static function boot()
    {
        parent::boot();

        FooterSetting::observe(new UserActionsObserver);
    }
    
    
    
    
}