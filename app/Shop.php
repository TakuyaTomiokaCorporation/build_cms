<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
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
