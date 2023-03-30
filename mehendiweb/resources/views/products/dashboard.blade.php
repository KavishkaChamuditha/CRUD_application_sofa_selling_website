@extends('products.layout')
    
    <title>Dashboard</title>

<body class="bcolor">
  
    <aside class="sidebar">
        <div class="toggle">
          <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
                <span></span>
              </a>
        </div>
      
        <div class="side-inner">
  
          <div class="profile">
            <img src="{{URL('images/connor-wilkins-2crxTr4jCkc-unsplash.jpg')}}" alt="Image" class="img-fluid">
            <h3 class="name">Am Singl</h3>
            <span class="country">Web Designer</span>
          </div>
            
          <div class="nav-menu">
            <ul>
              <li class="accordion">
                <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsible">
                  <i class="fa-solid fa-list-check" style="margin-right:10px;"></i> Manage Mehendi
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                  <div>
                    <ul>
                      <li><a href="#">Add New Product</a></li>
                      <li><a href="#">Update Exicting Proudct</a></li>
                      <li><a href="#">Search Product</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li class="accordion">
                <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsible">
                  <i class="fa-sharp fa-solid fa-eye" style="margin-right:10px;"></i></span>Explore
                </a>
  
                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne">
                  <div>
                    <ul>
                      <li><a href="#">Home Page</a></li>
                      <li><a href="#">Products</a></li>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Contact Us</a></li>
                    </ul>
                  </div>
                </div>
  
              </li>
              <li><a href="#"><i class="fa-solid fa-user" style="margin-right:10px;"></i></span>Create Account</a></li>
              {{-- <li><a href="#"><span class="icon-location-arrow mr-3"></span>Delete Account</a></li> --}}
              <li><a href="#"><i class="fa-sharp fa-solid fa-gear" style="margin-right:10px;"></i></span>Account Settings</a></li>
              <li><a href="#"><i class="fa-solid fa-right-from-bracket" style="margin-right:10px;"></i></span>Sign out</a></li>
            </ul>
          </div>
        </div>
      
      </aside>
      <main>

<div class="container">
  <h1 class="text-light introduce">Hii Raslan</h1>
  <div class="my-element"></div>
  <div class="row">
    <div class="col-lg-6 col-md-6">
      <div class="image-with-text cardmargin">       
          <div class="btn dashboardbtn">Add Products</div>
      </div>
    </div>

    <div class="col-lg-6 col-md-6">
      <div class="image-with-text cardmargin">
        <div class="btn dashboardbtn">Update Products</div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6 col-md-6">
      <div class="image-with-text cardmargin">       
        <div class="btn dashboardbtn">Search Products</div>
      </div>
    </div>

    <div class="col-lg-6 col-md-6">
      <div class="image-with-text cardmargin">       
        <div class="btn dashboardbtn">Remove Products</div>
      </div>
    </div>
  </div>
</div>

      </main>

      <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
      <script src="{{ asset('js/jpopper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>

