@extends('products.layout')
    
<head>
    <link rel="stylesheet" href="{{ URL('css/main.css')}}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


    <h1>This is a heding</h1>
    <table class="table table table-dark table-striped tablestyle">
        <thead >
        <tr >
            <td scope="col">id</td>
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
            <td scope="col" style="width:200px;">{{ $product -> updated_at }}</td>
        </tr>            
        @endforeach
    </table>

</body>
</html>