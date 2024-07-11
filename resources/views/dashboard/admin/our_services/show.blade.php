@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Service Details</h2>
            <div class="card shadow">
                <div class="card-body">
                    <div class="form-group">
                        <label>ID:</label>
                        <p>{{ $ourService->id }}</p>
                    </div>
                    <div class="form-group">
                        <label>Title:</label>
                        <p>{{ $ourService->title }}</p>
                    </div>
                    <div class="form-group">
                        <label>Icon:</label>
                        <img src="{{ asset('images/' . $ourService->icon) }}" alt="{{ $ourService->title }}" width="100">
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <p>{{ $ourService->description }}</p>
                    </div>
                    <div class="form-group">
                        <label>Status:</label>
                        <p>{{ $ourService->status == 1 ? 'Enabled' : 'Disabled' }}</p>
                    </div>
                    <a href="{{ route('our_services.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
