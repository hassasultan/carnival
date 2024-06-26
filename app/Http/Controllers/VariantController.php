<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Variant;
use App\Models\Category;

class VariantController extends Controller
{
    public function index()
    {
        $variants = Variant::all();
        $categories = Category::all();
        return view('dashboard.admin.variants.index', compact('variants', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'category_id' => 'required',
            'type' => 'required',
        ]);

        $variants = Variant::create($request->all());

        if ($variants) {
            $variants = Variant::all();
            $view = view('dashboard.admin.variants.table', compact('variants'))->render();

            return response()->json(['message' => 'Variant created successfully', 'table_html' => $view], 200);
        } else {
            return response()->json(['error' => 'Failed to create variant'], 500);
        }
    }

    public function edit($id)
    {
        $variant = Variant::findOrFail($id);
        return response()->json(['variant' => $variant]);
    }

    public function update(Request $request, Variant $variant)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'category_id' => 'required',
            'type' => 'required',
        ]);

        try {
            $variant->update($request->all());

            if ($variant->wasChanged()) {
                $variants = Variant::all();
                $view = view('dashboard.admin.variants.table', compact('variants'))->render();

                return response()->json(['variant' => $variant, 'message' => 'Variant updated successfully', 'table_html' => $view], 200);
            } else {
                return response()->json(['error' => 'No changes detected for the variant'], 400);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update variant: ' . $e->getMessage()], 500);
        }
    }


    public function destroy(Variant $variant)
    {
        $variant->delete();
        return response()->json(['message' => 'Variant deleted successfully'], 200);
    }
}
