<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title | xStack</title>
    <!-- base:css -->
    <link rel="stylesheet" href="../xstack-core/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../xstack-core/css/flag-icon.min.css">
    <link rel="stylesheet" href="../xstack-core/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../xstack-core/css/aos.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../xstack-core/css/style.css">
    <link rel="stylesheet" href="../xstack-core/css/simple-line-icons.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../xstack-core/images/favicon.png" />

</head>

<body>

    <div id="wrapper">
        <div class="container-scroller">
            <!-- topnav -->
            <?php
                include "../xstack-core/topnav.php";
            ?>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- right sidebar -->
                <?php
                    include "../xstack-core/right-sidebar.php";
                ?>
                <!-- left-sidebar -->
                <?php
                    include "left-sidebar.php";
                ?>

                <!-- main content -->
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <!--  style="min-height: 100vh;" -->
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="d-flex justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center dashboard-header flex-wrap mb-3 mb-sm-0">
                                        <h5 class="mr-4 mb-0 font-weight-bold">Dashboard</h5>
                                        <div class="d-flex align-items-baseline dashboard-breadcrumb">
                                            <p class="text-muted mb-0 mr-1 hover-cursor">App</p>
                                            <i class="mdi mdi-chevron-right mr-1 text-muted"></i>
                                            <p class="text-muted mb-0 mr-1 hover-cursor">xStack</p>
                                            <i class="mdi mdi-chevron-right mr-1 text-muted"></i>
                                            <p class="text-muted mb-0 hover-cursor">Home</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- put your main page content here
                        =======================================
                        end of main content -->

                    </div>
                    <!-- content-wrapper ends -->
                    <?php include "../xstack-core/footer.php"; ?>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->

            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
    </div>

    <!-- base:js -->
    <script src="../xstack-core/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../xstack-core/js/off-canvas.js"></script>
    <script src="../xstack-core/js/hoverable-collapse.js"></script>
    <script src="../xstack-core/js/todolist.js"></script>
    <script src="../xstack-core/js/dashboard.js"></script>
    <script src="../xstack-core/js/home.js"></script>
    <script src="../xstack-core/js/template.js"></script>
    <script src="../xstack-core/js/logout.js"></script>
    <script src="js/sample.js"></script>
</body>
</html>