@extends('main')

@section('title', 'Lista de Veículos')

@section('content')
    <h2 class="display-6 text-center mb-4">
        Lista de veículos -
        <a href="{{ route('veiculos.create') }}" class="btn btn-primary mb-2">Novo Veículo</a>
    </h2>

    <table class="table table-splited">
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>

        @foreach ($vehicles as $v)
        <tr>
            <td>{{ $v->marca }}</td>
            <td>{{ $v->modelo }}</td>
            <td>{{ $v->ano }}</td>
            <td>R$ {{ number_format($v->preco, 2, ',', '.') }}</td>
            <td>
                <a href="{{ route('veiculo.edit', $v) }}" class="btn btn-sm btn-warning">
                    Editar
                </a>

                <form action="{{ route('veiculos.destroy', $v) }}"
                    method="POST"
                    style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{  $vehicles->links() }}
@endsection