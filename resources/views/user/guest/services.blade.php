@extends('layouts.user.master')
@section('title')
    {{ 'Contact' }}
@endsection

@section('content')
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
    </main>
@endsection
