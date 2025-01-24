<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\EventsCountryTab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FAQController extends Controller
{
    public function index()
    {
        $faqs = FAQ::all();
        return view('dashboard.admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        $modelVal = EventsCountryTab::all();
        return view('dashboard.admin.faqs.create', compact('modelVal'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'modelable_type' => 'required|string|max:255',
            'modelable_id' => 'required|integer',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'status' => 'required|boolean',
        ]);

        $data = $request->all();

        FAQ::create($data);

        return redirect()->route('faqs.index')->with('success', 'FAQ created successfully.');
    }

    public function show($id)
    {
        $faq = FAQ::findOrFail($id);
        return view('dashboard.admin.faqs.show', compact('faq'));
    }

    public function edit($id)
    {
        $faq = FAQ::findOrFail($id);
        $modelVal = EventsCountryTab::all();
        return view('dashboard.admin.faqs.edit', compact('faq', 'modelVal'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'modelable_type' => 'required|string|max:255',
                'modelable_id' => 'required|integer',
                'question' => 'required|string|max:255',
                'answer' => 'required|string',
                'status' => 'required|boolean',
            ]);

            $faq = FAQ::findOrFail($id);
            $faq->update($validatedData);

            return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully.');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function destroy($id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->delete();

        return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}
