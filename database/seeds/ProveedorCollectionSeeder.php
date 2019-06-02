<?php

use Illuminate\Database\Seeder;

class ProveedorCollectionSeeder extends Seeder
{

    public function run()
    {
        factory(App\Proveedor::class, 7)->create();
    }
}
