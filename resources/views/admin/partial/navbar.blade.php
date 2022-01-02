  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">CMS</a>
            <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <!-- <form action="{{route('admin.branch.search')}}" method="GET">
    <input name="search" class="search-input" type="text" placeholder="Search" aria-label="Search">
    </form> -->
            <!-- Navbar-->
                <div class="navbar-nav">
                    <div class="nav-item text-nowrap">
                    <a class="nav-link px-3" href="{{route('admin.logout')}}">({{auth()->user()->role}})|Log Out</a>
                </div>
     
            
</nav>