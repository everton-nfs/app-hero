<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Everton Novaes">
    <title>AppHero</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark nav-app-hero">
        <div class="container">
            <a class="navbar-brand" a href="/">
                <img src="{{ asset('img/apphero.svg') }}">
            </a>
            <a href="{{ route('admin.product.create') }}" class="ms-auto">
                <button class="btn btn-outline-light btn-sm-ah" type="submit">
                    <span>Cadastrar </span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z" />
                    </svg>
                </button>
            </a>
            <div class="dropdown text-end ms-4">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('img/users/user.png') }}" alt="mdo" width="37" height="37" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                    <li><a class="dropdown-item" href="{{ route('admin.products') }}">Configurações</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>

</html>
