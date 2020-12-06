<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('price');
            $table->text('description');
            $table->integer('stock');
            $table->string('img_path');
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
