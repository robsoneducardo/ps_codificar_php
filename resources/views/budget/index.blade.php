@extends('layout.app')
@section('content')
{{--    <h1>Lista de Orçamentos</h1>--}}
    <a href="{{route("budget-create")}}" class="btn btn-primary">Criar novo orçamento</a>
    <table class="table">
        <thead>
            <th colspan="2">Filtros</th>
        </thead>
        <form method="get" action="{{route("budget-index")}}">
            <tr>
                <td>Vendedor:</td>
                <td>
                    <select name="seller_id" id="seller_id">
                        <option value=0>Todos</option>
                        @foreach($sellers as $seller)
                            <option value={{$seller->id}}>{{$seller->name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Cliente:</td>
                <td>
                    <select name="customer_id" id="customer_id">
                        <option value=0>Todos</option>
                        @foreach($customers as $customer)
                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button class="btn btn-success">Filtrar</button>
                </td>
            </tr>
        </form>
    </table>
    <table class="table table-striped">
        <thead>
            <th>Data/hora</th>
            <th>Vendedor</th>
            <th>Cliente</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th colspan="2">Ações</th>
        </thead>
        @foreach($budgets as $budget)
        <tr>
            <td>
                {{$budget->created}}
            </td>
            <td>
                {{$budget->seller->name}}
            </td>
            <td>
                {{$budget->customer->name}}
            </td>
            <td>
                {{$budget->description}}
            </td>
            <td>
                {{$budget->value}}
            </td>
            <td>
                <form action="{{route("budget-destroy", ['id' => $budget->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
            <td>
                <a href="{{route("budget-index", ['id' => $budget->id])}}" class="btn btn-secondary">Editar</a>
            </td>
        </tr>
        @endforeach
        <p id="id_cliente_filtrado"></p>
    </table>
    <script>
        document.getElementById("id_cliente_filtrado").innerHTML = "o id filtrado é "
        + document.getElementById('cliente_id').value;
    </script>

@endsection
