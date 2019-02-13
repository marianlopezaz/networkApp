<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Evento;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    Evento::create([
        'nombreEvento' => 'cumpleaños',
          'fechaEvento' => '2018-10-24',
          'horaEvento' => '20:00',
          'detalleEvento' => 'llevar regalo',
          'user_id' => '1',
   
     ]);    

     
     //factory(Evento::class,5)->create();

}


}
