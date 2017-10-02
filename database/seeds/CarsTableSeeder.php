<?php

use App\Car;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'name' => 'Ducky 1',
            'model' => 'Hyundai i30',
            'price' => '28000'
        ]);

        DB::table('cars')->insert([
            'name' => 'Ducky 2',
            'model' => 'Kia Sportage',
            'price' => '29000'
        ]);

        DB::table('cars')->insert([
            'name' => 'Ducky 3',
            'model' => 'Toyota Yaris',
            'price' => '18000'
        ]);
        
         DB::table('cars')->insert([
            'name' => 'Ducky 4',
            'model' => 'Audi A1',
            'price' => '29000'
        ]);    
    }
}
