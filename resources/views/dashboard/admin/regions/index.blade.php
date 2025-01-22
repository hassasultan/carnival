@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Regions</h2>
            <p class="card-text">Regions table.</p>
            <div class="row my-4">
                <!-- data table -->
                <div class="col-md-12 ">
                    <div class="text-right">
                        <a href="{{ route('regions.create') }}" class="btn btn-primary" id=""><span
                                class="fe fe-plus fe-16 mr-3"></span>New Regions</a>
                    </div>
                    {{-- <button type="button" class="btn btn-primary" id="openProductModal"><span
                        class="fe fe-plus fe-16 mr-3"></span>New Product</button> --}}
                    <div class="card shadow">
                        <div class="card-body">
                            <!-- Product Messages -->
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success mt-3">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <div id="productMessage"></div>
                            <!-- Table Data -->
                            <div id="tableData">
                                <table class="table table-bordered mt-3">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Icon</th>
                                        <th>Placement Order Number</th>
                                        <th>Actions</th>
                                    </tr>
                                    @foreach ($regions as $region)
                                        <tr>
                                            <td>{{ $region->id }}</td>
                                            <td>{{ $region->name }}</td>
                                            <td><img src="{{ asset('images/' . $region->icon) }}" alt="{{ $region->name }}"
                                                    width="50"></td>
                                            <td>{{ $region->placement }}</td>
                                            <td>
                                                <a href="{{ route('regions.show', $region->id) }}"
                                                    class="btn btn-info">Show</a>
                                                <a href="{{ route('regions.edit', $region->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <form action="{{ route('regions.destroy', $region->id) }}" method="POST"
                                                    style="display:inline-block;">
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
    </div>
@endsection
