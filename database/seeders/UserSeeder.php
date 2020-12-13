<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(['phone' => '+375293164122', 'password' => Hash::make('secret')
            ,'email' => 'crystal@crystalapps.by'])->create();
    }
}
