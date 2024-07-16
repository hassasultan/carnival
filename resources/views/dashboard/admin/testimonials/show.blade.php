@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Testimonial Details</h2>
            <div class="card shadow">
                <div class="card-body">
                    <div class="form-group">
                        <label>ID:</label>
                        <p>{{ $testimonial->id }}</p>
                    </div>
                    <div class="form-group">
                        <label>Image:</label>
                        @if ($testimonial->image)
                            <img src="{{ asset('testimonial/image/' . $testimonial->image) }}" alt="Image" width="100">
                        @else
                            <p>No image uploaded</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Cover Image:</label>
                        @if ($testimonial->cover_image)
                            <img src="{{ asset('testimonial/cover/' . $testimonial->cover_image) }}" alt="Cover Image" width="100">
                        @else
                            <p>No cover image uploaded</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Name:</label>
                        <p>{{ $testimonial->name }}</p>
                    </div>
                    <div class="form-group">
                        <label>Rating:</label>
                        <p>{{ $testimonial->rating }}</p>
                    </div>
                    <div class="form-group">
                        <label>Location:</label>
                        <p>{{ $testimonial->location }}</p>
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <p>{{ $testimonial->description }}</p>
                    </div>
                    <div class="form-group">
                        <label>Status:</label>
                        <p>{{ $testimonial->status ? 'Enabled' : 'Disabled' }}</p>
                    </div>
                    <a href="{{ route('testimonials.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
