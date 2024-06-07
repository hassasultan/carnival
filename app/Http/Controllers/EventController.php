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
use App\Services\EventService;
use App\Traits\ImageTrait;
use App\Traits\MultipleImageTrait;

class EventController extends Controller
{
    protected $eventService;

    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }

    public function index(Request $request)
    {
        $packages = Package::all();
        $ticktes = Ticket::all();
        $categories = Category::where('type','events')->get();
        $show_events = Event::with("category","package");
        if($request->has('search') && $request->search != null && $request->search != '')
        {
            $show_events = $show_events->where('name','LIKE','%'.$request->search.'%')->orWhere('eventType','LIKE','%'.$request->search.'%')
            ->orWhere('start_date','LIKE','%'.$request->search.'%')
            ->orWhere('start_time','LIKE','%'.$request->search.'%')
            ->orWhere('end_date','LIKE','%'.$request->search.'%')
            ->orWhere('end_time','LIKE','%'.$request->search.'%')
            ->orWhereHas('category',function($query) use ($request) {
                $query->where('title','LIKE','%'.$request->search.'%');
            });
        }
        $show_events = $show_events->paginate(10);
        if($request->has("type"))
        {
            return $show_events;
        }
        $events = Event::all(['id', 'name', 'start_date', 'end_date']);
        return view('dashboard.admin.events.index', compact('packages', 'categories', 'events', 'ticktes'));
    }

    public function create()
    {
        $packages = Package::all();
        $categories = Category::all();
        return view('dashboard.admin.events.create', compact('packages', 'categories'));
    }

    public function store(Request $request)
    {
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
        ]);

        $request['user_id'] = Auth::id();
        if ($request->has('all_day')) {
            $request['all_day'] = $request->all_day ? 1 : 0;
        }
        $event = $this->eventService->createEvent($request->all());

        return response()->json(['success' => 'Event created successfully.', 'event' => $event]);
    }

    public function edit(Event $event)
    {
        $event->load('user', 'category', 'package');

        $packages = Package::all();
        $categories = Category::all();
        return response()->json(['event' => $event, 'packages' => $packages, 'categories' => $categories]);
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'package_id' => 'required|exists:packages,id',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        $event = $this->eventService->updateEvent($event, $request->all());

        return redirect()->route('events.index')
            ->with('success', 'Event updated successfully.');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')
            ->with('success', 'Event deleted successfully.');
    }

    public function getCategories($packageId)
    {
        $categories = Category::where('package_id', $packageId)->get();
        return response()->json($categories);
    }
}
