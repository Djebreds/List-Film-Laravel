@extends('layouts.main-admin')
@section('title', 'Detail Film')
@section('content')
    <div class="card mt-4 shadow  mb-2 bg-body rounded">
        <div class="card-header">
            <a href="#" class="title-card">Detail Film</a>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row m-3">
                    <div class="hstack gap-3">
                        <div class="col-3">
                            <img src="uploaded/" style="width: 250px; height: 375px" class="rounded image-detail" alt="">
                        </div>
                        <div class="vr "></div>
                        <div class="header-detail align-self-start">
                            <div class="col-12">
                                <p><span class="header-title">{{ $films->title }}</span></p>
                                <hr class="haer">
                                <p><span class="header-item">Genre: </span>{{ $films->genre_name }}</p>
                                <p><span class="header-item">Production: </span>{{ $films->name_production }}</p>
                                <p><span class="header-item">Director: </span>{{ $films->name_director }}</p>
                                <p><span class="header-item">Release:
                                    </span>{{ date('d M Y', strtotime($films->release_date)) }}
                                </p>
                                <p><span class="header-item">Trailer: </span><a class="text-decoration-none"
                                        href="{{ $films->trailer }}">{{ $films->trailer }}</a> </p>
                                <p><span class="header-item">Synopsis: </span></p>
                                <p>{{ $films->synopsis }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="hstack ">
                        <button type="button" class="btn btn-primary ms-auto" onclick="history.back()">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
