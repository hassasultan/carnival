<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
use App\Models\Event;
use App\Models\MusicImage;
use App\Traits\ImageTrait;

class MusicController extends Controller
{
    use ImageTrait;
    public function index()
    {
        $musics = Music::with('images')->get();
        $events = Event::all();
        return view('dashboard.admin.musics.index', compact('musics', 'events'));
    }

    public function store(Request $request)
    {
        $data = $request->except(['cover_image', 'images', 'video']);

        $coverImage = $this->uploadImage($request->file('cover_image'), 'covers');

        $video = $this->uploadImage($request->file('video'), 'videos');

        $data['cover_image'] = $coverImage;
        $data['video'] = $video;

        $music = Music::create($data);

        // Upload multiple images and associate with the music
        foreach ($request->file('images') as $image) {
            $imagePath = $this->uploadImage($image, 'images');
            $musicImage = MusicImage::create([
                'music_id' => $music->id,
                'image' => $imagePath
            ]);
            $music->images()->save($musicImage);
        }
        if ($music) {
            $musics = Music::all();
            $view = view('dashboard.admin.musics.table', compact('musics'))->render();

            return response()->json(['message' => 'Music created successfully', 'table_html' => $view], 200);
        } else {
            return response()->json(['error' => 'Failed to create Music'], 500);
        }
    }
    public function update(Request $request, $id)
    {
        $data = $request->except(['cover_image', 'images', 'video']);

        $music = Music::findOrFail($id);

        if ($request->hasFile('cover_image')) {
            $this->deleteImage($music->cover_image);
            $data['cover_image'] = $this->uploadImage($request->file('cover_image'), 'covers');
        }

        if ($request->hasFile('video')) {
            $this->deleteImage($music->video);
            $data['video'] = $this->uploadImage($request->file('video'), 'videos');
        }

        // Upload and update multiple images
        if ($request->hasFile('images')) {
            $music->images()->delete(); // Delete existing images
            foreach ($request->file('images') as $image) {
                $imagePath = $this->uploadImage($image, 'images');
                $musicImage = MusicImage::create([
                    'music_id' => $music->id,
                    'image' => $imagePath
                ]);
                $music->images()->save($musicImage);
            }
        }

        $music->update($data);

        return response()->json(['message' => 'Music updated successfully', 'music' => $music]);
    }
    public function destroy($id)
    {
        // Delete music record
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
