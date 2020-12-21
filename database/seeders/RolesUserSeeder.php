<?php

namespace Database\Seeders;

use App\Models\Program;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RolesUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('name','Admin')->first();
        $user = User::find(1);
        $user->roles()->attach($adminRole);

        User::factory(10)->create()->each(function ($client){
            $role = Role::where('name','Client')->first();
            $program = Program::inRandomOrder()->first();
            $client->roles()->attach($role);
            $client->programs()->attach($program);
        });
    }
}
