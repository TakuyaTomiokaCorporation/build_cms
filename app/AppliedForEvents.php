<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppliedForEvents extends Model
{
    protected $table = 'applied_for_events';

    protected $casts = [
        'age' => 'integer'
    ];

    protected $fillable = [
        'email',
        'sex',
        'age',
        'recognition_from',
        'considered_product',
        'purchased_product',
        'purchased_from',
        'exception'
    ];
}
