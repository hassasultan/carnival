<?php

namespace App\Http\Controllers;

use App\Models\MusicImage;
use App\Models\Product;
use App\Models\Testimonials;
use App\Models\Blogs;
use App\Models\SiteGallery;
use App\Models\Investor;
use App\Models\OurService;
use App\Models\Region;
use App\Models\Vendor;
use App\Models\SubVendor;
use App\Models\User;
use App\Models\Event;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Advertisement;
use App\Models\Package;
use App\Models\Brand;
use App\Models\GalleryAlbum;
use App\Models\Music;
use App\Models\Costume;
use App\Models\Carnival;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Services\ProductService;
use DB;


class FrontendConroller extends Controller
{
    public function home()
    {
        $events = Event::with('images', 'tickets', 'country_tabs')->whereHas('country_tabs')->orderBy('id', 'desc')->get()->take('5');
        // $events = Event::with('images','tickets')->orderBy('id','desc')->get()->take('5');
        $regions = Region::with('countries')->get();
        $services = OurService::get()->take('4');
        $siteGallery = SiteGallery::get();
        $products = Product::with('brand')->get();
        $investors = Investor::all();
        $testimonials = Testimonials::all();
        $blogs = Blogs::with('user')->get()->take('3');
        $carnivals = Carnival::with('user')->get()->take('6');
        // dd($events->toArray());
        return view('front.home', compact('carnivals', 'events', 'regions', 'services', 'siteGallery', 'products', 'investors', 'blogs', 'testimonials'));
    }
    public function carnival_listing()
    {

        $regions = Region::with('countries')->get();
        $carnivals = Carnival::with('user')->get();
        $investors = Investor::all();
        $blogs = Blogs::with('user')->get()->take('3');
        $products = Product::with('brand')->get();
        // dd($events->toArray());
        return view('front.carnival-listing', compact('products', 'blogs', 'carnivals', 'investors', 'regions'));
    }
    public function get_carnivals_by_region($id)
    {
        $carnivals = Carnival::with('user')->where('region_id', $id)->get();

        // Format the data to send as JSON
        $data = $carnivals->map(function ($carnival) {
            return [
                'name' => $carnival->name,
                'image_url' => 'https://carnivalguide.co/travel/img/home/city_1.jpg',
                // 'image_url' => asset('images/carnivals/' . $carnival->image),

            ];
        });

        return response()->json($data);
    }
    public function get_carnivals_by_region_for_home($id)
    {
        $carnivals = Carnival::with('user')->where('region_id', $id)->take(6)->get();

        // Format the data to send as JSON
        $data = $carnivals->map(function ($carnival) {
            return [
                'name' => $carnival->name,
                'image_url' => 'https://carnivalguide.co/travel/img/home/city_1.jpg',
                // 'image_url' => asset('images/carnivals/' . $carnival->image),

            ];
        });

        return response()->json($data);
    }
    public function event_listing()
    {
        return view('front.events');
    }
    public function category_tour_listing()
    {
        return view('front.category-tours');
    }
    public function tour_listing()
    {
        $blogs = Blogs::with('user')->get()->take('3');
        $products = Product::with('brand')->get();
        return view('front.tours', compact('blogs', 'products'));
    }
    public function flight()
    {
        return view('front.flight');
    }
    public function flight_listing()
    {
        $blogs = Blogs::with('user')->get()->take('3');
        return view('front.flight-isting', compact('blogs'));
    }
    public function hotel_listing()
    {
        $blogs = Blogs::with('user')->get()->take('3');
        $products = Product::with('brand')->get();
        return view('front.hotel-isting', compact('blogs', 'products'));
    }
    public function gallery()
    {
        return view('front.gallery');
    }
    public function car_rental()
    {
        return view('front.car-rental');
    }
    public function get_product(Request $request)
    {
        $query = Product::with('product_images', 'media', 'category', 'brand', 'product_variant', 'user');

        if ($request->has('categories') && !empty($request->categories)) {
            $query->whereIn('category_id', $request->categories);
        }

        if ($request->filled('brands')) {
            $query->whereIn('brand_id', $request->brands);
        }

        if ($request->filled('price_ranges')) {
            $price_ranges = $request->price_ranges;
            $query->whereHas('product_variant', function ($q) use ($price_ranges) {
                $q->where(function ($query) use ($price_ranges) {
                    foreach ($price_ranges as $range) {
                        $min = (float) $range['min'];
                        $max = (float) $range['max'];
                        $query->orWhereBetween('price', [$min, $max]);
                    }
                });
            });
        }

        if ($request->filled('product_condition')) {
            $query->whereIn('condition', $request->product_condition);
        }

        if ($request->filled('stock_condition')) {
            $query->whereIn('stock_condition', $request->stock_condition);
        }

        if ($request->filled('sale')) {
            $query->where('sale', 'true');
        }

        $products = $query->orderBy('id', 'DESC')->paginate(18);
        return $products;
    }

