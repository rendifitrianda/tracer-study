<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bagian>
 */
class BagianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('id_ID');
        $prodiId = $this->faker->numberBetween(1, 13);
        $pilihan = $faker->randomElement(['Bagian I', 'Bagian II', 'Bagian III', 'Bagian IV' , 'Bagian V']);
        $pertanyaan = [];
        for ($i = 1; $i <= 100; $i++) {
            $pertanyaan[] = $faker->realText($maxNbChars = 70, $indexSize = 2);
        }

        return [
            'prodi_id' =>$prodiId, // Ganti rentang sesuai dengan prodi_id yang Anda miliki
            'nama' =>  $pilihan,
            'title' => $faker->randomElement($pertanyaan),
            // tambahkan kolom lain yang mungkin Anda butuhkan untuk kuisioner
        ];
    }
}
