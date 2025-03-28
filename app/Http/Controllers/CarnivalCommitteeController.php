<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Package;
use App\Models\Vendor;
use App\Models\Carnival;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;

class CarnivalCommitteeController extends Controller
{
    public function create($id)
    {
        $carnival = Carnival::where('unique_id', $id)->first();

        if (Auth::check()) {
            return redirect()->route('home');
        }
        if ($carnival->head != 0) {
            abort(419, 'Page Expired');
        }

        $unique_id = $id;
        $roles = Role::where('status', 1)->get();
        $packages = Package::where('status', 1)->get();
        $vendors = Vendor::with('user')->where('status', 1)->get();
        $city = City::all();
        $state = State::all();
        $country = Country::all();
        return view('carnival_committee.user.index', compact('roles', 'packages', 'vendors', 'unique_id'));
    }
}
