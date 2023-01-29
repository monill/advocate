<?php

namespace Database\Seeders;

use App\Models\TypePhone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypePhonesTableSeeder extends Seeder
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
            ['name' => 'Celular'],
            ['name' => 'FAX'],
            ['name' => 'Recados']
        ];

        foreach ($types as $type) {
            TypePhone::create($type);
        }
    }

}
