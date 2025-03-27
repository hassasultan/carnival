@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Edit City</h2>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('cities.update', $city->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $city->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="country_id">Country:</label>
                            <select class="form-control" id="country_id" name="country_id" required>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}" {{ $city->country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="airport">Airport Image:</label>
                            <input type="file" class="form-control" id="airport" name="airport">
                        </div>
                        <div class="form-group">
                            <label for="hotel">Hotel Image:</label>
                            <input type="file" class="form-control" id="hotel" name="hotel">
                        </div>
                        <div class="form-group">
                            <label for="event">Event Image:</label>
                            <input type="file" class="form-control" id="event" name="event">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
