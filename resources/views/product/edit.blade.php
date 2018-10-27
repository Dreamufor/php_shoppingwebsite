@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <p class="indicateNav shadow-sm" style="margin:1% 7%;"><a class="text-muted" href="{{ url('/')  }}"> Home</a> > Product</p>
        <div class="row">

<div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Edit Product #{{ $product->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/product') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/product/' . $product->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('product.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection
