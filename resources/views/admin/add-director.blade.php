@extends('layouts.main')
@section('title', 'Add Data Director')
@section('content')
    <h2>Add data director</h2>
    <div class="row">
        <div class="col">
            <div class="card mt-4 border border-4 border-end-0 border-top-1 border-bottom-0 border-start-0 border-info shadow  mb-2 bg-body rounded mx-auto"
                style="width: 70rem;">
                <div class="card-header text-primary fw-bold">
                    Director
                </div>
                <div class="card-body">
                    <svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>
                        <symbol id='exclamation-triangle-fill' fill='currentColor' viewBox='0 0 16 16'>
                            <path
                                d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z' />
                        </symbol>
                    </svg>
                    <div class='alert alert-danger d-flex alert-dismissible fade show' role='alert'>
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
                            <use xlink:href="#exclamation-triangle-fill" />
                        </svg>
                        <div>
                            <b>Have some trouble</b>. Failed to add director name
                        </div>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>

                    <svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>
                        <symbol id='check-circle-fill' fill='currentColor' viewBox='0 0 16 16'>
                            <path
                                d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z' />
                        </symbol>
                    </svg>
                    <div class='alert alert-success d-flex alert-dismissible fade show' role='alert'>
                        <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'>
                            <use xlink:href='#check-circle-fill' />
                        </svg>
                        <div>
                            Director successfuly to added <a href='directortable-panel.php' class='alert-link'>See for
                                more</a>.
                        </div>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data" class="form-control  pt-4 needs-validation"
                        novalidate>
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <div class="mb-3 pt-2">
                                    <p class="form-label form-label-sm text-center">Name Director</p>
                                    <input class="form-control form-control-sm" id="formFileSm" name="name_director"
                                        type="text" required>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <p class="text-center" class="form-label" for="synopsis">About</p>
                                    <textarea class="form-control" id="synopsis" name="about_director" rows="12" placeholder="about..."
                                        required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" name="add" type="submit">Save</button>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-danger" type="reset">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
