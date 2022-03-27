@extends('layout.layout')

@section('body')
    <div class="container mt-3">

        <h1 class="display-3">Welcome User!</h1>
        <h3 class="display-6 mb-3">what you want to do today?</h3>

        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Schedule</button>

        <div class="mt-3 d-flex">
            <div style="width: 20rem">
        <input type="search" class="form-control" name="search" id="search" placeholder="Search Schedule" autofocus>
            </div>
        <button class="btn btn-outline-primary ms-1">Search</button>
        </div>

    </div>

    <div class="container-fluid d-flex justify-content-center ">

        <div class="container m-3 bg-secondary w-100 d-flex justify-content-center" style="height: auto">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 d-block">
                    <div class="card m-3" style="width: 17rem">
                        <div class="card-body">
                            <h4 class="card-title pb-3">Meeting</h4>
                            <h5 class="card-subtitle pb-2">Jakarta</h5>
                            <h6 class="card-subtitle pb-2">12.00 PM</h6>
                            <p class="card-text">meeting bahas sesuatu</p>
                            <div class="d-flex justify-content-end">
                               
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                    <button class="btn btn-danger ms-1">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 d-block">
                    <div class="card m-3" style="width: 17rem">
                        <div class="card-body">
                            <h4 class="card-title pb-3">Meeting</h4>
                            <h5 class="card-subtitle pb-2">Jakarta</h5>
                            <h6 class="card-subtitle pb-2">12.00 PM</h6>
                            <p class="card-text">meeting bahas sesuatu</p>
                            <div class="d-flex justify-content-end">
                               
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                    <button class="btn btn-danger ms-1">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 d-block">
                    <div class="card m-3" style="width: 17rem">
                        <div class="card-body">
                            <h4 class="card-title pb-3">Meeting</h4>
                            <h5 class="card-subtitle pb-2">Jakarta</h5>
                            <h6 class="card-subtitle pb-2">12.00 PM</h6>
                            <p class="card-text">meeting bahas sesuatu</p>
                            <div class="d-flex justify-content-end">
                               
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                    <button class="btn btn-danger ms-1">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 d-block">
                    <div class="card m-3" style="width: 17rem">
                        <div class="card-body">
                            <h4 class="card-title pb-3">Meeting</h4>
                            <h5 class="card-subtitle pb-2">Jakarta</h5>
                            <h6 class="card-subtitle pb-2">12.00 PM</h6>
                            <p class="card-text">meeting bahas sesuatu</p>
                            <div class="d-flex justify-content-end">
                               
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                    <button class="btn btn-danger ms-1">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 d-block">
                    <div class="card m-3" style="width: 17rem">
                        <div class="card-body">
                            <h4 class="card-title pb-3">Meeting</h4>
                            <h5 class="card-subtitle pb-2">Jakarta</h5>
                            <h6 class="card-subtitle pb-2">12.00 PM</h6>
                            <p class="card-text">meeting bahas sesuatu</p>
                            <div class="d-flex justify-content-end">
                               
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                    <button class="btn btn-danger ms-1">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 d-block">
                    <div class="card m-3" style="width: 17rem">
                        <div class="card-body">
                            <h4 class="card-title pb-3">Meeting</h4>
                            <h5 class="card-subtitle pb-2">Jakarta</h5>
                            <h6 class="card-subtitle pb-2">12.00 PM</h6>
                            <p class="card-text">meeting bahas sesuatu</p>
                            <div class="d-flex justify-content-end">
                               
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                    <button class="btn btn-danger ms-1">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Schedule</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="" method="post">
                            <label for="aktivitas" class="form-label d-block">Activity</label>
                            <input type="text" name="aktivitas" id="aktivitas" placeholder="What u want to do next time?"
                                class="form-control mb-3">

                            <label for="tempat" class="form-label">Where?</label>
                            <input type="text" name="tempat" id="tempat" placeholder="Where the event at?" class="form-control mb-3">

                            <label for="jam" class="form-label">Time</label>
                            <input type="time" name="jam" id="jam" class="form-control mb-3">

                            <label for="detail" class="form-label">Detail Activity</label>
                            <textarea name="detail" id="detail" cols="" rows="" class="form-control mb-3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
