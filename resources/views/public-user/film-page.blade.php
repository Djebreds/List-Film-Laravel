@extends('layouts.main-public')
@section('content')
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">

            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="false">Genre</button>

            <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab"
                aria-controls="home" aria-selected="false">Genre</button>

        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false">Date</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="tab-pane fade show " id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col">
                        <nav aria-label="...">
                            <ul class="pagination pagination-sm">
                                <div class="row g-2">
                                    <div class="col">
                                        <li class="page-item text-center"><a class="page-link m-1" href="?page=All "><img
                                                    src="../Views/assets/genre-pic/All.png" width="25px"
                                                    class="m-1" alt=""> All</a></li>
                                    </div>
                                    <div class="col">
                                        <li class="page-item text-center">
                                            <a class="page-link m-1" href="?page=">
                                                <img class="sticky-top m-1" src="../Views/assets/genre-pic/genre-.png"
                                                    width="25px" alt="">
                                            </a>
                                        </li>
                                        <li class="page-item text-center">
                                            <a class="page-link m-1" href="?page=">
                                                <img class="sticky-top m-1" src="../Views/assets/genre-pic/genre-.png"
                                                    width="25px" alt="">
                                            </a>
                                        </li>
                                    </div>
                                </div>
                            </ul>
                        </nav>
                    </div>
                </div>
                <hr>
                <div class="row g-0">
                    <div class="col-2 m-1" style="width: 9.1rem">
                        <div class="card border border-0">
                            <img src=" ../Views/uploaded/" style="width: 146px; height: 218px"
                                class="rounded-3 card-img-top" alt="...">
                            <div class="card-body">
                                <div class="card-title">
                                    <a href="detail-film.php?id_film=" class="stretched-link"> </a>
                                </div>
                                <p class="card-item"> • </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row">
                    <div class="col">
                        <nav aria-label="...">
                            <ul class="pagination pagination-sm">
                                <div class="row g-2">
                                    <?php for ($a = 2000; $a <= 2022; $a++) { ?>
                                    <div class="col">
                                        <?php if ($a == 2000) { ?>
                                        <li class="page-item text-center ">
                                            <a class="page-link m-1" style="font-size: 12px;" href="?page=0">All</a>
                                        </li>
                                        <?php } else { ?>
                                        <li class="page-item text-center">
                                            <a class="page-link m-1" style="font-size: 12px;" href="?page=0">All</a>
                                        </li>
                                        <?php } ?>
                                    </div>
                                    <?php } ?>
                                </div>
                            </ul>
                        </nav>
                    </div>
                </div>
                <hr>
                <div class="row g-0">
                    <div class="col-2 m-1" style="width: 9.1rem">
                        <div class="card border border-0">
                            <img src=" ../Views/uploaded/" style="width: 146px; height: 218px"
                                class="rounded-3 card-img-top" alt="...">
                            <div class="card-body">
                                <div class="card-title">
                                    <a href="detail-film.php?id_film=" class="stretched-link"> </a>
                                </div>
                                <p class="card-item"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
