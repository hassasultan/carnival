@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Investor Details</h2>
            <div class="card shadow">
                <div class="card-body">
                    <div class="form-group">
                        <label>ID:</label>
                        <p>{{ $investor->id }}</p>
                    </div>
                    <div class="form-group">
                        <label>Icon:</label>
                        <img src="{{ asset('images/' . $investor->icon) }}" alt="Icon" width="100">
                    </div>
                    <div class="form-group">
                        <label>Status:</label>
                        <p>{{ $investor->status == 1 ? 'Enabled' : 'Disabled' }}</p>
                    </div>
                    <a href="{{ route('investors.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
