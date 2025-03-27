<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::with('country')->get();
        return view('dashboard.admin.cities.index', compact('cities'));
    }

    public function create()
    {
        $countries = Country::all();
        return view('dashboard.admin.cities.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'country_id' => 'required|exists:country,id',
            'airport' => 'required|mimes:jpeg,png,jpg,gif,mp4,avi,mov,wmv|max:101200',
            'hotel' => 'required|mimes:jpeg,png,jpg,gif,mp4,avi,mov,wmv|max:101200',
            'event' => 'required|mimes:jpeg,png,jpg,gif,mp4,avi,mov,wmv|max:101200',
        ]);
        $data = $request->except(['_token']);;
        $airport = $request->airport;
        $airportImageName = time() . '.' . $airport->extension();
        $airport->move(public_path('images/airport/carnivalImages'), $airportImageName);
        $data['airport'] = $airportImageName;

        $hotel = $request->hotel;
        $hotelImageName = time() . '.' . $hotel->extension();
        $hotel->move(public_path('images/hotel/carnivalImages'), $hotelImageName);
        $data['hotel'] = $hotelImageName;

        $event = $request->event;
        $eventImageName = time() . '.' . $event->extension();
        $event->move(public_path('images/event/carnivalImages'), $eventImageName);
        $data['event'] = $eventImageName;

        City::create($data);

        return redirect()->route('cities.index')
            ->with('success', 'City created successfully.');
    }

    public function show(City $city)
    {
        return view('dashboard.admin.cities.show', compact('city'));
    }

    public function edit(City $city)
    {
        $countries = Country::all();
        return view('dashboard.admin.cities.edit', compact('city', 'countries'));
    }

    public function update(Request $request, City $city)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'country_id' => 'required|exists:country,id',
            // 'airport' => 'required|mimes:jpeg,png,jpg,gif,mp4,avi,mov,wmv|max:101200',
            // 'hotel' => 'required|mimes:jpeg,png,jpg,gif,mp4,avi,mov,wmv|max:101200',
            // 'event' => 'required|mimes:jpeg,png,jpg,gif,mp4,avi,mov,wmv|max:101200',
        ]);
        $data = $request->except(['_token','_method']);
        if($request->hasFile('airport'))
        {
            $airport = $request->airport;
            $airportImageName = time() . '.' . $airport->extension();
            $airport->move(public_path('images/airport/carnivalImages'), $airportImageName);
            $data['airport'] = $airportImageName;
        }
        if($request->hasFile('hotel'))
        {
            $hotel = $request->hotel;
            $hotelImageName = time() . '.' . $hotel->extension();
            $hotel->move(public_path('images/hotel/carnivalImages'), $hotelImageName);
            $data['hotel'] = $hotelImageName;
        }
        if($request->hasFile('event'))
        {
            $event = $request->event;
            $eventImageName = time() . '.' . $event->extension();
            $event->move(public_path('images/event/carnivalImages'), $eventImageName);
            $data['event'] = $eventImageName;
        }
        $city->update($data);

        return redirect()->route('cities.index')
            ->with('success', 'City updated successfully.');
    }

    public function destroy(City $city)
    {
        $city->delete();

        return redirect()->route('cities.index')
            ->with('success', 'City deleted successfully.');
    }
}
