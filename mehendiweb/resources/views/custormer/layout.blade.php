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

        <h1 class="fottertext">Let's work <br>
            together</h1>
           
        <div class="d-flex flex-row-reverse">
         <img class="fotterimg p-2" src="{{ URL ('images/letswork.jpg') }}" alt="">
        </div>


        <div class="address-container">
            <div class="left-column">
        <h2 class="p-2 text-light addrestxt" style="">Address</h2>
        </div>

        <div class="right-column">
            <p class="text-light marginaddres">123 Anywhere St., Any City
                State, Country 12345</p>
         </div>
         
    </div>
    

<br>
<br>

<br>

<br>

<br>

<br>

<br>

<br>

<br>

    </footer>
</body>
</html>