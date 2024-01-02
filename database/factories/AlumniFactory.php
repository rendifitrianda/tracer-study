<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumni>
 */
class AlumniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('id_ID');

        $gender = $faker->randomElement(['Laki-laki', 'Perempuan']);
        $agama = $faker->randomElement(['Islam', 'Kristen', 'Khatolik', 'Hindu', 'Budha', 'Konghuchu']);

        return [
            'prodi_id' => 13,
            'nama' => $faker->name,
            'nik' => $faker->creditCardNumber,
            'ipk' => $faker->randomDigitNot(5),
            'nim' => $faker->creditCardNumber,
            'tahun_masuk' => $faker->date($format = 'Y', $max = 'now'),
            'tahun_lulus' => $faker->date($format = 'Y', $max = 'now'),
            'jenis_kelamin' => $gender,
            'agama' => $agama,
            'tempat_lahir' => $faker->city,
            'tanggal_lahir' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'alamat' => $faker->address,
            'no_hp' => $faker->randomDigitNot(12),
            'email' => $faker->freeEmail,
            'password' => bcrypt(12345),
            'foto' => null,
        ];
    }
}
