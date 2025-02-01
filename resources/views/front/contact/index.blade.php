@extends('front.layout.template')

@section('title', 'Contact Laravel Blog - M.Irham')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8" data-aos="zoom-in">
                <div class="card mb-4 shadow-sm">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.4660627379844!2d107.58265437499571!3d-6.834589093163409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e1f643ae47f9%3A0x83e4d32ce7457ba1!2sApiq%20snack!5e0!3m2!1sen!2sid!4v1738418168424!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="card-body">
                        <div class="small text-muted">{{ date('d/m/Y') }}</div>
                        <h2 class="card-title">Contact Laravel Blog</h2>
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
                        <ul>
                            <li>Phone:  +6282120191504</li>
                            <li>Email:  irhammuhamad124@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                @include('front.layout.side-widget')
            </div>
        </div>
    </div>
@endsection
