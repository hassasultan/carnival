<?php

namespace App\Http\Controllers;

use App\Models\Carnival;
use App\Models\CarnivalMascamps;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Variant;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\Package;
use App\Models\Region;
use App\Models\Vendor;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Services\ProductService;
use App\Services\EventService;

class VendorController extends Controller
{

    protected $productService, $eventService;

    public function __construct(ProductService $productService, EventService $eventService)
    {
        $this->productService = $productService;
        $this->eventService = $eventService;
    }

    public function index()
    {
        return view('dashboard.vendor.pages.user_management.index');
    }

    public function indexProduct()
    {
        $categories = Category::all();
        $variants = Variant::all();
        $products = Product::where('user_id', Auth::id())->get();
        return view('dashboard.vendor.products.index', compact('products', 'variants', 'categories'));
    }
    public function storeProduct(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'old_price' => 'required',
            'new_price' => 'required',
            'status' => 'required',
            'variant_id' => 'required|array',
            'variant_id.*' => 'exists:variants,id',
        ]);

        $product = $this->productService->createProduct($request->all());

        if ($product) {
            $products = Product::where('user_id', Auth::id())->get();
            $view = view('dashboard.admin.products.table', compact('products'))->render();

            return response()->json(['message' => 'Product created successfully', 'table_html' => $view], 200);
        } else {
            return response()->json(['error' => 'Failed to create Product'], 500);
        }
    }
    public function editProduct($id)
    {
        $product = Product::with('category', 'variants')->findOrFail($id);
        $categories = Category::all();
        return response()->json(['product' => $product]);
    }

    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'old_price' => 'required',
            'new_price' => 'required',
            'status' => 'required',
            'variant_id' => 'required|array',
            'variant_id.*' => 'exists:variants,id',
        ]);

        $product = Product::findOrFail($id);
        $this->productService->updateProduct($product, $request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function indexEvent()
    {
        $packages = Package::all();
        $ticktes = Ticket::all();
        $packageId = Auth::user()->vendor->package->id;
        $categories = Category::with('package')->get();
        $events = Event::where('user_id', Auth::id())->get(['id', 'name', 'start_date', 'end_date']);
        return view('dashboard.vendor.events.index', compact('packages', 'categories', 'events', 'ticktes'));
    }

    public function storeEvent(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'package_id' => 'required|exists:packages,id',
            'category_id' => 'required|exists:categories,id',
            'total_no_of_tickets' => 'required|integer|min:1',
            'venue' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'dress_code' => 'nullable|array',
            'dress_code.*' => 'nullable|string|max:255',
            'ticket_id' => 'required|array',
            'ticket_id.*' => 'exists:tickets,id',
            'description' => 'nullable|string',
            'eventType' => 'required|in:private,public',
            'start_date' => 'nullable|date',
            'start_time' => 'nullable',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'end_time' => 'nullable|after:start_time',
            'all_day' => 'nullable',
            'status' => 'required|in:active,inactive',
        ]);

        $request['user_id'] = Auth::id();

        if ($request->has('all_day')) {
            $request['all_day'] = $request->all_day ? 1 : 0;

            $event = $this->eventService->createEvent($request->all());

            return response()->json(['success' => 'Event created successfully.', 'event' => $event]);
        }
    }

    public function editEvent(Event $event)
    {
        $packages = Package::all();
        $categories = Category::all();
        return view('dashboard.admin.events.edit', compact('event', 'packages', 'categories'));
    }

    public function updateEvent(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'package_id' => 'required|exists:packages,id',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        $event = $this->eventService->updateEvent($event, $request->all());

        return redirect()->route('events.index')
            ->with('success', 'Event updated successfully.');
    }

    public function createSubvendor(Request $request, Event $event)
    {
        $continents = Region::all();
        $packages = Package::where('status', 1)->get();

        return view('dashboard.vendor.subvendor.create', compact('packages', 'continents'));
    }

    public function carnivalCommittee(Request $request, Event $event)
    {
        $carnivals = Carnival::where('head', auth()->user()->id)->get();
        // dd($carnivals->toArray());
        // $carnivals = Auth::user()->vendor->carnivals;

        return view('dashboard.vendor.pages.carnival_committee', compact('carnivals'));
    }

    public function myMasbands(Request $request, Event $event)
    {
        // $masbands = Auth::user()->vendor->subvendor;
        $carnivals = Carnival::where('head', auth()->user()->id)->pluck('id');
        $masbands = CarnivalMascamps::with('carnival', 'mascamp')->whereIn('carnival_id', $carnivals)->get();
        // dd($masbands->toArray());

        return view('dashboard.vendor.pages.my_masbands', compact('masbands'));
    }

    public function queenShow(Request $request, Event $event)
    {
        // $carnivals = Auth::user()->vendor->carnivals;
        // $mascamps = $carnivals->flatMap(function ($carnival) {
        //     return $carnival->mascamps;
        // });
        // $mascamps = $mascamps->unique('id');
        // $mascamps = $mascamps->filter(function ($mascamp) {
        //     return $mascamp->vendor_id !== Auth::user()->vendor->id;
        // });
        $carnivals = Carnival::where('head', auth()->user()->id)->pluck('id');
        $models = CarnivalMascamps::with('carnival', 'mascamp')->where('is_model',1)->whereIn('carnival_id', $carnivals)->get();

        return view('dashboard.vendor.pages.queen_show', compact('models'));
    }

    public function editProfile($id)
    {
        $continents = Region::all();
        $user = User::with('banners')->findOrFail($id);
        $roles = Role::where('status', 1)->get();
        $packages = Package::where('status', 1)->get();
        $vendors = Vendor::with('user')->where('status', 1)->get();
        
        $layout = match (Auth::user()->role->name) {
            // 'Admin' => 'dashboard.admin.layouts.app',
            'Vendor' => 'dashboard.vendor.layouts.app',
            'SubVendor' => 'dashboard.subvendor.layouts.app',
        };

        return view('dashboard.profile.edit', compact('user', 'roles', 'packages', 'vendors', 'continents'));
    }
}
