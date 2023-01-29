<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StatesTableSeeder::class,
            BanksTableSeeder::class,
            CitiesTableSeeder::class,
            CommitmentSituationTableSeeder::class,
            GendersTableSeeder::class,
            HolidaysTableSeeder::class,
            IssuingInstitutionTableSeeder::class,
            KinshipsTableSeeder::class,
            MaritalStatusTableSeeder::class,
            OccupationsTableSeeder::class,
            PaymentMethodsTableSeeder::class,
            SituationsTableSeeder::class,
            TypeActionsTableSeeder::class,
            TypeAddressTableSeeder::class,
            TypeCustomersTableSeeder::class,
            TypeDefendersTableSeeder::class,
            TypeJusticesTableSeeder::class,
            TypePhonesTableSeeder::class,
            TypeProcessTableSeeder::class
        ]);
    }
}
