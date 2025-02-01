<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="author" content="M.Irham" />
        @stack('meta-seo')
        <title>@yield('title')</title>

<link rel="icon" type="image/x-icon" href="{{ asset('frontu/img/favicon.ico') }}" />

<!-- Core theme CSS (includes Bootstrap) -->
<link href="{{ asset('frontu/css/styles.css') }}" rel="stylesheet" />
<link href="{{ asset('frontu/css/custom.css') }}" rel="stylesheet" />

@stack('css')

</head>
<body>

<!-- Responsive navbar -->
@include('front.layout.navbar')



        <!-- Page header -->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <p class="lead mb-0">A Professional Blog Platform Built with Bootstrap 5</p>
                </div>
            </div>
        </header>

        <!-- Main content -->
        <div class="container">
            <div class="row">
                <!-- Main Content Column -->
                <div class="col-lg-12"> <!-- Diubah menjadi full width -->
                    @yield('content')
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="py-5 bg-dark mt-4">
            <div class="container">
                <p class="m-0 text-center text-white">
                    Copyright &copy; Your Website {{ date('Y') }}
                    @if(date('Y') > 2023)
                        - {{ date('Y') }}
                    @endif
                </p>
            </div>
        </footer>

        <!-- Bootstrap core JS dengan integritas SRI -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous">
        </script>

        <!-- Core theme JS -->
        <script src="{{ asset('frontu/js/scripts.js') }}"></script>
        @stack('js')
    </body>
</html>
