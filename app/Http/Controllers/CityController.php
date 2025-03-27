<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;

class CityController extends Controller
{
    use ImageTrait;
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
        $airportImageName = $this->uploadImage($request->file('airport'), 'images/airport/carnivalImages');
        $data['airport'] = 'images/airport/carnivalImages/' . $airportImageName;

        $hotelImageName = $this->uploadImage($request->file('hotel'), 'images/hotel/carnivalImages');
        $data['hotel'] = 'images/hotel/carnivalImages/' . $hotelImageName;

        $eventImageName = $this->uploadImage($request->file('event'), 'images/event/carnivalImages');
        $data['event'] = 'images/event/carnivalImages/' . $eventImageName;

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
        $data = $request->except(['_token', '_method']);
        if ($request->hasFile('airport')) {
            $airportImageName = $this->uploadImage($request->file('airport'), 'images/airport/carnivalImages');
            $data['airport'] = 'images/airport/carnivalImages/' . $airportImageName;
        }
        if ($request->hasFile('hotel')) {
            $hotelImageName = $this->uploadImage($request->file('hotel'), 'images/hotel/carnivalImages');
            $data['hotel'] = 'images/hotel/carnivalImages/' . $hotelImageName;
        }
        if ($request->hasFile('event')) {
            $eventImageName = $this->uploadImage($request->file('event'), 'images/event/carnivalImages');
            $data['event'] = 'images/event/carnivalImages/' . $eventImageName;
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
