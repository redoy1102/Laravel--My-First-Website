@extends('layout.app')
@section('titleKey','home')

@section('content')

    <div class="container-fluid parallax">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 text-center top-div">
                <h1 class="text-white">Software Engineer</h1>
                <h2 class="text-white">Google</h2>
                <button class="btn btn-primary">Learn more</button>
            </div>
        </div>
    </div>








    <div class="container">
        <div class="row mt-5 text-center">
            <h2 class="mb-5">My services</h2>
            <div class="col-md-3 p-1">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('images/1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">E-commerece Website</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 p-1">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('images/1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Frontend Design</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 p-1">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('images/1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">YouTube Matketing</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 p-1">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('images/1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Facebook Matketing</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <div class="container">
        <div class="row mt-5 text-center">
            <h2 class="mb-5">My Recent Projects</h2>

            <div class="col-md-3 p-1">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('images/1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">UCC</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 p-1">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('images/1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Byjus</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 p-1">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('images/1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">YouTube Matketing</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 p-1">
                <div class="card" style="width: 100%;">
                    <img src="{{asset('images/1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Facebook Matketing</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <div class="container">
        <div class="row mt-5 text-center">
            <h2 class="mb-5">Contact With Me</h2>
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
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.9789311092504!2d90.4089818149358!3d23.890365784520625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c44ce74a983b%3A0x75f8fd54d3910ae!2sMirashpara%20Mosjid%20Rd%2C%20Tongi!5e0!3m2!1sen!2sbd!4v1623259720877!5m2!1sen!2sbd"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>







@endsection
