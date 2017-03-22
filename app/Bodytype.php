<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Bodytype extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'bodytype';
    
    protected $fillable = ['body_type'];
    

    public static function boot()
    {
        parent::boot();

        Bodytype::observe(new UserActionsObserver);
    }
    
    
    
    
}