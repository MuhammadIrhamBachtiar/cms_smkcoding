<style>
    /* Membatasi style hanya untuk navbar dengan kelas .navbar-custom */
    .navbar-custom {
        position: relative;
        overflow: visible; /* Pastikan dropdown dapat meluap */
        background: linear-gradient(90deg, #1a1a1a, #3a3a3a); /* Background gradient */
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Tambah bayangan untuk depth */
    }

    .navbar-custom .light-effect {
        position: absolute;
        top: 0;
        left: -100%;
        width: 50%;
        height: 100%;
        background: linear-gradient(
            90deg,
            transparent,
            rgba(255, 255, 255, 0.4),
            transparent
        );
        transform: skewX(-20deg);
        animation: light 4s infinite;
        filter: blur(10px);
    }

    @keyframes light {
        0% {
            left: -100%;
        }
        50% {
            left: 150%;
        }
        100% {
            left: 150%;
        }
    }

    /* Efek hover untuk menu */
    .navbar-custom .nav-link {
        position: relative;
        transition: color 0.3s, text-shadow 0.3s;
        font-weight: 500;
    }

    .navbar-custom .nav-link:hover {
        color: #fff !important;
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.7), 0 0 20px rgba(255, 255, 255, 0.5);
    }

    /* Styling dasar navbar */
    .navbar-custom.navbar-dark.bg-dark {
        background-color: transparent !important;
    }

    /* Efek border menyala */
    .navbar-custom::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: linear-gradient(90deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.5));
        z-index: -1;
        filter: blur(10px);
        opacity: 0.5;
    }

    /* Styling dropdown berbasis card */
    .navbar-custom .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        margin-top: 0.5rem;
        padding: 0;
        border: none;
        background: transparent;
    }

    .navbar-custom .dropdown-menu .card {
        width: 200px;
        background-color: rgba(36, 40, 50, 1);
        background-image: linear-gradient(
            139deg,
            rgba(36, 40, 50, 1) 0%,
            rgba(36, 40, 50, 1) 0%,
            rgba(37, 28, 40, 1) 100%
        );
        border-radius: 10px;
        padding: 15px 0;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .navbar-custom .dropdown-menu .card .separator {
        border-top: 1.5px solid #42434a;
    }

    .navbar-custom .dropdown-menu .card .list {
        list-style-type: none;
        display: flex;
        flex-direction: column;
        gap: 8px;
        padding: 0 10px;
    }

    .navbar-custom .dropdown-menu .card .list .element {
        display: flex;
        align-items: center;
        color: #7e8590;
        gap: 10px;
        transition: all 0.3s ease-out;
        padding: 4px 7px;
        border-radius: 6px;
        cursor: pointer;
    }

    .navbar-custom .dropdown-menu .card .list .element svg {
        width: 19px;
        height: 19px;
        transition: all 0.3s ease-out;
    }

    .navbar-custom .dropdown-menu .card .list .element .label {
        font-weight: 600;
    }

    .navbar-custom .dropdown-menu .card .list .element:hover {
        background-color: #5353ff;
        color: #ffffff;
        transform: translate(1px, -1px);
    }

    .navbar-custom .dropdown-menu .card .list .delete:hover {
        background-color: #8e2a2a;
    }

    .navbar-custom .dropdown-menu .card .list .element:active {
        transform: scale(0.99);
    }

    .navbar-custom .dropdown-menu .card .list:not(:last-child) .element:hover svg {
        stroke: #ffffff;
    }

    .navbar-custom .dropdown-menu .card .list:last-child svg {
        stroke: #bd89ff;
    }

    .navbar-custom .dropdown-menu .card .list:last-child .element {
        color: #bd89ff;
    }

    .navbar-custom .dropdown-menu .card .list:last-child .element:hover {
        background-color: rgba(56, 45, 71, 0.836);
    }
  </style>

  <nav class="navbar navbar-custom navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ $config['logo'] }}" alt="logo" class="img-fluid" width="20%">
            {{ $config['blogname'] }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/articles') }}">Articles</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu">
                        <div class="card">
                            <ul class="list">
                                @foreach ($category_navbar as $item)
                                    <li class="element">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="#7e8590" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-folder">
                                            <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 2h7a2 2 0 0 1 2 2z"></path>
                                        </svg>
                                        <a class="label" href="{{ url('category/'.$item->slug) }}">{{ $item->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="separator"></div>
                            <ul class="list">
                                <li class="element">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="#7e8590" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-grid">
                                        <rect x="3" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="14" width="7" height="7"></rect>
                                        <rect x="3" y="14" width="7" height="7"></rect>
                                    </svg>
                                    <a class="label" href="{{ url('all-category') }}">All Categories</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Light Effect -->
    <div class="light-effect"></div>
  </nav>
