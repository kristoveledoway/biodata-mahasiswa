<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AsramaMahasiswa;
use Faker\Factory as Faker;

class DataAsramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i <= 10; $i++) {
            AsramaMahasiswa::create([
                "nama_asrama" => $faker->name(),
                "alamat" => $faker->address(),
                "no_kamar" => $faker->name(),
            ]);
        }
    }
}
