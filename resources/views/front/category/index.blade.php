@extends('front.layout.template')

@section('title', 'Category ' . $category->name . ' - M.irham')

@section('content')
    <div class="container">
        <div class="mb-3">
            <form action="{{ route('search') }}" method="POST">
                @csrf
                <div class="input-group shadow-lg rounded-pill">
                    <input type="text"
                        name="keyword"
                        class="form-control rounded-pill border-0 ps-4"
                        placeholder="Search articles..."
                        value="{{ $keyword ?? '' }}"
                        style="height: 50px;">
                    <button type="submit"
                        class="btn btn-primary rounded-pill px-4"
                        style="height: 50px; margin-left: -35px;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>

        <p>Showing articles with category: <b>{{ $category->name }}</b></p>

        <div class="row">
            @forelse($articles as $item)
                <div class="col-4" data-aos="flip-up">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ url('p/'.$item->slug) }}">
                            <img class="card-img-top post-img" src="{{ asset('storage/back/'.$item->img) }}" alt="..." />
                        </a>
                        <div class="card-body card-height">
                            <div class="small text-muted">
                                {{ $item->created_at->format('d-m-Y') }} | {{ $item->User->name }} |
                                <a href="{{ url('category/'.$item->Category->slug) }}">{{ $item->Category->name }}</a>
                            </div>
                            <h2 class="card-title h4">{{ $item->title }}</h2>
                            <p class="card-text">
                                {{ Str::limit(strip_tags($item->desc), 200, '...') }}
                            </p>
                            <a class="btn btn-primary" href="{{ url('p/'.$item->slug) }}">Read more →</a>
                        </div>
                    </div>
                </div>
            @empty
                <h3>No articles found</h3>
            @endforelse
        </div>

        {{ $articles->appends(['keyword' => request('keyword')])->links() }}
    </div>
@endsection
