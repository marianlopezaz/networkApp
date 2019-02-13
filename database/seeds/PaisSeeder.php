<?php

use Illuminate\Database\Seeder;
use \App\Pais;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // factory(Pais::class,1)->create();

       Pais::create([
        'nombrePais' => 'Argentina',
     ]);  
     
     Pais::create([
        'nombrePais' => 'Chile',
     ]);    


    }
}
