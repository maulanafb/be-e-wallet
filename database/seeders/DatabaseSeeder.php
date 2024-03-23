<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AdminUserSeeder::class);
        $this->call(OperatorCardSeeder::class);
        $this->call(DataPlanSeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(TransactionTypeSeeder::class);
    }
}
