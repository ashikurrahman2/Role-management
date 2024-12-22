@extends('layouts.admin')
@section('title', 'Add Permission')
@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Role: {{ $role->name }}</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <ul class="breadcrumb">
                            <a href="{{ route('roles.index') }}" class="btn btn-secondary">Back to List</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Permissions</h5>
                    </div>
                    <div class="card-body">
                        @if($permissions->isEmpty())
                            <p>No permissions available to assign.</p>
                        @else
                            <form action="{{ route('roles.update-permissions', $role->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="permissions" class="form-label">Permissions</label>
                                        <div class="form-group">
                                            @foreach ($permissions as $permission)
                                                <div class="form-check">
                                                    <input type="checkbox"
                                                           name="permissions[]"
                                                           value="{{ $permission->name }}"
                                                           id="permission_{{ $permission->id }}"
                                                           class="form-check-input"
                                                           {{ $role->permissions->contains($permission) ? 'checked' : '' }}
                                                           aria-label="Permission: {{ $permission->name }}">
                                                    <label for="permission_{{ $permission->id }}" class="form-check-label">
                                                        {{ $permission->name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end mt-3">
                                    <button type="submit" class="btn btn-primary">Update Permissions</button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection
