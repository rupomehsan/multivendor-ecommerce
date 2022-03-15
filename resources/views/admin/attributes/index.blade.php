@extends('layouts.admin.index')
@section('content')
    <main id="category-list-content">
        <div class="row">
            <div class="col-lg-10 col-sm-12 col-12 offset-lg-1">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title text-capitalize ">Filter ATTRIBUTES</h6>

                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-4 col-sm-6 col-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <button class="btn btn-secondary" type="button" >
                                        <span class="iconify" data-icon="carbon:search" data-width="20"
                                              data-height="20"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6 col-12">
                                <button class="btn btn-base btn-base-primary form-control" data-bs-toggle="modal" data-bs-target="#attributesModal">Add attribute</button>
                            </div>
                        </div>


                        <table class="table table-striped" id="order-table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Attribute Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Price</td>
                                <td>Active</td>
                                <td>
                                    <button class="btn" data-bs-toggle="modal" data-bs-target="#attributesModal">
                                        <span class="iconify" data-icon="bxs:edit" data-width="20"
                                              data-height="20"></span>
                                    </button>

                                    <button class="btn">
                                        <span class="iconify" data-icon="ant-design:delete-filled" data-width="20"
                                              data-height="20"></span>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <!-- Attributes Modal -->
                        <div class="modal fade" id="attributesModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title">ADD ATTRIBUTE</h5>
                                    </div>
                                    <div class="modal-body">
                                        <!-- ATTRIBUTES NAME -->
                                        <div class="mb-3">
                                            <label for="name" id="name_label" class="form-label">Attribute Name</label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name">
                                            <span class="text-danger" id="name_error">Error MSG</span>
                                        </div>
                                    </div>
                                    <div class="modal-footer border-0 justify-content-start">
                                        <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-base-primary px-3">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
