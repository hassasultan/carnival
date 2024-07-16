<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use App\Traits\ImageTrait;

class TestimonialsController extends Controller
{
    use ImageTrait;

    public function index()
    {
        $testimonials = Testimonials::all();
        return view('dashboard.admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('dashboard.admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'rating' => 'required|integer|min:0|max:5',
            'location' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        $testimonialData = $request->all();

        $testimonialData['image'] = $this->uploadImage($request->file('image'), 'testimonial/image');
        $testimonialData['cover_image'] = $this->uploadImage($request->file('cover_image'), 'testimonial/cover');
        
        Testimonials::create($testimonialData);

        return redirect()->route('testimonials.index')
                         ->with('success', 'Testimonial added successfully.');
    }

    public function show(Testimonials $testimonial)
    {
        return view('dashboard.admin.testimonials.show', compact('testimonial'));
    }

    public function edit(Testimonials $testimonial)
    {
        return view('dashboard.admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonials $testimonial)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'rating' => 'required|integer|min:0|max:5',
            'location' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        $testimonialData = $request->all();

        if ($request->hasFile('image')) {
            if ($testimonial->image) {
                $this->deleteImage($testimonial->image);
            }
            $testimonialData['image'] = $this->uploadImage($request->file('image'), 'testimonial/image');
        }
        
        if ($request->hasFile('cover_image')) {
            if ($testimonial->cover_image) {
                $this->deleteImage($testimonial->cover_image);
            }
            $testimonialData['cover_image'] = $this->uploadImage($request->file('cover_image'), 'testimonial/cover');
        }

        $testimonial->update($testimonialData);

        return redirect()->route('testimonials.index')
                         ->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Testimonials $testimonial)
    {
        if ($testimonial->image) {
            $this->deleteImage($testimonial->image);
        }
        
        if ($testimonial->cover_image) {
            $this->deleteImage($testimonial->cover_image);
        }
        
        $testimonial->delete();

        return redirect()->route('testimonials.index')
                         ->with('success', 'Testimonial deleted successfully.');
    }
}
