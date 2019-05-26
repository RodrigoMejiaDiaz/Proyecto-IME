<?php

use Illuminate\Database\Seeder;

class Categoria_Articulo_CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Categoria_Articulo::class, 4)->create();
    }
}
