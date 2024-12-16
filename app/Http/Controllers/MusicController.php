<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
use App\Models\Event;
use App\Models\MusicImage;
use App\Models\User;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MusicController extends Controller
{
    use ImageTrait;
    public function index()
    {
        if (Auth::user()->isAdmin()) {
            // dd('ok');
            $musics = Music::with('imagesRelation')->get();
        } else {
            $musics = Music::with('imagesRelation')->where('user_id', Auth::id())->get();
        }

        $layout = match (Auth::user()->role->name) {
            'Admin' => 'dashboard.admin.layouts.app',
            'Vendor' => 'dashboard.vendor.layouts.app',
            'SubVendor' => 'dashboard.subvendor.layouts.app',
        };

        $events = Event::all();
        return view('dashboard.admin.musics.index', compact('layout', 'musics', 'events'));
    }

    public function create()
    {
        $users = '';
        if (Auth::user()->isAdmin()) {
            $users = User::whereHas('vendor.package', function ($query) {
                $query->where('title', 'Artistes');
            })->orWhereHas('subVendor.package', function ($query) {
                $query->where('title', 'Artistes');
            })->get();
        }
        // if (Auth::user()->isAdmin()) {
        //     return view('dashboard.admin.musics.create');
        // } elseif (Auth::user()->isVendor()) {
        //     return view('dashboard.vendor.musics.create');
        // } elseif (Auth::user()->isSubVendor()) {
        //     return view('dashboard.subVendor.musics.create');
        // }
        $layout = match (Auth::user()->role->name) {
            'Admin' => 'dashboard.admin.layouts.app',
            'Vendor' => 'dashboard.vendor.layouts.app',
            'SubVendor' => 'dashboard.subvendor.layouts.app',
        };

        // dd($layout);

        return view('dashboard.admin.musics.create', compact('layout', 'users'));
    }

    public function store(Request $request)
    {
        dd($request->toArray());
        $data = $request->except(['cover_image', 'images', 'video']);

        $coverImage = $this->uploadImage($request->file('cover_image'), 'covers');

        if (isset($request->user_id) && $request->user_id != null) {
            $data['user_id'] = $request->user_id;
        } else {

            $data['user_id'] = Auth::id();
        }

        $data['cover_image'] = $coverImage;

        $music = Music::create($data);

        foreach ($request->images as $key => $imageFile) {
            $imagePath = $imageFile->store('uploads/images', 'public');
            $videoPath = $request->video[$key]->store('uploads/videos', 'public');

            $imageUrl = asset('storage/' . $imagePath);
            $videoUrl = asset('storage/' . $videoPath);

            MusicImage::create([
                'image' => $imageUrl,
                'document' => $videoUrl,
                'music_id' => $music->id,
            ]);
        }

        if ($music) {
            $musics = Music::all();
            $view = view('dashboard.admin.musics.table', compact('musics'))->render();

            $route = match (Auth::user()->role->name) {
                'Admin' => route('musics.index'),
                'Vendor' => route('vendor.musics.index'),
                'SubVendor' => route('subvendor.musics.index'),
            };

            return redirect()->route($route)->with(['message' => 'Music created successfully', 'table_html' => $view], 200);
        } else {
            return response()->json(['error' => 'Failed to create Music'], 500);
        }
    }

    public function edit($id)
    {
        $music = Music::with('imagesRelation')->find($id);
        return view('dashboard.admin.musics.edit', compact('music'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except(['cover_image', 'images', 'video']);

        $music = Music::findOrFail($id);

        if ($request->hasFile('cover_image')) {
            $this->deleteImage($music->cover_image);
            $data['cover_image'] = $this->uploadImage($request->file('cover_image'), 'covers');
        }

        if (isset($request->user_id) && $request->user_id != null) {
            $data['user_id'] = $request->user_id;
        } else {
            $data['user_id'] = Auth::id();
        }

        // Update music details
        $music->update($data);

        // Handle images and videos
        if ($request->hasFile('images') && $request->hasFile('video')) {
            // Delete existing MusicImage records
            MusicImage::where('music_id', $music->id)->delete();

            foreach ($request->file('images') as $key => $imageFile) {
                $imagePath = $imageFile->store('uploads/images', 'public');
                $videoPath = $request->file('video')[$key]->store('uploads/videos', 'public');

                $imageUrl = asset('storage/' . $imagePath);
                $videoUrl = asset('storage/' . $videoPath);

                MusicImage::create([
                    'image' => $imageUrl,
                    'document' => $videoUrl,
                    'music_id' => $music->id,
                ]);
            }
        }

        return response()->json(['message' => 'Music updated successfully', 'music' => $music]);
    }

    // public function update(Request $request, $id)
    // {
    //     $data = $request->except(['cover_image', 'images', 'video']);

    //     $music = Music::findOrFail($id);

    //     if ($music->user_id == null) {
    //         $data['user_id'] = Auth::id();
    //     }

    //     if ($request->hasFile('cover_image')) {
    //         $this->deleteImage($music->cover_image);
    //         $data['cover_image'] = $this->uploadImage($request->file('cover_image'), 'covers');
    //     }

    //     if ($request->hasFile('video')) {
    //         $this->deleteImage($music->video);
    //         $data['video'] = $this->uploadImage($request->file('video'), 'videos');
    //     }

    //     if ($request->hasFile('images')) {
    //         $music->imagesRelation()->delete();
    //         foreach ($request->file('images') as $image) {
    //             $imagePath = $this->uploadImage($image, 'images');
    //             $musicImage = MusicImage::create([
    //                 'music_id' => $music->id,
    //                 'image' => $imagePath
    //             ]);
    //             $music->imagesRelation()->save($musicImage);
    //         }
    //     }

    //     $music->update($data);

    //     return response()->json(['message' => 'Music updated successfully', 'music' => $music]);
    // }
    public function destroy($id)
    {
        $music = Music::findOrFail($id);
        $music->delete();

        if ($music) {
            $musics = Music::all();
            $view = view('dashboard.admin.musics.table', compact('musics'))->render();

            return response()->json(['message' => 'Music deleted successfully', 'table_html' => $view], 200);
        } else {
            return response()->json(['error' => 'Failed to delete Music'], 500);
        }
    }
}
