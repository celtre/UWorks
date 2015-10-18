<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      DB::table('files')->insert([
          'nombre' => "movimiento circular",
          'descripcion' => $faker->paragraph(),
          'tipo' => "libro",
          'materia' => "fisicaI",
          'created_at' => $faker->dateTime(),
          'updated_at' => $faker->dateTime()

      ]);


    }
}
