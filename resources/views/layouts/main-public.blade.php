<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Author: Refi Ahmad Fauzan , This page for landing page">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-public-user.css') }}">

    <title>List Film | Home</title>
</head>

<body>

<nav class="navbar navbar-dark fixed-top align-self-center" style="background: #0d6efd;">
    <div class="container">
        <a class="navbar-brand fw-bold me-auto" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="mb-2" width="27" fill="#fff"
                 viewBox="0 0 512 512">
                <path
                        d="M463.1 32h-416C21.49 32-.0001 53.49-.0001 80v352c0 26.51 21.49 48 47.1 48h416c26.51 0 48-21.49 48-48v-352C511.1 53.49 490.5 32 463.1 32zM111.1 408c0 4.418-3.582 8-8 8H55.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8L111.1 408zM111.1 280c0 4.418-3.582 8-8 8H55.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8V280zM111.1 152c0 4.418-3.582 8-8 8H55.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8L111.1 152zM351.1 400c0 8.836-7.164 16-16 16H175.1c-8.836 0-16-7.164-16-16v-96c0-8.838 7.164-16 16-16h160c8.836 0 16 7.162 16 16V400zM351.1 208c0 8.836-7.164 16-16 16H175.1c-8.836 0-16-7.164-16-16v-96c0-8.838 7.164-16 16-16h160c8.836 0 16 7.162 16 16V208zM463.1 408c0 4.418-3.582 8-8 8h-47.1c-4.418 0-7.1-3.582-7.1-8l0-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8V408zM463.1 280c0 4.418-3.582 8-8 8h-47.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8V280zM463.1 152c0 4.418-3.582 8-8 8h-47.1c-4.418 0-8-3.582-8-8l0-48c0-4.418 3.582-8 7.1-8h47.1c4.418 0 8 3.582 8 8V152z"/>
            </svg>
            Film-List
        </a>
        <a href="{{ url('/list-film') }}" id="responsive"
           class="text-white text-decoration-none fs-6 fw-bold hstack gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="mb-2" width="18"
                 fill="currentColor" viewBox="0 0 512 512">
                <path
                        d="M384 320c-17.67 0-32 14.33-32 32v96H64V160h96c17.67 0 32-14.32 32-32s-14.33-32-32-32L64 96c-35.35 0-64 28.65-64 64V448c0 35.34 28.65 64 64 64h288c35.35 0 64-28.66 64-64v-96C416 334.3 401.7 320 384 320zM488 0H352c-12.94 0-24.62 7.797-29.56 19.75c-4.969 11.97-2.219 25.72 6.938 34.88L370.8 96L169.4 297.4c-12.5 12.5-12.5 32.75 0 45.25C175.6 348.9 183.8 352 192 352s16.38-3.125 22.62-9.375L416 141.3l41.38 41.38c9.156 9.141 22.88 11.84 34.88 6.938C504.2 184.6 512 172.9 512 160V24C512 10.74 501.3 0 488 0z"/>
            </svg>
            testing
        </a>
        <form action="" method="POST">
            <div class="mb-2 inner-addon left-addon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="#428af5" class="bi bi-search"
                     viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                <input type="email"
                       class="form-control form-control-sm search rounded-pill border-0 "
                       name="email" id="email" value="{{ old('email') }}"
                       placeholder="searching">
            </div>
        </form>
        <a href="{{ url('/list-film') }}" id="link"
           class="text-white text-decoration-none fs-6 fw-bold hstack gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="mb-2" width="18"
                 fill="currentColor" viewBox="0 0 512 512">
                <path
                        d="M384 320c-17.67 0-32 14.33-32 32v96H64V160h96c17.67 0 32-14.32 32-32s-14.33-32-32-32L64 96c-35.35 0-64 28.65-64 64V448c0 35.34 28.65 64 64 64h288c35.35 0 64-28.66 64-64v-96C416 334.3 401.7 320 384 320zM488 0H352c-12.94 0-24.62 7.797-29.56 19.75c-4.969 11.97-2.219 25.72 6.938 34.88L370.8 96L169.4 297.4c-12.5 12.5-12.5 32.75 0 45.25C175.6 348.9 183.8 352 192 352s16.38-3.125 22.62-9.375L416 141.3l41.38 41.38c9.156 9.141 22.88 11.84 34.88 6.938C504.2 184.6 512 172.9 512 160V24C512 10.74 501.3 0 488 0z"/>
            </svg>
            testing
        </a>
    </div>

