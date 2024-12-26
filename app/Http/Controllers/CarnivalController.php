<?php

namespace App\Http\Controllers;

use App\Models\Carnival;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Str;

class CarnivalController extends Controller
{
    public function index()
    {
        $carnivals = Carnival::with('mascamps.user', 'user')->get();
        $mascamps = Vendor::with('user')->get();
        return view('dashboard.admin.carnivals.index', compact('carnivals', 'mascamps'));
    }

    public function create()
    {
        return view('carnivals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $uniqueId = $this->generateUniqueId();

        $carnivals = Carnival::create([
            'unique_id' => $uniqueId,
            'head' => $request->head ?? 0,
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'region' => $request->region,
            'description' => $request->description,
            'link' => 'https://carnival.ms-hostingladz.com/register/new/user/' . $uniqueId,
        ]);

        if ($carnivals) {
            $carnivals = Carnival::all();
            $view = view('dashboard.admin.carnivals.table', compact('carnivals'))->render();

            return response()->json(['message' => 'Carnival created successfully', 'table_html' => $view], 200);
        } else {
            return response()->json(['error' => 'Failed to create Carnival'], 500);
        }
    }

    public function show(Carnival $carnival)
    {
        return view('carnivals.show', compact('carnival'));
    }

    public function edit(Carnival $carnival)
    {
        return response()->json(['carnival' => $carnival]);
    }

    public function update(Request $request, Carnival $carnival)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $uniqueId = $this->generateUniqueId();

        $carnival = $carnival->update([
            'unique_id' => $uniqueId,
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'region' => $request->region,
            'description' => $request->description,
            'link' => 'https://carnival.ms-hostingladz.com/register/new/user/' . $uniqueId,
        ]);

        if ($carnival) {
            $carnivals = Carnival::all();
            $view = view('dashboard.admin.carnivals.table', compact('carnivals'))->render();

            return response()->json(['carnival' => $carnival, 'message' => 'Carnival updated successfully', 'table_html' => $view], 200);
        } else {
            return response()->json(['error' => 'No changes detected for the carnival'], 400);
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
        dd($head_team->count());

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

    public function assignModels(Request $request)
    {
        $carnival = Carnival::findOrFail($request->carnival_id);
        $carnival->mascamps()->sync($request->mascamps); // Sync mascamps
        return response()->json(['success' => 'Mascamp(s) assigned successfully', 'message' => 'Mascamps updated successfully.']);
    }

    public function getAssignedMascamps($id)
    {
        $carnival = Carnival::with('mascamps')->findOrFail($id);
        $selectedMascamps = $carnival->mascamps->pluck('id'); // IDs of assigned mascamps
        return response()->json(['selectedMascamps' => $selectedMascamps]);
    }
}