    public function product_detail($slug)
    {
        $product = Product::with('variants', 'product_variant', 'product_images')->where('slug', $slug)->firstOrFail();
        $related = Product::where('category_id', $product->category_id)->where('user_id', $product->user_id)->where('id', '!=', $product->id)->orderBy('id', 'DESC')->get();
        $same_cat = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->orderBy('id', 'DESC')->take(9)->get();
        return view('ShopFrontend.product-detail', compact('product', 'related', 'same_cat'));
    }
    // public function get_vendors(Request $request)
    // {
    //     // dd($request->all());
    //     $regionId = $request->get('getRegion');

    //     $vendors = Vendor::with([
    //         'user' => function ($query) {
    //             $query->select('id', 'first_name', 'last_name', 'slug', 'image');
    //         },
    //         'user.products' => function ($query) {
    //             $query->select('user_id', DB::raw('MIN(new_price) as min_price'), DB::raw('MAX(new_price) as max_price'))
    //                 ->groupBy('user_id');
    //         }
    //     ])
    //         ->when($regionId, function ($query) use ($regionId) {
    //             return $query->where('continent', $regionId);
    //         })
    //         ->where('package_id', 8)
    //         ->orderBy('id', 'DESC')
    //         ->paginate(18);
    //     return $vendors;
    // }
    public function get_vendors(Request $request)
    {
        $vendor_type = $request->get('vendor_type', null);
        $regionId = $request->get('getRegion');

        $query = Vendor::query()
            ->with([
                'user' => function ($query) {
                    $query->select('id', 'first_name', 'last_name', 'slug', 'image');
                },
                'user.products' => function ($query) {
                    $query->select('user_id', DB::raw('MIN(new_price) as min_price'), DB::raw('MAX(new_price) as max_price'))
                        ->groupBy('user_id');
                },
            ]);

        if ($vendor_type) {
            $query->whereHas('package', function ($query) use ($vendor_type) {
                $query->where('title', $vendor_type);
            });
        }

        if ($regionId) {
            $query->where('continent', $regionId);
        }

        $vendors = $query->orderBy('id', 'DESC')->paginate(18);

        return $vendors;
    }
    public function shop_home()
    {
        $categories = Category::where('status', 1)->take(3)->get();
        $oackages = Package::where('status', 1)->get();
        $brands = Brand::where('status', 1)->take(2)->get();
        $products = Product::with('brand')->take(10)->get();
        $new_arrivals = Product::orderBy('id', 'DESC')->take(10)->get();
        $discounted_products = Product::orderBy('id', 'DESC')->take(10)->get();
        $topVendors = Vendor::with('products')
            ->orderBy('id', 'DESC')
            ->take(10)
            ->get();

        $top_sellers = collect();

        foreach ($topVendors as $vendor) {
            $product = $vendor->products()->first();
            if ($product) {
                $top_sellers->push($product);
            }
        }
        // dd($top_sellers->toArray());
        $investors = Investor::all();
        $blogs = Blogs::with('user')->get()->take('6');
        // dd($products->toArray());
        return view('ShopFrontend.home', compact('products', 'investors', 'blogs', 'categories', 'oackages', 'new_arrivals', 'top_sellers', 'brands', 'discounted_products'));
    }
    public function product_listing()
    {
        $products = Product::with('brand')->get();
        $brands = Brand::where('status', 1)
            ->withCount('products')
            ->get();
        $cat1 = Category::where('status', 1)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $cat2 = Category::where('status', 1)
            ->whereNotIn('id', $cat1->pluck('id'))
            ->inRandomOrder()
            ->take(3)
            ->get();

        $cat3 = Category::where('status', 1)
            ->whereNotIn('id', $cat1->pluck('id')->merge($cat2->pluck('id')))
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('ShopFrontend.product-listing', compact('products', 'brands', 'cat1', 'cat2', 'cat3'));
    }
    public function package_detail()
    {
        $products = Product::with('brand')->get();
        return view('ShopFrontend.package-detail', compact('products'));
    }
    public function vendor_listing()
    {
        $mascamp_banners = Banner::where('type', 'mascamps')->get();
        $regions = Region::all();
        $adv1 = Advertisement::where('status', 1)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $adv2 = Advertisement::where('status', 1)
            ->whereNotIn('id', $adv1->pluck('id'))
            ->inRandomOrder()
            ->take(3)
            ->get();

        $adv3 = Advertisement::where('status', 1)
            ->whereNotIn('id', $adv1->pluck('id')->merge($adv2->pluck('id')))
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('ShopFrontend.vendors', compact('regions', 'mascamp_banners', 'adv1', 'adv2', 'adv3'));
    }
    public function contact_us()
    {
        return view('ShopFrontend.contact');
    }
    public function marketplace()
    {
        $products = Product::with('brand')->get();
        return view('ShopFrontend.marketplace', compact('products'));
    }
    public function compare_produts()
    {
        $products = Product::with('brand')->get();
        return view('ShopFrontend.compare-produts', compact('products'));
    }
    public function track_order()
    {
        $products = Product::with('brand')->get();
        return view('ShopFrontend.track-order', compact('products'));
    }
    public function blog_list()
    {
        $products = Product::with('brand')->get();
        return view('ShopFrontend.blog-list', compact('products'));
    }
    public function blog_detail($id)
    {
        $products = Product::with('brand')->get();
        $blog = Blogs::with('user')->where('slug', $id)->first();
        return view('ShopFrontend.blog-detail', compact('products', 'blog'));
    }
    public function sub_vendor_listing()
    {
        $banners = Banner::where('type', 'section_leader')->get();
        $regions = Region::all();
        $adv1 = Advertisement::where('status', 1)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $adv2 = Advertisement::where('status', 1)
            ->whereNotIn('id', $adv1->pluck('id'))
            ->inRandomOrder()
            ->take(3)
            ->get();

        $adv3 = Advertisement::where('status', 1)
            ->whereNotIn('id', $adv1->pluck('id')->merge($adv2->pluck('id')))
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('ShopFrontend.subVendor', compact('banners', 'regions', 'adv1', 'adv2', 'adv3'));
    }
    public function vendor_detail($slug)
    {
        $user = User::with('banners')->whereSlug($slug)->first();
        $vendor = Vendor::with('user', 'products', 'products.category', 'gallery')->where('user_id', $user->id)->first();
        $subvendors = SubVendor::with('products', 'products.category')->where('vendor_id', $user->id)->get();
        // dd($subvendors->toArray());
        $categories = $vendor->products->pluck('category')->unique('id');
        $products = Product::where('user_id', $user->id)->with('brand')->get();
        $ads = Advertisement::where('status', 1)->take(2)->get();
        $vendorPackageName = optional($user->vendor?->package)->title;
        $subVendorPackageName = optional($user->subVendor?->package)->title;

        if ($vendorPackageName === 'Artistes' || $subVendorPackageName === 'Artistes') {
            $events = Event::with('category', 'images')->where('user_id', $user->id)->orderBy('start_date', 'DESC')->take(3)->get();
            $musics = Music::with('imagesRelation')->where('user_id', $user->id)->orderBy('id', 'DESC')->get();
            $costumes = Costume::with('category')->where('user_id', $user->id)->orderBy('id', 'DESC')->get();
            return view('ShopFrontend.artist.detail', compact('events', 'vendor', 'categories', 'products', 'ads', 'subvendors', 'user', 'musics', 'costumes'));
        } else {
            return view('ShopFrontend.vendor-detail', compact('vendor', 'categories', 'products', 'ads', 'subvendors', 'user'));
        }
    }
    public function get_vendor_products($slug, Request $request)
    {
        $products = Product::where('user_id', $slug);
        if ($request->has('cat') && $request->cat != 0) {
            $products = $products->where('category_id', $request->cat);
        }
        if ($request->has('subcat') && $request->subcat != 0) {
            $products = $products->where('subcategory_id', $request->subcat);
        }
        if ($request->has('attribute') && $request->attribute == 'bestSale') {
        }
        if ($request->has('attribute') && $request->attribute == 'onsale') {
            $products = $products->where('sale', true);
        }
        if ($request->has('attribute') && $request->attribute == 'new') {
        }
        $products = $products->orderBy('id', 'DESC')->take(5)->get();

        return $products;
    }
    public function get_subVendors(Request $request)
    {
        $vendors = SubVendor::with([
            'user' => function ($query) {
                $query->select('id', 'first_name', 'last_name', 'slug');
            },
            'vendor' => function ($query) {
                $query->where('package_id', 8);
            },
            'user.products' => function ($query) {
                $query->select('user_id', DB::raw('MIN(new_price) as min_price'), DB::raw('MAX(new_price) as max_price'))
                    ->groupBy('user_id');
            }
        ])
            ->orderBy('id', 'DESC')
            ->paginate(18);

        return $vendors;
    }
    public function sub_vendor_detail($slug)
    {
        $user = User::whereSlug($slug)->first();
        $subvendor = SubVendor::with('products', 'products.category')->where('user_id', $user->id)->first();
        $categories = $subvendor->products->pluck('category')->unique('id');
        $products = Product::where('user_id', $user->id)->with('brand')->get();
        $brands = Brand::where('status', 1)->take(2)->get();
        $ads = Advertisement::where('status', 1)->take(2)->get();

        return view('ShopFrontend.subvendor-detail', compact('user', 'subvendor', 'categories', 'products', 'brands', 'ads'));
    }

