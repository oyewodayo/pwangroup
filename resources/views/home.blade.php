

@extends('layouts.main')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="booking-print-area">
     <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <div class="d-flex">
            <div id="reportrange" class="form-control">
                <i class="fa fa-calendar"></i>&nbsp;
                <span></span> <i class="fa fa-caret-down"></i>
            </div>
            <input type="hidden" name="start" id="start-date">
            <input type="hidden" name="end" id="end-date">

            <div class="dropdown ml-1">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Report
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><button class="btn btn-link text-left " id="view-report"> View all report</button></li>
                  <li><button class="btn btn-link text-left" id="view-used-report" data-status="1"> View used report</button></li>
                  <li><button class="btn btn-link text-left" id="view-unused-report" data-status="0"> View unused report</button></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

       @include('layouts.cards')

    </div>

    <!-- Content Row -->

    <div class="row">
        <div class="col-xl-12 col-lg-12">
          
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Staff</h6>
                    <div class="d-flex fflex-column">
                        <div><span class="mr-3 align-middle text-primary booking-print">Print</span></div>
                        <div class="dropdown no-arrow align-middle">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Staff shortlinks:</div>
                                <a class="dropdown-item" href="">All Staff</a>
                                <a class="dropdown-item" href="">Confirmed Staff</a>
                                <a class="dropdown-item" href="">Unconfirmed Staff</a>                          
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Staff ID</th>
                                    <th>Designation</th>
                                    <th>Affiliate</th>
                                    <th>Department</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ( $users as $user )
                                <tr>
                                    <td>
                                       {{ $user->firstname }}
                                    </td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->staff_id }}</td>
                                    <td>CEO</td>
                                    <td>----</td>
                                    <td>----</td>
                                    <td>{{ $user->created_at->format('D M d, Y') }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="p-2" colspan="8">
                                        <div class="text-center">Staff not found</div>
                                    </td>
                                </tr>
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection