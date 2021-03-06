<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-QVYTLW4XVT"></script>
  <script defer data-domain="megaphone.gorone.site" src="https://plausible.io/js/plausible.js"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-QVYTLW4XVT');
</script>

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- ファビコン -->
<link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
<!---icon-->
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<link rel="stylesheet" href="{{ mix('/css/custom.css') }}">
@livewireStyles

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-100">
  <div class="font-sans text-gray-900 antialiased">
    @include('parts.navigation-menu')
    @yield('content')
  </div>

  @livewireScripts
</body>
</html>
