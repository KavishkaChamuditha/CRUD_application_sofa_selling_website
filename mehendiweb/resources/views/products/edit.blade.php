@extends('products.layout')

@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops</strong>There is a problem with your input.... Please check
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>                   
        @endforeach
    </ul>
</div>
@else
@endif

<div class="container">
    <div class="row">

 
<form action="{{ route ('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="fullform">
        <h1 class="text-dark" style="font-size:80px;">Create Products</h1>
        <div class="inputGroup">
            <input class="widthlabel" type="text" required="" autocomplete="off" name="pro_name" value="{{ $product->pro_name }}">
            <label class="text-light" for="pro_name">Product Name</label>
        </div>

        <div class="inputGroup">
            <input class="widthlabel" type="text" required="" autocomplete="off" name="description" value="{{ $product->description }}">
            <label class="text-light" for="description">Description</label>
        </div>

        <label class="text-light fontsize" for="category">Category</label>
        <select class="selectcss" name="category" id="category" value="{{ $product->category }}" required > 
            <option class="optionchse" value="hot_sales">hot_sales</option>
            <option class="optionchse" value="new_arrivales">new_arrivales</option>
            <option class="optionchse" value="Casual_Shirt">Casual_Shirt</option>
            <option class="optionchse" value="Accesosires">Accesosires</option>
            <option class="optionchse" value="Denims">Denims</option>
            <option class="optionchse" value="index_page_Casual_Shirt">index_page_Casual_Shirt</option>
            <option class="optionchse" value="index_page_Accesosires">index_page_Accesosires</option>
            <option class="optionchse" value="index_page_Denims">index_page_Denims</option>
        </select>

        <div class="inputGroup">
            <input class="widthlabel" type="number" required="" autocomplete="off" name="price" value="{{ $product -> price }}">
            <label class="text-light" for="price">Price</label>
        </div>

        
<div class="form-group">
    <label for="image">Product Image</label>
    <img src="{{ asset('uploads/productsImg/'.$product->image) }}" alt="Product Image" style="width:140px; height:190px;">
    <input class="widthlabel inputfile" name="image" type="file" autocomplete="off">
</div>
        

        <input type="submit" class="btn btn-success submitbtn" name="submit" id="submit" value="Edit Now" style="margin-top:20px;">
        <input type="submit" class="btn btn-danger camclebtn" name="cancle" id="cancle" value="CANCLE" style="margin-top:20px;">
    </div>
</form>
</div>
</div>