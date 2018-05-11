<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
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
            DB::table('orders')->insert([
                'state' => array_random($state),
                'provider_id' => array_random($id),
                'client_id' => array_random($id),
            ]);            
        }
    }
}
