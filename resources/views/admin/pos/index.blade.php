@extends('layouts.admin.index')
@section('content')
    <main id="pos-content">
        <h4 class="text-capitalize">pos system</h4>

        <div class="row">
            <div class="col-lg-8 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-4 col-sm-6 col-12 my-3">
                                <form class="search-form">
                                    <input class="search-field" type="text" placeholder="Search">
                                    <span class="iconify search-icon" data-icon="carbon:search" data-width="25"
                                          data-height="25"></span>
                                </form>
                            </div>

                            <div class="col-lg-4 col-sm-6 col-12 my-3">
                                <div class="row row-cols-2 align-items-center">
                                    <div class="col">
                                        <select class="form-select">
                                            <option selected>All Category</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                        </select>
                                    </div>

                                    <div class="col">
                                        <button class="btn btn-base">See all orders</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-12 my-3">

                                <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-12 pos-cards my-3">
                                        <div class="card bg-light-ash rounded-1 pos-card-item">
                                            <div class="card-body">
                                                <img class="pos-item-img" src="{{asset('assets/image/pos-item.png')}}" alt="pos-item-img">

                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <h5>Sneakers</h5>
                                                        <span>Shoes</span>
                                                        <hr/>
                                                        <span>$14.99</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-12 pos-cards my-3">
                                        <div class="card bg-light-ash rounded-1 pos-card-item">
                                            <div class="card-body">
                                                <img class="pos-item-img" src="{{asset('assets/image/pos-item.png')}}" alt="pos-item-img">

                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <h5>Sneakers</h5>
                                                        <span>Shoes</span>
                                                        <hr/>
                                                        <span>$14.99</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-12 pos-cards my-3">
                                        <div class="card bg-light-ash rounded-1 pos-card-item">
                                            <div class="card-body">
                                                <img class="pos-item-img" src="{{asset('assets/image/pos-item.png')}}" alt="pos-item-img">

                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <h5>Sneakers</h5>
                                                        <span>Shoes</span>
                                                        <hr/>
                                                        <span>$14.99</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-12 pos-cards my-3">
                                        <div class="card bg-light-ash rounded-1 pos-card-item">
                                            <div class="card-body">
                                                <img class="pos-item-img" src="{{asset('assets/image/pos-item.png')}}" alt="pos-item-img">

                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <h5>Sneakers</h5>
                                                        <span>Shoes</span>
                                                        <hr/>
                                                        <span>$14.99</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-12 pos-cards my-3">
                                        <div class="card bg-light-ash rounded-1 pos-card-item">
                                            <div class="card-body">
                                                <img class="pos-item-img" src="{{asset('assets/image/pos-item.png')}}" alt="pos-item-img">

                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <h5>Sneakers</h5>
                                                        <span>Shoes</span>
                                                        <hr/>
                                                        <span>$14.99</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-12 pos-cards my-3">
                                        <div class="card bg-light-ash rounded-1 pos-card-item">
                                            <div class="card-body">
                                                <img class="pos-item-img" src="{{asset('assets/image/pos-item.png')}}" alt="pos-item-img">

                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <h5>Sneakers</h5>
                                                        <span>Shoes</span>
                                                        <hr/>
                                                        <span>$14.99</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-12 pos-cards my-3">
                                        <div class="card bg-light-ash rounded-1 pos-card-item">
                                            <div class="card-body">
                                                <img class="pos-item-img" src="{{asset('assets/image/pos-item.png')}}" alt="pos-item-img">

                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <h5>Sneakers</h5>
                                                        <span>Shoes</span>
                                                        <hr/>
                                                        <span>$14.99</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6 col-12 pos-cards my-3">
                                        <div class="card bg-light-ash rounded-1 pos-card-item">
                                            <div class="card-body">
                                                <img class="pos-item-img" src="{{asset('assets/image/pos-item.png')}}" alt="pos-item-img">

                                                <div class="card">
                                                    <div class="card-body text-center">
                                                        <h5>Sneakers</h5>
                                                        <span>Shoes</span>
                                                        <hr/>
                                                        <span>$14.99</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <nav>
                                    <ul class="pagination">

                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>

                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </main>

@endsection
