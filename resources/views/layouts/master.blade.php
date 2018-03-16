<!DOCTYPE html>
<html>

<head>
  <title>{{ $titl or 'ROBOSTART' }}</title>
  <!--meta-->
  <meta charset="UTF-8">
  <meta name="description" content="{{ $meta or 'ROBOSTART' }}"/>
  <META NAME="keywords" CONTENT="{{ $keywords or 'ROBOSTART' }}">
  <META NAME="AUTHOR" CONTENT="https://vk.com/glrlcocks">
  <meta name="revisit-after" content="5 days">
  <link rel="SHORTCUT ICON" href="assets/img/Logo1.png" type="image/x-icon">
    
  <!--соц сети-->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="{{ $titl or 'ROBOSTART' }}" />
  <meta property="og:description" content="{{ $meta or 'ROBOSTART' }}" />
  <meta property="og:image" href="storage/{{ $img or 'pages/air_fav.png' }}" content="storage/{{ $img or 'pages/Logo1.png' }}"  />
  <meta property="og:url" content="ccskm" />
  <meta property="og:site_name" content="AIR" />

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/lightbox.css" rel="stylesheet"> 
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/jquery.fancybox.css">
	<link rel="stylesheet" href="assets/css/component.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
@include('layouts.nav')
@yield('content')
@include('layouts.footer')
@include('layouts.scripts')

</body>
</html>
