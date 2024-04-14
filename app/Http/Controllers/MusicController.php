<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class MusicController extends Controller
{
    public function index()
    {
        $musics = Music::all();
        return view('dashboard.admin.musics.index', compact('musics'));
    }

    public function store(Request $request)
    {
        // Create new music record using AJAX request data
        $music = Music::create($request->all());
        return response()->json(['message' => 'Music created successfully', 'music' => $music]);
    }

    public function update(Request $request, $id)
    {
        // Update existing music record using AJAX request data
        $music = Music::findOrFail($id);
        $music->update($request->all());
        return response()->json(['message' => 'Music updated successfully', 'music' => $music]);
    }

    public function destroy($id)
    {
        // Delete music record
        $music = Music::findOrFail($id);
        $music->delete();
        return response()->json(['message' => 'Music deleted successfully']);
    }
}
