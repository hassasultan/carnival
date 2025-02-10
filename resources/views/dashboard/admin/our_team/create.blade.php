@extends('dashboard.admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Create Team Member</h2>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Team Member Information</strong>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('our_team.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Enter full name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        placeholder="Enter team member title" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="description">Description</label>
                                    <textarea id="description" name="description" class="form-control" rows="4" 
                                        placeholder="Enter team member description"></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="image">Profile Image</label>
                                    <input type="file" id="image" name="image" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" id="facebook" name="facebook" class="form-control"
                                        placeholder="Enter Facebook profile link">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" id="twitter" name="twitter" class="form-control"
                                        placeholder="Enter Twitter profile link">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="skype">Skype</label>
                                    <input type="text" id="skype" name="skype" class="form-control"
                                        placeholder="Enter Skype ID">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="google">Google</label>
                                    <input type="text" id="google" name="google" class="form-control"
                                        placeholder="Enter Google profile link">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="status">Status</label>
                                    <select id="status" name="status" class="form-control" required>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Create Team Member</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- / .card -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
@endsection
