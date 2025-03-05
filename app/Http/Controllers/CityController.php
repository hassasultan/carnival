<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::with('country')->get();
        dd($cities->toArray());
        return view('dashboard.admin.cities.index', compact('cities'));
    }

    public function create()
    {
        $countries = Country::all();
        return view('dashboard.admin.cities.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'country_id' => 'required|exists:country,id',
        ]);

        City::create($request->all());

        return redirect()->route('cities.index')
                         ->with('success', 'City created successfully.');
    }

    public function show(City $city)
    {
        return view('dashboard.admin.cities.show', compact('city'));
    }

    public function edit(City $city)
    {
        $countries = Country::all();
        return view('dashboard.admin.cities.edit', compact('city', 'countries'));
    }

    public function update(Request $request, City $city)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'country_id' => 'required|exists:country,id',
        ]);

        $city->update($request->all());

        return redirect()->route('cities.index')
                         ->with('success', 'City updated successfully.');
    }

    public function destroy(City $city)
    {
        $city->delete();

        return redirect()->route('cities.index')
                         ->with('success', 'City deleted successfully.');
    }
}
