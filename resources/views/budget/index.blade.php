@extends('layout.app')
@section('content')
    <h1>Lista de Orçamentos</h1>
    <h2>Filtros</h2>
    <table>
        <tr>
            <td>Vendedor:</td>
            <td>
                <select name="vendedor" id="vendedor_id">
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
                <select name="cliente" id="cliente_id">
                    <option value=0>Todos</option>
                    @foreach($customers as $customer)
                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button class="submit">Filtrar</button>
            </td>
        </tr>
    </table>
    <table>
        <thead>
            <th>Data</th>
            <th>Vendedor</th>
            <th>Cliente</th>
            <th>Descrição</th>
            <th>Valor</th>
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
        </tr>
        @endforeach
    </table>

@endsection
