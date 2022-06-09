<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') - {{ env('APP_NAME') }}</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

@yield('content')

<footer id="footer">
  <div class="container">
    <p>{!! __('All rights reserved &copy; 2022') !!}</p>
  </div>
</footer>
@stack('scripts')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>