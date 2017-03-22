<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Usercontact extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'usercontact';
    
    protected $fillable = [
          'name',
          'email',
          'address',
          'comment',
          'date'
    ];
    

    public static function boot()
    {
        parent::boot();

        Usercontact::observe(new UserActionsObserver);
    }
    
    
    
    
}