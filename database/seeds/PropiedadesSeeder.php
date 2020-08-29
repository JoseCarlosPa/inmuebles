<?php

use Illuminate\Database\Seeder;

class PropiedadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('propiedads')->insert([
            'name' => 'Casa',

        ]);
        DB::table('propiedads')->insert([
            'name' => 'Edificio',

        ]);
        DB::table('propiedads')->insert([
            'name' => 'Terreno',

        ]);
        DB::table('propiedads')->insert([
            'name' => 'Local comercial',

        ]);
        DB::table('propiedads')->insert([
            'name' => 'Bodega',

        ]);
        DB::table('propiedads')->insert([
            'name' => 'Bodega industrial',

        ]);
        DB::table('propiedads')->insert([
            'name' => 'Terreno industrial',

        ]);
        DB::table('propiedads')->insert([
            'name' => 'Nave Industrial',

        ]);
    }
}









