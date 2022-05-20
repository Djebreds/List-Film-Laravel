@extends('layouts.main-public')
@section('title', 'Film Categories')
@section('content')
    <header>
        <h3 class="mt-2">Categories</h3>
    </header>
    <nav class="nav-categories">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active px-2" id="genre-tab" data-bs-toggle="tab"
                        data-bs-target="#genre-tab-pane"
                        type="button" role="tab" aria-controls="genre-tab-pane" aria-selected="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="#6f42c1" class="mb-1 me-1"
                         viewBox="0 0 512 512">
                        <path d="M512 288c0 35.35-21.49 64-48 64c-32.43 0-31.72-32-55.64-32C394.9 320 384 330.9 384 344.4V480c0 17.67-14.33 32-32 32h-71.64C266.9 512 256 501.1 256 487.6C256 463.1 288 464.4 288 432c0-26.51-28.65-48-64-48s-64 21.49-64 48c0 32.43 32 31.72 32 55.64C192 501.1 181.1 512 167.6 512H32c-17.67 0-32-14.33-32-32v-135.6C0 330.9 10.91 320 24.36 320C48.05 320 47.6 352 80 352C106.5 352 128 323.3 128 288S106.5 223.1 80 223.1c-32.43 0-31.72 32-55.64 32C10.91 255.1 0 245.1 0 231.6v-71.64c0-17.67 14.33-31.1 32-31.1h135.6C181.1 127.1 192 117.1 192 103.6c0-23.69-32-23.24-32-55.64c0-26.51 28.65-47.1 64-47.1s64 21.49 64 47.1c0 32.43-32 31.72-32 55.64c0 13.45 10.91 24.36 24.36 24.36H352c17.67 0 32 14.33 32 31.1v71.64c0 13.45 10.91 24.36 24.36 24.36c23.69 0 23.24-32 55.64-32C490.5 223.1 512 252.7 512 288z"/>
                    </svg>
                    Genre
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link px-2" id="date-tab" data-bs-toggle="tab" data-bs-target="#date-tab-pane"
                        type="button" role="tab" aria-controls="date-tab-pane" aria-selected="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" fill="#20c997" class="mb-1 me-1"
                         viewBox="0 0 384 512">
                        <path d="M352 0C369.7 0 384 14.33 384 32C384 49.67 369.7 64 352 64V74.98C352 117.4 335.1 158.1 305.1 188.1L237.3 256L305.1 323.9C335.1 353.9 352 394.6 352 437V448C369.7 448 384 462.3 384 480C384 497.7 369.7 512 352 512H32C14.33 512 0 497.7 0 480C0 462.3 14.33 448 32 448V437C32 394.6 48.86 353.9 78.86 323.9L146.7 256L78.86 188.1C48.86 158.1 32 117.4 32 74.98V64C14.33 64 0 49.67 0 32C0 14.33 14.33 0 32 0H352zM124.1 142.9L192 210.7L259.9 142.9C277.9 124.9 288 100.4 288 74.98V64H96V74.98C96 100.4 106.1 124.9 124.1 142.9z"/>
                    </svg>
                    Date
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link px-2" id="video-tab" data-bs-toggle="tab" data-bs-target="#video-tab-pane"
                        type="button" role="tab" aria-controls="contanct-tab-pane" aria-selected="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13" fill="#fd7e14" class="mb-1 me-1"
                         viewBox="0 0 384 512">
                        <path d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z"/>
                    </svg>
                    Video
                </button>
            </li>
        </ul>
    </nav>
    <section>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="genre-tab-pane" role="tabpanel" aria-labelledby="genre-tab"
                 tabindex="0">
                <form action="" method="" class="my-3">
                    @foreach($genres as $index => $genre)
                        <button type="submit" class="btn btn-sm button-fillter-genre"
                                value="{{ $genre->genre_list }}"> {{ $genre->genre_list }}
                        </button>
                    @endforeach
                </form>
                <hr>
                <figure class="all">
                    <div class="row justify-content-center g-0">
                        @foreach($films as $film)
                            <div class="col-sm-2 col-lg-3 col-md-4 m-1" style="width: 9.1rem">
                                <div class="card border border-0">
                                    <img src="{{ URL::asset("storage/uploaded/$film->picture") }}"
                                         style="width: 146px; height: 218px"
                                         class="rounded-3 card-img-top"
                                         alt="{{ $film->picture }}">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <a href="" class="stretched-link">{{ $film->title }}</a>
                                        </div>
                                        <p class="card-item">{{ $film->release_date }} • {{ $film->genre_name }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </figure>
            </div>
            <div class="tab-pane fade" id="date-tab-pane" role="tabpanel" aria-labelledby="date-tab" tabindex="0">
                <form action="" method="" class="my-3">
                    @for($date = 2000; $date <= date('Y'); $date++)
                        <button type="submit" class="btn btn-sm button-fillter-genre"
                                value="{{ $date }}"> {{ $date }}
                        </button>
                    @endfor
                </form>
                <hr>
                <figure class="all">
                    <div class="row justify-content-center g-0">
                        @foreach($films as $film)
                            <div class="col-sm-2 col-lg-3 col-md-4 m-1" style="width: 9.1rem">
                                <div class="card border border-0">
                                    <img src="{{ URL::asset("storage/uploaded/$film->picture") }}"
                                         style="width: 146px; height: 218px"
                                         class="rounded-3 card-img-top"
                                         alt="{{ $film->picture }}">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <a href="" class="stretched-link">{{ $film->title }}</a>
                                        </div>
                                        <p class="card-item">{{ $film->release_date }} • {{ $film->genre_name }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </figure>
            </div>
            <div class="tab-pane fade" id="video-tab-pane" role="tabpanel" aria-labelledby="video-tab" tabindex="0">
                ...
            </div>
        </div>
    </section>

@endsection
