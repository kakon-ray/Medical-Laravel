@extends('layouts.user.master')
@section('title')
    {{ 'Contact' }}
@endsection

@section('content')
    <main>

        <section class="contact-section mb-5" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mt-5 py-5 pb-5 px-2">
                            <div class="row mx-2">
                                <form action="{{route('user.contact.submit')}}" method="POST" id="common_alert">
                                  @csrf
                                    <div class="row g-2">
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fas fa-envelope text-info"></i></span>
                                                <input type="text" class="form-control shadow-none"
                                                    placeholder="Username" name="name" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-group">
                                                <span class="input-group-text text-info" id="basic-addon1"><i
                                                        class="fas fa-user"></i></span>
                                                <input type="phone" class="form-control shadow-none"
                                                    placeholder="Your Phone" name="phonenumber" />
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <textarea class="form-control pt-3" name="message" rows="3" placeholder="Your Message"></textarea>
                                        </div>
                                        <button type="submit" class="submit_button">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="py-5">
                            <div class="map-responsive">
                                <iframe
                                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                                    width="600" height="450" frameborder="0" style="border: 0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
