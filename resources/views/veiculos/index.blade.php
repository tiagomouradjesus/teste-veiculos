<link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

<h1>Veículos</h1>

@if (session('sucesso'))
    <p>{{ session('sucesso') }}</p>
@endif

<a href="{{ url('/veiculos/create') }}">Cadastrar veículo</a>

<table>
    <thead>
        <tr>
            <th>Modelo</th>
            <th>Data de aquisição</th>
            <th>Placa</th>
            <th>Acessibilidade</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($veiculos as $veiculo)
            <tr>
                <td>{{ $veiculo->modelo }}</td>
                <td>{{ \Carbon\Carbon::parse($veiculo->data_aquisicao)->format('d/m/Y') }}</td>
                <td>{{ $veiculo->placa }}</td>
                <td>{{ $veiculo->tipoAcessibilidade?->nome }}</td>
                <td>
                    <a href="{{ url('/veiculos/' . $veiculo->id . '/edit') }}">Editar</a>
                    <form action="{{ url('/veiculos/' . $veiculo->id) }}" method="POST"
                          onsubmit="return confirm('Excluir este veículo?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5">Nenhum veículo cadastrado.</td></tr>
        @endforelse
    </tbody>
</table>
