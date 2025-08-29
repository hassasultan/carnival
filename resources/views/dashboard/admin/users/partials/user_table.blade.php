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
                    {{-- <td>{{ $user->role_id == 2 ? $user->vendor?->package?->title : 'Not A Vendor' }}</td> --}}
                    <td>
                        @if ($user->role_id == 3)
                            {{-- Section Leader --}}
                            {{ $user->package_name ?? 'N/A' }}
                        @elseif($user->role_id == 2)
                            {{ $user->vendor?->package?->title ?? 'N/A' }}
                        @else
                            --
                        @endif
                    </td>
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
                            <button type="button" class="dropdown-item delete-user" data-id="{{ $user->id }}">
                                <i class="fe fe-trash fe-12 mr-3 text-muted"></i>Remove
                            </button>
                        </div>
                    </td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>

<!-- Custom Pagination -->
@if ($users->hasPages())
    <div class="d-flex justify-content-center mt-4">
        <nav aria-label="Users pagination">
            <ul class="pagination">
                <!-- Previous Page Link -->
                @if ($users->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link pagination-link" href="#"
                            data-page="{{ $users->currentPage() - 1 }}">Previous</a>
                    </li>
                @endif

                <!-- Pagination Elements -->
                @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                    @if ($page == $users->currentPage())
                        <li class="page-item active">
                            <span class="page-link">{{ $page }}</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link pagination-link" href="#"
                                data-page="{{ $page }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach

                <!-- Next Page Link -->
                @if ($users->hasMorePages())
                    <li class="page-item">
                        <a class="page-link pagination-link" href="#"
                            data-page="{{ $users->currentPage() + 1 }}">Next</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">Next</span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>

    <!-- Pagination Info -->
    <div class="text-center text-muted mt-2">
        Showing {{ $users->firstItem() ?? 0 }} to {{ $users->lastItem() ?? 0 }} of {{ $users->total() }} users
    </div>
@endif
