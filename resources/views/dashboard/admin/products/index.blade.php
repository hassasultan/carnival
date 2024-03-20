@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Products</h2>
            <p class="card-text">Products table.</p>
            <div class="row my-4">
                <!-- data table -->
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary" id="openProductModal"><span
                            class="fe fe-plus fe-16 mr-3"></span>New Product</button>
                    <div class="card shadow">
                        <div class="card-body">
                            <!-- Product Messages -->
                            <div id="productMessage"></div>
                            <!-- Table Data -->
                            <div id="tableData">
                                @include('dashboard.admin.products.table')
                            </div>
                        </div>
                    </div>
                </div> <!-- data table -->
            </div> <!-- end section -->
        </div> <!-- .col-12 -->
    </div>

    <!-- New Product modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="createProductForm">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" id="category" name="category_id" required>
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <div>
                                <label for="ticket_id">Variants</label>
                            </div>
                            @foreach ($variants as $row)
                                <input type="hidden" id="div-{{ $row->id }}" value="{{ $row->title }}" />
                            @endforeach
                            {{-- <div class="form-control"> --}}
                            <select id="ticket_id" name="ticket_id[]" class="form-control select2" multiple>
                                @foreach ($variants as $row)
                                    <option value="{{ $row->id }}"
                                        data-name-{{ $row->id }}="{{ $row->title }}">{{ $row->title }}
                                    </option>
                                @endforeach
                            </select>
                            {{-- </div> --}}
                        </div>
                        <div class="form-group">
                            <label for="old_price">Old Price</label>
                            <input type="text" class="form-control" id="old_price" name="old_price">
                        </div>
                        <div class="form-group">
                            <label for="new_price">New Price</label>
                            <input type="text" class="form-control" id="new_price" name="new_price">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div id="hash_tags" class="mb-3">
                            <label for="tags">Tags</label><br>
                            @foreach ($categories as $row)
                                <span class="badge badge-primary tag badge-lg" data-id="{{ $row->id }}"
                                    style="font-size: 1.25em;">
                                    {{ $row->title }}
                                </span>
                                <input type="hidden" name="tags[]" value="{{ $row->title }}">
                            @endforeach
                        </div>
                        <p id="addNewTagText" style="color: blue; text-decoration: underline; cursor: pointer;">Add
                            New</p>
                        <div class="form-group">
                            <label for="condition">Condition</label>
                            <select class="form-control" id="condition" name="condition" required>
                                <option value="Old">Old</option>
                                <option value="New">New</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="stock_condition">Stock Condition</label>
                            <select class="form-control" id="stock_condition" name="stock_condition" required>
                                <option value="Low">Low</option>
                                <option value="In Stock">In Stock</option>
                                <option value="Out of Stock">Out of Stock</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="discount">Discount</label>
                            <input type="text" class="form-control" id="discount" name="discount">
                        </div>
                        <div class="form-group mb-3">
                            <label for="media">Media</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input select2" id="media"
                                    name="media[]" multiple>
                                <label class="custom-file-label" for="media"
                                    id="media_label">Choose file</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" id="saveProductBtn">Save Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Product modal -->
    <div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editProductForm">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="edit_id" name="edit_id">
                        <div class="form-group">
                            <label for="edit_title">Title</label>
                            <input type="text" class="form-control" id="edit_title" name="title" required>
                        </div>
                        <!-- Add other product fields here -->
                        <button type="submit" class="btn btn-primary" id="updateProductBtn">Update Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Product Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Deletion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this product?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bottom_script')
