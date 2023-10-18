
@extends('layouts.app')
@section('title') {{'Home'}} @endsection

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
    <!-- Start main section -->

    <main>

      <!-- Start Provide section -->
      <section class="Provide-section py-5 text-center text-focus-in">
        <div class="container">
          <h1 class="text-secondary py-2 bounce-top">What we Provide</h1>
          <div class="title-width m-auto bg-info"></div>

          <div class="row py-3">
            <article class="col-lg-4 col-md-6 g-5">
              <i class="fas fa-stethoscope pb-5 text-info"></i>
              <h4 class="text-secondary">Medical Examination</h4>
              <p class="text-secondary">
                The development of preventive medicine has been one of the main
                goals of Metropolitan Hospital since its establishment. Quality
                of life directly depends on prevention and discovering illnesses
                right at the start.
              </p>
            </article>
            <article class="col-lg-4 col-md-6 g-5">
              <i class="fas fa-mortar-pestle pb-5 text-info"></i>
              <h4 class="text-secondary">Medical Examination</h4>
              <p class="text-secondary">
                The development of preventive medicine has been one of the main
                goals of Metropolitan Hospital since its establishment. Quality
                of life directly depends on prevention and discovering illnesses
                right at the start.
              </p>
            </article>
            <article class="col-lg-4 col-md-6 g-5">
              <i class="fas fa-syringe pb-5 text-info"></i>
              <h4 class="text-secondary">Medical Examination</h4>
              <p class="text-secondary">
                The development of preventive medicine has been one of the main
                goals of Metropolitan Hospital since its establishment. Quality
                of life directly depends on prevention and discovering illnesses
                right at the start.
              </p>
            </article>
            <article class="col-lg-4 col-md-6 g-5">
              <i class="fas fa-plus pb-5 text-info"></i>
              <h4 class="text-secondary">Medical Examination</h4>
              <p class="text-secondary">
                The development of preventive medicine has been one of the main
                goals of Metropolitan Hospital since its establishment. Quality
                of life directly depends on prevention and discovering illnesses
                right at the start.
              </p>
            </article>
            <article class="col-lg-4 col-md-6 g-5">
              <i class="fas fa-brain pb-5 text-info"></i>
              <h4 class="text-secondary">Medical Examination</h4>
              <p class="text-secondary">
                The development of preventive medicine has been one of the main
                goals of Metropolitan Hospital since its establishment. Quality
                of life directly depends on prevention and discovering illnesses
                right at the start.
              </p>
            </article>
            <article class="col-lg-4 col-md-6 g-5">
              <i class="fas fa-head-side-virus pb-5 text-info"></i>
              <h4 class="text-secondary">Medical Examination</h4>
              <p class="text-secondary">
                The development of preventive medicine has been one of the main
                goals of Metropolitan Hospital since its establishment. Quality
                of life directly depends on prevention and discovering illnesses
                right at the start.
              </p>
            </article>
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
            <article class="col-lg-3 col-md-6">
              <div class="img-hover">
                 <img src="img/Screenshot_1.png" alt="Doctor" class="image">
                <div class="overlay">
                  <div class="text ">
                      <a href="#"><i class="fab fa-facebook-square"></i></a>
                      <a href="#"> <i class="fab fa-google-plus-square"></i></a>
                      <a href="#"><i class="fab fa-twitter-square"></i></a>
                  </div>
                </div>
              </div>
              <div class="content py-3">
                  <h5><span class="font-bold">Benjamin Bentley </span>Pathologist</h5>
                  <p>A pathologist is a physician who studies body fluids and tissues, and uses laboratory tests to monitor the health of patients with chronic conditions.</p>
                </div>
            </article>
            <article class="col-lg-3 col-md-6">
              <div class="img-hover">
                 <img src="img/Screenshot_2.png" alt="Doctor" class="image">
                <div class="overlay">
                  <div class="text ">
                      <a href="#"><i class="fab fa-facebook-square"></i></a>
                      <a href="#"> <i class="fab fa-google-plus-square"></i></a>
                      <a href="#"><i class="fab fa-twitter-square"></i></a>
                  </div>
                </div>
              </div>
              <div class="content py-3">
                  <h5><span class="font-bold">Benjamin Bentley </span>Pathologist</h5>
                  <p>A pathologist is a physician who studies body fluids and tissues, and uses laboratory tests to monitor the health of patients with chronic conditions.</p>
                </div>
            </article>
            <article class="col-lg-3 col-md-6">
              <div class="img-hover">
                 <img src="img/Screenshot_3.png" alt="Doctor" class="image">
                <div class="overlay">
                  <div class="text ">
                      <a href="#"><i class="fab fa-facebook-square"></i></a>
                      <a href="#"> <i class="fab fa-google-plus-square"></i></a>
                      <a href="#"><i class="fab fa-twitter-square"></i></a>
                  </div>
                </div>
              </div>
              <div class="content py-3">
                  <h5><span class="font-bold">Benjamin Bentley </span>Pathologist</h5>
                  <p>A pathologist is a physician who studies body fluids and tissues, and uses laboratory tests to monitor the health of patients with chronic conditions.</p>
                </div>
            </article>
            <article class="col-lg-3 col-md-6">
              <div class="img-hover">
                 <img src="img/Screenshot_4.png" alt="Doctor" class="image">
                <div class="overlay">
                  <div class="text ">
                      <a href="#"><i class="fab fa-facebook-square "></i></a>
                      <a href="#"> <i class="fab fa-google-plus-square"></i></a>
                      <a href="#"><i class="fab fa-twitter-square"></i></a>
                  </div>
                </div>
                
              </div>
              <div class="content py-3">
                  <h5><span class="font-bold">Benjamin Bentley </span>Pathologist</h5>
                  <p>A pathologist is a physician who studies body fluids and tissues, and uses laboratory tests to monitor the health of patients with chronic conditions.</p>
                </div>
            </article>
            
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
               <button type="button" class="btn btn-light btn-lg btn-block text-info">  Block level button  <i class="fas fa-arrow-right"></i></button>             
          </div>
        </div>
      </section>

      <!-- Start Letest News Section -->

      <section class="letest-news my-3">
        <div class="container">
          <h1 class="text-center pt-5 pb-3">Latest news</h1>
             <div class="title-width m-auto mb-5 bg-info"></div>
          <div class="row g-4">
            <article class="col-lg-4 col-md-12">
            <div class="img-container">
              <img src="img/Screenshot_5.png" alt="Avatar" class="image">
              <div class="overlay ">
                <div class="text ">
                  <h5 class="pt-3 my-0">Working in the OR as a nurch</h5>
                  <p>Oxygenna , July 29 20211</p>
                </div>
              </div>
            </div>
            </article>
            <article class="col-lg-4 col-md-12">
            <div class="img-container">
              <img src="img/Screenshot_6.png" alt="Avatar" class="image">
              <div class="overlay ">
                <div class="text ">
                  <h5 class="pt-3 my-0">Working in the OR as a nurch</h5>
                  <p>Oxygenna , July 29 20211</p>
                </div>
              </div>
            </div>
            </article>
            <article class="col-lg-4 col-md-12">
            <div class="img-container">
              <img src="img/Screenshot_7.png" alt="Avatar" class="image">
              <div class="overlay ">
                <div class="text ">
                  <h5 class="pt-3 my-0">Working in the OR as a nurch</h5>
                  <p>Oxygenna , July 29 20211</p>
                </div>
              </div>
            </div>
            </article>
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

