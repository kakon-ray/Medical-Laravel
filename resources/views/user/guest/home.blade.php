@extends('layouts.user.master')
@section('title')
    {{ 'Home' }}
@endsection

@section('content')
    <!-- Start Header Slider Section -->
    <div class="slider-section">
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('guest/img/surgery-1822458.jpg') }}" class="d-block w-100 img-fluid"
                            alt="..." />
                        <div class="carousel-caption d-none d-md-block h3 bounce-top">
                            <h1 class="h1">First slide label</h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Amet, perferendis.
                            </p>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="{{route('user.appointment')}}"class="common-btn">Read More </a>
                                <a href="{{route('user.appointment')}}"class="common-btn"> Book Now </a>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('guest/img/successful-medical-team_329181-9252.jpg') }}"
                            class="d-block w-100 img-fluid" alt="..." />
                        <div class="carousel-caption d-none d-md-block h3 bounce-top">
                            <h1 class="h1">First slide label</h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Amet, perferendis.
                            </p>
                            <div class="d-flex justify-content-center align-items-center">
                              <a href="{{route('user.appointment')}}"class="common-btn">Read More </a>
                              <a href="{{route('user.appointment')}}"class="common-btn"> Book Now </a>

                          </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('guest/img/laboratory-ga7286734d_1920.jpg') }}" class="d-block w-100 img-fluid"
                            alt="..." />
                        <div class="carousel-caption d-none d-md-block h3 bounce-top">
                            <h1 class="h1">First slide label</h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Amet, perferendis.
                            </p>
                            <div class="d-flex justify-content-center align-items-center">
                              <a href="{{route('user.appointment')}}"class="common-btn">Read More </a>
                              <a href="{{route('user.appointment')}}"class="common-btn"> Book Now </a>

                          </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Start main section -->

    <main>

        <!-- Start Provide section -->
        <section class="Provide-section py-5 text-center text-focus-in">
            <div class="container">
                <h1 class="text-secondary py-2 bounce-top">What we Provide</h1>
                <div class="title-width m-auto bg-info"></div>

                <div class="row py-3">
                    @foreach ($allServices as $item)
                        <article class="col-lg-4 col-md-6 g-5">
                            <i class="fas fa-stethoscope pb-5 text-info"></i>
                            <h4 class="text-secondary">{{ $item->title }}</h4>
                            <p class="text-secondary">
                                @php
                                    echo $item->details;
                                @endphp
                            </p>
                        </article>
                    @endforeach


                </div>
            </div>
        </section>
        <!-- Start Experence Section -->

        <section class="enperence-section text-center my-3 text-light">
            <div class="container-fluid">
                <div class="row">
                    <article class="col-lg-3 col-md-6 ex-bg-1 py-4">
                        <i class="fas fa-stethoscope pb-2 text-light"></i>
                        <p class="count">52</p>
                        <p class="title-width my-2 m-auto"></p>
                        <p class="title">Skilled Doctors</p>
                    </article>
                    <article class="col-lg-3 col-md-6 ex-bg-2 py-4">
                        <i class="fas fa-stethoscope pb-2 text-light"></i>
                        <p class="count">52,963</p>
                        <p class="title-width my-2 m-auto"></p>
                        <p class="title">Happy Patients</p>
                    </article>
                    <article class="col-lg-3 col-md-6 ex-bg-3 py-4">
                        <i class="fas fa-stethoscope pb-2 text-light"></i>
                        <p class="count">15</p>
                        <p class="title-width my-2 m-auto"></p>
                        <p class="title">Years Experience</p>
                    </article>
                    <article class="col-lg-3 col-md-6 ex-bg-4 py-4">
                        <i class="fas fa-stethoscope pb-2 text-light"></i>
                        <p class="count">3,000</p>
                        <p class="title-width my-2 m-auto"></p>
                        <p class="title">Variety of Drugs</p>
                    </article>
                </div>
            </div>
        </section>
        <!-- Doctor Section -->
        <section class="doctor-section py-5">
            <div class="container">
                <h1 class="text-center pb-3">Our Doctor</h1>
                <div class="title-width m-auto mb-5 bg-info"></div>
                <div class="row g-5">

                    @foreach ($allDoctor as $item)
                        <article class="col-lg-3 col-md-6">
                            <div class="img-hover">
                                <img src="{{ $item->doctor_image }}" alt="Doctor" class="image">
                                <div class="overlay">
                                    <div class="text ">
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"> <i class="fab fa-google-plus-square"></i></a>
                                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="content py-3">
                                <h5><span class="font-bold">{{ $item->doctor_name }} </span>{{ $item->doctor_specialist }}
                                </h5>
                                <p>
                                    @php
                                        echo $item->doctor_details;
                                    @endphp
                                </p>
                            </div>
                        </article>
                    @endforeach


                </div>
            </div>
        </section>

        <!-- Start appointment Section -->

        <section class="appointment-section py-5 text-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h1 class="text-center">Do you need an appointment?</h1>
                    </div>
                    <div class="col-lg-4 text-center my-3">
                        <button type="button" class="btn btn-light btn-lg btn-block text-info"> Block level button <i
                                class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
        </section>

        <!-- Start Letest News Section -->

        <section class="letest-news my-3">
            <div class="container">
                <h1 class="text-center pt-5 pb-3">Latest news</h1>
                <div class="title-width m-auto mb-5 bg-info"></div>
                <div class="row g-4">
                  @foreach($allLetestNews as $item)
                      <article class="col-lg-4 col-md-12">
                        <div class="img-container">
                            <img src="{{$item->image}}" alt="Avatar" class="image">
                            <div class="overlay ">
                                <div class="text ">
                                    <h5 class="pt-3 my-0">{{$item->title}}</h5>
                                    <p>{{$item->details}}</p>
                                    <p>{{$item->date}}</p>
                                </div>
                            </div>
                        </div>
                    </article>
                  @endforeach
             
   
                </div>
            </div>
        </section>

        <!-- Start Opening Section -->

        <section class="opening-section mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card text-center mt-5 py-4">
                            <h1>Opening Hours</h1>
                            <div class="title-width m-auto my-4 bg-info"></div>
                            <p>Monday-Friday</p>
                            <p>24 Hours open</p>
                            <p>Saturday-Sunday</p>
                            <p>06:00-00.00</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Start Footer Sectin -->

    </main>
@endsection
