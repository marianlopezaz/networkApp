<?php

use Illuminate\Database\Seeder;
use \App\Provincia;
class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia::create([
            'nombreProvincia' => 'San Juan',
            'pais_id' => '1',
         ]);    

         Provincia::create([
            'nombreProvincia' => 'La Serena',
            'pais_id' => '2',
         ]);    
    }
}
