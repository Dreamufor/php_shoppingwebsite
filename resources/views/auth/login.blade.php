@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <p class="indicateNav shadow-sm" style="margin:1% 7%;">  <a class="text-muted" href="{{ url('/')  }}"> Home</a> > Login</p>
    <div class="row" style="margin:2% 6%;">
        <div class="col-md-4">
            <section>
                <form action="/auth/login" method="POST" roles="form">
                <h4 class="text-center alert-light">Log in</h4>
                <hr />
                <div class="text-danger"></div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input id="email" class="form-control" type="text" placeholder="Email" />

                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                    </div>
                    <input id="password" class="form-control" placeholder="Password"/>

                </div>
                <div class="form-group text-center text-dark">
                    <div class="checkbox">
                        <label>
                            <input id="remember" type="checkbox" name="remember" value="1" />
                            Remember me
                        </label>
                    </div>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="width:100%;">Log in</button>
                </div>
                <div class="form-group text-center alert-light">
                    <p>
                        <a href="/auth/register" class="alert-link">Register as a new user?</a>
                    </p>
                </div>
                </form>
            </section>
        </div>
        <div class="col-md-8">
            <div class="card align-item-center" style="padding:0.5%;">
                <img src="{{ asset('images/main/showcase.jpg') }}" alt="showcase" class="img-fluid" />
            </div>
        </div>
    </div>
</div>

@endsection