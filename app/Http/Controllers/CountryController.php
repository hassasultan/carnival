<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Region;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::with('region')->get();
        return view('dashboard.admin.countries.index', compact('countries'));
    }

    public function create()
    {
        $regions = Region::all();
        return view('dashboard.admin.countries.create', compact('regions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'region_id' => 'required|exists:regions,id',
        ]);

        Country::create($request->all());

        return redirect()->route('countries.index')
                         ->with('success', 'Country created successfully.');
    }

    public function show(Country $country)
    {
        return view('dashboard.admin.countries.show', compact('country'));
    }

    public function edit(Country $country)
    {
        $regions = Region::all();
        return view('dashboard.admin.countries.edit', compact('country', 'regions'));
    }

    public function update(Request $request, Country $country)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'region_id' => 'required|exists:regions,id',
        ]);

        $country->update($request->all());

        return redirect()->route('countries.index')
                         ->with('success', 'Country updated successfully.');
    }

    public function destroy(Country $country)
    {
        $country->delete();

        return redirect()->route('countries.index')
                         ->with('success', 'Country deleted successfully.');
    }
}
