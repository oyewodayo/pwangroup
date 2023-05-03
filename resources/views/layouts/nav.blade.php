<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    @can('view_user')
    <div class="d-none d-sm-inline-block ">
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="POST" action="">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small name-search" id="name-search" name="staff_id" placeholder="Search for staff..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary search-btn" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
                
            </div>
            <div id="search-result"></div>
            @if(Session::has('error'))
                <div class="alert alert-soft-danger bg-danger text-white alert-dismissible fade show"role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="d-flex flex-wrap align-items-start">
                        
                        <div class="flex"
                                style="min-width: 180px">
                            <small class="text-black-100">
                                <strong>Error - </strong>{{ Session::get('error') }}
                            </small>
                        </div>
                    </div>
                </div>
            @endif
        </form>
        
    </div>
    @endcan
    

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small name-search" id="name-search" placeholder="Search by staff ID..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <div id="search-result" class="card col-sm-4 search-form--light pb-3 d-none" style="position: fixed;z-index:1;top:65px;margin-top:70px"> Search results</div>
       
            </div>
           
        </li>


        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="">

                    <div class="mr-2 text-gray-600 small">{{ auth()->user()->full_name }}</div>
                    <div class="small text-right mr-2 text-primary">President</div>
                </div>
                <img class="img-profile rounded-circle"
                    src="{{asset('assets/img/undraw_profile.svg')}}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                @can('view_role')
                <a class="dropdown-item" href="">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                @endcan              
            
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <div class="d-flex">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw text-gray-400"></i>
                    <form method="POST" action="{{ route('logout') }}" class="mt-n3">
                        @csrf
                        <button type="submit" class="btn btn-link text-danger">Log out</button>
                    </form>
                </div>
                </a>
            </div>
        </li>

    </ul>

</nav>