@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <p class="indicateNav shadow-sm" style="margin:1% 7%;"><a class="text-muted" href="{{ url('/')  }}"> Home</a> > Order</p>
        <div class="row">
<div class="col-md-1"></div>

            <div class="col-md-10">
                <br>
                   <h5 class="text-center">Thank you For Your Purchase!</h5>
                <h5 class="text-center">Your order will be shipped as soon as possible.</h5>
                <br><br><br><br><br>

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection
