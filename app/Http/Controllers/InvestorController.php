<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investor;

class InvestorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investors = Investor::all();
        return view('dashboard.admin.investors.index', compact('investors'));
    }

    public function create()
    {
        return view('dashboard.admin.investors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'icons.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer|in:0,1',
        ]);

        if($request->hasfile('icons')) {
            foreach($request->file('icons') as $icon) {
                $iconName = time().rand(1,100).'.'.$icon->extension();
                $icon->move(public_path('images'), $iconName);

                Investor::create([
                    'icon' => $iconName,
                    'status' => $request->status,
                ]);
            }
        }

        return redirect()->route('investors.index')
                         ->with('success', 'Icons added successfully.');
    }

    public function show(Investor $investor)
    {
        return view('dashboard.admin.investors.show', compact('investor'));
    }

    public function edit(Investor $investor)
    {
        return view('dashboard.admin.investors.edit', compact('investor'));
    }

    public function update(Request $request, Investor $investor)
    {
        $request->validate([
            'icon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer|in:0,1',
        ]);

        if ($request->hasFile('icon')) {
            $iconName = time().'.'.$request->icon->extension();
            $request->icon->move(public_path('images'), $iconName);
            $investor->update([
                'icon' => $iconName,
                'status' => $request->status,
            ]);
        } else {
            $investor->update($request->only(['status']));
        }

        return redirect()->route('investors.index')
                         ->with('success', 'Icon updated successfully.');
    }

    public function destroy(Investor $investor)
    {
        if ($investor->icon) {
            unlink(public_path('images/'.$investor->icon));
        }
        
        $investor->delete();

        return redirect()->route('investors.index')
                         ->with('success', 'Icon deleted successfully.');
    }
}
