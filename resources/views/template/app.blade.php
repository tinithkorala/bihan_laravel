<!-- =======================================
*
*   Developed By    :   OrendaX
*   Date            :   2021/08/19
*   Developer       :   Manasha H Perera
*   Client          :   Travel Bag (Pvt) Ltd (BIHAN)
*   Page            :   Home Page
*
 ======================================== -->


 <!doctype html>
 <html lang="en">
 
 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{ asset("b5/bootstrap.css") }}">
     <link rel="stylesheet" href="{{ asset("fonts.css") }}">
     <link rel="stylesheet" href="{{ asset("styles.css") }}">
 
     <title>Travel Bag - Home</title>
 </head>
 
 <body class="" style="height: 100vh;">

    <!-- navbar start -->
    @include('includes.navbar')
    <!-- navbar end -->


    <!-- content start -->
        @yield('content')
    <!-- content end -->

 
    <!-- footer start -->
    @include('includes.footer')
    <!-- footer end -->

 
 </body>
 
 </html>