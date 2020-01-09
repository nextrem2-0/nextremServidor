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
        $this->call(DeportesSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(ImagesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(EventosSeeder::class);
    }
}
