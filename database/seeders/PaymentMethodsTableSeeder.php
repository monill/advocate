<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $methods = [
            ['name' => 'Boleto Bancário'],
            ['name' => 'Cartão de Crédito'],
            ['name' => 'Cartão de Débito'],
            ['name' => 'Cheque'],
            ['name' => 'Dinheiro'],
            ['name' => 'Gratuito'],
            ['name' => 'PIX'],
            ['name' => 'Transferência bancária']
        ];

        foreach ($methods as $method) {
            PaymentMethod::create($method);
        }
    }
}
