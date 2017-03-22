<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Ctcolor extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'ctcolor';
    
    protected $fillable = ['color'];
    

    public static function boot()
    {
        parent::boot();

        Ctcolor::observe(new UserActionsObserver);
    }
    
    
    
    
}