    public function eventViewMore($slug)
    {
        $event = Event::with('country_tabs')->find($slug);
        // dd($event->toArray());
        $products = Product::with('brand')->get();
        $blogs = Blogs::with('user')->get()->take('3');
        $all_blogs = Blogs::with('user')->paginate(12);

        return view('front.view_more', compact('event', 'products', 'blogs', 'all_blogs'));
    }

    public function getDiscounted(Request $request)
    {
        // dd($request->discount);
        $discounted_products = Product::where('discount', '<=', $request->discount)->take(10)->get();

        return $discounted_products;
        // return view('partials.shop_discount', compact('discounted_products'));
    }

    public function about_us($slug)
    {
        $user = User::with('vendor', 'subVendor', 'products')->whereSlug($slug)->first();

        // for model
        $event = Event::with('category', 'images')
            ->first();
        $related = Event::with('user')->where('category_id', $event->category_id)
            ->where('user_id', $event->user_id)
            ->where('id', '!=', $event->id)
            ->orderBy('id', 'DESC')
            ->get();

        $vendorPackageName = optional($user->vendor?->package)->title;
        $subVendorPackageName = optional($user->subVendor?->package)->title;
        $products = Product::with('brand')->get();
        $brands = Brand::where('status', 1)
            ->withCount('products')
            ->get();
        if ($vendorPackageName === 'Models' || $subVendorPackageName === 'Models') {
            return view('ShopFrontend.model.detail', compact('event', 'user', 'products', 'brands'));
        } else {
            return view('ShopFrontend.vendorAboutUs', compact('user'));
        }
    }

