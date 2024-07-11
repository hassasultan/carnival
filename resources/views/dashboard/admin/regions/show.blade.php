@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Region</h2>
            <div class="row my-4">
                <!-- data table -->
                <div class="col-md-12">
                    <div class="text-right">
                        <a href="{{ route('regions.create') }}" class="btn btn-primary" id=""><span
                                class="fe fe-plus fe-16 mr-3"></span>New Regions</a>
                    </div>
                    <div class="card shadow">
                        <div class="card-body">
                            <h1>Region Details</h1>
                            <div class="form-group">
                                <label>ID:</label>
                                <p>{{ $region->id }}</p>
                            </div>
                            <div class="form-group">
                                <label>Name:</label>
                                <p>{{ $region->name }}</p>
                            </div>
                            <div class="form-group">
                                <label>Icon:</label>
                                <img src="{{ asset('images/' . $region->icon) }}" alt="{{ $region->name }}" width="100">
                            </div>
                            <a href="{{ route('regions.index') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
