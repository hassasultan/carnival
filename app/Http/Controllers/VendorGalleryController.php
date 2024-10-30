<?php

namespace App\Http\Controllers;

use App\Models\SiteGallery;
use App\Models\GalleryAlbum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VendorGalleryController extends Controller
{
    public function index()
    {
        $siteGalleries = SiteGallery::where('user_id', Auth::id())->get();
        $siteGalleries = GalleryAlbum::where('user_id', Auth::id())->get();
        return view('dashboard.vendor.site_gallery.index', compact('siteGalleries'));
    }

    public function create()
    {
        return view('dashboard.vendor.site_gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer|in:0,1',
        ]);

        // Start a transaction
        DB::beginTransaction();

        try {
            $album = GalleryAlbum::create([
                'user_id' => Auth::id(),
                'title' => $request->title,
                'description' => $request->description,
            ]);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '-' . uniqid() . '.' . $image->extension();
                    $image->move(public_path('images'), $imageName);

                    SiteGallery::create([
                        'user_id' => Auth::id(),
                        'image' => $imageName,
                        'album' => $album->id,
                        'status' => $request->status,
                    ]);
                }
            }

            DB::commit();

            return redirect()->route('vendor_site_gallery.index')
                ->with('success', 'Images added successfully.');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('vendor_site_gallery.index')
                ->with('error', 'Failed to add images: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $siteGallery = SiteGallery::find($id);
        return view('dashboard.vendor.site_gallery.show', compact('siteGallery'));
    }

    public function edit($id)
    {
        $siteGallery = GalleryAlbum::with('images')->find($id);
        return view('dashboard.vendor.site_gallery.edit', compact('siteGallery'));
    }

    // public function update(Request $request, $id)
    // {
    //     $siteGallery = SiteGallery::find($id);

    //     $request->validate([
    //         'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'status' => 'required|integer|in:0,1',
    //     ]);

    //     if ($request->hasFile('image')) {
    //         $imageName = time() . '.' . $request->image->extension();
    //         $request->image->move(public_path('images'), $imageName);
    //         $siteGallery->update([
    //             'image' => $imageName,
    //             'status' => $request->status,
    //         ]);
    //     } else {
    //         $siteGallery->update($request->only(['status']));
    //     }

    //     return redirect()->route('vendor_site_gallery.index')
    //         ->with('success', 'Image updated successfully.');
    // }

    public function update(Request $request, $id)
    {
        $siteGallery = GalleryAlbum::with('images')->find($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $siteGallery->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . rand(1, 100) . '.' . $image->extension();
                $image->move(public_path('images'), $imageName);

                SiteGallery::create([
                    'user_id' => Auth::id(),
                    'image' => $imageName,
                    'album' => $siteGallery->id,
                ]);
            }
        }

        // Delete selected images
        if ($request->has('delete_images')) {
            foreach ($request->delete_images as $imageId) {
                $image = SiteGallery::find($imageId);
                if ($image) {
                    // Optionally delete the image file from storage
                    $imagePath = public_path('images/' . $image->image);
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                    $image->delete();
                }
            }
        }

        return redirect()->route('vendor_site_gallery.index')
            ->with('success', 'Album updated successfully.');
    }

    public function destroy($id)
    {
        $siteGallery = SiteGallery::find($id);
        if ($siteGallery->image) {
            unlink(public_path('images/' . $siteGallery->image));
        }

        $siteGallery->delete();

        return redirect()->route('vendor_site_gallery.index')
            ->with('success', 'Image deleted successfully.');
    }
}
