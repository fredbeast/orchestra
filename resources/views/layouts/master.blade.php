<!-- app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="We make websites."/>
    <meta name="author" content="Fred Parry"/>

    <title>Orchestra Design</title>

    <!-- Main CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
@include('includes.header')
@yield('content')
@include('includes.footer')

<!-- Main JS -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
