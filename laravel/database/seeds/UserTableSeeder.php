<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        factory('App/User::class')->create([
            'name' => 'Snayder',
            'email' => 'snayder@hotmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
