@extends('layouts.main-admin')
@section('title', 'Add Data Film')
@section('content')
    <h2>Add data Film</h2>
    <div class="row">
        <div class="col">
            <div class="card mt-4 border border-4 border-end-0 border-top-1 border-bottom-0 border-start-0 border-primary shadow  mb-2 bg-body rounded mx-auto"
                style="width: 70rem;">
                <div class="card-header text-primary fw-bold">
                    Film
                </div>
                <div class="card-body">
                    @if(session()->has('success'))
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
                            {{ session('success') }}<a href='{{ url('films') }}' class='alert-link'>See for more</a>.
                        </div>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                    @endif

                    <form action="{{ url('films') }}" method="POST" enctype="multipart/form-data" class="form-control  pt-4 "
                        novalidate>
                        @csrf
                        <div class="row justify-content-center">
                            <div class="text-center">
                                <img id="blah" src="http://placehold.it/180" class="img-fluid mt-2 rounded-3" alt="...">
                            </div>
                            <div class="col-3">
                                <div class="mb-3 pt-2">
                                    <p class="form-label form-label-sm text-center">Upload poster</p>
                                    <input class="form-control form-control-sm @error('picture') is-invalid @enderror " id="formFileSm" name="picture" type="file"
                                        onchange="readURL(this);" required>
                                    @error('picture')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        @method('POST')
                        <div class="row justify-content-center">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="title" class="form-label form-label-sm">Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control form-control-sm @error('title') is-invalid @enderror" name="title" id="title"
                                                required value="{{ old('title') }}">
                                            @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="form-label form-label-sm">Genre</label>
                                        <div class="col-sm-7 mb-2">
                                            <div class="row">
                                                @foreach($genres as $key => $genre)
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input type="hidden" name="genre_id" value="{{ $genre->id_list }}">
                                                        <input class="form-check-input {genres[]:true} @error('genres') is-invalid @enderror'" type="checkbox"
                                                            value="{{ $genre->genre_list }}" name="genres[]" id="{{ $genre->genre_list }}" {{ (is_array(old('genres')) && in_array($genre->genre_list, old('genres'))) ? 'checked' : '' }} onchange="checkRequired();"
                                                            required>
                                                        <label class="form-check-label" for="{{ $genre->genre_list }}">
                                                            {{ $genre->genre_list }}
                                                        </label>
                                                    </div>
                                                </div>
                                                @endforeach
                                                    @error('genres')
                                                    <p class="text-danger" style="font-size: 14px; margin: 0px">The genre must be at least 1 selected.</p>
                                                    @enderror
                                                <a href="add-genre.php" style="text-decoration: none;"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-plus-square-fill"
                                                        viewBox="0 0 20 20">
                                                        <path
                                                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z" />
                                                    </svg> Add new genre </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row mb-3">
                                            <label for="trailer" class="form-label form-label-sm">Trailer</label>
                                            <div class="col-10">
                                                <input type="text" class="form-control form-control-sm @error('trailer') is-invalid @enderror" name="trailer"
                                                    placeholder="https://youtube.com" id="trailer" required value="{{ old('trailer') }}">
                                                @error('trailer')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="line" style="width: 0px; border-left: 1px solid #adb5bd"></div>
                                <div class="col-5">
                                    <div class="row mb-3">
                                        <label for="dates" class="form-label form-label-sm">Release Date</label>
                                        <div class="col-2">
                                            <label for="dates" class="input-group-text btn btn-primary btn-sm"
                                                aria-describedby="inputGroup-sizing-sm" role="button"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                    fill="currentColor" class="bi bi-calendar-event-fill"
                                                    viewBox="0 0 18 18">
                                                    <path
                                                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                                                </svg></label>
                                        </div>
                                        <div class="col-4">
                                            <input type="date" class="form-control form-control-sm @error('release_date') is-invalid @enderror" name="release_date"
                                                id="dates" required  value="{{ old('release_date') }}">
                                            @error('release_date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="row mb-3">
                                            <label for="runtime" class="form-label form-label-sm">Duration Film</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-sm @error('runtime') is-invalid @enderror" name="runtime"
                                                    id="runtime" placeholder="(minute)" maxlength="3" required value="{{ old('runtime') }}">
                                                @error('runtime')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-3">
                                                <label for="runtime" class="input-group-text btn btn-primary btn-sm"
                                                    aria-describedby="inputGroup-sizing-sm" role="button"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                    </svg></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="row mb-3">
                                            <label for="director" class="form-label form-label-sm">Directors</label>
                                            <div class="col-10">
                                                <select class="form-select form-select-sm @error('director') is-invalid @enderror" name="director" id="director" aria-label=".form-select-sm" required>
                                                    aria-label=".form-select-sm" required>
                                                    <option value="">Select Director</option>
                                                    @foreach($directors as $director)
                                                    <option value="{{ $director->id }}" {{ ($director->id == old('director') ? 'selected' : 'is_invalid') }}>{{ $director->name_director }}</option>
                                                    @endforeach
                                                </select>
                                                @error('director')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-2">
                                                <a href="add-director.php" role="button"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                        fill="currentColor" class="bi bi-plus-square-fill"
                                                        viewBox="0 0 17 17">
                                                        <path
                                                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z" />
                                                    </svg></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="row mb-3">
                                            <label for="production" class="form-label form-label-sm">Productions</label>
                                            <div class="col-10">
                                                <select class="form-select form-select-sm @error('production') is-invalid @enderror" name="production" id="production"
                                                    aria-label=".form-select-sm" required>
                                                    <option value="">Select Production</option>
                                                    @foreach($productions as $production)
                                                    <option value="{{ $production->id_production }}" {{ ($production->id_production == old('production')) ? 'selected' : '' }}>{{ $production->name_production }}</option>
                                                    @endforeach
                                                </select>
                                                @error('production')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-2">
                                                <a href="add-production.php" role="button"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                        fill="currentColor" class="bi bi-plus-square-fill"
                                                        viewBox="0 0 17 17">
                                                        <path
                                                            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z" />
                                                    </svg></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <p class="text-center" class="form-label" for="synopsis">Synopsis</p>
                                    <textarea class="form-control @error('synopsis') is-invalid @enderror" id="synopsis" name="synopsis" rows="12" placeholder="synopsis..." required>{{ old('synopsis') }}</textarea>
                                    @error('synopsis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" type="submit">Save</button>
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
{{--    <script>--}}
{{--        (function() {--}}
{{--            'use strict'--}}
{{--            var forms = document.querySelectorAll('.needs-validation')--}}

{{--            Array.prototype.slice.call(forms)--}}
{{--                .forEach(function(form) {--}}
{{--                    form.addEventListener('submit', function(event) {--}}
{{--                        if (!form.checkValidity()) {--}}
{{--                            event.preventDefault()--}}
{{--                            event.stopPropagation()--}}
{{--                        }--}}

{{--                        form.classList.add('was-validated')--}}
{{--                    }, false)--}}
{{--                })--}}
{{--        })();--}}
{{--    </script>--}}
@endsection
