<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('contratos')->insert([
                'dinero' => 123.21,
                'client_id' => $i
            ]);
            DB::table('contratos')->insert([
                'dinero' => 123.21,
                'client_id' => $i
            ]);
        }
    }
}
