<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoAcessibilidade extends Model
{
  protected $table = 'tipos_acessibilidade';
  protected $fillable = ['nome'];
}
