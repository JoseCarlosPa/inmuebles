<?php

use Illuminate\Database\Seeder;

class UbicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ubicacions')->insert([
            'name' => 'Baja California Sur',

        ]);
        DB::table('ubicacions')->insert([
            'name' => 'Queretaro',

        ]);
        DB::table('ubicacions')->insert([
            'name' => 'Guanajuato',

        ]);
        DB::table('ubicacions')->insert([
            'name' => 'San Luis Potosí',

        ]);
    }
}
