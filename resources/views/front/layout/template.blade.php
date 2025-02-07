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
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
@stack('css')

</head>
<body>
    <div class="min-vh-100 d-flex flex-column justify-content-between">


<!-- Responsive navbar -->
@include('front.layout.navbar')



        <!-- Page header -->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">{{ $config ['title']}}</h1>
                    <p class="lead mb-0">{{ $config ['caption'] }}</p>
                </div>
            </div>
        </header>

        <div class="mb-4 container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <a href="" target="_blank" rel="noopener noreferrer">
                        <img src="{{ $config['ads_header'] }}" alt="ads header" class="img-fluid" width="100%">
                    </a>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
                    @yield('content')

                    <div class="mb-4 container">
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-6">
                                <a href="" target="_blank" rel="noopener noreferrer">
                                    <img src="{{ $config['ads_footer'] }}" alt="ads header" class="img-fluid" width="100%">
                                </a>
                            </div>
                            <div class="col-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="py-5 bg-dark mt-4">
            <div class="container">
                <p class="m-0 text-center text-white">
                    Copyright &copy; {{ $config['footer'] }}{{ date('Y') }}
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
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
            </script>
        @stack('js')
    </body>
</html>
