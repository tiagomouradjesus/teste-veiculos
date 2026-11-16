<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoAcessibilidadeSeeder extends Seeder
{
    public function run(): void
    {
        $tipos = ['Rampa de acesso', 'Elevador veicular', 'Piso rebaixado', 'Controles manuais', 'Cadeira giratória'];

        foreach ($tipos as $nome) {
            DB::table('tipos_acessibilidade')->insert([
                'nome' => $nome,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
