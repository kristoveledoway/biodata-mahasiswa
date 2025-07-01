<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BiodataMahasiswa;
use Faker\Factory as Faker;

class DataMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i <= 10; $i++) {
            BiodataMahasiswa::create([
                "nama" => $faker->name(),
                "jk" => $faker->randomElement(["Laki-laki", "Perempuan"]),
                "tgl_lahir" => $faker->date(),
                "umur" => $faker->numberBetween(20, 30),
                "alamat" => $faker->address(),
                "nohp" => $faker->phoneNumber(),
            ]);
        }
    }
}
