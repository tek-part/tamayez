<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
@include('website.layouts.head')
</head>
<body>
@include('website.layouts.header')
@yield('content')
@include('website.layouts.footer')
<script src="{{ asset('public/asset/js/aos.js') }}"></script>
<script src="{{ asset('public/asset/js/custom.js') }}"></script>
<script>
    AOS.init();
</script>
</body>
</html>



