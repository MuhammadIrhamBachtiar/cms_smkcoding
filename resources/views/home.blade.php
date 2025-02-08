@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Style khusus untuk custom button -->
    <style>
        .custom-button {
            /* Variabel */
            --button_radius: 0.75em;
            --button_color: #e8e8e8;
            --button_outline_color: #000000;
            font-size: 17px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            border-radius: var(--button_radius);
            background: var(--button_outline_color);
            display: inline-block;
            text-decoration: none;
        }
        .custom-button .button_top {
            display: block;
            box-sizing: border-box;
            border: 2px solid var(--button_outline_color);
            border-radius: var(--button_radius);
            padding: 0.75em 1.5em;
            background: var(--button_color);
            color: var(--button_outline_color);
            transform: translateY(-0.2em);
            transition: transform 0.1s ease;
        }
        .custom-button:hover .button_top {
            /* Mengangkat tombol saat hover */
            transform: translateY(-0.33em);
        }
        .custom-button:active .button_top {
            /* Mengembalikan posisi tombol saat diklik */
            transform: translateY(0);
        }
    </style>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Link dengan style custom -->
                    <a class="custom-button" href="{{ url('dashboard/') }}">
                        <span class="button_top">Masuk</span>
                    </a>

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
