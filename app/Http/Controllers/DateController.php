<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Master\Repositories\BranchRepo;

use App\Master\Entities\Cities;

class DateController extends Controller
{
    protected $BranchRepo;

    public function __construct (BranchRepo $BranchRepo)
    {
        $this->BranchRepo = $BranchRepo;
    }

    public function getBranch()
    {
        $branch = $this->BranchRepo->getBranch();
        //dd($branch);
        //return $branch;
        return view('datos', compact('branch'));
    }

    function rel()
    {

    }
}
