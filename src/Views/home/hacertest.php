    <body class="enlarged" data-keep-enlarged="true">

        <!-- Begin page -->
        <div class="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <?php
                 include "./navs/LeftSidebar2.php";
            ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Topbar Start -->
                    <?php
                         include "./navs/topbar2.php";
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
                                    <h4 class="page-title">
                                    <?php

                                    if(isset($data['test']))
                                        echo $data['testnombre'];
                                    else
                                        echo"Tema 1. La carretera - Test 1";

                                    ?>
                                    </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <?php

                        $testfinal = array();


                        while($row = mysqli_fetch_assoc($data['test']))
                        {
                            array_push($testfinal,$row);
                        }
                        
                        $i=0;
                        $pos = 0;


                    for ($j=0; $j < 30 ; $j++)
                    {
                        
                        $preg = $j+1;
                        $pos1 = $pos+1;
                        $pos2 = $pos+2;

                        if($i%2 == 0)
                        {
                        
                            echo"
                            
                            <div class='row'>
                            <div class='col-md-3 align-self-center'>
                                <div class='card'>
                                    <div class='card-body'>
                                        <img class='col-12' src='".$testfinal[$pos]['imagen']."' alt=''>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-9'>
                                <div class='card'>
                                    <div class='card-body radioimagen'>
                                        <h3 class='header-title'>Pregunta $preg</h3>
                                        <div class='row'>
                                            <div class='col-md-12'>
                                                <h1 class='mb-1 mt-3 font-weight-bold text-white'>".utf8_encode($testfinal[$pos]['ptexto'])."</h1>
                                            </div>
                                            <div class='col-md-12 radiomargin'>
                                                <div>
                                                    <input id='p".$preg."1' class='radiobtncircle' type='radio' name='$preg' value='".$testfinal[$pos]['correcta']."'>
                                                    <label id='".$preg.$preg."1' class='col-md-10 radiobtn' for='p".$preg."1'><b>a)</b> ".utf8_encode($testfinal[$pos]['rtexto'])."</label>
                                                </div>

                                                <div>
                                                     <input id='p".$preg."2' class='radiobtncircle' type='radio'name='$preg' value='".$testfinal[$pos1]['correcta']."'>
                                                    <label id='".$preg.$preg."2' class='col-md-10 radiobtn' for='p".$preg."2'><b>b)</b>".utf8_encode($testfinal[$pos1]['rtexto'])."</label>
                                                </div>

                                                <div>
                                                    <input id='p".$preg."3' class='radiobtncircle' type='radio' name='$preg' value='".$testfinal[$pos2]['correcta']."'>
                                                    <label id='".$preg.$preg."3' class='col-md-10 radiobtn' for='p".$preg."3'><b>c)</b>".utf8_encode($testfinal[$pos2]['rtexto'])."</label>
                                                </div>
                                            </div>
                                        </div> <!-- end row -->
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div> 
                        <!-- end row-->                            
                            
                            ";

                        }
                        else
                        {
                            echo
                            "
                            
                            <div class='row'>
                            <div class='col-md-9'>
                                <div class='card'>
                                    <div class='card-body'>
                                        <h3 class='header-title'>Pregunta $preg</h3>
                                        <div class='row'>
                                            <div class='col-md-12'>
                                                <h1 class='mb-1 mt-3 font-weight-bold text-white'>".utf8_encode($testfinal[$pos]['ptexto'])."</h1>
                                            </div>
                                            <div class='col-md-12 radiomargin'>
                                                <div>
                                                    <input id='p".$preg."1' class='radiobtncircle' type='radio' name='$preg' value='".$testfinal[$pos]['correcta']."'>
                                                    <label id='".$preg.$preg."1' class='col-md-10 radiobtn' for='p".$preg."1'><b>a)</b> ".utf8_encode($testfinal[$pos]['rtexto'])."</label>
                                                </div>

                                                <div>
                                                    <input id='p".$preg."2' class='radiobtncircle' type='radio'  name='$preg' value='".$testfinal[$pos1]['correcta']."'>
                                                    <label id='".$preg.$preg."2' class='col-md-10 radiobtn' for='p".$preg."2'><b>b)</b>  ".utf8_encode($testfinal[$pos1]['rtexto'])."</label>
                                                </div>

                                                <div>
                                                    <input id='p".$preg."3' class='radiobtncircle' type='radio' name='$preg' value='".$testfinal[$pos2]['correcta']."'>
                                                    <label id='".$preg.$preg."3' class='col-md-10 radiobtn' for='p".$preg."3'><b>c)</b>  ".utf8_encode($testfinal[$pos2]['rtexto'])."</label>
                                                </div>
                                            </div>
                                        </div> <!-- end row -->
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                            <div class='col-md-3 align-self-center'>
                                <div class='card'>
                                    <div class='card-body'>
                                        <img class='col-12' src='".$testfinal[$pos]['imagen']."' alt=''>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- end row-->


                            ";
                        }

                        $pos += 3;
                        $i++;
                    }

                        
                        ?>

                    <button class="btn correct btn-primary btn-md btn-block btn waves-effect waves-light cursorpointer" onclick="corregirtest(this)" id="todo-btn-submit">Corregir</button>

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


        <?php 

        if(isset($data['test']))

        echo'

        <!-- App js -->
        <script src="../assets/js/app.min.js"></script>
        <script src="../assets/js/corregir.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

        <!-- Typehead -->
        <script src="../assets/js/vendor/handlebars.min.js"></script>
        <script src="../assets/js/vendor/typeahead.bundle.min.js"></script>

        <!-- Demo -->
        <script src="../assets/js/pages/demo.typehead.js"></script>
        ';

        else

        echo'

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        <script src="assets/js/corregir.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

        <!-- Typehead -->
        <script src="assets/js/vendor/handlebars.min.js"></script>
        <script src="assets/js/vendor/typeahead.bundle.min.js"></script>

        <!-- Demo -->
        <script src="assets/js/pages/demo.typehead.js"></script>

        ';

        ?>


    </body>