<!-- app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    @yield('page_info')
    <meta name="author" content="Fred Parry"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131812166-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-131812166-1');
    </script>

    <!-- Open Graph -->
    @yield('facebook_meta')
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Main CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
@include('includes.header')
@yield('content')
@include('includes.footer')

<!-- Main JS -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smooth-scroll.polyfills.min.js') }}"></script>
<script>
    var scroll = new SmoothScroll('a[href*="#"]');
</script>
<script>

</script>
</body>
</html>
