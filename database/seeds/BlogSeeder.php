<?php

use Illuminate\Database\Seeder;
use App\blogs;

class BlogSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 200; $i++) {
            $product = new blogs();
            $product->titel = $faker->text(10);
            $product->autheur = $faker->name();
            $product->shortDES = $faker->text(25);
            $product->longDES = $faker->text(100);
            $product->datum = new \DateTime();
            $product->plaats = $faker->country() . ', ' . $faker->city();
            $product->image = 'test.jpg';
            $product->save();
        }
    }
}
