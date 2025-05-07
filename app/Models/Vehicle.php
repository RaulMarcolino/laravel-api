<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'year',
        'plate'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}