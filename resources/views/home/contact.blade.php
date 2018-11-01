@extends('layouts.app')
@section('title')
    Contact us
@endsection
@section('content')

    <div class="container-fluid">
        <p class="indicateNav shadow-sm" style="margin:1% 7%;">  <a class="text-muted" href="{{ url('/')  }}"> Home</a> > Contact</p>
        <div class="row" style="margin:2% 6%;">
            <div class="col-md-4">
                <div class="card" style="width: auto;height:100%;">
                    <div class="card-body">
                        <h3 class="card-title">Contact us</h3>
                        <h6 class="card-subtitle mb-2 text-muted">Quality Souvenir Ltd.</h6>
                        <address class="card-text">
                            139 Carrington Rd<br />
                            Mount Albert, Auckland 1025<br />
                            <div title="Phone">Number: 0800800800</div>

                        </address>
                        <address class="card-text alert-light">
                            <strong>Support:</strong><br /><a class="card-link alert-link text-info" href="mailto:Support@example.com">Support@qualitysouvenir.com</a><br />
                            <strong>Marketing:</strong><br /><a class="card-link alert-link text-info" href="mailto:Marketing@example.com">Marketing@qualitysouvenir.com</a>
                        </address>

                        <address class="card-text">
                            <i class="fas fa-truck"></i> <strong> Shipping: </strong> NZ Post <br />
                            <i class="fab fa-cc-paypal"></i><strong> Payment:</strong> Visa, MasterCard</a>
                        </address>

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card align-item-center" style="padding:0.5%;">
                    <div id="googleMap" style="width:100%;height:400px;"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(-36.8807505, 174.7077619),
                zoom: 15,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

            var marker = new google.maps.Marker({
                position: {
                    lat: -36.8807505,
                    lng: 174.7077619,
                },
                animation: google.maps.Animation.BOUNCE,
                map: map
            });
            marker.setMap(map);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxHGstFXNW9JwvOV6E4MLq46egqcFyqho&callback=myMap">
    </script>
@endsection