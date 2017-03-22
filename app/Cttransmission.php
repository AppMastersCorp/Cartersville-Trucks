<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Cttransmission extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'cttransmission';
    
    protected $fillable = ['transmission'];
    

    public static function boot()
    {
        parent::boot();

        Cttransmission::observe(new UserActionsObserver);
    }
    
    
    
    
}