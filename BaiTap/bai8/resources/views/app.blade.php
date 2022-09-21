<!doctype html>

<html lang="en">

<head>

   <meta charset="UTF-8">

   <meta name="viewport"

         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <title>Document</title>

   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

   <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

<div class="container">

   <nav class="navbar navbar-expand-lg navbar-light bg-light">

       <a class="navbar-brand" href="#">Shop</a>

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

           <span class="navbar-toggler-icon"></span>

       </button>

 

       <div class="collapse navbar-collapse" id="navbarSupportedContent">

           <ul class="navbar-nav mr-auto">

               <li class="nav-item active">

                   <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>

               </li>

 

               <li class="nav-item">

                   <a class="nav-link" href="">Cart({{\Illuminate\Support\Facades\Session::get('cart') ? \Illuminate\Support\Facades\Session::get('cart')->totalQty : 0 }})</a>

               </li>

           </ul>

           <form class="form-inline my-2 my-lg-0">

               <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

           </form>

       </div>

   </nav>

 

   @yield('content')

</div>

</body>

</html>