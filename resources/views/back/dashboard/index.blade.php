@extends('back.layout.template')

@section('title', 'Dashboard - Admin')

@section('content')
    {{-- Content --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
        </div>

        {{-- Cards Section --}}
        <div class="row">
            <div class="col-md-6">
                <div class="card text-bg-primary mb-3">
                    <div class="card-header">Total Articles</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $total_articles ?? 0 }} Articles</h5>
                        <p class="card-text">
                            <a href="{{ url('article') }}" class="text-white">View</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-bg-secondary mb-3">
                    <div class="card-header">Total Categories</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $total_categories ?? 0 }} Categories</h5>
                        <p class="card-text">
                            <a href="{{ url('categories') }}" class="text-white">View</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Latest and Popular Articles Tables --}}
        <div class="row mt-4">
            {{-- Latest Articles --}}
            <div class="col-md-6">
                <h4>Latest Articles</h4>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Create At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($latest_article as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title ?? 'Untitled' }}</td>
                                <td>{{ $item->category->name ?? 'Uncategorized' }}</td>
                                <td>{{ $item->created_at ? $item->created_at->format('d M Y, H:i') : '-' }}</td>
                                <td class="text-center">
                                    <a href="{{ url('article/' . $item->id) }}" class="btn btn-sm btn-secondary">Detail</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No Latest Articles Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Popular Articles --}}
            <div class="col-md-6">
                <h4>Popular Articles</h4>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>View</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($popular_article as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->category->name}}</td>
                                <td>{{ $item->views  }}x</td>
                                <td class="text-center">
                                    <a href="{{ url('article/' . $item->id) }}" class="btn btn-sm btn-secondary">Detail</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No Popular Articles Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
