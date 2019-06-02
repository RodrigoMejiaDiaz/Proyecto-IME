<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    
    public function up()
    {

    }

    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
