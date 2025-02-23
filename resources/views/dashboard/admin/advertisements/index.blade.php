@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Advertisements</h2>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="text-right">
                        <a href="{{ route('advertisements.create') }}" class="btn btn-primary">
                            <span class="fe fe-plus fe-16 mr-3"></span>New Advertisement
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
                                    <th>Type</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>index</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach ($advertisements as $advertisement)
                                    <tr>
                                        <td>{{ $advertisement->id }}</td>
                                        <td>{{ $advertisement->title }}</td>
                                        <td>{{ ucfirst($advertisement->type) }}</td>
                                        <td><img src="{{ asset('images/' . $advertisement->image) }}" alt="{{ $advertisement->title }}" width="50"></td>
                                        <td>{{ $advertisement->description }}</td>
                                        <td>{{ $advertisement->index }}</td>
                                        <td>{{ $advertisement->status == 1 ? 'Enabled' : 'Disabled' }}</td>
                                        <td>
                                            <a href="{{ route('advertisements.show', $advertisement->id) }}" class="btn btn-info">Show</a>
                                            <a href="{{ route('advertisements.edit', $advertisement->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('advertisements.destroy', $advertisement->id) }}" method="POST" style="display:inline-block;">
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
