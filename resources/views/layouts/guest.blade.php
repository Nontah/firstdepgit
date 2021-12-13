<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
         <!-- <link href="b3css/cs/bootstrap.min.css" rel="stylesheet">
         <link href="b3css/cs/bootstrap.css" rel="stylesheet">-->
   <!-- TEST Styles -->
        <link rel="icon" type="image/x-icon" href="test/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="test/css/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="test/css/styles.css" rel="stylesheet" />

     
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
            <!--   <link href="b3css/js/bootstrap.min.js" rel="stylesheet" crossorigin="anonymous">
              <link href="b3css/js/popper.min.js" rel="stylesheet" crossorigin="anonymous">
                <link href="b3css/js/jquery-3.2.1.slim.min.js" rel="stylesheet" crossorigin="anonymous">-->
   <!-- Core theme JS--
        <script src="test/js/scripts.js"></script>


                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
                  <script src="test/wbjs/jquery-1.12.js"></script>
                        <script src="test/wbjs/jquery-uic.js"></script>
         
   
       
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Bio shop 2021</p></div>
        </footer>
</html>
