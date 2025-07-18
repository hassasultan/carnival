<table class="table table-striped" id="dataTable-1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Carnival Committee</th>
            <th>Name</th>
            <th>Region</th>
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
                        {{ isset($carnival->user) ? $carnival->user->first_name . ' ' . $carnival->user->last_name : 0 }}
                    </span>
                    <br>
                    {{-- @if (isset($carnival->user->carnivals)) --}}
                        <a class="change_head text-decoration-underline text-primary" id="change_head{{ $carnival->id }}"
                            data-carnival_id="{{ $carnival->id }}">Change</a>

                        <select name="head_team" class="head_team form-control" id="head_team{{ $carnival->id }}" style="display: none">
                            <option value="" selected>Select</option>
                        </select>
                    {{-- @endif --}}
                </td>
                <td>{{ $carnival->name }}</td>
                <td>{{ $carnival->regions->name }}</td>
                <td><a href="{{ $carnival->link }}" target="_blank" class="text-decoration-underline">{{ $carnival->link }}</a></td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton{{ $carnival->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actions
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $carnival->id }}">
                            <a class="dropdown-item editCarnivalBtn" href="#" data-id="{{ $carnival->id }}">
                                <i class="fe fe-edit-2 fe-16 mr-1"></i>Edit
                            </a>
                            <a class="dropdown-item assignMember" href="#" data-id="{{ $carnival->id }}">
                                <i class="fe fe-users fe-16 mr-1"></i>Members
                            </a>
                            <a class="dropdown-item assignMasscamp" href="#" data-id="{{ $carnival->id }}" data-model="yes">
                                <i class="fe fe-user-plus fe-16 mr-1"></i>Models
                            </a>
                            <a class="dropdown-item addEventsBtn" href="#" data-id="{{ $carnival->id }}" data-toggle="modal" data-target="#addEventsModal">
                                <i class="fe fe-calendar fe-16 mr-1"></i>Add Events
                            </a>
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('carnivals.destroy', $carnival->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="dropdown-item text-danger deleteCarnivalBtn">
                                    <i class="fe fe-trash-2 fe-16 mr-1"></i>Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>