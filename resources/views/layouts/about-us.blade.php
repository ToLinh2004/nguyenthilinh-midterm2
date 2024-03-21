@extends('layouts.master')
@section('title')
@section('content')
    <b style="font-size: 50px;color:white">About Us</b>
    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor
        tristique.</p>
    <div class="d-inline-flex">
        <button type="button" class="btn btn-warning" style="border-radius:20px;">Shop now</button>
        <button type="button" class="btn btn-success" style="border-radius:20px;margin-left:10px">Explore</button>
    </div>
    </div>
    <div class="col-7">
        <img src="{{ asset('asset/images/couch.png') }}" alt="" style="height:300px">
    </div>
@endsection

@section('about-us')
    <div class="row">
        <div class="col-7" style="padding-top:100px;">
            <b style="font-size: 40px;"> Why Choose Us</b>
            <br>
            <span>
                Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet
                dolor tempor tristique.
            </span>
        </div>
        <div class="row">
            <div class="col-3">
                <img src="{{ asset('asset\images\bowl-2.png') }}" alt="" style="width:50px;height:50px">
                <br>
                <b>Fast & Free Shipping</b>
                <br>
                <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
            </div>
            <div class="col-3">
                <img src="{{ asset('asset\images\bowl-2.png') }}" alt="" style="width:50px;height:50px">
                <br>
                <b>Easy to Shop</b>
                <br>
                <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
            </div>
            <div class="d-inline-flex">
                <div class="col-3">
                    <img src="{{ asset('asset\images\bowl-2.png') }}" alt="" style="width:50px;height:50px">
                    <br>
                    <b>Easy to Shop</b>
                    <br>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                </div>
                <div class="col-3">
                    <img src="{{ asset('asset\images\bowl-2.png') }}" alt="" style="width:50px;height:50px">
                    <br>
                    <b>Easy to Shop</b>
                    <br>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                </div>
            </div>
            <div class="col-6">
                {{-- <img src="{{ asset('asset\images\post-2.jpg') }}" alt="" style="height:300px"> --}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="{{ asset('asset\images\person_1.jpg') }}" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="{{ asset('asset\images\person_2.jpg') }}" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="{{ asset('asset\images\person_3.jpg') }}" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>
        </div>
        <div class="col-3">
            <div class="card" style="width:400px">
                <img class="card-img-top" src="{{ asset('asset\images\person_4.jpg') }}" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>
        </div>
    </div>
    <div class="row">
        <b style="text-align:center;padding-top:100px">
            Testimonials
        </b>
        <p style="text-align:center;width:1000px;padding-left:300px">“Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.”</p>
        <div style="text-align:center">
            <img src="{{ asset('asset\images\person-1.jpg') }}" alt=""  style="border-radius:50%;width:60px">
            <br>
            <b>Maria Jones</b>
            <br>
            <span>CEO, Co-Founder, XYZ Inc.</span>
        </div>
    </div>
@endsection


