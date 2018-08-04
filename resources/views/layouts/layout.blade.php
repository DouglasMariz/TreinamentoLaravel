<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('components/toastr/toastr.min.css')}}">
    @stack('css')

</head>
<body>

<!-- Wrapper-->
<div id="wrapper">

@yield('sidebar')

<!-- Main view  -->
    <div class="container">
        @yield('content')
    </div>
    <!-- End page wrapper-->

    <footer>
        <div class="footer">
            <div class="text-center">
                <strong>Copyright</strong> Softcom Tecnologia &copy; 2018
            </div>
        </div>
    </footer>

</div>
<!-- End wrapper-->

<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('components/fontawesome/js/all.js')}}"></script>
<script src="{{asset('components/toastr/toastr.min.js')}}"></script>
@stack('scripts')

</body>
</html>
