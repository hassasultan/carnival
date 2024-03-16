<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Package;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    // Display a listing of the events.
    public function index()
    {
        // $events = Event::with('package', 'category')->get();
        $packages = Package::all();
        $categories = Category::all();
        $events = Event::all(['id', 'name', 'created_at']); // Fetch only necessary fields
        return view('dashboard.admin.events.index', compact('packages', 'categories', 'events'));
    }

    // Show the form for creating a new event.
    public function create()
    {
        $packages = Package::all();
        $categories = Category::all();
        return view('dashboard.admin.events.create', compact('packages', 'categories'));
    }

    // Store a newly created event in the database.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'package_id' => 'required|exists:packages,id',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'start_time' => 'nullable|date_format:H:i',
            'end_time' => 'nullable|date_format:H:i|after:start_time',
            'all_day' => 'nullable|boolean',
            'banner' => 'nullable|image|max:2048', // Assuming max file size is 2MB
        ]);

        $data = $request->except('_token', 'banner');
        $data['user_id'] = Auth::id();

        // Upload banner image
        $bannerPath = $request->file('banner')->store('public/banners');
        $data['banner'] = str_replace('public/', 'storage/', $bannerPath);

        Event::create($data);

        return response()->json(['success' => 'Event created successfully.']);
    }


    // Show the form for editing the specified event.
    public function edit(Event $event)
    {
        $packages = Package::all();
        $categories = Category::all();
        return view('dashboard.admin.events.edit', compact('event', 'packages', 'categories'));
    }

    // Update the specified event in the database.
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'package_id' => 'required|exists:packages,id',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive', // Adjust options as needed
            // Add validation rules for other fields here
        ]);

        $event->update($request->all());

        return redirect()->route('events.index')
            ->with('success', 'Event updated successfully.');
    }

    // Remove the specified event from the database.
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')
            ->with('success', 'Event deleted successfully.');
    }
}
