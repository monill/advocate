<?php

namespace Database\Seeders;

use App\Models\TypeAction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name' => 'Civil'],
            ['name' => 'Penal'],
            ['name' => 'Tributária']
        ];

        foreach ($types as $type) {
            TypeAction::create($type);
        }
    }
}
