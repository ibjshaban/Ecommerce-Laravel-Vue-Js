<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';
    protected $fillable = [
        'state_name_ar',
        'state_name_en',
        'country_id',
        'city_id',
    ];

    public function country_id()
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }

    public function city_id()
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }
}
