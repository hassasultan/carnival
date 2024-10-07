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
        @foreach ($products as $product)
            <tr>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                    </div>
                </td>
                <td>{{ $counter++ }}</td>
                <td>{{ $product->title }}</td>
                <td>
                    @if ($product->status == 1)
                        Active
                    @else
                        Inactive
                    @endif
                </td>
                <td>{{ $product->created_at }}</td>
                <td id="btn{{ $product->id }}">
                    <a href="{{ route('vendor.products.edit', $product->id) }}">
                        <i class="fe fe-edit-2 fe-12 mr-3 text-muted"></i>
                        Edit
                    </a>
                    {{-- <form action="{{ route('vendor.products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm rounded text-muted deleteProductBtn">
                            <span class="fe fe-trash fe-12 mr-3"></span>
                            <span class="text-muted sr-only">Remove</span>
                        </button>
                    </form> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
