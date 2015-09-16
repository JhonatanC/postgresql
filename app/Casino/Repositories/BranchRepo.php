<?php

namespace App\Casino\Repositories;
use App\Casino\Entities\Branch;

class BranchRepo {
    public function getBranch()
    {
        return Branch::All();
    }
}