<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Contacto;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Contacto::class,5)->create();

        Contacto::create([
            'nameCont' => 'Pedro',
            'lastNameCont' => 'Alonso',
            'email' => 'pedroA@gmail.com',
            'lastNameCont' => 'Alonso',
            'telefono' => '123456789',
            'provincia_id' => '1',
            'prioridad_id' => '1',
            'user_id' => '1',
         ]);    
    

}

}