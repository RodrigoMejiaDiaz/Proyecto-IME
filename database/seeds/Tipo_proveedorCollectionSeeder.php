<?php

use Illuminate\Database\Seeder;

class Tipo_proveedorCollectionSeeder extends Seeder
{

    public function run()
    {
        factory(App\Tipo_proveedor::class, 3)->create();
    }
}
