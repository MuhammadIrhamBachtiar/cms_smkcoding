@extends('front.layout.template')

@section('title', $article->title . ' - M.Irham')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Konten Utama (8 kolom) -->
            <div class="col-lg-8" data-aos="fade-up"> <!-- Urutan untuk mobile/desktop -->
                <div class="card mb-4 shadow-sm">
                    <a href="{{ url('p/'.$article->slug) }}">
                        <img class="card-img-top single-img" src="{{ asset('storage/back/'. $article->img) }}" alt="{{ $article->title }}">
                    </a>
                    <div class="card-body">
                        <div class="small text-muted">
                            <span class="sl-2">{{ $article->created_at->format('d-m-Y') }}</span>
                            <span class="ml-2">
                                <a href="{{ url('category/'.$article->Category->slug) }}">
                                  {{ $article->Category->name }}
                                </a>
                              </span>
                            <span class="sl-2">{{ $article->views }}</span>x
                        </div>
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
