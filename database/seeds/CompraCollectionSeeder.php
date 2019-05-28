<?php

use Illuminate\Database\Seeder;

class CompraCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Compra::class, 5)->create();
    }
}
