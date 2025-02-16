<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;

class StateController extends Controller
{
    public function index()
    {
        $states = State::all();
        return view('dashboard.admin.states.index', compact('states'));
    }

    public function create()
    {
        $countries = Country::all();
        return view('dashboard.admin.states.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'country_id' => 'required|exists:country,id',
            'name' => 'required',
            'code' => 'required',
        ]);

        $data = $request->all();

        $state = State::create($data);

        if ($state) {
            return response()->json(['success' => 'State created successfully'], 200);
        } else {
            return response()->json(['error' => 'Failed to create state'], 500);
        }
    }

    public function show(State $state)
    {
        return response()->json($state);
    }

    public function edit(State $state)
    {
        $countries = Country::all();
        return view('dashboard.admin.states.edit', compact('state', 'countries'));
    }

    public function update(Request $request, State $state)
    {
        $request->validate([
            'country_id' => 'required|exists:country,id',
            'name' => 'required',
            'code' => 'required',
        ]);

        $state->fill($request->all());
        $updated = $state->save();

        if ($updated) {
            return response()->json(['success' => 'State updated successfully'], 200);
        } else {
            return response()->json(['error' => 'Failed to update state'], 500);
        }
    }

    public function destroy(State $state)
    {
        $deleted = $state->delete();

        if ($deleted) {
            return response()->json(['success' => 'State deleted successfully'], 200);
        } else {
            return response()->json(['error' => 'Failed to delete state'], 500);
        }
    }
}
