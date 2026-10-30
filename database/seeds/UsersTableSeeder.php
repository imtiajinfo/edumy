<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Mr. Admin',
            'username' => 'admin',
            'email' => 'admin@edumy.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Mr. Instructor',
            'username' => 'instructor',
            'email' => 'instructor@edumy.com',
            'password' => bcrypt('password'),
        ]);
    }
}
