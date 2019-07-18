<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductNews extends Model
{
    protected $table = 'news_products';

    protected $fillable = [
        'title',
        'content',
        'main_viusal',
        'pdf',
        'release'
    ];
}
