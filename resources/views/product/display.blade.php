@extends('layouts.app')

@section('content')

    <style>
        div.card
        {
            overflow: hidden;
        }

        div.card img
        {
            -webkit-transform: scale(1.0);
            -webkit-transition: 1s;
        }

        div.card img:hover
        {
            -webkit-transform: scale(1.2);
        }

        li.list-group-item:hover {
            background-color: #f8f9fa;
            font-weight:bold;
            text-align:center;
        }


    </style>
    <div class="container-fluid">
        <p class="indicateNav shadow-sm" style="margin:1% 7%;"><a class="text-muted" href="{{ url('/')  }}"> Home</a> > Products</p>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <div class="card mt-5">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item alert-light">
                                <a class="alert-light font-weight-normal bg-transparent" href="{{ url('/product/display') }}">All Souvenirs</a>
                            </li>
                            @foreach ($category as $c)
                                <li class="list-group-item alert-light">
                                    <a class="alert-link font-weight-normal bg-transparent" href="{{ route('display', ['id' => $c -> id]) }}">
                                        {{$c->name}}
                                    </a>
                                </li>
                             @endforeach
                        </ul>
                </div>

                <div class="card mt-3">
                    <div class="card-header">
                        <div class="alert-light bg-light">Search Price</div>
                    </div>
                    <div class="card-body">
                        <form method="get">
                            <div class="input-group w-auto">
                                <input type="number" class="form-control" placeholder="$0" value="{{old('minPrice')}}" name="minPrice"/>
                                <div class="input-group-prepend text-center">
                                    <span class="input-group-text">~</span>
                                </div>
                                <input type="number" class="form-control" placeholder="$0" value="{{old('maxPrice')}}"  name="maxPrice"/>
                            </div>
                            <button type="submit" class="btn btn-outline-secondary mt-3 mr-4 ml-4 w-75"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">

                <div class="float-right mt-1">
                    <form method="get">
                        <div class="input-group mb-2 alert-light">
                            <input type="text" class="form-control" placeholder="Search by name" name="search">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="submit" value="search"><i class="fas fa-search"></i></button>
                            </div>
                            {{--<a class="alert-light alert-link font-weight-normal ml-4 mt-1">--}}
                            {{--Name--}}
                            {{--<i class="fas fa-sort"></i>--}}
                            {{--</a>--}}
                            {{--<a class="alert-light alert-link font-weight-normal ml-4 mt-1">--}}
                            {{--Price--}}
                            {{--<i class="fas fa-sort"></i>--}}
                            {{--</a>--}}
                        </div>
                    </form>
                </div><br />
                <hr class="mt-4 ml-4" />
                <div class="row">
                    @foreach ($product as $p)
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <div class="card pb-1">
                                <img class="card-img-top img-fluid" style="width: 100%; height: auto;" src="{{ asset($p->imgUrl)}}" alt="Souvenir Image">
                                <div class="card-body">
                                    <div>
                                        <a class="alert-link alert-light" href="{{ url('/product/' . $p->id) }}">{{$p->name}}</a>
                                    </div>
                                    <br />
                                    <span class="font-weight-bold" style="color:orange">NZD$ {{$p->price}}</span>
                                    <a href="{{ route('product.addToCart', ['id' => $p -> id]) }}" class="alert-light alert-link float-right" title="Add to cart"><i class="fa fa-cart-plus" style="font-size:30px;"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                </div>

                <div class="pagination-wrapper"> {!! $product->appends(['search' => Request::get('search')])->render() !!} </div>

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

@endsection