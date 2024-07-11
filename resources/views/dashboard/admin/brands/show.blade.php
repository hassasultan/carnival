@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Brand Details</h2>
            <div class="card shadow">
                <div class="card-body">
                    <div class="form-group">
                        <label>ID:</label>
                        <p>{{ $brand->id }}</p>
                    </div>
                    <div class="form-group">
                        <label>Title:</label>
                        <p>{{ $brand->title }}</p>
                    </div>
                    <div class="form-group">
                        <label>Logo:</label><br>
                        <img src="{{ asset('images/' . $brand->logo) }}" alt="Logo" style="max-width: 300px;">
                    </div>
                    <div class="form-group">
                        <label>Status:</label>
                        <p>{{ $brand->status == 1 ? 'Enabled' : 'Disabled' }}</p>
                    </div>
                    <a href="{{ route('brands.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
