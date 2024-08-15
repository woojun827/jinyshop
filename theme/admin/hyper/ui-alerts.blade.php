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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>
                                    <li class="breadcrumb-item active">Alerts</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Alerts</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Default Alert</h4>
                                <p class="text-muted font-14 mb-3">
                                    Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.
                                    Alerts are available for any length of text, as well as an optional dismiss
                                    button.
                                </p>
                                <p>
                                    For proper styling, use one of the eight
                                    <strong>required</strong> contextual classes (e.g.,
                                    <code>.alert-success</code>). For background color use class
                                    <code>.bg-* </code>, <code>.text-white </code>
                                </p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#default-alert-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#default-alert-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->

                                <div class="tab-content">
                                    <div class="tab-pane show active" id="default-alert-preview">
                                        <div class="alert alert-primary" role="alert">
                                            <strong>Primary - </strong> A simple primary alert—check it out!
                                        </div>
                                        <div class="alert alert-secondary" role="alert">
                                            <strong>Secondary - </strong> A simple secondary alert—check it out!
                                        </div>
                                        <div class="alert alert-success" role="alert">
                                            <strong>Success - </strong> A simple success alert—check it out!
                                        </div>
                                        <div class="alert alert-danger" role="alert">
                                            <strong>Error - </strong> A simple danger alert—check it out!
                                        </div>
                                        <div class="alert alert-warning bg-warning text-white border-0"
                                            role="alert">
                                            <strong>Warning - </strong> A simple warning alert—check it out!
                                        </div>
                                        <div class="alert alert-info bg-info text-white border-0" role="alert">
                                            <strong>Info - </strong> A simple info alert—check it out!
                                        </div>
                                        <div class="alert alert-light bg-light text-dark border-0" role="alert">
                                            <strong>Light - </strong> A simple light alert—check it out!
                                        </div>
                                        <div class="alert alert-dark bg-dark text-light border-0 mb-0" role="alert">
                                            <strong>Dark - </strong> A simple dark alert—check it out!
                                        </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="default-alert-code">
                                        <pre class="mb-0">
                                            <span class="html escape">
                                                &lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;
                                                    &lt;strong&gt;Primary - &lt;/strong&gt; A simple primary alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt;
                                                    &lt;strong&gt;Secondary - &lt;/strong&gt; A simple secondary alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
                                                    &lt;strong&gt;Success - &lt;/strong&gt; A simple success alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
                                                    &lt;strong&gt;Error - &lt;/strong&gt; A simple danger alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-warning bg-warning text-white border-0&quot; role=&quot;alert&quot;&gt;
                                                    &lt;strong&gt;Warning - &lt;/strong&gt; A simple warning alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-info bg-info text-white border-0&quot; role=&quot;alert&quot;&gt;
                                                    &lt;strong&gt;Info - &lt;/strong&gt; A simple info alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-light bg-light text-dark border-0&quot; role=&quot;alert&quot;&gt;
                                                    &lt;strong&gt;Light - &lt;/strong&gt; A simple light alert&mdash;check it out!
                                                &lt;/div&gt;
                                                &lt;div class=&quot;alert alert-dark bg-dark text-light border-0 mb-0&quot; role=&quot;alert&quot;&gt;
                                                    &lt;strong&gt;Dark - &lt;/strong&gt; A simple dark alert&mdash;check it out!
                                                &lt;/div&gt;
                                            </span>
                                        </pre> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Dismissing Alerts</h4>
                                <p class="text-muted font-14 mb-3">
                                    Add a dismiss button and the <code>.alert-dismissible</code> class, which adds
                                    extra padding to the right of the alert
                                    and positions the <code>.btn-close</code> button.
                                </p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#dismissing-alerts-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#dismissing-alerts-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="dismissing-alerts-preview">
                                        <div class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show"
                                            role="alert">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                            <strong>Primary - </strong> A simple primary alert—check it out!
                                        </div>
                                        <div class="alert alert-secondary alert-dismissible bg-secondary text-light border-0 fade show"
                                            role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            <strong>Secondary - </strong> A simple secondary alert—check it out!
                                        </div>
                                        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                                            role="alert">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                            <strong>Success - </strong> A simple success alert—check it out!
                                        </div>
                                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                                            role="alert">
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                            <strong>Error - </strong> A simple danger alert—check it out!
                                        </div>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            <strong>Warning - </strong> A simple warning alert—check it out!
                                        </div>
                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            <strong>Info - </strong> A simple info alert—check it out!
                                        </div>
                                        <div class="alert alert-light alert-dismissible fade show" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            <strong>Light - </strong> A simple light alert—check it out!
                                        </div>
                                        <div class="alert alert-dark alert-dismissible fade show mb-0" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            <strong>Dark - </strong> A simple dark alert—check it out!
                                        </div>
                                    </div> <!-- end preview-->

                                    <div class="tab-pane" id="dismissing-alerts-code">
                                        <div class="highlight">
                                            <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;div class=&quot;alert alert-primary alert-dismissible bg-primary text-white border-0 fade show&quot; role=&quot;alert&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                        &lt;strong&gt;Primary - &lt;/strong&gt; A simple primary alert&mdash;check it out!
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-secondary alert-dismissible bg-secondary text-light border-0 fade show&quot; role=&quot;alert&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                        &lt;strong&gt;Secondary - &lt;/strong&gt; A simple secondary alert&mdash;check it out!
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-success alert-dismissible bg-success text-white border-0 fade show&quot; role=&quot;alert&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                        &lt;strong&gt;Success - &lt;/strong&gt; A simple success alert&mdash;check it out!
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-danger alert-dismissible bg-danger text-white border-0 fade show&quot; role=&quot;alert&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                        &lt;strong&gt;Error - &lt;/strong&gt; A simple danger alert&mdash;check it out!
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-warning alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                        &lt;strong&gt;Warning - &lt;/strong&gt; A simple warning alert&mdash;check it out!
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-info alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                        &lt;strong&gt;Info - &lt;/strong&gt; A simple info alert&mdash;check it out!
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-light alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                        &lt;strong&gt;Light - &lt;/strong&gt; A simple light alert&mdash;check it out!
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-dark alert-dismissible fade show mb-0&quot; role=&quot;alert&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                        &lt;strong&gt;Dark - &lt;/strong&gt; A simple dark alert&mdash;check it out!
                                                    &lt;/div&gt;
                                                </span>
                                            </pre> <!-- end pre -->
                                        </div> <!-- end highlight-->
                                    </div> <!-- end preview code-->
                                </div> <!-- end tab-content-->

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Custom Alerts</h4>
                                <p class="text-muted font-14 mb-3">
                                    Display alert with transparent background and with contextual text color. Use
                                    classes
                                    <code>.bg-white</code>, and <code>.text-*</code>. E.g. <code>bg-white
                                        text-primary</code>.
                                </p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#custom-alerts-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#custom-alerts-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="custom-alerts-preview">
                                        <div class="alert alert-primary bg-transparent text-primary" role="alert">
                                            This is a <strong>primary</strong> alert—check it out!
                                        </div>
                                        <div class="alert alert-secondary bg-transparent text-secondary" role="alert">
                                            This is a <strong>secondary</strong> alert—check it out!
                                        </div>
                                        <div class="alert alert-success bg-transparent text-success" role="alert">
                                            This is a <strong>success</strong> alert—check it out!
                                        </div>
                                        <div class="alert alert-info bg-transparent text-info" role="alert">
                                            This is a <strong>info</strong> alert—check it out!
                                        </div>
                                        <div class="alert alert-warning bg-transparent text-warning" role="alert">
                                            This is a <strong>warning</strong> alert—check it out!
                                        </div>
                                        <div class="alert alert-danger bg-transparent text-danger" role="alert">
                                            This is a <strong>danger</strong> alert—check it out!
                                        </div>
                                        <div class="alert alert-light bg-transparent text-light" role="alert">
                                            This is a <strong>light</strong> alert—check it out!
                                        </div>
                                        <div class="alert alert-dark bg-transparent text-dark mb-0" role="alert">
                                            This is a <strong>dark</strong> alert—check it out!
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="custom-alerts-code">
                                        <div class="highlight">
                                            <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;div class=&quot;alert alert-primary bg-transparent text-primary&quot; role=&quot;alert&quot;&gt;
                                                        This is a &lt;strong&gt;primary&lt;/strong&gt; alert&mdash;check it out!
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-secondary bg-transparent text-secondary&quot; role=&quot;alert&quot;&gt;
                                                        This is a &lt;strong&gt;secondary&lt;/strong&gt; alert&mdash;check it out!
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-success bg-transparent text-success&quot; role=&quot;alert&quot;&gt;
                                                        This is a &lt;strong&gt;success&lt;/strong&gt; alert&mdash;check it out!
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-info bg-transparent text-info&quot; role=&quot;alert&quot;&gt;
                                                        This is a &lt;strong&gt;info&lt;/strong&gt; alert&mdash;check it out!
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-warning bg-transparent text-warning&quot; role=&quot;alert&quot;&gt;
                                                        This is a &lt;strong&gt;warning&lt;/strong&gt; alert&mdash;check it out!
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-danger bg-transparent text-danger&quot; role=&quot;alert&quot;&gt;
                                                        This is a &lt;strong&gt;danger&lt;/strong&gt; alert&mdash;check it out!
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-light bg-transparent text-light&quot; role=&quot;alert&quot;&gt;
                                                        This is a &lt;strong&gt;light&lt;/strong&gt; alert&mdash;check it out!
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-dark bg-transparent text-dark&quot; role=&quot;alert&quot;&gt;
                                                        This is a &lt;strong&gt;dark&lt;/strong&gt; alert&mdash;check it out!
                                                    &lt;/div&gt;
                                                </span>
                                            </pre> <!-- end pre -->
                                        </div> <!-- end highlight-->
                                    </div>
                                </div> <!-- end tab-content-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Link Color</h4>
                                <p class="text-muted font-14 mb-3">
                                    Use the <code>.alert-link</code> utility class to quickly provide matching
                                    colored links within any alert.
                                </p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#link-color-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#link-color-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="link-color-preview">
                                        <div class="alert alert-primary" role="alert">
                                            A simple primary alert with <a href="#" class="alert-link">an example
                                                link</a>. Give it a click if you like.
                                        </div>
                                        <div class="alert alert-secondary" role="alert">
                                            A simple secondary alert with <a href="#" class="alert-link">an example
                                                link</a>. Give it a click if you like.
                                        </div>
                                        <div class="alert alert-success" role="alert">
                                            A simple success alert with <a href="#" class="alert-link">an example
                                                link</a>. Give it a click if you like.
                                        </div>
                                        <div class="alert alert-danger" role="alert">
                                            A simple danger alert with <a href="#" class="alert-link">an example
                                                link</a>. Give it a click if you like.
                                        </div>
                                        <div class="alert alert-warning" role="alert">
                                            A simple warning alert with <a href="#" class="alert-link">an example
                                                link</a>. Give it a click if you like.
                                        </div>
                                        <div class="alert alert-info" role="alert">
                                            A simple info alert with <a href="#" class="alert-link">an example
                                                link</a>. Give it a click if you like.
                                        </div>
                                        <div class="alert alert-light" role="alert">
                                            A simple light alert with <a href="#" class="alert-link">an example
                                                link</a>. Give it a click if you like.
                                        </div>
                                        <div class="alert alert-dark" role="alert">
                                            A simple dark alert with <a href="#" class="alert-link">an example
                                                link</a>. Give it a click if you like.
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="link-color-code">
                                        <div class="highlight">
                                            <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;
                                                        A simple primary alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt;
                                                        A simple secondary alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
                                                        A simple success alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
                                                        A simple danger alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;
                                                        A simple warning alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;
                                                        A simple info alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-light&quot; role=&quot;alert&quot;&gt;
                                                        A simple light alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-dark&quot; role=&quot;alert&quot;&gt;
                                                        A simple dark alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
                                                    &lt;/div&gt;
                                                </span>
                                            </pre> <!-- end pre -->
                                        </div> <!-- end highlight-->
                                    </div>
                                </div> <!-- end tab-content-->

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Icons with Alerts</h4>
                                <p class="text-muted font-14 mb-3">
                                    You can also include additional elements like icons, heading, etc along side the actual message.
                                </p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#icon-alerts-preview" data-bs-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#icon-alerts-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="icon-alerts-preview">
                                        <div class="alert alert-success" role="alert">
                                            <i class="ri-check-line me-2"></i> This is a
                                            <strong>success</strong> alert - check it out!
                                        </div>
                                        <div class="alert alert-danger" role="alert">
                                            <i class="ri-close-circle-line me-2"></i> This is a <strong>danger</strong>
                                            alert - check it out!
                                        </div>
                                        <div class="alert alert-warning" role="alert">
                                            <i class="ri-alert-line me-2"></i> This is a
                                            <strong>warning</strong> alert - check it out!
                                        </div>
                                        <div class="alert alert-info mb-0" role="alert">
                                            <i class="ri-information-line me-2"></i> This is a
                                            <strong>info</strong> alert - check it out!
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="icon-alerts-code">
                                        <div class="highlight">
                                            <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
                                                        &lt;i class=&quot;ri-check-line me-2&quot;&gt;&lt;/i&gt; This is a &lt;strong&gt;success&lt;/strong&gt; alert - check it out!
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
                                                        &lt;i class=&quot;ri-close-circle-line me-2&quot;&gt;&lt;/i&gt; This is a &lt;strong&gt;danger&lt;/strong&gt; alert - check it out!
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;
                                                        &lt;i class=&quot;ri-alert-line me-2&quot;&gt;&lt;/i&gt; This is a &lt;strong&gt;warning&lt;/strong&gt; alert - check it out!
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;
                                                        &lt;i class=&quot;ri-information-line me-2&quot;&gt;&lt;/i&gt; This is a &lt;strong&gt;info&lt;/strong&gt; alert - check it out!
                                                    &lt;/div&gt;
                                                </span>
                                            </pre> <!-- end pre -->
                                        </div> <!-- end highlight-->
                                    </div>
                                </div> <!-- end tab-content-->

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Additional content</h4>
                                <p class="text-muted font-14 mb-3">
                                    Alerts can also contain additional HTML elements like headings, paragraphs and
                                    dividers.
                                </p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#additional-content-preview" data-bs-toggle="tab"
                                            aria-expanded="false" class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#additional-content-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="additional-content-preview">
                                        <div class="alert alert-success mb-0" role="alert">
                                            <h4 class="alert-heading">Well done!</h4>
                                            <p>Aww yeah, you successfully read this important alert message. This
                                                example text is going to run a bit longer so that you can see how
                                                spacing within an alert works with this kind of content.</p>
                                            <hr>
                                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to
                                                keep things nice and tidy.</p>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="additional-content-code">
                                        <div class="highlight">
                                            <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
                                                        &lt;h4 class=&quot;alert-heading&quot;&gt;Well done!&lt;/h4&gt;
                                                        &lt;p&gt;Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.&lt;/p&gt;
                                                        &lt;hr&gt;
                                                        &lt;p class=&quot;mb-0&quot;&gt;Whenever you need to, be sure to use margin utilities to keep things nice and tidy.&lt;/p&gt;
                                                    &lt;/div&gt;
                                                </span>
                                            </pre> <!-- end pre -->
                                        </div> <!-- end highlight-->
                                    </div>
                                </div> <!-- end tab-content-->

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Live Alert</h4>
                                <p class="text-muted font-14 mb-3">Click the button below to show an alert (hidden with inline styles to start), then dismiss (and destroy) it with the built-in close button.</p>

                                <ul class="nav nav-tabs nav-bordered mb-3">
                                    <li class="nav-item">
                                        <a href="#live-alert-preview" data-bs-toggle="tab"
                                            aria-expanded="false" class="nav-link active">
                                            Preview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#live-alert-code" data-bs-toggle="tab" aria-expanded="true"
                                            class="nav-link">
                                            Code
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="live-alert-preview">
                                        <div id="liveAlertPlaceholder"></div>
                                        <button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button>
                                    </div>

                                    <div class="tab-pane" id="live-alert-code">
                                        <div class="highlight">
                                            <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;div id=&quot;liveAlertPlaceholder&quot;&gt;&lt;/div&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; id=&quot;liveAlertBtn&quot;&gt;Show live alert&lt;/button&gt;
                                                </span>
                                            </pre> <!-- end pre -->
                                        </div> <!-- end highlight-->
                                    </div>
                                </div> <!-- end tab-content-->
                            </div>
                        </div>
                    </div>
                </div> <!-- end row-->

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

    <!-- Code Highlight js -->
    <script src="assets/vendor/highlightjs/highlight.pack.min.js"></script>
    <script src="assets/js/hyper-syntax.js"></script>

</x-theme>
