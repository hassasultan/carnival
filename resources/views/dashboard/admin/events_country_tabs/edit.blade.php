@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Edit Event Country Tab</h2>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('events_country_tabs.update', $eventsCountryTab->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="carnival_id">Carnival:</label>
                            <select class="form-control" id="carnival_id" name="carnival_id" required>
                                @foreach ($carnivals as $carnival)
                                    <option
                                        value="{{ $carnival->id }}"{{ $eventsCountryTab->carnival_id == $carnival->id ? 'selected' : '' }}>
                                        {{ $carnival->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="country_id">Country:</label>
                            <select class="form-control" id="country_id" name="country_id" required>
                                @foreach ($countries as $country)
                                    <option
                                        value="{{ $country->id }}"{{ $eventsCountryTab->country_id == $country->id ? 'selected' : '' }}>
                                        {{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city_id">City:</label>
                            <select class="form-control" id="city_id" name="city_id" required>
                                @foreach ($cities as $city)
                                    <option
                                        value="{{ $city->id }}"{{ $eventsCountryTab->city_id == $city->id ? 'selected' : '' }}>
                                        {{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tab">Tab:</label>
                            <input type="text" class="form-control" id="tab" name="tab"
                                value="{{ $eventsCountryTab->tab }}" required>
                        </div>
                        <div class="form-group">
                            <label for="file">Files:</label>
                            <input type="file" class="form-control-file" id="file" name="file[]" multiple
                                accept="image/*">
                            <div id="file-preview">
                                @foreach ($eventsCountryTab->images as $image)
                                    <div class="image-container">
                                        <img src="{{ asset('file/' . $image->file) }}"
                                            style="max-width: 100px; margin: 5px;">
                                        <button type="button" class="btn btn-danger btn-sm delete-btn"
                                            onclick="deleteImage(this, {{ $image->id }})">X</button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="placement">Placement Order Number:</label>
                            <select class="form-control" id="placeWhere" name="placeWhere" required>
                                {{-- <option value="" selected disabled>-- Select Direction --</option> --}}
                                <option value="Place Before">Place Before</option>
                                <option value="Place After">Place After</option>
                            </select>
                            <select class="form-control" id="placement" name="placement" required>
                                <option value="">Select</option>
                                @foreach ($placements as $placement)
                                    <option value="{{ $placement->placement }}"
                                        {{ $eventsCountryTab->placement == $placement->placement ? 'selected' : '' }}>
                                        {{ $placement->tab }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="content">Content:</label>
                            <textarea class="form-control summernote" id="content" name="content">{!! $eventsCountryTab->content !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="1" {{ $eventsCountryTab->status == 1 ? 'selected' : '' }}>Enabled
                                </option>
                                <option value="0" {{ $eventsCountryTab->status == 0 ? 'selected' : '' }}>Disabled
                                </option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.getElementById('country_id').addEventListener('change', function() {
            var countryId = this.value;
            fetch(`{{ route('get.cities.by.country', '') }}/${countryId}`)
                .then(response => response.json())
                .then(data => {
                    var citySelect = document.getElementById('city_id');
                    citySelect.innerHTML = '<option value="">Select City</option>';
                    data.forEach(city => {
                        var option = document.createElement('option');
                        option.value = city.id;
                        option.text = city.name;
                        citySelect.appendChild(option);
                    });
                });
        });

        function deleteImage(button) {
            const imageContainer = button.closest('.image-container');
            imageContainer.remove(); // Remove image from preview
        }

        document.getElementById('file').addEventListener('change', function(event) {
            let preview = document.getElementById('file-preview');
            preview.innerHTML = ''; // Clear previous previews

            Array.from(event.target.files).forEach(file => {
                if (file.type.startsWith('image/')) { // Ensure it's an image
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        let imageContainer = document.createElement('div');
                        imageContainer.classList.add('image-container');

                        let img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.maxWidth = '100px';
                        img.style.margin = '5px';
                        imageContainer.appendChild(img);

                        let deleteBtn = document.createElement('button');
                        deleteBtn.innerHTML = 'X';
                        deleteBtn.classList.add('btn', 'btn-danger', 'btn-sm', 'delete-btn');
                        deleteBtn.onclick = function() {
                            deleteImage(deleteBtn)
                        };
                        imageContainer.appendChild(deleteBtn);

                        preview.appendChild(imageContainer);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });

        $(document).on('change', '#carnival_id', function() {
            var carnivalId = $(this).val();
            var placementDropdown = $('#placement');

            placementDropdown.empty().append('<option value="">Select</option>');

            if (carnivalId) {
                $.ajax({
                    url: "{{ route('get.placements', '') }}/" + carnivalId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $.each(data, function(index, tab) {
                            var selected = (tab.id == {{ $eventsCountryTab->placement }}) ?
                                'selected' : '';
                            placementDropdown.append('<option value="' + tab.placement + '" ' +
                                selected + '>' + tab.tab + '</option>');
                        });
                    },
                    error: function() {
                        alert('Error fetching placements. Please try again.');
                    }
                });
            }
        });
    </script>
@endsection
