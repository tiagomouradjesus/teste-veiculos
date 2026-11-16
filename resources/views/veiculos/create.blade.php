<link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

<h1>Cadastrar veículo</h1>

<form action="{{ url('/veiculos') }}" method="POST" novalidate>
    @csrf
    @includeIf('veiculos._form')
</form>
