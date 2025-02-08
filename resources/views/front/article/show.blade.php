@extends('front.layout.template')

@section('title', $article->title . ' - M.Irham')

@section('content')
<div class="container">
    <div class="row">
        <!-- Konten Utama (8 kolom) -->
        <div class="col-lg-8" data-aos="fade-up">
            <div class="card mb-4 shadow-sm">
                <a href="{{ url('p/' . $article->slug) }}">
                    <img class="card-img-top single-img" src="{{ asset('storage/back/' . $article->img) }}" alt="{{ $article->title }}">
                </a>
                <div class="card-body">
                    <div class="small text-muted">
                        <span class="sl-2">{{ $article->created_at->format('d-m-Y') }}</span>
                        <span class="ml-2">
                            {{ $article->User->name }}
                            <a href="{{ url('category/' . $article->Category->slug) }}">
                                {{ $article->Category->name }}
                            </a>
                        </span>
                        <span class="sl-2">{{ $article->views }}</span>x
                    </div>
                    <h1 class="card-title">{{ $article->title }}</h1>
                    <p class="card-text">{!! $article->desc !!}</p>
                    <div class="mt-5">
                        <p style="font-size: 20px"><b>Share this</b></p>

                        <!-- Container tombol share dengan jarak antar tombol -->
                        <div class="share-buttons">
                            <!-- Tombol Share Facebook -->
                            <a class="share-btn facebook-share" href="https://www.facebook.com/sharer.php?u={{ url()->current() }}" target="_blank">
                                <div class="sign">
                                    <svg fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                                        <path d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z"></path>
                                    </svg>
                                </div>
                                <div class="text">Facebook</div>
                            </a>

                            <!-- Tombol Share WhatsApp -->
                            <a class="share-btn whatsapp-share" href="https://api.whatsapp.com/send?text={{ url()->current() }}" target="_blank">
                                <div class="sign">
                                    <svg class="socialSvg whatsappSvg" viewBox="0 0 16 16">
                                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
                                    </svg>
                                </div>
                                <div class="text">WhatsApp</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Side Widget (4 kolom) -->
        <div class="col-lg-4 order-0 order-lg-1 mb-4 mb-lg-0">
            @include('front.layout.side-widget')
        </div>
    </div>
</div>

<!-- CSS untuk tombol share -->
<style>
.share-btn {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    width: 45px;
    height: 45px;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    transition-duration: 0.3s;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
    text-decoration: none;
}
.share-btn .sign {
    width: 100%;
    transition-duration: 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
}
.share-btn .sign svg {
    width: 30px;
}
.share-btn .sign svg path {
    fill: white;
}
.share-btn .text {
    position: absolute;
    right: 0;
    width: 0;
    opacity: 0;
    color: white;
    font-size: 1.2em;
    font-weight: 600;
    transition-duration: 0.3s;
}
.share-btn:hover {
    width: 150px;
    border-radius: 40px;
}
.share-btn:hover .sign {
    width: 30%;
    padding-left: 10px;
}
.share-btn:hover .text {
    opacity: 1;
    width: 70%;
    padding-right: 10px;
}
.share-btn:active {
    transform: translate(2px, 2px);
}
.facebook-share {
    background-color: #0163E0;
}
.whatsapp-share {
    background-color: #00d757;
}
.share-buttons {
    display: flex;
    gap: 10px; /* Memberikan jarak 10px antar tombol */
}
</style>
@endsection
