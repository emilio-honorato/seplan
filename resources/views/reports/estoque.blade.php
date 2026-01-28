
@extends('main')


@section('content')


            <h2 class="display-6 text-center mb-4">Estoque - Relatório</h2>
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th style="width: 34%;">Marca</th>
                            <th style="width: 22%;">Quantidade</th>
                            <th style="width: 22%;">Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dados as $item)
                        <tr>
                            <td>{{ $item->marca }}</td>
                            <td>{{ $item->quantidade }}</td>
                            <td class="text-end">R$ {{ number_format($item->total, 2, ',', '.') }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <hr>

            <div class="mt-4 text-center">
                <button type="button" class="btn btn-secondary d-print-none" onclick="window.print();">Imprimir</button>
            </div>

@endsection
