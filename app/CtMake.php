<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class CtMake extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'ctmake';
    
    protected $fillable = ['make'];
    

    public static function boot()
    {
        parent::boot();

        CtMake::observe(new UserActionsObserver);
    }
    
    
    
    
}