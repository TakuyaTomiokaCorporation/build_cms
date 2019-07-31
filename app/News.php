<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'title',
        'content',
        'category',
        'image',
        'pdf',
        'release',
        'book_date',
        'link'
    ];

}
