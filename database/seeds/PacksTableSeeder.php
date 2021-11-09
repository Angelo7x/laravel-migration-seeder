<?php

use Illuminate\Database\Seeder;
use App\Pack;
use Faker\Generator as Faker;

class PacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {

            $newPack = new Pack();
            $newPack -> titolo = $faker ->realText($maxNbChars = 50, $indexSize = 2);
            $newPack -> descrizione = $faker ->realTextBetween($minNbChars = 160, $maxNbChars = 300, $indexSize = 2);
            $newPack -> durata = $faker->numberBetween(1, 7);
            $newPack -> località = $faker ->city();
            $newPack -> data_di_partenza = $faker->date();
            $newPack -> data_di_ritorno = $faker->date();
            $newPack -> servizi = $faker ->realTextBetween($minNbChars = 100, $maxNbChars = 150, $indexSize = 2);
            $newPack -> categoria = $faker ->realTextBetween($minNbChars = 10, $maxNbChars = 40, $indexSize = 2);
            $newPack -> condizioni_meteo = $faker ->realTextBetween($minNbChars = 20, $maxNbChars = 50, $indexSize = 2);
            $newPack -> temperatura = $faker->numberBetween($min = 0, $max = 35);
            $newPack -> prezzo = $faker->randomFloat(2, 100, 500);
            $newPack -> save();
            
        }
    }
}
