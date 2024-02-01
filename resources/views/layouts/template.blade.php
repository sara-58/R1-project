<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    <div class="site-wrap" id="home-section">
        @include('includes.mobileMenu')
        @include('includes.navbar')

        @yield('content')
        <footer class="site-footer">
            @include('includes.footer')
        </footer>
    </div>
    @include('includes.script')
</body>

</html>