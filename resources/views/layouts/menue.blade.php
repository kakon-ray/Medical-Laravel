<header>
      <!-- Start Navbar Section -->
      <nav class="navbar navbar-expand-lg navbar-light py-2 h6">
        <div class="container">
          <a class="navbar-brand text-info" href="{{'/'}}"
            ><i class="fas fa-stethoscope"></i> MEDICAL</a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item m-3">
                <a class="nav-link active" aria-current="page" href="{{'/'}}">Home</a>
              </li>
              <li class="nav-item m-3">
                <a class="nav-link" href="{{'/appointment'}}">Appointment</a>
              </li>
              <li class="nav-item m-3">
                <a class="nav-link" href="{{'/clinic'}}"> About Our Clinic</a>
              </li>
             
              <li class="nav-item dropdown m-3">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                 Other
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
            
              <!-- <li class="nav-item m-3">
                <a class="nav-link disabled">Other</a>
              </li> -->
                </li>
                <li class="nav-item m-3">
                <a class="nav-link" href="{{'/contact'}}">Contact</a>
              </li>

            </ul>
            <div class="d-flex justify-content-center align-items-center d-none d-lg-block">
              <form class="d-flex">
                <input
                  id="search-input"
                  class="form-control me-2"
                  placeholder="Search"
                  aria-label="Search"
                />
              </form>
              <div class="search ms-3">
                <a href="javascript:void(0)" onclick="myFunction()"
                  ><i class="fas fa-search" id="toggle"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!-- End Navbar Section -->

    </header>