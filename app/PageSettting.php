<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class PageSettting extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'pagesettting';
    
    protected $fillable = [
          'title',
          'url',
          'image',
          'content'
    ];
    

    public static function boot()
    {
        parent::boot();

        PageSettting::observe(new UserActionsObserver);
    }
    
    
    
    
}