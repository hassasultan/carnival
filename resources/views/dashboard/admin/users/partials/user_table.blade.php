<table class="table table-striped">
    <thead>
        <tr>
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
        @php $counter = ($users->currentPage() - 1) * $users->perPage() + 1; @endphp
        @foreach ($users as $user)
            @if ($user->role_id != 1)
                <tr>
                    <td>{{ $counter++ }}</td>
                    <td>{{ $user->first_name . ' ' . $user->last_name }} -
                        {{ $user->vendor ? $user->vendor->name : ($user->subvendor ? $user->subvendor->name : '') }}
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role && $user->role_id != '4' ? $user->role->name : 'Customer' }}</td>
                    <td>{{ $user->role_id == 2 ? $user->vendor?->package?->title : 'Not A Vendor' }}</td>
                    <td>
                        @if ($user->status == 1)
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-danger">Inactive</span>
                        @endif
                    </td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <button class="btn btn-sm rounded dropdown-toggle more-horizontal text-muted" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted sr-only">Action</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right shadow">
                            <a class="dropdown-item" href="{{ route('users.edit', $user->id) }}">
                                <i class="fe fe-edit-2 fe-12 mr-3 text-muted"></i>Edit
                            </a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item">
                                    <i class="fe fe-trash fe-12 mr-3 text-muted"></i>Remove
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>
<div class="mt-3">
    {{ $users->links() }}
</div>
