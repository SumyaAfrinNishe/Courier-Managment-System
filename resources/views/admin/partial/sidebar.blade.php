 <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    @if(auth()->user()->role=="admin")
                        <div class="nav">
                            <!-- Dashboard -->
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                            <!-- Booking -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsbook" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Courier Request
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsbook" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.customer.info')}}">Courier Information</a>
                                    

                                </nav>
                            </div>
                        
                            <!-- Branch -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsbranch" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Branch
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsbranch" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                   
                                    <a class="nav-link" href="{{route('admin.add.branch')}}">Add Branch</a>
                                    <a class="nav-link" href="{{route('admin.branch.list')}}">Branch List</a>
                                </nav>
                            </div>
                            
                            <!-- Staff -->
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutstaff" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Staff
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutstaff" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                
                                    <a class="nav-link" href="{{route('admin.staff.add')}}">Add Staff</a>
                                    <a class="nav-link" href="{{route('admin.staff.list')}}">Staff List</a>
                                </nav>
                            </div>
                          @endif

                            <!-- Status -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutsstatus" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Status
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsstatus" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.accept.courier')}}">Accepted by Courier</a>
                                    <a class="nav-link" href="{{route('admin.courier.collected')}}">Courier Collected</a>
                                    <a class="nav-link" href="{{route('admin.ready.pickup')}}">Ready to Pickup</a>
                                    <a class="nav-link" href="{{route('admin.picked.up')}}">Courier Picked up</a>
                                    <a class="nav-link" href="{{route('admin.shipped')}}">Shipped</a>
                                    <a class="nav-link" href="{{route('admin.in.transit')}}">In-Transit</a>
                                    <a class="nav-link" href="{{route('admin.arrived.destination')}}">Arrived at Destination</a>
                                    <a class="nav-link" href="{{route('admin.out.delievery')}}">Out for Delievery</a>
                                    <a class="nav-link" href="{{route('admin.total.delieverd')}}">Delievered Courier</a>
                                    <a class="nav-link" href="{{route('admin.handover.delievery')}}">Handover</a>
                                    <a class="nav-link" href="{{route('admin.unsuccessful.delievery')}}">Unsuccessful Delievery Atempt</a>
                                </nav>
                            </div>
                            @if(auth()->user()->role=='admin')
                            <div>
                                

                            <!-- Tracking -->
<!--                             
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutst" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Tracking
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutst" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                   
                                    <a class="nav-link" href="{{route('admin.track.list')}}">Manage Tracking</a>
                                </nav>
                            </div> -->

                            <!-- Payment -->
                           
                            <!-- <a class="nav-link" href="{{route('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Payment
                            </a> -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutreport" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Report
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutreport" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                
                            <!-- Report -->
                            <a class="nav-link" href="{{route('admin.payment.report.show')}}">For Payment</a>
                                    <a class="nav-link" href="{{route('admin.status.report.show')}}">For Status</a>
                                </nav>
                            </div>
                            
                        </div>
                        
                    </div>
                    @endif
                </nav>
            </div>