<?php session_start();?>

<body>

        <!-- Begin page -->
        <div class="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <?php
                 include "./navs/LeftSidebar.php";
            ?>
            <!-- Left Sidebar End -->


            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Topbar Start -->
                    <?php
                         include "./navs/topbar.php";
                     ?>
                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Inicio</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
        
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Campaign Sent">Tests Realizados</h5>
                                                <h3 class="my-2 py-1">9,184</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <div id="campaign-sent-chart"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
        
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="New Leads">Test Fallados</h5>
                                                <h3 class="my-2 py-1">3,254</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 5.38%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <div id="new-leads-chart"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-xl-3 col-lg-6">
                                    <div class="card widget-flat bg-success text-white">
                                        <div class="card-body">
                                            <div class="float-right">
                                                <i class="mdi mdi-trophy-outline widget-icon bg-white text-success"></i>
                                            </div>
                                            <h5 class="font-weight-normal mt-0" title="Copas">Copas</h5>
                                            <h3 class="mt-3 mb-3 text-white">36,254</h3>
                                            <p class="mb-0">
                                                <span class="badge badge-light-lighten mr-1">
                                                    <i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                                                <span class="text-nowrap">Desde la semana pasada</span>
                                            </p>
                                        </div>
                                    </div>
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                    <div class="card widget-flat bg-primary text-white">
                                        <div class="card-body">
                                            <div class="float-right">
                                                <i class="mdi mdi-cash-multiple widget-icon bg-white text-primary"></i>
                                            </div>
                                            <h5 class="font-weight-normal mt-0" title="Revenue">Coins</h5>
                                            <h3 class="mt-3 mb-3 text-white">$10,245</h3>
                                            <p class="mb-0">
                                                <span class="badge badge-info mr-1">
                                                    <i class="mdi mdi-arrow-up-bold"></i> 17.26%</span>
                                                <span class="text-nowrap">Desde la semana pasada</span>
                                            </p>
                                        </div>
                                    </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                           
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                                            </div>
                                        </div>
                                        
                                        <h4 class="header-title mb-3">TEST</h4>

                                        <div id="dash-revenue-charts" class="apex-charts"></div>

                                    </div>
                                    <!-- end card body-->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row-->


                        <div class="row">
                                <div class="col-lg-4">
                                        <!-- Todo-->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="dropdown float-right">
                                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                    </div>
                                                </div>
                                                <h4 class="header-title mb-3">Tareas</h4>
        
                                                <div class="todoapp">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 id="todo-message"><span id="todo-remaining"></span> de <span id="todo-total"></span> restantes</h5>
                                                        </div>
                                                        <div class="col-auto">
                                                            <a href="" class="float-right btn btn-light btn-sm" id="btn-archive">Archivar</a>
                                                        </div>
                                                    </div>
        
                                                    <ul class="list-group list-group-flush slimscroll todo-list" style="max-height: 330px" id="todo-list"></ul>
        
                                                    <form name="todo-form" id="todo-form" class="needs-validation" novalidate>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" 
                                                                    placeholder="Añadir nueva tarea" required>
                                                            </div>
                                                            <div class="col-auto">
                                                                <button class="btn-primary btn-md btn-block btn waves-effect waves-light" type="submit" id="todo-btn-submit">Añadir</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div> <!-- end .todoapp-->
        
                                            </div> <!-- end card-body -->
                                        </div> <!-- end card-->
                                </div> <!-- end col-->

                            <div class="col-lg-4">
                                <div class="card cta-box bg-danger text-white">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <h2 class="mt-0"><i class="mdi mdi-bullhorn-outline"></i></h2>
                                                <h3 class="m-0 font-weight-normal cta-box-title">Anuncio <b>pa tu</b> Body <i class="mdi mdi-arrow-right-bold-outline"></i></h3>
                                            </div>
                                            <img class="ml-3" src="assets/images/email-campaign.svg" width="120" alt="Generic placeholder image">
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->

                                <div class="card cta-box bg-primary text-white">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <h3 class="m-0 font-weight-normal cta-box-title">Otro <b>anuncio</b> pa tu cuerpo moreno</h3>

                                            <img class="my-3" src="assets/images/report.svg" width="180" alt="Generic placeholder image">

                                            <br/>

  
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                
                            </div> <!-- end col-->
                            
                            <div class="col-lg-4">
                                No se que poner aquí

                            </div>
                            <!-- end col -->  
                        </div>
                        <!-- end row-->


        
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <?php
                include "./navs/footer.php";
                ?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Right Sidebar -->
        <div class="right-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="slimscroll-menu rightbar-content">

                <!-- Settings -->
                <hr class="mt-0" />
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0" />

                <div class="p-3">
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="notifications-check" checked>
                        <label class="custom-control-label" for="notifications-check">Notifications</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="api-access-check">
                        <label class="custom-control-label" for="api-access-check">API Access</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="auto-updates-check" checked>
                        <label class="custom-control-label" for="auto-updates-check">Auto Updates</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="online-status-check" checked>
                        <label class="custom-control-label" for="online-status-check">Online Status</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="auto-payout-check">
                        <label class="custom-control-label" for="auto-payout-check">Auto Payout</label>
                    </div>

                </div>


                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3">Recent Activity</h5>
                <hr class="mb-0" />
                <div class="pl-2 pr-2">
                    <div class="timeline-alt">
                        <div class="timeline-item">
                            <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                            <div class="timeline-item-info">
                                <a href="#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                                <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                <p class="mb-0 pb-2">
                                    <small class="text-muted">5 minutes ago</small>
                                </p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                            <div class="timeline-item-info">
                                <a href="#" class="text-primary font-weight-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                <small>Dave Gamache added
                                    <span class="font-weight-bold">Admin Dashboard</span>
                                </small>
                                <p class="mb-0 pb-2">
                                    <small class="text-muted">30 minutes ago</small>
                                </p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                            <div class="timeline-item-info">
                                <a href="#" class="text-info font-weight-bold mb-1 d-block">Robert Delaney</a>
                                <small>Send you message
                                    <span class="font-weight-bold">"Are you there?"</span>
                                </small>
                                <p class="mb-0 pb-2">
                                    <small class="text-muted">2 hours ago</small>
                                </p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                            <div class="timeline-item-info">
                                <a href="#" class="text-primary font-weight-bold mb-1 d-block">Audrey Tobey</a>
                                <small>Uploaded a photo
                                    <span class="font-weight-bold">"Error.jpg"</span>
                                </small>
                                <p class="mb-0 pb-2">
                                    <small class="text-muted">14 hours ago</small>
                                </p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                            <div class="timeline-item-info">
                                <a href="#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                                <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                <p class="mb-0 pb-2">
                                    <small class="text-muted">1 day ago</small>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="rightbar-overlay"></div>
        <!-- /Right-bar -->


        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

        <!-- Apex js -->
        <script src="assets/js/vendor/apexcharts.min.js"></script>

        <!-- Todo js -->
        <script src="assets/js/ui/component.todo.js"></script>

        <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard-crm.js"></script>
        <!-- end demo js-->
    </body>