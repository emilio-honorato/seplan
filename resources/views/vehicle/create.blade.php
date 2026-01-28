@extends('main')

@section('title', isset($veiculo) ? 'Editar Veículo' : 'Cadastrar Veículo')

@section('content')
    <form method="POST"
        action="{{ isset($veiculo) ? route('veiculo.update', $veiculo) : route('veiculo.store') }}">
        @csrf
        @isset($veiculo)
            @method('PUT')
        @endisset

        <div class="mt-4">
            Marca:
        <input name="marca" class="form-control" value="{{ old('marca', $veiculo->marca ?? '') }}">
        </div>

        <div class="mt-4">
            Modelo:
        <input name="modelo" class="form-control" value="{{ old('modelo', $veiculo->modelo ?? '') }}">
        </div>

        <div class="mt-4">
            Ano:
        <input name="ano" class="form-control" type="number" value="{{ old('ano', $veiculo->ano ?? '') }}">
        </div>

        <div class="mt-4">
            Preço:
        <input name="preco" class="form-control" type="number" step="0.01" value="{{ old('preco', $veiculo->preco ?? '') }}">
        </div>

        <div class="mt-4">
            Descrição:
        <textarea class="form-control" name="descricao">{{ old('descricao', $veiculo->descricao ?? '') }}</textarea>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/veiculos" class="btn btn-secondary">Voltar</a>
        </div>
    </form>
@endsection