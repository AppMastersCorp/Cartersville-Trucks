<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class CtModels extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'ctmodels';
    
    protected $fillable = [
          'ctmake_id',
          'model'
    ];
    

    public static function boot()
    {
        parent::boot();

        CtModels::observe(new UserActionsObserver);
    }
    
    public function ctmake()
    {
        return $this->hasOne('App\CtMake', 'id', 'ctmake_id');
    }


    
    
    
}