<header>
    <!-- Start Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-light mb-0">
      <div class="container">
        <a class="navbar-brand text-info" href="{{'/'}}"
          ><i class="fas fa-stethoscope"></i> MEDICAL</a
        >
        <a
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item m-3">
              <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item m-3">
              <a class="nav-link" href="{{route('user.appointment')}}">Appointment</a>
            </li>
            <li class="nav-item m-3">
              <a class="nav-link" href="{{route('user.clinic')}}"> About Our Clinic</a>
            </li>
           
            <li class="nav-item m-3">
              <a class="nav-link" href="{{route('user.doctor')}}"> Our Doctor</a>
            </li>
           
            <li class="nav-item m-3">
              <a class="nav-link" href="{{route('user.services')}}"> Our Serivce</a>
            </li>
           
           
              <li class="nav-item m-3">
              <a class="nav-link" href="{{route('user.contact')}}">Contact</a>
            </li>

          </ul>
          <div class="d-flex justify-content-center align-items-center">
            <form class="d-flex">
              <input
                id="search-input"
                class="form-control me-2"
                placeholder="Search"
                aria-label="Search"
              />
            </form>
            <div class="search ms-3">
              <a data-bs-toggle="modal" class="search-box" data-bs-target="#search-modal"
                ><i class="fas fa-search" id="toggle"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar Section -->


           <!-- search -->
           <div class="search-overlay">
            <div class="modal fade" id="search-modal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="search-overlay-form">
                            <button type="button" class="btn-close search-overlay-close"
                                data-bs-dismiss="modal"></button>
                            <form action="" method="GET">
                                <select class="nav-input-select"name="category">
 
                                    <option value="course" value="course">Doctor</option>
                                    <option value="service" value="service">Service</option>
 
                                </select>
                                <input type="text" required class="input-search" name="item"
                                    placeholder="Search here" />
                                <button><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  </header>