    public function myEvents($slug)
    {
        $banners = Banner::where('type', 'mascamps')->get();
        $user = User::with('vendor', 'subVendor')->whereSlug($slug)->first();
        $events = Event::with('category')->where('user_id', $user->id)->get();
        $regions = Region::with('countries')->get();
        $cat1 = Category::where('status', 1)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $cat2 = Category::where('status', 1)
            ->whereNotIn('id', $cat1->pluck('id'))
            ->inRandomOrder()
            ->take(3)
            ->get();

        $cat3 = Category::where('status', 1)
            ->whereNotIn('id', $cat1->pluck('id')->merge($cat2->pluck('id')))
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('ShopFrontend.vendorEvents', compact('user', 'events', 'banners', 'cat1', 'cat2', 'cat3', 'regions'));
    }

    public function myGallery($slug)
    {
        $user = User::with('vendor', 'subVendor')->whereSlug($slug)->first();
        // $siteGallery = SiteGallery::where('user_id', $user->id)
        $siteGallery = GalleryAlbum::with('images')->where('user_id', $user->id)
            ->get();

        return view('ShopFrontend.vendorGallery', compact('user', 'siteGallery'));
    }
    public function getAlbumImgs(Request $request)
    {
        $siteGallery = GalleryAlbum::with('images')->where('id', $request->id)
            ->first();
        return $siteGallery;
    }

