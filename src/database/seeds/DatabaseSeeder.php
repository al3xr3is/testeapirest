<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(AnuncianteTableSeeder::class);
        // $this->call(PecaTableSeeder::class);
        $this->call(PedidoTableSeeder::class);


    }
}
