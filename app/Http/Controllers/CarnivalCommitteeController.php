<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarnivalCommitteeController extends Controller
{
    public function create($id)
    {
        return view('carnival_committee.user.index');
    }
}
