<?php

namespace App\Casino\Entities;

use Illuminate\Database\Eloquent\Model;

class GameCity extends Model
{
    protected $table = 'game_cities';

    protected $fillable = [
        'id_branch',
        'id_game'
    ];
}
