<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Ctcondition extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'ctcondition';
    
    protected $fillable = ['condition'];
    

    public static function boot()
    {
        parent::boot();

        Ctcondition::observe(new UserActionsObserver);
    }
    
    
    
    
}