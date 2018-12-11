<!-- app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="We make websites."/>
    <meta name="author" content="Fred Parry"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,600,800,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <title>Orchestra Design</title>

    <!-- Main CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
@include('includes.header')
@yield('content')

{{-- include('includes.footer') --}}

<!-- Main JS -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
