@extends('layouts.main-public')
<!-- <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card with stretched link</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
                    </div>
                </div>
            </div> -->
@section('content')
    <h5 class="top-film">Popular</h5>
    <hr class="line">
    <div class="row g-0 justify-content-center">

        <div class="col-4 m-1" style="width: 16rem">
            <div class="card mt-2 border border-0">
                <img src=" ../Views/assets/populer-" style="max-width: 256px; max-height: 128px"
                    class="rounded-3 card-img-top" alt="...">
                <div class="card-body">
                    <div class="card-title">
                        <a href="detail-film.php?id_film=" class="stretched-link">
                        </a>
                    </div>
                    <p class="card-item"> • </p>
                </div>
            </div>
        </div>

    </div>
    <h5 class="top-film">Upcoming Film</h5>
    <hr class="line">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row g-0 justify-content-center">

                        <div class="col-2 m-1 m-1" style="width: 9.1rem">
                            <div class="card border border-0">
                                <img src=" ../Views/uploaded/" style="width: 146px; height: 218px"
                                    class="rounded-3 card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-title">
                                        <a href="detail-film.php?id_film=" class="stretched-link"></a>
                                    </div>
                                    <p class="card-item"> •
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row g-0 justify-content-center">

                        <div class="col-2 m-1 m-1" style="width: 9.1rem">
                            <div class="card border border-0">
                                <img src=" ../Views/uploaded/" style="width: 146px; height: 218px"
                                    class="rounded-3 card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-title">
                                        <a href="detail-film.php?id_film=" class="stretched-link"></a>
                                    </div>
                                    <p class="card-item">
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute top-50 start-0 translate-middle next-1">
            <button class="carousel-control-prev next-1" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" fill="currentColor"
                    class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                    <path
                        d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                </svg>
            </button>
        </div>
        <div class="position-absolute top-50 start-100 translate-middle next-2">
            <button class="carousel-control-next next-2" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" fill="currentColor"
                    class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path
                        d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                </svg>
            </button>
        </div>
    </div>
    <h5 class="top-film">Recomended Film</h5>
    <hr class="line">
    <div class="row g-0">
        <div class="col-2 m-1 m-1" style="width: 9.1rem">
            <div class="card border border-0">
                <img src=" ../Views/uploaded/" style="width: 146px; height: 218px" class="rounded-3 card-img-top" alt="...">
                <div class="card-body">
                    <div class="card-title">
                        <a href="detail-film.php?id_film=" class="stretched-link">
                        </a>
                    </div>
                    <p class="card-item"><span class="date"></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
