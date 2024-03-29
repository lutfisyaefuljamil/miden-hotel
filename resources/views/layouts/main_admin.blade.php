<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    @include('partials.title')
</head>

<body>
    @include('partials.navbar_admin')

    <div class="mt-4 pt-5 mb-5 pb-5 container" role="tablist">
        <h2 class="text-brown">{{ $title }}</h2>
        @yield('dashboard')
        @yield('kamar_admin')
        @yield('kelas_kamar')
        @yield('fasilitas_kamar')
        @yield('fasilitas_hotel')
    </div>

    @include('partials.footer_admin')

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
