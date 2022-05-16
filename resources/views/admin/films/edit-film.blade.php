@extends('layouts.main-admin')
@section('title', 'Update Data Film')
@section('content')
    <div class="hstack gap-4">
        <button type="button" class="rounded-circle p-2 btn btn-link btn-light"
                onclick="document.location.href = '{{ route('films') }}'">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="#8b9299" viewBox="0 0 512 512">
                <path d="M9.375 233.4l128-128c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H480c17.69 0 32 14.31 32 32s-14.31 32-32 32H109.3l73.38 73.38c12.5 12.5 12.5 32.75 0 45.25c-12.49 12.49-32.74 12.51-45.25 0l-128-128C-3.125 266.1-3.125 245.9 9.375 233.4z"/>
            </svg>
        </button>
        <h2 class="m-0">Update data Film</h2>
    </div>

    <div class="row">
        <div class="col">
            <div class="card mt-4 border border-4 border-end-0 border-top-1 border-bottom-0 border-start-0 border-primary shadow  mb-2 bg-body rounded mx-auto"
                 style="width: 70rem;">
                <div class="card-header text-primary fw-bold">
                    Film
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
                                {{ session('status') }}<a href='{{ route('films') }}' class='alert-link'>See for
                                    more</a>.
                            </div>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    @endif

                    <form action="{{ route('update-film', $films->id_film) }}" method="POST"
                          enctype="multipart/form-data"
                          class="form-control pt-4"
                          novalidate>
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="oldPicture" value="{{ $films->picture }}">
                        @csrf
                        @method('PUT')
                        <div class="row justify-content-center">
                            <div class="text-center images">
                                <div class="row">
                                    <div class="col">
                                        <p>New Poster</p>
                                        <img id="blah" src="http://placehold.it/180" class="img-fluid mt-2 rounded-3"
                                             alt="...">
                                    </div>
                                    <div class="col">
                                        <p>Old Poster</p>
                                        <img src="{{ URL::asset("storage/uploaded/$films->picture") }}" id="blah"
                                             class="img-fluid mt-2 rounded-3"
                                             alt="{{ URL::asset("storage/uploaded/$films->picture") }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3 pt-2">
                                    <p class="form-label form-label-sm text-center">Upload poster</p>
                                    <input class="form-control form-control-sm @error('picture') is-invalid @enderror "
                                           id="formFileSm" name="picture" type="file"
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

                        <div class="row justify-content-center">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="title" class="form-label form-label-sm">Title</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                   class="form-control form-control-sm @error('title') is-invalid @enderror"
                                                   name="title" id="title"
                                                   required value="{{ $films->title }}">
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
                                                            <input type="hidden" name="genre_id"
                                                                   value="{{ $genre->id_list }}">
                                                            <input class="form-check-input {genres[]:true} @error('genres') is-invalid @enderror'"
                                                                   type="checkbox"
                                                                   value="{{ $genre->genre_list }}" name="genres[]"
                                                                   id="{{ $genre->genre_list }}"
                                                                   {{ in_array($genre->genre_list, $check = explode(', ', $films->genre_name)) ? 'checked' : '' }} onchange="checkRequired();"
                                                                   required>
                                                            <label class="form-check-label"
                                                                   for="{{ $genre->genre_list }}">
                                                                {{ $genre->genre_list }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                @error('genres')
                                                <p class="text-danger" style="font-size: 14px; margin: 0px">The genre
                                                    must be at least 1 selected.</p>
                                                @enderror
                                                <a href="add-genre.php" style="text-decoration: none;">
                                                    <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                            fill="currentColor" class="bi bi-plus-square-fill"
                                                            viewBox="0 0 20 20">
                                                        <path
                                                                d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                                                    </svg>
                                                    Add new genre
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row mb-3">
                                            <label for="trailer" class="form-label form-label-sm">Trailer</label>
                                            <div class="col-10">
                                                <input type="text"
                                                       class="form-control form-control-sm @error('trailer') is-invalid @enderror"
                                                       name="trailer"
                                                       placeholder="https://youtube.com" id="trailer" required
                                                       value="{{ $films->trailer }}">
                                                @error('trailer')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="line"
                                     style="width: 0px; border-left: 1px solid #adb5bd; padding: 0px"></div>
                                <div class="col">
                                    <div class="row ms-2">
                                        <div class="row mb-3">
                                            <label for="dates" class="form-label form-label-sm">Release Date</label>
                                            <div class="col-md-2">
                                                <label for="dates" class="input-group-text btn btn-primary btn-sm"
                                                       role="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                         width="20" height="30" viewBox="0 0 448 512">
                                                        <path d="M96 32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32zM448 464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192H448V464zM200 272V328H144C130.7 328 120 338.7 120 352C120 365.3 130.7 376 144 376H200V432C200 445.3 210.7 456 224 456C237.3 456 248 445.3 248 432V376H304C317.3 376 328 365.3 328 352C328 338.7 317.3 328 304 328H248V272C248 258.7 237.3 248 224 248C210.7 248 200 258.7 200 272z"/>
                                                    </svg>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="date"
                                                       class="form-control form-control-sm @error('release_date') is-invalid @enderror"
                                                       name="release_date"
                                                       id="dates" required value="{{ $films->release_date }}">
                                                @error('release_date')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="row mb-3">
                                                <label for="runtime" class="form-label form-label-sm">Duration
                                                    Film</label>
                                                <div class="col-sm-6">
                                                    <input type="text"
                                                           class="form-control form-control-sm @error('runtime') is-invalid @enderror"
                                                           name="runtime"
                                                           id="runtime" placeholder="(minute)" minlength="2"
                                                           maxlength="3" required value="{{ $films->runtime }}">
                                                    @error('runtime')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-3">
                                                    <label for="runtime" class="input-group-text btn btn-primary btn-sm"
                                                           aria-describedby="inputGroup-sizing-sm" role="button">
                                                        <svg
                                                                xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20"
                                                                fill="currentColor" class="bi bi-clock-fill"
                                                                viewBox="0 0 16 16">
                                                            <path
                                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                                        </svg>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="row mb-3">
                                                <label for="director" class="form-label form-label-sm">Directors</label>
                                                <div class="col-10">
                                                    <select class="form-select form-select-sm @error('director') is-invalid @enderror"
                                                            name="director" id="director" aria-label=".form-select-sm"
                                                            required>
                                                        <option value="">Select Director</option>
                                                        @foreach($directors as $director)
                                                            <option value="{{ $director->id }}" {{ ($director->name_director == $films->name_director ? 'selected' : '') }}>{{ $director->name_director }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('director')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-2">
                                                    <a href="add-director.php" role="button">
                                                        <svg
                                                                xmlns="http://www.w3.org/2000/svg" width="30"
                                                                height="30"
                                                                fill="currentColor" class="bi bi-plus-square-fill"
                                                                viewBox="0 0 17 17">
                                                            <path
                                                                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="row mb-3">
                                                <label for="production"
                                                       class="form-label form-label-sm">Productions</label>
                                                <div class="col-10">
                                                    <select class="form-select form-select-sm @error('production') is-invalid @enderror"
                                                            name="production" id="production"
                                                            aria-label=".form-select-sm" required>
                                                        <option value="">Select Production</option>
                                                        @foreach($productions as $production)
                                                            <option value="{{ $production->id_production }}" {{ ($production->name_production == $films->name_production) ? 'selected' : '' }}>{{ $production->name_production }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('production')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                <div class="col-2">
                                                    <a href="add-production.php" role="button">
                                                        <svg
                                                                xmlns="http://www.w3.org/2000/svg" width="30"
                                                                height="30"
                                                                fill="currentColor" class="bi bi-plus-square-fill"
                                                                viewBox="0 0 17 17">
                                                            <path
                                                                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <p class="text-center" class="form-label" for="synopsis">Synopsis</p>
                                    <textarea class="form-control @error('synopsis') is-invalid @enderror" id="synopsis"
                                              name="synopsis" rows="12" placeholder="synopsis..."
                                              required>{{ $films->synopsis }}</textarea>
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
                                <button class="btn btn-primary" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-2" fill="currentColor"
                                         width="15" viewBox="0 0 512 512">
                                        <path d="M421.7 220.3L188.5 453.4L154.6 419.5L158.1 416H112C103.2 416 96 408.8 96 400V353.9L92.51 357.4C87.78 362.2 84.31 368 82.42 374.4L59.44 452.6L137.6 429.6C143.1 427.7 149.8 424.2 154.6 419.5L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3zM492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75z"/>
                                    </svg>
                                    Update
                                </button>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-danger" type="reset">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 me-2" fill="currentColor"
                                         width="15"
                                         viewBox="0 0 448 512">
                                        <path d="M284.2 0C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2zM31.1 128H416L394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128zM207 199L127 279C117.7 288.4 117.7 303.6 127 312.1C136.4 322.3 151.6 322.3 160.1 312.1L199.1 273.9V408C199.1 421.3 210.7 432 223.1 432C237.3 432 248 421.3 248 408V273.9L287 312.1C296.4 322.3 311.6 322.3 320.1 312.1C330.3 303.6 330.3 288.4 320.1 279L240.1 199C236.5 194.5 230.4 191.1 223.1 191.1C217.6 191.1 211.5 194.5 207 199V199z"/>
                                    </svg>
                                    Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
