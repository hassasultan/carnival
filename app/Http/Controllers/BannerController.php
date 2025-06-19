<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\File;
use Exception;

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
            'banner_image' => 'required|mimes:jpeg,png,jpg,gif,mp4,avi,mov,wmv|max:101200',
            'type' => 'required',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ]);

        $banner_image = 'banner_image/' . time() . '.' . $request->banner_image->extension();
        $request->banner_image->move(public_path('banner_image'), $banner_image);
        $poster = null;
        if($request->has('poster') && $request->poster != null && $request->poster != '')
        {
            $poster = 'poster_image/' . time() . '.' . $request->poster->extension();
            $request->poster->move(public_path('poster_image'), $poster);
        }

        Banner::create([
            'banner_image' => $banner_image,
            'poster' => $poster,
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
            'banner_image' => 'nullable|mimes:jpeg,png,jpg,gif,mp4,avi,mov,wmv|max:101200',
            // 'banner_image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:width=870,height=328',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ]);

        $banner = Banner::findOrFail($id);

        if ($request->hasFile('banner_image')) {
            // Delete old banner image file if it exists
            if ($banner->banner_image && File::exists(public_path($banner->banner_image))) {
                File::delete(public_path($banner->banner_image));
            }
            
            $imageName = time() . '.' . $request->banner_image->getClientOriginalExtension();
            $request->banner_image->move(public_path('banner_image'), $imageName);
            $banner->banner_image = 'banner_image/' . $imageName;
        }
        
        if($request->has('poster') && $request->poster != null && $request->poster != '')
        {
            // Delete old poster image file if it exists
            if ($banner->poster && File::exists(public_path($banner->poster))) {
                File::delete(public_path($banner->poster));
            }
            
            $poster = 'poster_image/' . time() . '.' . $request->poster->extension();
            $request->poster->move(public_path('poster_image'), $poster);
            $banner->poster = $poster;
        }

        $banner->description = $request->description;
        $banner->status = $request->status ?? 1;
        $banner->type = $request->type;
        $banner->save();

        return redirect()->route('banners.index')->with('success', 'Banner updated successfully.');
    }

    public function getDeletionDetails($id)
    {
        try {
            $banner = Banner::findOrFail($id);
            
            $deletionDetails = [
                'banner' => [
                    'id' => $banner->id,
                    'type' => $banner->type,
                    'description' => $banner->description,
                    'banner_image' => $banner->banner_image,
                    'poster' => $banner->poster
                ],
                'files_to_delete' => []
            ];
            
            // Add banner image to files to delete
            if ($banner->banner_image) {
                $deletionDetails['files_to_delete'][] = [
                    'path' => $banner->banner_image,
                    'full_path' => public_path($banner->banner_image),
                    'type' => 'Banner Image'
                ];
            }
            
            // Add poster image to files to delete
            if ($banner->poster) {
                $deletionDetails['files_to_delete'][] = [
                    'path' => $banner->poster,
                    'full_path' => public_path($banner->poster),
                    'type' => 'Poster Image'
                ];
            }
            
            return response()->json($deletionDetails);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error getting deletion details: ' . $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $banner = Banner::findOrFail($id);
            
            // Delete banner image file
            if ($banner->banner_image && File::exists(public_path($banner->banner_image))) {
                File::delete(public_path($banner->banner_image));
            }
            
            // Delete poster image file
            if ($banner->poster && File::exists(public_path($banner->poster))) {
                File::delete(public_path($banner->poster));
            }
            
            // Delete the banner record
            $banner->delete();

            return redirect()->route('banners.index')->with('success', 'Banner and associated files deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting banner: ' . $e->getMessage());
        }
    }
}
