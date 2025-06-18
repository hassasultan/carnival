@extends('dashboard.admin.layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-12">
        <h2 class="mb-2 page-title">Subcategories</h2>
        <p class="card-text">Subcategories table.</p>
        <div class="row my-4">
            <!-- data table -->
            <div class="col-md-12">
                <a href="{{ route('subcategories.create') }}" class="btn btn-primary mb-2">Add New Subcategory</a>
                <div class="card shadow">
                    <div class="card-body">
                        <!-- table -->
                        <table class="table datatables" id="dataTable-1">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Sr#</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $counter = 1 @endphp <!-- Initialize counter -->
                                @foreach ($subcategories as $subcategory)
                                <tr id="row_{{ $subcategory->id }}">
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <label class="custom-control-label"></label>
                                        </div>
                                    </td>
                                    <td>{{ $counter++ }}</td> <!-- Increment and display counter -->
                                    <td>{{ $subcategory->category ? $subcategory->category->title : 'Category Deleted' }}</td>
                                    <td>{{ $subcategory->title }}</td>
                                    <td>{{ ucfirst($subcategory->status) }}</td>
                                    <td>{{ $subcategory->created_at }}</td>
                                    <td>
                                        <button class="btn btn-sm rounded dropdown-toggle more-horizontal text-muted"
                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right shadow">
                                            <a class="dropdown-item" href="{{ route('subcategories.edit', $subcategory->id) }}"><i
                                                    class="fe fe-edit-2 fe-12 mr-3 text-muted"></i>Edit</a>
                                            <button type="button" class="dropdown-item delete-subcategory" data-id="{{ $subcategory->id }}"><i
                                                    class="fe fe-trash fe-12 mr-3 text-muted"></i>Remove</button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- data table -->
        </div> <!-- end section -->
    </div> <!-- .col-12 -->
</div>

@endsection

@section('bottom_script')
<script>
    $(document).ready(function() {
        $('.delete-subcategory').click(function() {
            var subcategoryId = $(this).data('id');
            var button = $(this);
            
            // Get deletion details first
            $.ajax({
                type: 'GET',
                url: "{{ route('subcategories.deletion-details', '__subcategory_id__') }}".replace('__subcategory_id__', subcategoryId),
                success: function(response) {
                    showDeletionConfirmation(response, subcategoryId, button);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('Failed to get deletion details.');
                }
            });
        });
        
        function showDeletionConfirmation(details, subcategoryId, button) {
            var message = `
                <div class="text-left">
                    <h5 class="text-danger mb-3">⚠️ Delete Subcategory Confirmation</h5>
                    <p><strong>Subcategory:</strong> ${details.subcategory.title}</p>
                    <p><strong>Category:</strong> ${details.subcategory.category}</p>
                    <hr>
                    <p class="text-danger"><strong>This will permanently delete:</strong></p>
                    <ul class="list-unstyled">
                        <li>• <strong>${details.products_count}</strong> Products</li>
                        <li>• <strong>${details.costumes_count}</strong> Costumes</li>
                        <li>• <strong>${details.product_variants_count}</strong> Product Variants</li>
                        <li>• <strong>${details.product_images_count}</strong> Product Images</li>
                        <li>• <strong>${details.product_media_count}</strong> Product Media Files</li>
                        <li>• <strong>${details.costume_variants_count}</strong> Costume Variants</li>
                        <li>• <strong>${details.costume_images_count}</strong> Costume Images</li>
                        <li>• <strong>${details.cart_items_count}</strong> Cart Items</li>
                        <li>• <strong>${details.order_items_count}</strong> Order Items</li>
                    </ul>
                    <hr>
                    <p class="text-danger"><strong>Total Items to Delete: ${details.total_items}</strong></p>
                    <p class="text-muted small">This action cannot be undone!</p>
                </div>
            `;
            
            if (confirm(message)) {
                // Disable button to prevent double-click
                button.prop('disabled', true);
                button.html('<i class="fe fe-trash fe-12 mr-3 text-muted"></i>Deleting...');
                
                $.ajax({
                    type: 'POST',
                    url: "{{ route('subcategories.destroy', '__subcategory_id__') }}".replace('__subcategory_id__', subcategoryId),
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "_method": "DELETE"
                    },
                    success: function(response) {
                        $('#row_' + subcategoryId).fadeOut(300, function() {
                            $(this).remove();
                        });
                        alert('Subcategory and all related items deleted successfully.');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('Failed to delete subcategory.');
                        // Re-enable button
                        button.prop('disabled', false);
                        button.html('<i class="fe fe-trash fe-12 mr-3 text-muted"></i>Remove');
                    }
                });
            }
        }
    });
</script>
@endsection
