@extends('layouts.app')

@section('title')
    Quality Souvenir
@endsection


@section('content')
    <style>
        .image-list .image-cover {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .image-cover {
            opacity: 0;
            background: #000000;
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-cover:hover {
            opacity: 1;
            background: rgba(0, 0, 0, 0.5);
        }

        .rotateLeft {
            -ms-transform: rotate(-3deg); /* IE 9 */
            -moz-transform: rotate(-3deg); /* Firefox */
            -webkit-transform: rotate(-3deg); /* Safari and Chrome */
            -o-transform: rotate(-3deg); /* Opera */
        }

        .rotateRight {
            -ms-transform: rotate(3deg); /* IE 9 */
            -moz-transform: rotate(3deg); /* Firefox */
            -webkit-transform: rotate(3deg); /* Safari and Chrome */
            -o-transform: rotate(3deg); /* Opera */
        }
    </style>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="6000" style="margin:0px -15px 10px -15px;">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{ asset('images/main/slide-1.jpg') }}" alt="ASP.NET" style="width:100%;" />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/main/slide-2.jpg') }}" alt="Visual Studio" style="width:100%;" />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/main/slide-3.jpg') }}" alt="Microsoft Azure" style="width:100%;" />
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/main/slide-4.jpg') }}" alt="Microsoft Azure" style="width:100%;" />
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="text-center mt-2 mb-2">
        <span><img src="{{ asset('images/main/onsale.png') }}" style="height:40px;" /></span>
    </div>

    <div class="container">
        <div class="image-list row">
            <div class="col-md-3 col-sm-2 col-12 mt-3">
                <div class="card rotateRight">
                    <img class="card-img-top" src="{{ asset('images/products/homeandliving/ornament.jpg') }}">
                    <div class="image-cover">
                        <a href="{{ asset('') }}" class="btn btn-outline-light">Buy now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-2 col-12 mt-3">
                <div class="card rotateLeft">
                    <img class="card-img-top" src="{{ asset('images/products/homeandliving/coaster3.jpg') }}">
                    <div class="image-cover">
                        <a href="{{ asset('') }}" class="btn btn-outline-light">Buy now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-2 col-12 mt-3">
                <div class="card rotateRight">
                    <img class="card-img-top" src="{{ asset('images/products/homeandliving/wall-art1.jpg') }}">
                    <div class="image-cover">
                        <a href="{{ asset('') }}" class="btn btn-outline-light">Buy now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-2 col-12 mt-3">
                <div class="card rotateLeft">
                    <img class="card-img-top" src="{{ asset('images/products/homeandliving/coaster2.jpg') }}">
                    <div class="image-cover">
                        <a href="{{ asset('') }}" class="btn btn-outline-light">Buy now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection