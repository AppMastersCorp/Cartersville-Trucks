<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Ctbodystyle extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'ctbodystyle';
    
    protected $fillable = ['bodystyle'];
    

    public static function boot()
    {
        parent::boot();

        Ctbodystyle::observe(new UserActionsObserver);
    }
    
    
    
    
}