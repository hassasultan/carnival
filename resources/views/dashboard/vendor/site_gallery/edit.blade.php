{{-- @extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Edit Image</h2>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('vendor_site_gallery.update', $siteGallery->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" class="form-control" id="image" name="image">
                            <img src="{{ asset('images/' . $siteGallery->image) }}" alt="Image" width="100" class="mt-2">
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="1" {{ $siteGallery->status == 1 ? 'selected' : '' }}>Enabled</option>
                                <option value="0" {{ $siteGallery->status == 0 ? 'selected' : '' }}>Disabled</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Edit Album</h2>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('vendor_site_gallery.update', $siteGallery->id) }}" method="POST"
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
