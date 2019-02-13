<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'nameUsu' => 'Mariano',
            'email' => 'marianolopez@gmail.com',
            'password' => bcrypt('mariano1424'),
           
         ]);
        
    }
}
