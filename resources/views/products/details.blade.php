@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-header">
                    Quality Souvenir
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-fluid" src="{{ asset( $products->imageUrl) }}" alt="Souvenir Image">
                        </div>
                        <div class="col-md-6">
                            <div>
                                <a class="alert-light alert-link float-right" title="Add to cart"><i class="fa fa-cart-plus" style="font-size:30px;"></i></a>
                            </div>
                            <dl class="dl-horizontal mt-5">
                                <dt>
                                    Name
                                </dt>
                                <dd>
                                    {{ $products->name }}
                                </dd>
                                <dt>
                                    Price
                                </dt>
                                <dd>
                                    <span class="font-weight-bold" style="color:orange">NZD ${{ $products->price }}</span>
                                </dd>
                                <dt>
                                    Description
                                </dt>
                                <dd>
                                    {{ $products->description }}
                                </dd>
                            </dl>
                            <div class="mt-5">
                                <a class="float-right btn btn-outline-secondary">
                                    Back to products
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

@endsection