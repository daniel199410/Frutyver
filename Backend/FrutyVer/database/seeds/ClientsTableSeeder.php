<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 11; $i <= 20; $i++){
            DB::table('clients')->insert([
                'user_id' => $i
            ]);            
        }
    }
}
