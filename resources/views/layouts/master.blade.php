<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/js/bootstrap.bundle.min.js') }}">
    <link rel="stylesheet" href="{{ asset('asset/js/custom.js') }}">
    <link rel="stylesheet" href="{{ asset('asset/js/tiny-slider.js') }}">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fuild" style="background-color: #3b5d50;height:400px">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <b style="font-size: 40px;color:white">Furni.</b>
                </div>
                <div class="col-10" style="margin-top: 20px">
                    <div class="row">
                        <div class="col-1">
                            <a class="navbar-brand" href="#">Home</a>
                        </div>
                        <div class="col-1">
                            <a class="navbar-brand" href="#">Shop</a>
                        </div>
                        <div class="col-1">
                            <a class="navbar-brand" href="#">About Us</a>
                        </div>
                        <div class="col-1">
                            <a class="navbar-brand" href="#">Services</a>
                        </div>
                        <div class="col-1">
                            <a class="navbar-brand" href="#">Blog</a>
                        </div>
                        <div class="col-1">
                            <a class="navbar-brand" href="#">Contact Us</a>
                        </div>
                        <div class="col-1">
                            <img src="{{asset('asset\images\shopping-cart.png')}}" alt="" style="width:20px">
                        </div>
                        <div class="col-1">
                            <img src="{{ asset('asset\images\user.svg') }}" style="width:20px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-5" style="margin-top:100px">
                    <b style="font-size: 50px;color:white"></b>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <div class="container-fuild" style="background-color:rgb(229, 232, 233)">
        <div class="container">
            @yield('about-us')
        </div>
    </div>
<div class="container">
    <footer>
        <div class="row">
            <div class="d-inline-flex">
                <img src="{{ asset('asset\images\mail.png') }}" alt="" style="width:20px;height:25px">
                <p>Subscribe to Newsletter  </p>
            </div>
            <div class="col-8">
                <div class="d-inline-flex">
                    <input type="text" name="" id="" placeholder="Enter Your name" style="border-radius:15px;width:300px;height:50px;margin-right:30px">
                    <input type="text" name="" id="" placeholder="Enter Your email" style="border-radius:15px;width:300px;height:50px;margin-right:30px">
                    <button style="border-radius:15px;background-color:green;margin-right:100px;height:50px"><img src="{{ asset('asset\images\submit.png') }}" alt=""  style="width:50px;height:25px" ></button>
                    <img src="{{ asset('asset/images/couch.png') }}" alt="" style="height:200px;margin-top:5px;margin-left:100px" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-inline-flex">
                <div>
                    <b>Furni.</b>
                    <br>
                    <pre>
    Donec facilisis quam ut purus rutrum lobortis.
    Donec vitae odio quis nisl dapibus malesuada. 
    Nullam ac aliquet velit. Aliquam vulputate velit 
    imperdiet dolor tempor tristique.
    Pellentesque habitant</pre>
    <img src="{{ asset('asset\images\person-1.jpg') }}" alt=""  style="border-radius:50%;width:30px">
    <img src="{{ asset('asset\images\person-1.jpg') }}" alt=""  style="border-radius:50%;width:30px">
    <img src="{{ asset('asset\images\person-1.jpg') }}" alt=""  style="border-radius:50%;width:30px">
    <img src="{{ asset('asset\images\person-1.jpg') }}" alt=""  style="border-radius:50%;width:30px">
                </div>
                <div>
                    <br>
                    <pre>
        Support
        Knowledge base
        Live chat
                    </pre>
                </div>
                <div>
                    <br>
                    <pre>
            Knowledge base
            Live chat
            Jobs
            Our team
            Leadership
            Privacy Policy
                    </pre>
                </div>
                <div>
                    <br>
                    <pre>
            Jobs
            Our team
            Leadership
            Privacy Policy
                    </pre>
                </div>
                <div>
                    <br>
                    <pre>
            About us
            Services
            Blog
            Contact us
                    </pre>
                </div>
                <div>
                    <br>
                    <pre>
            Nordic Chair
            Kruzo Aero
            Ergonomic Chair
                    </pre>  
                </div>
        </div>
        <hr>
        <div class="d-inline-flex">
            <p>Copyright ©2024. All Rights Reserved. — Designed with love by Untree.co Distributed By ThemeWagon</p>
            <pre>                            Terms & Conditions     Privacy Policy</pre>
        </div>
    </footer>
</div>
           
</body>

</html>
