<?php

namespace App\Casino\Entities;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    protected $fillable = [
        'name_country',
    ];
}
