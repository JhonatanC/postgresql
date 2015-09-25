<?php

namespace App\Master\Repositories;
use App\Master\Entities\Cities;


class CitiesRepo {
    public function GetCities()
    {
        return Cities::All();
    }
}