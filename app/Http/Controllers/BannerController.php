<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('dashboard.admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('dashboard.admin.banners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=870,height=328',
            // 'type' => 'required',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ]);

        $imagePath = $request->file('banner_image')->store('banners', 'public');

        Banner::create([
            'banner_image' => $imagePath,
            'type' => 'mascamps',
            'description' => $request->description,
            'status' => $request->status ?? 1, // default to 1 if not provided
        ]);

        return redirect()->route('banners.index')->with('success', 'Banner created successfully.');
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('dashboard.admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'banner_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=870,height=328',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ]);

        $banner = Banner::findOrFail($id);

        if ($request->hasFile('banner_image')) {
            $imagePath = $request->file('banner_image')->store('banners', 'public');
            $banner->banner_image = $imagePath;
        }

        $banner->description = $request->description;
        $banner->status = $request->status ?? 1;
        $banner->save();

        return redirect()->route('banners.index')->with('success', 'Banner updated successfully.');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        return redirect()->route('banners.index')->with('success', 'Banner deleted successfully.');
    }
}
