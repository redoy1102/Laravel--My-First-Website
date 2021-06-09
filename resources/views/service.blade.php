@extends('layout.app')
@section('titleKey','service')


@section('content')

    <div class="container">
        <div class="row p-4 mb-4 bg-dark">
            <div class="col-md-12">
                <h4 class="text-white text-center">My Services</h4>
            </div>
        </div>
    </div>


<div class="container">
    <div class="row">
        <div class="col-md-3 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">E-commerece Website</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Frontend Design</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">YouTube Matketing</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Facebook Matketing</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- contact Form -->

    <div class="row mt-3">
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1">

                    <label for="exampleInputEmail1" class="form-label">Your Contact Number</label>
                    <input type="number" class="form-control" id="exampleInputEmail1">

                    <label for="exampleInputEmail1" class="form-label">Your Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" type="button">Submit</button>
                </div>
            </form>
        </div>

        <div class="col-md-6">
            <h3>Address</h3>
            <p>Mirashpara, Tongi-Gazipur, Dhaka-Bangladesh</p>
            <p>+8801621025110</p>
            <p>mdfuadulislamhridoy52@gmail.com</p>
        </div>
    </div>
</div>

@endsection
