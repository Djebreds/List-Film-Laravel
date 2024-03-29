<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Author: Refi Ahmad Fauzan , This page for landing page">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('assets/img/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('assets/img/favicon.ico') }}">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-public-user.css') }}">

    <title>@yield('title')</title>
</head>

<body>

{{-- nav-bar lg --}}
<nav class="navbar navbar-dark fixed-top ">
    <div class="container">
        <a class="navbar-brand fw-bold me-auto hstack gap-2" style="color: #428af5" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" fill="#428af5" class="mb-2"
                 viewBox="0 0 512 512">
                <path
                        d="M463.1 32h-416C21.49 32-.0001 53.49-.0001 80v352c0 26.51 21.49 48 47.1 48h416c26.51 0 48-21.49 48-48v-352C511.1 53.49 490.5 32 463.1 32zM111.1 408c0 4.418-3.582 8-8 8H55.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8L111.1 408zM111.1 280c0 4.418-3.582 8-8 8H55.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8V280zM111.1 152c0 4.418-3.582 8-8 8H55.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8L111.1 152zM351.1 400c0 8.836-7.164 16-16 16H175.1c-8.836 0-16-7.164-16-16v-96c0-8.838 7.164-16 16-16h160c8.836 0 16 7.162 16 16V400zM351.1 208c0 8.836-7.164 16-16 16H175.1c-8.836 0-16-7.164-16-16v-96c0-8.838 7.164-16 16-16h160c8.836 0 16 7.162 16 16V208zM463.1 408c0 4.418-3.582 8-8 8h-47.1c-4.418 0-7.1-3.582-7.1-8l0-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8V408zM463.1 280c0 4.418-3.582 8-8 8h-47.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8V280zM463.1 152c0 4.418-3.582 8-8 8h-47.1c-4.418 0-8-3.582-8-8l0-48c0-4.418 3.582-8 7.1-8h47.1c4.418 0 8 3.582 8 8V152z"/>
            </svg>
            Film-List
        </a>
        @auth
            <div class="login-sm hstack gap-2">
                <a id="link"
                   class="text-primary text-decoration-none fw-bold hstack gap-2" style="font-size: 14px">
                    <div class="btn-group profile">
                        <a class="dropdown-toggle drop" data-bs-toggle="dropdown"
                           data-bs-display="static" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item hstack gap-2" href="{{ route('profile') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>
                                    Profile</a></li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <li>
                                    <button class="dropdown-item hstack gap-2" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" fill="currentColor"
                                             viewBox="0 0 512 512">
                                            <path d="M288 256C288 273.7 273.7 288 256 288C238.3 288 224 273.7 224 256V32C224 14.33 238.3 0 256 0C273.7 0 288 14.33 288 32V256zM80 256C80 353.2 158.8 432 256 432C353.2 432 432 353.2 432 256C432 201.6 407.3 152.9 368.5 120.6C354.9 109.3 353 89.13 364.3 75.54C375.6 61.95 395.8 60.1 409.4 71.4C462.2 115.4 496 181.8 496 255.1C496 388.5 388.5 496 256 496C123.5 496 16 388.5 16 255.1C16 181.8 49.75 115.4 102.6 71.4C116.2 60.1 136.4 61.95 147.7 75.54C158.1 89.13 157.1 109.3 143.5 120.6C104.7 152.9 80 201.6 80 256z"/>
                                        </svg>
                                        Logout
                                    </button>
                                </li>
                            </form>
                        </ul>
                    </div>
                    <img src="{{ URL::asset('assets/img/avatar.png') }}"
                         class="rounded-circle" alt="profile-picture" width="25">
                </a>
            </div>
        @else
            <div class="hstack gap-3 login-sm">
                <a href="{{ route('login') }}" class="text-primary text-decoration-none">Login</a>
                <div class="vr align-self-center " style="height: 25px; "></div>
                <a href="{{ route('register') }}" class="text-primary text-decoration-none">Register</a>
            </div>
        @endauth
        <form action="" method="POST" class="search-input">
            <div class="inner-addon left-addon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="#428af5" class="bi bi-search"
                     viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                <input type="text"
                       class="form-control form-control-sm search rounded-pill border-0 "
                       name="search" id="search" value="{{ request('search') }}" size="40">
            </div>
        </form>
        @auth
            <div class="hstack gap-2 login-lg">
                <a id="link"
                   class="text-primary text-decoration-none fw-bold hstack gap-2" style="font-size: 14px">
                    <div class="btn-group profile">
                        <a class="dropdown-toggle drop text-primary" data-bs-toggle="dropdown"
                           data-bs-display="static" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item hstack gap-2" href="{{ route('profile') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>
                                    Profile</a></li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <li>
                                    <button class="dropdown-item hstack gap-2" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" fill="currentColor"
                                             viewBox="0 0 512 512">
                                            <path d="M288 256C288 273.7 273.7 288 256 288C238.3 288 224 273.7 224 256V32C224 14.33 238.3 0 256 0C273.7 0 288 14.33 288 32V256zM80 256C80 353.2 158.8 432 256 432C353.2 432 432 353.2 432 256C432 201.6 407.3 152.9 368.5 120.6C354.9 109.3 353 89.13 364.3 75.54C375.6 61.95 395.8 60.1 409.4 71.4C462.2 115.4 496 181.8 496 255.1C496 388.5 388.5 496 256 496C123.5 496 16 388.5 16 255.1C16 181.8 49.75 115.4 102.6 71.4C116.2 60.1 136.4 61.95 147.7 75.54C158.1 89.13 157.1 109.3 143.5 120.6C104.7 152.9 80 201.6 80 256z"/>
                                        </svg>
                                        Logout
                                    </button>
                                </li>
                            </form>
                        </ul>
                    </div>
                    <img src="{{ URL::asset('assets/img/avatar.png') }}"
                         class="rounded-circle" width="25">
                </a>
            </div>
        @else
            <div class="hstack gap-3 login-lg ms-4">
                <a href="{{ route('login') }}" class="text-decoration-none" style="color: #428af5">Login</a>
                <div class="vr align-self-center " style="height: 25px; color: #6b7280"></div>
                <a href="{{ route('register') }}" class="text-decoration-none" style="color: #428af5">Register</a>
            </div>
        @endauth
    </div>
</nav>

{{-- nav-bar sm --}}
<section class="container" style="margin-top: 100px">
    <div class="row g-0">
        <div class="col-2 responsive-content">
            <aside>
                <nav class="nav flex-column side-nav">
                    <a class="nav-link px-3 my-1 hstack gap-2 {{ Request::segment(1) === 'home' ? 'active-page' : '' }}"
                       aria-current="page"
                       href="{{ route('home') }}">
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                             class="bi bi-newspaper" viewBox="0 0 16 16">
                            <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                            <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                        </svg>
                        Blog</a>
                    <a class="nav-link px-3 my-1 hstack gap-2 {{ Request::segment(1) === 'about' ? 'active-page' : '' }}"
                       href="{{ route('about') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" fill="currentColor"
                             class="bi bi-info-circle text-center" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                        About</a>
                </nav>
            </aside>
        </div>
        <div class="col-md-12 col-lg-10 overflow-hidden">
            <main>
                <section>
                    @yield('content')
                </section>
            </main>
        </div>
    </div>
    {{--    nav-bar sm  --}}
    <aside>
        <nav class="navbar responsive-tabs fixed-bottom navbar-light bg-light">
            <div class="container-fluid">
                <a class="nav-link px-2 my-1 mx-3 vstack gap-1 align-items-center {{ Request::segment(1) === 'home' ? 'active-page' : '' }}"
                   aria-current="page"
                   href="{{ route('home') }}">
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
    </aside>
</section>

{{--footer--}}
<footer class="w-100 flex-shrink-0 mt-5 overflow-hidden" style="font-size: 12px">
    <div class="container py-4">
        <div class="row gy-4 gx-5">
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white fw-bold">Film-list</h5>
                <p class="text-small text-white">This website displays a list of movies from the newest to the most
                    popular along with their genres. This website also uses the latest technology.</p>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="text-white fw-bold">Languages</h5>
                <ul class="list-unstyled">
                    <li><a class="text-decoration-none text-white" target="_blank"
                           href="https://www.php.net/releases/8.1/en.php">
                            PHP 8.1.*
                            <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 ms-2" width="12"
                                 fill="currentColor" viewBox="0 0 448 512">
                                <path
                                        d="M384 32H64C28.65 32 0 60.66 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.66 419.3 32 384 32zM344 312c0 17.69-14.31 32-32 32s-32-14.31-32-32V245.3l-121.4 121.4C152.4 372.9 144.2 376 136 376s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L234.8 200H168c-17.69 0-32-14.31-32-32s14.31-32 32-32h144c17.69 0 32 14.31 32 32V312z"/>
                            </svg>
                        </a>
                    </li>
                    <li><a class="text-decoration-none text-white" target="_blank"
                           href="https://developer.mozilla.org/en-US/docs/Web/HTML">
                            HTML 5
                            <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 ms-2" width="12"
                                 fill="currentColor" viewBox="0 0 448 512">
                                <path
                                        d="M384 32H64C28.65 32 0 60.66 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.66 419.3 32 384 32zM344 312c0 17.69-14.31 32-32 32s-32-14.31-32-32V245.3l-121.4 121.4C152.4 372.9 144.2 376 136 376s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L234.8 200H168c-17.69 0-32-14.31-32-32s14.31-32 32-32h144c17.69 0 32 14.31 32 32V312z"/>
                            </svg>
                        </a>
                    </li>
                    <li><a class="text-decoration-none text-white" target="_blank" href="https://devdocs.io/css/">
                            CSS 3
                            <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 ms-2" width="12"
                                 fill="currentColor" viewBox="0 0 448 512">
                                <path
                                        d="M384 32H64C28.65 32 0 60.66 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.66 419.3 32 384 32zM344 312c0 17.69-14.31 32-32 32s-32-14.31-32-32V245.3l-121.4 121.4C152.4 372.9 144.2 376 136 376s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L234.8 200H168c-17.69 0-32-14.31-32-32s14.31-32 32-32h144c17.69 0 32 14.31 32 32V312z"/>
                            </svg>
                        </a>
                    </li>
                    <li><a class="text-decoration-none text-white" target="_blank"
                           href="https://www.javascript.com/learn/">
                            Javascript
                            <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 ms-2" width="12"
                                 fill="currentColor" viewBox="0 0 448 512">
                                <path
                                        d="M384 32H64C28.65 32 0 60.66 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.66 419.3 32 384 32zM344 312c0 17.69-14.31 32-32 32s-32-14.31-32-32V245.3l-121.4 121.4C152.4 372.9 144.2 376 136 376s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L234.8 200H168c-17.69 0-32-14.31-32-32s14.31-32 32-32h144c17.69 0 32 14.31 32 32V312z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="text-white fw-bold">Framework</h5>
                <ul class="list-unstyled">
                    <li><a class="text-decoration-none text-white" target="_blank"
                           href="https://laravel.com/docs/9.x">
                            Laravel 9
                            <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 ms-2" width="12"
                                 fill="currentColor" viewBox="0 0 448 512">
                                <path
                                        d="M384 32H64C28.65 32 0 60.66 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.66 419.3 32 384 32zM344 312c0 17.69-14.31 32-32 32s-32-14.31-32-32V245.3l-121.4 121.4C152.4 372.9 144.2 376 136 376s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L234.8 200H168c-17.69 0-32-14.31-32-32s14.31-32 32-32h144c17.69 0 32 14.31 32 32V312z"/>
                            </svg>
                        </a>
                    </li>
                    <li><a class="text-decoration-none text-white" target="_blank"
                           href="https://getbootstrap.com/docs/5.1/getting-started/introduction/">
                            Bootstrap 5
                            <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 ms-2" width="12"
                                 fill="currentColor" viewBox="0 0 448 512">
                                <path
                                        d="M384 32H64C28.65 32 0 60.66 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.66 419.3 32 384 32zM344 312c0 17.69-14.31 32-32 32s-32-14.31-32-32V245.3l-121.4 121.4C152.4 372.9 144.2 376 136 376s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L234.8 200H168c-17.69 0-32-14.31-32-32s14.31-32 32-32h144c17.69 0 32 14.31 32 32V312z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white fw-bold">About</h5>
                <p class="text-small text-white ">This website was created by Refi Ahmad Fauzan and was created on
                    04 April 2022 with PHP, HTML, CSS, Javascript and also with framework bootstrap and start
                    using laravel on 28 April 2022.</p>
            </div>
        </div>
    </div>
    <p class="text-small text-center text-white"><small>Copyright © Refi Ahmad Fauzan 2022</small></p>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</body>
</html>
