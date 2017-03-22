<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Suffix extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'suffix';
    
    protected $fillable = ['suffix'];
    

    public static function boot()
    {
        parent::boot();

        Suffix::observe(new UserActionsObserver);
    }
    
    
    
    
}