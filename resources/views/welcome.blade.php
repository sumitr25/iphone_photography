<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('style.scss') }}">

</head>
<body>
    <div class="container">
        <div id="app"></div>
    </div>
    <script src="/js/app.js"></script>
</body>
</html>