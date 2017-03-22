<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;

use Carbon\Carbon; 

use Illuminate\Database\Eloquent\SoftDeletes;

class CTCarlisting2 extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'ctcarlisting2';
    
    protected $fillable = [
          'text_field',
          'email_field',
          'long_text',
          'long_text_ck',
          'radio_btn',
          'checkbox',
          'datepicker',
          'datetimepicker',
          'ctcarlisting_id',
          'file_field',
          'photo_field',
          'money_field',
          'enumfield'
    ];
    
    public static $enumfield = ["1" => "1", "0" => "0"];


    public static function boot()
    {
        parent::boot();

        CTCarlisting2::observe(new UserActionsObserver);
    }
    
    public function ctcarlisting()
    {
        return $this->hasOne('App\CTCarlisting', 'id', 'ctcarlisting_id');
    }


    
    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDatepickerAttribute($input)
    {
        if($input != '') {
            $this->attributes['datepicker'] = Carbon::createFromFormat(config('quickadmin.date_format'), $input)->format('Y-m-d');
        }else{
            $this->attributes['datepicker'] = '';
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDatepickerAttribute($input)
    {
        if($input != '0000-00-00') {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('quickadmin.date_format'));
        }else{
            return '';
        }
    }


    /**
     * Set attribute to datetime format
     * @param $input
     */
    public function setDatetimepickerAttribute($input)
    {
        if($input != '') {
            $this->attributes['datetimepicker'] = Carbon::createFromFormat(config('quickadmin.date_format') . ' ' . config('quickadmin.time_format'), $input)->format('Y-m-d H:i:s');
        }else{
            $this->attributes['datetimepicker'] = '';
        }
    }

    /**
     * Get attribute from datetime format
     * @param $input
     *
     * @return string
     */
    public function getDatetimepickerAttribute($input)
    {
        if($input != '0000-00-00') {
            return Carbon::createFromFormat('Y-m-d H:i:s', $input)->format(config('quickadmin.date_format') . ' ' .config('quickadmin.time_format'));
        }else{
            return '';
        }
    }


}