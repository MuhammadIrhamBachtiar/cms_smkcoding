@extends('front.layout.template')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Konten Utama (8 kolom) -->
            <div class="col-lg-8 order-1 order-lg-0"> <!-- Urutan untuk mobile/desktop -->
                <div class="card mb-4 shadow-sm">
                    <a href="{{ url('p/'.$article->slug) }}">
                        <img class="card-img-top single-img" src="{{ asset('storage/back/'. $article->img) }}" alt="...">
                    </a>
                    <div class="card-body">
                        <div class="small text-muted">{{ $article->created_at->format('d-m-Y') }}</div>
                        <h1 class="card-title">{{ $article->title }}</h1>
                        <p class="card-text">{!! $article->desc !!}</p>
                    </div>
                </div>
            </div>

            <!-- Side Widget (4 kolom) -->
            <div class="col-lg-4 order-0 order-lg-1 mb-4 mb-lg-0"> <!-- Urutan & spacing -->
                @include('front.layout.side-widget')
            </div>
        </div>
    </div>
@endsection
