<?php
namespace App\Http\Controllers;

use App\Models\GalleryAlbum;
use App\Models\SiteGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SiteGalleryController extends Controller
{
    public function index()
    {
        $siteGalleries = GalleryAlbum::orderBy('DESC','id')->paginate(10);
        // $siteGalleries = SiteGallery::all();
        return view('dashboard.admin.site_gallery.index', compact('siteGalleries'));
    }

    public function create()
    {
        return view('dashboard.admin.site_gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            // 'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images.*' => 'required|mimes:jpeg,png,jpg,gif,svg,mp4,mkv,avi,webm,mp3,wav,aac,flac,ogg|max:20480',
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

            return redirect()->route('site_gallery.index')
                ->with('success', 'Images added successfully.');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('site_gallery.index')
                ->with('error', 'Failed to add images: ' . $e->getMessage());
        }
    }

    public function show(SiteGallery $siteGallery)
    {
        return view('dashboard.admin.site_gallery.show', compact('siteGallery'));
    }

    public function edit(GalleryAlbum $siteGallery)
    {
        $siteGallery->load('images');
        return view('dashboard.admin.site_gallery.edit', compact('siteGallery'));
    }

    public function update(Request $request, GalleryAlbum $siteGallery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            // 'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images.*' => 'required|mimes:jpeg,png,jpg,gif,svg,mp4,mkv,avi,webm,mp3,wav,aac,flac,ogg|max:20480',
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

        return redirect()->route('site_gallery.index')
            ->with('success', 'Album updated successfully.');
    }

    public function destroy(SiteGallery $siteGallery)
    {
        if ($siteGallery->image) {
            unlink(public_path('images/' . $siteGallery->image));
        }

        $siteGallery->delete();

        return redirect()->route('site_gallery.index')
            ->with('success', 'Image deleted successfully.');
    }
}

