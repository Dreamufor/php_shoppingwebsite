<style type="text/css">
    li.nav-item:hover {
        border: 1px solid #818182;
        border-radius: 5px;
    }

    li.nav-item {
        border: 1px solid transparent;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand align-item-center" href="{{ url('/')  }}"><i class="fa fa-gift" style="font-size:50px;"></i></a>
    <a class="navbar-brand align-item-center"><img src="{{ asset('images/main/title.png') }}" class="img-fluid" style="height:75px;" /></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar-collapse">
        <ul class="mr-auto navbar-nav ml-1">
            <li class="nav-item ml-1">
                <a class="nav-link" href="{{ url('/')  }}"><i class="fas fa-home mr-1"></i>Home</a>
            </li>
            <li class="nav-item ml-1 dropdown">
                <a class="nav-link dropdown-toggle" style="cursor:pointer;" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-gift mr-1"></i>Products</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a href="{{ url('/product/display')  }}" class="dropdown-item">
                        All Souvenirs
                    </a>
                    <a class="dropdown-item">
                        Maori Gifts
                    </a>
                    <a class="dropdown-item">
                        Mugs
                    </a>
                    <a class="dropdown-item">
                        T-Shirts
                    </a>
                    <a class="dropdown-item">
                        Home & Living
                    </a>
                    <a class="dropdown-item">
                        More...
                    </a>
                </div>
            </li>
            <li class="nav-item ml-1">
                <a class="nav-link" href="{{ url('/home/about') }}"><i class="fas fa-smile-wink mr-1"></i>About</a>
            </li>
            <li class="nav-item ml-1">
                <a class="nav-link" href="{{ url('/home/contact')  }}"><i class="fas fa-phone mr-1"></i>Contact us</a>
            </li>
            <li class="nav-item ml-1 dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" style="cursor:pointer;" data-toggle="dropdown">
                    @if(Session::has('cart')&&(Session::get('cart')->items!=null))
                        <i class="fas fa-shopping-cart mr-2"> </i>
                        Shopping Cart
                        <span class="ml-1 badge badge-pill badge-secondary">{{ Session::has('cart') ? Session::get('cart')->totalQuantity : '' }}</span></a>
                <div class="dropdown-menu bg-light">
                    <h5 class="pt-2 pb-2 text-dark text-center">My Shopping List</h5>
                    <div class="container-fluid" style="width:600px;height:auto;">
                        <table class="table ml-1 mr-1 table-sm">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Souvenir</th>
                                <th scope="col">Category</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach (Session::get('cart')->items as $item)
                                <tr>
                                    <th scope="row">
                                        {{$item['item']->id}}
                                    </th>
                                    <td>
                                        <img src="{{asset($item['item']->imgUrl)}}" class="card-img-top" style="width: 30px; height: auto;" alt="Souvenir Image">
                                    </td>
                                    <td><a class="alert-link alert-light">{{$item['item']->name}}</a></td>
                                    <td>{{$item['category']}}</td>
                                    <td>
                                        <a onclick="localStorage.setItem('display','inline')" class="alert-link alert-light"><i class="fas fa-minus mr-1"></i></a>
                                        {{$item['qty']}}
                                        <a onclick="localStorage.setItem('display','inline')" class="alert-link alert-light"><i class="fas fa-plus ml-1"></i></a>
                                    </td>
                                    <td>{{$item['item']->price}}</td>
                                    <td>{{($item['item']->price) * ($item['qty'])}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="float-right">
                            <table class="table table-borderless table-sm">
                                <tbody>
                                <tr>
                                    <th scope="row">SubTotal:</th>
                                    <td style="color:darkorange;" class="font-weight-bold">NZD$ {{(Session::get('cart')->totalPrice)-(Session::get('cart')->totalGST)}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">GST(15%):</th>
                                    <td style="color:darkorange;" class="font-weight-bold">NZD$ {{Session::get('cart')->totalGST}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">GrandTotal:</th>
                                    <td style="color:darkorange;" class="font-weight-bold">NZD$ {{Session::get('cart')->totalPrice}}</td>
                                </tr>
                                <tr>
                                    <td colspan="2">

                                        <a class="btn btn-outline-danger mr-4" >Clear Cart  <i class="fas fa-trash-alt"></i></a>


                                        <a href="{{ url('/order/create') }}" class="btn btn-outline-info" title="Create Order">
                                            Check Out<i class="fas fa-step-forward"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                        </div>
                     @endif
            </li>


            <li class="nav-item ml-1 dropdown">
                    <a class="nav-link dropdown-toggle" style="cursor:pointer;" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle mr-1"></i>Administrator</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('product')  }}">Souvenir</a>
                        <a class="dropdown-item" href="{{ url('category')  }}">Category</a>
                        <a class="dropdown-item" href="{{ url('supplier')  }}">Supplier</a>
                        <a class="dropdown-item" href="{{ url('order')  }}">Orders</a>
                        <a class="dropdown-item">Members</a>
                    </div>
                </li>

        </ul>
        <ul class="navbar-nav float-right">
            @if(!Auth::user())
            <li class="nav-item bg-light">
                <a class="nav-link mr-1 ml-1 font-weight-bold" href="{{ url('register')  }}"><i class="fas fa-envelope mr-1"></i>Register</a>
            </li>
            <li class="nav-item bg-light">
                <a class="nav-link mr-1 ml-1 font-weight-bold" href="{{ url('login')  }}"><i class="fas fa-user mr-1"></i>Log in</a>
            </li>
            @else
                <li class="nav-item ml-3 bg-light">
                    <a class="nav-link" title="Manage">Hello</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user mr-2"></i>My Account</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" title="Manage">
                            Profile
                        </a>
                            <a class="dropdown-item" >
                                Orders
                            </a>
                    </div>
                </li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <li class="nav-item bg-light alert-light">
                        <button type="submit" class="btn btn-link navbar-btn navbar-link alert-link font-weight-bold">Log out</button>
                    </li>
                </form>
            @endif
        </ul>
    </div>
</nav>
