@extends('dashboard.admin.layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-12">
        <h2 class="page-title">Create Role Permission</h2>
        <div class="card shadow mb-4">
            <div class="card-header">
                <strong class="card-title">Role Permission Information</strong>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('role_permissions.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="role_id">Role</label>
                                <select id="role_id" name="role_id" class="form-control" required>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="permission_id">Permissions</label>
                                <select id="permission_id" name="permission_id[]" class="form-control" multiple required>
                                    @foreach($permissions as $permission)
                                        <option value="{{ $permission->id }}">{{ $permission->display_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Role Permission</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- / .card -->
    </div> <!-- .col-12 -->
</div> <!-- .row -->

@endsection
