<?php

use Illuminate\Database\Seeder;

class AteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
       //
       for ($i = 1; $i <= 50; $i++) {
           DB::table('ates')->insert([
               'foodName' => str_random(10),
           ]);
       }
   }
}
