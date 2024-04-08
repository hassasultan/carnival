<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Costume;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Variant;
use App\Models\CostumeVariantImage;
use App\Models\CostumeVariant;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Services\CostumeService;

class VendorCostumeController extends Controller
{
    protected $costumeService;

    public function __construct(CostumeService $costumeService)
    {
        $this->costumeService = $costumeService;
    }

    public function index()
    {
        $events = Event::get();
        $categories = Category::where('type', 'ecommerce')->get();
        $variants = Variant::all();
        $costumes = Costume::where('user_id', Auth::id())->get();
        return view('dashboard.vendor.costumes.index', compact('events', 'costumes', 'variants', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'event_id' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'old_price' => 'required',
            'new_price' => 'required',
            'status' => 'required',
            'variant_id' => 'required|array',
            'variant_id.*' => 'exists:variants,id',
        ]);

        $data = $request->all();

        // Check if variant_images are present in the request
        if ($request->hasFile('variant_images')) {
            $data['variant_images'] = $request->file('variant_images');
        } else {
            // If no variant images are uploaded, set an empty array
            $data['variant_images'] = [];
        }

        $costume = $this->costumeService->createCostume($data);

        if ($costume) {
            $costumes = Costume::where('user_id', Auth::id())->get();
            $view = view('dashboard.vendor.costumes.table', compact('costumes'))->render();

            return response()->json(['message' => 'Costume created successfully', 'table_html' => $view], 200);
        } else {
            return response()->json(['error' => 'Failed to create Costume'], 500);
        }
    }

    public function show($id)
    {
        $costume = Costume::findOrFail($id);
        return view('dashboard.vendor.costumes.show', compact('costume'));
    }

    public function edit($id)
    {
        $costume = Costume::with('category', 'variants', 'subcategory')->findOrFail($id);
        $categories = Category::all();
        return response()->json(['costume' => $costume]);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'old_price' => 'required',
            'new_price' => 'required',
            'status' => 'required',
        ]);

        $costume = Costume::findOrFail($id);

        // Prepare data for update
        $data = $request->all();

        // Check if variant_images are present in the request
        if ($request->hasFile('variant_images')) {
            $data['variant_images'] = $request->file('variant_images');
        } else {
            // If no variant images are uploaded, set an empty array
            $data['variant_images'] = [];
        }

        // Update costume attributes and handle variants
        $updatedCostume = $this->costumeService->updateCostume($costume, $data);

        if ($updatedCostume) {
            $costumes = Costume::where('user_id', Auth::id())->get();
            $view = view('dashboard.vendor.costumes.table', compact('costumes'))->render();

            return response()->json(['message' => 'Costume updated successfully', 'table_html' => $view], 200);
        } else {
            return response()->json(['error' => 'Failed to update Costume'], 500);
        }
    }

    public function destroy($id)
    {
        $costume = Costume::findOrFail($id);
        $costume->delete();

        return redirect()->route('costumes.index')->with('success', 'Costume deleted successfully.');
    }

    public function getsubCategories($categoryId)
    {
        $data['subcategories'] = Subcategory::where('category_id', $categoryId)->get();
        $data['varients'] = Variant::where('category_id', $categoryId)->get();

        return response()->json($data);
    }
}
