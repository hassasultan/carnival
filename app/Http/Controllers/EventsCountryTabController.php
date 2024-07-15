<?php

namespace App\Http\Controllers;

use App\Models\EventsCountryTab;
use App\Models\Event;
use App\Models\Country;
use App\Models\City;
use Illuminate\Http\Request;

class EventsCountryTabController extends Controller
{
    public function index()
    {
        $eventsCountryTabs = EventsCountryTab::with('event', 'country', 'city')->get();
        return view('dashboard.admin.events_country_tabs.index', compact('eventsCountryTabs'));
    }

    public function create()
    {
        $events = Event::all();
        $countries = Country::all();
        return view('dashboard.admin.events_country_tabs.create', compact('events', 'countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
            'country_id' => 'required|exists:country,id',
            'city_id' => 'required|exists:city,id',
            'tab' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:jpeg,png,jpg,gif,mp4,mov,avi',
            'content' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('file')) {
            $fileName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('files'), $fileName);
            $file = $request->file('file');
            // $path = $file->store('files', 'public');
            $data['file'] = $fileName;

            // Determine the file type
            if (str_starts_with($file->getClientMimeType(), 'image/')) {
                $data['file_type'] = 'image';
            } elseif (str_starts_with($file->getClientMimeType(), 'video/')) {
                $data['file_type'] = 'video';
            } else {
                $data['file_type'] = 'other';
            }
        }

        EventsCountryTab::create($data);

        return redirect()->route('events_country_tabs.index')
            ->with('success', 'Event Country Tab created successfully.');
    }

    public function show(EventsCountryTab $eventsCountryTab)
    {
        return view('dashboard.admin.events_country_tabs.show', compact('eventsCountryTab'));
    }

    public function edit(EventsCountryTab $eventsCountryTab)
    {
        $events = Event::all();
        $countries = Country::all();
        $cities = City::where('country_id', $eventsCountryTab->country_id)->get();
        return view('dashboard.admin.events_country_tabs.edit', compact('eventsCountryTab', 'events', 'countries', 'cities'));
    }

    public function update(Request $request, EventsCountryTab $eventsCountryTab)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
            'country_id' => 'required|exists:country,id',
            'city_id' => 'required|exists:city,id',
            'tab' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:jpeg,png,jpg,gif,mp4,mov,avi',
            'content' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('file')) {
            $fileName = time() . '.' . $request->file->extension();
            $request->file->move(public_path('files'), $fileName);
            $file = $request->file('file');
            // $path = $file->store('files', 'public');
            $data['file'] = $fileName;

            // Determine the file type
            if (str_starts_with($file->getClientMimeType(), 'image/')) {
                $data['file_type'] = 'image';
            } elseif (str_starts_with($file->getClientMimeType(), 'video/')) {
                $data['file_type'] = 'video';
            } else {
                $data['file_type'] = 'other';
            }
        }

        $eventsCountryTab->update($data);

        return redirect()->route('events_country_tabs.index')
            ->with('success', 'Event Country Tab updated successfully.');
    }

    public function destroy(EventsCountryTab $eventsCountryTab)
    {
        $eventsCountryTab->delete();

        return redirect()->route('events_country_tabs.index')
            ->with('success', 'Event Country Tab deleted successfully.');
    }
    public function getCitiesByCountry($country_id)
    {
        $cities = City::where('country_id', $country_id)->get();
        return response()->json($cities);
    }

}
