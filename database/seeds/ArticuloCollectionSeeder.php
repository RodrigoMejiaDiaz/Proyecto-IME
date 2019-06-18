<?php

use Illuminate\Database\Seeder;

class ArticuloCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Articulo::class, 20)->create();
    }
}
