<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at', 'release_date'];
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
        'color',
        'release',
        'discontinued',
        'release_date'
    ];


}
