<?php

use Illuminate\Database\Seeder;
use \App\Prioridad;

class PrioridadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prioridad::create([
            'nombrePrioridad' => 'Alta',
         ]);  
         
         Prioridad::create([
            'nombrePrioridad' => 'Media',
         ]);  

         Prioridad::create([
            'nombrePrioridad' => 'Baja',
         ]);  
    }
}
