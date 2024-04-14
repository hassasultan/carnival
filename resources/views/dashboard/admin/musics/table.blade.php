<!-- table -->
<table class="table datatables" id="dataTable-1">
    <thead>
        <tr>
            <th></th>
            <th>Sr#</th>
            <th>Artiste Name</th>
            <th>Release Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="musicTableBody">
        @php $counter = 1 @endphp <!-- Initialize counter -->
        @foreach ($musics as $music)
            <tr>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                    </div>
                </td>
                <td>{{ $counter++ }}</td> <!-- Increment and display counter -->
                <td id="artiste_name{{ $music->id }}">{{ $music->artiste_name }}</td>
                <td id="release_date{{ $music->id }}">{{ $music->release_date }}</td>
                <td id="btn{{ $music->id }}">
                    <button class="btn btn-sm rounded dropdown-toggle more-horizontal text-muted editMusicBtn"
                        type="button" data-id="{{ $music->id }}" data-toggle="modal"
                        data-target="#editMusicModal">
                        <span class="text-muted sr-only">Edit</span>
                    </button>
                    <form action="{{ route('musics.destroy', $music->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm rounded text-muted deleteMusicBtn" data-music-id="{{ $music->id }}">
                            <span class="fe fe-trash fe-12 mr-3"></span>
                            <span class="text-muted sr-only">Remove</span>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
