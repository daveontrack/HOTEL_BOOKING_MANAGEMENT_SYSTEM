<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Booking System -ABOUT</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php require 'inc/links.php'; ?>
<style>
  .box{
    border-top-color:rgb(26, 221, 192);
  }
</style>
</head>

<body class="bg-light">
  <?php require 'inc/header.php'; ?>
<!---OUR FACLILTIES--->
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">ABOUT US</h2>
    <div class="h-line border-dark  border-top border-4"></div>
    <p class="text-center mt-3">
          The Grand Royal Hotel in Shashamane, Oromia 
          Region, Ethiopia,<br> is a 5-star establishment
          offering a comfortable stay for travelers.<br> 
          Guests can enjoy a variety of national and 
          international <br>cuisines at the on-site restaurant,
          as well as a selection of hot beverages.
    </p>
   </div>

   <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3">hotel features</h3>
        <p>
          The Grand Royal Hotel in Shashamane offers a range
          of features designed to ensure a comfortable and convenient stay for guests:-
          <br>Well-equipped rooms,On-site restaurant with national and international 
          cuisine,Multipurpose event hall,24-hour reception desk.Room service,<br>Secure 
          facilities for guest safety,Hot beverage selection,Central location in 
          Shashamane for easy access to local attractions.
        </p>
      </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2  order-1">
          <img src="about/about.jpg "width="300px" height="250px" >
      </div>
    </div>
   </div>

   <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark text-center box ">
        <img src="about/hotel.svg" width="150px" height="100px">
        <h4 class="mt-3"> 100+ ROOMS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark text-center box ">
        <img src="about/customers.svg" width="150px" height="75px">
        <h4 class="mt-3"> 200+ CUSTOMERS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark text-center box ">
        <img src="about/rating.svg" width="150px" height="100px">
        <h4 class="mt-3"> 150+ REVIEWS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark text-center box ">
        <img src="about/Staff.svg" width="150px" height="100px">
        <h4 class="mt-3"> 200+ STAFFS</h4>
        </div>
      </div>
      </div>
    </div>
<!--MANAGEMENT TEAM--->
  <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
  <div class="container px-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="about/www.webp" class="w-100">
          <h5 class="mt-2">gomez Team</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="about/yyy.webp" height="170px" class="w-100">
          <h5 class="mt-2">peter Team</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="about/ccc.avif" height="170px"class="w-100">
          <h5 class="mt-2">john Team</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="about/ppp.avif" class="w-100">
          <h5 class="mt-2">phawulos Team</h5>
        </div>
        
    <div class="swiper-pagination"></div>
  </div>
</div>
 
  <?php require 'inc/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
 var swiper = new Swiper(".mySwiper", {
  slidesPerView: 4,
  spaceBetween: 20, 
  pagination: {
    el: ".swiper-pagination",
  },
});

</script>

  <br><br><br>
  <br><br><br>
  

   
 
</body>

</html>