<link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

<h1>Editar veículo</h1>

<form action="{{ url('/veiculos/' . $veiculo->id) }}" method="POST">
    @csrf
    @method('PUT')
    @foreach ($veiculo->getAttributes() as $campo => $valor)
        @if (!in_array($campo, ['id', 'created_at', 'updated_at']))
            <label for="{{ $campo }}">{{ ucfirst(str_replace('_', ' ', $campo)) }}</label>
            <input type="text" id="{{ $campo }}" name="{{ $campo }}" value="{{ old($campo, $valor) }}">
        @endif
    @endforeach
    <button type="submit">Salvar</button>
</form>
