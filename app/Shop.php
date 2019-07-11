<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shops';
    protected $fillable = [
        'region_id',
        'pre_id',
        'shop_name',
        'shop_address',
        'shop_tel',
        'post_number'
    ];
}
