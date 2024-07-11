@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Our Services</h2>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="text-right">
                        <a href="{{ route('our_services.create') }}" class="btn btn-primary">
                            <span class="fe fe-plus fe-16 mr-3"></span>New Service
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
                                    <th>Title</th>
                                    <th>Icon</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach ($ourServices as $service)
                                    <tr>
                                        <td>{{ $service->id }}</td>
                                        <td>{{ $service->title }}</td>
                                        <td><img src="{{ asset('images/' . $service->icon) }}" alt="{{ $service->title }}" width="50"></td>
                                        <td>{{ $service->description }}</td>
                                        <td>{{ $service->status == 1 ? 'Enabled' : 'Disabled' }}</td>
                                        <td>
                                            <a href="{{ route('our_services.show', $service->id) }}" class="btn btn-info">Show</a>
                                            <a href="{{ route('our_services.edit', $service->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('our_services.destroy', $service->id) }}" method="POST" style="display:inline-block;">
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
