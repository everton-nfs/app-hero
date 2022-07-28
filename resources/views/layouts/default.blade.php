<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>AppHero</title>
</head>
<body>
    <header>
        <div class="container navbar">
            <a href="/"><h2>AppHero</h2></a>

            <div>
                <a href="{{ route('admin.product.create')}}">
                    <button>Cadastrar</button>
                </a>
                <a href="{{ route('admin.products')}}">
                    <button>Admin</button>
                </a>
            </div>

        </div>
    </header>

    @yield('content')

    {{-- <footer>
        <h2>AppHero - Footer</h2>
    </footer> --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>