<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Booking System -ROOMS</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php require 'inc/links.php'; ?>
  
  <style>
  .custom-bg {
    background-color: rgb(26, 221, 192) !important; 
    border: none;
  }

  .custom-bg:hover {
    background-color: rgb(20, 180, 160) !important; 
  }
</style>

</head>

<body class="bg-light">
  <?php require 'inc/header.php'; ?>
<!---OUR FACLILTIES--->
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
    <div class="h-line border-dark  border-top border-4"></div>
    
   </div>
<div class="container">
    <div class="row">
     <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
            <div class="container-fluid flex-lg-column align-items-stretch ">
                <h5 class="mt-2">FILTERS</h5>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items mt-2" id="filterdropdown">
                    <div class="border bg-light p-3 rounded mb-3">
                        <h6 class="mb-3" style="font-size:18px;">CHECK AVAILABILITY</h6>
                            <label class="form-label">Check in</label>
                            <input type="date" class="form-control shadow-none mb-3">
                            <label class="form-label">Check Out </label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                    <div class="border bg-light p-3 rounded mb-3">
                        <h5 class="mb-3" style="font-size:18px;">FACILITIES</h5>
                        <div class="mb-2">
                            <input type="checkbox"  id="fl"class="form-check-input shadow-none me-1">
                            <label class="form-check-label"for="fl">Facility one</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox"  id="f2"class="form-check-input shadow-none me-1">
                            <label class="form-check-label"for="f2">Facility Two</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox"  id="f3"class="form-check-input shadow-none me-1">
                            <label class="form-check-label"for="f3">Facility Three</label>
                        </div>    
                    </div>
                    <div class="border bg-light p-3 rounded mb-3">
                    <h5 class="mb-3" style="font-size:18px;">GUESTS</h5>
                        <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Adult</label>
                            <input type="number" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Children</label>
                            <input type="number" class="form-control shadow-none">
                        </div>
                        </div>
                        </div>
                     </div>    
                 </div>
            </nav>
        </div>
        <div class="col-lg-9 col-md-12 px-4">
            <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="rooms/11.jpg" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3"> Double Room</h5>
                        <div class="features mb-3">
                    <h6 class="mb-1">FEATURES</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        2 Rooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        1 Bathroom
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        1 balcony
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        3 Sofa
                    </span>
                        </div>
                        <div class="facilities mb-3">
                            <h6 class="mb-1">FACILITIES</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            fresh food
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            Room Heater
                            </span>
                            </div>
                        <div class="guest-selection ">
                                <h6 class="mb-1">GUESTS</h6>
                                <div class="d-flex">
                                <span class="badge rounded-pill bg-light text-dark text-wrap me-3"> 4 Adults</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap me-3" > 2 children</span>
                            </div>
              
                        </div>
                </div>
                <div class="col-md-2 text-center px-lg-3">
                    <h6 class="mb-4">$200 per night</h6>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                </div>
                </div>
            </div>

            <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="rooms/33.png" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3"> Deluxe Room</h5>
                        <div class="features mb-3">
                    <h6 class="mb-1">FEATURES</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        3 Rooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        2 Bathroom
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        1 balcony
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        2 Sofa
                    </span>
                        </div>
                        <div class="facilities mb-3">
                            <h6 class="mb-1">FACILITIES</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            fresh food
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            Room Heater
                            </span>
                            </div>
                        <div class="guest-selection ">
                                <h6 class="mb-1">GUESTS</h6>
                                <div class="d-flex">
                                <span class="badge rounded-pill bg-light text-dark text-wrap me-3"> 2 Adults</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap me-3" > 2 children</span>
                            </div>
                        </div>
                    </div>
                <div class="col-md-2 text-center px-lg-3">
                    <h6 class="mb-4">$250 per night</h6>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                </div>
                </div>
            </div>

            <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="rooms/44.png" class="img-fluid rounded">
                </div>
                <div class="col-md-5 px-lg-3 px-md-3 px-0">
                        <h5 class="mb-3"> Executive Room</h5>
                        <div class="features mb-3">
                    <h6 class="mb-1">FEATURES</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        2 Rooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        1 Bathroom
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        1 balcony
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        3 Sofa
                    </span>
                        </div>
                        <div class="facilities mb-3">
                            <h6 class="mb-1">FACILITIES</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            Wifi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            Television
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            fresh food
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            Room Heater
                            </span>
                            </div>
                        <div class="guest-selection ">
                                <h6 class="mb-1">GUESTS</h6>
                                <div class="d-flex">
                                <span class="badge rounded-pill bg-light text-dark text-wrap me-3"> 5 Adults</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap me-3" > 3 children</span>
                            </div>
              
                        </div>
                </div>
                <div class="col-md-2 text-center px-lg-3">
                    <h6 class="mb-4">$300 per night</h6>
                    <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                    <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                    </div>
                    </div>
                    <div class="col-lg-12 text-center mt-5">
                        <a href="index.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none "> MORE ROOMS >>></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <?php require 'inc/footer.php'; ?>


  <br><br><br>
  <br><br><br>
  

   
 
</body>

</html>