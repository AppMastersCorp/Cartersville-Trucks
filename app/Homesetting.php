<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Homesetting extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'homesetting';
    
    protected $fillable = [
          'title',
          'content',
          'imageone',
          'imagetwo'
    ];
    

    public static function boot()
    {
        parent::boot();

        Homesetting::observe(new UserActionsObserver);
    }
    
    
    
    
}