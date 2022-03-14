@extends('layouts.admin.index')
@section('content')
    <!-- ===== Dashboard ===== -->
    <main class="main">
        <section class="section" id="category-section">

            <div class="row align-items-center page-tab">

                <!-- Search Form -->
                <div class="col-lg-4 col-12 order-lg-1 text-end">
                    <span class="iconify d-lg-none" id="search-icon" data-icon="codicon:search" data-width="20"
                          data-height="20"></span>

                    <form action="" id="search-form " class="search-form" name="search-form" novalidate>
                        <span class="iconify search-form-icon" id="search-icon" data-icon="codicon:search"
                              data-width="20" data-height="20"></span>

                        <input type="search" id="search-form-input" name="search" class="search-form-input"
                               placeholder="Search..">
                    </form>
                </div>

                <!-- Page Change Button -->
                <div class="col-lg-8 col-10 order-lg-0">
                    <a href="index.php" class="page-tab-btn">Category</a>
                    <a href="sub-category.php" class="page-inactive">Sub Category</a>
                    <a href="channel-category.php" class="page-inactive">TV Channel Category</a>
                </div>

                <!-- Add Button -->
                <div class="col-lg-6 col-2 my-lg-5 order-lg-2">
                    <i class="bi bi-plus-circle-fill d-lg-none" data-bs-toggle="modal"
                       data-bs-target="#category-modal"></i>

                    <button data-bs-toggle="modal" data-bs-target="#category-modal"
                            class="btn btn-primary modal-btn">
                        <i class="bi bi-plus-circle-fill me-2"></i>
                        Add Category
                    </button>
                </div>
            </div>


            <!-- Add Category Modal -->
            <form action="" id='form' name="form" novalidate>
                <div class="modal fade" id="category-modal" tabindex="-1">

                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <h5 class="modal-title page-title" id="modal-title">Add Category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <!-- Category Name -->
                                <div class="text-outline">
                                    <input placeholder=" " id="category_name" name="category_name" class="form-control"
                                           type="text">
                                    <label for="category_name">Category Name <span
                                            class="primary-color">*</span></label>
                                </div>
                                <div class="text-danger" id="category_name_error"></div>


                                <!--  Category Image -->
                                <div class="drop-image mt-4" id="drop-image">
                                    <label for="image" class="drop-image-label" id="image_label">
                                        <i class="bi bi-image mx-4"></i>
                                        Upload Category Image Or Drag Here
                                        <span class="primary-color">*</span>
                                    </label>
                                    <input id="image" name="image" class="drop-image-filed" type="file"
                                           onchange="loadFile(event)">
                                </div>


                                <!-- Category Image Preview -->
                                <div class="drop-img-preview mt-3 d-none" id="drop-img-preview">
                                    <img src="" class="image-preview" id="image-preview" alt="">
                                    <span onclick="removeImgPreview(event)" class="iconify close"
                                          data-icon="mdi:close-circle-outline" color="white"
                                          data-width="20" data-height="20"></span>
                                </div>

                            </div>

                            <div class="modal-footer justify-content-start border-0">
                                <button type="submit" class="btn btn-primary radius px-4 py-2">Save</button>
                                <button type="button" class="btn btn-outline-secondary radius px-4 py-2"
                                        data-bs-dismiss="modal">Cancel
                                </button>
                            </div>
                        </div>

                    </div>

                </div>
            </form>


            <!-- Show Category -->
            <div class="row " id="category_list">

                <div class="col-lg-3 col-12 mb-3">

                    <h4 class="list-title">Hollywood</h4>

                    <div class="card border-0 radius">
                        <div class="card-body">
                            <img src="../asset/image/category.png" class="card-img-top radius" alt="">

                            <div class="card-img-overlay">

                                <i class="bi bi-three-dots-vertical menu-icon" role="button"
                                   id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </i>


                                <ul class="dropdown-menu dots-card" id="dropdown-action-card1"
                                    aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#category-modal"
                                           href="#">Edit</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" onclick="deleteHandler();" href="#">Delete</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#view-modal">View</a>

                                    </li>

                                </ul>
                            </div>

                            <div class="modal fade" id="view-modal" tabindex="-1">

                                <div class="modal-dialog">

                                    <div class="modal-content">
                                        <div class="modal-header border-bottom-0">
                                            <h5 class="modal-title page-title">View</h5>
                                            <button class="btn primary-color" data-bs-toggle="modal" data-bs-target="#category-modal">
                                                <i class="bi bi-pencil-square"></i>
                                                edit
                                            </button>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">

                                            <p>
                                                Category: <span>Category Name</span>
                                            </p>

                                            <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                                                 class="img-fluid" width="200" height="200" alt="">

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="list-info">
                                <span class="count">52</span>
                                <span class="title">Total Videos In This Category</span>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </section>
    </main>
    <!-- ===== End Dashboard ===== -->
@endsection
