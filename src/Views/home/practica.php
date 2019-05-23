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
                                    <div class="page-title-right">
                                    </div>
                                    <h4 class="page-title">Practicar test</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="header-title">Practicar test por temas</h3>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="mb-1 mt-3 font-weight-bold text-muted">Corregir al responder</p>
                                                <input type="checkbox" id="switch1" checked data-switch="success" name="corregir"/>
                                                <label for="switch1" data-on-label="Si" data-off-label="No"></label>
                                            </div>
                                            <div class="col-md-12">
                                                <p class="mb-1 mt-3 font-weight-bold text-muted">Mostrar ayuda mientras haces el test</p>
                                                <input type="checkbox" id="switch2" checked data-switch="success" name="ayuda"/>
                                                <label for="switch2" data-on-label="Si" data-off-label="No"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mb-1 mt-3 font-weight-bold text-muted">Selecciona un test</p>

                                                <form method="POST" action="hacertest/elegido">
                                                <select class="form-control select2" data-toggle="select2" name="testid">
                                                    <option>Elegir</option>
                                                    <?php 
                                                    while($row = mysqli_fetch_assoc($data['tests']))
                                                    {
                                                        echo"<option value='$row[id]'>$row[nombre]</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                                <input type="submit" class="btn btn-light" value="Hacer Test">

                                </form>
                            </div> <!-- end col-->
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

        <!-- Typehead -->
        <script src="assets/js/vendor/handlebars.min.js"></script>
        <script src="assets/js/vendor/typeahead.bundle.min.js"></script>

        <!-- Demo -->
        <script src="assets/js/pages/demo.typehead.js"></script>

    </body>