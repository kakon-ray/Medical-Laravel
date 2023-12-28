<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">স্কলার ক্লিনিক</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>ড্যসবোর্ড</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>ম্যনেজ ডাক্তার</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white my-1 py-1 collapse-inner rounded">
                <a class="collapse-item" href="{{route('doctor.add')}}">নতুন ডাক্তার যুক্ত করুন</a>
            </div>
            <div class="bg-white my-1 py-1 collapse-inner rounded">
                <a class="collapse-item" href="{{route('doctor.manage')}}">ম্যনেজ ডাক্তার</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
            aria-expanded="true" aria-controls="collapsePages1">
            <i class="fas fa-fw fa-folder"></i>
            <span>সাকসেস নিউজ</span>
        </a>
        <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white my-1 collapse-inner rounded">
                <a class="collapse-item" href="{{route('news.manage')}}">ম্যনেজ নিউজ</a>
            </div>
            <div class="bg-white my-1 collapse-inner rounded">
                <a class="collapse-item" href="{{route('news.add')}}">নতুন নিউজ ‍যুক্ত করুন</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2"
            aria-expanded="true" aria-controls="collapsePages2">
            <i class="fas fa-fw fa-folder"></i>
            <span>ম্যনেজ সার্ভিস</span>
        </a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white my-1 collapse-inner rounded">
                <a class="collapse-item" href="{{route('services.manage')}}">ম্যানেজ সার্ভিস</a>
            </div>
            <div class="bg-white my-1 collapse-inner rounded">
                <a class="collapse-item" href="{{route('services.add')}}">নতুন সার্ভিস যুক্ত করুন</a>
            </div>
        </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>