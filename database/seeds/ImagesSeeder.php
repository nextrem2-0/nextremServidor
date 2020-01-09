<?php

use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            ['nombre' => 'banner.jpg'],
            ['nombre' => 'slider1.jpg'],
            ['nombre' => 'slider2.jpg'],
            ['nombre' => 'slider3.jpg'],
            ['nombre' => 'slider4.jpg'],
            ['nombre' => 'slider5.jpg']
        ]);
    }
}
