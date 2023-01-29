<?php

namespace Database\Seeders;

use App\Models\TypeCustomer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeCustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name' => 'Indefinido'],
            ['name' => 'Física'],
            ['name' => 'Jurídica'],
        ];

        foreach ($types as $type) {
            TypeCustomer::create($type);
        }
    }
}
