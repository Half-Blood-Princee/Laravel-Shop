@extends('layouts.master')

<style>
    .carousel {
        width: 100%;
    }

    .carousel-item img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .pict img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        object-position: center top;
    }

    .pict-clock img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }
</style>
<body>
@section('content')
<!--Carusel-->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="pics/Carusel.jpg" class="d-block w-100" alt="No pic">
        </div>
        <div class="carousel-item">
            <img src="pics/Carusel2.jpg" class="d-block w-100" alt="No pic">
        </div>
        <div class="carousel-item">
            <img src="pics/Carusel3.jpg" class="d-block w-100" alt="No pic">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!--Card-->
<br>
@foreach($welcome as $catalog)
    <div class="card text-white bg-dark mb-3">
        <div class="pict">
            <img src="..." class="card-img-top" alt="pic">
        </div>
        <div class="card-body">
            <div class="d-grid gap-2">
                <a href="/{{$catalog->code}}" class="btn btn-outline-warning" role="button">{{$catalog->name}}</a>
            </div>
        </div>
    </div>
@endforeach

@endsection
