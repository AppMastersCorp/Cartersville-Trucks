<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class EngineSize extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'enginesize';
    
    protected $fillable = ['engine_size'];
    

    public static function boot()
    {
        parent::boot();

        EngineSize::observe(new UserActionsObserver);
    }
    
    
    
    
}