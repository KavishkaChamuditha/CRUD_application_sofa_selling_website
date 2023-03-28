<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="{{ URL('css/main.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.3.1.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- fonts  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@700&display=swap" rel="stylesheet">

   

    <script>
    const burger = document.querySelector('.burger');
    const navLinks = document.querySelector('.nav-links');

    burger.addEventListener('click', () => {
    navLinks.classList.toggle('nav-active');
    });
    </script>

</head>
<body>
    
    @yield('content')
    
    <footer>

        <h1 data-aos="fade-up" class="fottertext">Let's work <br>
            together</h1>
           
        <div class="d-flex flex-row-reverse">
         <img class="fotterimg p-2" src="{{ URL ('images/letswork.jpg') }}" alt="">
        </div>

        <div class="address-container">
          <div class="left-column">
            <hr >
            <h2 class="p-2 text-light addrestxt" data-aos="fade-up">123 Anywhere St., Any City State, Country 12345</h2>
            <hr>
            <h2 class="p-2 text-light addrestxt" data-aos="fade-up">(123) 456 7890</h2>
            <hr>
            <h2 class="p-2 text-light addrestxt" data-aos="fade-up">hello@reallygreatsite.com</h2>
            <hr>
          </div>
          <div class="right-column">
            <p class="text-light marginaddres" data-aos="fade-up">Address</p>
            <p class="text-light marginaddres" data-aos="fade-up">Phone</p>
            <p class="text-light marginaddres" data-aos="fade-up">Email</p>
          </div>
        </div>
        
         
    </div>
    
  <!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-light">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block" data-aos="fade-up">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i  data-aos="fade-up" class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i  data-aos="fade-up" class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i  data-aos="fade-up" class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i  data-aos="fade-up" class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i  data-aos="fade-up" class="fab fa-linkedin"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6  data-aos="fade-up" class="text-uppercase fw-bold mb-4">
            <i  data-aos="fade-up" class="fas fa-gem me-3"></i>Arden Furniture
          </h6>
          <p data-aos="fade-up">
            Arden Furniture is a leading manufacturer of high-quality sofa sets, located in Sri Lanka. We offer a wide range of products that cater to different styles and preferences.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a data-aos="fade-up" href="#!" class="text-reset">New Arrivales</a>
          </p>
          <p>
            <a data-aos="fade-up" href="#!" class="text-reset">Most Selling</a>
          </p>
          <p>
            <a data-aos="fade-up" href="#!" class="text-reset">Sales</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 data-aos="fade-up" class="text-uppercase fw-bold mb-4">
            Sofa sets for
          </h6>
          <p>
            <a data-aos="fade-up" href="#!" class="text-reset">House</a>
          </p>
          <p>
            <a data-aos="fade-up" href="#!" class="text-reset">Office</a>
          </p>
          <p>
            <a data-aos="fade-up" href="#!" class="text-reset">Room</a>
          </p>
          <p>
            <a data-aos="fade-up" href="#!" class="text-reset">Theater Room</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 data-aos="fade-up" class="text-uppercase fw-bold mb-4">Contact</h6>
          <p data-aos="fade-up"><i class="fas fa-home me-3"></i>123 Anywhere St., Any City
            State, Country 12345</p>
          <p>
            <i  data-aos="fade-up" class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p data-aos="fade-up"><i data-aos="fade-up" class="fas fa-phone me-3"></i> (123) 456 7890</p>
          <p data-aos="fade-up"><i data-aos="fade-up" class="fas fa-print me-3"></i> hello@reallygreatsite.com</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">ArdenFurniture.com</a>
  </div>
<!-- Footer -->
    </footer>
    
</body>
</html>