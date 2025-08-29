@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="mb-2 page-title">My Masbands</h2>
            <p class="card-text">My Masbands table.</p>
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
                                        <th>Carnival Start Date</th>
                                        <th>Carnival End Date</th>
                                        <th>Massband Name</th>
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $counter = 1 @endphp
                                    @foreach ($masbands as $masband)
                                        <tr>
                                            <td>{{ $counter++ }}</td>
                                            <td>{{ $masband->carnival->name }}</td>
                                            <td>{{ $masband->carnival->start_date }}</td>
                                            <td>{{ $masband->carnival->end_date }}</td>
                                            <td>{{ $masband->name ?? $masband->mascamp->user->first_name . ' ' . $masband->mascamp->user->last_name }}
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
