@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Edit Event Country Tab</h2>
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('events_country_tabs.update', $eventsCountryTab->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="carnival_id">Carnival:</label>
                            <select class="form-control" id="carnival_id" name="carnival_id" required>
                                @foreach ($carnivals as $carnival)
                                    <option value="{{ $carnival->id }}" {{ $eventsCountryTab->carnival_id == $carnival->id ? 'selected' : '' }}>{{ $carnival->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="country_id">Country:</label>
                            <select class="form-control" id="country_id" name="country_id" required>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}" {{ $eventsCountryTab->country_id == $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city_id">City:</label>
                            <select class="form-control" id="city_id" name="city_id" required>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}" {{ $eventsCountryTab->city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tab">Tab:</label>
                            <input type="text" class="form-control" id="tab" name="tab" value="{{ $eventsCountryTab->tab }}" required>
                        </div>
                        <div class="form-group">
                            <label for="file">File:</label>
                            <input type="file" class="form-control-file" id="file" name="file">
                            <div id="file-preview">
                                @if($eventsCountryTab->file_type == 'image')
                                    <img src="{{ asset('files/' . $eventsCountryTab->file) }}" alt="file" style="max-width: 100px;">
                                @elseif($eventsCountryTab->file_type == 'video')
                                    <video src="{{ asset('files/' . $eventsCountryTab->file) }}" controls style="max-width: 100px;"></video>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="placement">Placement Order Number:</label>
                            <input type="number" class="form-control" id="placement" name="placement" value="{{ $eventsCountryTab->placement }}" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Content:</label>
                            <textarea class="form-control summernote" id="content" name="content">{!! $eventsCountryTab->content !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="1" {{ $eventsCountryTab->status == 1 ? 'selected' : '' }}>Enabled</option>
                                <option value="0" {{ $eventsCountryTab->status == 0 ? 'selected' : '' }}>Disabled</option>
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
