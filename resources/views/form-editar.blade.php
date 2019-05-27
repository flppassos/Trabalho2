@include('cabecalho')

<div class="container">

<h2>Editar Equipamentos</h2>
<hr />

<form method="post" action="{{url('/machines/editar')}}">

    @csrf

    <input type="hidden" name="id" value="{{$machine->id}}">

    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input id="descricao" class="form-control" name="descricao" type="text"
        value="{{$machine->descricao}}">
    </div>

    <div class="form-group">
        <label for="modelo">Modelo</label>
        <input id="modelo" class="form-control" name="modelo" type="text"
        value="{{$machine->modelo}}">
    </div>

    <div class="form-group">
        <label for="patrimonio">Patrimônio</label>
        <input id="patrimonio" class="form-control" name="patrimonio" type="integer"
        value="{{$machine->patrimonio}}">
    </div>

    <button class="btn btn-primary" type="submit">Salvar</button>

</form>

</div>

@include('rodape')
