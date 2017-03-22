<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'state';
    
    protected $fillable = ['state','abbr'];
    

    public static function boot()
    {
        parent::boot();

        State::observe(new UserActionsObserver);
    }
    
    
    
    
}