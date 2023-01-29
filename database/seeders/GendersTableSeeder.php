<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = [
            ['name' => 'Indefinido'],
            ['name' => 'Feminino'],
            ['name' => 'Masculino']
        ];

        foreach ($genders as $gender) {
            Gender::create($gender);
        }
    }
}
