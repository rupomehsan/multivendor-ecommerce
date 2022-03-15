@extends('layouts.admin.index')
@section('content')
    <main id="category-list-content">

        <div class="row row-cols-lg-1">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Category</h6>

                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <form>
                                <input type="search" class="form-control" placeholder="Search Category">
                            </form>
                        </div>

                        <div class="col-lg-2 col-sm-6 col-12">
                            <button class="btn btn-base btn-base-primary form-control">Add category</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
