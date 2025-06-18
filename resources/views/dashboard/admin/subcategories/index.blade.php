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

<!-- Deletion Confirmation Modal -->
<div class="modal fade" id="deleteSubcategoryModal" tabindex="-1" role="dialog" aria-labelledby="deleteSubcategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteSubcategoryModalLabel">
                    <i class="fe fe-alert-triangle mr-2"></i>Delete Subcategory Confirmation
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="deletionDetailsContent">
                    <!-- Content will be loaded here -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <i class="fe fe-x mr-1"></i>Cancel
                </button>
                <button type="button" class="btn btn-danger" id="confirmDeleteSubcategory">
                    <i class="fe fe-trash mr-1"></i>Yes, Delete Everything
                </button>
            </div>
        </div>
    </div>
</div>

@section('bottom_script')
<script>
    var currentSubcategoryId = null;
    var currentDeleteButton = null;
    
    $(document).ready(function() {
        $('.delete-subcategory').click(function() {
            var subcategoryId = $(this).data('id');
            var button = $(this);
            
            currentSubcategoryId = subcategoryId;
            currentDeleteButton = button;
            
            // Get deletion details first
            $.ajax({
                type: 'GET',
                url: "{{ route('subcategories.deletion-details', '__subcategory_id__') }}".replace('__subcategory_id__', subcategoryId),
                success: function(response) {
                    showDeletionModal(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('Failed to get deletion details.');
                }
            });
        });
        
        function showDeletionModal(details) {
            var content = `
                <div class="text-left">
                    <div class="alert alert-warning">
                        <h6 class="alert-heading"><i class="fe fe-alert-triangle mr-1"></i>Warning!</h6>
                        <p class="mb-0">This action will permanently delete the subcategory and all its related data. This cannot be undone!</p>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-primary">Subcategory Information</h6>
                            <p><strong>Name:</strong> ${details.subcategory.title}</p>
                            <p><strong>Category:</strong> ${details.subcategory.category}</p>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-danger">Items to be Deleted</h6>
                            <div class="table-responsive">
                                <table class="table table-sm table-borderless">
                                    <tbody>
                                        <tr><td>Products:</td><td><span class="badge badge-primary">${details.products_count}</span></td></tr>
                                        <tr><td>Costumes:</td><td><span class="badge badge-primary">${details.costumes_count}</span></td></tr>
                                        <tr><td>Product Variants:</td><td><span class="badge badge-info">${details.product_variants_count}</span></td></tr>
                                        <tr><td>Product Images:</td><td><span class="badge badge-info">${details.product_images_count}</span></td></tr>
                                        <tr><td>Product Media:</td><td><span class="badge badge-info">${details.product_media_count}</span></td></tr>
                                        <tr><td>Costume Variants:</td><td><span class="badge badge-info">${details.costume_variants_count}</span></td></tr>
                                        <tr><td>Costume Images:</td><td><span class="badge badge-info">${details.costume_images_count}</span></td></tr>
                                        <tr><td>Cart Items:</td><td><span class="badge badge-warning">${details.cart_items_count}</span></td></tr>
                                        <tr><td>Order Items:</td><td><span class="badge badge-warning">${details.order_items_count}</span></td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="alert alert-danger">
                        <h6 class="alert-heading"><i class="fe fe-alert-circle mr-1"></i>Total Impact</h6>
                        <p class="mb-0"><strong>Total Items to Delete: <span class="badge badge-danger badge-lg">${details.total_items}</span></strong></p>
                    </div>
                </div>
            `;
            
            $('#deletionDetailsContent').html(content);
            $('#deleteSubcategoryModal').modal('show');
        }
        
        $('#confirmDeleteSubcategory').click(function() {
            if (currentSubcategoryId && currentDeleteButton) {
                var button = currentDeleteButton;
                
                // Disable button to prevent double-click
                button.prop('disabled', true);
                button.html('<i class="fe fe-trash fe-12 mr-3 text-muted"></i>Deleting...');
                
                $.ajax({
                    type: 'POST',
                    url: "{{ route('subcategories.destroy', '__subcategory_id__') }}".replace('__subcategory_id__', currentSubcategoryId),
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "_method": "DELETE"
                    },
                    success: function(response) {
                        $('#deleteSubcategoryModal').modal('hide');
                        $('#row_' + currentSubcategoryId).fadeOut(300, function() {
                            $(this).remove();
                        });
                        
                        // Show success message
                        showSuccessMessage('Subcategory and all related items deleted successfully!');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        $('#deleteSubcategoryModal').modal('hide');
                        alert('Failed to delete subcategory.');
                        // Re-enable button
                        button.prop('disabled', false);
                        button.html('<i class="fe fe-trash fe-12 mr-3 text-muted"></i>Remove');
                    }
                });
            }
        });
        
        function showSuccessMessage(message) {
            // Create a temporary success alert
            var alertHtml = `
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="position: fixed; top: 20px; right: 20px; z-index: 9999; min-width: 300px;">
                    <i class="fe fe-check-circle mr-2"></i>${message}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            `;
            $('body').append(alertHtml);
            
            // Auto-remove after 5 seconds
            setTimeout(function() {
                $('.alert-success').fadeOut(300, function() {
                    $(this).remove();
                });
            }, 5000);
        }
    });
</script>
@endsection
