<html>
<head>
    <title>Ducky: @yield('title') </title>
    @include('includes.head')
</head>
@include('includes.login')
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

            @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
