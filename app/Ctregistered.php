<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Ctregistered extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'ctregistered';
    
    protected $fillable = ['year'];
    

    public static function boot()
    {
        parent::boot();

        Ctregistered::observe(new UserActionsObserver);
    }
    
    
    
    
}