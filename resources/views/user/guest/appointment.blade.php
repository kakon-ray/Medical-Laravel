
@extends('layouts.user.master')
@section('title') {{'Appointment'}} @endsection

@section('content')


<main>


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
                          class="form-control rounded-0"
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
                      <button type="submit" onclick="appointment_submit()"  class="btn btn-info bg-info my-3">
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
                  title: "Appointment Add Successfully",
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