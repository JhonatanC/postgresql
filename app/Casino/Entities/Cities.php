<?php

namespace App\Casino\Entities;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table = 'cities';

    protected $fillable = [
        'name_city',
        'id_country'
    ];
}
