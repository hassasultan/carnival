<?php

namespace App\Http\Controllers;

use App\Models\EventsCountryTab;
use App\Models\Event;
use App\Models\Country;
use App\Models\City;
use App\Models\Carnival;
use Exception;
use Illuminate\Http\Request;

class EventsCountryTabController extends Controller
{
    public function index()
    {
        $eventsCountryTabs = EventsCountryTab::with('carnival', 'country', 'city')->orderBy('placement')->get();
        return view('dashboard.admin.events_country_tabs.index', compact('eventsCountryTabs'));
    }

    public function create()
    {
        $carnivals = Carnival::all();
        $countries = Country::all();
        return view('dashboard.admin.events_country_tabs.create', compact('carnivals', 'countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'carnival_id' => 'required|exists:carnivals,id',
            'country_id' => 'required|exists:country,id',
            'city_id' => 'required|exists:city,id',
            'tab' => 'required|string|max:255',
            'file.*' => 'nullable|file|mimes:jpeg,png,jpg,gif,mp4,mov,avi',
            'content' => 'nullable|string',
            'status' => 'required|boolean',
            'placement' => 'required|integer|unique:events_country_tabs,placement',
        ]);

        try {
            $data = $request->except('file');

            $eventCountryTab = EventsCountryTab::create($data);

            if ($request->hasFile('file')) {
                foreach ($request->file('file') as $file) {
                    $fileName = time() . '-' . uniqid() . '.' . $file->extension();
                    $file->move(public_path('file'), $fileName);

                    $fileType = str_starts_with($file->getClientMimeType(), 'image/') ? 'image' : 'video';

                    $eventCountryTab->images()->create([
                        'file' => $fileName,
                        'file_type' => $fileType,
                    ]);
                }
            }

            return redirect()->route('events_country_tabs.index')
                ->with('success', 'Event Country Tab created successfully.');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'carnival_id' => 'required|exists:carnivals,id',
    //         'country_id' => 'required|exists:country,id',
    //         'city_id' => 'required|exists:city,id',
    //         'tab' => 'required|string|max:255',
    //         'file' => 'nullable|file|mimes:jpeg,png,jpg,gif,mp4,mov,avi',
    //         'content' => 'nullable|string',
    //         'status' => 'required|boolean',
    //         'placement' => 'required|integer|unique:events_country_tabs,placement',
    //     ]);
    //     try {
    //         $data = $request->all();

    //         if ($request->hasFile('file')) {
    //             $fileName = time() . '.' . $request->file->extension();
    //             $request->file->move(public_path('files'), $fileName);
    //             $file = $request->file('file');
    //             // $path = $file->store('files', 'public');
    //             $data['file'] = $fileName;

    //             // Determine the file type
    //             if (str_starts_with($file->getClientMimeType(), 'image/')) {
    //                 $data['file_type'] = 'image';
    //             } elseif (str_starts_with($file->getClientMimeType(), 'video/')) {
    //                 $data['file_type'] = 'video';
    //             } else {
    //                 $data['file_type'] = 'other';
    //             }
    //         }

    //         EventsCountryTab::create($data);

    //         return redirect()->route('events_country_tabs.index')
    //             ->with('success', 'Event Country Tab created successfully.');
    //     } catch (Exception $ex) {
    //         return redirect()->back()->with('error', $ex->getMessage());
    //     }
    // }

    public function show(EventsCountryTab $eventsCountryTab)
    {
        return view('dashboard.admin.events_country_tabs.show', compact('eventsCountryTab'));
    }

    public function edit(EventsCountryTab $eventsCountryTab)
    {
        $carnivals = Carnival::all();
        $countries = Country::all();
        $cities = City::where('country_id', $eventsCountryTab->country_id)->get();
        return view('dashboard.admin.events_country_tabs.edit', compact('eventsCountryTab', 'carnivals', 'countries', 'cities'));
    }

    public function update(Request $request, EventsCountryTab $eventsCountryTab)
    {
        $request->validate([
            'carnival_id' => 'required|exists:carnivals,id',
            'country_id' => 'required|exists:country,id',
            'city_id' => 'required|exists:city,id',
            'tab' => 'required|string|max:255',
            'file.*' => 'nullable|file|mimes:jpeg,png,jpg,gif,mp4,mov,avi',
            'content' => 'nullable|string',
            'status' => 'required|boolean',
            'placement' => 'required|integer|unique:events_country_tabs,placement,' . $eventsCountryTab->id,
        ]);

        try {
            $data = $request->except('file');

            $eventsCountryTab->update($data);

            if ($request->hasFile('file')) {
                // Delete existing images
                foreach ($eventsCountryTab->images as $image) {
                    // Delete the file from the filesystem
                    $imagePath = public_path('file/' . $image->file);
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                    
                    // Delete the image record from the database
                    $image->delete();
                }
            
                // Now store the new images
                foreach ($request->file('file') as $file) {
                    $fileName = time() . '-' . uniqid() . '.' . $file->extension();
                    $file->move(public_path('file'), $fileName);
            
                    $fileType = str_starts_with($file->getClientMimeType(), 'image/') ? 'image' : 'video';
            
                    // Create new image record
                    $eventsCountryTab->images()->create([
                        'file' => $fileName,
                        'file_type' => $fileType,
                    ]);
                }
            }
            
            // if ($request->hasFile('file')) {
            //     foreach ($request->file('file') as $file) {
            //         $fileName = time() . '-' . uniqid() . '.' . $file->extension();
            //         $file->move(public_path('file'), $fileName);

            //         $fileType = str_starts_with($file->getClientMimeType(), 'image/') ? 'image' : 'video';

            //         $eventsCountryTab->images()->create([
            //             'file' => $fileName,
            //             'file_type' => $fileType,
            //         ]);
            //     }
            // }

            return redirect()->route('events_country_tabs.index')
                ->with('success', 'Event Country Tab updated successfully.');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    // public function update(Request $request, EventsCountryTab $eventsCountryTab)
    // {
    //     $request->validate([
    //         'carnival_id' => 'required|exists:carnivals,id',
    //         'country_id' => 'required|exists:country,id',
    //         'city_id' => 'required|exists:city,id',
    //         'tab' => 'required|string|max:255',
    //         'file' => 'nullable|file|mimes:jpeg,png,jpg,gif,mp4,mov,avi',
    //         'content' => 'nullable|string',
    //         'status' => 'required|boolean',
    //         'placement' => 'required|integer|unique:events_country_tabs,placement,' . $eventsCountryTab->id,
    //     ]);
    //     try {

    //         $data = $request->all();

    //         if ($request->hasFile('file')) {
    //             $fileName = time() . '.' . $request->file->extension();
    //             $request->file->move(public_path('files'), $fileName);
    //             $file = $request->file('file');
    //             // $path = $file->store('files', 'public');
    //             $data['file'] = $fileName;

    //             // Determine the file type
    //             if (str_starts_with($file->getClientMimeType(), 'image/')) {
    //                 $data['file_type'] = 'image';
    //             } elseif (str_starts_with($file->getClientMimeType(), 'video/')) {
    //                 $data['file_type'] = 'video';
    //             } else {
    //                 $data['file_type'] = 'other';
    //             }
    //         }

    //         $eventsCountryTab->update($data);

    //         return redirect()->route('events_country_tabs.index')
    //             ->with('success', 'Event Country Tab updated successfully.');
    //     } catch (Exception $ex) {
    //         return redirect()->back()->with('error', $ex->getMessage());
    //     }
    // }

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
