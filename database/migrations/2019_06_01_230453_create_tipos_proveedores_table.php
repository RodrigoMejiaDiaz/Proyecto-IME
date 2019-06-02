<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposProveedoresTable extends Migration
{

    public function up()
    {

    }

    public function down()
    {
        Schema::dropIfExists('tipos_proveedores');
    }
}
