<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;

use Carbon\Carbon; 

use Illuminate\Database\Eloquent\SoftDeletes;

class AppointmentSchedule extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'appointmentschedule';
    
    protected $fillable = [
          'name',
          'email',
          'phone_number',
          'day_time'
    ];
    

    public static function boot()
    {
        parent::boot();

        AppointmentSchedule::observe(new UserActionsObserver);
    }
    
    
    
    /**
     * Set attribute to datetime format
     * @param $input
     */
    public function setDayTimeAttribute($input)
    {
        if($input != '') {
            $this->attributes['day_time'] = Carbon::createFromFormat(config('quickadmin.date_format') . ' ' . config('quickadmin.time_format'), $input)->format('Y-m-d H:i:s');
        }else{
            $this->attributes['day_time'] = '';
        }
    }

    /**
     * Get attribute from datetime format
     * @param $input
     *
     * @return string
     */
    public function getDayTimeAttribute($input)
    {
        if($input != '0000-00-00') {
            return Carbon::createFromFormat('Y-m-d H:i:s', $input)->format(config('quickadmin.date_format') . ' ' .config('quickadmin.time_format'));
        }else{
            return '';
        }
    }


}