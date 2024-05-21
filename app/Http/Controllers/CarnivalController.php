<?php

namespace App\Http\Controllers;

use App\Models\Carnival;
use App\Models\User;
use Illuminate\Http\Request;
use Str;

class CarnivalController extends Controller
{
    public function index()
    {
        $carnivals = Carnival::with('user')->get();
        return view('dashboard.admin.carnivals.index', compact('carnivals'));
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
        // dd($request->toArray(), $uniqueId);

        $carnivals = Carnival::create([
            'unique_id' => $uniqueId,
            'head' => $request->head ?? 0,
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'region' => $request->region,
            'description' => $request->description,
            'link' => 'https://carnival.ms-hostingladz.com/register/new/user/'.$uniqueId,
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
            'link' => 'https://carnival.ms-hostingladz.com/register/new/user/'.$uniqueId,
        ]);

        if ($carnival) {
            // Fetch all carnivals after update
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
        $head_team = User::where('carnival_id', $id)->get();
        dd($head_team->toArray());
        return response()->json(['head_team' => $head_team]);
    }
}
