<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />



    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main/mainlayout/animate.css') }}" />



</head>

<body>
    <!-- Page Preloder -->
    

    <!-- Header section -->
    <header class="header-section">
        {{-- navigation bar --}}
        @include('main.layout.includes.header')
    </header>

    <main class="">

     

           

            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
        </div>
        {{-- main content --}}
        @yield('content')

    </main>
   


   
</body>

</html>