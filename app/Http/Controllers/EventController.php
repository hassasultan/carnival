<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use App\Models\Package;
use App\Models\Category;
use App\Models\EventTicket;
use App\Models\EventImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\ImageTrait;
use App\Traits\MultipleImageTrait;

class EventController extends Controller
{
    use ImageTrait, MultipleImageTrait;
    // Display a listing of the events.
    public function index()
    {
        // $events = Event::with('package', 'category')->get();
        $packages = Package::all();
        $ticktes = Ticket::all();
        $categories = Category::all();
        $events = Event::all(['id', 'name', 'start_date', 'end_date']); // Fetch only necessary fields
        return view('dashboard.admin.events.index', compact('packages', 'categories', 'events', 'ticktes'));
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
        // dd($request->toArray());
        $request->validate([
            'name' => 'required|string|max:255',
            'package_id' => 'required|exists:packages,id',
            'category_id' => 'required|exists:categories,id',
            'total_no_of_tickets' => 'required|integer|min:1',
            'venue' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'dress_code' => 'nullable|array',
            'dress_code.*' => 'nullable|string|max:255',
            'ticket_id' => 'required|array',
            'ticket_id.*' => 'exists:tickets,id',
            'description' => 'nullable|string',
            'eventType' => 'required|in:private,public',
            'start_date' => 'nullable|date',
            'start_time' => 'nullable',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'end_time' => 'nullable|after:start_time',
            'all_day' => 'nullable',
            'status' => 'required|in:active,inactive',
            // 'promotional_Video' => 'nullable|file|mimes:mp4,mov,avi',
            // 'banner' => 'nullable|image|max:2048',
            // 'additional_images.*' => 'nullable|image|max:2048',
        ]);

        // Handle banner image upload
        $bannerPath = null;
        if ($request->hasFile('banner')) {
            $bannerPath = $this->uploadImage($request->file('banner'), 'banners');
        }
        // @if ($bannerPath)
        //     <img src="{{ asset('storage/' . $bannerPath) }}" alt="Banner">
        // @endif

        // Handle promotional video upload
        $videoPath = null;
        if ($request->hasFile('promotional_video')) {
            $videoPath = $this->uploadImage($request->file('promotional_video'), 'videos');
        }
        // @if ($videoPath)
        //     <video controls>
        //         <source src="{{ asset('storage/' . $videoPath) }}" type="video/mp4">
        //         Your browser does not support the video tag.
        //     </video>
        // @endif

        $data = $request->except('_token', 'banner', 'ticket_id', 'promotional_video', 'dress_code', 'additional_images', 'price', 'quantity');
        $data['user_id'] = Auth::id();
        $data['banner'] = $bannerPath;
        $data['promotional_video'] = $videoPath;

        // Handle dress code
        if ($request->has('dress_code')) {
            $data['dress_code'] = implode(',', $request->dress_code);
        }
        if ($request->has('all_day')) {
            $data['all_day'] = $request->all_day ? 1 : 0;
        }


        // Save event data
        $event = Event::create($data);

        // Handle additional images
        $additionalImagePaths = [];
        if ($request->hasFile('additional_images')) {
            $additionalImagePaths = $this->uploadMultipleImages($request->file('additional_images'), 'additional_images');
            foreach ($additionalImagePaths as $additionalImage) {
                EventImage::create([
                    'event_id' => $event->id,
                    'image_url' => $additionalImage['path'],
                    'image_name' => $additionalImage['original_name'],
                ]);
            }
        }
        // @foreach ($additionalImagePaths as $additionalImage)
        //     <img src="{{ asset('storage/' . $additionalImage['path']) }}" alt="{{ $additionalImage['original_name'] }}">
        // @endforeach

        // Save the event ticket details
        foreach ($request->ticket_id as $key => $ticketId) {
            $eventTicketData = [
                'ticket_id' => $ticketId,
                'event_id' => $event->id,
                'price' => $request->price[$key],
                'quantity' => $request->quantity[$key],
                'status' => 1,
            ];
            EventTicket::create($eventTicketData);
        }


        return response()->json(['success' => 'Event created successfully.', 'event' => $event]);
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
