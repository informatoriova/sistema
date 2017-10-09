<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as F;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $faker = F::create('App\Product');
     	for ($i=0; $i <50 ; $i++) { 
     		DB::table('products')->insert([
     		'producto'=>$faker->sentence(2),
     		'descripcion'=>$faker->text($maxNbChars = 200),
     		'precio'=>$faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 300),
     	]);  
     	}
     	
    }
}
