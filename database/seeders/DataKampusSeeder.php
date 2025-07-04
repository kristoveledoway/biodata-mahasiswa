<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KampusMahasiswa;
use Faker\Factory as Faker;

class DataKampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i <= 10; $i++) {
            KampusMahasiswa::create([
                "nama_kampus" => $faker->name(),
                "fakultas" => $faker->name(),
                "jurusan" => $faker->name(),
                "semester" => $faker->name(),
            ]);
        }
    }
}
