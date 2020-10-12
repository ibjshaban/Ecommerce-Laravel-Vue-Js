<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model {
    protected $table    = 'shippings';
    protected $fillable = [
        'name_ar',
        'name_en',
        'user_id',
        'lat',
        'lng',
        'icon',
    ];

    public function user_id() {
        return $this->hasOne(Users::Class, 'id', 'user_id');
    }

}
