@extends('layouts.admin.index')
@section('content')
    <main class="main">
        <!-- Page Title -->
        <p>👋 Hello!</p>
        <h4 class="my-2">Welcome <span class="primary-color">Admin Name</span></h4>
        <h1 class="page-title my-3">User Overview</h1>


        <!-- Content -->
        <section class="section mt-5" id="dashboard-section">

            <div class="row justify-content-between ">
                <!-- Total Count Card -->
                <div class="col-lg-7 col-12">

                    <div class="row">

                        <div class="col-lg-4 col-12 mb-3">

                            <div class="card">

                                <div class="d-flex justify-content-between ">
                                    <div>
                                        <h2 class="">0</h2>
                                        <span class="">Total Category</span>
                                    </div>

                                    <div class="count-icon-box position-relative">
                                    <span class="iconify position-center" data-icon="ic:outline-category"
                                          style="color: #da0f0f;" data-width="30" data-height="30"></span>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="card">
                                <div class="d-flex justify-content-between ">
                                    <div>
                                        <h2 class="">0</h2>
                                        <span class="">Total Video</span>
                                    </div>
                                    <div class="count-icon-box position-relative">
                                    <span class="iconify position-center"
                                          data-icon="fluent:video-clip-multiple-20-filled"
                                          style="color: #da0f0f;" data-width="30" data-height="30"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="card">
                                <div class="d-flex justify-content-between ">
                                    <div>
                                        <h2 class="">0</h2>
                                        <span class="">Total User</span>
                                    </div>
                                    <div class="count-icon-box position-relative">
                                    <span class="iconify position-center" data-icon="ph:users-four"
                                          style="color: #da0f0f;"
                                          data-width="30" data-height="30"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="card">
                                <div class="d-flex justify-content-between ">
                                    <div>
                                        <h2 class="">0</h2>
                                        <span class="">Total View</span>
                                    </div>
                                    <div class="count-icon-box position-relative">
                                    <span class="iconify position-center" data-icon="akar-icons:eye-open"
                                          style="color: #da0f0f;" data-width="30" data-height="30"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Visitor Count Statics-->
                    <img src="asset/image/analytics.png" class="img-fluid" alt="">
                </div>

                <!-- Day, Week, Month Total Count Card -->
                <div class="col-lg-4 col-12">

                    <!-- Count Card -->
                    <div class="row mt-3">
                        <div class="col-lg-8 col-8">

                            <ul class="nav nav-tabs" id="last-tab-btn" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="last-day-btn" data-bs-toggle="tab"
                                            data-bs-target="#last-day-content" type="button" role="tab"
                                            aria-controls="last-day-content" aria-selected="true">Last Day
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="week-tab-btn" data-bs-toggle="tab"
                                            data-bs-target="#last-week-content" type="button" role="tab"
                                            aria-controls="last-week-content" aria-selected="false">Last Week
                                    </button>
                                </li>
                            </ul>

                        </div>
                        <div class="col-lg-4 col-4" id="count-date-box">
                            <i class="bi bi-caret-down-fill"></i>
                            <input type="text" id="count-date"  placeholder="Select Date">
                        </div>
                    </div>

                    <div class="tab-content" id="last-tab-content">
                        <div class="tab-pane fade show active" id="last-day-content" role="tabpanel">
                            <div class="row">

                                <div class="col-lg-4 col-4">
                                    <div class="count-box">
                                        <h2 class="count-number">0</h2>
                                        <span class="count-title">Total View</span>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-4">
                                    <div class="count-box count-subscribe">
                                        <h2 class="count-number ">0</h2>
                                        <span class="count-title">Subscribed</span>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-4">
                                    <div class="count-box count-unsubscribe">
                                        <h2 class="count-number ">0</h2>
                                        <span class="count-title">Unsubscribed</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="last-week-content" role="tabpanel">
                            <div class="row">

                                <div class="col-lg-4 col-4">
                                    <div class="count-box">
                                        <h2 class="count-number">0</h2>
                                        <span class="count-title">Total View</span>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-4">
                                    <div class="count-box count-subscribe">
                                        <h2 class="count-number ">0</h2>
                                        <span class="count-title">Subscribed</span>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-4">
                                    <div class="count-box count-unsubscribe">
                                        <h2 class="count-number ">0</h2>
                                        <span class="count-title">Unsubscribed</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Top Category Card -->
                    <div class="dashboard-category mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Top Category</h3>

                                <div class="row">
                                    <div class="col-lg-4 mb-3">

                                        <div class="category-count d-flex">
                                            <img src="asset/image/category.png" class="count-img" alt="">

                                            <div class="">
                                                <span class="title">Action</span>

                                                <div class="number">
                                                <span class="iconify" data-icon="bx:bxs-up-arrow"
                                                      style="color: #008640;" data-width="10" data-height="10"></span>
                                                    +19.01%
                                                </div>

                                            </div>

                                        </div>
                                    </div>


                                    <div class="col-lg-4 mb-3">

                                        <div class="category-count d-flex">
                                            <img src="asset/image/category.png" class="count-img" alt="">

                                            <div class="">
                                                <span class="title">Action</span>
                                                <span class="number">
                                                <span class="iconify" data-icon="bx:bxs-up-arrow"
                                                      style="color: #008640;" data-width="10" data-height="10"></span>+19.01%
                                            </span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 mb-3">

                                        <div class="category-count d-flex">
                                            <img src="asset/image/category.png" class="count-img" alt="">

                                            <div class="">
                                                <span class="title">Action</span>
                                                <span class="number">
                                                <span class="iconify" data-icon="bx:bxs-up-arrow"
                                                      style="color: #008640;" data-width="10" data-height="10"></span>+19.01%
                                            </span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 mb-3">

                                        <div class="category-count d-flex">
                                            <img src="asset/image/category.png" class="count-img" alt="">

                                            <div class="">
                                                <span class="title">Action</span>
                                                <span class="number">
                                                <span class="iconify" data-icon="bx:bxs-up-arrow"
                                                      style="color: #008640;" data-width="10" data-height="10"></span>+19.01%
                                            </span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 mb-3">

                                        <div class="category-count d-flex">
                                            <img src="asset/image/category.png" class="count-img" alt="">

                                            <div class="">
                                                <span class="title">Action</span>
                                                <span class="number">
                                                <span class="iconify" data-icon="bx:bxs-up-arrow"
                                                      style="color: #008640;" data-width="10" data-height="10"></span>+19.01%
                                            </span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-4 mb-3">

                                        <div class="category-count d-flex">
                                            <img src="asset/image/category.png" class="count-img" alt="">

                                            <div class="">
                                                <span class="title">Action</span>
                                                <span class="number">
                                                <span class="iconify" data-icon="bx:bxs-up-arrow"
                                                      style="color: #008640;" data-width="10" data-height="10"></span>+19.01%
                                            </span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
@push('custom-js')
    <script>
        const toDate = MCDatepicker.create({
            el: '#count-date',
            bodyType: 'modal',
            dateFormat: 'MMM-YYYY',
            // showCalendarDisplay: false,
            selectedDate: new Date()
        })


    </script>
@endpush
