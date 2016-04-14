<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';
    protected $fillable = ['id', 'brand_name', 'model', 'serial_number', 'color', 'engine', 'year_release', 'users_id', 'companies_id_companies'];
}
