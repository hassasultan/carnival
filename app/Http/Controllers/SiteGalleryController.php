<?php
namespace App\Http\Controllers;

use App\Models\SiteGallery;
use Illuminate\Http\Request;

class SiteGalleryController extends Controller
{
    public function index()
    {
        $siteGalleries = SiteGallery::all();
        return view('dashboard.admin.site_gallery.index', compact('siteGalleries'));
    }

    public function create()
    {
        return view('dashboard.admin.site_gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer|in:0,1',
        ]);

        if($request->hasfile('images')) {
            foreach($request->file('images') as $image) {
                $imageName = time().rand(1,100).'.'.$image->extension();
                $image->move(public_path('images'), $imageName);

                SiteGallery::create([
                    'image' => $imageName,
                    'status' => $request->status,
                ]);
            }
        }

        return redirect()->route('site_gallery.index')
                         ->with('success', 'Images added successfully.');
    }

    public function show(SiteGallery $siteGallery)
    {
        return view('dashboard.admin.site_gallery.show', compact('siteGallery'));
    }

    public function edit(SiteGallery $siteGallery)
    {
        return view('dashboard.admin.site_gallery.edit', compact('siteGallery'));
    }

    public function update(Request $request, SiteGallery $siteGallery)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer|in:0,1',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $siteGallery->update([
                'image' => $imageName,
                'status' => $request->status,
            ]);
        } else {
            $siteGallery->update($request->only(['status']));
        }

        return redirect()->route('site_gallery.index')
                         ->with('success', 'Image updated successfully.');
    }

    public function destroy(SiteGallery $siteGallery)
    {
        if ($siteGallery->image) {
            unlink(public_path('images/'.$siteGallery->image));
        }
        
        $siteGallery->delete();

        return redirect()->route('site_gallery.index')
                         ->with('success', 'Image deleted successfully.');
    }
}

