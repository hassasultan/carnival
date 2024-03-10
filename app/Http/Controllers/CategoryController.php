<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Package;
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
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $data = $request->all();
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
        $request->validate([
            'user_id' => 'required',
            'package_id' => 'required',
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
