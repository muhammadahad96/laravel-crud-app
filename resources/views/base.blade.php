<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Crud App</title>
  <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/flatly/bootstrap.min.css')}}">
</head>
<body>
  <div class="container mt-5">
    @yield('main')
  </div>
  <script src="{{asset('js/app.js')}}"></script>
</body>
</html>