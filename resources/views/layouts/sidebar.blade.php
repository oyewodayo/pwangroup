<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center px-5 mx-2 rounded my-1" style="background-color: #ffffff;padding:20px" href="/">
        {{-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> --}}
        <div class="sidebar-brad-text mx-3">                
            <img src="{{asset('assets/img/pwan_icon.png')}}" alt="" width="50"> 
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    
    <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAppraisals"
            aria-expanded="true" aria-controls="collapseAppraisals">
            <i class="fas fa-fw fa-users"></i>
            <span>Staff</span>
        </a>
        <div id="collapseAppraisals" class="collapse" aria-labelledby="headingAppraisals" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Staff Components:</h6>
                <a class="collapse-item" href="">All Staff</a>
                <a class="collapse-item" href="">Management</a>
                <a class="collapse-item" href="">Directors</a>
                <a class="collapse-item" href="">Head Of Dept</a>
                <a class="collapse-item" href=""></a>  
            </div>
        </div>
    </li>
   
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStaff"
            aria-expanded="true" aria-controls="collapseStaff">
            <i class="fas fa-fw fa-users"></i>
            <span>Appraisals</span>
        </a>
        <div id="collapseStaff" class="collapse" aria-labelledby="headingStaff" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Appraisals Components:</h6>
                <a class="collapse-item" href="">Active</a>
                <a class="collapse-item" href=""> New </a>
               
                <a class="collapse-item" href=""></a>  
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <!-- Nav Item - Utilities Collapse Menu -->
  
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAffiliate"
            aria-expanded="true" aria-controls="collapseAffiliate">
            <i class="fas fa-fw fa-book"></i>
            <span>Affiliate</span>
        </a>
        <div id="collapseAffiliate" class="collapse" aria-labelledby="headingAffiliate"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Affiliate Components:</h6>
                <a class="collapse-item" href="{{route('backoffice.affiliates')}}">Active</a>
                <a class="collapse-item" href="">Inactive</a>
                <a class="collapse-item" href="{{route('backoffice.affiliates.create')}}">Create new</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCareer"
            aria-expanded="true" aria-controls="collapseCareer">
            <i class="fas fa-fw fa-book"></i>
            <span>Careers</span>
        </a>
        <div id="collapseCareer" class="collapse" aria-labelledby="headingCareer"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Career Components:</h6>
                <a class="collapse-item" href="">New applications</a>
                <a class="collapse-item" href="">Inducted</a>
                <a class="collapse-item" href="">Non Inducted</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDepartment"
            aria-expanded="true" aria-controls="collapseDepartment">
            <i class="fas fa-fw fa-book"></i>
            <span>Department</span>
        </a>
        <div id="collapseDepartment" class="collapse" aria-labelledby="headingDepartment"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Department Components:</h6>
                <a class="collapse-item" href="">View departments</a>
                <a class="collapse-item" href="">Create new</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->

        
    <div class="sidebar-heading">
        Settings
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Settings</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Settings Components:</h6>
                <a class="collapse-item" href="">Settings</a> 
                <a class="collapse-item" href="{{ route('backoffice.roles') }}">Roles & Permissions</a>                    
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">
    <!-- Nav Item - Tables -->
    <li class="nav-item ">
        <div class="d-flex">
            <i class="fas fa-sign-out-alt fa-sm fa-fw text-gray-400 ml-3"></i>
            <form method="POST" action="{{ route('logout') }}" class="" style="margin-top:-12px">
                @csrf
                <button type="submit" class="btn btn-link text-danger">Log out</button>
            </form>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

   
</ul> 