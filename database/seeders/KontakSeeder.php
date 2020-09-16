<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 20; $i++) {
            DB::table('kontaks')->insert([
                'nama' => $faker->name,
                'email' => $faker->unique()->email,
                'alamat' => $faker->address,
                'nohp' => $faker->phoneNumber
            ]);
        }
    }
}
