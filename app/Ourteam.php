<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Ourteam extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'ourteam';
    
    protected $fillable = [
          'name',
          'image',
          'designation',
          'description',
          'status'
    ];
    

    public static function boot()
    {
        parent::boot();

        Ourteam::observe(new UserActionsObserver);
    }
    
    
    
    
}