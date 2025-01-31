 {{-- resources/views/front/layout/side-widget.blade.php --}}

<!-- Search widget-->
<section class="card mb-4 shadow-sm">
    <h4 class="card-header bg-light">Search</h4>
    <div class="card-body">
        <form action="{{ route('search') }}" method="POST">
            @csrf
            <div class="input-group">
                <input class="form-control" type="text" name="keyword" placeholder="Search articles..." />
                <button class="btn btn-primary" id="button-search" type="submit">Submit</button>
            </div>
        </form>
    </div>
</section>

<!-- Categories widget-->
<section class="card mb-4 shadow-sm">
    <h4 class="card-header bg-light">Categories</h4>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div>
                    @foreach ($categories as $item)
                    <span><a href="{{ url('category/'. $item->slug) }}" class="bg-primary badge text-white unstyle-categories">{{ $item->name }}</a></span>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Side widget-->
<section class="card mb-4 shadow-sm">
    <h4 class="card-header bg-light">Side Widget</h4>
    <div class="card-body">
        <p class="mb-0">You can put anything you want inside of these side widgets. They are easy to use,
        and feature the Bootstrap 5 card component!</p>
    </div>
</section>
