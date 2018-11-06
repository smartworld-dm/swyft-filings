<!doctype html>
<html>
<head>

    @include('includes.head')
    
</head>
<body>

    <div id="wrapper">

        <header id="header" class="py-1 py-lg-0">
            @include('includes.header')
        </header>

        <main id="main">
            @yield('content')
        </main>

        <footer id="footer">
            @include('includes.footer')
        </footer>

    </div>

    <script src="{{asset('js/app.js')}}"></script>

</body>
</html>