    public function getAlbumMusic(Request $request)
    {
        $siteGallery = Music::with('imagesRelation')->where('id', $request->id)
            ->first();
        return $siteGallery;
    }

    public function get_events(Request $request)
    {
        $regionId = $request->get('getRegion');
        $event_type = $request->get('event_type');

        $query = Event::with('images', 'tickets', 'country_tabs', 'User');
        if ($request->has('categories') && !empty($request->categories)) {
            $query->whereIn('category_id', $request->categories);
        }
        if (!is_null($event_type)) {
            $query->where('all_day', 1);
        }

        if ($request->filled('price_ranges')) {
            $price_ranges = $request->price_ranges;
            $query->whereHas('tickets', function ($q) use ($price_ranges) {
                $q->where(function ($query) use ($price_ranges) {
                    foreach ($price_ranges as $range) {
                        $min = (float) $range['min'];
                        $max = (float) $range['max'];
                        $query->orWhereBetween('price', [$min, $max]);
                    }
                });
            });
        }

        // dd($request->toArray(), $query->get()->count());

        $events = $query->orderBy('id', 'DESC')->paginate(18);
        return $events;
    }

    public function myEventDetail($event_slug)
    {
        $event = Event::with('category', 'images')
            ->whereSlug($event_slug)
            ->first();
        $related = Event::with('user')->where('category_id', $event->category_id)
            ->where('user_id', $event->user_id)
            ->where('id', '!=', $event->id)
            ->orderBy('id', 'DESC')
            ->get();
        $same_cat = Event::with('user')->where('category_id', $event->category_id)
            ->where('id', '!=', $event->id)
            ->orderBy('id', 'DESC')
            ->take(9)
            ->get();

        return view('ShopFrontend.vendorEventDetails', compact('event', 'related', 'same_cat'));
    }

