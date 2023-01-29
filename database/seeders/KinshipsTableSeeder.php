<?php

namespace Database\Seeders;

use App\Models\Kinship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KinshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kinships = [
            ['name' => 'Avó'],
            ['name' => 'Avô'],
            ['name' => 'Bisavô'],
            ['name' => 'Bisavó'],
            ['name' => 'Bisneta'],
            ['name' => 'Bisneto'],
            ['name' => 'Concunhada'],
            ['name' => 'Concunhado'],
            ['name' => 'Cunhada'],
            ['name' => 'Cunhado'],
            ['name' => 'Esposa'],
            ['name' => 'Esposo'],
            ['name' => 'Filha'],
            ['name' => 'Filho'],
            ['name' => 'Filial'],
            ['name' => 'Genro'],
            ['name' => 'Irmã'],
            ['name' => 'Irmão'],
            ['name' => 'Mãe'],
            ['name' => 'Matriz'],
            ['name' => 'Neta'],
            ['name' => 'Neto'],
            ['name' => 'Nora'],
            ['name' => 'Pai'],
            ['name' => 'Prima'],
            ['name' => 'Primo'],
            ['name' => 'Sobrinha'],
            ['name' => 'Sobrinha Neta'],
            ['name' => 'Sobrinho'],
            ['name' => 'Sobrinho Neto'],
            ['name' => 'Sócio'],
            ['name' => 'Sogra'],
            ['name' => 'Sogro'],
            ['name' => 'Tia'],
            ['name' => 'Tia Avó'],
            ['name' => 'Tio'],
            ['name' => 'Tio Avô']
        ];

        foreach ($kinships as $kinship) {
            Kinship::create($kinship);
        }
    }
}
