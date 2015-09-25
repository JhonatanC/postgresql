<?php

namespace App\Master\Entities;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';

    protected $fillable = [
        'name_branch',
        'id_city'
    ];
}
