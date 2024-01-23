@extends('layouts.user.master')
@section('title')
    {{ 'Our Doctor' }}
@endsection

@section('content')
    <main>

        <!-- Doctor Section -->
        <section class="doctor-section py-5">
            <div class="container">
                <h1 class="text-center pb-3">Our Doctor</h1>
                <div class="title-width m-auto mb-5 bg-info"></div>
                <div class="row g-5">
                    @if ($allDoctor)
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
                                    <h5><span class="font-bold">{{ $item->doctor_name }}
                                        </span>{{ $item->doctor_specialist }}
                                    </h5>
                                    <p>
                                        @php
                                            echo $item->doctor_details;
                                        @endphp
                                    </p>
                                </div>
                            </article>
                        @endforeach

                        @else

                        <h3 class="text-center">আপনার সার্চকৃত তথ্য খুজে পাওয়া যায়নি দয়া করে সঠিক তথ্য দিয়ে সার্চ করুন</h3>
                    @endif



                </div>
            </div>
        </section>
    </main>
@endsection
