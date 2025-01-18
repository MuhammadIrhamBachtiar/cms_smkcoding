@extends('back.layout.template')

@section('title', 'Update Articles - Admin')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Update Articles</h1>
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

                <form action="{{ url('article/' . $article->id) }}" method="post" enctype="multipart/form-data" id="updateForm">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="oldImg" value="{{ $article->img }}">

                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" 
                                value="{{ old('title', $article->title) }}" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control" required>
                                    <option value="" hidden>-- choose --</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}" {{ $item->id == $article->category_id ? 'selected' : '' }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="desc">Description</label>
                        <textarea name="desc" id="myeditor" cols="30" rows="10" class="form-control" required>{{ old('desc', $article->desc) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="img">Image (Max 2MB)</label>
                        <input type="file" name="img" id="img" class="form-control" accept="image/*">
                        <div class="mt-1">
                            <small>Current Image:</small><br>
                            <img src="{{ asset('storage/back/' . $article->img) }}" class="img-thumbnail img-preview" width="100px">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="" hidden>-- choose --</option>
                                    <option value="1" {{ $article->status == 1 ? 'selected' : null }}>Publish</option>
                                    <option value="0" {{ $article->status == 0 ? 'selected' : null }}>Private</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="publish_date">Publish Date</label>
                                <input type="date" name="publish_date" id="publish_date" class="form-control"
                                value="{{ old('publish_date', $article->publish_date) }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="float-end">
                        <button type="submit" class="btn btn-success" id="submitBtn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
@endpush

@push('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
        // Initialize CKEditor
        CKEDITOR.replace('myeditor', {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=' + $('meta[name="csrf-token"]').attr('content'),
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=' + $('meta[name="csrf-token"]').attr('content'),
            clipboard_handleImages: false
        });

        // Image Preview
        $("#img").change(function() {
            previewImage(this);
        });

        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.img-preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Form Submit Handler
        $('#updateForm').on('submit', function(e) {
            e.preventDefault();
            
            // Update CKEditor content before submission
            for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
            }

            var form = $(this);
            var submitBtn = $('#submitBtn');
            submitBtn.prop('disabled', true);

            $.ajax({
                url: form.attr('action'),
                method: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Article updated successfully',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        window.location.href = '{{ url("article") }}';
                    });
                },
                error: function(xhr) {
                    submitBtn.prop('disabled', false);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong! Please try again.',
                    });
                }
            });
        });

        // Display success message if exists in session
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session("success") }}',
                showConfirmButton: false,
                timer: 1500
            });
        @endif
    });
</script>
@endpush