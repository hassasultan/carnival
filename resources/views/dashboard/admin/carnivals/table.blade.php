<table class="table table-striped" id="dataTable-1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Head</th>
            <th>Name</th>
            <th>Link</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @php $counter = 1 @endphp
        @foreach($carnivals as $carnival)
        <tr>
            <td>{{ $counter++ }}</td>
            <td>{{ isset($carnival->user) ? $carnival->user->first_name . ' ' . $carnival->user->last_name : 0 }}</td>
            <td>{{ $carnival->name }}</td>
            <td>{{ $carnival->link }}</td>
            <td>
                <button class="btn btn-sm btn-warning editCarnivalBtn" data-id="{{ $carnival->id }}">Edit</button>
                <form action="{{ route('carnivals.destroy', $carnival->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-sm btn-danger deleteCarnivalBtn">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
