<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdvertisementController extends Controller
{
    public function index()
    {
        $advertisements = Advertisement::all();
        return view('dashboard.admin.advertisements.index', compact('advertisements'));
    }

    public function create()
    {
        return view('dashboard.admin.advertisements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'image' => 'required|mimes:jpeg,png,jpg,gif,mp4,avi,mov,wmv|max:101200',
            'description' => 'required|string',
            'status' => 'required|integer|in:0,1',
            'index' => [
                'required',
                'integer',
                Rule::unique('advertisements', 'index'),
            ],
        ]);

        $existingAd = Advertisement::where('index', $request->index)->first();
        if ($existingAd) {
            return redirect()->back()->withErrors([
                'index' => "The index {$request->index} already exists. <a href='" . route('advertisements.edit', $existingAd->id) . "'>Click here</a> to edit the existing advertisement.",
            ])->withInput();
        }

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Advertisement::create([
            'type' => $request->type,
            'title' => $request->title,
            'image' => $imageName,
            'description' => $request->description,
            'status' => $request->status,
            'index' => $request->index,
        ]);

        return redirect()->route('advertisements.index')->with('success', 'Advertisement created successfully.');
    }

    public function show(Advertisement $advertisement)
    {
        return view('dashboard.admin.advertisements.show', compact('advertisement'));
    }

    public function edit(Advertisement $advertisement)
    {
        return view('dashboard.admin.advertisements.edit', compact('advertisement'));
    }

    public function update(Request $request, Advertisement $advertisement)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'image' => 'required|mimes:jpeg,png,jpg,gif,mp4,avi,mov,wmv|max:101200',
            'description' => 'required|string',
            'status' => 'required|integer|in:0,1',
            'index' => [
                'required',
                'integer',
                Rule::unique('advertisements', 'index')->ignore($advertisement->id),
            ],
        ]);

        $existingAd = Advertisement::where('index', $request->index)->where('id', '!=', $advertisement->id)->first();
        if ($existingAd) {
            return redirect()->back()->withErrors([
                'index' => "The index {$request->index} already exists. <a href='" . route('advertisements.edit', $existingAd->id) . "'>Click here</a> to edit the existing advertisement.",
            ])->withInput();
        }

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $advertisement->update([
                'type' => $request->type,
                'title' => $request->title,
                'image' => $imageName,
                'description' => $request->description,
                'index' => $request->index,
                'status' => $request->status,
            ]);
        } else {
            $advertisement->update($request->only(['type', 'title', 'description', 'status', 'index']));
        }

        return redirect()->route('advertisements.index')->with('success', 'Advertisement updated successfully.');
    }

    public function destroy(Advertisement $advertisement)
    {
        if ($advertisement->image) {
            unlink(public_path('images/' . $advertisement->image));
        }

        $advertisement->delete();

        return redirect()->route('advertisements.index')
            ->with('success', 'Advertisement deleted successfully.');
    }
}
