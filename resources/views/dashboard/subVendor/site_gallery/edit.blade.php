@extends('dashboard.subVendor.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Edit Image</h2>
            <div class="card shadow">
                <div class="card-body">
                    {{-- {{ dd($siteGallery->toArray()) }} --}}
                    <form action="{{ route('subvendor_site_gallery.update', $siteGallery->id) }}" method="POST" enctype="multipart/form-data">
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
@endsection
