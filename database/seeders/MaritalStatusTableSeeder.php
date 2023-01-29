<?php

namespace Database\Seeders;

use App\Models\MaritalStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaritalStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            ['name' => 'Indefinido'],
            ['name' => 'Casado'],
            ['name' => 'Solteiro'],
            ['name' => 'Divorciado'],
            ['name' => 'Separado judicialmente'],
            ['name' => 'Viúvo'],
        ];

        foreach ($statuses as $status) {
            MaritalStatus::create($status);
        }
    }
}
