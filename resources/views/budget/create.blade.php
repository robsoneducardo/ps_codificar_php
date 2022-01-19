@extends('layout.app')
@section('content')
    <h1>Novo orçamento</h1>
        <table class="table">
            <form action="{{route('budget-store')}}" method="post">
            @csrf
            <thead>
                <th colspan="2">Novo orçamento</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <label for="created">Criação:</label>
                    </td>
                    <td>
                        {{-- Colocar o formato brasileiro em data e hora --}}
                        <input name="created" id="created" type="datetime-local" pattern="" class="datetime">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="seller_id">Vendedor:</label>
                    </td>
                    <td>
                        <select name="seller_id" id="seller_id">
                            @foreach ($sellers as $seller)
                                <option value="{{$seller->id}}">{{$seller->name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="customer_id">Cliente:</label>
                    </td>
                    <td>
                        <select name="customer_id" id="customer_id">
                            @foreach($customers as $customer)
                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="description">Descrição:</label>
                    </td>
                    <td>
                        <input type="text" name="description" id="description">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="value">Valor:</label>
                    </td>
                    <td>
                        <input type="number" name="value" id="value">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">Adicionar</button>
                    </td>
                </tr>
            </tbody>
            </form>
        </table>
@endsection
