<?php

namespace Database\Seeders;

use App\Models\Situation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SituationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $situations = [
            ['name' => 'Ativo'],
            ['name' => 'Inativo'],
            ['name' => 'Cancelado'],
            ['name' => 'Arquivado'],
            ['name' => 'Sobrestado'],
        ];

        foreach ($situations as $situation) {
            Situation::create($situation);
        }
    }
}
