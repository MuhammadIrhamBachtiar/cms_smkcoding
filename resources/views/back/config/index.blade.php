@extends('back.layout.template')

@section('title', 'List Categories - Admin')

@section('content')
    {{-- Content --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Config</h1>
        </div>

        <div class="mt-3">

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
                        <th>Value</th>
                        <th>Function</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($config as $item => $key)
<tr>
    <td>{{ $config->firstItem() + $item }}</td>
    <td>{{ $key->name }}</td>
    <td>{{ $key->value }}</td>
    <td>
        <div class="text-center">
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $key->id }}">Edit</button>
        </div>
    </td>
</tr>
@endforeach
                </tbody>
            </table>
        </div>
        <div>
            {{ $config->links() }}
        </div>
        @include('back.config.update-modal')
    </main>
@endsection
