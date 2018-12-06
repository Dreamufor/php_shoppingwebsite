<footer class="bg-light" style="margin:20px 0px -15px 0px;">
    <hr />
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-3">
                <h5>About us</h5>
                <hr />
                <ul class="alert-light list-unstyled bg-light">
                    <li><a class="alert-link font-weight-normal" href="{{ url('/home/about') }}">About us</a></li>
                    <li><a class="alert-link font-weight-normal" href="{{ asset('doc/web.pdf')  }}">Develop note</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Products</h5>
                <hr />
                <ul class="alert-light list-unstyled bg-light">
                    <li><a class="alert-link font-weight-normal" href="{{ url('/product/display/1') }}">Maori Gifts</a></li>
                    <li><a class="alert-link font-weight-normal" href="{{ url('/product/display/2') }}">Mugs</a></li>
                    <li><a class="alert-link font-weight-normal" href="{{ url('/product/display/3') }}">T-Shirts</a></li>
                    <li><a class="alert-link font-weight-normal" href="{{ url('/product/display/4') }}">Home & Living</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Services</h5>
                <hr />
                <ul class="alert-light list-unstyled bg-light">
                    <li><a class="alert-link font-weight-normal" href="{{ url('/home/contact')  }}">Shipping</a></li>
                    <li><a class="alert-link font-weight-normal" href="{{ url('/home/contact')  }}">Payment</a></li>
                    <li><a class="alert-link font-weight-normal" href="{{ url('/home/contact')  }}">Contact us</a></li>

                </ul>
            </div>
            <div class="col-md-3 text-center">
                <a href="{{ url('/')  }}">
                    <i class="fa fa-gift" style="font-size:75px;color:black;"></i><br />
                    <img src="{{ asset('images/main/title.png') }}" style="width:160px;" />
                </a>
                <div style="font-size:25px;">
                    <a href="https://www.facebook.com/" class="alert-light bg-light"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://www.twitter.com/" class="alert-light bg-light"><i class="fab fa-twitter-square"></i></a>
                    <a href="https://web.wechat.com/" class="alert-light bg-light"><i class="fab fa-weixin"></i></a>
                    <a href="https://www.weibo.com/" class="alert-light bg-light"><i class="fab fa-weibo"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center font-weight-light text-secondary">&copy; 2018 - Quality Souvenir</div>
    <div class="text-center font-weight-light text-secondary">Designer: Zhang Mengxue  |  StudentID: 1505166  |  ISCG7420 Web Application and Development </div>
</footer>