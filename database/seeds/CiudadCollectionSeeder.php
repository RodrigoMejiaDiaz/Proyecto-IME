<?php

use Illuminate\Database\Seeder;

class CiudadCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Ciudad::class, 5)->create();
    }
}
