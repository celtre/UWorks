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
        DB::table('Users')->truncate();
        factory(App / User::class)->create([
            'name' => 'Snayder',
            'email' => 'snayder@hotmail.com',
            'password' => bcrypt('123456')
        ]);
        factory(App / User::class, 50)->create();
    }
}