    public function modelListing()
    {
        $mascamp_banners = Banner::where('type', 'mascamps')->get();
        $regions = Region::all();
        $adv1 = Advertisement::where('status', 1)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $adv2 = Advertisement::where('status', 1)
            ->whereNotIn('id', $adv1->pluck('id'))
            ->inRandomOrder()
            ->take(3)
            ->get();

        $adv3 = Advertisement::where('status', 1)
            ->whereNotIn('id', $adv1->pluck('id')->merge($adv2->pluck('id')))
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('ShopFrontend.model.listing', compact('regions', 'mascamp_banners', 'adv1', 'adv2', 'adv3'));
    }
    public function modelDetail($slug)
    {
        $user = User::with('vendor', 'events')->whereSlug($slug)->first();
        $event = Event::with('category', 'images')
            ->first();
        $related = Event::with('user')->where('category_id', $event->category_id)
            ->where('user_id', $event->user_id)
            ->where('id', '!=', $event->id)
            ->orderBy('id', 'DESC')
            ->get();
        $same_cat = Event::with('user')->where('category_id', $event->category_id)
            ->where('id', '!=', $event->id)
            ->orderBy('id', 'DESC')
            ->take(9)
            ->get();

        return view('ShopFrontend.model.detail', compact('event', 'related', 'same_cat', 'user'));
    }
    public function artistListing()
    {
        $mascamp_banners = Banner::where('type', 'mascamps')->get();
        $regions = Region::all();
        $adv1 = Advertisement::where('status', 1)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $adv2 = Advertisement::where('status', 1)
            ->whereNotIn('id', $adv1->pluck('id'))
            ->inRandomOrder()
            ->take(3)
            ->get();

        $adv3 = Advertisement::where('status', 1)
            ->whereNotIn('id', $adv1->pluck('id')->merge($adv2->pluck('id')))
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('ShopFrontend.artist.listing', compact('regions', 'mascamp_banners', 'adv1', 'adv2', 'adv3'));
    }
    public function artistDetail($slug)
    {
        $user = User::with('vendor', 'events')->whereSlug($slug)->first();
        $event = Event::with('category', 'images')
            ->first();
        $related = Event::with('user')->where('category_id', $event->category_id)
            ->where('user_id', $event->user_id)
            ->where('id', '!=', $event->id)
            ->orderBy('id', 'DESC')
            ->get();
        $same_cat = Event::with('user')->where('category_id', $event->category_id)
            ->where('id', '!=', $event->id)
            ->orderBy('id', 'DESC')
            ->take(9)
            ->get();

        return view('ShopFrontend.artist.detail', compact('event', 'related', 'same_cat', 'user'));
    }
    public function musicDetail($slug)
    {
        $music = Music::where('id', $slug)->first();
        $related_music = Music::where('user_id', $music->user_id)->get();
        $user = User::with('vendor', 'events')->where('id', $music->user_id)->first();
        $products = Product::with('brand')->get();
        $brands = Brand::where('status', 1)
            ->withCount('products')
            ->get();
        return view('ShopFrontend.artist.music-detail', compact('products', 'brands', 'music', 'related_music', 'user'));
    }

