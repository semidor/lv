<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKS</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        <app></app>
</div>
<script src="{{mix('js/app.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

</body>
</html>