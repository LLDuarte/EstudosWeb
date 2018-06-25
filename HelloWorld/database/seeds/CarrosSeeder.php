<?php

use Illuminate\Database\Seeder;

class CarrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i=0; $i<20; $i++) {
    		DB::table('carros')->insert([
    			'marca' => str_random(10),
    			'modelo' => str_random(10),
    			'ano' => rand(1900, 2020),
    		]);
    	}
    }
}
