@extends('layouts.admin')
@section('title','Permissions')
@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        @include('admin.role-permission.nav-links')
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">All Permissions</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <ul class="breadcrumb">
                            <a href="{{ route('permissions.create') }}" class="btn btn-primary">+ Add New</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- Permissions Table Start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header table-card-header">
                        <h5>Permission List</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="permissions-table" class="table table-striped table-bordered nowrap table-sm">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Permission Name</th>
                                        {{-- <th>Guard Name</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $permission)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $permission->name }}</td>
                                            {{-- <td>{{ $permission->guard_name }}</td> --}}
                                            <td class="d-flex">
                                                <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-primary btn-sm me-1 edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <button class="btn btn-danger btn-sm delete" data-id="{{ $loop->iteration }}">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <form id="delete-form-{{ $loop->iteration }}" action="{{ route('permissions.destroy', $permission->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Permission Name</th>

                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Permissions Table End -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection
