<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Package;
use App\Models\Vendor;
use App\Models\Carnival;

class CarnivalCommitteeController extends Controller
{
    public function create($id)
    {
        $carnival = Carnival::where('unique_id', $id)->first();

        if ($carnival->head != 0) {
            abort(419, 'Page Expired');
        }

        $roles = Role::where('status', 1)->get();
        $packages = Package::where('status', 1)->get();
        $vendors = Vendor::with('user')->where('status', 1)->get();
        return view('carnival_committee.user.index', compact('roles', 'packages', 'vendors'));
    }
}
