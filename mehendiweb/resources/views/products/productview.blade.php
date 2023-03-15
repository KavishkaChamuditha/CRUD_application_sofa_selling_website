@extends('products.layout')

<div class="container">
    <div class="row">
 
<div class="row">
    <h1>The Products</h1>
    <div class="card">
        <div class="card-body text-dark">
          <h4>{{ $product-> id }}</h4>
          <h4>Product name: {{ $product-> pro_name }}</h4>
          <p>Category: {{ $product-> category }}</p>
          <p>Description: {{ $product-> description }}</p>
          <p>Price: {{ $product-> price }}</p>
          <td scope="col"> <img src="{{ asset('uploads/productsImg/'.$product->image) }}" alt="Product Image" style="width:340px; height:500px;"></td>
         
        </div>
      </div>
      


</div>

       
</div>
</div>
