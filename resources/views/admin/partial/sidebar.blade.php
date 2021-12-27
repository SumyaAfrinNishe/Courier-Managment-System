 <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- Dashboard -->
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <!-- Booking -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Booking
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.customer.info')}}">Customer Information</a>
                                    <a class="nav-link" href="{{route('admin.booking.add')}}">Add Courier</a>
                                    <a class="nav-link" href="{{route('admin.courier.record')}}">Courier Record</a>
                                </nav>
                            </div>
                        
                            <!-- Branch -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Branch
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                   
                                    <a class="nav-link" href="{{route('admin.add.branch')}}">Add Branch</a>
                                    <a class="nav-link" href="{{route('admin.branch.list')}}">Branch List</a>
                                </nav>
                            </div>
                            <!-- Staff -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Staff
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                
                                    <a class="nav-link" href="{{route('admin.staff.add')}}">Add Staff</a>
                                    <a class="nav-link" href="{{route('admin.staff.list')}}">Staff List</a>
                                </nav>
                            </div>


                            <!-- Status -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Status
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.total.courier')}}">Total Courier</a>
                                    <a class="nav-link" href="{{route('admin.total.pickup')}}">Total Courier Pickup</a>
                                    <a class="nav-link" href="{{route('admin.total.shipped')}}">Total Shipped</a>
                                    <a class="nav-link" href="{{route('admin.in.transit')}}">In-Transit</a>
                                    <a class="nav-link" href="{{route('admin.arrived.destination')}}">Total Arrived at Destination</a>
                                    <a class="nav-link" href="{{route('admin.out.delievery')}}">Out for Delievery</a>
                                    <a class="nav-link" href="{{route('admin.total.delieverd')}}">Total Delievered Courier</a>

                                </nav>
                            </div>
                            <div>

                            <!-- Tracking -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Tracking
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                   
                                    <a class="nav-link" href="{{route('admin.track.list')}}">Manage Tracking</a>
                                </nav>
                            </div>

                            <!-- Payment -->
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Payment
                            </a>

                            <!-- Report -->
                             <a class="nav-link" href="{{route('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Report
                            </a>
                        </div>
                    </div>
                </nav>
            </div>