</nav>

{{--<nav class="navbar navbar-expand-lg fixed-top nav-top p-4">--}}
{{--    <div class="container">--}}
{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
{{--                <a href="#" class="navbar-brand">Film List</a>--}}
{{--            </ul>--}}
{{--            <div class="col-sm-4">--}}
{{--                <form action="" method="GET" class="input-group input-group-sm">--}}
{{--                    <input type="text"--}}
{{--                           class="form-control form-control-sm border border-0 rounded-pill search text-secondary"--}}
{{--                           name="searchInput" value="" placeholder="search..." aria-label="search..."--}}
{{--                           aria-describedby="button-addon2">--}}
{{--                    <button class="btn btn-primary rounded-circle ms-1" type="submit" name="searchButton"--}}
{{--                            id="button-addon2">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20"--}}
{{--                             fill="currentColor" class="bi bi-search" viewBox="0 0 16 18">--}}
{{--                            <path--}}
{{--                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--                @auth--}}
{{--                    <p>{{ auth()->user()->name }}</p>--}}
{{--                @else--}}
{{--                    <a href="#">Testing</a>--}}
{{--                @endauth--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
<section>
    <div class="container">
        <div class="row g-0">
            <div class="col-2">
                <nav class="nav flex-column side-nav">
                    <a class="nav-link px-3 my-1 hstack gap-2 {{ Request::segment(1) === 'list-film' ? 'active-page' : '' }}"
                       aria-current="page"
                       href="{{ route('landing-page') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" fill="currentColor"
                             class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg>
                        Home</a>
                    <a class="nav-link px-3 my-1 hstack gap-2 {{ Request::segment(1) === 'film' ? 'active-page' : '' }}"
                       href="{{ route('film') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" fill="currentColor"
                             class="bi bi-camera-video" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z"/>
                        </svg>
                        Film</a>
                    <hr class="line">
                    <a class="nav-link px-3 my-1 hstack gap-2 {{ Request::segment(1) === 'about' ? 'active-page' : '' }}"
                       href="{{ route('about') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" fill="currentColor"
                             class="bi bi-info-circle text-center" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                        About</a>
                </nav>
            </div>
            <div class="col-md-10">
                @yield('content')
            </div>
        </div>
        <nav class="navbar responsive-tabs fixed-bottom navbar-light bg-light">
            <div class="container-fluid">
                <a class="nav-link px-2 my-1 mx-3 vstack gap-1 align-items-center {{ Request::segment(1) === 'list-film' ? 'active-page' : '' }}"
                   aria-current="page"
                   href="{{ route('landing-page') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" fill="currentColor"
                         class="bi bi-house-door" viewBox="0 0 16 16">
                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                    </svg>
                    Home</a>
                <a class="nav-link px-2 my-1 mx-3 vstack gap-1 align-items-center {{ Request::segment(1) === 'film' ? 'active-page' : '' }}"
                   href="{{ route('film') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" fill="currentColor"
                         class="bi bi-camera-video" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z"/>
                    </svg>
                    Film</a>
                <hr class="line">
                <a class="nav-link px-2 my-1 mx-3 vstack gap-1 align-items-center {{ Request::segment(1) === 'about' ? 'active-page' : '' }}"
                   href="{{ route('about') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" fill="currentColor"
                         class="bi bi-info-circle text-center" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                    About</a>
            </div>
        </nav>
    </div>
</section>
<div class="card mt-4">
    <div class="card-body mt-3">
        <p class="text-center text-secondary copyright">Copyright © Refi Ahmad Fauzan (2022)</p>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>

</body>

</html>
