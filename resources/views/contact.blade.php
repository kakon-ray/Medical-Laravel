
@extends('layouts.app')
@section('title') {{'Contact'}} @endsection

@section('content')
  
      <!-- Start Header Slider Section -->
      <div class="slider-section">
        <div class="row">
          <div
            id="carouselExampleControls"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="img/surgery-1822458.jpg"
                  class="d-block w-100 img-fluid"
                  alt="..."
                />
                <div class="carousel-caption d-none d-md-block h3 bounce-top">
                  <h1 class="h1">First slide label</h1>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Amet, perferendis.
                  </p>
                  <div class="d-flex justify-content-center align-items-center">
                    <a href="appointment.html"class="m-3 btn btn-info text-light btn-lg">Read More </a>
                     <a href="appointment.html"class="m-3 btn btn btn-outline-info btn-lg"> Book Now </a>
         
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img
                  src="img/successful-medical-team_329181-9252.jpg"
                  class="d-block w-100 img-fluid"
                  alt="..."
                />
                <div class="carousel-caption d-none d-md-block h3 bounce-top">
                  <h1 class="h1">First slide label</h1>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Amet, perferendis.
                  </p>
                  <div class="d-flex justify-content-center align-items-center">
                     <a href="appointment.html"class="m-3 btn btn-info text-light btn-lg">Read More </a>
                     <a href="appointment.html"class="m-3 btn btn btn-outline-info btn-lg"> Book Now </a>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img
                  src="img/laboratory-ga7286734d_1920.jpg"
                  class="d-block w-100 img-fluid"
                  alt="..."
                />
                <div class="carousel-caption d-none d-md-block h3 bounce-top">
                  <h1 class="h1">First slide label</h1>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Amet, perferendis.
                  </p>
                  <div class="d-flex justify-content-center align-items-center">
                     <a href="appointment.html"class="m-3 btn btn-info text-light btn-lg">Read More </a>
                     <a href="appointment.html"class="m-3 btn btn btn-outline-info btn-lg"> Book Now </a>
                  </div>
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleControls"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleControls"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>

<main>

      <section class="contact-section mb-5" id="contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="card mt-5 py-5 pb-5 px-2">
                <div class="row mx-2">
                  <form action="">
                    <div class="row g-2">
                      <div class="col-lg-6">
                        <div class="input-group">
                          <span class="input-group-text" id="basic-addon1"
                            ><i class="fas fa-envelope text-info"></i
                          ></span>
                          <input
                            type="text"
                            class="form-control shadow-none"
                            placeholder="Username"
                            aria-label="Your Name"
                            aria-describedby="basic-addon1"
                          />
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-group">
                          <span
                            class="input-group-text text-info"
                            id="basic-addon1"
                            ><i class="fas fa-user"></i
                          ></span>
                          <input
                            type="text"
                            class="form-control shadow-none"
                            placeholder="Your Email"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                          />
                        </div>
                      </div>
                      <div class="mt-3">
                        <textarea
                          class="form-control pt-3"
                          id="exampleFormControlTextarea1"
                          rows="3"
                          placeholder="Your Message"
                        ></textarea>
                      </div>
                      <button
                        type="submit"
                        class="btn btn-info text-light my-4 px-5"
                      >
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
                    width="600"
                    height="450"
                    frameborder="0"
                    style="border: 0"
                    allowfullscreen
                  ></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    @endsection