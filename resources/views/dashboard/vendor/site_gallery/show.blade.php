@extends('dashboard.vendor.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Image Details</h2>
            <div class="card shadow">
                <div class="card-body">
                    <div class="form-group">
                        <label>ID:</label>
                        <p>{{ $siteGallery->id }}</p>
                    </div>
                    <div class="form-group">
                        <label>Image:</label>
                        <img src="{{ asset('images/' . $siteGallery->image) }}" alt="Image" width="100">
                    </div>
                    <div class="form-group">
                        <label>Status:</label>
                        <p>{{ $siteGallery->status == 1 ? 'Enabled' : 'Disabled' }}</p>
                    </div>
                    <a href="{{ route('vendor_site_gallery.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
