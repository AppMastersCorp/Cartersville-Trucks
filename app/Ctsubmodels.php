<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Ctsubmodels extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'ctsubmodels';
    
    protected $fillable = [
          'submodel_make',
          'ctmodel_id',
          'submodels'
    ];
    

    public static function boot()
    {
        parent::boot();

        Ctsubmodels::observe(new UserActionsObserver);
    }
    
	
    public function ctmodels()
    {
        return $this->hasOne('App\CtModels', 'id', 'ctmodel_id');
    }
	 


    
    
    
}