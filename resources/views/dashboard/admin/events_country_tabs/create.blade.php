@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Add New Event Country Tab</h2>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('events_country_tabs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                            <label for="file">File:</label>
                            <input type="file" class="form-control-file" id="file" name="file">
                            <div id="file-preview"></div>
                        </div>
                        <div class="form-group">
                            <label for="placement">Placement Order Number:</label>
                            <input type="number" class="form-control" id="placement" name="placement"  required>
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

        document.getElementById('file').addEventListener('change', function() {
            var file = this.files[0];
            var preview = document.getElementById('file-preview');
            preview.innerHTML = '';

            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    if (file.type.startsWith('image/')) {
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.maxWidth = '100px';
                        preview.appendChild(img);
                    } else if (file.type.startsWith('video/')) {
                        var video = document.createElement('video');
                        video.src = e.target.result;
                        video.controls = true;
                        video.style.maxWidth = '100px';
                        preview.appendChild(video);
                    }
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
