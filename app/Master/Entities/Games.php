<?php

namespace App\Master\Entities;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $table = 'games';

    protected $fillable = [
        'id_game',
        'name_game'
    ];
}
