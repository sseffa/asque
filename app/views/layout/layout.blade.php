<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Asque</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{ HTML::script('https://code.jquery.com/jquery-1.10.2.min.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::style('themes/Lumen/bootstrap.css') }}
    {{ HTML::style('assets/css/style.css') }}
    <style>
        @section('styles')
        body {
          padding-top: 100px;
        }
        blockquote {
            font-size: 13.5px;
        }
        a:hover {
            text-decoration:none;
        }
        @show
    </style>
</head>
<body>
@include('layout/menu')
@yield('content')
@include('layout/footer')
</body>
</html>
