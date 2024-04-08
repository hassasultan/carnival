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
        @php $counter = 1 @endphp
        @foreach ($costumes as $costume)
        <tr>
            <td>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <label class="custom-control-label"></label>
                </div>
            </td>
            <td>{{ $counter++ }}</td>
            <td>{{ $costume->title }}</td>
            <td>
                @if($costume->status == 1)
                    Active
                @else
                    Inactive
                @endif
            </td>
            <td>{{ $costume->created_at }}</td>
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