<?php

namespace Database\Seeders;

use App\Models\TypeAddress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name' => 'Residencial'],
            ['name' => 'Comercial'],
            ['name' => 'Entregas']
        ];

        foreach ($types as $type) {
            TypeAddress::create($type);
        }
    }
}
