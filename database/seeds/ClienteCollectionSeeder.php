<?php

use Illuminate\Database\Seeder;

class ClienteCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cliente::class, 20)->create();
    }
}
