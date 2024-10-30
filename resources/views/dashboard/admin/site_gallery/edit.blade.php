@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Edit Album</h2>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('site_gallery.update', $siteGallery->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title', $siteGallery->title) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description" required>{{ old('description', $siteGallery->description) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="images">Images:</label>
                            <input type="file" class="form-control" id="images" name="images[]" multiple>
                            @foreach ($siteGallery->images as $image)
                                <div class="image-wrapper mt-2">
                                    <img src="{{ asset('images/' . $image->image) }}" alt="Image" width="100">
                                    <div>
                                        <input type="checkbox" name="delete_images[]" value="{{ $image->id }}">
                                        <label for="delete_images">Delete Image</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
