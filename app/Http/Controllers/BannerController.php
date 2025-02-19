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
            // 'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=870,height=328',
            'banner_image' => 'required|mimes:jpeg,png,jpg,gif,mp4,avi,mov,wmv|max:51200',
            'type' => 'required',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ]);

        $banner_image = 'banner_image/' . time() . '.' . $request->banner_image->extension();
        $request->banner_image->move(public_path('banner_image'), $banner_image);

        Banner::create([
            'banner_image' => $banner_image,
            'type' => $request->type,
            'description' => $request->description,
            'status' => $request->status ?? 1,
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
            'banner_image' => 'required|mimes:jpeg,png,jpg,gif,mp4,avi,mov,wmv|max:51200',
            // 'banner_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=870,height=328',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ]);

        $banner = Banner::findOrFail($id);

        if ($request->hasFile('banner_image')) {
            $imageName = time() . '.' . $request->banner_image->getClientOriginalExtension();

            $request->banner_image->move(public_path('banner_image'), $imageName);

            $banner->banner_image = 'banner_image/' . $imageName;
        }

        $banner->description = $request->description;
        $banner->status = $request->status ?? 1;
        $banner->type = $request->type;
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
