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
        $this->call(PaisCollectionSeeder::class);
        $this->call(CiudadCollectionSeeder::class);
        $this->call(UserCollectionSeeder::class);
        //$this->call(ClienteCollectionSeeder::class);
        $this->call(Categoria_Articulo_CollectionSeeder::class);
        $this->call(ArticuloCollectionSeeder::class);
    }
}
