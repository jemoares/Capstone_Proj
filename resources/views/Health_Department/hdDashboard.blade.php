@include('components.header');

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            @include('components.sidebar.hd_sidebar')

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('components.navbar.navbar')
                <!-- Navbar End-->


                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    @if (session('success'))
                        @include('components.notification')
                    @endif

                    <div class="container-fluid  flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-8 mb-4 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-7">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary">Welcome to Health Department
                                                    Dashboard
                                                    {{ $user->firstname }} 🎉
                                                </h5>
                                                <p class="mb-4">
                                                    You have done <span class="fw-bold"></span> Lorem ipsum dolor, sit
                                                    amet consectetur adipisicing elit.
                                                </p>

                                                <!-- <a href="javascript:;" class="btn btn-sm btn-outline-primary"></a> -->
                                            </div>
                                        </div>
                                        <div class="col-sm-5 text-center text-sm-left">
                                            <div class="card-body pb-0 px-0 px-md-4">
                                                <img src="../assets/img/illustrations/man-with-laptop-light.png"
                                                    height="140" alt="View Badge User"
                                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 order-1">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../assets/img/icons/unicons/chart-success.png"
                                                            alt="chart success" class="rounded" />
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn p-0" type="button" id="cardOpt3"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="cardOpt3">
                                                            <a class="dropdown-item" href="javascript:void(0);">View
                                                                More</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="fw-semibold d-block mb-1">Title</span>
                                                <h3 class="card-title mb-2">Title</h3>
                                                <small class="text-success fw-semibold"><i
                                                        class="bx bx-up-arrow-alt"></i> Title</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../assets/img/icons/unicons/wallet-info.png"
                                                            alt="Credit Card" class="rounded" />
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn p-0" type="button" id="cardOpt6"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="cardOpt6">
                                                            <a class="dropdown-item" href="javascript:void(0);">View
                                                                More</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span>Title</span>
                                                <h3 class="card-title text-nowrap mb-1">Title</h3>
                                                <small class="text-success fw-semibold"><i
                                                        class="bx bx-up-arrow-alt"></i> Title</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Total Revenue -->
                            <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                                <div class="card">
                                    <div class="row row-bordered g-0">
                                        <div class="col-md-8">
                                            <h5 class="card-header m-0 me-2 pb-3">Title</h5>
                                            <div id="totalRevenueChart" class="px-2">Title</div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-outline-primary dropdown-toggle"
                                                            type="button" id="growthReportId"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            2022
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="growthReportId">
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">2021</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">2020</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">2019</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="growthChart"></div>
                                            <div class="text-center fw-semibold pt-3 mb-2">Title</div>

                                            <div
                                                class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                                                <div class="d-flex">
                                                    <div class="me-2">
                                                        <span class="badge bg-label-primary p-2"><i
                                                                class="bx bx-dollar text-primary"></i></span>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <small>2022</small>
                                                        <h6 class="mb-0">Title</h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="me-2">
                                                        <span class="badge bg-label-info p-2"><i
                                                                class="bx bx-wallet text-info"></i></span>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <small>2021</small>
                                                        <h6 class="mb-0">Title</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Total Revenue -->
                            <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                                <div class="row">
                                    <div class="col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../assets/img/icons/unicons/paypal.png"
                                                            alt="Credit Card" class="rounded" />
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn p-0" type="button" id="cardOpt4"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="cardOpt4">
                                                            <a class="dropdown-item" href="javascript:void(0);">View
                                                                More</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="d-block mb-1">Title</span>
                                                <h3 class="card-title text-nowrap mb-2">Title</h3>
                                                <small class="text-danger fw-semibold"><i
                                                        class="bx bx-down-arrow-alt"></i> Title</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="card-title d-flex align-items-start justify-content-between">
                                                    <div class="avatar flex-shrink-0">
                                                        <img src="../assets/img/icons/unicons/cc-primary.png"
                                                            alt="Credit Card" class="rounded" />
                                                    </div>
                                                    <div class="dropdown">
                                                        <button class="btn p-0" type="button" id="cardOpt1"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                                            <a class="dropdown-item" href="javascript:void(0);">View
                                                                More</a>
                                                            <a class="dropdown-item"
                                                                href="javascript:void(0);">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="fw-semibold d-block mb-1">Title</span>
                                                <h3 class="card-title mb-2">Title</h3>
                                                <small class="text-success fw-semibold"><i
                                                        class="bx bx-up-arrow-alt"></i> Title</small>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- </div>
    <div class="row"> -->
                                    <div class="col-12 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                                    <div
                                                        class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                                        <div class="card-title">
                                                            <h5 class="text-nowrap mb-2">Title</h5>
                                                            <span class="badge bg-label-warning rounded-pill">Year
                                                                2021</span>
                                                        </div>
                                                        <div class="mt-sm-auto">
                                                            <small class="text-success text-nowrap fw-semibold"><i
                                                                    class="bx bx-chevron-up"></i> Title</small>
                                                            <h3 class="mb-0">Title</h3>
                                                        </div>
                                                    </div>
                                                    <div id="profileReportChart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Order Statistics -->
                            <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                                        <div class="card-title mb-0">
                                            <h5 class="m-0 me-2">Titles</h5>
                                            <small class="text-muted">Title</small>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="orederStatistics"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="orederStatistics">
                                                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div class="d-flex flex-column align-items-center gap-1">
                                                <h2 class="mb-2">Title</h2>
                                                <span>Total Orders</span>
                                            </div>
                                            <div id="orderStatisticsChart"></div>
                                        </div>
                                        <ul class="p-0 m-0">
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-primary"><i
                                                            class="bx bx-mobile-alt"></i></span>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Title</h6>
                                                        <small class="text-muted">Title</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <small class="fw-semibold">Title</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-success"><i
                                                            class="bx bx-closet"></i></span>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Title</h6>
                                                        <small class="text-muted">Title</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <small class="fw-semibold">Title</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-info"><i
                                                            class="bx bx-home-alt"></i></span>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Title</h6>
                                                        <small class="text-muted">Title</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <small class="fw-semibold">Title</small>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="d-flex">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-secondary"><i
                                                            class="bx bx-football"></i></span>
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Title</h6>
                                                        <small class="text-muted">Title</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <small class="fw-semibold">Title</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/ Order Statistics -->

                            <!-- Expense Overview -->
                            <div class="col-md-6 col-lg-4 order-1 mb-4">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <ul class="nav nav-pills" role="tablist">
                                            <li class="nav-item">
                                                <button type="button" class="nav-link active" role="tab"
                                                    data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-income"
                                                    aria-controls="navs-tabs-line-card-income" aria-selected="true">
                                                    Title
                                                </button>
                                            </li>
                                            <li class="nav-item">
                                                <button type="button" class="nav-link" role="tab">Title</button>
                                            </li>
                                            <li class="nav-item">
                                                <button type="button" class="nav-link" role="tab">Title</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body px-0">
                                        <div class="tab-content p-0">
                                            <div class="tab-pane fade show active" id="navs-tabs-line-card-income"
                                                role="tabpanel">
                                                <div class="d-flex p-4 pt-3">
                                                    <div class="avatar flex-shrink-0 me-3">
                                                        <img src="../assets/img/icons/unicons/wallet.png"
                                                            alt="User" />
                                                    </div>
                                                    <div>
                                                        <small class="text-muted d-block">Title</small>
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="mb-0 me-1">Title</h6>
                                                            <small class="text-success fw-semibold">
                                                                <i class="bx bx-chevron-up"></i>
                                                                Title
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="incomeChart"></div>
                                                <div class="d-flex justify-content-center pt-4 gap-2">
                                                    <div class="flex-shrink-0">
                                                        <div id="expensesOfWeek"></div>
                                                    </div>
                                                    <div>
                                                        <p class="mb-n1 mt-1">Title</p>
                                                        <small class="text-muted">Title</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Expense Overview -->

                            <!-- Transactions -->
                            <div class="col-md-6 col-lg-4 order-2 mb-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="card-title m-0 me-2">Title</h5>
                                        <div class="dropdown">
                                            <button class="btn p-0" type="button" id="transactionID"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="transactionID">
                                                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="p-0 m-0">
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="../assets/img/icons/unicons/paypal.png" alt="User"
                                                        class="rounded" />
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <small class="text-muted d-block mb-1">Title</small>
                                                        <h6 class="mb-0">Title</h6>
                                                    </div>
                                                    <div class="user-progress d-flex align-items-center gap-1">
                                                        <h6 class="mb-0">Title</h6>
                                                        <span class="text-muted">Title</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="../assets/img/icons/unicons/wallet.png" alt="User"
                                                        class="rounded" />
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <small class="text-muted d-block mb-1">Title</small>
                                                        <h6 class="mb-0">Title</h6>
                                                    </div>
                                                    <div class="user-progress d-flex align-items-center gap-1">
                                                        <h6 class="mb-0">Title</h6>
                                                        <span class="text-muted">Title</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="../assets/img/icons/unicons/chart.png" alt="User"
                                                        class="rounded" />
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <small class="text-muted d-block mb-1">Title</small>
                                                        <h6 class="mb-0">Title</h6>
                                                    </div>
                                                    <div class="user-progress d-flex align-items-center gap-1">
                                                        <h6 class="mb-0">Title</h6>
                                                        <span class="text-muted">Title</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="../assets/img/icons/unicons/cc-success.png"
                                                        alt="User" class="rounded" />
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <small class="text-muted d-block mb-1">Title</small>
                                                        <h6 class="mb-0">Title</h6>
                                                    </div>
                                                    <div class="user-progress d-flex align-items-center gap-1">
                                                        <h6 class="mb-0">Title</h6>
                                                        <span class="text-muted">Title</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="../assets/img/icons/unicons/wallet.png" alt="User"
                                                        class="rounded" />
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <small class="text-muted d-block mb-1">Title</small>
                                                        <h6 class="mb-0">Title</h6>
                                                    </div>
                                                    <div class="user-progress d-flex align-items-center gap-1">
                                                        <h6 class="mb-0">Title</h6>
                                                        <span class="text-muted">Title</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <img src="../assets/img/icons/unicons/cc-warning.png"
                                                        alt="User" class="rounded" />
                                                </div>
                                                <div
                                                    class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <small class="text-muted d-block mb-1">Title</small>
                                                        <h6 class="mb-0">Title</h6>
                                                    </div>
                                                    <div class="user-progress d-flex align-items-center gap-1">
                                                        <h6 class="mb-0">Title</h6>
                                                        <span class="text-muted">Title</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/ Transactions -->
                        </div>
                    </div>
                    <!--footer-->

                    @include('components.footer');