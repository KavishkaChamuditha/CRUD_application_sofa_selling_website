@extends('custormer.layout')


<div class="backgroundclr">
  <div class="nav-container">
    <nav>  
      <img class="logo" src="{{URL('images/Untitleddesig.png') }}" alt="">
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div class="burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </nav>
    <h1 class="adrianafurniture">Arden Furniture</h1>   
    <h3 class="imgtext">We are the Arden Furniture.</h3> 
    <p class="ptext">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Blanditiis ex iusto repellat doloribus nisi odit. Adipisci animi architecto vel amet rem nemo, dignissimos debitis.</p>
    <div class="btn btnbancode">
      <i class="fas fa-arrow-right" style="font-size:50px; color:aliceblue;"></i>
    </div>
    
  </div>
  <img class="img-two-class" src="{{ URL('images/Untitled design.jpg') }}" alt="" style="width:100%;"> 
</div>

{{-- nav and ban code stop from here --}}

{{-- cards code start from here --}}
<div class="container">
  <div class="row"> 

      
  <div class="col-lg-4 col-md-4">     
    <div class="card card-clr" style="width:20rem;">
      <button class="btn btn-danger btncart">
        <i class="fa fa-shopping-cart"  style="font-size: 30px;"></i>
      </button> 
      <button class="btn btn-danger btnwishlist">
        <i class="fa-solid fa-heart" style="font-size: 30px;"></i>
      </button>
      <img class="cardimg" src="{{ URL ('images/sofathree.jpg') }}" alt="" >
    <div class="card-body">
      <button class="btn btn-danger btnbuy">Buy Now</button>
      <h5 class="card-title text-center fontsize">Drink One Coffee</h5>
    </div>
    </div>
  </div>

  
  <div class="col-lg-4 col-md-4">     
    <div class="card card-clr" style="width:20rem;">
      <button class="btn btn-danger btncart">
        <i class="fa fa-shopping-cart"  style="font-size: 30px;"></i>
      </button> 
      <button class="btn btn-danger btnwishlist">
        <i class="fa-solid fa-heart" style="font-size: 30px;"></i>
      </button>
      <img class="cardimg" src="{{ URL ('images/sofathree.jpg') }}" alt="" >
    <div class="card-body">
      <button class="btn btn-danger btnbuy">Buy Now</button>
      <h5 class="card-title text-center fontsize">Drink One Coffee</h5>
    </div>
    </div>
  </div>

  
   
  <div class="col-lg-4 col-md-4">     
    <div class="card card-clr" style="width:20rem;">
       <button class="btn btn-danger salebtn">S <br> a <br> l <br> e 20%</button> 
      <button class="btn btn-danger btncart">
        <i class="fa fa-shopping-cart"  style="font-size: 30px;"></i>
      </button> 
      <button class="btn btn-danger btnwishlist">
        <i class="fa-solid fa-heart" style="font-size: 30px;"></i>
      </button>
      <img class="cardimg" src="{{ URL ('images/sofathree.jpg') }}" alt="" >
    <div class="card-body">
      <button class="btn btn-danger btnbuy">Buy Now</button>
      <h5 class="card-title text-center fontsize">Drink One Coffee</h5>
    </div>
    </div>
  </div>


</div>
</div>


{{-- cards codes stop from here --}}


  <h1 class="text-light abutheading">About <br> <div class="usfont"> Us</div> </h1>

    <img class="aboutusimg" src="{{ URL ('images/brooke-cagle-g1Kr4Ozfoac-unsplash.jpg') }}" alt="" style="width:900px;">
      <p class="text-light text-end textaboutus">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Earum dolor eligendi, molestiae accusamus tempore officia suscipit</p>

      <p class="text-light text-end textaboutus">Lorem ipsum dolor sit amet, consectetur adipisicing molestiae<br> accusamus tempore officia suscipit itaque voluptates exceptur</p>


      <h1 class="selectxt">Selected <br> <div class="workstxt"> Works </div></h1>
        <h3 class="text-iight besttext">Best Sofa set in Sri Lank</h3>
    <img class="sideimgseco" src="{{ URL ('images/Untit.jpg') }}" alt=""> 
    