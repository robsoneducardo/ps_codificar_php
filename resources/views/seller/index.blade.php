@extends('layout.app')
@section('content')
    <h1>Lista de Vendedores</h1>
    <table>
        <tr>
            <form action="{{route('seller-store')}}" method="post">
                @csrf
                <td>
                    <label for="sellerName">Nome: </label>
                    <input type="text" name="name" id="sellerName" onblur="refreshName()"
                        placeholder="Adicionar ou Atualizar">
                </td>
                <td colspan="2">
                    <button type="submit">Adicionar</button>
                </td>
            </form>
        </tr>
    @foreach ($sellers as $seller)
        <tr>
            <td>{{$seller->name}}</td>
            <!-- <td><input type="button" value="Atualizar"></td> -->
            <td>
                <form action="{{route('seller-update', ['id'=>$seller->id])}}", method="POST">
                @csrf
                @method('PUT')
                    <input type="hidden" name="name" id="sellerNameUpdate">
                    <button type="submit">Atualizar</button>
                </form>
            </td>
            <td>
                <form action="{{route('seller-destroy', ['id'=>$seller->id])}}" method="POST" >
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
            nameField.value = document.getElementById("sellerName").value;;
        }
    }
</script>

@endsection
