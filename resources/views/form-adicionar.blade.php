@include('cabecalho')

<div class="container">

<h2>Adicionar Máquina</h2>

<form method="post" action="{{url('/machines/adicionar')}}">

    @csrf

    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input id="descricao" class="form-control" name="descricao" type="text">
    </div>

    <div class="form-group">
        <label for="modelo">Modelo</label>
        <input id="modelo" class="form-control" name="modelo" type="text">
    </div>

    <div class="form-group">
        <label for="patrimonio">Patrimônio</label>
        <input id="patrimonio" class="form-control" name="patrimonio" type="integer">
    </div>

    <button class="btn btn-primary" type="submit">Salvar</button>

</form>

</div>

@include('rodape')
