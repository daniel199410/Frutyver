<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $state = ['pending', 'dispatched', 'refused'];
        $id = [2, 3, 4, 5, 6, 7, 8, 9, 10];
        for($i = 0; $i < 20; $i++){
            DB::table('products')->insert([
                'reference' => str_random(15),
                'name' => str_random(6),
                'price' => rand(1000, 20000),
                'image' =>str_random(20),
                'stock' => rand(0, 200),
                'provider_id' => array_random($id)
            ]);            
        }
    }
}
