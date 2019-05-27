@include('cabecalho')

<div class="container">

<h2>Máquinas - Inventário</h2>

<a href="{{url('/machines/form-adicionar')}}" class="btn btn-primary float-right mb-2">
    Cadastrar</a>

<table class="table table-striped table-dark">
    <tr>
        <th>Id</th>
        <th>Descrição</th>
        <th>Modelo</th>
        <th>Patrimônio</th>
        <th>Data</th>
        <th>Opções</th>
    </tr>
    @forelse ($machines as $machine)
        <tr>
            <td> {{$machine->id}} </td>
            <td> {{$machine->descricao}} </td>
            <td> {{$machine->modelo}} </td>
            <td> {{$machine->patrimonio}} </td>
            <td> {{$machine->created_at}} </td>
            <td>
                <a class="btn btn-outline-secondary" href="{{url('/machines/editar/' . $machine->id)}}">
                    Editar
                </a>
                <a class="btn btn-outline-secondary" href="{{url('/machines/excluir/' . $machine->id)}}">
                    Excluir
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">Nenhum Equipamento Cadastrado</td>
        </tr>
    @endforelse
</table>

</div>

@include('rodape')
