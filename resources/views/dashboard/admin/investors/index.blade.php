@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Investors</h2>
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="text-right">
                        <a href="{{ route('investors.create') }}" class="btn btn-primary">
                            <span class="fe fe-plus fe-16 mr-3"></span>New Investor
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
                                    <th>Icon</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                @foreach ($investors as $investor)
                                    <tr>
                                        <td>{{ $investor->id }}</td>
                                        <td><img src="{{ asset('images/' . $investor->icon) }}" alt="Icon" width="50"></td>
                                        <td>{{ $investor->status == 1 ? 'Enabled' : 'Disabled' }}</td>
                                        <td>
                                            <a href="{{ route('investors.show', $investor->id) }}" class="btn btn-info">Show</a>
                                            <a href="{{ route('investors.edit', $investor->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('investors.destroy', $investor->id) }}" method="POST" style="display:inline-block;">
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
