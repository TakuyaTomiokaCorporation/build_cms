<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event03 extends Model
{
    protected $table = 'event3';

    protected $casts = [
        'age' => 'integer'
    ];

    protected $fillable = [
        'email',
        'sex',
        'age',
        'recognition_from',
        'musician',
        'smart_phone',
        'expectation'
    ];
    
}
