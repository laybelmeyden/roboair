<!DOCTYPE html>
<html>

<head>
  <title>{{ $titl or 'Сибирский робостарт' }}</title>
  <!--meta-->
  <meta charset="UTF-8">
  <meta name="description" content="{{ $meta or 'Сибирский робостарт' }}"/>
  <META NAME="keywords" CONTENT="{{ $keywords or 'Сибирский робостарт' }}">
  <META NAME="AUTHOR" CONTENT="https://vk.com/glrlcocks">
  <meta name="revisit-after" content="5 days">
  <link rel="SHORTCUT ICON" href="assets/img/Logo1.png" type="image/x-icon">
    
  <!--соц сети-->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="{{ $titl or 'Сибирский робостарт' }}" />
  <meta property="og:description" content="{{ $meta or 'Сибирский робостарт' }}" />
  <meta property="og:image" href="storage/{{ $img or 'assets/img/Logo1.png' }}" content="storage/{{ $img or 'assets/img/Logo1.png' }}"  />
  <meta property="og:url" content="ccskm" />
  <meta property="og:site_name" content="Сибирский робостарт" />

  <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" href="assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nivo-lightbox.css">
    <!-- Animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="assets/css/responsive.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
@include('layouts.nav')
@yield('content')
@include('layouts.footer')
@include('layouts.scripts')
</div>
</body>
</html>
