@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <p class="indicateNav shadow-sm" style="margin:1% 7%;">  <a class="text-muted" href="{{ url('/')  }}"> Home</a> > Register</p>
    <div class="row" style="margin:2% 6%;">
        <div class="col-md-4">
            <form method="POST" action="/auth/register">
            <h4 class="text-center alert-light">Create a new account.</h4>
            <hr />
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input name="email" class="form-control" type="text" placeholder="Email" />

            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                </div>
                <input name="username" class="form-control" type="text" placeholder="User name" />

            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
                </div>
                <input name="phoneNumber" class="form-control" type="text" placeholder="Phone number" />

            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-home"></i></span>
                </div>
                <input name="address" class="form-control" placeholder="Address" />

            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                </div>
                <input name="password" class="form-control" placeholder="Password" type="password"/>

            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                </div>
                <input name="confirmPassword" class="form-control" placeholder="Confirm password" type="password"/>

            </div>
            <div class="form-group text-center mb-3">
                <button type="submit" class="btn btn-info" style="width:100%;">Create your account</button>
            </div>
            </form>
        </div>
        <div class="col-md-8">
            <div class="card align-item-center mt-3" style="padding:0.5%;">
                <img src="{{ asset('images/main/somethinggood.png') }}" alt="join us" class="img-fluid"/>
            </div>
        </div>
    </div>
</div>



@endsection