<?php

namespace App\Master\Entities;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table = 'cities';

    protected $fillable = [
        'name_city',
    ];

    public function country()
    {
        return $this->belongsTo('App\Master\Entities\Country');
    }
}
