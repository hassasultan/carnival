{{-- @extends('dashboard.admin.layouts.app') --}}
@extends($layout)

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Edit Product</h2>
            <div class="card shadow">
                <div class="card-header">
                    <strong class="card-title">Product Information</strong>
                </div>
                <div class="card-body">
                    <form id="editProductForm">
                        @csrf
                        <input type="hidden" id="edit_id" value="{{ $product->id }}">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $product->title }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="brand">Brand</label>
                                <select class="form-control brand" id="brand" name="brand_id" required>
                                    <option value="">Select brand</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}" @if ($brand->id == $product->brand_id) selected @endif>{{ $brand->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="category">Category</label>
                                <select class="form-control category" id="category" name="category_id" required>
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @if ($category->id == $product->category_id) selected @endif>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="subcategory">Subcategory</label>
                                <select class="form-control" id="subcategory" name="subcategory_id" required>
                                    <option value="">Select Subcategory</option>
                                    @foreach ($subcat as $row)
                                        <option value="{{ $row->id }}" @if ($row->id == $product->subcategory_id) selected @endif>{{ $row->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="summernote" name="description" class="form-control description" placeholder="Enter description">{{ $product->description }}</textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="old_price">Regular Price</label>
                                <input type="text" class="form-control" id="old_price" name="old_price" value="{{ $product->old_price }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="new_price">Discounted Price</label>
                                <input type="text" class="form-control" id="new_price" name="new_price" value="{{ $product->new_price }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="sale">On Sale</label>
                                <select class="form-control" id="sale" name="sale" required>
                                    <option value="true" @if ($product->sale == 'true') selected @endif>Yes</option>
                                    <option value="false" @if ($product->sale == 'false') selected @endif>No</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="1" @if ($product->status == '1') selected @endif>Active</option>
                                    <option value="0" @if ($product->status == '0') selected @endif>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="condition">Condition</label>
                                <select class="form-control" id="condition" name="condition" required>
                                    <option value="Old" @if ($product->condition == 'Old') selected @endif>Old</option>
                                    <option value="New" @if ($product->condition == 'New') selected @endif>New</option>
                                    <option value="Other" @if ($product->condition == 'Other') selected @endif>Other</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="stock_condition">Stock Condition</label>
                                <select class="form-control" id="stock_condition" name="stock_condition" required>
                                    <option value="Low" @if ($product->stock_condition == 'Low') selected @endif>Low</option>
                                    <option value="In Stock" @if ($product->stock_condition == 'In Stock') selected @endif>In Stock</option>
                                    <option value="Out of Stock" @if ($product->stock_condition == 'Out of Stock') selected @endif>Out of Stock</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="discount">Discount</label>
                                <input type="number" class="form-control" id="discount" name="discount" value="{{ $product->discount }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="variant_id">Variants</label>
                                @foreach ($variants as $row)
                                    <input type="hidden" id="div-{{ $row->id }}" value="{{ $row->title }}" />
                                @endforeach
                                <select id="variant_id" class="form-control select2" multiple>
                                    @foreach ($variants as $row)
                                        <option value="{{ $row->id }}" @if (in_array($row->id, $selectedVariants)) selected @endif>{{ $row->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div id="embed-div">
                            <div class="card p-3" id="var-card">
                                @foreach ($product->product_variant as $variant)
                                    @if ($variant->type == 'text')
                                        <div class="form-group mb-3">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="variant_name-{{ $variant['id'] }}">Variant Name</label>
                                                    <input type="text" class="form-control" id="variant_name-{{ $variant['id'] }}" name="variant_name[]" value="{{ $variant['name'] }}" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="value-{{ $variant['id'] }}">Value</label>
                                                    <input type="text" class="form-control" name="value[]" value="{{ $variant['value'] }}" required="" />
                                                    <input type="hidden" value="{{ $variant['variant_id'] }}" name="variant_id[]" required="" />
                                                    <input type="hidden" class="form-control" name="type[]" value="{{ $variant['type'] }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="variant_images-{{ $variant['id'] }}">Variant Images</label>
                                                    <input type="file" class="custom-file-input select2" id="variant_images-{{ $variant['id'] }}" name="variant_images[{{ $variant['type'] }}-{{ $loop->index }}][]" multiple="" />
                                                    <label class="custom-file-label" for="variant_images-{{ $variant['id'] }}">Choose files</label>
                                                    <div class="image-preview" id="image-preview-{{ $variant['id'] }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="form-group mb-3">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="variant_name-{{ $variant['id'] }}">Variant Name</label>
                                                    <input type="color" class="form-control" id="variant_name-{{ $variant['id'] }}" name="variant_name[]" value="{{ $variant['name'] }}" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="value-{{ $variant['id'] }}">Value</label>
                                                    <input type="text" class="form-control" name="value[]" value="{{ $variant['value'] }}" required="" />
                                                    <input type="hidden" value="{{ $variant['variant_id'] }}" name="variant_id[]" required="" />
                                                    <input type="hidden" class="form-control" name="type[]" value="{{ $variant['type'] }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="variant_images-{{ $variant['id'] }}">Variant Images</label>
                                                    <input type="file" class="custom-file-input select2" id="variant_images-{{ $variant['id'] }}" name="variant_images[{{ $variant['type'] }}-{{ $loop->index }}][]" multiple="" />
                                                    <label class="custom-file-label" for="variant_images-{{ $variant['id'] }}">Choose files</label>
                                                    <div class="image-preview" id="image-preview-{{ $variant['id'] }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="facebook">Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $product->facebook }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="instagram">Instagram</label>
                                <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $product->instagram }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="youtube">Youtube</label>
                                <input type="text" class="form-control" id="youtube" name="youtube" value="{{ $product->youtube }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="twitter">Twitter(X)</label>
                                <input type="text" class="form-control" id="twitter" name="twitter" value="{{ $product->twitter }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="tiktok">Tiktok</label>
                                <input type="text" class="form-control" id="tiktok" name="tiktok" value="{{ $product->tiktok }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="pinterest">Pinterest</label>
                                <input type="text" class="form-control" id="pinterest" name="pinterest" value="{{ $product->pinterest }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="linkedin">LinkedIn</label>
                            <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ $product->linkedin }}">
                        </div>
                        <div class="form-group">
                            <label for="information">Information</label>
                            <textarea id="information" name="information" class="form-control information summernote" placeholder="">{!! $product->information !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="reviews">Reviews</label>
                            <textarea id="reviews" name="reviews" class="form-control reviews summernote" placeholder="">{!! $product->reviews !!}</textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="extra">Extra</label>
                                <textarea id="extra" name="extra" class="form-control extra summernote" placeholder="">{!! $product->extra !!}</textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="guarantee">Guarantee</label>
                                <textarea id="guarantee" name="guarantee" class="form-control guarantee summernote" placeholder="">{!! $product->guarantee !!}</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Product Features</label><br>
                                <div id="features-container">
                                    @foreach($features as $feature)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="feature_{{ $feature->id }}" name="features[]" value="{{ $feature->id }}" {{ in_array($feature->id, $selectedFeatures) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="feature_{{ $feature->id }}">{{ $feature->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-3">
                                <label for="image">Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image" id="image_label">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <label for="media">Media</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input select2" id="media" name="media[]" multiple>
                                    <label class="custom-file-label" for="media" id="media_label">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div id="hash_tags" class="mb-3">
                            <label for="tags">Tags</label><br>
                            <input type="hidden" name="tags[]" value="{{ $row->title }}">
                            <input type="text" id="tagInput" class="form-control" placeholder="Add a new tag...">
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
        $(document).ready(function() {
            // Handle category change to update features
            $('#category').on('change', function() {
                var categoryId = $(this).val();
                if (categoryId) {
                    $.ajax({
                        url: '{{ route('get.features.by.category', ':id') }}'.replace(':id', categoryId),
                        type: 'GET',
                        success: function(response) {
                            var featuresContainer = $('#features-container');
                            featuresContainer.empty();
                            
                            if (response.length > 0) {
                                response.forEach(function(feature) {
                                    var featureHtml = '<div class="form-check form-check-inline">' +
                                        '<input class="form-check-input" type="checkbox" id="feature_' + feature.id + '" name="features[]" value="' + feature.id + '">' +
                                        '<label class="form-check-label" for="feature_' + feature.id + '">' + feature.name + '</label>' +
                                        '</div>';
                                    featuresContainer.append(featureHtml);
                                });
                            } else {
                                featuresContainer.html('<p class="text-muted">No features available for this category.</p>');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching features:', error);
                            $('#features-container').html('<p class="text-danger">Error loading features.</p>');
                        }
                    });
                } else {
                    $('#features-container').empty();
                }
            });

            // Handle form submission via AJAX for updating a product
            $('#editProductForm').submit(function(event) {
                var productId = $(this).find('#edit_id').val();
                event.preventDefault();
                var formData = new FormData($(this)[0]);
                var url = '{{ route('products.update', ':id') }}'.replace(':id', productId);

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        window.location.href = '{{ route('products.index') }}';
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
                    $(this).next('input[name="tags[]"]').remove();
                    $(this).removeClass('badge-primary').addClass('badge-secondary');
                } else {
                    var tagName = $(this).text().trim().replace('#', '');
                    var newInput = $('<input type="hidden" name="tags[]" value="#' + tagName +
                        '">');
                    $('#hash_tags').append(newInput);
                    $(this).removeClass('badge-secondary').addClass('badge-primary');
                }
            });

            // Allow selecting or deselecting options by clicking on tags
            $(document).on('click', '.tag', function() {
                var tagId = $(this).data('id');
                var tagInput = $(this).next('input[name="tags[]"]');
                if (tagInput.length) {
                    tagInput.remove();
                }
                $(this).remove();
            });

            // Functionality to add a new tag when pressing Enter in the input field
            $('#tagInput').keypress(function(event) {
                if (event.which === 13) {
                    var newTagName = $(this).val().trim();
                    if (newTagName) {
                        var newTagId = 'random_' + Math.floor(Math.random() * 1000000);
                        var newTag = $('<span class="badge badge-primary tag badge-lg" data-id="' +
                            newTagId +
                            '" style="font-size: 1.25em;">#' + newTagName + '</span>');
                        $('#tagInput').before(newTag);

                        var newInput = $('<input type="hidden" name="tags[]" value="#' + newTagName +
                            '">');
                        $('#hash_tags').append(newInput);

                        $(this).val('');
                    }
                }
            });

            // Update label text when files are selected for additional images
            $('#media').on('change', function() {
                var files = $(this)[0].files;
                var fileNames = '';
                for (var i = 0; i < files.length; i++) {
                    fileNames += files[i].name;
                    if (i < files.length - 1) {
                        fileNames += ', ';
                    }
                }
                $('#media_label').text(fileNames);
            });

            // Update label text when files are selected for additional images
            $('#image').on('change', function() {
                var files = $(this)[0].files;
                var fileNames = '';
                for (var i = 0; i < files.length; i++) {
                    fileNames += files[i].name;
                    if (i < files.length - 1) {
                        fileNames += ', ';
                    }
                }
                $('#image_label').text(fileNames);
            });
        });

        $('.category').on('change', function() {
            $('#variant_id').addClass('d-none');
            var category = $(this).val();
            var subcategoryDropdown = $(this).closest('.form-group').next('.form-group').find('select');
            var url = "{{ route('get.subcategories', ':category') }}";
            url = url.replace(':category', category);
            $.ajax({
                type: 'GET',
                url: url,
                success: function(response) {
                    console.log(response);
                    subcategoryDropdown.empty();
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
                    subcategoryDropdown.closest('.form-group').show();
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
                    '"></div>';
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
                    '"></div>';
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
                    '"></div>';
                newHtml += '</div>';
                newHtml += '</div>';
                newHtml += '</div>';
            }
            newHtml += '</div>';

            document.getElementById('var-card').insertAdjacentHTML('beforeend', newHtml);
        }

        function removeForm(element) {
            element.closest('.parent').remove();
        }

        function plusBTN() {
            console.log("check");
            var id = $("#plus-btn").attr('data-id');
            var type = $("#plus-btn").attr('data-type');
            cloneForm(id, type);
        }
        document.addEventListener('click', function(event) {
            if (event.target && event.target.classList.contains('minus-btn')) {
                removeForm(event.target);
            }
        });
        $("#variant_id").change(function() {
            $("#embed-div").html('');
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
                        '"></div>';
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
                        '"></div>';
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
                        '"></div>';
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
            var id = $(this).attr('id').split('-').pop();
            var previewDiv = $('#image-preview-' + id);
            var existingPreviews = previewDiv.find('.row');
            var newFileCount = input.files.length;
            var totalFileCount = existingPreviews.find('.col-md-3').length + newFileCount;
            var labelText = totalFileCount + ' file' + (totalFileCount !== 1 ? 's' : '') +
                ' selected';
            $(this).next('.custom-file-label').text(labelText);
            if (input.files && input.files.length > 0) {
                $.each(input.files, function(index, file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var preview = $('<img>').attr('src', e.target.result).addClass('img-thumbnail')
                            .css({
                                'width': '100px',
                                'height': '100px',
                                'margin': '5px',
                                'object-fit': 'cover'
                            });
                        var deleteButton = $('<button>').addClass('btn btn-danger btn-sm delete-image')
                            .html('&times;')
                            .css({
                                'font-size': '12px',
                                'padding': '2px 5px'
                            });
                        var previewWrapper = $('<div>').addClass('col-md-3').append(preview,
                            deleteButton);
                        if (existingPreviews.length === 0 || (index + 1) % 4 === 0) {
                            var row = $(
                                '<div class="row"></div>'
                            );
                            row.append(previewWrapper);
                            previewDiv.append(row);
                        } else {
                            existingPreviews.last().append(
                                previewWrapper);
                        }
                    };
                    reader.readAsDataURL(file);
                });
            }
        });

        // Adjusted code for deleting images
        $(document).on('click', '.delete-image', function(event) {
            event.preventDefault();
            console.log('Delete image button clicked');
            var inputId = $(this).closest('.form-group').find('.custom-file-input').attr('id');
            var id = inputId ? inputId.split('-').pop() : null;
            $(this).closest('.col-md-3').remove();
            if (id) {
                var totalFileCount = $('#image-preview-' + id + ' .col-md-3').length;
                var labelText = totalFileCount + ' file' + (totalFileCount !== 1 ? 's' : '') + ' selected';
                $('#variant_images_label-' + id).text(labelText);
            }
            $('#' + inputId).val('');
        });

        // Function to display variant images preview
        function displayVariantImages(images) {
            var previewContainer = $('#variant-images-preview');
            previewContainer.empty();
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
                if (keyCode === 13) {
                    e.preventDefault();
                    return false;
                }
            });
        }

        // Call the function for both create and edit forms
        preventFormSubmissionOnEnter('#createProductForm');
        preventFormSubmissionOnEnter('#editProductForm');
    </script>
@endsection
