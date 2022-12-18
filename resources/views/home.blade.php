<!DOCTYPE html>
<html lang="en">

<head>
    @include('landing.header')
</head>

<body>
    @include('landing.navbar')
    @include('landing.carousel')
    @include('landing.promo')
    {{--  {{ $slot }}  --}}
    @include('landing.footer')
</body>

</html>
