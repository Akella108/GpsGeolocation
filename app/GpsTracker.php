<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GpsTracker extends Model
{
    protected $gpsTracker = 'gps_trackers';
    protected $fillable = ['name', 'imei', 'car_id'];
}
