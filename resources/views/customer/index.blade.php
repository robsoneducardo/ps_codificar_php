@extends('layout.app')
@section('content')
    <h1>Lista de Clientes</h1>
    <table>
        <tr>
            <form action="{{route('customer-store')}}" method="post">
                @csrf
                <td>
                    <label for="customerName">Nome: </label>
                    <input type="text" name="name" id="customerName" onblur="refreshName()"
                        placeholder="Adicionar ou Atualizar">
                </td>
                <td colspan="2">
                    <button type="submit">Adicionar</button>
                </td>
            </form>
        </tr>
    @foreach ($customers as $customer)
        <tr>
            <td>{{$customer->name}}</td>
            <!-- <td><input type="button" value="Atualizar"></td> -->
            <td>
                <form action="{{route('customer-update', ['id'=>$customer->id])}}", method="POST">
                @csrf
                @method('PUT')
                    <input type="hidden" name="name" id="customerNameUpdate">
                    <button type="submit">Atualizar</button>
                </form>
            </td>
            <td>
                <form action="{{route('customer-destroy', ['id'=>$customer->id])}}" method="POST" >
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Excluir">
                </form>
            </td>
        </tr>
    @endforeach
</table>

<script>
    // fulfill all hidden entries with the content of the visible text input,
    // so you can update any item using the same entry point.
    function refreshName (){
        const nameFields = document.getElementsByName("name");
        console.log(nameFields);
        for (let nameField of nameFields){
            nameField.value = document.getElementById("customerName").value;;
        }
    }
</script>

@endsection
