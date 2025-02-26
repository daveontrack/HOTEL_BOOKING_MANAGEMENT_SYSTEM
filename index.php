<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Booking System -HOME</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php require 'inc/links.php'; ?>
  <style>
    .poppins-regular {
      font-family: "Poppins", sans-serif;
      font-weight: 400;
      font-style: normal;
    }

    .poppins-medium {
      font-family: "Poppins", sans-serif;
      font-weight: 500;
      font-style: normal;
    }

    .merienda-<uniquifier> {
      font-family: "Merienda", sans-serif;
      font-optical-sizing: auto;
      font-weight: <weight>;
      font-style: normal;
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }

    .custom-bg {
      background-color: rgb(26, 221, 192);
      border: 1px solid rgb(26, 221, 192);
    }

    .custom-bg:hover {
      background-color: #279e8c;
      border-color: #279e8c;

    }

    .Availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px) {
      .Availability-form {
        margin-top: 0px;
        padding: 0 35px;
      }
    }
  </style>

</head>

<body class="bg-light">
  <?php require 'inc/header.php'; ?>

  <!---images--->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper Swiper-container">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <img src="images/1.png" class=" w-115 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/2.png" class=" w-115 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/3.png" class=" w-115 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/4.png" class=" w-115 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/5.png" class=" w-115 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/6.png" class=" w-115 d-block" />
        </div>
      </div>
    </div>
  </div>
  <!---Check Availability-->
  <div class="container Availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5>Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3 ">
              <label class="form-label" style="font-weight:500;">Check in</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3 ">
              <label class="form-label" style="font-weight:500;">Check Out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3 ">
              <label class="form-label" style="font-weight:500;">Adult</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight:500;">Children</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg mt-2">
              <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Our Rooms-->
  <!--ROOM 1-->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px;margin:auto;">
          <img src="rooms/11.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Double Room</h5>
            <h6 class="mb-4">$200 per night</h6>
            <div class="features mb-4">
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
            <div class="facilities mb-5">
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
            <div class="guest-selection mb-4">
                <h6 class="mb-1">GUESTS</h6>
                <div class="d-flex">
                  <span class="badge rounded-pill bg-light text-dark text-wrap me-3"> 4 Adults</span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap me-3"> 2 Children</span>
                </div>
              </div>
            <div class="Rating mb-4">
              <h6 class="mb-1">RATING</h6>
              <span class="badge rounded-pill bg-light ">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <!--ROOM 2-->
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px;margin:auto;">
          <img src="rooms/33.png" class="card-img-top">
          <div class="card-body">
            <h5>Deluxe Room</h5>
            <h6 class="mb-4">$250 per night</h6>
            <div class="features mb-4">
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
            <div class="facilities mb-5">
              <h6 class="mb-1">FACILITIES</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Room Heater
              </span>
            </div>
            <div class="guest-selection mb-4">
                <h6 class="mb-1">GUESTS</h6>
                <div class="d-flex">
                  <span class="badge rounded-pill bg-light text-dark text-wrap me-3"> 3 Adults</span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap me-3"> 2 Children</span>
                </div>
              </div>
            <div class="Rating mb-4">
              <h6 class="mb-1">RATING</h6>
              <span class="badge rounded-pill bg-light ">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <!--ROOM 3 -->
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px;margin:auto;">
          <img src="rooms/66.png" class="card-img-top">
          <div class="card-body">
            <h5>Executive Room</h5>
            <h6 class="mb-4">$300 per night</h6>
            <div class="features mb-4">
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
            <div class="facilities mb-5">
              <h6 class="mb-1">FACILITIES</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Smart Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Refreshments & Dining
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Room Heater
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                In-room telephone
              </span>
            </div>
            <div class="guest-selection mb-4">
                <h6 class="mb-1">GUESTS</h6>
                <div class="d-flex">
                  <span class="badge rounded-pill bg-light text-dark text-wrap me-3"> 4 Adults</span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap me-3"> 2 Children</span>
                </div>
              </div>
            <div class="Rating mb-4">
              <h6 class="mb-1">RATING</h6>
              <span class="badge rounded-pill bg-light ">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <!---ROOM 4--->
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px;margin:auto;">
          <img src="rooms/88.png" class="card-img-top">
          <div class="card-body">
            <h5>Family Room</h5>
            <h6 class="mb-4">$350 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">FEATURES</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                4 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                1 balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                4 Sofa
              </span>
            </div>
            <div class="facilities mb-5">
              <h6 class="mb-1">FACILITIES</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                In-room telephone
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Refreshments & Dining
              </span>
            </div>
            <div class="guest-selection mb-4">
                <h6 class="mb-1">GUESTS</h6>
                <div class="d-flex">
                  <span class="badge rounded-pill bg-light text-dark text-wrap me-3"> 4 Adults</span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap me-3"> 2 Children</span>
                </div>
              </div>
            <div class="Rating mb-4">
              <h6 class="mb-1">RATING</h6>
              <span class="badge rounded-pill bg-light ">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <!---ROOM 5--->
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px;margin:auto;">
          <img src="rooms/22.png" class="card-img-top">
          <div class="card-body">
            <h5>Twin Room</h5>
            <h6 class="mb-4">$400 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">FEATURES</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                2 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                2 balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                4 Sofa
              </span>
            </div>
            <div class="facilities mb-5">
              <h6 class="mb-1">FACILITIES</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                High-speed Wi-F
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Flat-screen Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Mini-fridge
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Room Heater
              </span>
            </div>
            <div class="guest-selection mb-4">
                <h6 class="mb-1">GUESTS</h6>
                <div class="d-flex">
                  <span class="badge rounded-pill bg-light text-dark text-wrap me-3"> 4 Adults</span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap me-3"> 2 Children</span>
                </div>
              </div>
            <div class="Rating mb-4">
              <h6 class="mb-1">RATING</h6>
              <span class="badge rounded-pill bg-light ">
                <i class= "bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <!---ROOM 6--->
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px;margin:auto;">
          <img src="rooms/55.png" class="card-img-top">
          <div class="card-body">
            <h5>Presidential Suite</h5>
            <h6 class="mb-4">$450 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">FEATURES</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                4 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                2 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                2 balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                4 Sofa
              </span>
            </div>
            <div class="facilities mb-5">
              <h6 class="mb-1">FACILITIES</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Ultra-fast Wi-Fi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Multiple large Smart Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Premium Refreshments & Dining
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Room Heater
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap ">
                Special Services & Perks
              </span>
            </div>
            <div class="guest-selection mb-4">
                <h6 class="mb-1">GUESTS</h6>
                <div class="d-flex">
                  <span class="badge rounded-pill bg-light text-dark text-wrap me-3"> 4 Adults</span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap me-3"> 2 Children</span>
                </div>
              </div>
            <div class="Rating mb-4">
              <h6 class="mb-1">RATING</h6>
              <span class="badge rounded-pill bg-light ">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>


      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none "> MORE ROOMS >>></a>
      </div>
    </div>
  </div>
  <!-- our facilities--->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="facilities/345.svg" width="80px">
        <h5 class="mt-3"> Ultra fast Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="facilities/567.svg" width="80px">
        <h5 class="mt-3">Refreshment and Dining</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="facilities/234.svg" width="80px">
        <h5 class="mt-3">Television</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="facilities/123.svg" width="80px">
        <h5 class="mt-3">Room Heater</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="facilities/456.svg" width="80px">
        <h5 class="mt-3">Special Services & Perks</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none "> MORE FACILITIES >>></a>
      </div>
    </div>
  </div>


  <!---testimonials-->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
  <div class="container">
    <div class="swiper Swiper-testimonials">
      <div class="swiper-wrapper">
        <div class="swiper-slide bg-white p-4">
          <div class="Profile d-flex align-items-center p-4 mb-3">
            <img src="facilities/star-fill.svg" width="30px">
            <h6 class="m-0 ms-2"> USERS</h6>
          </div>
          <p>
            "Spacious and cozy! The Executive Room had a crib for our baby,
            a microwave for snacks, and even toys for the kids. We felt right at home!" Emily J.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="Profile d-flex align-items-center p-4">
            <img src="facilities/star-fill.svg" width="30px">
            <h6 class="m-0 ms-2"> USERS</h6>
          </div>
          <p>
            "Our stay in the Family Room was perfect! The kids loved the bunk beds, and we had everything we needed for
            a comfortable stay. Highly recommend!"
            <cite>- Sarah & Michael</cite>
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="Profile d-flex align-items-center p-4">
            <img src="facilities/star-fill.svg" width="30px">
            <h6 class="m-0 ms-2"> USERS</h6>
          </div>
          <p>
            "Amazing experience! The room had everything our family needed – comfy beds, a play area, and fast WiFi.
            We’ll definitely come back!"
            <cite>The Anderson Family</cite>
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>
      <div class="swiper-pagination">
      </div>
    </div>
  </div>
  <!--Reach US--->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.346446638651!2d38.609550174999235!3d7.201256192804223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17b155f65f119363%3A0x636234ad2d4be5df!2sGrand%20Royal%20Hotel!5e0!3m2!1sen!2set!4v1740481051065!5m2!1sen!2set"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
              <h5> Call Us</h5>
              <a href="Tel: +25124090909" class="d-inline-block mb-2 text-decodation-none text-dark">
                <i class="bi bi-telephone-fill"></i> +25124090909
              </a>
              <br>
              <a href="Tel: +25124090909" class="d-inline-block  text-decodation-none text-dark">
                <i class="bi bi-telephone-fill"></i> +25124090909
              </a>
              </div>
      <div class="bg-white p-4 rounded mb-4">
              <h5>Follow Us</h5>
              <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6">
                <i class="bi bi-twitter"></i> Twitter
                </span>
              </a>
              <br>
              <a href="#" class="d-inline-block mb-3">
                <span class="badge bg-light text-dark fs-6">
                <i class="bi bi-facebook"></i> Facebook
                </span>
              </a>
              <br>
              <a href="#" class="d-inline-block ">
                <span class="badge bg-light text-dark fs-6">
                <i class="bi bi-instagram"></i> Instagram
              </span>
              </a>
            </div>
            </div>
          </div>
      </div>

  <?php require 'inc/footer.php'; ?>


  <br><br><br>
  <br><br><br>
  

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  
  <script>
    var swiper = new Swiper(".Swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      }
    });
    var swiper = new Swiper(".Swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      }
    });

  </script>
</body>

</html>