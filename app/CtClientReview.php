<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class CtClientReview extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'ctclientreview';
    
    protected $fillable = [
          'client_name',
          'image',
          'message',
          'status'
    ];
    

    public static function boot()
    {
        parent::boot();

        CtClientReview::observe(new UserActionsObserver);
    }
    
    
    
    
}