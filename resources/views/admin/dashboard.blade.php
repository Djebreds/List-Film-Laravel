@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')
    <h2>Dashboard</h2>
    <div class="dahsboard">
        <div class="row">
            <div class="col">
                <div class="card mt-4 border border-4 border-end-0 border-top-0 border-bottom-0 border-primary shadow  mb-2 bg-body rounded"
                    style="max-width: 18rem;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="status-film">
                                    <h6 class="card-title count">COUNT DATA FILMS</h6>
                                    <p class="status">Films</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <img src="assets/img/All.png" width="30px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mt-4 border border-4 border-end-0 border-top-0 border-bottom-0 border-success shadow  mb-2 bg-body rounded"
                    style="max-width: 18rem;">
                    <div class="card-body text-success">
                        <div class="row">
                            <div class="col-9">
                                <div class="status-film">
                                    <h6 class="card-title count">COUNT DATA GENRES</h6>
                                    <p class="status">Genres</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <img src="assets/img/action.png" width="30px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mt-4 border border-4 border-end-0 border-top-0 border-bottom-0 border-warning shadow  mb-2 bg-body rounded"
                    style="max-width: 18rem;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="status-film">
                                    <h6 class="card-title count">COUNT DATA PRODUCTIONS</h6>
                                    <p class="status"> Productions</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <img src="assets/img/company.png" width="30px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mt-4 border border-4 border-end-0 border-top-0 border-bottom-0 border-info shadow  mb-2 bg-body rounded"
                    style="max-width: 18rem;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="status-film">
                                    <h6 class="card-title count">COUNT DATA DIRECTORS</h6>
                                    <p class="status"> Directors</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <img src="assets/img/directors.png" width="30px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
                <div class="card mt-4 shadow  mb-2 bg-body rounded" style="max-width: 60rem;">
                    <div class="card-header">
                        <a href="maintable-panel.php" class="title-card">Data Film</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-sm tabel   ">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Production</th>
                                <th scope="col">Release Date</th>
                                <th scope="col">Director</th>
                            </tr>
                            @foreach ($films as $index => $film)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $film->title }}</td>
                                    <td>{{ $film->genre_name }}</td>
                                    <td>{{ $film->name_production }}</td>
                                    <td>{{ $film->release_date }}</td>
                                    <td>{{ $film->name_director }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-3">
                <div class="card mt-4 shadow  mb-2 bg-body rounded" style="max-width: 60rem;">
                    <div class="card-header">
                        <a href="directortable-panel.php" class="title-card">Data Directors</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-sm tabel">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name </th>
                                <th scope="col">About</th>
                            </tr>
                            @foreach ($directors as $index => $director)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $director->name_director }}</td>
                                    <td><a href="director-detail.php?id=" class="text-primary"
                                            style="text-decoration: none;">Detail</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card mt-4 shadow  mb-2 bg-body " style="max-width: 60rem;">
                    <div class="card-header">
                        <a href="filmtable-panel.php" class="title-card">Data Genre</a>
                    </div>
                    <div class="card-body">
                        <div>
                            <canvas id="myChart" width="500px" height="230px"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="card mt-4 shadow  mb-2 bg-body rounded" style="max-width: 60rem;">
                    <div class="card-header">
                        <a href="productiontable-panel.php" class="title-card">Data Productions</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-sm tabel   ">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name Company</th>
                                <th scope="col">Founded Date</th>
                            </tr>
                            @foreach ($productions as $index => $production)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $production->name_production }}</td>
                                    <td>{{ $production->founded_date }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
