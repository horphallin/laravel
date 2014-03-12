<html>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
			The current UNIX timestamp is {{ time() }}.
            @yield('content')
			Hello, {{ $name }}.
        </div>
    </body>
</html>