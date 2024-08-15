<x-theme>

</x-theme>


        <meta charset="utf-8" />
        <title>Form Validation | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Validation</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Form Validation</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Custom styles</h4>
                                        <p class="text-muted font-14">Custom feedback styles apply custom colors, borders,
                                            focus styles, and background
                                            icons to better communicate feedback. Background icons for
                                            <code>&lt;select&gt;</code>s are only available with
                                            <code>.form-select</code>, and not <code>.form-control</code>.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#custom-styles-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#custom-styles-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="custom-styles-preview">
                                                <form class="needs-validation" novalidate>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">First name</label>
                                                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Last name</label>
                                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustomUsername">Username</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                            <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username"
                                                                aria-describedby="inputGroupPrepend" required>
                                                            <div class="invalid-feedback">
                                                                Please choose a username.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">City</label>
                                                        <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid city.
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom04">State</label>
                                                        <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid state.
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom05">Zip</label>
                                                        <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                                        <div class="invalid-feedback">
                                                            Please provide a valid zip.
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="invalidCheck" required>
                                                            <label class="form-check-label form-label" for="invalidCheck">Agree to terms
                                                                and conditions</label>
                                                            <div class="invalid-feedback">
                                                                You must agree before submitting.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                                </form>
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="custom-styles-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;form class=&quot;needs-validation&quot; novalidate&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationCustom01&quot;&gt;First name&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom01&quot; placeholder=&quot;First name&quot; value=&quot;Mark&quot; required&gt;
                                                                &lt;div class=&quot;valid-feedback&quot;&gt;
                                                                    Looks good!
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationCustom02&quot;&gt;Last name&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom02&quot; placeholder=&quot;Last name&quot; value=&quot;Otto&quot; required&gt;
                                                                &lt;div class=&quot;valid-feedback&quot;&gt;
                                                                    Looks good!
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationCustomUsername&quot;&gt;Username&lt;/label&gt;
                                                                &lt;div class=&quot;input-group&quot;&gt;
                                                                    &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroupPrepend&quot;&gt;@&lt;/span&gt;
                                                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustomUsername&quot; placeholder=&quot;Username&quot;
                                                                        aria-describedby=&quot;inputGroupPrepend&quot; required&gt;
                                                                    &lt;div class=&quot;invalid-feedback&quot;&gt;
                                                                        Please choose a username.
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationCustom03&quot;&gt;City&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom03&quot; placeholder=&quot;City&quot; required&gt;
                                                                &lt;div class=&quot;invalid-feedback&quot;&gt;
                                                                    Please provide a valid city.
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationCustom04&quot;&gt;State&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom04&quot; placeholder=&quot;State&quot; required&gt;
                                                                &lt;div class=&quot;invalid-feedback&quot;&gt;
                                                                    Please provide a valid state.
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationCustom05&quot;&gt;Zip&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom05&quot; placeholder=&quot;Zip&quot; required&gt;
                                                                &lt;div class=&quot;invalid-feedback&quot;&gt;
                                                                    Please provide a valid zip.
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;invalidCheck&quot; required&gt;
                                                                    &lt;label class=&quot;form-check-label form-label&quot; for=&quot;invalidCheck&quot;&gt;Agree to terms
                                                                        and conditions&lt;/label&gt;
                                                                    &lt;div class=&quot;invalid-feedback&quot;&gt;
                                                                        You must agree before submitting.
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
                                                        &lt;/form&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->


                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Tooltips</h4>
                                        <p class="text-muted font-14">If your form layout allows it, you can swap the
                                            <code>.{valid|invalid}-feedback</code> classes for
                                            <code>.{valid|invalid}-tooltip</code> classes to display validation feedback in
                                            a styled tooltip. Be sure to have a parent with <code>position: relative</code>
                                            on it for tooltip positioning. In the example below, our column classes have
                                            this already, but your project may require an alternative setup.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#tooltips-validation-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#tooltips-validation-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="tooltips-validation-preview">
                                                <form class="needs-validation" novalidate>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="validationTooltip01">First name</label>
                                                        <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                                                        <div class="valid-tooltip">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-tooltip">
                                                            Please enter first name.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="validationTooltip02">Last name</label>
                                                        <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                                                        <div class="valid-tooltip">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-tooltip">
                                                            Please enter last name.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="validationTooltipUsername">Username</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                                            <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username"
                                                                aria-describedby="validationTooltipUsernamePrepend" required>
                                                            <div class="invalid-tooltip">
                                                                Please choose a unique and valid username.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="validationTooltip03">City</label>
                                                        <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                                                        <div class="invalid-tooltip">
                                                            Please provide a valid city.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="validationTooltip04">State</label>
                                                        <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
                                                        <div class="invalid-tooltip">
                                                            Please provide a valid state.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="validationTooltip05">Zip</label>
                                                        <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                                                        <div class="invalid-tooltip">
                                                            Please provide a valid zip.
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                                </form>
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="tooltips-validation-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;form class=&quot;needs-validation&quot; novalidate&gt;
                                                            &lt;div class=&quot;position-relative mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationTooltip01&quot;&gt;First name&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip01&quot; placeholder=&quot;First name&quot; value=&quot;Mark&quot; required&gt;
                                                                &lt;div class=&quot;valid-tooltip&quot;&gt;
                                                                    Looks good!
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;invalid-tooltip&quot;&gt;
                                                                    Please enter first name.
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;position-relative mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationTooltip02&quot;&gt;Last name&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip02&quot; placeholder=&quot;Last name&quot; value=&quot;Otto&quot; required&gt;
                                                                &lt;div class=&quot;valid-tooltip&quot;&gt;
                                                                    Looks good!
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;invalid-tooltip&quot;&gt;
                                                                    Please enter last name.
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;position-relative mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationTooltipUsername&quot;&gt;Username&lt;/label&gt;
                                                                &lt;div class=&quot;input-group&quot;&gt;
                                                                    &lt;span class=&quot;input-group-text&quot; id=&quot;validationTooltipUsernamePrepend&quot;&gt;@&lt;/span&gt;
                                                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltipUsername&quot; placeholder=&quot;Username&quot;
                                                                        aria-describedby=&quot;validationTooltipUsernamePrepend&quot; required&gt;
                                                                    &lt;div class=&quot;invalid-tooltip&quot;&gt;
                                                                        Please choose a unique and valid username.
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;position-relative mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationTooltip03&quot;&gt;City&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip03&quot; placeholder=&quot;City&quot; required&gt;
                                                                &lt;div class=&quot;invalid-tooltip&quot;&gt;
                                                                    Please provide a valid city.
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;position-relative mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationTooltip04&quot;&gt;State&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip04&quot; placeholder=&quot;State&quot; required&gt;
                                                                &lt;div class=&quot;invalid-tooltip&quot;&gt;
                                                                    Please provide a valid state.
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;position-relative mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationTooltip05&quot;&gt;Zip&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip05&quot; placeholder=&quot;Zip&quot; required&gt;
                                                                &lt;div class=&quot;invalid-tooltip&quot;&gt;
                                                                    Please provide a valid zip.
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
                                                        &lt;/form&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

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

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->
        @theme("_partials/theme-setting")

        <!-- Vendor js -->


        <!-- Code Highlight js -->
        <script src="assets/vendor/highlightjs/highlight.pack.min.js"></script>
        <script src="assets/js/hyper-syntax.js"></script>

        <!-- App js -->


    </body>

</html>
