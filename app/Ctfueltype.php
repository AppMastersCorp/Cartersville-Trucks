<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Ctfueltype extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'ctfueltype';
    
    protected $fillable = ['fuel_type'];
    

    public static function boot()
    {
        parent::boot();

        Ctfueltype::observe(new UserActionsObserver);
    }
    
    
    
    
}