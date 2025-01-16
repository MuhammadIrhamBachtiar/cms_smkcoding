@extends('back.layout.template')

@section('title', 'Detail Articles - Admin')

@section('content')
    {{-- Content --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Detail Articles</h1>
        </div>

        <div class="mt-3">
            {{-- Create Button --}}
            <a href="{{ route('article.create') }}" class="btn btn-success mb-2">Create</a>

            @if($article)
                {{-- Articles Table --}}
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Title</th>
                        <td>: {{ $article->title }}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>: {{ $article->category ? $article->category->name : 'Category not available' }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>: {{ $article->desc }}</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>
                            @if ($article->img && Storage::disk('public')->exists('back/'.$article->img))
                                <a href="{{ asset('storage/back/'.$article->img) }}" target="_blank" rel="noopener noreferrer">
                                    <img src="{{ asset('storage/back/'.$article->img) }}" alt="{{ $article->title }}" width="50%" class="img-fluid">
                                </a>
                            @else
                                <span class="text-muted">No Image Available</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Views</th>
                        <td>: {{ $article->views ?? '0' }}x</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>: <span class="badge {{ $article->status == 1 ? 'bg-success' : 'bg-danger' }}">
                            {{ $article->status == 1 ? 'Published' : 'Private' }}
                        </span></td>
                    </tr>
                    <tr>
                        <th>Publish Date</th>
                        <td>: {{ $article->publish_date ?? 'Not set' }}</td>
                    </tr>
                </table>
            @else
                <div class="alert alert-warning">
                    Article not found or has been deleted.
                </div>
            @endif

            <div class="float-end">
                <a href="{{ url('article') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </main>
@endsection