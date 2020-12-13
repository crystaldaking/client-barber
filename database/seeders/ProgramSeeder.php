<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->insert([
           'name' => 'Basic',
           'rank' => 1
        ]);

        DB::table('programs')->insert([
            'name' => 'Gold',
            'rank' => 2
        ]);

        DB::table('programs')->insert([
            'name' => 'Platinum',
            'rank' => 3
        ]);
    }
}
