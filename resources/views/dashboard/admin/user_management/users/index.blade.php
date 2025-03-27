@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Users</h2>
            <p class="card-text">Users table.</p>
            <div class="row my-4">
                <!-- data table -->
                <div class="col-md-12">
                    <a href="{{ route('users.add') }}" class="btn btn-primary mb-2">Add New User</a>
                    <div class="card shadow">
                        <div class="card-body">
                            <!-- table -->
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Sr#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Vendor Package</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $counter = 1 @endphp <!-- Initialize counter -->
                                    @foreach ($users as $user)
                                        {{-- {{ dd($users->toArray()) }} --}}
                                        @if ($user->role_id != 1)
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <label class="custom-control-label"></label>
                                                    </div>
                                                </td>
                                                <td>{{ $counter++ }}</td> <!-- Increment and display counter -->
                                                <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @if ($user->role && $user->role_id != '4')
                                                        {{ $user->role->name }}
                                                    @else
                                                        Customer
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($user->role_id == 2)
                                                        {{ $user->vendor?->package?->title }}
                                                    @else
                                                        Not A Vendor
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($user->status == 1)
                                                        <span class="badge badge-success">Active</span>
                                                    @else
                                                        <span class="badge badge-danger">InActive</span>
                                                    @endif
                                                </td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>
                                                    <button
                                                        class="btn btn-sm rounded dropdown-toggle more-horizontal text-muted"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right shadow">
                                                        <a class="dropdown-item"
                                                            href="{{ route('users.edit', $user->id) }}"><i
                                                                class="fe fe-edit-2 fe-12 mr-3 text-muted"></i>Edit</a>
                                                        <form action="{{ route('users.destroy', $user->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item"><i
                                                                    class="fe fe-trash fe-12 mr-3 text-muted"></i>Remove</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-felx justify-content-center">

                                {{ $users->links() }}

                            </div>
                        </div>
                    </div>
                </div> <!-- data table -->
            </div> <!-- end section -->
        </div> <!-- .col-12 -->
    </div>
@endsection
