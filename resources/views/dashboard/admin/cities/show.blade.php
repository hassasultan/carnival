@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">City Details</h2>
            <div class="card shadow">
                <div class="card-body">
                    <div class="form-group">
                        <label>ID:</label>
                        <p>{{ $city->id }}</p>
                    </div>
                    <div class="form-group">
                        <label>Name:</label>
                        <p>{{ $city->name }}</p>
                    </div>
                    <div class="form-group">
                        <label>Country:</label>
                        <p>{{ $city->country->name }}</p>
                    </div>
                    <a href="{{ route('cities.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
