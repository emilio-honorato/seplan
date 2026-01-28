<style>
@media print {
    nav, footer, .btn {
        display: none;
    }
}
</style>

<h2>Relatório de Estoque</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Marca</th>
            <th>Quantidade</th>
            <th>Valor Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dados as $item)
        <tr>
            <td>{{ $item->marca }}</td>
            <td>{{ $item->quantidade }}</td>
            <td>R$ {{ number_format($item->total, 2, ',', '.') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<button onclick="window.print()" class="btn btn-primary">Imprimir</button>
