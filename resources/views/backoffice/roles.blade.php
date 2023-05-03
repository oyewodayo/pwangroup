

@extends('layouts.main')

@section('title','Create affiliate')

@section('content')
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Roles & Permission</h1>
    </div>

    <!-- Content Row -->

    <div class="row">
           
        <div class="col-xl-12 col-lg-12">
            @if (session('error'))
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 5000)"
                class="text-center text-sm text-red-600 dark:text-gray-400"
            >{{ session('error') }}</p>
            @endif
        
            @if (session('status'))
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 5000)"
                class="text-center text-sm text-green-600 dark:text-gray-400"
            >{{ session('status') }}</p>
           
            @endif
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="d-flex">
                        <h6 class="m-0 font-weight-bold text-primary">Roles : &nbsp; </h6>
                        
                    </div>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                       
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Staff ID</th>
                                    <th>Desination </th>
                                    <th>Role</th>
                                    <th>Date Added</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ( $roles as $role )
                                <tr>
                                    <td>
                                        <a href="{{route('backoffice.staff.show',['staff_id'=>$role->recipient->staff_id])}}">
                                        {{ $role->recipient->full_name }}
                                        </a>
                                    </td>
                                    <td>{{ $role->recipient->staff_id }}</td>
                                    <td>{{ $role->recipient->profile->portfolio??Null }}</td>
                                    <td>{{ $role->role->name}}</td>
                                    <td>
                                        {{ is_null($role->created_at)?'':$role->created_at->format('D M d, Y') }}
                                    </td>
                                    <td>
                                        <form action="{{route('backoffice.role.delete',['id'=>$role->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6">
                                        No Role asigned to any user.
                                    </td>
                                </tr>
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12">
           
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <div class="d-flex">
                        <h6 class="m-0 font-weight-bold text-primary">Roles Permissions : &nbsp; </h6>
                        
                    </div>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="min-width:200px">Roles</th>
                                    <th>Permissions</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ( $permissions as $permission )
                                <tr>
                                    <td>{{ ucfirst($permission->name) }}</td>
                                    <td>{{ $permission->permissions }}</td>
                                    <td></td>
                                </tr>
                                @empty
        
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

