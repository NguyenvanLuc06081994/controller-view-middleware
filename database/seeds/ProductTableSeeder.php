<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product1 = new \App\Product();
        $product1->name = 'iphone';
        $product1->color = 'red';
        $product1->price = '10000';
        $product1->category = 'iphone';
        $product1->save();
    }
}
