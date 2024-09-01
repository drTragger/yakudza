<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="Авто із США, Європи, Кореї, Канади та Норвегії. Отримай бажане з вигодою до 40% від ринкової вартості України">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <!-- Standard favicon -->
    <link rel="icon" href="{{ asset('favicons/favicon.ico') }}" type="image/x-icon">

    <!-- Favicon PNG files -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/32x32.png') }}">
    <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('favicons/48x48.png') }}">
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('favicons/64x64.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicons/192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('favicons/512x512.png') }}">

    <!-- SVG Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicons/favicon.svg') }}">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/180x180.png') }}">

    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1241125230249235');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1241125230249235&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Meta Pixel Code -->
</head>
<body>
<main role="main">
    @yield('content')
</main>
<footer class="pb-5">
    @include('partials.footer')
</footer>
<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif

    @if(Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @endif
</script>
</body>
</html>
