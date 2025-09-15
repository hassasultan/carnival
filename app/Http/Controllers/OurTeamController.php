<?php

namespace App\Http\Controllers;

use App\Models\OurTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OurTeamController extends Controller
{
    public function index()
    {
        $teamMembers = OurTeam::all();
        return view('dashboard.admin.our_team.index', compact('teamMembers'));
    }

    public function create()
    {
        return view('dashboard.admin.our_team.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'facebook' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'skype' => 'nullable|string|max:255',
            'google' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('ourTeam'), $fileName);
            $file = $request->file('image');
            $validatedData['image'] = $fileName;
        }

        OurTeam::create($validatedData);

        return redirect()->route('our-team.index')->with('success', 'Team member added successfully.');
    }

    public function show($id)
    {
        $teamMember = OurTeam::findOrFail($id);
        return view('dashboard.admin.our_team.show', compact('teamMember'));
    }

    public function edit($id)
    {
        $teamMember = OurTeam::findOrFail($id);
        return view('dashboard.admin.our_team.edit', compact('teamMember'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'facebook' => 'nullable|string|max:255',
                'twitter' => 'nullable|string|max:255',
                'skype' => 'nullable|string|max:255',
                'google' => 'nullable|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $teamMember = OurTeam::findOrFail($id);

            // Handle image upload
            if ($request->hasFile('image')) {
                // Delete old image if exists
                if ($teamMember->image) {
                    Storage::delete($teamMember->image);
                }

                // Store new image
                $fileName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('ourTeam'), $fileName);
                $file = $request->file('image');
                $validatedData['image'] = $fileName;
            }

            $teamMember->update($validatedData);

            return redirect()->route('our-team.index')->with('success', 'Team member updated successfully.');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function destroy($id)
    {
        $teamMember = OurTeam::findOrFail($id);

        // Delete image if exists
        if ($teamMember->image) {
            Storage::delete($teamMember->image);
        }

        $teamMember->delete();

        return redirect()->route('our-team.index')->with('success', 'Team member deleted successfully.');
    }
}
