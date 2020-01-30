<?php

use Illuminate\Database\Seeder;

class AnuncianteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Anunciante::class, 20)->create();
    }
}
