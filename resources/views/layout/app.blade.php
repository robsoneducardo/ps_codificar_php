<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
{{--        <nav class="navbar navbar-dark bg-dark">--}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="{{route('index')}}"  class="navbar-brand">Início</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('seller-index')}}" class="navbar-brand">Vendedores</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('customer-index')}}" class="navbar-brand">Clientes</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('budget-index')}}" class="navbar-brand">Orçamentos</a>
                </li>
            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>
