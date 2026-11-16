@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $erro)
            <li>{{ $erro }}</li>
        @endforeach
    </ul>
@endif

<label>Modelo
    <input type="text" name="modelo" maxlength="100" required
           value="{{ old('modelo', $veiculo->modelo ?? '') }}">
</label>

<label>Data de aquisição
    <input type="date" name="data_aquisicao" required
           value="{{ old('data_aquisicao', substr((string) ($veiculo->data_aquisicao ?? ''), 0, 10)) }}">
</label>

<label>Placa
    <input type="text" name="placa" id="placa" maxlength="15" required
           value="{{ old('placa', $veiculo->placa ?? '') }}">
</label>

<label>Tipo de acessibilidade
    <select name="tipo_acessibilidade_id" required>
        <option value="">Selecione...</option>
        @foreach ($tipos as $tipo)
            <option value="{{ $tipo->id }}"
                @selected(old('tipo_acessibilidade_id', $veiculo->tipo_acessibilidade_id ?? '') == $tipo->id)>
                {{ $tipo->nome }}
            </option>
        @endforeach
    </select>
</label>

<button type="submit">Salvar</button>
<a href="{{ url()->previous() }}">Voltar</a>
