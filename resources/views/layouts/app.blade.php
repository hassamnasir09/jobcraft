<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}




        {{-- ========================== --}}

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

        <link rel="stylesheet" href="/plugins/jobportal/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="/plugins/jobportal/css/animate.css">

        <link rel="stylesheet" href="/plugins/jobportal/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/plugins/jobportal/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="/plugins/jobportal/css/magnific-popup.css">

        <link rel="stylesheet" href="/plugins/jobportal/css/aos.css">

        <link rel="stylesheet" href="/plugins/jobportal/css/ionicons.min.css">

        <link rel="stylesheet" href="/plugins/jobportal/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="/plugins/jobportal/css/jquery.timepicker.css">


        <link rel="stylesheet" href="/plugins/jobportal/css/flaticon.css">
        <link rel="stylesheet" href="/plugins/jobportal/css/icomoon.css">
        <link rel="stylesheet" href="/plugins/jobportal/css/style.css">
        <style type="text/css">
          /*  Header
    ==================================== */
    .topbar{
      background-color: #37393c;
      padding: 5px 0;
      /* color:#fff; */
      font-size: 11px !important;
    }
    /*.topbar .container .row {
        margin: 0;
      padding:0;
    }
    .topbar .container .row .col-md-12 {
      padding:0;
    }
    .topbar p{
      margin:0;
      display:inline-block;
      font-size: 11px;
      color: #f1f6ff;
    }
    .topbar p > i{
      margin-right:5px;
      color: #00bcd4;
    }
    .topbar p:last-child{
      text-align:right;
    }
     */

        </style>
        {{-- ========================== --}}
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')


                {{ $slot }}
                @include('layouts.footer')


        </div>
    </body>
</html>
