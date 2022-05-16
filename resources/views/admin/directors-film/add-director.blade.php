@extends('layouts.main-admin')
@section('title', 'Add Data Director')
@section('content')
    <div class="hstack gap-4">
        <button type="button" class="rounded-circle p-2 btn btn-link btn-light"
                onclick="document.location.href = '{{ route('directors') }}'">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="#8b9299" viewBox="0 0 512 512">
                <path d="M9.375 233.4l128-128c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H480c17.69 0 32 14.31 32 32s-14.31 32-32 32H109.3l73.38 73.38c12.5 12.5 12.5 32.75 0 45.25c-12.49 12.49-32.74 12.51-45.25 0l-128-128C-3.125 266.1-3.125 245.9 9.375 233.4z"/>
            </svg>
        </button>
        <h2 class="m-0">Add Data Director</h2>
    </div>

    <div class="row">
        <div class="col">
            <div class="card mt-4 border border-4 border-end-0 border-top-1 border-bottom-0 border-start-0 border-info shadow  mb-2 bg-body rounded mx-auto"
                 style="width: 70rem;">
                <div class="card-header text-primary fw-bold">
                    Director
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
                                {{ session('status') }} <a href='{{ route('directors') }}' class='alert-link'>See
                                    for
                                    more</a>.
                            </div>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    @endif
                    <form action="{{ route('add-director') }}" method="POST" class="form-control  pt-4 needs-validation"
                          novalidate>
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <div class="mb-3 pt-2">
                                    <p class="form-label form-label-sm text-center">Name Director</p>
                                    <input class="form-control form-control-sm @error('name_director') is-invalid @enderror"
                                           id="formFileSm" name="name_director"
                                           type="text" value="{{ old('name_director') }}" required>
                                    @error('name_director')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <p class="text-center" class="form-label" for="about">About</p>
                                    <textarea class="form-control @error('about') is-invalid @enderror" id="about"
                                              name="about" rows="12"
                                              placeholder="about..."
                                              required>{{ old('about') }}</textarea>
                                    @error('about')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
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
