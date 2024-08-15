<x-theme name="admin.hyper">
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                    <li class="breadcrumb-item active">Orders List</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Orders List</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-xl-8">
                                        <form class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between">
                                            <div class="col-auto">
                                                <label for="inputPassword2" class="visually-hidden">Search</label>
                                                <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                            </div>
                                            <div class="col-auto">
                                                <div class="d-flex align-items-center">
                                                    <label for="status-select" class="me-2">Status</label>
                                                    <select class="form-select" id="status-select">
                                                        <option selected>Choose...</option>
                                                        <option value="1">Paid</option>
                                                        <option value="2">Awaiting Authorization</option>
                                                        <option value="3">Payment Failed</option>
                                                        <option value="4">Cash On Delivery</option>
                                                        <option value="5">Fulfilled</option>
                                                        <option value="6">Unfulfilled</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="text-xl-end mt-xl-0 mt-2">
                                            <button type="button" class="btn btn-danger mb-2 me-2"><i class="mdi mdi-basket me-1"></i> Add New Order</button>
                                            <button type="button" class="btn btn-light mb-2">Export</button>
                                        </div>
                                    </div><!-- end col-->
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th style="width: 20px;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                                        <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th>Order ID</th>
                                                <th>Customers</th>
                                                <th>Project</th>
                                                <th>Address</th>
                                                <th>Date Order</th>
                                                <th>Order Status</th>
                                                <th style="width: 125px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#CM9708</a> </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2"><h5 class="my-0">Jerry Geiger</h5></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Landing Page</td>
                                                <td>
                                                    <h5 class="my-0">New York</h5>
                                                    <p class="mb-0 txt-muted">Meadow Lane Oakland</p>
                                                </td>
                                                <td>01 January 2022</td>
                                                <td><h5 class="my-0"><span class="badge badge-info-lighten">In Progress</span></h5></td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck3">
                                                        <label class="form-check-label" for="customCheck3">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#CM9707</a> </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2"><h5 class="my-0">Adam Thomas</h5></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Client Project (Sktech)</td>
                                                <td>
                                                    <h5 class="my-0">Canada</h5>
                                                    <p class="mb-0 txt-muted">Bagwell Avenue Ocala</p>
                                                </td>
                                                <td>02 January 2022</td>
                                                <td><h5 class="my-0"><span class="badge badge-success-lighten">Complete</span></h5></td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck4">
                                                        <label class="form-check-label" for="customCheck4">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#CM9706</a> </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2"><h5 class="my-0">Sara Lewis</h5></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Admin Dashboard</td>
                                                <td>
                                                    <h5 class="my-0">Denmark</h5>
                                                    <p class="mb-0 txt-muted">Washburn Baton Rouge</p>
                                                </td>
                                                <td>03 January 2022</td>
                                                <td><h5 class="my-0"><span class="badge badge-warning-lighten">Pending</span></h5></td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck5">
                                                        <label class="form-check-label" for="customCheck5">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#CM9705</a> </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2"><h5 class="my-0">Myrtle Johnson</h5></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Landing Page (Figma)</td>
                                                <td>
                                                    <h5 class="my-0">Brazil</h5>
                                                    <p class="mb-0 txt-muted">Nest Lane Olivette</p>
                                                </td>
                                                <td>04 January 2022</td>
                                                <td><h5 class="my-0"><span class="badge badge-primary-lighten">Delivered</span></h5></td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck6">
                                                        <label class="form-check-label" for="customCheck6">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#CM9704</a> </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2"><h5 class="my-0">Bryan Collier</h5></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>App Landing Page</td>
                                                <td>
                                                    <h5 class="my-0">Mexico</h5>
                                                    <p class="mb-0 txt-muted">Larry San Francisco</p>
                                                </td>
                                                <td>05 January 2022</td>
                                                <td><h5 class="my-0"><span class="badge badge-info-lighten">In Progress</span></h5></td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck7">
                                                        <label class="form-check-label" for="customCheck7">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#CM9703</a> </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2"><h5 class="my-0">Joshua Moody</h5></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>CRM Admin pages</td>
                                                <td>
                                                    <h5 class="my-0">Russia</h5>
                                                    <p class="mb-0 txt-muted">Oak Drive Mobile</p>
                                                </td>
                                                <td>06 January 2022</td>
                                                <td><h5 class="my-0"><span class="badge badge-success-lighten">Complete</span></h5></td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck8">
                                                        <label class="form-check-label" for="customCheck8">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#CM9702</a> </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2"><h5 class="my-0">John Clune</h5></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Ecommerce Dashboard</td>
                                                <td>
                                                    <h5 class="my-0">Manitoba</h5>
                                                    <p class="mb-0 txt-muted">Oxford Court Amory</p>
                                                </td>
                                                <td>07 January 2022</td>
                                                <td><h5 class="my-0"><span class="badge badge-primary-lighten">Delivered</span></h5></td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck9">
                                                        <label class="form-check-label" for="customCheck9">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#CM9701</a> </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2"><h5 class="my-0">Jamie Romero</h5></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Logo Design</td>
                                                <td>
                                                    <h5 class="my-0">Nova Scotia</h5>
                                                    <p class="mb-0 txt-muted">Lane New Market</p>
                                                </td>
                                                <td>08 January 2022</td>
                                                <td><h5 class="my-0"><span class="badge badge-warning-lighten">Pending</span></h5></td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck10">
                                                        <label class="form-check-label" for="customCheck10">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#CM9700</a> </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-9.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2"><h5 class="my-0">Clint Percival</h5></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>PHP Project</td>
                                                <td>
                                                    <h5 class="my-0">Manitoba</h5>
                                                    <p class="mb-0 txt-muted">Wilson Avenue Dallas</p>
                                                </td>
                                                <td>09 January 2022</td>
                                                <td><h5 class="my-0"><span class="badge badge-primary-lighten">Delivered</span></h5></td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck11">
                                                        <label class="form-check-label" for="customCheck11">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#CM9699</a> </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="assets/images/users/avatar-10.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </div>
                                                            <div class="flex-grow-1 ms-2"><h5 class="my-0">Donna Lynch</h5></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Landing Section</td>
                                                <td>
                                                    <h5 class="my-0">Yukon</h5>
                                                    <p class="mb-0 txt-muted">Avenue Johnson City</p>
                                                </td>
                                                <td>10 January 2022</td>
                                                <td><h5 class="my-0"><span class="badge badge-success-lighten">Complete</span></h5></td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- container -->
        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-md-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
</x-theme>


        <meta charset="utf-8" />
        <title>Orders List | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->


        <!-- Theme Config Js -->


        <!-- App css -->




        <!-- Begin page -->
        <div class="wrapper">


            <!-- ========== Topbar Start ========== -->
            @theme("_partials/topbar")
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            @theme("_sidebar/sidebar")
            <!-- ========== Left Sidebar End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->



            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->
        @theme("_partials/theme-setting")

        <!-- Vendor js -->


        <!-- App js -->


