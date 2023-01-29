<?php

namespace Database\Seeders;

use App\Models\CommitmentSituation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommitmentSituationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $situations = [
            ['name' => 'Marcado'],
            ['name' => 'Confirmado'],
            ['name' => 'Realizado'],
            ['name' => 'Finalizado'],
        ];

        foreach ($situations as $situation) {
            CommitmentSituation::create($situation);
        }
    }
}
