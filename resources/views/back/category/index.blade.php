@extends('back.layout.template')

@section('title', 'List Categories - Admin')

@section('content')
    {{-- Content --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Categories</h1>
        </div>

        <div class="mt-3">
            {{-- Tombol Create --}}
            <button class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#modalCreate">Create</button>

            <div class="my-3">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            @if (session('success'))
    <div class="my-3">
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    </div>
@endif

            {{-- Tabel Kategori --}}
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Created At</th>
                        <th>Function</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>{{ $item->created_at}}</td>
                            <td>
                                <div class="text-center d-flex justify-content-center">
                                    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $item->id }}">Edit</button>
                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $item->id }}">Delete</button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No categories available.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Modal Create --}}
        @include('back.category.create-modal')

        {{-- Modal Update --}}
        @include('back.category.update-modal')

        {{-- Modal Delete --}}
        @include('back.category.delete-modal')
    </main>
@endsection
