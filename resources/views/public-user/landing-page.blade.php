@extends('layouts.main-public')
@section('title', 'Home')
@section('content')
    <figure>
        <div class="slider">
            <div class="carousel js-flickity"
                 data-flickity='{ "autoPlay": true, "prevNextButtons": false, "initialIndex": 1}'>
                @for($i = 2; $i < 5; $i++)
                    <div class="carousel-cell banner">
                        <div class="card border-0">
                            <img class="image" src="{{ URL::asset("assets/img/banner-page-$i.jpeg") }}"
                                 alt="{{ URL::asset("assets/img/banner-page-$i.jpeg") }}">
                        </div>
                    </div>
                @endfor
            </div>

        </div>
    </figure>
    <header class="mt-5">
        <div class="hstack gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#0d6efd"
                 class="bi bi-hourglass-split mb-2" viewBox="0 0 18 18">
                <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
            </svg>
            <h3 class="header-page">Upcoming Film</h3>
        </div>
        <hr>
    </header>
    <figure class="upcoming">
        <div class="row g-0 justify-content-center">
            <div class="carousel js-flickity"
                 data-flickity='{ "autoPlay": true, "pageDots": false, "groupCells": true,"prevNextButtons": false, "contain": true}'>
                @foreach($populars as $popular)
                    <div class="carousel-cell">
                        <div class="upcoming-card col-lg-2 col-md-2 col-sm-2 m-1" style="width: 16rem">
                            <div class="card mt-2 border border-0">
                                <img src="{{ URL::asset("storage/uploaded/$popular->picture") }}"
                                     style="max-width: 256px; max-height: 128px"
                                     class="rounded-3 card-img-top" alt="{{ $popular->picture }}">
                                <div class="card-body">
                                    <div class="card-title">
                                        <a href=""
                                           class="stretched-link">{{ Str::limit($popular->title, 30, '...') }}</a>
                                    </div>
                                    <p class="card-item">{{ $popular->release_date }} • {{ $popular->genre_name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </figure>
    <header>
        <div class="hstack gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#6610f2" class="bi bi-stars mb-2"
                 viewBox="0 0 16 16">
                <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
            </svg>
            <h3 class="header-page">Popular</h3>
        </div>
        <hr>
    </header>
    <figure>
        <div class="carousel js-flickity"
             data-flickity='{ "autoPlay": 2000, "pageDots": false, "groupCell": true, "contain": true}'>
            @foreach($upcomings as $upcoming)
                <div class="carousel-cell">
                    <div class="col-2 m-1" style="width: 9.1rem">
                        <div class="card border border-0">
                            <img src="{{ URL::asset("storage/uploaded/$upcoming->picture") }}"
                                 style="width: 146px; height: 218px"
                                 class="rounded-3 card-img-top" alt="{{ $upcoming->picture }}">
                            <div class="card-body">
                                <div class="card-title">
                                    <a href=""
                                       class="stretched-link">{{ Str::limit($upcoming->title, 30, '...') }}</a>
                                </div>
                                <p class="card-item">{{ $upcoming->release_date }} •
                                    {{ $upcoming->genre_name }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </figure>
    <hr>
    <figure class="genre">
        <div class="row g-0">
            <div class="carousel js-flickity"
                 data-flickity='{ "groupCells": true, "pageDots": false, "wrapAround": true ,"prevNextButtons": false}'>
                @foreach($genres as $index => $genre)
                    <div class="carousel-cell">
                        <div class="col-3 m-2" style="width: 12rem;">
                            <div class="card border-0" style="background-color: {{ $genre->genre_color }}">
                                <div class="hstack m-2">
                                    <h6>{{ $genre->genre_list }}</h6>
                                    <img class="ms-auto"
                                         src="{{ URL::asset("assets/img/icon-genre/$genre->genre_pic") }}"
                                         alt="{{ $genre->genre_list }} " width="50px">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </figure>
    <header>
        <div class="hstack gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#198754"
                 class="bi bi-patch-check-fill mb-2" viewBox="0 0 16 16">
                <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
            </svg>
            <h3 class="header-page">Recomended</h3>
        </div>
        <hr>
    </header>
    <figure class="recomended">
        <div class="row g-0 justify-content-center">
            @foreach($recomendations as $recomended)
                <div class="col-sm-2 col-lg-3 col-md-4 m-1" style="width: 9.1rem">
                    <div class="card border border-0">
                        <img src="{{ URL::asset("storage/uploaded/$recomended->picture") }}"
                             style="width: 146px; height: 218px"
                             class="rounded-3 card-img-top"
                             alt="{{ $recomended->picture }}">
                        <div class="card-body">
                            <div class="card-title">
                                <a href="" class="stretched-link">{{ Str::limit($recomended->title, 30, '...') }}</a>
                            </div>
                            <p class="card-item">{{ $recomended->release_date }} • {{ $recomended->genre_name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </figure>
@endsection
