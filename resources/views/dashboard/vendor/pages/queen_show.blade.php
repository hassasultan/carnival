@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">Queen Show</h2>
            <p class="card-text">Queen Show table.</p>
            <div class="row my-4">
                <!-- data table -->
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <!-- table -->
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>Sr#</th>
                                        <th>Carnival Name</th>
                                        <th>Model Name</th>
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $counter = 1 @endphp
                                    @foreach ($models as $model)
                                        @if ($model->mascamp->user->id != Auth::id())
                                            <tr>
                                                <td>{{ $counter++ }}</td>
                                                <td>{{ $model->carnival->name }}</td>
                                                <td>{{ $model->mascamp->name ?? $model->mascamp->user->first_name . ' ' . $model->mascamp->user->last_name }}
                                                </td>
                                            </tr>
                                        @endif
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