    public function get_music(Request $request)
    {
        $query = Music::with('imagesRelation');

        if ($request->has('artiste_name') && !empty($request->artiste_name)) {
            $query->where('artiste_name', 'like', '%' . $request->artiste_name . '%');
        }

        if ($request->has('real_name') && !empty($request->real_name)) {
            $query->where('real_name', 'like', '%' . $request->real_name . '%');
        }

        if ($request->has('producer') && !empty($request->producer)) {
            $query->where('producer', 'like', '%' . $request->producer . '%');
        }

        if ($request->has('writer') && !empty($request->writer)) {
            $query->where('writer', 'like', '%' . $request->writer . '%');
        }

        if ($request->has('song_title') && !empty($request->song_title)) {
            $query->where('song_title', 'like', '%' . $request->song_title . '%');
        }

        if ($request->has('release_date') && !empty($request->release_date)) {
            $query->whereDate('release_date', $request->release_date);
        }

        if ($request->has('country') && !empty($request->country)) {
            $query->where('country', $request->country);
        }

        if ($request->has('region') && !empty($request->region)) {
            $query->where('region', $request->region);
        }

        if ($request->has('event_id') && !empty($request->event_id)) {
            $query->where('event_id', $request->event_id);
        }

        if ($request->has('for_sale') && $request->for_sale !== null) {
            $query->where('for_sale', $request->for_sale);
        }

        if ($request->has('price_min') && $request->has('price_max')) {
            $query->whereBetween('price', [$request->price_min, $request->price_max]);
        } elseif ($request->has('price_min')) {
            $query->where('price', '>=', $request->price_min);
        } elseif ($request->has('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }

        $musics = $query->orderBy('id', 'DESC')->paginate(18);
        return $musics;
    }

    public function myMusicGallery($slug)
    {
        $user = User::with('vendor', 'subVendor')->whereSlug($slug)->first();
        $siteGallery = Music::with('imagesRelation')->has('imagesRelation')->where('user_id', $user->id)
            ->get();
        // dd($siteGallery->toArray(), $siteGallery[0]->imagesRelation->toArray());

        return view('ShopFrontend.vendorMusicGallery', compact('user', 'siteGallery'));
    }

    public function carnival_listing_all()
    {
        $mascamp_banners = Banner::where('type', 'mascamps')->get();
        $regions = Region::all();
        $adv1 = Advertisement::where('status', 1)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $adv2 = Advertisement::where('status', 1)
            ->whereNotIn('id', $adv1->pluck('id'))
            ->inRandomOrder()
            ->take(3)
            ->get();

        $adv3 = Advertisement::where('status', 1)
            ->whereNotIn('id', $adv1->pluck('id')->merge($adv2->pluck('id')))
            ->inRandomOrder()
            ->take(3)
            ->get();

        return view('ShopFrontend.carnivals', compact('regions', 'mascamp_banners', 'adv1', 'adv2', 'adv3'));
    }
    public function get_carnivals(Request $request)
    {
        $vendor_type = $request->get('vendor_type', null);
        $regionId = $request->get('getRegion');

        $query = Carnival::query()
            ->with([
                'user' => function ($query) {
                    $query->select('id', 'first_name', 'last_name', 'slug', 'image');
                },
                'user.products' => function ($query) {
                    $query->select('user_id', DB::raw('MIN(new_price) as min_price'), DB::raw('MAX(new_price) as max_price'))
                        ->groupBy('user_id');
                },
            ]);

        if ($vendor_type) {
            $query->whereHas('package', function ($query) use ($vendor_type) {
                $query->where('title', $vendor_type);
            });
        }

        if ($regionId) {
            $query->where('continent', $regionId);
        }

        $vendors = $query->orderBy('id', 'DESC')->paginate(18);

        return $vendors;
    }

    public function carnival_detail($slug)
    {
        $carnival = Carnival::with('mascamps', 'members')->whereSlug($slug)->first();
        $user_id = $carnival->head;
        // dd($user_id);
        $vendor = Vendor::with('user', 'products', 'products.category', 'gallery')->where('user_id', $user_id)->first();
        $user = User::with('banners')->where('id', $user_id)->first();
        // dd($user, $user_id, $carnival->toArray());
        $blogs = Blogs::where('user_id', $user_id)->with('user')->get()->take('6');
        $subvendors = SubVendor::with('products', 'products.category')->where('vendor_id', $user->id)->get();
        // dd($subvendors->toArray());
        $categories = $vendor->products->pluck('category')->unique('id');
        $products = Product::where('user_id', $user->id)->with('brand')->get();
        $ads = Advertisement::where('status', 1)->take(2)->get();
        $vendorPackageName = optional($user->vendor?->package)->title;
        $subVendorPackageName = optional($user->subVendor?->package)->title;

        return view('ShopFrontend.carnival.detail', compact('carnival', 'vendor', 'categories', 'products', 'ads', 'subvendors', 'user'));
    }

    public function loadBannerDetails(Request $request)
    {
        // dd($request->toArray());

        $data = [];
        $type = $request->type;
        $carnival = $request->carnival_id;

        switch ($type) {
            case 'costume':
                $data = Event::with('images', 'tickets', 'country_tabs')->orderBy('id', 'desc')->get()->take('5');
                break;
        
            case 'events':
                $data = Costume::with('category')->orderBy('id', 'DESC')->get();
                break;
        
            // default:
            //     // Optional: code for cases not matching 'costumes' or 'events'
            //     break;
        }
        


        return view('partials.banner_details', compact('type', 'data'));
    }
}
