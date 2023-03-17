@extends('products.layout')
    
<head>
    <link rel="stylesheet" href="{{ URL('css/main.css')}}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


    <h1>Product List</h1>
    <div class="card card-border">
    <table class="table table tablestyle text-light">
        <thead >
        <tr ></tr>
            <td scope="col" style="width:200px !important;">id</td>
            <td scope="col">Product Name</td>
            <td scope="col">Category</td>
            <td scope="col">Description</td>
            <td scope="col">Price</td>
            <td scope="col">Image</td>
            <td scope="col">Created At</td>
            <td scope="col">Updated At</td>
        </tr>
        <thead>
        @foreach ($products as $product)
        <tr>
            <td scope="col" style="width:200px;">{{ $product -> id }}</td>
            <td scope="col" style="width:200px;">{{ $product -> pro_name }}</td>
            <td scope="col" style="width:200px;">{{ $product -> category }}</td>
            <td scope="col" style="width:200px;">{{ $product -> description }}</td>
            <td scope="col" style="width:200px;">{{ $product -> price }}</td>
            <td scope="col"> <img src="{{ asset('uploads/productsImg/'.$product->image) }}" alt="Product Image" style="width:140px; height:190px;"></td>
            <td scope="col" style="width:200px;">{{ $product -> created_at }}</td>
            <td> 
                <form action="{{ route('products.destroy', $product -> id) }}" method= "POST" enctype="multipart/form-data">
                    <a href="{{ route('products.edit', $product -> id) }}"> <div class="btn btn-primary">Edit</div> </a>
                    <a href="{{ route('products.productview', $product-> id) }}" class="btn btn-success">Show</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this product?');" class="btn btn-danger">Delete</button>
                  </form>
            </td>
        </tr>            
        @endforeach
    </table>
    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>
    
</div>
</div>
</div>
</body>

</html>