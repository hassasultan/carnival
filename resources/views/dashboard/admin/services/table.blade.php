<!-- table -->
<table class="table datatables" id="dataTable-1">
    <thead>
        <tr>
            <th></th>
            <th>Sr#</th>
            <th>Name</th>
            <th>Poster</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="serviceTableBody">
        @php $counter = 1 @endphp <!-- Initialize counter -->
        @foreach ($services as $service)
            <tr>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                    </div>
                </td>
                <td>{{ $counter++ }}</td> <!-- Increment and display counter -->
                <td id="name{{ $service->id }}">{{ $service->name }}</td>
                <td id="image{{ $service->id }}">
                    @if ($service->poster)
                        <img src="{{ asset('poster/' . $service->poster) }}" alt="Product Image"
                            style="max-width: 100px;">
                    @else
                        No Poster Available
                    @endif
                </td>
                <td id="created{{ $service->id }}">{{ $service->created_at }}</td>
                <td id="btn{{ $service->id }}">
                    <button class="btn btn-sm rounded dropdown-toggle more-horizontal text-muted editServiceBtn"
                        type="button" data-id="{{ $service->id }}" data-toggle="modal"
                        data-target="#editServiceModal">
                        <span class="text-muted sr-only">Edit</span>
                    </button>
                    <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm rounded text-muted deleteServiceBtn"
                            data-service-id="{{ $service->id }}">
                            <span class="fe fe-trash fe-12 mr-3"></span>
                            <span class="text-muted sr-only">Remove</span>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
