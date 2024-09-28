<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Favicon icon -->
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="assets/images/favicon.png" />
    <title>
        Matrix Template - The Ultimate Multipurpose admin template
    </title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">

    <style>
        .nav-tabs .nav-link {
            color: #0033cc;
        }

        .nav-tabs .nav-link.active {
            background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);
            color: white;
        }

        th {
            background-color: #7460ee;
            background: linear-gradient(to bottom right, #cc66ff 1%, #0033cc 100%);
            color: blue;
        } 
        /* Fix the footer at the bottom */
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            text-align: center;
            background-color: #f1f1f1;
            padding: 10px 0;
            z-index: 1000;
        }

        #main-wrapper {
            padding-bottom: 50px;
        }
    </style>
</head>

<body>
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper">
        <!-- Topbar header - style you can find in pages.scss -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a
                        class="nav-toggler waves-effect waves-light d-block d-md-none"
                        href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img
                                src="assets/images/logo-icon.png"
                                alt="homepage"
                                class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img
                                src="assets/images/logo-text.png"
                                alt="homepage"
                                class="light-logo" />
                        </span>
                    </a>
                    <!-- End Logo -->

                    <!-- Toggle which is visible on mobile only -->
                    <a
                        class="topbartoggler d-block d-md-none waves-effect waves-light"
                        href="javascript:void(0)"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- End Logo -->

                <div
                    class="navbar-collapse collapse"
                    id="navbarSupportedContent"
                    data-navbarbg="skin5">
                    <!-- toggle and nav items -->

                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block">
                            <a
                                class="nav-link sidebartoggler waves-effect waves-light"
                                href="javascript:void(0)"
                                data-sidebartype="mini-sidebar">
                                <i class="mdi mdi-menu font-24"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Right side toggle and nav items -->

                    <ul class="navbar-nav float-right">
                        <!-- User profile and search -->
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                                href=""
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <img
                                    src="assets/images/users/1.jpg"
                                    alt="user"
                                    class="rounded-circle"
                                    width="31" />
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a
                                    class="dropdown-item"
                                    href="javascript:void(0)">
                                    <i
                                        class="fa fa-power-off m-r-5 m-l-5"></i>
                                    Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- End Topbar header -->

        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item">
                            <a
                                class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.php"
                                aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a
                                class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="mentee.php"
                                aria-expanded="false">
                                <i class="mdi mdi-chart-bubble"></i>
                                <span class="hide-menu">Mentees</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a
                                class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="tables.html"
                                aria-expanded="false">
                                <i class="mdi mdi-border-inside"></i>
                                <span class="hide-menu">Tables</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a
                                class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="grid.html"
                                aria-expanded="false">
                                <i class="mdi mdi-blur-linear"></i>
                                <span class="hide-menu">Full Width</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a
                                class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-receipt"></i>
                                <span class="hide-menu">Forms </span>
                            </a>
                            <ul
                                aria-expanded="false"
                                class="collapse first-level">
                                <li class="sidebar-item">
                                    <a
                                        href="form-basic.html"
                                        class="sidebar-link">
                                        <i class="mdi mdi-note-outline"></i>
                                        <span class="hide-menu">
                                            Form Basic</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a
                                        href="form-wizard.html"
                                        class="sidebar-link">
                                        <i class="mdi mdi-note-plus"></i>
                                        <span class="hide-menu">
                                            Form Wizard</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">My_Details</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li
                                        class="breadcrumb-item active"
                                        aria-current="page">
                                        Library
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <div class="container-fluid mt-4">
                <!-- Main Card -->
                <div class="card">
                    <div class="card-body">
                        <!-- Tabs Navigation -->
                        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="guidelines-tab" data-bs-toggle="tab" data-bs-target="#guidelines" type="button" role="tab" aria-controls="guidelines" aria-selected="true">
                                    <i class="bi bi-people-fill"></i> <b>Guidelines</b>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="records-tab" data-bs-toggle="tab" data-bs-target="#records" type="button" role="tab" aria-controls="records" aria-selected="false">
                                    <i class="bi bi-people-fill"></i> <b>View Records</b>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="mentor-tab" data-bs-toggle="tab" data-bs-target="#mentor" type="button" role="tab" aria-controls="mentor" aria-selected="false">
                                    <i class="bi bi-house-door-fill"></i> <b>Mentor</b>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="problem-tab" data-bs-toggle="tab" data-bs-target="#problem" type="button" role="tab" aria-controls="problem" aria-selected="false">
                                    <i class="bi bi-house-door-fill"></i> <b>Problem Statements</b>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="ongoing-tab" data-bs-toggle="tab" data-bs-target="#ongoing" type="button" role="tab" aria-controls="ongoing" aria-selected="false">
                                    <i class="bi bi-house-door-fill"></i> <b>Ongoing Statements</b>
                                </button>
                            </li>
                        </ul>

                        <!-- Tabs Content -->
                        <div class="tab-content" id="myTabContent">

                            <!-- Guidelines Tab Pane -->
                            <div class="tab-pane fade show active" id="guidelines" role="tabpanel" aria-labelledby="guidelines-tab">
                                <div class="p-4">
                                    <h5>Guidelines</h5>
                                    <p>Here you can place your guidelines content.</p>
                                    <!-- Add your guidelines content here -->
                                </div>
                            </div>

                            <!-- View Records Tab Pane -->
                            <div class="tab-pane fade" id="records" role="tabpanel" aria-labelledby="records-tab">
                                <div class="p-4">
                                    <div class="d-flex justify-content-end mb-3">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#recordModal">
                                            <i class="bi bi-plus-circle"></i> Add Details
                                        </button>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="recordsTable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Category</th>
                                                    <th>Uploaded Date</th>
                                                    <th>Score</th>
                                                    <th>Link</th>
                                                    <th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Patent</td>
                                                    <td>2024-09-28</td>
                                                    <td>90</td>
                                                    <td><a href="#" target="_blank">View Link</a></td>
                                                    <td><button class="btn btn-info btn-sm">View</button></td>
                                                </tr>
                                                <!-- Add more rows as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Mentor Tab Pane -->
                            <div class="tab-pane fade" id="mentor" role="tabpanel" aria-labelledby="mentor-tab">
                                <div class="p-4">
                                    <div class="table-responsive">
                                        <table id="mentorTable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Date</th>
                                                    <th>Points Discussed</th>
                                                    <th>Suggestions Given</th>
                                                    <th>Action Taken</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2024-09-20</td>
                                                    <td>Project Scope</td>
                                                    <td>Refined objectives</td>
                                                    <td>Updated project plan</td>
                                                    <td>Completed</td>
                                                </tr>
                                                <!-- Add more rows as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Problem Statements Tab Pane -->
                            <div class="tab-pane fade" id="problem" role="tabpanel" aria-labelledby="problem-tab">
                                <div class="p-4">
                                    <div class="table-responsive">
                                        <table id="problemTable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Problem ID</th>
                                                    <th>Problem Title</th>
                                                    <th>Description</th>
                                                    <th>Faculty Name</th>
                                                    <th>Given Date</th>
                                                    <th>Last Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>P-001</td>
                                                    <td>Data Analysis</td>
                                                    <td>Analyze dataset for trends.</td>
                                                    <td>Dr. Smith</td>
                                                    <td>2024-09-15</td>
                                                    <td>2024-10-15</td>
                                                    <td><button class="btn btn-warning btn-sm">Edit</button></td>
                                                </tr>
                                                <!-- Add more rows as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Ongoing Statements Tab Pane -->
                            <div class="tab-pane fade" id="ongoing" role="tabpanel" aria-labelledby="ongoing-tab">
                                <div class="p-4">
                                    <div class="table-responsive">
                                        <table id="ongoingTable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Problem ID</th>
                                                    <th>Problem Title</th>
                                                    <th>Description</th>
                                                    <th>Last Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>P-002</td>
                                                    <td>System Optimization</td>
                                                    <td>Improve system performance.</td>
                                                    <td>2024-11-01</td>
                                                    <td>In Progress</td>
                                                </tr>
                                                <!-- Add more rows as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- End of tab-content -->
                    </div> <!-- End of card-body -->
                </div> <!-- End of card -->
            </div> <!-- End of container-fluid -->

            <!-- Add Record Modal -->
            <div class="modal fade" id="recordModal" tabindex="-1" aria-labelledby="recordModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form id="addRecordForm" enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="recordModalLabel">Add Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-select" name="category" id="category" required>
                                        <option value="" disabled selected>Select</option>
                                        <option value="PATENT">Patent</option>
                                        <option value="PROJECTS">Projects</option>
                                        <option value="GRANTS">Grants</option>
                                        <option value="INTERNSHIP">Internship</option>
                                        <option value="RESEARCH">Research</option>
                                        <option value="PRIZE-WINNING">Prizes</option>
                                        <option value="CONFERENCE">Conference</option>
                                        <option value="CERTIFICATE">Certificate</option>
                                        <option value="ACADEMIC">Academics</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" id="image" accept="image/*" required onchange="validateSize(this)">
                                </div>
                                <div class="mb-3">
                                    <label for="links" class="form-label">Links</label>
                                    <input type="url" class="form-control" name="links" id="links" placeholder="Enter link" required />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- End of Add Record Modal -->
            <footer class="footer text-center">X'el_Track</footer>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- All Jquery -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- jQuery (necessary for DataTables) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- Initialize DataTable -->
    <script>
        $(document).ready(function() {
            $('#ProgressTable').DataTable(); // Initialize the DataTable
        });
    </script>
    <!-- set date as today -->
    <script>
        var today = new Date().toISOString().split('T')[0];
        var dateInput = document.getElementById('uploaded_date');
        dateInput.setAttribute('min', today);
        dateInput.setAttribute('max', today);
        dateInput.value = today;
    </script>
    <!-- data table -->
    <script>
         $(document).ready(function() {
            $('#recordsTable').DataTable();
            $('#mentorTable').DataTable();
            $('#problemTable').DataTable();
            $('#ongoingTable').DataTable();
        });
    </script>
</body>

</html>