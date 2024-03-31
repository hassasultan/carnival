<!-- table -->
<table class="table datatables" id="dataTable-1">
    <thead>
        <tr>
            <th></th>
            <th>Sr#</th>
            <th>Title</th>
            <th>Status</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php $counter = 1 @endphp <!-- Initialize counter -->
        @foreach ($costumes as $costume)
        <tr>
            <td>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <label class="custom-control-label"></label>
                </div>
            </td>
            <td>{{ $counter++ }}</td> <!-- Increment and display counter -->
            <td>{{ $costume->title }}</td>
            <td>
                @if($costume->status == 1)
                    Active
                @else
                    Inactive
                @endif
            </td>
            <td>{{ $costume->created_at }}</td>
            {{-- <td>
                <button class="btn btn-sm rounded dropdown-toggle more-horizontal text-muted"
                    type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right shadow">
                    <a class="dropdown-item editCostumeBtn" href="#editcostumeModal"><i
                            class="fe fe-edit-2 fe-12 mr-3 text-muted"></i>Edit</a>
                    <form action="{{ route('costumes.destroy', $costume->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="dropdown-item deleteCostumeBtn"><i
                                class="fe fe-trash fe-12 mr-3 text-muted"></i>Remove</button>
                    </form>
                </div>
            </td> --}}
            <td id="btn{{ $costume->id }}">
                <button class="btn btn-sm rounded dropdown-toggle more-horizontal text-muted editCostumeBtn"
                    type="button" data-id="{{ $costume->id }}" data-toggle="modal"
                    data-target="#editcostumeModal">
                    <span class="text-muted sr-only">Edit</span>
                </button>
                <form action="{{ route('costumes.destroy', $costume->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm rounded text-muted deleteCostumeBtn">
                        <span class="fe fe-trash fe-12 mr-3"></span>
                        <span class="text-muted sr-only">Remove</span>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>