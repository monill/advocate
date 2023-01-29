<?php

namespace Database\Seeders;

use App\Models\TypeDefender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeDefendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name' => 'Advogado'],
            ['name' => 'Promotor de Justiça']
        ];

        foreach ($types as $type) {
            TypeDefender::create($type);
        }
    }
}
