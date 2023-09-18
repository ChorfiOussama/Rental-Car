<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet" />
    
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    
    @include('admin.header')
    @yield('content')
     <!-- Spinner Start -->

    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-grow text-primary" role="status"></div>
    </div> -->
    <!-- Spinner End -->
      <!-- Importing Necessary Javascript Files -->
      <script src="{{ asset('js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle-5.1.1.min.js') }}"></script>

    <!-- Custom Javascript File -->
    <!-- <script src="{{ asset('js/script.js') }}"></script> -->
    <script>
      window.addEventListener("load", function () {
        spinner.classList.remove("show"); 
      });
    </script>
  </body>
</html>