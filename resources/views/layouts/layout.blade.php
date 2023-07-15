<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pusher Test</title>
        <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4d349a1f95.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="antialiased">

        @yield("content")

        <script src="{{url("js/app.js")}}"></script>
        <script src="js/script.js"></script>
    </body>
</html>
      