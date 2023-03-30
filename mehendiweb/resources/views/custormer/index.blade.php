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


<div class="container">
  <div class="row"> 

    <h1 class="text-light text-center" style="margin-top:30px;">New Arrivales</h1>
{{-- cards code start from here --}}
    @foreach ($products as $product)    
    <div class="col-lg-4 col-md-4">     
      <div data-aos="fade-up" class="card card-clr" style="width:20rem;">
        <button class="btn btn-danger btncart">
          <i class="fa fa-shopping-cart"  style="font-size: 30px;"></i>
        </button> 
        <button class="btn btn-danger btnwishlist">
          <i class="fa-solid fa-heart" style="font-size: 30px;"></i>
        </button>
        <img class="cardimg" src="{{ asset('uploads/productsImg/'.$product->image) }}" alt="" >
      <div class="card-body">
        <button class="btn btn-danger btnbuy">Buy Now</button>
        <h5 class="card-title text-center fontsize">{{ $product -> pro_name }}</h5>
        <h5 class="card-title text-center fontsize">RS. {{ $product -> price }}</h5>
      </div>
      </div>
    </div>
  @endforeach
</div>{{-- container finish from here --}}
</div>{{-- row finish from here --}}

<img class="secondimglass" src="{{ URL('images/second_cover imag.jpg') }}" alt="" style="width:100%; margin-top:50px"> 

<div class="container">
<div class="row">

{{-- cards codes start  from here --}}
@foreach ($newArrivals as $product)    
  <div class="col-lg-4 col-md-4">     
    <div data-aos="fade-up" class="card card-clr" style="width:20rem;">
      <button class="btn btn-danger btncart">
        <i class="fa fa-shopping-cart"  style="font-size: 30px;"></i>
      </button> 
      <button class="btn btn-danger btnwishlist">
        <i class="fa-solid fa-heart" style="font-size: 30px;"></i>
      </button>
      <img class="cardimg" src="{{ asset('uploads/productsImg/'.$product->image) }}" alt="" >
    <div class="card-body">
      <button class="btn btn-danger btnbuy">Buy Now</button>
      <h5 class="card-title text-center fontsize">{{ $product -> pro_name }}</h5>
      <h5 class="card-title text-center fontsize">RS. {{ $product -> price }}</h5>
    </div>
    </div>
  </div>
@endforeach
{{-- cards codes stop from here --}}
</div>  {{-- container finish from here --}}
</div>  {{-- row finish from here --}}

 
    <div style="position:relative;">
      <img class="secondimglass" src="{{ URL('images/sofa.jpg') }}" alt="" style="width:100%; margin-top:50px">
      <div class="imgtextcha">
        we enjoy the challenge of <br> transforming a space into <br> something fresh and engaging.
      </div>
    </div>
    

    <div class="container">
      <div class="row">
      @foreach ($newArrivals as $product)    
        <div class="col-lg-4 col-md-4">     
          <div data-aos="fade-up" class="card card-clr" style="width:20rem;">
            <button class="btn btn-danger btncart">
              <i class="fa fa-shopping-cart"  style="font-size: 30px;"></i>
            </button> 
            <button class="btn btn-danger btnwishlist">
              <i class="fa-solid fa-heart" style="font-size: 30px;"></i>
            </button>
            <img class="cardimg" src="{{ asset('uploads/productsImg/'.$product->image) }}" alt="" >
          <div class="card-body">
            <button class="btn btn-danger btnbuy">Buy Now</button>
            <h5 class="card-title text-center fontsize">{{ $product -> pro_name }}</h5>
            <h5 class="card-title text-center fontsize">RS. {{ $product -> price }}</h5>
          </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>

    <h1 data-aos="zoom-in" class="abutheading">About <br> <div class="usfont"> Us</div> </h1>

        <img data-aos="fade-up-right" class="aboutusimg" src="{{ URL ('images/brooke-cagle-g1Kr4Ozfoac-unsplash.jpg') }}" alt="" style="width:900px;">
          <p class="text-light text-end textaboutus">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Earum dolor eligendi, molestiae accusamus tempore officia suscipit</p>

          <p class="text-light text-end textaboutus">Lorem ipsum dolor sit amet, consectetur adipisicing molestiae<br> accusamus tempore officia suscipit itaque voluptates exceptur</p>

          <h1  class="selectxt">Selected <br> <div class="workstxt"> Works </div></h1>
            <h3 class="text-iight besttext">Best Sofa set's in Sri Lanka</h3>
            <p class="text-light selecttext">Residential Project A </p>
            <p  class="text-light fulltext">Full interior design of client's single-detached home</p>

        <img data-aos="fade-up-right" class="sideimgseco" src="{{ URL ('images/firstimg.jpg') }}" alt="" style="width:800px;"> 
        
        {{-- two section images codes start from here --}}
        <img data-aos="fade-up-right" class="imgsections" src="{{ URL ('images/sidefirstimg.jpg') }}" alt="" style="width:600px;"> 
        <img data-aos="fade-up-right"  class="imgsection" src="{{ URL ('images/secondimgjpg.jpg') }}" alt="" style="width:800px;"> 
        <p class="text-light textmargin">At the client's request, the project theme was minimalist and modern. </p> 
        {{-- two section images codes stops from here --}}
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>    
    @section('content')
    
    @endsection
    