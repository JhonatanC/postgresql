<?php

namespace App\Master\Entities;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    protected $fillable = [
        'name_country',
    ];

    /**
     * Creamos una función con el nombre de la tabla
     * que vamos a relacionar en este caso ciudades
     */

    public function cities()
    {
        return $this->hasMany('App\Master\Entities\Cities', 'country_id');
        //return $this->hasMany('App\Master\Entities\Cities');
    }
}
