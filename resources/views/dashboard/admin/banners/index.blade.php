@extends('dashboard.admin.layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-12">
        <h2 class="mb-2 page-title">Banners</h2>
        <p class="card-text">Banners management table.</p>
        <div class="row my-4">
            <!-- data table -->
            <div class="col-md-12">
                <a href="{{ route('banners.create') }}" class="btn btn-primary mb-2">Add New Banner</a>
                <div class="card shadow">
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ session('error') }}
                            </div>
                        @endif

                        <!-- table -->
                        <table class="table datatables" id="dataTable-1">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Sr#</th>
                                    <th>Poster</th>
                                    <th>Media Type</th>
                                    <th>Type</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $counter = 1 @endphp
                                @foreach ($banners as $banner)
                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <label class="custom-control-label"></label>
                                        </div>
                                    </td>
                                    <td>{{ $counter++ }}</td>
                                    <td>
                                        @if($banner->poster)
                                            <img src="{{ asset($banner->poster) }}" alt="Poster" width="100" height="60" style="object-fit: cover;">
                                        @elseif($banner->banner_image && !str_contains($banner->banner_image, '.mp4') && !str_contains($banner->banner_image, '.avi') && !str_contains($banner->banner_image, '.mov') && !str_contains($banner->banner_image, '.wmv'))
                                            <img src="{{ asset($banner->banner_image) }}" alt="Banner" width="100" height="60" style="object-fit: cover;">
                                        @else
                                            <div class="bg-light d-flex align-items-center justify-content-center" style="width: 100px; height: 60px;">
                                                <i class="fe fe-image text-muted"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        @if($banner->banner_image && (str_contains($banner->banner_image, '.mp4') || str_contains($banner->banner_image, '.avi') || str_contains($banner->banner_image, '.mov') || str_contains($banner->banner_image, '.wmv')))
                                            <span class="badge badge-info">
                                                <i class="fe fe-video mr-1"></i>Video
                                            </span>
                                        @else
                                            <span class="badge badge-secondary">
                                                <i class="fe fe-image mr-1"></i>Image
                                            </span>
                                        @endif
                                    </td>
                                    <td>{{ $banner->type }}</td>
                                    <td>{{ Str::limit($banner->description, 50) }}</td>
                                    <td>
                                        @if($banner->status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>{{ $banner->created_at->format('Y-m-d H:i') }}</td>
                                    <td>
                                        <button class="btn btn-sm rounded dropdown-toggle more-horizontal text-muted"
                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <span class="text-muted sr-only">Action</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right shadow">
                                            <a class="dropdown-item" href="{{ route('banners.edit', $banner->id) }}"><i
                                                    class="fe fe-edit-2 fe-12 mr-3 text-muted"></i>Edit</a>
                                            <button type="button" class="dropdown-item delete-banner" data-id="{{ $banner->id }}"><i
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
<div class="modal fade" id="deleteBannerModal" tabindex="-1" role="dialog" aria-labelledby="deleteBannerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteBannerModalLabel">
                    <i class="fe fe-alert-triangle mr-2"></i>Delete Banner Confirmation
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="bannerDeletionDetailsContent">
                    <!-- Content will be loaded here -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <i class="fe fe-x mr-1"></i>Cancel
                </button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBanner">
                    <i class="fe fe-trash mr-1"></i>Yes, Delete Banner
                </button>
            </div>
        </div>
    </div>
</div>

@section('bottom_script')
<script>
    var currentBannerId = null;
    var currentBannerDeleteButton = null;
    
    $(document).ready(function() {
        // Use event delegation for delete buttons (works with DataTable)
        $(document).on('click', '.delete-banner', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            var bannerId = $(this).data('id');
            var button = $(this);
            
            console.log('Delete button clicked for banner ID:', bannerId); // Debug log
            
            currentBannerId = bannerId;
            currentBannerDeleteButton = button;
            
            // Get deletion details first
            $.ajax({
                type: 'GET',
                url: "{{ route('banners.deletion-details', '__banner_id__') }}".replace('__banner_id__', bannerId),
                success: function(response) {
                    showBannerDeletionModal(response);
                },
                error: function(xhr, status, error) {
                    console.error('Error getting deletion details:', xhr.responseText);
                    alert('Failed to get deletion details. Please try again.');
                }
            });
        });
        
        function showBannerDeletionModal(details) {
            var content = `
                <div class="text-left">
                    <div class="alert alert-warning">
                        <h6 class="alert-heading"><i class="fe fe-alert-triangle mr-1"></i>Warning!</h6>
                        <p class="mb-0">This action will permanently delete the banner and all associated files. This cannot be undone!</p>
                    </div>
                    
                    <div class="alert alert-danger">
                        <h6 class="alert-heading"><i class="fe fe-alert-circle mr-1"></i>Impact</h6>
                        <p class="mb-0"><strong>This will permanently remove the banner and all associated files from the server.</strong></p>
                        <small class="text-muted">The banner will no longer be available on the website.</small>
                    </div>
                </div>
            `;
            
            $('#bannerDeletionDetailsContent').html(content);
            $('#deleteBannerModal').modal('show');
        }
        
        $('#confirmDeleteBanner').click(function() {
            if (currentBannerId && currentBannerDeleteButton) {
                var button = currentBannerDeleteButton;
                
                // Disable button to prevent double-click
                button.prop('disabled', true);
                button.html('<i class="fe fe-trash fe-12 mr-3 text-muted"></i>Deleting...');
                
                $.ajax({
                    type: 'POST',
                    url: "{{ route('banners.destroy', '__banner_id__') }}".replace('__banner_id__', currentBannerId),
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "_method": "DELETE"
                    },
                    success: function(response) {
                        $('#deleteBannerModal').modal('hide');
                        
                        // Show success message
                        $('<div class="alert alert-success alert-dismissible">' +
                            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
                            'Banner and associated files deleted successfully.' +
                            '</div>').insertBefore('.card-body table').delay(3000).fadeOut();
                        
                        // Remove the row from the table
                        button.closest('tr').fadeOut(300, function() {
                            $(this).remove();
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error deleting banner:', xhr.responseText);
                        
                        // Re-enable button
                        button.prop('disabled', false);
                        button.html('<i class="fe fe-trash fe-12 mr-3 text-muted"></i>Remove');
                        
                        // Show error message
                        $('<div class="alert alert-danger alert-dismissible">' +
                            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
                            'Failed to delete banner. Please try again.' +
                            '</div>').insertBefore('.card-body table').delay(3000).fadeOut();
                    }
                });
            }
        });
        
        // Debug: Check if delete buttons exist
        console.log('Delete buttons found:', $('.delete-banner').length);
    });
</script>
@endsection
