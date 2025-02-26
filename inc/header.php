<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3" href="index.php">GRAND ROYAL HOTEL</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="Rooms.php">ROOMS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="facilities.php">FACILITIES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="contact us.php">CONTACT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="About.php">ABOUT</a>
          </li>
        </ul>
        <div class="d-flex">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3" data-bs-toggle="modal"
            data-bs-target="#LoginModal">
            Login</button>
          <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal"
            data-bs-target="#RegisterModal">
            Register</button>

        </div>
      </div>
    </div>
  </nav>

<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-circle fs-3 me-2"></i>User Login
            </h5>
            <button type="Reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-4">
              <label class="form-label">Password</label>
              <input type="Password" class="form-control shadow-none">
              <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <button type="Submit" class="btn btn-dark shadow-none">LOGIN
              </button>
              <a href="javascript:void(0)" class="text-secondary text-decodation-none">Forgot Password?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<div class="modal fade" id="RegisterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registeration
            </h5>
            <button type="Reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
              Note: your details must match with ID(identification card, passport, driving license)
              that will be required during check-in.
            </span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Name</label>
                  <input type="Text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="Number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Picture</label>
                  <input type="file" class="form-control shadow-none">
                </div>
                <div class="col-md-12 p-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow-none" rows="1"></textarea>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Pin Code</label>
                  <input type="Number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Date of Birth</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
              </div>
            </div>
            <div class="text-center my-1">
              <button type="Submit" class="btn btn-dark shadow-none">
                REGISTER</button>
            </div>
            <!--  <div class="mb-3">
            <label  class="form-label">Email address</label>
            <input type="email" class="form-control shadow-none" >
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-4">
        <label  class="form-label">Password</label>
        <input type="Password" class="form-control shadow-none" >
        <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-2">
            <button type="Submit"class="btn btn-dark shadow-none">LOGIN   
            </button>
            <a href="javascript:void(0)" class="text-secondary text-decodation-none">Forgot Password?</a>
        </div>
--->
          </div>
        </form>
      </div>
    </div>
  </div>