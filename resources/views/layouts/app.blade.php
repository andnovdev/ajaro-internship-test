<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ajaro Internship Test</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  <main class="py-5">
    @yield('content')
</main>
  <footer class="p-5 text-center">{{date('Y')}} &copy Sistem Pengolahan Barang. <br> Dibuat oleh <a href="https://instagram.com/_reassn">Andreas Novyanto</a>. </footer>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
