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
            ['nombre' => 'banner1.jpg'],
            ['nombre' => 'banner2.jpg'],
            ['nombre' => 'banner3.jpg'],
            ['nombre' => 'banner4.jpg'],
            ['nombre' => 'banner5.jpg'],
            ['nombre' => 'banner6.jpg']
        ]);
    }
}
