<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Pagesetting extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'pagesetting';
    
    protected $fillable = [
          'title',
          'image',
          'content',
          'seo_url'
    ];
    

    public static function boot()
    {
        parent::boot();

        Pagesetting::observe(new UserActionsObserver);
    }
    
    
    
    
}