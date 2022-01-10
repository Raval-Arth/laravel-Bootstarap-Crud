<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@include('../layout/header')

<body class="bg-light">
    @include('../layout/navbar')

    <div class="container">
        @yield('content')
        @include('../layout/footer')
    </div>
</body>

</html>
