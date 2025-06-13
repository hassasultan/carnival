<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use App\Models\Package;
use App\Models\Category;
use App\Models\EventTicket;
use App\Models\EventImage;
use App\Models\Vendor;
use App\Models\Country;
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
        $categories = Category::where('type', 'events')->get();
        $show_events = Event::with("category", "package");
        if ($request->has('search') && $request->search != null && $request->search != '') {
            $show_events = $show_events->where('name', 'LIKE', '%' . $request->search . '%')->orWhere('eventType', 'LIKE', '%' . $request->search . '%')
                ->orWhere('start_date', 'LIKE', '%' . $request->search . '%')
                ->orWhere('start_time', 'LIKE', '%' . $request->search . '%')
                ->orWhere('end_date', 'LIKE', '%' . $request->search . '%')
                ->orWhere('end_time', 'LIKE', '%' . $request->search . '%')
                ->orWhereHas('category', function ($query) use ($request) {
                    $query->where('title', 'LIKE', '%' . $request->search . '%');
                });
        }
        // $show_events = $show_events->orderBy('id', 'DESC')->paginate(10);
        
        
        if (Auth::user()->isAdmin()) {
            $show_events = $show_events->orderBy('id', 'DESC')->paginate(10);
            $events = Event::all(['id', 'name', 'start_date', 'end_date']);
        } else {
            $show_events = $show_events->where('user_id', Auth::id())->orderBy('id', 'DESC')->paginate(10);
            $events = Event::where('user_id', Auth::id())->get(['id', 'name', 'start_date', 'end_date']);
        }
        if ($request->has("type")) {
            return $show_events;
        }

        $layout = match (Auth::user()->role->name) {
            'Admin' => 'dashboard.admin.layouts.app',
            'Vendor' => 'dashboard.vendor.layouts.app',
            'SubVendor' => 'dashboard.subVendor.layouts.app',
        };

        return view('dashboard.admin.events.index', compact('packages', 'categories', 'events', 'ticktes', 'layout'));
    }

    public function create()
    {
        $packages = Package::all();
        $ticktes = Ticket::all();
        $countries = Country::all();
        $categories = Category::where('type', 'events')->get();
        $show_events = Event::with("category", "package");
        $events = Event::all(['id', 'name', 'start_date', 'end_date']);
        $vendors = Vendor::WhereHas('user', function ($query) {
            $query->where('status', 1);
        })->get();
        
        $layout = match (Auth::user()->role->name) {
            'Admin' => 'dashboard.admin.layouts.app',
            'Vendor' => 'dashboard.vendor.layouts.app',
            'SubVendor' => 'dashboard.subVendor.layouts.app',
        };

        return view('dashboard.admin.events.create', compact('packages', 'categories', 'ticktes', 'show_events', 'events', 'vendors', 'countries', 'layout'));
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
            'location' => 'required|string',
            'dress_code' => 'nullable|array',
            'dress_code.*' => 'nullable|string|max:255',
            'ticket_id' => 'required|array',
            'ticket_id.*' => 'exists:tickets,id',
            'description' => 'nullable|string',
            'eventType' => 'required|in:private,public',
            'start_date' => 'nullable|date',
            'start_time' => 'nullable',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            // 'end_time' => 'nullable|after:start_time',
            'all_day' => 'nullable',
            'status' => 'required|in:active,inactive',
        ]);

        $request['user_id'] = request()->has('user_id') ? request('user_id') : Auth::id();
        // $request['user_id'] = Auth::id();

        $request['booking_start_time_btn'] = $request->has('booking-start-time-btn') ? 1 : 0;
        $request['booking_end_time_btn'] = $request->has('booking-end-time-btn') ? 1 : 0;
        $request['passing_service_charge_btn'] = $request->has('passing-service-charge-btn') ? 1 : 0;
        $request['refund_policies_btn'] = $request->has('refund-policies-btn') ? 1 : 0;
        $request['ticket_instructions_btn'] = $request->has('ticket-instructions-btn') ? 1 : 0;
        $request['tags_btn'] = $request->has('tags-btn') ? 1 : 0;

        if ($request->has('all_day')) {
            $request['all_day'] = $request->all_day ? 1 : 0;
        }
        $event = $this->eventService->createEvent($request->all());

        // return response()->json(['success' => 'Event created successfully.', 'event' => $event]);
        return redirect()->route('events.index');
    }

    public function edit(Event $event)
    {
        $event->load('user', 'category', 'package');

        $packages = Package::all();
        $categories = Category::all();
        $countries = Country::all();
        
        return response()->json(['event' => $event, 'packages' => $packages, 'categories' => $categories, 'countries' => $countries]);
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
