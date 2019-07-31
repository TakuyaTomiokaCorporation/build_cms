<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductNews extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'news_products';

    protected $fillable = [
        'title',
        'content',
        'main_viusal',
        'pdf',
        'release',
        'book_date',
        'link'
    ];
}
