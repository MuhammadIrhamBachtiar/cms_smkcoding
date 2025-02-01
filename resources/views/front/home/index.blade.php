@extends('front.layout.template')

@section('title', 'Laravel Blog - M.Irham')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ url('p/'.$latest_post->slug)}}"><img class="card-img-top featured-img" src="{{ asset('storage/back/' . $latest_post->img) }}" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ $latest_post->created_at->format('d-m-Y') }}</div>
                        <h2 class="card-title">{{ $latest_post->title }}</h2>
                        <p class="card-text">{{ Str::limit(strip_tags($latest_post->desc), 200, '...') }}</p>
                        <a class="btn btn-primary" href="{{ url('p/'.$latest_post->slug)}}">Read more →</a>
                    </div>
                </div>
                <div class="row">
                    @foreach ($articles->take(2) as $item) <!-- Ubah take(3) menjadi take(2) -->
                        <div class="col-lg-6">
                            <div class="card mb-4 shadow-sm">
                                <a href="{{ url('p/'.$item->slug)}}"><img class="card-img-top post-img" src="{{ asset('storage/back/'. $item->img) }}" alt="..." /></a>
                                <div class="card-body card-height">
                                    <div class="small text-muted">{{ $item->created_at->format('d-m-y') }}
                                        <a href="{{ url('category/'.$item->Category->slug) }}">{{ $item->Category->name }}</a>
                                    </div>
                                    <h2 class="card-title h4">{{ $item->title }}</h2>
                                    <p class="card-text">{{ Str::limit(strip_tags($item->desc), 200, '...') }}</p>
                                    <a class="btn btn-primary" href="{{ url('p/'.$item->slug)}}">Read more →</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pagination justify-content-center my-4">
                    {{ $articles->links() }}
                </div>
            </div>
            <div class="col-lg-4">
                @include('front.layout.side-widget')
            </div>
        </div>
    </div>
@endsection
