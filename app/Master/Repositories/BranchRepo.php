<?php

namespace App\Master\Repositories;
use App\Master\Entities\Branch;

class BranchRepo {
    public function getBranch()
    {
        return Branch::All();
        //return Branch::All()->where('id_branch', 1);
    }
}