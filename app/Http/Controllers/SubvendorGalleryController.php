<?php

namespace App\Http\Controllers;

use App\Models\SiteGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubvendorGalleryController extends Controller
{
    public function index()
    {
        $siteGalleries = SiteGallery::where('user_id', Auth::id())->get();
        return view('dashboard.subVendor.site_gallery.index', compact('siteGalleries'));
    }

    public function create()
    {
        return view('dashboard.subVendor.site_gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer|in:0,1',
        ]);
        // dd($request->toArray(), 'ok');

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . rand(1, 100) . '.' . $image->extension();
                $image->move(public_path('images'), $imageName);

                SiteGallery::create([
                    'user_id' => Auth::id(),
                    'image' => $imageName,
                    'status' => $request->status,
                ]);
            }
        }

        return redirect()->route('subvendor_site_gallery.index')
            ->with('success', 'Images added successfully.');
    }

    public function show($id)
    {
        $siteGallery = SiteGallery::find($id);
        return view('dashboard.subVendor.site_gallery.show', compact('siteGallery'));
    }

    public function edit($id)
    {
        $siteGallery = SiteGallery::find($id);
        return view('dashboard.subVendor.site_gallery.edit', compact('siteGallery'));
    }

    public function update(Request $request, $id)
    {
        $siteGallery = SiteGallery::find($id);

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer|in:0,1',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $siteGallery->update([
                'image' => $imageName,
                'status' => $request->status,
            ]);
        } else {
            $siteGallery->update($request->only(['status']));
        }

        return redirect()->route('subvendor_site_gallery.index')
            ->with('success', 'Image updated successfully.');
    }

    public function destroy($id)
    {
        $siteGallery = SiteGallery::find($id);
        if ($siteGallery->image) {
            unlink(public_path('images/' . $siteGallery->image));
        }

        $siteGallery->delete();

        return redirect()->route('subvendor_site_gallery.index')
            ->with('success', 'Image deleted successfully.');
    }
}
