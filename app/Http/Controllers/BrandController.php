<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('dashboard.admin.brands.index', compact('brands'));
    }

    public function create()
    {
        return view('dashboard.admin.brands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer|in:0,1',
        ]);

        $logoName = time() . '.' . $request->logo->extension();
        $request->logo->move(public_path('images'), $logoName);

        Brand::create([
            'title' => $request->title,
            'logo' => $logoName,
            'status' => $request->status,
        ]);

        return redirect()->route('brands.index')
                         ->with('success', 'Brand created successfully.');
    }

    public function show(Brand $brand)
    {
        return view('dashboard.admin.brands.show', compact('brand'));
    }

    public function edit(Brand $brand)
    {
        return view('dashboard.admin.brands.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer|in:0,1',
        ]);

        if ($request->hasFile('logo')) {
            $logoName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('images'), $logoName);
            $brand->update([
                'title' => $request->title,
                'logo' => $logoName,
                'status' => $request->status,
            ]);
        } else {
            $brand->update($request->only(['title', 'status']));
        }

        return redirect()->route('brands.index')
                         ->with('success', 'Brand updated successfully.');
    }

    public function destroy(Brand $brand)
    {
        if ($brand->logo) {
            unlink(public_path('images/' . $brand->logo));
        }
        
        $brand->delete();

        return redirect()->route('brands.index')
                         ->with('success', 'Brand deleted successfully.');
    }
}
