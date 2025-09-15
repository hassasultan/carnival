@extends('dashboard.admin.layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-12">
        <h2 class="mb-2 page-title">Our Team</h2>
        <p class="card-text">Manage the team members here.</p>
        <div class="row my-4">
            <!-- data table -->
            <div class="col-md-12">
                <a href="{{ route('our-team.create') }}" class="btn btn-primary mb-2">Add Team Member</a>
                <div class="card shadow">
                    <div class="card-body">
                        <!-- table -->
                        <table class="table datatables" id="dataTable-1">
                            <thead>
                                <tr>
                                    <th>Sr#</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $counter = 1 @endphp
                                @foreach ($teamMembers as $team)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $team->title }}</td>
                                    <td>
                                        <button class="btn btn-sm rounded dropdown-toggle more-horizontal text-muted"
                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right shadow">
                                            <a class="dropdown-item" href="{{ route('our-team.edit', $team->id) }}"><i
                                                    class="fe fe-edit-2 fe-12 mr-3 text-muted"></i>Edit</a>
                                            <form action="{{ route('our-team.destroy', $team->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item"><i
                                                        class="fe fe-trash fe-12 mr-3 text-muted"></i>Remove</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- data table -->
        </div> <!-- end section -->
    </div> <!-- .col-12 -->
</div>

@endsection
