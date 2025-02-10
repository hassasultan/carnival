<?php

namespace App\Http\Controllers;

use App\Models\FAQPage;
use App\Models\EventsCountryTab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FAQPageController extends Controller
{
    public function index()
    {
        $faqs = FAQPage::get();
        return view('dashboard.admin.faqPages.index', compact('faqs'));
    }

    public function create()
    {
        return view('dashboard.admin.faqPages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'page' => 'required|string',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'status' => 'required|boolean',
        ]);

        $data = $request->all();

        FAQPage::create($data);

        return redirect()->route('faqs_page.index')->with('success', 'FAQ created successfully.');
    }

    public function show($id)
    {
        $faq = FAQPage::findOrFail($id);
        return view('dashboard.admin.faqPages.show', compact('faq'));
    }

    public function edit($id)
    {
        $faq = FAQPage::findOrFail($id);
        return view('dashboard.admin.faqPages.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'page' => 'required|string',
                'question' => 'required|string|max:255',
                'answer' => 'required|string',
                'status' => 'required|boolean',
            ]);

            $faq = FAQPage::findOrFail($id);
            $faq->update($validatedData);

            return redirect()->route('faqs_page.index')->with('success', 'FAQ updated successfully.');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function destroy($id)
    {
        $faq = FAQPage::findOrFail($id);
        $faq->delete();

        return redirect()->route('faqs_page.index')->with('success', 'FAQ deleted successfully.');
    }
}
