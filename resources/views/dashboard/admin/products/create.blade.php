@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Create Product</h2>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Product Information</strong>
                </div>
                <div class="card-body col-sm-6">
                    {{-- <form method="POST" action="{{ route('products.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Enter product title" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="slug">Slug</label>
                                <input type="text" id="slug" name="slug" class="form-control" placeholder="Enter product slug" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="category_id">Category</label>
                                <select id="category_id" name="category_id" class="form-control" required>
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control" placeholder="Enter product description"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="old_price">Old Price</label>
                                <input type="text" id="old_price" name="old_price" class="form-control" placeholder="Enter old price" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="new_price">New Price</label>
                                <input type="text" id="new_price" name="new_price" class="form-control" placeholder="Enter new price" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="status">Status</label>
                                <select id="status" name="status" class="form-control" required>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Product</button>
                        </div>
                    </div>
                </form> --}}
                    <form id="createProductForm">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="summernote" name="description" class="form-control description" placeholder="Enter description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control category" id="category" name="category_id" required>
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" style="display: none;">
                            <label for="subcategory">Subcategory</label>
                            <select class="form-control" id="subcategory" name="subcategory_id" required>
                                <option value="">Select Subcategory</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <div>
                                <label for="variant_id">Variants</label>
                            </div>
                            @foreach ($variants as $row)
                                <input type="hidden" id="div-{{ $row->id }}" value="{{ $row->title }}" />
                            @endforeach
                            <select id="variant_id" class="form-control select2 d-none" multiple>
                            </select>
                        </div>
                        <div id="embed-div">

                        </div>
                        <div class="form-group">
                            <label for="old_price">Regular Price</label>
                            <input type="text" class="form-control" id="old_price" name="old_price">
                        </div>
                        <div class="form-group">
                            <label for="new_price">Discounted Price</label>
                            <input type="text" class="form-control" id="new_price" name="new_price">
                        </div>
                        <div class="form-group">
                            <label for="sale">On Sale</label>
                            <select class="form-control" id="sale" name="sale" required>
                                <option value="true">Yes</option>
                                <option value="false">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div id="hash_tags" class="mb-3">
                            <label for="tags">Tags</label><br>
                            <input type="hidden" name="tags[]" value="{{ $row->title }}">
                            <input type="text" id="tagInput" class="form-control" placeholder="Add a new tag...">
                        </div>
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
                            <input type="number" class="form-control" id="discount" name="discount">
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" class="form-control" id="facebook" name="facebook">
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input type="text" class="form-control" id="instagram" name="instagram">
                        </div>
                        <div class="form-group">
                            <label for="youtube">Youtube</label>
                            <input type="text" class="form-control" id="youtube" name="youtube">
                        </div>
                        <div class="form-group">
                            <label for="twitter">Twitter(X)</label>
                            <input type="text" class="form-control" id="twitter" name="twitter">
                        </div>
                        <div class="form-group">
                            <label for="tiktok">Tiktok</label>
                            <input type="text" class="form-control" id="tiktok" name="tiktok">
                        </div>
                        <div class="form-group">
                            <label for="pinterest">Pinterest</label>
                            <input type="text" class="form-control" id="pinterest" name="pinterest">
                        </div>
                        <div class="form-group">
                            <label for="linkedin">LinkedIn</label>
                            <input type="text" class="form-control" id="linkedin" name="linkedin">
                        </div>
                        <div class="form-group">
                            <label for="information">Information</label>
                            <textarea id="information" name="information" class="form-control information summernote" placeholder=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="reviews">Reviews</label>
                            <textarea id="reviews" name="reviews" class="form-control reviews summernote" placeholder=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="extra">Extra</label>
                            <textarea id="extra" name="extra" class="form-control extra summernote" placeholder=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="guarantee">Guarantee</label>
                            <textarea id="guarantee" name="guarantee" class="form-control guarantee summernote" placeholder=""></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="image">Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image" id="image_label">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="media">Media</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input select2" id="media" name="media[]"
                                    multiple>
                                <label class="custom-file-label" for="media" id="media_label">Choose file</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" id="saveProductBtn">Save Product</button>
                    </form>
                </div>
            </div> <!-- / .card -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
@endsection

