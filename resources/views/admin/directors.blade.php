@extends('layouts.main-admin')
@section('title', 'Data Directors')
@section('content')
    <h2>Data Director</h2>
    <div class="card mt-4 shadow  mb-2 bg-body rounded">
        <div class=" card-header">
            <a href="#" class="title-card">Table Directors</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="hstack gap-2 mb-3">
                    <div class="col">
                        <a href="directors/add-director" type="button" class="button btn btn-success">
                            <span class="button__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                                    viewBox="0 0 640 512">
                                    <path
                                        d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3C0 496.5 15.52 512 34.66 512h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM616 200h-48v-48C568 138.8 557.3 128 544 128s-24 10.75-24 24v48h-48C458.8 200 448 210.8 448 224s10.75 24 24 24h48v48C520 309.3 530.8 320 544 320s24-10.75 24-24v-48h48C629.3 248 640 237.3 640 224S629.3 200 616 200z" />
                                </svg>
                            </span>
                            <span class="button__text"> Add Director </span>
                        </a>
                    </div>

                    {{-- <div class="col-6">
                        <div class="delete_status">
                            <svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>
                                <symbol id='check-circle-fill' fill='currentColor' viewBox='0 0 16 16'>
                                    <path
                                        d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z' />
                                </symbol>
                            </svg>
                            <div class='alert alert-success d-flex alert-dismissible fade show' role='alert'>
                                <svg class='bi flex-shrink-0 me-2' width='16' height='16' role='img' aria-label='Success:'>
                                    <use xlink:href='#check-circle-fill' />
                                </svg>
                                <div>
                                    Director name successfuly deleted <span class="ms-3"><b>note: Deleted data
                                            cannot recovery!</b></span>
                                </div>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-3 ms-auto">
                        <form action="" method="POST" class="input-group input-group-sm">
                            <input type="text" class="form-control text-secondary" name="searchInput"
                                placeholder="search..." value="" aria-label="search..." aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="submit" name="searchButton" id="button-addon2"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg></button>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-sm tabel   ">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name </th>
                    <th scope="col">Action</th>
                </tr>
                @foreach ($directors as $index => $director)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $director->name_director }}</td>
                        <td>
                            <a href="director-detail.php?id=" class=" btn btn-success btn-sm text-center"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Views detail data"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-eye-fill" viewBox="0 0 18 18">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg></a>
                            <div class="btn-group btn-group-sm">
                                <div class="btn-group btn-group-sm">
                                    <button type="button" class="btn btn-primary dropdown-toggle btn-sm"
                                        id="dropdownMenuClickableOutside" data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                            class="bi bi-pencil-fill" viewBox="0 0 18 18">
                                            <path
                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end drop-menu"
                                        aria-labelledby="dropdownMenuClickableOutside">
                                        <li>
                                            <p class="dropdown-header drop">Are you sure want to edit ?</p>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <div class="row mx-auto">
                                                <div class="col-5 ">
                                                    <a href="update-director.php?id="
                                                        class="dropdown-item text-center text-danger px-2">Yes</a>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="d-flex" style="height: 25px;">
                                                        <div class="vr"></div>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <a href="#" class="dropdown-item text-center text-primary px-2">No</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="vr"></div>
                            <div class="btn-group btn-group-sm">
                                <div class="btn-group btn-group-sm">
                                    <button type="button" class="btn btn-danger dropdown-toggle btn-sm"
                                        id="dropdownMenuClickableOutside" data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                            class="bi bi-trash-fill" viewBox="0 0 18 18">
                                            <path
                                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end drop-menu"
                                        aria-labelledby="dropdownMenuClickableOutside">
                                        <li>
                                            <p class="dropdown-header drop">Are you sure to delete ?</p>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <div class="row mx-auto">
                                                <div class="col-5 ">
                                                    <a href="delete-director.php?id="
                                                        class="dropdown-item text-center text-danger px-2">Yes</a>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="d-flex" style="height: 25px;">
                                                        <div class="vr"></div>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <a href="#" class="dropdown-item text-center text-primary px-2">No</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>

            <p class="text-secondary text-center fw-bold">" Data no found "</p>

            <p class="text-secondary " style="font-weight:700; font-family: 'Nunito', sans-serif; font-size: 13px;">Founded
                data : </p>
            <form action="" method="POST">
                <button type="submit" name="showAll" class="btn btn-primary btn-sm">Show all</button>
            </form>

            <nav aria-label="...">
                <ul class="pagination pagination-sm">

                    <li class="page-item">
                        <a class="page-link" href="?page=">Previous</a>
                    </li>

                    {{-- <li class="page-item disabled">
                    <a class="page-link" href="?page=">Previous</a>
                </li> --}}

                    <li class="page-item active">
                        <a class="page-link " href="?page=">1</a>
                    </li>

                    <li class="page-item">
                        <a class="page-link " href="?page=">2</a>
                    </li>

                    <li class="page-item">
                        <a class="page-link" href="?page=">Next</a>
                    </li>

                    {{-- <li class="page-item disabled">
                    <a class="page-link" href="?page=">Next</a>
                </li> --}}

                </ul>
            </nav>

        </div>
    </div>
@endsection
