<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
class RegionController extends Controller
{
    public function index()
    {
        $regions = Region::all();
        return view('dashboard.admin.regions.index', compact('regions'));
    }

    public function create()
    {
        return view('dashboard.admin.regions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $iconName = time().'.'.$request->icon->extension();
        $request->icon->move(public_path('images'), $iconName);

        Region::create([
            'name' => $request->name,
            'icon' => $iconName
        ]);

        return redirect()->route('regions.index')
                         ->with('success', 'Region created successfully.');
    }

    public function show(Region $region)
    {
        return view('dashboard.admin.regions.show', compact('region'));
    }

    public function edit(Region $region)
    {
        return view('dashboard.admin.regions.edit', compact('region'));
    }

    public function update(Request $request, Region $region)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('icon')) {
            $iconName = time().'.'.$request->icon->extension();
            $request->icon->move(public_path('images'), $iconName);
            $region->update([
                'name' => $request->name,
                'icon' => $iconName
            ]);
        } else {
            $region->update($request->only(['name']));
        }

        return redirect()->route('regions.index')
                         ->with('success', 'Region updated successfully.');
    }

    public function destroy(Region $region)
    {
        if ($region->icon) {
            unlink(public_path('images/'.$region->icon));
        }
        
        $region->delete();

        return redirect()->route('regions.index')
                         ->with('success', 'Region deleted successfully.');
    }
}
