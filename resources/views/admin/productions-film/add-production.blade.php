@extends('layouts.main-admin')
@section('title', 'Add Data Production')
@section('content')
    <div class="hstack gap-4">
        <button type="button" class="rounded-circle p-2 btn btn-link btn-light"
                onclick="document.location.href = '{{ route('productions') }}'">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="#8b9299" viewBox="0 0 512 512">
                <path d="M9.375 233.4l128-128c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H480c17.69 0 32 14.31 32 32s-14.31 32-32 32H109.3l73.38 73.38c12.5 12.5 12.5 32.75 0 45.25c-12.49 12.49-32.74 12.51-45.25 0l-128-128C-3.125 266.1-3.125 245.9 9.375 233.4z"/>
            </svg>
        </button>
        <h2 class="m-0">Add Data Production</h2>
    </div>

    <div class="row">
        <div class="col">
            <div class="card mt-4 border border-4 border-end-0 border-top-1 border-bottom-0 border-start-0 border-warning shadow  mb-2 bg-body rounded mx-auto"
                 style="width: 70rem;">
                <div class="card-header text-primary fw-bold">
                    Production
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>
                            <symbol id='check-circle-fill' fill='currentColor' viewBox='0 0 16 16'>
                                <path
                                        d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>
                            </symbol>
                        </svg>
                        <div class='alert alert-success d-flex alert-dismissible fade show' role='alert'>
                            <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'>
                                <use xlink:href='#check-circle-fill'/>
                            </svg>
                            <div>
                                {{ session('status') }} <a href='{{ route('productions') }}' class='alert-link'>See for
                                    more</a>.
                            </div>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    @endif
                    <form action="{{ route('add-production') }}" method="POST" enctype="multipart/form-data"
                          class="form-control  pt-4 needs-validation"
                          novalidate>
                        @csrf
                        <div class="row">
                            <div class="row">
                                <div class="col-6">
                                    <div class="m-4">
                                        <label for="title" class="form-label form-label-sm">Production</label>
                                        <div class="col-sm-11">
                                            <input type="text"
                                                   class="form-control form-control-sm @error('name_production') is-invalid @enderror"
                                                   name="name_production"
                                                   id="title" value="{{ old('name_production') }}" required>
                                            @error('name_production')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="vr" style="height: 150px;"></div>
                                </div>
                                <div class="col-4">
                                    <div class="row m-4">
                                        <label for="dates" class="form-label form-label-sm">Founded Date</label>
                                        <div class="col-2 me-2">
                                            <label for="dates" class="input-group-text btn btn-primary btn-sm"
                                                   aria-describedby="inputGroup-sizing-sm" role="button">
                                                <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                        fill="white"
                                                        class="bi bi-calendar-event-fill" viewBox="0 0 18 18">
                                                    <path
                                                            d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                                                </svg>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <input type="date"
                                                   class="form-control form-control-sm @error('founded_date') is-invalid @enderror"
                                                   name="founded_date"
                                                   id="dates" value="{{ old('founded_date') }}" required>
                                            @error('founded_date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-2">
                            <div class="d-grid gap-2 col-6 mx-auto ">
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
