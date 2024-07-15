@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Cities</h2>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="text-right">
                        <a href="{{ route('cities.create') }}" class="btn btn-primary">
                            <span class="fe fe-plus fe-16 mr-3"></span>New City
                        </a>
                    </div>
                    <div class="card shadow">
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success mt-3">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <table class="table table-bordered mt-3">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach ($cities as $city)
                                    <tr>
                                        <td>{{ $city->id }}</td>
                                        <td>{{ $city->name }}</td>
                                        <td>{{ $city->country->name }}</td>
                                        <td>
                                            <a href="{{ route('cities.show', $city->id) }}" class="btn btn-info">Show</a>
                                            <a href="{{ route('cities.edit', $city->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('cities.destroy', $city->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
