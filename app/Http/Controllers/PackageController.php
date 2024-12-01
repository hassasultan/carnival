<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('dashboard.admin.packages.index', compact('packages'));
    }

    public function create()
    {
        return view('dashboard.admin.packages.create');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //     ]);

    //     $data = $request->all();
    //     $data['user_id'] = Auth::id();

    //     Package::create($data);

    //     return redirect()->route('packages.index');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:packages,slug',
            // 'icon' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'description' => 'nullable|string',
            'ecommerce' => 'required|integer',
            'events' => 'required|integer',
            'music' => 'required|integer',
            'appointment' => 'required|integer',
            'ad_space' => 'required|integer',
            'blogging' => 'required|integer',
            'product' => 'required|integer',
            'costume' => 'required|integer',
            'status' => 'required|integer',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();

        if ($request->hasFile('icon')) {
            $iconPath = 'package_icon/' . time() . '.' . $request->icon->extension();
            $request->icon->move(public_path('package_icon'), $iconPath);
            $data['icon'] = $iconPath;
        }

        Package::create($data);

        return redirect()->route('packages.index');
    }

    public function show($id)
    {
        $package = Package::findOrFail($id);
        return view('dashboard.admin.packages.show', compact('package'));
    }

    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('dashboard.admin.packages.edit', compact('package'));
    }

    // public function update(Request $request, $id)
    // {
    //     $package = Package::findOrFail($id);
    //     $package->update($request->all());
    //     return redirect()->route('packages.index');
    // }

    public function update(Request $request, $id)
    {
        $package = Package::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:packages,slug,' . $id,
            'description' => 'nullable|string',
            'ecommerce' => 'required|integer',
            'events' => 'required|integer',
            'music' => 'required|integer',
            'appointment' => 'required|integer',
            'ad_space' => 'required|integer',
            'blogging' => 'required|integer',
            'product' => 'required|integer',
            'costume' => 'required|integer',
            'status' => 'required|integer',
            // 'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('icon')) {
            $iconPath = 'package_icon/' . time() . '.' . $request->icon->extension();
            $request->icon->move(public_path('package_icon'), $iconPath);
            $validatedData['icon'] = $iconPath;
        }

        // dd($validatedData, $request->toArray());

        $package->update($validatedData);

        return redirect()->route('packages.index');
    }

    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->delete();
        return redirect()->route('packages.index');
    }
}
