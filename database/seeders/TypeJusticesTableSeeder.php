<?php

namespace Database\Seeders;

use App\Models\TypeJustice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeJusticesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name' => 'Justiça Comum - ESTADUAL'],
            ['name' => 'Justiça Comum - FEDERAL'],
            ['name' => 'Justiça Especializada - TRE'],
            ['name' => 'Justiça Especializada - TRT'],
            ['name' => 'STF'],
            ['name' => 'STJ'],
            ['name' => 'TSE'],
            ['name' => 'TST']
        ];

        foreach ($types as $type) {
            TypeJustice::create($type);
        }
    }
}
