<?php

use Illuminate\Database\Seeder;

class BillsTableSeeder extends Seeder
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
            DB::table('bills')->insert([
                'amount' => rand(1, 100),
                'product_id' => rand(1, 20),
                'order_id' => rand(3, 22)
            ]);            
        }
    }
}
