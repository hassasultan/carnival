@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Add New Event Country Tab</h2>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('events_country_tabs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- <div class="form-group">
                            <label for="carnival_id">Carnival:</label>
                            <select class="form-control" id="carnival_id" name="carnival_id" required>
                                <option value="">Select Carnival</option>
                                @foreach ($carnivals as $carnival)
                                    <option value="{{ $carnival->id }}">{{ $carnival->name }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                        <div class="form-group">
                            <label for="carnival_id">Carnival:</label>
                            <select class="form-control" id="carnival_id" name="carnival_id" required>
                                <option value="">Select Carnival</option>
                                @foreach ($carnivals as $carnival)
                                    <option value="{{ $carnival->id }}">{{ $carnival->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="country_id">Country:</label>
                            <select class="form-control" id="country_id" name="country_id" required>
                                <option value="">Select Country</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city_id">City:</label>
                            <select class="form-control" id="city_id" name="city_id" required>
                                <option value="">Select City</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tab">Tab:</label>
                            <input type="text" class="form-control" id="tab" name="tab" required>
                        </div>
                        <div class="form-group">
                            <label for="file">Files:</label>
                            <input type="file" class="form-control-file" id="file" name="file[]" multiple
                                accept="image/*">
                            <div id="file-preview"></div>
                        </div>

                        {{-- <div class="form-group">
                            <label for="file">File:</label>
                            <input type="file" class="form-control-file" id="file" name="file">
                            <div id="file-preview"></div>
                        </div> --}}
                        <div class="form-group">
                            <label for="placement">Placement Index:</label>
                            <select class="form-control" id="placeWhere" name="placeWhere" required>
                                <option value="Place Before">Place Before</option>
                                <option value="Place After">Place After</option>
                            </select>
                            <select class="form-control" id="placement" name="placement" required>
                                <option value="">Select</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="content">Content:</label>
                            <textarea class="form-control summernote" id="content" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="1">Enabled</option>
                                <option value="0">Disabled</option>
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

        document.getElementById('file').addEventListener('change', function(event) {
            let preview = document.getElementById('file-preview');
            preview.innerHTML = ''; // Clear previous previews

            Array.from(event.target.files).forEach(file => {
                if (file.type.startsWith('image/')) { // Ensure it's an image
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        let img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.maxWidth = '100px';
                        img.style.margin = '5px';
                        preview.appendChild(img);
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
                        console.log(data.length);
                        if (data.length > 0)
                        {
                            $.each(data, function(index, tab) {
                                placementDropdown.append('<option value="' + tab.placement + '">' +
                                    tab
                                    .tab + '</option>');
                            });
                            placementDropdown.attr('required','required');

                        }
                        else
                        {
                            placementDropdown.attr('required',false);
                        }
                    },
                    error: function() {
                        alert('Error fetching placements. Please try again.');
                    }
                });
            }
        });


        // document.getElementById('file').addEventListener('change', function() {
        //     var file = this.files[0];
        //     var preview = document.getElementById('file-preview');
        //     preview.innerHTML = '';

        //     if (file) {
        //         var reader = new FileReader();
        //         reader.onload = function(e) {
        //             if (file.type.startsWith('image/')) {
        //                 var img = document.createElement('img');
        //                 img.src = e.target.result;
        //                 img.style.maxWidth = '100px';
        //                 preview.appendChild(img);
        //             } else if (file.type.startsWith('video/')) {
        //                 var video = document.createElement('video');
        //                 video.src = e.target.result;
        //                 video.controls = true;
        //                 video.style.maxWidth = '100px';
        //                 preview.appendChild(video);
        //             }
        //         };
        //         reader.readAsDataURL(file);
        //     }
        // });
    </script>
@endsection
