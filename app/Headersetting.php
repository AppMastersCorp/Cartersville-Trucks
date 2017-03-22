<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Headersetting extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'headersetting';
    
    protected $fillable = [
          'header_logo',
          'opening_hour',
          'call_now',
          'gmail',
          'facebook',
          'twitter',
          'youtube'
    ];
    

    public static function boot()
    {
        parent::boot();

        Headersetting::observe(new UserActionsObserver);
    }
    
    
    
    
}