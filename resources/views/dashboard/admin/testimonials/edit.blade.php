@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Edit Testimonial</h2>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @if ($testimonial->image)
                                <img src="{{ asset('testimonial/image/' . $testimonial->image) }}" alt="Image" width="100">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="cover_image">Cover Image:</label>
                            <input type="file" class="form-control" id="cover_image" name="cover_image">
                            @if ($testimonial->cover_image)
                                <img src="{{ asset('testimonial/cover/' . $testimonial->cover_image) }}" alt="Cover Image" width="100">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $testimonial->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating:</label>
                            <input type="number" class="form-control" id="rating" name="rating" min="0" max="5" value="{{ $testimonial->rating }}" required>
                        </div>
                        <div class="form-group">
                            <label for="location">Location:</label>
                            <input type="text" class="form-control" id="location" name="location" value="{{ $testimonial->location }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description">{{ $testimonial->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="1" {{ $testimonial->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $testimonial->status == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
