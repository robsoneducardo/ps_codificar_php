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
        <ul>
            <li>
                <a href="{{route('index')}}">Início</a>
            </li>
            <li>
                <a href="{{route('seller-index')}}">Vendedores</a>
            </li>
            <li>
                <a href="{{route('customer-index')}}">Clientes</a>
            </li>
            <li>
                <a href="{{route('budget-index')}}">Orçamentos</a>
            </li>
        </ul>
    </header>
    @yield('content')
</body>
</html>
