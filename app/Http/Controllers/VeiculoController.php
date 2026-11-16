<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVeiculoRequest;
use App\Http\Requests\UpdateVeiculoRequest;
use App\Models\TipoAcessibilidade;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    private function renderOrJson(string $viewName, array $data = [])
    {
        $view = $viewName;

        if (! view()->exists($view)) {
            return response()->json($data);
        }

        return view($view, $data);
    }

    public function index()
    {
        $veiculos = Veiculo::with('tipoAcessibilidade')->get();

        return $this->renderOrJson('veiculos.index', ['veiculos' => $veiculos]);
    }

    public function create()
    {
        $tipos = TipoAcessibilidade::all();

        return $this->renderOrJson('veiculos.create', ['tipos' => $tipos]);
    }

    public function store(StoreVeiculoRequest $request)
    {
        Veiculo::create($request->validated());

        return redirect('/veiculos')->with('sucesso', 'Veículo cadastrado!');
    }

    public function edit(Veiculo $veiculo)
    {
        $tipos = TipoAcessibilidade::all();

        return $this->renderOrJson('veiculos.edit', ['veiculo' => $veiculo, 'tipos' => $tipos]);
    }

    public function update(UpdateVeiculoRequest $request, Veiculo $veiculo)
    {
        $veiculo->update($request->validated());

        return redirect('/veiculos')->with('sucesso', 'Veículo atualizado!');
    }

    public function destroy(Veiculo $veiculo)
    {
        $veiculo->delete();

        return redirect('/veiculos')->with('sucesso', 'Veículo excluído!');
    }
}
