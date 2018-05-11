<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++){
            DB::table('users')->insert([
                'username' => str_random(6),
                'name' => str_random(6),
                'lastname' => str_random(6),
                'password' => bcrypt('secret'),
            ]);            
        }
    }
}
