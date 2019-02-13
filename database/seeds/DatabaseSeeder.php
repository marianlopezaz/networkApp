<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'users',
            'evento',
            'contacto',
        ]);
        $this->call(UserSeeder::class);
        $this->call(EventosSeeder::class);
        $this->call(PaisSeeder::class);
        $this->call(ProvinciaSeeder::class);
        $this->call(PrioridadSeeder::class);
        $this->call(ContactoSeeder::class);
    }


    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        foreach($tables as $table )
        {
            DB::table($table)->truncate();  
        }
         DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
