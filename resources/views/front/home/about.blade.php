@extends('front.layout.template')

@section('title', 'About Laravel Blog - M.Irham')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4 shadow-sm">
                  
                    <div class="card-body">
                        <div class="small text-muted">{{ date('d/m/Y') }}</div>
                        <h2 class="card-title">About Laravel Blog</h2>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis voluptates
                            explicabo excepturi iusto, asperiores exercitationem ea, accusantium culpa magni
                            eos vitae laudantium in debitis rem saepe! Cumque voluptate nihil sit.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad excepturi corporis
                            fuga provident cumque doloremque! Corporis aut labore possimus perferendis
                            similique alias beatae illo, ex ducimus a nihil incidunt! Facere.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                @include('front.layout.side-widget')
            </div>
        </div>
    </div>
@endsection
