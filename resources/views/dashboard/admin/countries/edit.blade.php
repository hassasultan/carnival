@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Edit Country</h2>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('countries.update', $country->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $country->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="region_id">Region:</label>
                            <select class="form-control" id="region_id" name="region_id" required>
                                @foreach ($regions as $region)
                                    <option value="{{ $region->id }}" {{ $country->region_id == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