<script src="https://cdn.tiny.cloud/1/API_KEY/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        $(document).ready(function() {
            // Code for handling DataTables and AJAX requests can be added here

            // Open the product modal when clicking the "New Product" button
            $('#openProductModal').click(function() {
                $('#productModal').modal('show');
            });

            // Clear edit modal fields when the modal dismisses
            $('#editProductModal').on('hidden.bs.modal', function() {
                $('#edit_id').val('');
                $('#edit_title').val('');
                // Clear other fields as needed
            });

            // Handle form submission via AJAX for creating a new product
            $('#createProductForm').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: '{{ route('products.store') }}',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#productModal').modal('hide');
                        $('#tableData').html(response.table_html);
                        $('#productMessage').html(
                            '<div class="alert alert-success" role="alert">Product created successfully</div>'
                        );
                        setTimeout(function() {
                            $('#productMessage').html('');
                        }, 3000);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        $('#productMessage').html(
                            '<div class="alert alert-danger" role="alert">Failed to create product</div>'
                        );
                    }
                });
            });

            // Handle form submission via AJAX for updating a product
            $('#editProductForm').submit(function(event) {
                var productId = $(this).find('#edit_id').val();
                event.preventDefault();
                var formData = $(this).serialize();
                var url = '{{ route('products.update', ['product' => ':id']) }}'.replace(':id', productId);
                $.ajax({
                    url: url,
                    type: 'PUT',
                    data: formData,
                    success: function(response) {
                        $('#editProductModal').modal('hide');
                        $('#tableData').html(response.table_html);
                        $('#productMessage').html(
                            '<div class="alert alert-success" role="alert">Product updated successfully</div>'
                        );
                        setTimeout(function() {
                            $('#productMessage').html('');
                        }, 3000);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        $('#productMessage').html(
                            '<div class="alert alert-danger" role="alert">Failed to update product</div>'
                        );
                    }
                });
            });

            // Delete record
            $('.deleteProductBtn').click(function(event) {
                event.preventDefault();
                var deleteForm = $(this).closest('form');
                var formData = deleteForm.serialize();
                var url = deleteForm.attr('action');
                $('#deleteConfirmationModal').modal('show');
                $('#confirmDeleteBtn').click(function() {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: formData,
                        success: function(response) {
                            $('#deleteConfirmationModal').modal('hide');
                            $('#productMessage').html(
                                '<div class="alert alert-success" role="alert">' +
                                response.message + '</div>');
                            deleteForm.closest('tr').remove();
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            $('#productMessage').html(
                                '<div class="alert alert-danger" role="alert">Failed to delete product</div>'
                            );
                        }
                    });
                });
            });

            // Allow selecting or deselecting options by clicking on tags
            $(document).on('click', '.tag', function() {
                var tagId = $(this).data('id');
                var isSelected = $(this).hasClass('badge-primary');
                if (isSelected) {
                    $(this).removeClass('badge-primary').addClass('badge-secondary');
                } else {
                    $(this).removeClass('badge-secondary').addClass('badge-primary');
                }
            });

            // Add functionality to add a new tag when clicking on the "Add New" text
            $('#addNewTagText').click(function() {
                var newTagName = prompt('Enter the name for the new tag:');
                if (newTagName) {
                    // Generate a unique ID for the new tag
                    var newTagId = 'random_' + Math.floor(Math.random() * 1000000);
                    // Create the new tag
                    var newTag = $('<span class="badge badge-primary tag badge-lg" data-id="' + newTagId +
                        '" style="font-size: 1.25em;">' + newTagName + '</span>');
                    // Append the new tag after the last tag in the container
                    $('#hash_tags').append(newTag);

                    // Create a hidden input field for the new tag code name
                    var newInput = $('<input type="hidden" name="tags[]" value="' + newTagName +
                        '">');
                    // Append the new input field to the form
                    $('#hash_tags').append(newInput);
                }
            });
        });

        // Update label text when files are selected for additional images
        $('#media').on('change', function() {
                // Get the file names
                var files = $(this)[0].files;
                var fileNames = '';
                for (var i = 0; i < files.length; i++) {
                    fileNames += files[i].name;
                    if (i < files.length - 1) {
                        fileNames += ', ';
                    }
                }
                // Update the label text
                $('#media_label').text(fileNames);
            });
    </script>
    <script>
        tinymce.init({
            selector: '#description',
            plugins: 'lists link',
            toolbar: 'undo redo | bold italic underline | bullist numlist | link',
            menubar: false,
            height: 200,
            setup: function (editor) {
                editor.on('change', function () {
                    editor.save();
                });
            }
        });
    </script>
@endsection
