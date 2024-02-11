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
        		'name' => 'Admin',
        		'email' => 'admin@gmail.com',
        		'password' => bcrypt('123456'),

        ]);

         DB::table('users')->insert([
        		'role_id' => '2 ',
        		'name' => 'Editor',
        		'email' => 'editor@gmail.com',
        		'password' => bcrypt('123456'),

        ]);
    }
}
