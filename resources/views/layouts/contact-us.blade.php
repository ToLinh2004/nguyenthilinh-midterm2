@extends('layouts.master')
@section('content',{{$title}})
<b style="font-size: 50px;color:white">Contact Us</b>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                    <div class="d-inline-flex">
                        <button type="button" class="btn btn-warning" style="border-radius:20px;">Shop now</button>
                        <button type="button" class="btn btn-success" style="border-radius:20px;margin-left:10px">Explore</button>
                    </div>
                </div>
                <div class="col-7">
                        <img src="{{asset('asset/images/couch.png')}}" alt="" style="height:300px">
                </div>
@endsection
