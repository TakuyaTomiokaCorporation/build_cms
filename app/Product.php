<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'product_name',
        'thumbnail',
        'overview',
        'link_detail',
        'link_ec',
        'transmission_method',
        'waterproof',
        'noise_canceling',
        'category',
        'compression_method',
        'sound_method',
        'color'
    ];


}
