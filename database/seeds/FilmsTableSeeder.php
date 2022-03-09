<?php

use Illuminate\Database\Seeder;
use App\Film;
use Faker\Generator as Faker;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $film= new Film();
            $film->title='stringa';
            $film->year='2021';
            $film->language='stringa';

            $film->save();
        }
    }
}
