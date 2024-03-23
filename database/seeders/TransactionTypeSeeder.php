<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaction_types')->insert([
            'name' => 'transfer',
            'code' => 'transfer',
            'action' => 'dr',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
