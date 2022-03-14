@extends('layouts.admin.index')
@section('content')
    <main id="dashboard-content">
        <h6>👋  Hello!</h6>
        <h4>Welcome <span class="text-base-color"> Onboard</span></h4>

        <h2 class="title-underline font-size-sm-2 position-relative my-4">User Overview</h2>

        <!-- ===== Total Count ===== -->
        <div class="row">
            <div class="col-lg-2 col-sm-4 col-12 my-3">
                <div class="card border-0 p-3 linear-red-bg">
                    <div class="d-flex align-items-center justify-content-between text-white">
                        <div>
                            <h3>1,111</h3>
                            <span>Total Users</span>
                        </div>
                        <span class="iconify" data-icon="ph:users-four" data-width="40" data-height="40"></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-12 my-3">
                <div class="card border-0 p-3 linear-orange-bg">
                    <div class="d-flex align-items-center justify-content-between text-white">
                        <div>
                            <h3>1,111</h3>
                            <span>Total Users</span>
                        </div>
                        <span class="iconify" data-icon="ph:users-four" data-width="40" data-height="40"></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-12 my-3">
                <div class="card border-0 p-3 linear-red-bg">
                    <div class="d-flex align-items-center justify-content-between text-white">
                        <div>
                            <h3>1,111</h3>
                            <span>Total Users</span>
                        </div>
                        <span class="iconify" data-icon="ph:users-four" data-width="40" data-height="40"></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-12 my-3">
                <div class="card border-0 p-3 linear-red-bg">
                    <div class="d-flex align-items-center justify-content-between text-white">
                        <div>
                            <h3>1,111</h3>
                            <span>Total Users</span>
                        </div>
                        <span class="iconify" data-icon="ph:users-four" data-width="40" data-height="40"></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-12 my-3">
                <div class="card border-0 p-3 linear-red-bg">
                    <div class="d-flex align-items-center justify-content-between text-white">
                        <div>
                            <h3>1,111</h3>
                            <span>Total Users</span>
                        </div>
                        <span class="iconify" data-icon="ph:users-four" data-width="40" data-height="40"></span>
                    </div>
                </div>
            </div>


            <div class="col-lg-2 col-sm-4 col-12 my-3">
                <div class="card border-0 p-3 linear-red-bg">
                    <div class="d-flex align-items-center justify-content-between text-white">
                        <div>
                            <h3>1,111</h3>
                            <span>Total Users</span>
                        </div>
                        <span class="iconify" data-icon="ph:users-four" data-width="40" data-height="40"></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-sm-4 col-12 my-3">
                <div class="card border-0 p-3 linear-red-bg">
                    <div class="d-flex align-items-center justify-content-between text-white">
                        <div>
                            <h3>1,111</h3>
                            <span>Total Users</span>
                        </div>
                        <span class="iconify" data-icon="ph:users-four" data-width="40" data-height="40"></span>
                    </div>
                </div>
            </div>

        </div>

        <!-- ===== Order Table ===== -->
        <div class="card p-4 border-0 rounded-sm">

           <h5>New orders</h5>

            <table class="table table-striped" id="order-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Vendors</th>
                        <th scope="col">order number</th>
                        <th scope="col">number of products</th>
                        <th scope="col">Customer</th>
                        <th scope="col">order Total</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Fashion Nova</td>
                        <td>GUXKVK3XW6</td>
                        <td>1</td>
                        <td>Fashion Nova</td>
                        <td>2,000.00</td>
                        <td>
                            bt
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>

@endsection

@push('custom-js')
    <script>
        $(document).ready(function() {
            $('#order-table').DataTable();
        } );
    </script>
@endpush
