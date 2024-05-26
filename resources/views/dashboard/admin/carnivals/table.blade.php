<table class="table table-striped" id="dataTable-1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Carnival Committee</th>
            <th>Name</th>
            <th>Link</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @php $counter = 1 @endphp
        @foreach ($carnivals as $carnival)
            <tr>
                <td>{{ $counter++ }}</td>
                <td>
                    <span id="narnival_head{{ $carnival->id }}">
                        {{ isset($carnival->user) ? $carnival->user->first_name . ' ' . $carnival->user->last_name : ' ' }}
                    </span>
                    <br>
                    {{-- @if (isset($carnival->user->carnivals)) --}}
                        <a class="change_head text-decoration-underline text-primary" id="change_head{{ $carnival->id }}"
                            data-carnival_id="{{ $carnival->id }}">Change</a>

                        <select name="head_team" class="head_team" id="head_team{{ $carnival->id }}" style="display: none">
                            <option value="" selected>Select</option>
                        </select>
                    {{-- @endif --}}
                </td>
                <td>{{ $carnival->name }}</td>
                <td><a href="{{ $carnival->link }}" target="_blank" class="text-white text-decoration-underline">Open
                        Link</a></td>
                <td>
                    <button class="btn btn-sm btn-warning editCarnivalBtn" data-id="{{ $carnival->id }}">Edit</button>
                    <form action="{{ route('carnivals.destroy', $carnival->id) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-sm btn-danger deleteCarnivalBtn">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
