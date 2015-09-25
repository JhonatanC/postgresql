<?php

namespace App\Master\Entities;

use Illuminate\Database\Eloquent\Model;

class GameCity extends Model
{
    protected $table = 'game_cities';

    protected $fillable = [
        'id_game_city',
        'id_branch',
        'id_game'
    ];
}
