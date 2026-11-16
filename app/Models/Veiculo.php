<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = ['modelo', 'data_aquisicao', 'placa', 'tipo_acessibilidade_id'];
    public function tipoAcessibilidade()
    {
        return $this->belongsTo(TipoAcessibilidade::class);
    }
}
