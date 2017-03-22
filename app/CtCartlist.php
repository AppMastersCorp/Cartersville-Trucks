<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class CtCartlist extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'ctcartlist';
    
    protected $fillable = ['ctcarlisting_id'];
    

    public static function boot()
    {
        parent::boot();

        CtCartlist::observe(new UserActionsObserver);
    }
    
    public function ctcarlisting()
    {
        return $this->hasOne('App\CTCarlisting', 'id', 'ctcarlisting_id');
    }


    
    
    
}