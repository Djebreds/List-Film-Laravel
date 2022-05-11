<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-admin-login.css') }}">
    <title>@yield('title')</title>

<body style="background-image: url('{{ URL::asset('assets/img/wave.svg') }}'); font-family: 'Nunito', sans-serif;">

<nav class="navbar navbar-dark fixed-top " style="background: #0d6efd;">
    <div class="container ">
        <a class="navbar-brand fw-bold" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="mb-2" width="27" fill="#fff"
                 viewBox="0 0 512 512">
                <path
                        d="M463.1 32h-416C21.49 32-.0001 53.49-.0001 80v352c0 26.51 21.49 48 47.1 48h416c26.51 0 48-21.49 48-48v-352C511.1 53.49 490.5 32 463.1 32zM111.1 408c0 4.418-3.582 8-8 8H55.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8L111.1 408zM111.1 280c0 4.418-3.582 8-8 8H55.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8V280zM111.1 152c0 4.418-3.582 8-8 8H55.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8L111.1 152zM351.1 400c0 8.836-7.164 16-16 16H175.1c-8.836 0-16-7.164-16-16v-96c0-8.838 7.164-16 16-16h160c8.836 0 16 7.162 16 16V400zM351.1 208c0 8.836-7.164 16-16 16H175.1c-8.836 0-16-7.164-16-16v-96c0-8.838 7.164-16 16-16h160c8.836 0 16 7.162 16 16V208zM463.1 408c0 4.418-3.582 8-8 8h-47.1c-4.418 0-7.1-3.582-7.1-8l0-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8V408zM463.1 280c0 4.418-3.582 8-8 8h-47.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8V280zM463.1 152c0 4.418-3.582 8-8 8h-47.1c-4.418 0-8-3.582-8-8l0-48c0-4.418 3.582-8 7.1-8h47.1c4.418 0 8 3.582 8 8V152z"/>
            </svg>
            Film-List
        </a>
        <div class="link ms-auto ">
            <a href="{{ url('/list-film') }}" class="text-white text-decoration-none fs-6 fw-bold ">
                Public views
                <svg xmlns="http://www.w3.org/2000/svg" class="mb-2" width="18"
                     fill="currentColor" viewBox="0 0 512 512">
                    <path
                            d="M384 320c-17.67 0-32 14.33-32 32v96H64V160h96c17.67 0 32-14.32 32-32s-14.33-32-32-32L64 96c-35.35 0-64 28.65-64 64V448c0 35.34 28.65 64 64 64h288c35.35 0 64-28.66 64-64v-96C416 334.3 401.7 320 384 320zM488 0H352c-12.94 0-24.62 7.797-29.56 19.75c-4.969 11.97-2.219 25.72 6.938 34.88L370.8 96L169.4 297.4c-12.5 12.5-12.5 32.75 0 45.25C175.6 348.9 183.8 352 192 352s16.38-3.125 22.62-9.375L416 141.3l41.38 41.38c9.156 9.141 22.88 11.84 34.88 6.938C504.2 184.6 512 172.9 512 160V24C512 10.74 501.3 0 488 0z"/>
                </svg>
            </a>
        </div>
    </div>
</nav>


<section class="w-100 py-4 flex-shrink-0">
    @yield('content')
</section>

<footer class="w-100 flex-shrink-0 mt-5" style="font-size: 12px">
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
        <p class="text-small text-center text-white">Copyright © Refi Ahmad Fauzan 2022</p>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
</body>

</html>
