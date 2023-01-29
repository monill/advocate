<?php

namespace Database\Seeders;

use App\Models\TypeCase;
use App\Models\TypeProcess;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeProcessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name' => 'Administrativo'],
            ['name' => 'Judicial']
        ];

        foreach ($types as $type) {
            TypeProcess::create($type);
        }
    }
}
