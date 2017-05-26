<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
            'name' => 'Admin',
            'description' => 'Admin',
        ]);
        DB::table('rols')->insert([
            'name' => 'Client',
            'description' => 'Client',
        ]);

        DB::table('users')->insert([
            'name' => 'Luis',
            'email' => 'blink242@outlook.com',
            'password' => bcrypt('1234'),
            'rol_id' => 1
        ]);
    }
}
