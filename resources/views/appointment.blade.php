
@extends('layouts.app')
@section('title') {{'Appointment'}} @endsection

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
          </div>
        </div>
      </section>

      <!-- Start appointment Section -->

      <section
        class="appointment-page-contact text-light pb-5"
        id="appointment"
      >
        <div class="container">
          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
              <div class="card mt-5 py-5 pb-5 px-2">
                <h1 class="text-center">Book an appointment now</h1>
                <div class="title-width m-auto my-4 bg-info"></div>
                <div class="row mx-2">
                  <form action="">
                    <div class="row g-2">
                      <div class="col-lg-6">
                        <label>নাম</label>
                        <input
                          class="form-control"
                          id="name"
                          type="text"
                          name="name"
                          placeholder="নাম"
                        />
                        <label class="mt-3">মোবাইল নাম্বার</label>
                        <input
                          class="form-control"
                          id="phonenumber"
                          type="text"
                          name="phone"
                          placeholder="মোবাইল নাম্বার"
                        />
                      </div>
                      <div class="col-lg-6">
                        <label>ক্যাটাগরি  সিলেক্ট করুন</label>
                        <select
                          class="form-select"
                          id="category"
                          aria-label="Default select example"
                        >
                          <option selected>মেডিসিন</option>
                          <option value="1">সার্জারি</option>
                          <option value="2">অর্থপেডিক্স</option>
                          <option value="3">গাইনি</option>
                        </select>
                        <label class="mt-3">তারিখ</label>
                        <input
                          class="form-control"
                          type="date"
                          id="date"
                          name="date"
                        />
                      </div>
                      <button type="submit" onclick="appointment_submit()"  class="btn btn-light my-5 px-5">
                        সাবমিট
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-2"></div>
            </div>
          </div>
        </div>
      </section>

      <!-- Start Footer Sectin -->
    </main>

    <script>
           
     const appointment_submit = () => {
    
    event.preventDefault();
    
    var name = $("#name").val() ? $("#name").val() : false;
    var phonenumber = $("#phonenumber").val() ? $("#phonenumber").val() : false;
    var date = $("#date").val() ? $("#date").val() : false;
    var category = $('#category').find(":selected").val();


    if (phonenumber == false) {
      
      Swal.fire({
          icon: "error",
          title: "Input field is empty",
          text: "Fill in the Phone Number input field",
      });

      return 0;
  } 
          

   
    var formData = new FormData();
    
    formData.append("name", name);
    formData.append("phonenumber", phonenumber);
    formData.append("date", date);
    formData.append("category", category);

    
    axios
        .post("/add-apppointment",formData)
  
      
        .then(function (response) {
           if(response.status == 200 && response.data == 1){
                Swal.fire({
                  position: "top-center",
                  icon: "success",
                  title: "furniture Add Successfully",
                  showConfirmButton: false,
                  timer: 1500,
              });
           }else{
              Swal.fire({
                  position: "top-center",
                  icon: "success",
                  title: "Faild",
                  showConfirmButton: false,
                  timer: 1500,
              });
           }
        
        })
        .catch(function (error) {
            Swal.fire({
                position: "top-center",
                icon: "error",
                title: "Your form submission is not complete",
                showConfirmButton: false,
                timer: 1500,
            });
        });
  }
    </script>

    @endsection