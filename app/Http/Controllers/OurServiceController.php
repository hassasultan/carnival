<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OurService;

class OurServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourServices = OurService::all();
        return view('dashboard.admin.our_services.index', compact('ourServices'));
    }

    public function create()
    {
        return view('dashboard.admin.our_services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
            'status' => 'required|integer|in:0,1',
        ]);

        $iconName = time().'.'.$request->icon->extension();
        $request->icon->move(public_path('images'), $iconName);

        OurService::create([
            'title' => $request->title,
            'icon' => $iconName,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        return redirect()->route('our_services.index')
                         ->with('success', 'Service created successfully.');
    }

    public function show(OurService $ourService)
    {
        return view('dashboard.admin.our_services.show', compact('ourService'));
    }

    public function edit(OurService $ourService)
    {
        return view('dashboard.admin.our_services.edit', compact('ourService'));
    }

    public function update(Request $request, OurService $ourService)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
            'status' => 'required|integer|in:0,1',
        ]);

        if ($request->hasFile('icon')) {
            $iconName = time().'.'.$request->icon->extension();
            $request->icon->move(public_path('images'), $iconName);
            $ourService->update([
                'title' => $request->title,
                'icon' => $iconName,
                'description' => $request->description,
                'status' => $request->status,
            ]);
        } else {
            $ourService->update($request->only(['title', 'description', 'status']));
        }

        return redirect()->route('our_services.index')
                         ->with('success', 'Service updated successfully.');
    }

    public function destroy(OurService $ourService)
    {
        if ($ourService->icon) {
            unlink(public_path('images/'.$ourService->icon));
        }
        
        $ourService->delete();

        return redirect()->route('our_services.index')
                         ->with('success', 'Service deleted successfully.');
    }
}
