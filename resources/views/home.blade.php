<!DOCTYPE html>
<html lang="en">

<head>
    @include('landing.header')
</head>

<body>
    @include('landing.navbar')
    @include('landing.carousel')
    @include('landing.promo')
    @include('landing.category')
    @include('landing.paket')
    @include('landing.post')
    @include('landing.profile')
    {{--  {{ $slot }}  --}}
    @include('landing.footer')
</body>

</html>
