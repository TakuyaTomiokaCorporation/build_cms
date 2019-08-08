<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'news';

    protected $fillable = [
        'title',
        'content',
        'category',
        'image',
        'pdf',
        'release',
        'book_date',
        'link',
        'class',
        'another_link'
    ];

}