@section('bottom_script')
    <script>
        // Function to clear edit modal fields
        function clearEditModalFields() {
            $('#edit_title').val('');
            $('#edit_type').val('');
            $('#edit_description').val('');
            $('#edit_category').val('');
            $('#edit_status').val('');
        }

        $(document).ready(function() {
            $('#openProductModal').click(function() {
                $('#productModal').modal('show');
            });

            $(document).on('click', '.editProductBtn', function() {
                var productId = $(this).data('id');
                $.ajax({
                    url: '{{ route('products.edit', ':id') }}'.replace(':id', productId),
                    type: 'GET',
                    success: function(response) {
                        console.log('edit', response);
                        $('#edit_id').val(response.product.id);
                        $('#edit_title').val(response.product.title);
                        $('#edit_description').val(response.product.description);
                        $('#edit_category').val(response.product.category_id);
                        $('#edit_status').val(response.product.status);
                        $('#edit_old_price').val(response.product.old_price);
                        $('#edit_new_price').val(response.product.new_price);
                        $('#edit_discount').val(response.product.discount);
                        $('#edit_condition').val(response.product.condition);
                        $('#edit_stock_condition').val(response.product.stock_condition);
                        $('#edit_facebook').val(response.product.facebook);
                        $('#edit_instagram').val(response.product.instagram);
                        $('#edit_youtube').val(response.product.youtube);
                        $('#edit_twitter').val(response.product.twitter);
                        $('#edit_tiktok').val(response.product.tiktok);
                        $('#edit_pinterest').val(response.product.pinterest);
                        $('#edit_linkedin').val(response.product.linkedin);

                        // Show the edit modal
                        $('#editproductModal').modal('show');

                        // Autopopulate variant select with the product's variants
                        var variantIds = response.product.variants.map(variant => variant.id);
                        $('#edit_variant_id').val(variantIds).trigger('change');

                        // Display variant images preview
                        displayVariantImages(response.product.variant_images);

                        // Populate the subcategory dropdown if available
                        var subcategoryDropdown = $('#edit_subcategory');
                        subcategoryDropdown.empty(); // Clear existing options
                        subcategoryDropdown.append($('<option>', {
                            value: '',
                            text: 'Select Subcategory'
                        }));
                        if (response.product.subcategory) {
                            if (Array.isArray(response.product.subcategory)) {
                                // If the subcategory data is an array
                                response.product.subcategory.forEach(subcategory => {
                                    subcategoryDropdown.append($('<option>', {
                                        value: subcategory.id,
                                        text: subcategory.title
                                    }));
                                });
                            } else {
                                // If the subcategory data is an object
                                subcategoryDropdown.append($('<option>', {
                                    value: response.product.subcategory.id,
                                    text: response.product.subcategory.title
                                }));
                            }
                            $('#edit_subcategory_input')
                                .show(); // Show the subcategory dropdown
                        }

                        // Autopopulate tags if available
                        if (response.product.tags) {
                            var tags = response.product.tags.split(
                                ','); // Convert tags string to an array
                            $('#edit_hash_tags').empty();
                            tags.forEach(tag => {
                                var tagElement = $(
                                    '<span class="badge badge-primary tag badge-lg" data-id="' +
                                    tag.trim() +
                                    '" style="font-size: 1.25em;">#' + tag.trim() +
                                    '</span>');
                                var hiddenInput = $(
                                    '<input type="hidden" name="tags[]" value="' +
                                    tag.trim() + '">');
                                $('#edit_hash_tags').append(tagElement).append(
                                    hiddenInput);
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        $('#productMessage').html(
                            '<div class="alert alert-danger" role="alert">Failed to fetch product details for editing</div>'
                        );
                    }
                });
            });

            // Clear edit modal fields when the modal dismisses
            $('#editproductModal').on('hidden.bs.modal', function() {
                clearEditModalFields();
            });

            // Handle form submission via AJAX for creating a new product
            $('#createProductForm').submit(function(event) {
                event.preventDefault();
                var formData = new FormData($(this)[0]);

                console.log('formDataformData', formData);
                var hasVariantImages = formData.has('variant_images[]');
                console.log('Has variant_images[]:', hasVariantImages);

                $.ajax({
                    url: '{{ route('products.store') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {

                        // Reinitialize DataTables after updating table content
                        $('#dataTable-1').DataTable({
                            autoWidth: true,
                            "lengthMenu": [
                                [16, 32, 64, -1],
                                [16, 32, 64, "All"]
                            ]
                        });

                        $('#productMessage').html(
                            '<div class="alert alert-success" role="alert">Product created successfully</div>'
                        );
                        setTimeout(function() {
                            $('#productMessage').html('');
                        }, 3000);
                        window.location.href = '{{ route('products.index') }}';
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
                var formData = new FormData($(this)[0]);
                console.log('formDataformData', formData);
                var url = '{{ route('products.update', ':id') }}'.replace(':id', productId);

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        $('#editproductModal').modal('hide');
                        $(this).trigger('reset');
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
            // Delete recrod
            $('.deleteProductBtn').click(function(event) {
                event.preventDefault();
                var deleteForm = $(this).closest('form');
                var formData = deleteForm.serialize();
                var url = deleteForm.attr('action');

                // Show confirmation modal before deleting
                $('#deleteConfirmationModal').modal('show');

                // Handle deletion confirmation
                $('#confirmDeleteBtn').click(function() {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: formData,
                        success: function(response) {
                            $('#deleteConfirmationModal').modal('hide');
                            // Show success message on the page
                            $('#productMessage').html(
                                '<div class="alert alert-success" role="alert">' +
                                response.message + '</div>');

                            // Optionally, you can remove the deleted product row from the table
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
                    // Remove the hidden input field for the unselected tag
                    $(this).next('input[name="tags[]"]').remove();
                    $(this).removeClass('badge-primary').addClass('badge-secondary');
                } else {
                    // Create a hidden input field for the selected tag
                    var tagName = $(this).text().trim().replace('#', '');
                    var newInput = $('<input type="hidden" name="tags[]" value="#' + tagName +
                        '">');
                    // Append the new input field to the form
                    $('#hash_tags').append(newInput);
                    $(this).removeClass('badge-secondary').addClass('badge-primary');
                }
            });

            // Allow selecting or deselecting options by clicking on tags
            $(document).on('click', '.tag', function() {
                var tagId = $(this).data('id');
                var tagInput = $(this).next('input[name="tags[]"]');
                if (tagInput.length) {
                    // Remove the hidden input field for the tag
                    tagInput.remove();
                }
                $(this).remove(); // Remove the tag from the UI
            });

            // Functionality to add a new tag when pressing Enter in the input field
            $('#tagInput').keypress(function(event) {
                if (event.which === 13) {
                    var newTagName = $(this).val().trim();
                    if (newTagName) {
                        // Generate a unique ID for the new tag
                        var newTagId = 'random_' + Math.floor(Math.random() * 1000000);
                        // Create the new tag
                        var newTag = $('<span class="badge badge-primary tag badge-lg" data-id="' +
                            newTagId +
                            '" style="font-size: 1.25em;">#' + newTagName + '</span>');
                        // Append the new tag after the input field
                        $('#tagInput').before(newTag);

                        // Create a hidden input field for the new tag code name
                        var newInput = $('<input type="hidden" name="tags[]" value="#' + newTagName +
                            '">');
                        // Append the new input field to the form
                        $('#hash_tags').append(newInput);

                        // Clear the input field
                        $(this).val('');
                    }
                }
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

            // Update label text when files are selected for additional images
            $('#image').on('change', function() {
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
                $('#image_label').text(fileNames);
            });
        });

        // select2 initialization for edit modal
        $('#editproductModal').on('shown.bs.modal', function() {
            $('#edit_variant_id').select2();
        });

        // Functionality to add a new tag when clicking on the "Add New" text in edit modal
        // $('#edit_addNewTagText').click(function() {
        //     var newTagName = prompt('Enter the name for the new tag:');
        //     if (newTagName) {
        //         // Generate a unique ID for the new tag
        //         var newTagId = 'random_' + Math.floor(Math.random() * 1000000);
        //         // Create the new tag
        //         var newTag = $('<span class="badge badge-primary tag badge-lg" data-id="' + newTagId +
        //             '" style="font-size: 1.25em;">#' + newTagName + '</span>');
        //         // Append the new tag after the last tag in the container
        //         $('#edit_hash_tags').append(newTag);

        //         // Create a hidden input field for the new tag code name
        //         var newInput = $('<input type="hidden" name="tags[]" value="#' + newTagName +
        //             '">');
        //         // Append the new input field to the form
        //         $('#edit_hash_tags').append(newInput);
        //     }
        // });

        $('.category').on('change', function() {
            $('#variant_id').addClass('d-none');
            var category = $(this).val();
            var subcategoryDropdown = $(this).closest('.form-group').next('.form-group').find('select');
            var url = "{{ route('get.subcategories', ':category') }}";
            url = url.replace(':category', category);
            $.ajax({
                type: 'GET',
                url: url, // Manually construct the URL
                success: function(response) {
                    console.log(response);
                    subcategoryDropdown.empty(); // Clear existing options
                    subcategoryDropdown.append($('<option>', {
                        value: '',
                        text: 'Select Subcategory'
                    }));
                    response.subcategories.forEach(function(subcategory) {
                        subcategoryDropdown.append($('<option>', {
                            value: subcategory.id,
                            text: subcategory.title
                        }));
                    });
                    subcategoryDropdown.closest('.form-group').show(); // Show the subcategory dropdown
                    var html = '';
                    $.each(response.varients, function(index, row) {
                        html += '<option value="' + row.id + '" data-type="' + row.type + '">' +
                            row.title + '</option>';
                    });
                    $('#variant_id').html(html);
                    $('#variant_id').removeClass('d-none');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        // Allow selecting or deselecting options by clicking on tags in edit modal
        $(document).on('click', '#editproductModal .tag', function() {
            var tagId = $(this).data('id');
            var tagInput = $(this).next('input[name="tags[]"]');
            if (tagInput.length) {
                // Remove the hidden input field for the tag
                tagInput.remove();
            }
            $(this).remove(); // Remove the tag from the UI
        });

        // Functionality to add a new tag in edit modal when pressing Enter in the input field
        $('#editproductModal #edit_tagInput').keypress(function(event) {
            if (event.which === 13) { // Check if Enter key is pressed
                var newTagName = $(this).val().trim();
                if (newTagName) {
                    // Generate a unique ID for the new tag
                    var newTagId = 'random_' + Math.floor(Math.random() * 1000000);
                    // Create the new tag
                    var newTag = $('<span class="badge badge-primary tag badge-lg" data-id="' +
                        newTagId +
                        '" style="font-size: 1.25em;">#' + newTagName + '</span>');
                    // Append the new tag after the input field
                    $('#editproductModal #edit_tagInput').before(newTag);

                    // Create a hidden input field for the new tag code name
                    var newInput = $('<input type="hidden" name="tags[]" value="' + newTagName +
                        '">'); // Do not include '#' symbol here
                    // Append the new input field to the form
                    $('#editproductModal #edit_hash_tags').append(newInput);

                    // Clear the input field
                    $(this).val('');
                }
            }
        });

        var new_index = 0;

        var counter = 0;

        function cloneForm(id, type) {
            console.log(new_index);
            counter++;
            var newHtml = '';
            newHtml += '<div class="parent">';
            newHtml += '<div class="row">';
            newHtml += '<div class="col-10"></div>';
            newHtml += '<div class="col-2">';
            newHtml += '<button type="button" class="btn btn-danger minus-btn">-</button>';
            newHtml += '</div>';
            newHtml += '</div>';
            if (type == 'both') {
                newHtml += '<div class="form-group mb-3">';
                newHtml += '<div class="form-row">';
                newHtml += '<div class="form-group col-md-6">';
                newHtml += '<label for="variant_name-1' + id + "-" + counter + '">Variant Name</label>';
                newHtml += '<input type="text" class="form-control" id="variant_name-1' + id + "-" + counter +
                    '" name="variant_name[]">';
                newHtml += '</div>';
                newHtml += '<div class="form-group col-md-6">';
                newHtml += '<label for="value-1' + id + "-" + counter + '">Value</label>';
                newHtml += '<input type="text" class="form-control" name="value[]" required>';
                newHtml += '<input type="hidden" value="' + id + '" name="variant_id[]" required>';
                newHtml += '<input type="hidden" class="form-control" name="type[]" value="text">';
                newHtml += '</div>';
                newHtml += '</div>';
                newHtml += '</div>';
                newHtml += '<div class="form-group mb-3">';
                newHtml += '<div class="form-row">';
                newHtml += '<div class="form-group col-md-12">';
                newHtml += '<label for="variant_images-1' + id + "-" + counter + '">Variant Images</label>';
                newHtml += '<input type="file" class="custom-file-input select2" id="variant_images-1' + id + "-" +
                    counter +
                    '" name="variant_images[text-' + new_index + '][]" multiple>';
                newHtml += '<label class="custom-file-label" for="variant_images-1' + id + "-" + counter +
                    '" id="variant_images_label-' +
                    counter + '">Choose files</label>';
                newHtml += '<div class="image-preview" id="image-preview-1' + id + "-" + counter +
                    '"></div>'; // Div to show image preview
                newHtml += '</div>';
                newHtml += '</div>';
                newHtml += '</div>';
                newHtml += '<div class="form-group mb-3">';
                newHtml += '<div class="form-row">';
                newHtml += '<div class="form-group col-md-6">';
                newHtml += '<label for="variant_name-2' + id + "-" + counter + '">Variant Name</label>';
                newHtml += '<input type="color" class="form-control" id="variant_name-2' + id + "-" + counter +
                    '" name="variant_name[]">';
                newHtml += '<input type="hidden" value="' + id + '" name="variant_id[]" required>';
                newHtml += '<input type="hidden" class="form-control" name="type[]" value="color">';
                newHtml += '</div>';
                newHtml += '<div class="form-group col-md-6">';
                newHtml += '<label for="value-2' + id + "-" + counter + '">Value</label>';
                newHtml += '<input type="text" class="form-control" name="value[]" required>';
                newHtml += '</div>';
                newHtml += '</div>';
                newHtml += '</div>';
                newHtml += '<div class="form-group mb-3">';
                newHtml += '<div class="form-row">';
                newHtml += '<div class="form-group col-md-12">';
                new_index = new_index + 1;
                newHtml += '<label for="variant_images-2' + id + "-" + counter + '">Variant Images</label>';
                newHtml += '<input type="file" class="custom-file-input select2" id="variant_images-2' + id + "-" +
                    counter +
                    '" name="variant_images[color-' + new_index + '][]" multiple>';
                newHtml += '<label class="custom-file-label" for="variant_images-2' + id + "-" + counter +
                    '" id="variant_images_label-' +
                    counter + '">Choose files</label>';
                newHtml += '<div class="image-preview" id="image-preview-2' + id + "-" + counter +
                    '"></div>'; // Div to show image preview
                newHtml += '</div>';
                newHtml += '</div>';
                newHtml += '</div>';
            } else {
                newHtml += '<div class="form-group mb-3">';
                newHtml += '<div class="form-row">';
                newHtml += '<div class="form-group col-md-6">';
                newHtml += '<label for="variant_name-' + id + "-" + counter + '">Variant Name</label>';
                newHtml += '<input type="' + type + '" class="form-control" id="variant_name-' + id + "-" + counter +
                    '" name="variant_name[]">';
                newHtml += '<input type="hidden" value="' + id + '" name="variant_id[]" required>';
                newHtml += '<input type="hidden" class="form-control" name="type[]" value="' + type + '">';
                newHtml += '</div>';
                newHtml += '<div class="form-group col-md-6">';
                newHtml += '<label for="value-' + id + "-" + counter + '">Value</label>';
                newHtml += '<input type="text" class="form-control" name="value[]" required>';
                newHtml += '</div>';
                newHtml += '</div>';
                newHtml += '</div>';
                newHtml += '<div class="form-group mb-3">';
                newHtml += '<div class="form-row">';
                newHtml += '<div class="form-group col-md-12">';
                newHtml += '<label for="variant_images-' + id + "-" + counter + '">Variant Images</label>';
                newHtml += '<input type="file" class="custom-file-input select2" id="variant_images-' + id + "-" + counter +
                    '" name="variant_images[' + type + '-' + new_index + '][]" multiple>';
                newHtml += '<label class="custom-file-label" for="variant_images-' + id + "-" + counter +
                    '" id="variant_images_label-' +
                    counter + '">Choose files</label>';
                newHtml += '<div class="image-preview" id="image-preview-' + id + "-" + counter +
                    '"></div>'; // Div to show image preview
                newHtml += '</div>';
                newHtml += '</div>';
                newHtml += '</div>';
            }
            newHtml += '</div>';

            // Append the cloned form elements to the container
            document.getElementById('var-card').insertAdjacentHTML('beforeend', newHtml);
        }

        function removeForm(element) {
            element.closest('.parent').remove(); // Remove the closest parent form group
        }

        function plusBTN() {
            console.log("check");
            var id = $("#plus-btn").attr('data-id');
            var type = $("#plus-btn").attr('data-type');
            cloneForm(id, type);
        }
        // document.getElementById('plus-btn').addEventListener('click', function() {
        //     cloneForm(); // Call the function to clone the form elements
        // });
        document.addEventListener('click', function(event) {
            if (event.target && event.target.classList.contains('minus-btn')) {
                removeForm(event.target); // Call the function to remove the form elements
            }
        });
        $("#variant_id").change(function() {
            $("#embed-div").html(''); // Clear previous content
            allTickets = $(this).val();
            var html = '';
            $.each(allTickets, function(index, val) {
                var selectedOption = $('option[value="' + val + '"]');
                var dataType = selectedOption.attr('data-type');
                html += '<div class="card p-3" id="var-card">';
                html += '<div class="row">';
                html += '<div class="col-10"></div>';
                html += '<div class="col-2">';
                html +=
                    '<button type="button" class="btn btn-primary w-20" id="plus-btn" onclick="plusBTN()" data-id="' +
                    val + '" data-type="' + dataType + '">+</button>';
                html += '</div>';
                html += '</div>';
                if (dataType == 'both') {
                    html += '<div class="form-group mb-3">';
                    html += '<div class="form-row">';
                    html += '<div class="form-group col-md-6">';
                    html += '<label for="variant_name-1' + val + '">Variant Name</label>';
                    html += '<input type="text" class="form-control" id="variant_name-1' + val +
                        '" name="variant_name[]">';
                    html += '</div>';
                    html += '<div class="form-group col-md-6">';
                    html += '<label for="value-1' + val + '">Value</label>';
                    html += '<input type="text" class="form-control" name="value[]" required>';
                    html += '<input type="hidden" value="' + val + '" name="variant_id[]" required>';
                    html += '<input type="hidden" class="form-control" name="type[]" value="text">';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                    html += '<div class="form-group mb-3">';
                    html += '<div class="form-row">';
                    html += '<div class="form-group col-md-12">';
                    html += '<label for="variant_images-1' + val + '">Variant Images</label>';
                    html += '<input type="file" class="custom-file-input select2" id="variant_images-1' +
                        val +
                        '" name="variant_images[text-' + index + '][]" multiple>';
                    html += '<label class="custom-file-label" for="variant_images-1' + val +
                        '" id="variant_images_label-1' + val +
                        '">Choose files</label>';
                    html += '<div class="image-preview" id="image-preview-1' + val +
                        '"></div>'; // Div to show image preview
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                    html += '<div class="form-group mb-3">';
                    html += '<div class="form-row">';
                    html += '<div class="form-group col-md-6">';
                    html += '<label for="variant_name-2' + val + '">Variant Name</label>';
                    html += '<input type="color" class="form-control" id="variant_name-2' + val +
                        '" name="variant_name[]">';
                    html += '<input type="hidden" value="' + val + '" name="variant_id[]" required>';
                    html += '<input type="hidden" class="form-control" name="type[]" value="color">';
                    html += '</div>';
                    html += '<div class="form-group col-md-6">';
                    html += '<label for="value-2' + val + '">Value</label>';
                    html += '<input type="text" class="form-control" name="value[]" required>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                    html += '<div class="form-group mb-3">';
                    html += '<div class="form-row">';
                    html += '<div class="form-group col-md-12">';
                    html += '<label for="variant_images-2' + val + '">Variant Images</label>';
                    index = index + 1;
                    html += '<input type="file" class="custom-file-input select2" id="variant_images-2' +
                        val +
                        '" name="variant_images[color-' + index + '][]" multiple>';
                    html += '<label class="custom-file-label" for="variant_images-2' + val +
                        '" id="variant_images_label-2' + val +
                        '">Choose files</label>';
                    html += '<div class="image-preview" id="image-preview-2' + val +
                        '"></div>'; // Div to show image preview
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                } else {
                    html += '<div class="form-group mb-3">';
                    html += '<div class="form-row">';
                    html += '<div class="form-group col-md-6">';
                    html += '<label for="variant_name-' + val + '">Variant Name</label>';
                    html += '<input type="' + dataType + '" class="form-control" id="variant_name-' + val +
                        '" name="variant_name[]">';
                    html += '</div>';
                    html += '<div class="form-group col-md-6">';
                    html += '<label for="value-' + val + '">Value</label>';
                    html += '<input type="text" class="form-control" name="value[]" required>';
                    html += '<input type="hidden" value="' + val + '" name="variant_id[]" required>';
                    html += '<input type="hidden" class="form-control" name="type[]" value="' + dataType +
                        '">';

                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                    html += '<div class="form-group mb-3">';
                    html += '<div class="form-row">';
                    html += '<div class="form-group col-md-12">';
                    html += '<label for="variant_images-' + val + '">Variant Images</label>';
                    html += '<input type="file" class="custom-file-input select2" id="variant_images-' +
                        val +
                        '" name="variant_images[' + dataType + '-' + index + '][]" multiple>';
                    html += '<label class="custom-file-label" for="variant_images-' + val +
                        '" id="variant_images_label-' + val +
                        '">Choose files</label>';
                    html += '<div class="image-preview" id="image-preview-' + val +
                        '"></div>'; // Div to show image preview
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                }
                html += '</div>';
                new_index = index + 1;
            });
            $("#embed-div").html(html);
        });

        // Adjusted code for handling file inputs and image previews
        $(document).on('change', '.custom-file-input', function() {
            var input = this;
            var id = $(this).attr('id').split('-').pop(); // Extract variant ID from input ID
            var previewDiv = $('#image-preview-' + id);
            var existingPreviews = previewDiv.find('.row'); // Find existing rows of previews
            var newFileCount = input.files.length; // Get the number of newly selected files
            var totalFileCount = existingPreviews.find('.col-md-3').length + newFileCount; // Calculate total count
            var labelText = totalFileCount + ' file' + (totalFileCount !== 1 ? 's' : '') +
                ' selected'; // Update label text based on total file count
            $(this).next('.custom-file-label').text(labelText); // Update label text
            if (input.files && input.files.length > 0) {
                $.each(input.files, function(index, file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var preview = $('<img>').attr('src', e.target.result).addClass('img-thumbnail')
                            .css({
                                'width': '100px',
                                'height': '100px',
                                'margin': '5px', // Add margin around images
                                'object-fit': 'cover' // Make sure images fill the space
                            });
                        var deleteButton = $('<button>').addClass('btn btn-danger btn-sm delete-image')
                            .html('&times;') // Use HTML entity for cross symbol
                            .css({
                                'font-size': '12px', // Make cross symbol smaller
                                'padding': '2px 5px' // Add padding to make it look nicer
                            });
                        var previewWrapper = $('<div>').addClass('col-md-3').append(preview,
                            deleteButton); // Each image will take 3 columns in a row
                        if (existingPreviews.length === 0 || (index + 1) % 4 === 0) {
                            var row = $(
                                '<div class="row"></div>'
                            ); // Create a row container if no existing previews or if it's the fourth image
                            row.append(previewWrapper);
                            previewDiv.append(row);
                        } else {
                            existingPreviews.last().append(
                                previewWrapper); // Append to the last existing row
                        }
                    };
                    reader.readAsDataURL(file);
                });
            }
        });

        // Adjusted code for deleting images
        $(document).on('click', '.delete-image', function(event) {
            event.preventDefault(); // Prevent default behavior
            console.log('Delete image button clicked');
            var inputId = $(this).closest('.form-group').find('.custom-file-input').attr('id');
            var id = inputId ? inputId.split('-').pop() : null; // Extract variant ID from input ID
            $(this).closest('.col-md-3').remove(); // Remove the image preview container
            if (id) {
                var totalFileCount = $('#image-preview-' + id + ' .col-md-3').length; // Get updated file count
                var labelText = totalFileCount + ' file' + (totalFileCount !== 1 ? 's' : '') + ' selected';
                $('#variant_images_label-' + id).text(labelText); // Update file count label
            }
            $('#' + inputId).val(''); // Clear the file input value
        });

        // Function to display variant images preview
        function displayVariantImages(images) {
            var previewContainer = $('#variant-images-preview');
            previewContainer.empty(); // Clear previous previews
            if (images && images.length > 0) {
                images.forEach(function(imageUrl) {
                    var imgElement = $('<img>').attr('src', imageUrl).addClass('img-thumbnail').css('max-width',
                        '100px').css('margin-right', '10px');
                    previewContainer.append(imgElement);
                });
            }
        }

        // Function to prevent form submission on Enter key press
        function preventFormSubmissionOnEnter(formId) {
            $(formId).on('keyup keypress', function(e) {
                var keyCode = e.keyCode || e.which;
                if (keyCode === 13) { // If Enter key is pressed
                    e.preventDefault(); // Prevent default form submission
                    return false;
                }
            });
        }

        // Call the function for both create and edit forms
        preventFormSubmissionOnEnter('#createProductForm');
        preventFormSubmissionOnEnter('#editProductForm');
    </script>
@endsection
