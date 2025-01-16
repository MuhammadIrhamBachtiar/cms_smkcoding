@extends('back.layout.template')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endpush

@section('title', 'List Articles - Admin')

@section('content')
    {{-- Content --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Articles</h1>
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
            <table class="table table-striped table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>View</th>
                        <th>Status</th>
                        <th>Public Date</th>
                        <th>Function</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->views }}</td>
                        @if ($item->status == 0)
    <td>
        <span class="badge bg-danger">Private</span>
    </td>
@else
    <td>
        <span class="badge bg-success">Published</span>
    </td>
@endif
                        <td>{{ $item->publish_date }}</td>
                        <td class="text-center">
                            <a href="" class="btn btn-secondary">Detail</a>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </main>
@endsection

@push('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable(); // Perbaiki di sini, ganti dataTabel menjadi dataTable
    });
</script>
@endpush