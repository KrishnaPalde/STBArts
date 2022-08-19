<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="{{ mix('js/app.js') }}" ></script>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> Shree Tulja Bhavani Arts</title>
    </head>
    <body style="overflow-x:hidden"> 
        @include('layout.nav')
        @yield('body')
    </body>
</html>