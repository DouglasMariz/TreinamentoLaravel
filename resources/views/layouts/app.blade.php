<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>

    @stack('css')

</head>
<body>

<!-- Wrapper-->
<div id="wrapper">

    @yield('sidebar')

    <!-- Page wraper -->
    <div id="page-wrapper">
        <!-- Main view  -->
        <div class="conteudo">
            @yield('content')
        </div>
    </div>
    <!-- End page wrapper-->

    <footer>
        <div class="footer">
            <div class="pull-right">
                <strong>Copyright</strong> Softcom Tecnologia &copy; 2018
            </div>
        </div>
    </footer>

</div>
<!-- End wrapper-->

@stack('scripts')

</body>
</html>
