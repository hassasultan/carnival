<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::with('category')->get();
        return view('dashboard.admin.features.index', compact('features'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.admin.features.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'status' => 'required|integer|in:0,1',
        ]);

        try {
            Feature::create($request->all());
            return redirect()->route('features.index')->with('success', 'Feature created successfully.');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function show($id)
    {
        $feature = Feature::with('category')->findOrFail($id);
        return view('dashboard.admin.features.show', compact('feature'));
    }

    public function edit($id)
    {
        $feature = Feature::findOrFail($id);
        $categories = Category::all();
        return view('dashboard.admin.features.edit', compact('feature', 'categories'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'category_id' => 'required|exists:categories,id',
                'name' => 'required|string|max:255',
                'status' => 'required|integer|in:0,1',
            ]);

            $feature = Feature::findOrFail($id);
            $feature->update($validatedData);

            return redirect()->route('features.index')->with('success', 'Feature updated successfully.');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $feature = Feature::findOrFail($id);
            $feature->delete();
            return redirect()->route('features.index')->with('success', 'Feature deleted successfully.');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
} 