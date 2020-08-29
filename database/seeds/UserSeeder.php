<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Admin Insignia',
            'email' => 'salwa.es@insigniabienesraices.com',
            'password' => Hash::make('6uqEp6AN5@CcaAG'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jose',
            'email' => 'josecarlospas1@gmail.com',
            'password' => Hash::make('secret'),
        ]);
    }
}
