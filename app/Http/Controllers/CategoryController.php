<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Package;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $packages = Package::all();
        return view('dashboard.admin.categories.create', compact('packages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'package_id' => 'required',
            'type' => 'required|in:ecommerce,events,music,appointment,ad_space,blogging',
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('icon')) {
            $iconPath = 'category_icon/' . time() . '.' . $request->icon->extension();
            $request->icon->move(public_path('category_icon'), $iconPath);
            $data['icon'] = $iconPath;
        }

        $data['user_id'] = Auth::id();

        Category::create($data);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.admin.categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $packages = Package::all();
        return view('dashboard.admin.categories.edit', compact('category', 'packages'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'package_id' => 'required',
                'title' => 'required|string|max:255',
                'type' => 'required|in:ecommerce,events,music,appointment,ad_space,blogging',
                'slug' => 'required|string|max:255|unique:categories,slug,' . $id,
                'description' => 'required|string',
                'status' => 'required|boolean',
                'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $category = Category::findOrFail($id);

            if ($request->hasFile('icon')) {
                $iconPath = 'category_icon/' . time() . '.' . $request->icon->extension();
                $request->icon->move(public_path('category_icon'), $iconPath);
                $validatedData['icon'] = $iconPath;
            }

            $category->update($validatedData);

            return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
