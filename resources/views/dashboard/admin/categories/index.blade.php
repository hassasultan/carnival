@extends('dashboard.admin.layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-12">
        <h2 class="mb-2 page-title">Categories</h2>
        <p class="card-text">Categories table.</p>
        <div class="row my-4">
            <!-- data table -->
            <div class="col-md-12">
                <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">Add New Category</a>
                <div class="card shadow">
                    <div class="card-body">
                        <!-- table -->
                        <table class="table datatables" id="dataTable-1">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Sr#</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Icon</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $counter = 1 @endphp <!-- Initialize counter -->
                                @foreach ($categories as $category)
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <label class="custom-control-label"></label>
                                        </div>
                                    </td>
                                    <td>{{ $counter++ }}</td> <!-- Increment and display counter -->
                                    <td>{{ $category->title }}</td>
                                    <td>{{ $category->type }}</td>
                                    <td>
                                        <img src="{{ asset($category->icon) }}" alt="icon" width="50">
                                    </td>
                                    <td>
                                        @if($category->status == 1)
                                            Active
                                        @else
                                            Inactive
                                        @endif
                                    </td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>
                                        <button class="btn btn-sm rounded dropdown-toggle more-horizontal text-muted"
                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right shadow">
                                            <a class="dropdown-item" href="{{ route('categories.edit', $category->id) }}"><i
                                                    class="fe fe-edit-2 fe-12 mr-3 text-muted"></i>Edit</a>
                                            <button type="button" class="dropdown-item delete-category" data-id="{{ $category->id }}"><i
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
        $('.delete-category').click(function() {
            var categoryId = $(this).data('id');
            var button = $(this);
            
            // Get deletion details first
            $.ajax({
                type: 'GET',
                url: "{{ route('categories.deletion-details', '__category_id__') }}".replace('__category_id__', categoryId),
                success: function(response) {
                    showDeletionConfirmation(response, categoryId, button);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('Failed to get deletion details.');
                }
            });
        });
        
        function showDeletionConfirmation(details, categoryId, button) {
            var message = `
                <div class="text-left">
                    <h5 class="text-danger mb-3">⚠️ Delete Category Confirmation</h5>
                    <p><strong>Category:</strong> ${details.category.title}</p>
                    <p><strong>Type:</strong> ${details.category.type}</p>
                    <hr>
                    <p class="text-danger"><strong>This will permanently delete:</strong></p>
                    <ul class="list-unstyled">
                        <li>• <strong>${details.subcategories_count}</strong> Subcategories</li>
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
                    url: "{{ route('categories.destroy', '__category_id__') }}".replace('__category_id__', categoryId),
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "_method": "DELETE"
                    },
                    success: function(response) {
                        // Reload the page to show updated data
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('Failed to delete category.');
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
