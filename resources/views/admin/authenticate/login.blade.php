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
    <title>Login</title>

<body style="background-image: url('{{ URL::asset('assets/img/wave.svg') }}'); font-family: 'Nunito', sans-serif;">

    <nav class="navbar navbar-dark fixed-top " style="background: #0d6efd;">
        <div class="container ">
            <a class="navbar-brand fw-bold" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="mb-2" width="27" fill="#fff"
                    viewBox="0 0 512 512">
                    <path
                        d="M463.1 32h-416C21.49 32-.0001 53.49-.0001 80v352c0 26.51 21.49 48 47.1 48h416c26.51 0 48-21.49 48-48v-352C511.1 53.49 490.5 32 463.1 32zM111.1 408c0 4.418-3.582 8-8 8H55.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8L111.1 408zM111.1 280c0 4.418-3.582 8-8 8H55.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8V280zM111.1 152c0 4.418-3.582 8-8 8H55.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8L111.1 152zM351.1 400c0 8.836-7.164 16-16 16H175.1c-8.836 0-16-7.164-16-16v-96c0-8.838 7.164-16 16-16h160c8.836 0 16 7.162 16 16V400zM351.1 208c0 8.836-7.164 16-16 16H175.1c-8.836 0-16-7.164-16-16v-96c0-8.838 7.164-16 16-16h160c8.836 0 16 7.162 16 16V208zM463.1 408c0 4.418-3.582 8-8 8h-47.1c-4.418 0-7.1-3.582-7.1-8l0-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8V408zM463.1 280c0 4.418-3.582 8-8 8h-47.1c-4.418 0-8-3.582-8-8v-48c0-4.418 3.582-8 8-8h47.1c4.418 0 8 3.582 8 8V280zM463.1 152c0 4.418-3.582 8-8 8h-47.1c-4.418 0-8-3.582-8-8l0-48c0-4.418 3.582-8 7.1-8h47.1c4.418 0 8 3.582 8 8V152z" />
                </svg> Film-List
            </a>
            <div class="link ms-auto ">
                <a href="{{ url('/list-film') }}" class="text-white text-decoration-none fs-6 fw-bold ">
                    Public views <svg xmlns="http://www.w3.org/2000/svg" class="mb-2" width="18"
                        fill="currentColor" viewBox="0 0 512 512">
                        <path
                            d="M384 320c-17.67 0-32 14.33-32 32v96H64V160h96c17.67 0 32-14.32 32-32s-14.33-32-32-32L64 96c-35.35 0-64 28.65-64 64V448c0 35.34 28.65 64 64 64h288c35.35 0 64-28.66 64-64v-96C416 334.3 401.7 320 384 320zM488 0H352c-12.94 0-24.62 7.797-29.56 19.75c-4.969 11.97-2.219 25.72 6.938 34.88L370.8 96L169.4 297.4c-12.5 12.5-12.5 32.75 0 45.25C175.6 348.9 183.8 352 192 352s16.38-3.125 22.62-9.375L416 141.3l41.38 41.38c9.156 9.141 22.88 11.84 34.88 6.938C504.2 184.6 512 172.9 512 160V24C512 10.74 501.3 0 488 0z" />
                    </svg>
                </a>
            </div>
        </div>
    </nav>

    <section class="w-100 py-4 flex-shrink-0">
        <div class="container">
            <h4 class="text-center text-white" style="margin-top: 5rem">Welcome back Admin!</h4>
            <div class="row g-0 justify-content-center">
                <div class="card shadow bg-body mt-4 border-0" style="width: 45rem;">
                    <div class="card-body m-4">
                        <div class="row">
                            <div class="col-lg-7 col-md-6">
                                <form action="" method="POST">
                                    <h4 class="text-center">Login</h4>
                                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor"
                                            class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2"
                                            viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                            <path
                                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </svg>
                                        <div>
                                            An example alert with an icon
                                        </div>
                                    </div>
                                    <label for="username" class="form-label">Username</label>
                                    <div class="mb-2 inner-addon left-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" fill="#6b9fed"
                                            viewBox="0 0 448 512">
                                            <path
                                                d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z" />
                                        </svg>
                                        <input type="text" class="form-control form-control-sm rounded-pill"
                                            name="username" id="username" value="" required>
                                    </div>

                                    <label for="password" class="form-label">Password</label>
                                    <div class="mb-2 inner-addon left-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" fill="#69a1f5"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M282.3 343.7L248.1 376.1C244.5 381.5 238.4 384 232 384H192V424C192 437.3 181.3 448 168 448H128V488C128 501.3 117.3 512 104 512H24C10.75 512 0 501.3 0 488V408C0 401.6 2.529 395.5 7.029 391L168.3 229.7C162.9 212.8 160 194.7 160 176C160 78.8 238.8 0 336 0C433.2 0 512 78.8 512 176C512 273.2 433.2 352 336 352C317.3 352 299.2 349.1 282.3 343.7zM376 176C398.1 176 416 158.1 416 136C416 113.9 398.1 96 376 96C353.9 96 336 113.9 336 136C336 158.1 353.9 176 376 176z" />
                                        </svg>
                                        <input type="password" class="form-control form-control-sm rounded-pill"
                                            name="password" id="password" value="" required>
                                    </div>
                                    <div class="vstack">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Remember me
                                            </label>
                                        </div>
                                        <button type="submit"
                                            class="btn btn-primary shadow rounded-pill my-2">Login</button>
                                        <p class="register text-center">Don't have an account? <a
                                                href="{{ url('/register') }} "> Register here.</a></p>

                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-5 col-md-6 intro">
                                <h4 class="text-center">Here we go again!</h4>
                            </div>
                        </div>
                    </div>

                    <svg class="svg-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                        <path fill="#0099ff" fill-opacity="1"
                            d="M0,224L24,218.7C48,213,96,203,144,181.3C192,160,240,128,288,96C336,64,384,32,432,37.3C480,43,528,85,576,96C624,107,672,85,720,101.3C768,117,816,171,864,202.7C912,235,960,245,1008,213.3C1056,181,1104,107,1152,112C1200,117,1248,203,1296,245.3C1344,288,1392,288,1416,288L1440,288L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
                        </path>
                    </svg>
                    <img class="svg-3" src="{{ URL::asset('assets/img/home-img.png') }}" width="40%" alt="">
                </div>
            </div>
        </div>
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
                                PHP 8.1.* <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 ms-2" width="12"
                                    fill="currentColor" viewBox="0 0 448 512">
                                    <path
                                        d="M384 32H64C28.65 32 0 60.66 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.66 419.3 32 384 32zM344 312c0 17.69-14.31 32-32 32s-32-14.31-32-32V245.3l-121.4 121.4C152.4 372.9 144.2 376 136 376s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L234.8 200H168c-17.69 0-32-14.31-32-32s14.31-32 32-32h144c17.69 0 32 14.31 32 32V312z" />
                                </svg>
                            </a>
                        </li>
                        <li><a class="text-decoration-none text-white" target="_blank"
                                href="https://developer.mozilla.org/en-US/docs/Web/HTML">
                                HTML 5 <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 ms-2" width="12"
                                    fill="currentColor" viewBox="0 0 448 512">
                                    <path
                                        d="M384 32H64C28.65 32 0 60.66 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.66 419.3 32 384 32zM344 312c0 17.69-14.31 32-32 32s-32-14.31-32-32V245.3l-121.4 121.4C152.4 372.9 144.2 376 136 376s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L234.8 200H168c-17.69 0-32-14.31-32-32s14.31-32 32-32h144c17.69 0 32 14.31 32 32V312z" />
                                </svg>
                            </a>
                        </li>
                        <li><a class="text-decoration-none text-white" target="_blank" href="https://devdocs.io/css/">
                                CSS 3 <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 ms-2" width="12"
                                    fill="currentColor" viewBox="0 0 448 512">
                                    <path
                                        d="M384 32H64C28.65 32 0 60.66 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.66 419.3 32 384 32zM344 312c0 17.69-14.31 32-32 32s-32-14.31-32-32V245.3l-121.4 121.4C152.4 372.9 144.2 376 136 376s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L234.8 200H168c-17.69 0-32-14.31-32-32s14.31-32 32-32h144c17.69 0 32 14.31 32 32V312z" />
                                </svg>
                            </a>
                        </li>
                        <li><a class="text-decoration-none text-white" target="_blank"
                                href="https://www.javascript.com/learn/">
                                Javascript <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 ms-2" width="12"
                                    fill="currentColor" viewBox="0 0 448 512">
                                    <path
                                        d="M384 32H64C28.65 32 0 60.66 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.66 419.3 32 384 32zM344 312c0 17.69-14.31 32-32 32s-32-14.31-32-32V245.3l-121.4 121.4C152.4 372.9 144.2 376 136 376s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L234.8 200H168c-17.69 0-32-14.31-32-32s14.31-32 32-32h144c17.69 0 32 14.31 32 32V312z" />
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
                                Laravel 9 <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 ms-2" width="12"
                                    fill="currentColor" viewBox="0 0 448 512">
                                    <path
                                        d="M384 32H64C28.65 32 0 60.66 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.66 419.3 32 384 32zM344 312c0 17.69-14.31 32-32 32s-32-14.31-32-32V245.3l-121.4 121.4C152.4 372.9 144.2 376 136 376s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L234.8 200H168c-17.69 0-32-14.31-32-32s14.31-32 32-32h144c17.69 0 32 14.31 32 32V312z" />
                                </svg>
                            </a>
                        </li>
                        <li><a class="text-decoration-none text-white" target="_blank"
                                href="https://getbootstrap.com/docs/5.1/getting-started/introduction/">
                                Bootstrap 5 <svg xmlns="http://www.w3.org/2000/svg" class="mb-1 ms-2" width="12"
                                    fill="currentColor" viewBox="0 0 448 512">
                                    <path
                                        d="M384 32H64C28.65 32 0 60.66 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.66 419.3 32 384 32zM344 312c0 17.69-14.31 32-32 32s-32-14.31-32-32V245.3l-121.4 121.4C152.4 372.9 144.2 376 136 376s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L234.8 200H168c-17.69 0-32-14.31-32-32s14.31-32 32-32h144c17.69 0 32 14.31 32 32V312z" />
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
