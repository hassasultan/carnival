@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Country Details</h2>
            <div class="card shadow">
                <div class="card-body">
                    <div class="form-group">
                        <label>ID:</label>
                        <p>{{ $country->id }}</p>
                    </div>
                    <div class="form-group">
                        <label>Name:</label>
                        <p>{{ $country->name }}</p>
                    </div>
                    <div class="form-group">
                        <label>Region:</label>
                        <p>{{ $country->region->name }}</p>
                    </div>
                    <a href="{{ route('countries.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
