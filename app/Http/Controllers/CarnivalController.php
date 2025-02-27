<?php

namespace App\Http\Controllers;

use App\Models\Carnival;
use App\Models\Region;
use App\Models\User;
use App\Models\Vendor;
use App\Models\CarnivalMembers;
use App\Models\Country;
use App\Models\CarnivalImages;
use App\Models\CarnivalBannerImages;
use App\Models\CarnivalFlyerImages;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class CarnivalController extends Controller
{
    public function validation(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'region_id' => 'required|exists:regions,id',
            'country_id' => 'required|exists:country,id',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
    }
    public function index()
    {
        $carnivals = Carnival::with('mascamps.user', 'user', 'regions')->get();
        $mascamps = Vendor::with('user')->get();
        $region = Region::all();
        return view('dashboard.admin.carnivals.index', compact('region', 'carnivals', 'mascamps'));
    }

    public function create()
    {
        return view('carnivals.create');
    }

    public function store(Request $request)
    {
        $this->validation($request);
        try {
            $uniqueId = $this->generateUniqueId();

            $slug = $request->name . '-' . $uniqueId;

            $carnivals = Carnival::create([
                'unique_id' => $uniqueId,
                'head' => $request->head ?? 0,
                'name' => $request->name,
                'start_date' => $request->start_date,
                'slug' => $slug,
                'end_date' => $request->end_date,
                'region_id' => $request->region_id,
                'country_id' => $request->country_id,
                'description' => $request->description,
                'link' => 'https://carnival.ms-hostingladz.com/register/new/user/' . $uniqueId,
            ]);

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '.' . $image->extension();
                    $image->move(public_path('images/carnivalImages'), $imageName);
                    CarnivalImages::create([
                        'carnival_id' => $carnivals->id,
                        'image' => $imageName
                    ]);
                }
            }

            if ($request->hasFile('banner_images')) {
                foreach ($request->file('banner_images') as $image) {
                    $imageName = time() . '.' . $image->extension();
                    $image->move(public_path('images/carnivalBannerImages'), $imageName);
                    CarnivalBannerImages::create([
                        'carnival_id' => $carnivals->id,
                        'image' => $imageName
                    ]);
                }
            }

            if ($request->hasFile('flyer_images')) {
                foreach ($request->file('flyer_images') as $image) {
                    $imageName = time() . '.' . $image->extension();
                    $image->move(public_path('images/carnivalFlyerImages'), $imageName);
                    CarnivalFlyerImages::create([
                        'carnival_id' => $carnivals->id,
                        'image' => $imageName
                    ]);
                }
            }
            if ($carnivals) {
                $carnivals = Carnival::all();
                $view = view('dashboard.admin.carnivals.table', compact('carnivals'))->render();

                return response()->json(['message' => 'Carnival created successfully', 'table_html' => $view], 200);
            }
        } catch (Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }

    public function show(Carnival $carnival)
    {
        return view('carnivals.show', compact('carnival'));
    }

    public function edit(Carnival $carnival)
    {
        $carnival = Carnival::with('images')->find($carnival->id);
        return response()->json(['carnival' => $carnival]);
    }

    public function update(Request $request, Carnival $carnival)
    {
        $this->validation($request);
        try {
            $uniqueId = $this->generateUniqueId();

            $carnivals = $carnival->update([
                'unique_id' => $uniqueId,
                'name' => $request->name,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'region_id' => $request->region_id,
                'country_id' => $request->country_id,
                'description' => $request->description,
                'link' => 'https://carnival.ms-hostingladz.com/register/new/user/' . $uniqueId,
            ]);

            if ($carnivals) {
                if ($request->hasFile('images')) {
                    foreach ($request->file('images') as $image) {
                        $imageName = time() . '.' . $image->extension();
                        $image->move(public_path('images/carnivalImages'), $imageName);
                        CarnivalImages::create([
                            'carnival_id' => $carnival->id,
                            'image' => $imageName
                        ]);
                    }
                }
                if ($request->hasFile('banner_images')) {
                    foreach ($request->file('banner_images') as $image) {
                        $imageName = time() . '.' . $image->extension();
                        $image->move(public_path('images/carnivalBannerImages'), $imageName);
                        CarnivalBannerImages::create([
                            'carnival_id' => $carnivals->id,
                            'image' => $imageName
                        ]);
                    }
                }
    
                if ($request->hasFile('flyer_images')) {
                    foreach ($request->file('flyer_images') as $image) {
                        $imageName = time() . '.' . $image->extension();
                        $image->move(public_path('images/carnivalFlyerImages'), $imageName);
                        CarnivalFlyerImages::create([
                            'carnival_id' => $carnivals->id,
                            'image' => $imageName
                        ]);
                    }
                }
                $carnivals = Carnival::all();
                $view = view('dashboard.admin.carnivals.table', compact('carnivals'))->render();
                return response()->json(['carnival' => $carnival, 'message' => 'Carnival updated successfully', 'table_html' => $view], 200);
            }
        } catch (Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }
    public function deleteImage(Carnival $carnival, $imageId)
    {
        try {
            // Find the image
            $image = CarnivalImages::findOrFail($imageId);

            // Check if image belongs to this carnival
            if ($image->carnival_id !== $carnival->id) {
                return response()->json(['error' => 'Image does not belong to this carnival'], 403);
            }

            // Delete the file from storage
            if (Storage::exists($image->image)) {
                Storage::delete($image->image);
            }

            // Delete the database record
            $image->delete();

            return response()->json(['message' => 'Image deleted successfully']);
        } catch (Exception $e) {
            return response()->json(['error' => 'Failed to delete image: ' . $e->getMessage()], 500);
        }
    }
    public function destroy(Carnival $carnival)
    {
        $carnival->delete();
        return response()->json(['message' => 'Carnival deleted successfully'], 200);
    }

    private function generateUniqueId()
    {
        return Str::random(16);
    }

    public function head_team($id)
    {
        $head_team = User::where('carnival_id', 0)
            ->where('packageName', 3)
            ->doesntHave('isCustomer')
            ->get();
        // dd($head_team->count());

        return response()->json(['head_team' => $head_team]);
    }

    public function carnivalHead(Request $request)
    {
        $head = Carnival::find($request->carnival_id);
        $head->head = $request->head_team_id;
        $head->save();

        $full_name = $head->user->first_name . ' ' . $head->user->last_name;

        return response()->json(['full_name' => $full_name]);
    }

    public function assignCarnivalMember(Request $request)
    {
        $validatedData = $request->validate([
            'carnival_id' => 'required|exists:carnivals,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:carnival_members,email,' . $request->member_id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/carnival_members', 'public');
            $validatedData['image'] = url('storage/' . $imagePath);
        }

        try {
            if ($request->member_id == 0) {
                $carnivalMember = CarnivalMembers::create($validatedData);
            } else {
                $carnivalMember = CarnivalMembers::find($request->member_id);
                if (!$carnivalMember) {
                    return response()->json(['message' => 'Member not found.'], 404);
                }
                $carnivalMember->update($validatedData);
            }

            return response()->json([
                'message' => 'Carnival member successfully assigned.',
                'member' => $carnivalMember->fresh(), // Ensure updated data is returned
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while processing your request.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function assignModels(Request $request)
    {
        // dd($request->toArray());

        $carnival = Carnival::findOrFail($request->carnival_id);
        if ($request->has('is_model')) {
            $mascampsWithData = [];
            foreach ($request->mascamps as $mascampId) {
                $mascampsWithData[$mascampId] = ['is_model' => 1];
            }
            $carnival->mascamps()->sync($mascampsWithData);
            return response()->json(['success' => 'Mascamp(s) assigned successfully', 'message' => 'Mascamps updated successfully.']);
        }
        $carnival->mascamps()->sync($request->mascamps); // Sync mascamps
        return response()->json(['success' => 'Mascamp(s) assigned successfully', 'message' => 'Mascamps updated successfully.']);
    }

    public function getAssignedMascamps(Request $request, $id)
    {
        $carnivalId = $id;
        $vendors = Vendor::with('carnivals', 'user')
            ->whereDoesntHave('carnivals', function ($query) use ($carnivalId) {
                $query->where('carnival_id', $carnivalId);
            });
        if ($request->has('yes')) {
            $vendors = $vendors->where('package_id', 1);
        }
        $vendors = $vendors->get();
        // $carnival = Carnival::with('mascamps')->findOrFail($id);
        // $selectedMascamps = $carnival->mascamps->pluck('id'); // IDs of assigned mascamps
        return response()->json(['vendors' => $vendors]);
    }

    public function getCarnivalsMembers(Request $request, $id)
    {
        $members = CarnivalMembers::where('carnival_id', $id)->get();
        return response()->json(['members' => $members]);
    }

    public function getCountriesByRegion(Request $request)
    {
        $regionId = $request->region_id;
        $countries = Country::where('region_id', $regionId)->get();
        return response()->json(['countries' => $countries]);
    }
}
