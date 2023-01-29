<?php

namespace Database\Seeders;

use App\Models\Holiday;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $holidays = [
            ['name' => 'Confraternização Universal', 'day' => 1, 'month' => 1, 'year' => null, 'is_repeated' => true],
            ['name' => 'Paixão de Cristo', 'day' => 2, 'month' => 4, 'year' => null, 'is_repeated' => true],
            ['name' => 'Tiradentes', 'day' => 21, 'month' => 4, 'year' => null, 'is_repeated' => true],
            ['name' => 'Dia do Trabalho', 'day' => 1, 'month' => 5, 'year' => null, 'is_repeated' => true],
            ['name' => 'Corpus Christi', 'day' => 3, 'month' => 6, 'year' => null, 'is_repeated' => true],
            ['name' => 'Independência do Brasil', 'day' => 7, 'month' => 9, 'year' => null, 'is_repeated' => true],
            ['name' => 'Nossa Sr.a Aparecida - Padroeira do Brasil', 'day' => 12, 'month' => 10, 'year' => null, 'is_repeated' => true],
            ['name' => 'Finados', 'day' => 2, 'month' => 11, 'year' => null, 'is_repeated' => true],
            ['name' => 'Proclamação da República', 'day' => 15, 'month' => 11, 'year' => null, 'is_repeated' => true],
            ['name' => 'Natal', 'day' => 25, 'month' => 12, 'year' => null, 'is_repeated' => true],
        ];

        foreach ($holidays as $holiday) {
            Holiday::create($holiday);
        }
    }
}
