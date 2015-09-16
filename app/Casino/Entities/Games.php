<?php

namespace App\Casino\Entities;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $table = 'games';

    protected $fillable = [
        'name_game'
    ];
}
